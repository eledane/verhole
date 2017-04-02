<?php

namespace App\Model;

class CouponModel extends GridoModel {

    protected $tableName = 'coupons';

    public function getByEmail($email) {
        return $this->getTable()->where('email', $email);
    }

    public function insertEmail($email, $fp) {
        return $this->getTable()->insert([
            'email' => $email,
            'fingerprint_id' => $fp
        ]);
    }

}