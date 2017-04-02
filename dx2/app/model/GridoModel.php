<?php

namespace App\Model;

use Nette,
    Nette\Object,
    Nette\Http\Session;

abstract class GridoModel extends \Grido\DataSources\NetteDatabase {

    /** @var Nette\Database\Context */
	protected $database;

    /** @var Session */
    protected $session;

	protected $prefix = '';
	protected $tableName = '';

    function __construct(Nette\Database\Context $db, Nette\Http\Session $session) {
        $this->database = $db;
        $this->session = $session;
    }

    public function getTable() {
        return $this->database->table($this->tableName);
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function get($id) {
        return $this->getTable()->get($id);
    }

}
