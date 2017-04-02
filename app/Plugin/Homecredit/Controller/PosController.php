<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * Pos Controller
 *
 */
class PosController extends HomecreditAppController {

	public function admin_edit($id = null) {
		parent::admin_edit($id);
		$this->setTitle();
	}
	
	public function admin_add() {
		parent::admin_add();
		$this->setTitle();
	}
	
	private function setTitle() {
		$this->set('title','POS');
	}

}
