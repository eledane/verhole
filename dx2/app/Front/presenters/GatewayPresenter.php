<?php

namespace App\FrontModule\Presenters;

use App\Model\OrdersModel;
use Nette\Application\Responses\JsonResponse;
use Tracy\Debugger;

class GatewayPresenter extends BasePresenter
{

    /** @var OrdersModel */
    private $orders;

    /**
     * PUT:
     * {
     *  "orderNum": "xxxxx",
     *  "state": "xxxxx",
     *  "description": "xxxxx"
     * }
     */
    public function renderListener()
    {
        Debugger::log($this->request->getMethod());
        Debugger::log($this->getHttpRequest()->getRawBody());

        $result = array(
            'returnCode' => '01',
            'returnMessage' => 'error',
        );

        if ($this->request->getMethod() === 'PUT') {
            $encryptedMsg = $this->getHttpRequest()->getRawBody();

            $encrypter = new \Encrypter('1234567890ABCDEF', 'hq84ui1x');
            $data = json_decode($encrypter->decrypt($encryptedMsg), TRUE);

            if ($data) {
                $order = $this->orders->get($data['orderNum']);
                if (!$order) {
                    $result['returnCode'] = '02';
                    $result['returnMessage'] = 'Order not found';
                }
                else {
                    // state mapping
                    $states = array(
                        'SHIPMENT_NOTIFIED' => 'SHIPPED',
                        'SHIPMENT-NOTIFIED' => 'SHIPPED',
                        'CANCELLED' => 'CANCELLED',
                    );
                    $state = $data['state'];

                    if (isset($states[$data['state']])) {
                        $state = $states[$data['state']];
                    }

                    // update order state
                    $this->orders->updateOrder($order['id'], array('status' => $state));

                    $result['returnCode'] = '00';
                    $result['returnMessage'] = 'success';
                }
            }
        }
        $this->sendResponse(new JsonResponse($result));
    }

    public function injectOrdersModel(OrdersModel $ordersModel)
    {
        $this->orders = $ordersModel;
    }
}
