<?php

namespace App\Model;

use Nette;

class UserIDSModel extends Nette\Object{

	/** @var Nette\Database\Context */
	private $database;

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}
	
	public function insert()
    {
		$request = $this->database->query('INSERT INTO userids', array( 
			'ok' => 1
		));

		return $this->database->getInsertId();
    }
	
}