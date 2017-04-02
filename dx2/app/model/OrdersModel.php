<?php

namespace App\Model;

use Nette,
    App\Model;

class OrdersModel extends GridoModel {

    const STATUS_NEW = "NEW";
    const STATUS_CANCELLED = "CANCELLED";
    const STATUS_SHIPPED = "SHIPPED";

    protected $tableName = 'orders';

    public function getLatest($limit = 10, $status = 'NEW', $order = 'created_at DESC') {
        return $this->getTable()
            ->where('status', $status)
            ->order($order)
            ->limit($limit);
    }

    public function getOrdersByUserID($id) {
        return $this->getTable()->where('user_id', $id);
    }

    public function checkMyOrder($userId, $orderId) {
        return $this->getTable()->where('user_id = ? AND id = ?', $userId, $orderId);
    }
    public function insert($values) {
        return $this->getTable()->insert($values);
    }

    public function addNote($id, $note) {
        return $this->get($id)->update(array('note' => $note));
    }

    public function updateOrder($id, $values) {
        return $this->get($id)->update($values);
    }

    public function getOrderStatuses($empty = false) {
        if ($empty) {
            $states[''] = '';
        }
        $states[self::STATUS_NEW] = 'New';
        $states[self::STATUS_CANCELLED] = 'Cancelled';
        $states[self::STATUS_SHIPPED] = 'Shipped';
        return $states;
    }
}
