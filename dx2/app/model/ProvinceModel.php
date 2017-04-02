<?php

namespace App\Model;

use Nette;

class ProvinceModel extends Nette\Object
{
    /** @var Nette\Database\Context */
    private $database;
    const DB_NAME = 'address_province';

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function getAllPairs()
    {
        return $this->database->table(self::DB_NAME)->order('name ASC')->fetchPairs('name', 'name');
    }

    public function getByName($name)
    {
        return $this->database->table(self::DB_NAME)->where('name = ?', $name)->fetch();
    }

}
