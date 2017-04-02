<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 03.12.15
 * Time: 13:42
 */

namespace App\Model;

use Nette;


class BlacklistUrlModel extends GridoModel {

    protected $tableName = 'url_blacklist';

    public function getByURL($url) {
        return $this->getTable()->where('url LIKE', '%' . $url . '%')->fetch();
    }

    public function insert($values) {
        return $this->getTable()->insert($values);
    }

}