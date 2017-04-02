<?php

namespace App\Model;

use Nette;

class ContactsModel extends Nette\Object{

	/** @var Nette\Database\Context */
	private $database;

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}

	public function insertContact($values) {
		return $this->database->table('contacts_construction')->insert($values);
	}

	public function insert($values)
    {

		return $this->database->query('INSERT INTO contact_form2', array(
			'name' => $values->name,
			'telephone' => $values->phone,
			'product' => $values->product,
			'search_id' => $values->search_id,
			'months' => $values->months,
			'placement' => $values->placement,
			'userid' => $values->userid,
			'user_agent' => $_SERVER['HTTP_USER_AGENT']
		));
    }

    public function insertMore($values)
    {
		return $this->database->query('INSERT INTO contact_form2', array(
			'name' => $values->name,
			'telephone' => $values->phone,
			'product' => $values->product,
			'search_id' => $values->search_id,
			'months' => $values->months,
			'placement' => $values->placement,
			'userid' => $values->userid,
			'user_agent' => $_SERVER['HTTP_USER_AGENT']
		));
    }

}
