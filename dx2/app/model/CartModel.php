<?php

namespace App\Model;

use Nette;

class CartModel extends GridoModel {

    protected $tableName = 'cart';

    public function createNewCart($fp_id) {
        $version = $this->session->getSection('web');

        $row = $this->getTable()->insert(array(
            'fulfilled' => false,
            'version' => $version->version,
            'fingerprint_id' => $fp_id
        ));

        return $row['id'];
    }

    public function fulfillCart($id) {
        $this->get($id)->update(array(
            'closed' => true,
            'fulfilled' => true
        ));
    }

    public function closeCart($id) {
        $this->get($id)->update(array(
            'closed' => true
        ));
    }

    public function addNote($cartId, $values) {
        $cart = $this->get($cartId);

        $note = empty($cart['note']) ? $values['note'] : $cart['note'] . ", " . $values['note'];

        return $cart->update(array(
            'note' => $note
        ));
    }

    public function getNote($cartId) {
        return $this->get($cartId);
    }

    public function updateVersion($id, $version) {
        return $this->get($id)->update(array('version' => $version));
    }

}
