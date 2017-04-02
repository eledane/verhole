<?php

App::uses('AppController', 'Controller');

class HomecreditAppController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Homecredit.Setting');
	}
	
	public function admin_edit($id = null) {
		parent::admin_edit($id);
		$this->model->formFields['ordering'] = 'number';
	}
	
	public function admin_add() {
		parent::admin_add();
		$this->model->formFields['ordering'] = 'number';
	}
	
	protected function setPublicError($message) {
		$this->Session->setFlash($message, 'default', array(), 'public-error');
	}
	    
	protected function setPublicSuccess($message) {
		$this->Session->setFlash($message, 'default', array(), 'public-success');
    }	
}
