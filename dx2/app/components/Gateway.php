<?php

use Goutte\Client;

class Gateway
{

    private $gatewayUrl;

    public function __construct($gatewayUrl)
    {
        $this->gatewayUrl = $gatewayUrl;
    }

    public function sendStateChange($orderId, $state)
    {
        $data = [
            'sellerCode' => '062533',
            'state' => $state,
            'description' => $state,
        ];
        $client = new Client();
        $client->request('PUT', $this->gatewayUrl . '/api/orders/' . $orderId, [], [], array('HTTP_CONTENT_TYPE' => 'application/json'), json_encode($data));
        $response = json_decode($client->getResponse()->getContent(), TRUE);

        if ($response['returnCode'] == '00') {
            return true;
        } else {
            return $response['returnMessage'];
        }
    }
}
