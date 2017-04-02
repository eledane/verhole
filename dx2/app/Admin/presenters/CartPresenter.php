<?php

namespace App\AdminModule\Presenters;

use App\Model\OverMaxPayLimitException;
use Nette,
    App\Forms\OrderFactory,
    App\Model\UserManager,
    App\Model\OrdersModel,
    App\Model\CartModel,
    App\Model\CartItemModel,
    Nette\Application\UI\Form,
    App\Model\VersionService;

class CartPresenter extends AdminPresenter {

    /** @var OrderFactory @inject */
    public $orderFactory;

    /** @var OrdersModel */
    public $orders;

    /** @var UserManager */
    public $users;

    /** @var CartModel */
    public $carts;

    /** @var CartItemModel */
    public $cartItems;

    /** @var VersionService */
    private $versions;

    protected $modelName = 'carts';

	protected $pageTitleDefault = 'Košíky';

	protected $showAddButton = false;

    public function setupColumns(&$grid){

		$grid->addColumnNumber('id', 'no')
            ->setSortable();

        $grid->addColumnText('name', 'name')
            ->setSortable()
            ->setColumn(function($item) { return $this->translator->trans('messages.admin.cart.cart') . '_' . $item->id; });

        $grid->addColumnText('fulfilled', 'fulfilled')
            ->setSortable();

        $grid->addColumnNumber('version', 'version')
            ->setSortable();

        $grid->addColumnDate('created_at', 'created', \Grido\Components\Columns\Date::FORMAT_DATETIME)
            ->setDefaultSort('DESC')
            ->setSortable()
            ->setFilterDate()
                ->setCondition($grid->birthdayFilterCondition);

        $grid->addFilterNumber('id', 'Číslo');
        $grid->addFilterText('fulfilled', 'Má objednávku');
	}

	public function buildManageForm(&$component){}

    public function renderDetail($id) {
        $cart = $this->getModel()->get($id);

        $items = [];
        $price = 0;
		foreach ($cart->related('cart_item', 'cart_id') as $cart_item) {
			$items[] = $cart_item;
            $price += $cart_item->price;
		}

        $this->template->cart_price = $price;
		$this->template->cart = $cart;
		$this->template->cart_items = $items;
        $this->template->completed = $cart->fulfilled;

        $form = $this['createNewOrder'];
        $form->setDefaults(array(
            'total_price' => $price
        ));
    }

    public function setupActions(&$grid){
		$edit = $grid->addActionHref('detail', 'show')->setIcon('eye');
		$edit->getElementPrototype()->class[] = 'btn-default btn-flat';
	}

    public function createComponentCreateNewOrder() {
        $form = $this->orderFactory->createNewOrder();
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $form->addText('loan_count_2', 'instalment_count')
            ->setRequired('required_instalment_count');

        $form->onSuccess[] = array($this, 'onCreateNewOrderSuccess');

        return $form;
    }

    public function onCreateNewOrderSuccess($form, $values) {
        $cartId = $this->getParameter('id');
        $cart = $this->carts->get($cartId);
        $user = $this->users->getByMail($values['email'])->fetch();

        if ($user != false) {
            $data = [
                'user_id' => $user['id'],
                'loan_count' => $values['loan_count_2'],
                'total_price' => $values['total_price'],
                'cart_id' => $cartId,
                'status' => 'NEW',
                'soon' => 0,
                'call_time' => $values['call_time'],
                'street' => $values['street'],
                'city' => $values['city'],
                'postal_code' => $values['postal_code'],
                'type' => 'BACKOFFICE',
                'note' => $cart['note']
            ];

            $order = $this->orders->insert($data);
            $this->carts->fulfillCart($cartId);
            $this->flashMessage('Objednávka vytvořena.', 'success');
            $this->redirect('Orders:detail', $order->id);
        } else {
            try {
                $user = $this->users->add(array(
                    'name' => $values['name'],
                    'surname' => $values['surname'],
                    'email' => $values['email'],
                    'phone' => $values['phone'],
                    'role' => 'user'
                ));
                $userId = $user['id'];
                $status = 'NEW';

                $order = $this->orders->insert(array(
                    'user_id' => $userId,
                    'loan_count' => $values['loan_count_2'],
                    'total_price' => $values['total_price'],
                    'cart_id' => $cartId,
                    'status' => $status,
                    'soon' => 0,
                    'call_time' => $values['call_time'],
                    'street' => $values['street'],
                    'city' => $values['city'],
                    'postal_code' => $values['postal_code'],
                    'type' => 'BACKOFFICE',
                    'note' => $cart['note']
                ));
                $this->carts->fulfillCart($cartId);
                $this->flashMessage('Objednávka vytvořena.', 'success');
                $this->redirect('Orders:detail', $order->id);


            } catch (DuplicateNameException $e) {
            }
        }
    }

    public function createComponentAddCartItemForm() {
        $form = new Form;
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $form->addText('name', 'name')
            ->setRequired('required_name');
        $form->addText('price', 'price')
            ->setRequired('required_price');
        $form->addText('img_link', 'img_link');
        $form->addText('item_link', 'item_link')
            ->setRequired('required_item_link');
        $form->addSubmit('add', 'add');

        $form->onSuccess[] = array($this, 'onAddCartItemSuccess');

        return $form;
    }

    public function onAddCartItemSuccess($form, $values) {
        $id = $this->getParameter('id');

        if (!$id) {
            $this->redirect('Cart:');
        }

        $cart = $this->carts->get($id);

        try {
            $this->cartItems->insertCartItem($id, $values);
        } catch (OverMaxPayLimitException $e) {
            $this->flashMessage('Nelze přidat předmět, nevejde se do cenového limitu ' . $this->versions->getCorrectPriceLimit($cart['version']) . ' Kč.', 'danger');
        }

        $this->redirect('this');
    }

    public function handleDeleteCartItem($cartItemId) {
        $this->cartItems->deleteAdmin($cartItemId);

        $this->redirect('this');
    }

    public function injectOrdersModel(OrdersModel $o) {
        $this->orders = $o;
    }

    public function injectUserManager(UserManager $u) {
        $this->users = $u;
    }

    public function injectCartModel(CartModel $c) {
        $this->carts = $c;
    }

    public function injectCartItemModel(CartItemModel $m) {
        $this->cartItems = $m;
    }

    public function injectVersionService(VersionService $v) {
        $this->versions = $v;
    }
}
