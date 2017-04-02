<?php

namespace App\Model;

use Nette;

class BrokenUrlModel extends GridoModel {

	protected $tableName = 'broken_url';

	public function insert($values) {
		return $this->getTable()->insert($values);
	}
}