<?php
App::uses('UsersController', 'Seed.Controller');
/**
 * Articles Controller
 *
 */
class HcusersController extends UsersController {
	
	public $plugin = 'Seed';
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Seed.User');
		$this->modelName = 'User';
		$this->model = $this->User;
		$this->controllerName = 'users';
		$this->plugin = 'Seed';
	}
	
	protected function _validateUserType() {
		try {
			parent::_validateUserType();
		} catch(UnauthorizedException $e) {
			//Usertypes allowed to create users
			if($this->Auth->user()['user_type_id'] == Configure::read('Users.user_type_admin')) {
				//can create only users of the same or lower levels
				$requestedLevel = Configure::read('Users.hierarchy.'.$this->request->data['User']['user_type_id']);
				$currentLevel = Configure::read('Users.hierarchy.'.$this->Auth->user()['user_type_id']);
				if(empty($requestedLevel) || empty($currentLevel) || $requestedLevel < $currentLevel) {
					throw $e;
				} 
			} else {
				throw $e;
			}
		}
	}
	
	//override redirect
	public function redirect($url, $status = NULL, $exit = true) {
		if (is_array($url) && !isset($url['language']) && $this->Session->check('Config.language')) {
			$url['language'] = $this->Session->read('Config.language');
		}
		if(is_array($url) && !isset($url['plugin'])) {
			$url['plugin'] = strtolower($this->plugin);
		}
		if(is_array($url) && !isset($url['controller'])) {
			$url['controller'] = 'users';
		}
		parent::redirect($url, $status, $exit);
	}

}