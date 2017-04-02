<?php 

App::uses('NumberHelper', 'View/Helper');

class CurrencyNumberHelper extends NumberHelper {
	
	public function __construct(\View $View, $settings = array()) {
		parent::__construct($View, $settings);
		$formats = Configure::read("Currency.currency_formats");
		foreach($formats as $name=>$definition) {
			$this->addFormat($name, $definition);
		}
	}
	
	public function formattedPrice($price,$format=null) {
		$format = strtolower($format);
		if(empty($format)) {
			$format = Configure::read("Currency.currency_format_default");
		}
		
		return str_replace(' ', '&nbsp;', $this->currency($price,$format));
	}

}