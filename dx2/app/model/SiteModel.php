<?php

namespace App\Model;

use Nette;

class SiteModel extends GridoModel {

	protected $tableName = 'sites';

	public function getAllByDomain($domain) {
		return $this->getTable()->where('domain', $domain)->where('price_selector IS NOT NULL')->order('ordering ASC')->fetchAll();
	}
	
	public function getThousandsSeparatorByDomain($domain) {
		return $this->getTable()->where('domain', $domain)->where('thousands_separator IS NOT NULL')->order('ordering ASC')->fetchAll();
	}
	
	public function getDecimalSeparatorByDomain($domain) {
		return $this->getTable()->where('domain', $domain)->where('decimal_separator IS NOT NULL')->order('ordering ASC')->fetchAll();
	}

	public function insert($values) {
		return $this->getTable()->insert($values);
	}

}
