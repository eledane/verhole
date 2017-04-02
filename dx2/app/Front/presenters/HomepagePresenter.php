<?php

namespace App\FrontModule\Presenters;

use App\Model\OverMaxPayLimitException;
use Nette,
    App\Forms\RegisterFormFactory,
    App\Forms\SignFormFactory,
    App\Model\OrdersModel,
    App\Forms\OrderFactory,
    App\Model\TextModel,
    App\Model\CallMeModel,
    App\Model\FingerprintModel,
    App\Model\CouponModel,
    App\Model\VersionService;

class HomepagePresenter extends BasePresenter {

    /** @var RegisterFormFactory @inject */
    public $registerForms;

    /** @var SignFormFactory @inject */
    public $signForm;

    /** @var OrderFactory @inject */
    public $orderFactory;

    /** @var FingerprintModel @inject */
    public $fingerprints;

    /** @var OrdersModel */
    private $orders;

    /** @var CallMeModel */
    private $callMe;

    /** @var  CouponModel */
    private $coupons;

    /** @var VersionService */
    private $versionService;

    public function renderDefault() {
        $this->template->randomItems = $this->cartItems->getRandomItems(7);
        $this->template->coupon = $this->session->getSection('web')->coupon ? true : false;
    }

    public function actionTerms() {

    }

    // INSERT CART ITEM FROM DB
    public function handleAddCartItem($id) {
        $cartItem = $this->cartItems->get($id);
        $cartId = $this->cartIDs->getCurrentCartID();
        $cartItemsCount = $this->cartItems->getCartItemCount($cartId);

        if ($cartItemsCount < 5) {
            try {
                $fp = $this->fingerprints->collect();
                $this->getPresenter()->payload->collect = $fp;
                $this->cartItems->insertCartItem($cartId, array(
                    'name' => $cartItem['name'],
                    'price' => $cartItem['price'],
                    'img_link' => $cartItem['img_link'],
                    'item_link' => $cartItem['item_link'],
                    'fingerprint_id' => $fp
                ));
            } catch (OverMaxPayLimitException $e) {}
        }

        if (!$this->isAjax()) {
            $this->redirect('Homepage:'); // TODO
        } else {
            $this->payload->stopLadda = true;
            $this->payload->addCart = true;
            $this->updateCartItemCount();
            $this->redrawControl('cart');
        }
    }

    // Remove from Cart
    public function handleDeleteFromCart($id) {
        $this->cartItems->delete($id);

        $this->getPresenter()->updateCartItemCount();
        $this->getPresenter()->payload->addCart = true;

        if (!$this->getPresenter()->isAjax()) {
            $this->redirect('this');
        } else {
            $this->payload->hideResults = true;
            $this->getPresenter()->redrawControl('cart');
            $this->redrawControl('cartList');
        }
    }

    public function createComponentCallForm() {
        $form = new Nette\Application\UI\Form;

        $form->addText('phone', 'Telefon')
            ->setRequired('Zadejte telefonní číslo')
            ->addRule($form::PATTERN, 'Zadejte telefoní číslo ve správném formátu.', '^(\+420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$');
        $form->addText('call_time', 'Kdy?');
        $form->addSubmit('send', 'Odeslat žádost');

        $form->onSuccess[] = array($this, 'onCallFormSuccess');

        return $form;
    }

    public function onCallFormSuccess($form, $values) {
        $this->template->emailSent = true;
        $this->getPresenter()->absoluteUrls = true;
        $cartLink = $this->getPresenter()->link(':Admin:Cart:detail', $this->cartIDs->getCurrentCartID());

        $this->getPresenter()->absoluteUrls = true;
        $data = array(
            'phone' => $values['phone'],
            'cartId' => $this->cartIDs->getCurrentCartID(),
            'cart_link' => "<a href='" . $cartLink. "'>" . $cartLink . "</a>",
            'version' => $this->carts->get($this->cartIDs->getCurrentCartID())['version']
        );

        $dataMailer = new \DataMailSender('info@koupito.cz');
        $dataMailer->sendData('info@koupito.cz', 'Objednávka - Zavolejte nám - ' . $this->cartIDs->getCurrentCartId(), $data);

        $this->callMe->insert(array(
            'phone' => $values['phone'],
            'call_time' => $values['call_time'],
            'cart_link' => $cartLink,
            'cart_id' => $this->cartIDs->getCurrentCartID()
        ));
        $this->carts->closeCart($this->cartIDs->getCurrentCartID());

        if (!$this->getPresenter()->isAjax()) {
            $this->redirect('this');
        } else {
            $form->setDefaults(array(), TRUE);
            $this->redrawControl('callForm');
        }
    }

    // PRICE SEARCH
    public function createComponentPriceSearchHeader($name){
    	$component = $this->context->getService('product_search');
    	$this->addComponent($component, $name);
    }

    public function injectOrdersModel(OrdersModel $ordersModel) {
        $this->orders = $ordersModel;
    }

    public function injectCallMeModel(CallMeModel $c) {
        $this->callMe = $c;
    }

    public function injectCouponModel(CouponModel $cm) {
        $this->coupons = $cm;
    }

    public function injectVersionService(VersionService $vs) {
        $this->versionService = $vs;
    }
}
