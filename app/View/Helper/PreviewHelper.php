<?php

App::uses('AppHelper', 'View/Helper');
App::uses('CakeSession', 'Model/Datasource');
App::uses('AuthComponent', 'Controller/Component');

class PreviewHelper extends AppHelper {
	
	public function isInPreviewMode() {
		$preview = CakeSession::read('preview.'.Configure::read('Config.language'));
		return !empty($preview);
	}
	
	public function adminLogged() {
		$user = CakeSession::read(AuthComponent::$sessionKey);
		return !empty($user);
	}
	public function getAllPreviews() {
		return CakeSession::read('preview.'.Configure::read('Config.language'));
	}
	
}
