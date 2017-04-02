<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * Settings Controller
 *
 */
class SettingsController extends HomecreditAppController {

	public $disabledActions = array('admin_delete','admin_view','admin_add');
	
	public function admin_index() {
		parent::admin_index();
		$this->set('actions',array(array('icton'=>'','title'=>'','url'=>'')));
	}
	
	public function admin_edit($id = null) {
		parent::admin_edit($id);
		$this->viewVars['title'] = $this->request->data['Setting']['name'];
		if(!empty($this->model->formFields['ordering'])) {
			unset($this->model->formFields['ordering']);
		}
	}

}
