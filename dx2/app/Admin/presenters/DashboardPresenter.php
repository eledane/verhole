<?php

namespace App\AdminModule\Presenters;

use Nette,
    App\Model\OrdersModel,
    App\Model\CallMeModel,
    App\Model\CartModel;

/**
 * Base admin presenter
 */
class DashboardPresenter extends SecuredPresenter
{

    /** @var OrdersModel */
    private $orders;

    /** @var CartModel */
    private $carts;

    public function renderDefault()
    {
        $this->template->latestOrders = $this->orders->getLatest(10000000, [
            'NEW',
        ], 'soon DESC, call_time ASC');
        $this->template->order_statuses = $this->orders->getOrderStatuses();
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

    public function createComponentNewOrderVersionForm()
    {
        $form = new Nette\Application\UI\Form;
        $form->setTranslator($this->translator);

        $select = array(
            0 => '0',
            1 => '1',
            2 => '2'
        );

        $form->addSelect('version', 'messages.admin.grid.version', $select)
            ->setRequired('Zadejte verzi objednávky');
        $form->addSubmit('add', 'messages.admin.grid.add');

        $form->onSuccess[] = array($this, 'onNewOrderVersionFormSuccess');

        return $form;
    }

    public function onNewOrderVersionFormSuccess($form, $values)
    {
        $cart = $this->carts->createNewCart(NULL);
        $this->carts->updateVersion($cart, $values['version']);

        $this->redirect('Cart:detail', $cart);
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
        $orderID = $values['orderId'];
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
    }

    public function injectOrdersModel(OrdersModel $o)
    {
        $this->orders = $o;
    }

    public function injectCartModel(CartModel $c)
    {
        $this->carts = $c;
    }

}
