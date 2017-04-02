<?php

namespace App\Model;

use Nette;

class CityModel extends Nette\Object
{
    /** @var Nette\Database\Context */
    private $database;
    const DB_NAME = 'address_city';

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function getAllPairs()
    {
        return $this->database->table(self::DB_NAME)->order('name ASC')->fetchPairs('name', 'name');
    }

    public function getPairsByProvince($province_id)
    {
        return $this->database->table(self::DB_NAME)->where('province_id = ?', $province_id)->order('name ASC')->fetchPairs('name', 'name');
    }

}
