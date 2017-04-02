<?php

App::uses('SessionHelper', 'View/Helper');

class NavBadgeHelper extends SessionHelper {


	public function renderPath(){
		$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
		return 'nav-tag-' . $lang . '.png';
	}

}