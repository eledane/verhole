<?php

namespace App\Model;

use Nette;

class CallMeModel extends GridoModel {

    protected $tableName = 'call_me';

    public function getAvailable() {
        return $this->getTable()->where('cart.fulfilled = 0');
    }

    public function insert($values) {
        return $this->getTable()->insert($values);
    }

}