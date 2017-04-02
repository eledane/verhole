<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * CsvFiles Controller
 *
 */
class CsvFilesController extends HomecreditAppController {
	
	public $disabledActions = array('admin_view');

	public function admin_add() {
		parent::admin_add();
		$this->view = 'CsvFiles/form';
	}
	
	public function admin_edit($id = null) {
		parent::admin_edit($id);
		
		$this->view = 'CsvFiles/form';
	}
	
	public function admin_index() {
		parent::admin_index();
		//$this->set('actions',array(array('icton'=>'','title'=>'','url'=>'')));
	}
	
	public function admin_up() {
		$result = array(
			'message' => '',
			'data' => '',
			'result' => false
		);
		$message = __('Unable to upload CSV. Please try it again');
		if($this->_isPostOrPut()) {
			$data = $this->request->data;
			$result['data'] = $data;
			if(!empty($data['CsvFile']['file']) && !empty($data['CsvFile']['file']['tmp_name'])) {
				$found = $this->CsvFile->find('first',array(
					'conditions' => array(
						'CsvFile.id' => $data['CsvFile']['id']
					)
				));
				if(!empty($found)) {
					if($this->CsvFile->validateFile($data['CsvFile']['file'])) {
						if($this->CsvFile->saveFile($data['CsvFile']['id'],$data['CsvFile']['file'])) {
							$message = __('Upload successful');
							$this->Session->setFlash($message);
							$result['result'] = true;
							$result['data'] = $this->CsvFile->find('first',array(
								'conditions' => array(
									'CsvFile.id' => $data['CsvFile']['id']
								)
							));
							unset($result['data']['CsvFile']['parsed_json']);
						} else {
							$this->Session->setFlash($message);
						}
					} else {
						$message = __('Invalid file format'); 
						$this->Session->setFlash($message);
					}
				}
				
			}
		}
		$result['message'] = $message;
		$this->autoRender = false;
		echo json_encode($result);
	}

}
