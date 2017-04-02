<?php

use Nette\Application\UI\Control,
    Nette\Application\UI\Form,
    App\Model\CartIDModel,
    App\Model\BrokenUrlModel,
    App\Model\VersionService;

use Kdyby\Translation\Translator;
use Tracy\Debugger;

class ProductPriceSearch extends Control
{

    const MAX_CART_ITEMS = 5;
    const MIN_ITEM_COST = 100;

    /** @var CartIDModel */
    private $cartIDs;

    /** @var BrokenUrlModel */
    private $brokenUrl;

    /** @var VersionService */
    private $versions;

    /** @var Translator */
    protected $translator;

    /** @var string */
    protected $gatewayUrl;

    function __construct(VersionService $versionService, Translator $translator, $gatewayUrl)
    {
        $this->versions = $versionService;
        $this->translator = $translator;
        $this->gatewayUrl = $gatewayUrl;
    }

    public function render()
    {
        $this->template->_form = $this['inputForm'];
        $template = $this->template;
        $version = $this->getPresenter()->context->getService('session')
            ->getSection('web')->version;
        $this->template->version = $this->versions->getCorrectVersion($version);
        $this->template->realVersion = $version;
        $template->setFile(__DIR__ . '/template.latte');
        $template->render();
    }

    public function renderSmall()
    {
        $template = $this->template;
        $this->template->version = $this->getPresenter()->context->getService('session')
            ->getSection('web')->version;
        $template->setFile(__DIR__ . '/templateSmall.latte');
        $template->render();
    }

    public function createComponentSearchForm()
    {
        $searchComponent = new Form;
        $searchComponent->setTranslator($this->translator);

        $searchComponent->addText('shop_url', 'Shop URL')
            ->setAttribute('placeholder', 'messages.product_search.placeholder')
            ->addRule(Form::URL, $this->translator->trans('messages.form.error.url.invalid'))
            ->setRequired($this->translator->trans('messages.form.error.url.required'));

        $searchComponent->addHidden('userid');

        $searchComponent->addSubmit('send', 'Přidat do košíku');
        $searchComponent->onSuccess[] = array($this, 'submitSuccess');

        return $searchComponent;
    }

    public function createComponentSmallSearchForm()
    {
        $searchComponent = new Form;
        $searchComponent->setTranslator($this->translator);

        $searchComponent->addText('shop_url', 'Shop URL')
            ->addRule(Form::URL, $this->translator->trans('messages.form.error.url.invalid'))
            ->setRequired($this->translator->trans('messages.form.error.url.required'));
        $searchComponent->addHidden('userid');

        $searchComponent->addSubmit('send', 'Přidat do košíku');
        $searchComponent->onSuccess[] = array($this, 'submitSuccess');

        return $searchComponent;
    }

    public function submitSuccess($form, $values)
    {
        $fp = $this->getPresenter()->context->getService('fingerprints')
            ->collect();
        $this->getPresenter()->payload->collect = $fp;
        $this->getPresenter()->context->getService('urlRequest')
            ->insert($values->shop_url, 'Header', $fp);

        if (!$this->getPresenter()->isAjax()) {
            $this->redirect('this');
        }
        else {
            $this->template->showResults = TRUE;

            try {
                $strategyResolver = new StrategyResolver($values->shop_url, $this->getPresenter()->context->getService('sites'), $this->getPresenter()->context->getService('blacklist'));
                $crawledProduct = $strategyResolver->resolve();

                $this->cartIDs = $this->getPresenter()->context->getService('cartIDs');
                $cartItems = $this->getPresenter()->context->getService('cartItems');

                $currentCartItems = $cartItems->getCartItemCount($this->cartIDs->getCurrentCartID());
                $maxCartItems = self::MAX_CART_ITEMS;

                //if ($currentCartItems < $maxCartItems) {
                if (TRUE) {
                    $this->template->showSearchResult = TRUE;

                    $item = array(
                        'name' => $crawledProduct['name'],
                        'price' => (float) $crawledProduct['price'],
                        'image' => $crawledProduct['image'],
                        'category' => $crawledProduct['category'],
                        'link' => $values->shop_url
                    );

                    $this->addToCart($this->cartIDs->getCurrentCartID(), $item);

                    $this->fillCartData($maxCartItems, $currentCartItems + 1, $this->cartIDs->getCurrentCartID(), $cartItems, $item);

                    $this->template->item = $item;
                }
                else {
                    $this->template->showFullCartMessage = TRUE;
                }

                $this->getPresenter()
                    ->sendAnalytics('gaTriggerEvent', 'Search', 'SearchSuccess', 'Product-Search', $crawledProduct['price']);

                $form->setValues(array(), TRUE);
                $this->redrawControl('searchForm');
                $this->getPresenter()->redrawControl('cart');
                $this->redrawControl('searchFormSmall');
                $this->getPresenter()->payload->refreshCart = TRUE;
            } catch (\Crawler\Exception\BlacklistedURLException $e) {
                $this->template->showBlacklistedURLException = TRUE;
            } catch (\Crawler\Exception\LowPriceException $e) {
                $this->template->showLowPriceMessage = TRUE;
            } catch (\Crawler\Exception\MaxPriceException $e) {
                $this->template->showMaxPriceMessage = TRUE;
            } catch (\Crawler\Exception\UnsupportedEshopException $e) {
                $this->getPresenter()->payload->unsupportedEshop = TRUE;
                $this->template->unsupportedEshop = TRUE;
                $this->template->showSearchResult = TRUE;

                $item = array(
                    'name' => '',
                    'price' => '',
                    'image' => '',
                    'category' => '',
                    'link' => $values->shop_url
                );

                $this['inputForm']['url']->setValue($values->shop_url);

                $data = [
                    'shop_url' => $values['shop_url'],
                    'exception' => get_class($e)
                ];
                // Save fail to DB
                $this->brokenUrl = $this->getPresenter()->context->getService('brokenUrl');
                $this->brokenUrl->insert([
                    'url' => $data['shop_url'],
                    'exception' => $data['exception']
                ]);
            } catch (\Exception $e) {
                $data = [
                    'shop_url' => $values['shop_url'],
                    'exception' => get_class($e)
                ];
//                $dataMailer = new \DataMailSender('info@koupito.cz');
//                $dataMailer->setTemplate('/ricardo.latte');
//                $dataMailer->sendData(['monagas@usertechnologies.com'], 'Koupito - Broken E-Shop link', $data);

                $this->getPresenter()
                    ->sendAnalytics('gaTriggerEvent', 'Search', 'SearchFail', 'Product-Search', $values->shop_url);
                $this->getPresenter()->payload->productSearchException = TRUE;
                $this->getPresenter()->payload->exception = $values['shop_url'];
                $this->template->showErrorMessage = TRUE;

                // Save fail to DB
                $this->brokenUrl = $this->getPresenter()->context->getService('brokenUrl');
                $this->brokenUrl->insert([
                    'url' => $data['shop_url'],
                    'exception' => $data['exception']
                ]);
            }

            $this->getPresenter()->payload->refreshCart = TRUE;
            $this->redrawControl('searchForm');
            $this->getPresenter()->redrawControl('cart');
            $this->redrawControl('searchFormSmall');
        }
    }

    public function addToCart($cartId, $item)
    {
        $cartItems = $this->getPresenter()->context->getService('cartItems');

        $count = $cartItems->getCartItemCount($this->cartIDs->getCurrentCartID());

        if (TRUE) {
            try {
                $fp = $this->getPresenter()->context->getService('fingerprints')
                    ->collect();
                $cartItems->insertCartItem($cartId, array(
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'img_link' => $item['image'],
                    'item_link' => $item['link'],
                    'fingerprint_id' => $fp,
                ));

                $this->template->showCartAddSuccess = TRUE;
            } catch (\App\Model\OverMaxPayLimitException $e) {
                $this->template->showOverLimitException = $e->getLimit();
            }

            $this->getPresenter()->payload->addCart = TRUE;
            $this->getPresenter()->payload->collect = $fp;
            $this->getPresenter()->updateCartItemCount();
            $this->getPresenter()->redrawControl('cart');
            $this->getPresenter()->redrawControl('cartList');
        }
    }

    private function fillCartData($maxCartItems, $currentCartItems, $cartId, $cartItems, $item)
    {
        $carts = $this->getPresenter()->context->getService('carts');
        $cart = $carts->get($cartId);

        $items = $cartItems->getCartItems($cartId)->fetchAll();
        $price = 0;
        foreach ($items as $item) {
            $price += $item['price'];
        }

        $maxMoney = $this->versions->getCorrectPriceLimit($cart['version']);


        $this->template->minimumPayment = $item['price'] / (6 * (1 + $cart['version']));
        $this->template->currentPrice = $price;
        $this->template->availableCartItems = $maxCartItems - $currentCartItems;
        $this->template->availableMoney = $maxMoney - $price;
        $this->template->currentCartItems = $currentCartItems;
        $this->template->maxMoney = $maxMoney;
        $this->template->progress = ceil(100 / $maxMoney * $price);
    }

    public function createComponentInputForm()
    {
        $form = new Form();
        $form->setTranslator($this->translator);

        $provinces = $this->getPresenter()->context->getService('provinces')
            ->getAllPairs();
        $cities = $this->getPresenter()->context->getService('cities')
            ->getAllPairs();

        $form->addText('name', 'messages.product_search.product_name')
            ->setRequired('messages.product_search.product_name_required');
        $form
            ->addText('price', 'messages.product_search.price')
            ->setRequired('messages.product_search.price_required')
            ->setType('number')
            ->setDefaultValue(100)
            ->addRule(Form::RANGE, 'messages.product_search.price_range', array(
                100,
                500
            ));
        $form->addText('tenor', 'Tenor');

        $form->addText('personeName', 'messages.product_search.name')
            ->setRequired('messages.product_search.name_required');
        $form->addText('phoneNumber', 'messages.product_search.phoneNumber')
            ->setRequired('messages.product_search.phone_required')
            ->addRule(Form::NUMERIC, 'messages.product_search.phone_required');
        $form->addText('email', 'messages.product_search.email')
            ->addRule(Form::EMAIL, 'messages.product_search.email_valid');

        $form->addTextArea('note', 'messages.product_search.note')
            ->setAttribute('placeholder', 'messages.product_search.note_placeholder')
            ->setAttribute('rows', 4);
        $form->addHidden('url');
        $form->addSubmit('done', 'Go To Financing');

        $form->onSuccess[] = array($this, 'inputFormSuccess');

        return $form;
    }

    public function inputFormSuccess($form, $values)
    {
        if ($form->isSuccess()) {
            $months = $values['tenor'];
            $price = $values['price'];
            $http_referer = $_SERVER['HTTP_REFERER'];

            // create user
            $users = $this->getPresenter()->context->getService('users');
            $user = $users->getByMail($values['email'])->fetch();
            if (!$user) {
                $user = $users->add(array(
                    'name' => $values['personeName'],
                    'surname' => $values['personeName'],
                    'email' => $values['email'],
                    'role' => 'user',
                    'phone' => $values['phoneNumber'],
                ));
            }

            // create order
            $this->cartIDs = $this->getPresenter()->context->getService('cartIDs');
            $orders = $this->getPresenter()->context->getService('orders');
            $order = $orders->insert(array(
                'total_price' => $price,
                'loan_count' => $months,
                'street' => '',
                'city' => '',
                'postal_code' => '',
                'user_id' => $user->id,
                'cart_id' => $this->cartIDs->getCurrentCartID(),
                'soon' => 0,
                'status' => $orders::STATUS_NEW,
                'note' => $values['note']. "\nurl: " . $values['url'],
                'created_at' => date('Y-m-d H:i:s'),
                'fingerprint_id' => $this->getPresenter()->context->getService('fingerprints')
                    ->collect()
            ));

            $productCode = "FOLF03T";
            $sellerCode = "062533";

            switch ($months) {
                case '1':
                    $productCode = "FOLF01T";
                    break;
                case '2':
                    $productCode = "FOLF02T";
                    break;
                case '3':
                    $productCode = "FOLF03T";
                    break;
                case '4':
                    $productCode = "FOLF04T";
                    break;
                case '5':
                    $productCode = "FOLF05T";
                    break;
                case '6':
                    $productCode = "FOLF06T";
                    break;
            }

            if (Debugger::$productionMode) {
                $productCode = substr($productCode, 0, -1);
            }

            $goodsCategory = "4";
            $goodsType = "41";

            $data = array(
                "clientDetails" => array(
                    "name" => $values['personeName'],
                    "identityNumber" => "",
                    "phoneNumber" => $values['phoneNumber'],
                    "email" => $values['email'],
                ),
                "address" => array(
                    "provinceCode" => '',
                    "city" => '',
                    "district" => '',
                    "town" => "",
                    "street" => '',
                    "houseNumber" => '',
                    "apartmentNumber" => '',
                    "zipCode" => '',
                ),
                "eShopID" => array(
                    "productCode" => $productCode,
                    "sellerCode" => $sellerCode,
                ),
                "technical" => array(
                    "returnURL" => $http_referer,
                ),
                "orderDetails" => array(
                    "orderID" => $order['id'],
                    "price" => $price,
                    "goodsDetails" => array(
                        array(
                            "goodsName" => $values['name'] . '/' . $values['note'],
                            "numOfGoods" => "1",
                            "goodsCategory" => $goodsCategory,
                            "goodsType" => $goodsType,
                            "goodsPrice" => $price,
                        ),
                    )
                ),
            );
            $encrypter = new \Encrypter('1234567890ABCDEF', 'hq84ui1x');
            $hash = $encrypter->encrypt(json_encode($data));

            $this->presenter->redirectUrl($this->gatewayUrl . '/auth?z=' . $hash);
        }
    }

    public function handleProvinceChange($value)
    {
        $value = $this->getPresenter()->request->getParameter('value');
        $province = $this->getPresenter()->context->getService('provinces')
            ->getByName($value);

        if ($province) {
            $cities = $province->related('city')->fetchPairs('name', 'name');
        }
        else {
            $cities = $this->getPresenter()->context->getService('cities')
                ->getAllPairs();
        }

        $this['inputForm']['city']->setItems($cities);

        $this->redrawControl('citySnippet');
    }
}
