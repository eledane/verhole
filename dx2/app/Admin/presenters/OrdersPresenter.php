<?php

namespace App\AdminModule\Presenters;

use Nette,
    App\Model,
    App\Model\CartItemModel,
    App\Model\VersionService;

/**
 * Base admin presenter
 */
class OrdersPresenter extends AdminPresenter
{

    const
        DATE_FORMAT = 'm/d/Y';

    protected $modelName = 'orders';

    protected $pageTitleDefault = 'Objednávky';

    protected $showAddButton = FALSE;

    /** @var VersionService */
    protected $versions;

    public function setupColumns(&$grid)
    {

        $status = $this->getModel()->getOrderStatuses(true);

        $grid->addColumnText('id', 'no')
            ->setSortable();

        $grid->addColumnText('total_price', 'amount')
            ->setSortable();

        $grid->addColumnText('loan_count', 'instalment_count')
            ->setSortable();

        $grid->addColumnText('status', 'state')
            ->setSortable()
            ->setReplacement($status);

        $grid->addColumnDate('created_at', 'created')
            ->setDefaultSort('DESC')
            ->setSortable()
            ->setDateFormat(\Grido\Components\Columns\Date::FORMAT_DATETIME);

        $grid->addFilterText('total_price', 'Půjčená částka');
        $grid->addFilterText('loan_count', 'Počet splátek');
        $grid->addFilterSelect('status', 'Stav objednávky', $status);
        $grid->addFilterDate('created_at', 'Datum vytvoření');
    }

    public function buildManageForm(&$component)
    {
    }

    public function actionDetail($id)
    {
        $order = $this->context->getService($this->modelName)->get($id);
        $cart = $order->cart;

        $cartVersion = $cart['version'];
        $version = $this->versions->getCorrectVersion($cart['version']);
        $total_price = $order['total_price'];
        $loan_count = $order['loan_count'];
        $interest = $total_price / 100 * ($version * ($loan_count - 1));
        $total_price += $interest;
        $monthly_payment = $total_price / $loan_count;

        $items = array();

        foreach ($cart->related('cart_item', 'cart_id') as $item) {
            $items[] = $item;
        }

        $this->template->interest = $monthly_payment;
        $this->template->order = $order;
        $this->template->cart = $cart;
        $this->template->cart_items = $items;
        $this->template->cart_items_count = count($items);
        $this->template->status = $this->getModel()->getOrderStatuses();

        $this['changeStateForm']->setDefaults(array('status' => $order['status']));
        $this['addNoteForm']->setDefaults(array('note' => $order['note']));
        $this['addCartItemForm']->setDefaults(array('cart_id' => $cart['id']));
        $this['clientCancel']->setDefaults(array(
            'id' => $order['id'],
            'cancel' => $order['cancel']
        ));
        $this['changeUserInformation']->setDefaults($order);
    }

    public function handleTest($id)
    {
        $model = $this->getModel();

        $model->get($id)->update(array(
            'status' => 'TEST'
        ));
        $this->flashMessage('Objednávka #' . $id . ' byla nastavená na test.', 'success');

        $this->redirect('this');
    }

    public function handleCancelOrder($id)
    {
        $model = $this->getModel();

        $model->cancelOrder($id);
        $this->flashMessage('Objednávka #' . $id . ' byla zrušena.', 'success');

        $this->redirect('this');
    }

    public function handleNoAttempts($id)
    {
        $model = $this->getModel();

        $model->get($id)->update(array(
            'status' => 'NO_ATTEMPTS'
        ));
        $this->flashMessage('Objednávka #' . $id . ' vyčerpala pokusy na zavolání.', 'success');

        $this->redirect('this');
    }

    public function createComponentAddNoteForm()
    {
        $form = new Nette\Application\UI\Form;

        $form->addTextArea('note', 'Poznámka')
            ->setRequired('Zadejte poznámku');
        $form->addSubmit('add', 'Přidat poznámku');

        $form->onSuccess[] = array($this, 'onAddNoteFormSuccess');

        return $form;
    }

    public function onAddNoteFormSuccess($form, $values)
    {
        $id = $this->getParameter('id');

        if (!$id) {
            $this->redirect('this');
            return;
        }

        $this->getModel()->addNote($id, $values['note']);

        $this->redirect('this');
    }

    public function createComponentAddCartItemForm()
    {
        $form = new Nette\Application\UI\Form;

        $form->addText('name', 'Název')
            ->setRequired('Zadejte název produktu.');
        $form->addText('price', 'Cena')
            ->setRequired('Zadejte cenu produktu');
        $form->addText('img_link', 'Odkaz na obrázek');
        $form->addText('item_link', 'Odkaz na produkt')
            ->setRequired('Zadejte odkaz na produkt');
        $form->addHidden('cart_id');
        $form->addSubmit('add', 'Přidat');

        $form->onSuccess[] = array($this, 'onAddCartItemSuccess');

        return $form;
    }

    public function onAddCartItemSuccess($form, $values)
    {
        $id = $values['cart_id'];

        $carts = $this->context->getService('carts');
        $cartItems = $this->context->getService('cartItems');

        $cart = $carts->get($id);

        try {
            $cartItems->insertCartItem($id, $values);

            $id = $this->getParameter('id');
            $this->recalculateOrder($id);

        } catch (Model\OverMaxPayLimitException $e) {
            $this->flashMessage('Nelze přidat předmět, nevejde se do cenového limitu ' . CartItemModel::$versions[$cart["version"]] . ' Kč.', 'danger');
        }

        $this->redirect('this');
    }

    public function createComponentChangeCallTimeForm()
    {
        $form = new Nette\Application\UI\Form;
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $form->addText('call_time', 'new_calltime')
            ->setRequired('required_call_time');
        $form->addSubmit('change', 'change');

        $form->onSuccess[] = array($this, 'onChangeCallTimeSuccess');

        return $form;
    }

    public function onChangeCallTimeSuccess($form, $values)
    {
        $id = $this->getParameter('id');
        $orders = $this->getPresenter()->context->getService('orders');
        $order = $orders->get($id);

        $order->update(array(
            'call_time' => $values['call_time'],
            'soon' => FALSE
        ));

        $this->redirect('this');
    }

    public function actionDeleteCartItem($orderId, $cartItemId)
    {
        $cartItems = $this->context->getService('cartItems');
        $cartItems->deleteAdmin($cartItemId);

        $this->recalculateOrder($orderId);

        $this->redirect('Orders:detail', $orderId);
    }

    public function createComponentChangeStateForm()
    {
        $form = new Nette\Application\UI\Form;
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $form->addSelect('status', 'state', $this->context->getService('orders')
            ->getOrderStatuses())->setRequired('state_required');
        $form->addSubmit('add', 'ok');
        $form->addHidden('orderId');

        $form->onSuccess[] = array($this, 'onChangeStateSuccess');

        return $form;
    }

    public function onChangeStateSuccess($form, $values)
    {
        if ($values['orderId'] != '') {
            $orderID = $values['orderId'];
        } else {
            $orderID = $this->getParameter('id');
        }
        $order = $this->context->getService('orders')->get($orderID);
        // call gateway
        $result = TRUE;
        if (in_array($values['status'], ['SHIPPED', 'CANCELLED'])) {
            $result = $this->context->getService('gateway')
                ->sendStateChange($orderID, $values['status']);
        }

        if ($result === TRUE) {
            $order->update([
                'status' => $values['status'],
            ]);
        }
        else {
            $this->flashMessage('Gateway update failed: ' . $result, 'danger');
        }

        $this->redirect('this');
    }

    public function handleCloseOrder($id)
    {
        $order = $this->context->getService('orders')->get($id);

        $order->update([
            'handler' => ''
        ]);

        $this->redirect('default');
    }

    public function handleStateModal($id)
    {
        $this->template->detailId = $id;
        $order = $this->context->getService('orders')->get($id);
        $this->template->handler = $order['status'];

        $this['changeStateForm']->setValues([
            'status' => $order['status'],
            'orderId' => $id
        ]);
        $this->payload->showModal = TRUE;
        $this->redrawControl('stateModal');
    }

    public function createComponentClientCancel()
    {
        $form = new Nette\Application\UI\Form;
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $canceled = array(
            'home-credit' => 'HomeCredit',
            'nevyhovuje-doprava' => 'NevyhovujeDoprava',
            'vysoka-splatka' => 'VysokáSplátka',
            'nechci-dalsi-pujcku' => 'NechciDalšíPůjčku',
            'jiny-duvod' => 'JinýDůvod'
        );

        $form->addSelect('cancel', 'PročKlientZrušil', $canceled)
            ->setRequired('ZadejteDůvod');
        $form->addHidden('id');
        $form->addSubmit('send', 'send');

        $form->onSuccess[] = array($this, 'onClientCancelSuccess');

        return $form;
    }

    public function onClientCancelSuccess($form, $values)
    {
        $order = $this->context->getService('orders')->get($values['id']);

        $order->update(array(
            'cancel' => $values['cancel'],
            'status' => 'CANCELED'
        ));
        $this->flashMessage('Úspěšně přidáno', 'success');
        $this->redirect('this');
    }

    public function createComponentChangeUserInformation()
    {
        $form = new Nette\Application\UI\Form;
        $form->setTranslator($this->translator->domain('messages.admin.grid'));

        $form->addText('street', 'street');
        $form->addText('city', 'city');
        $form->addText('postal_code', 'postal_code');
        $form->addText('delivery_company', 'delivery');
        $form->addSubmit('add', 'change');

        $form->onSuccess[] = array($this, 'onChangeUserInformationSuccess');

        return $form;
    }

    public function onChangeUserInformationSuccess($form, $values)
    {
        $id = $this->getParameter('id');

        $this->getModel()->updateOrder($id, $values);

        $this->redirect('this');
    }

    /**
     *    Base actions on grid component
     */
    public function setupActions(&$grid)
    {
        $show = $grid->addActionHref('detail', 'show');
        $show->getElementPrototype()->class[] = '';

        $edit = $grid->addActionHref('stateModal', 'deal')
            ->setCustomRender(function ($item) {
                $el = \Nette\Utils\Html::el('a', array(
                    'class' => 'grid-action-handle btn-modal btn btn-success btn-xs btn-mini ajax',
                ));
                $link = $this->getPresenter()
                    ->link('stateModal!', array('id' => $item->id));

                $el->href($link);
                $el->setText($this->translator->trans('messages.admin.grid.process'));

                return $el;
            });
        $edit->getElementPrototype()->class[] = '';
        $edit->getElementPrototype()->data['toggle'] = 'modal';
        $edit->getelementPrototype()->data['href'] = '#';

    }

    public function injectVersionService(VersionService $s)
    {
        $this->versions = $s;
    }
}
