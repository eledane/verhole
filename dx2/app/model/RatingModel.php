<?php

namespace App\Model;

use Nette;

class RatingModel extends Nette\Object{

	/** @var Nette\Database\Context */
	private $database;

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}
	
	public function insert($rating, $ip, $userid)
    {
		return $this->database->query('INSERT INTO star_ratings', array( 
			'star_count' => $rating,
			'ip' => $ip,
			'userid' => $userid
		));
    }
	
	public function isRated($ip){
		$result = $this->database->table('star_ratings')->select('star_count')->where('ip = ?', $ip);
		
		return $result;
	}
	
}