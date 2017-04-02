<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * Stores Controller
 *
 */
class StoresController extends HomecreditAppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$actions = array('provinces','cities','stores');
		if(in_array($this->request->params['action'], $actions)) {
			$this->Auth->allow();
		}
		$this->Security->unlockedActions = $actions;
	}
	
	public function provinces($type = null) {
		$this->_getJsonResponse($this->Store->getProvinces($type));
	}
	
	public function cities($type = null) {
		$data = array();
		if($this->_isPostOrPut() && !empty($this->request->data['province'])) {
			$province = $this->request->data['province'];
			$data = $this->Store->getCities($province,$type);
		}
		$this->_getJsonResponse($data);
	}
	
	public function stores($type = null) {
		$data = array();
		if($this->_isPostOrPut() && !empty($this->request->data['province']) && !empty($this->request->data['city'])) {
			$province = $this->request->data['province'];
			$city = $this->request->data['city'];
			$data = $this->Store->getStoresFiltered($province,$city,$type);	
		}
		$this->_getJsonResponse($data);
	}
	
	protected function _getJsonResponse($data) {
		$this->layout = false;
		$this->view = false;
		header('Content-Type: application/json');
		if(empty($data)) {
			http_response_code(404);
		} else {
			echo json_encode($data);
		}
		exit;
	}

}
