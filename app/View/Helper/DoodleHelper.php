<?php

App::uses('SessionHelper', 'View/Helper');

class DoodleHelper extends SessionHelper {


	public function renderPath($img){
		$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
		return 'quotes/' . $lang . '/' . $img;
	}

}