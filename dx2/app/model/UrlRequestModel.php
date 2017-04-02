<?php

namespace App\Model;

use Nette;

class UrlRequestModel extends Nette\Object{

	/** @var Nette\Database\Context */
	private $database;

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}
	
	public function insert($url, $place, $fp)
    {
		$request = $this->database->query('INSERT INTO search', array( 
			'url' => $url,
			'placement' => $place,
            'fingerprint_id' => $fp
		));

		return $this->database->getInsertId();
    }
	
}