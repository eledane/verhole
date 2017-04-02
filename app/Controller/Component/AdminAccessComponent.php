<?php

App::uses('Component', 'Controller');

class AdminAccessComponent extends Component {

	public $controller = null;

    /**
     * @param Controller $controller
     */
	public function initialize(Controller $controller) {
		$this->controller = $controller;
	}

    /**
     * @param $user
     */
	public function setAccessibleMethods($user) {
		if ($this->controller->name == 'Texts') {
			if (empty($user) || $user['user_type_id'] != Configure::read('Users.user_type_developer')) {
				$this->controller->disabledActions[] = 'admin_delete';
				$this->controller->viewVars['disabledActions'][] = 'admin_delete';
			}
		}

		if (empty($user) || $this->isExport($user)) {
			$this->controller->disabledActions = array('admin_delete','admin_edit','admin_add','admin_index');
			$this->controller->viewVars['disabledActions'] = array('admin_delete','admin_edit','admin_add','admin_index');
		}
	}

    /**
     * @param $user
     *
     * @return bool
     */
	public function isExport($user) {
		return $user['user_type_id'] == Configure::read('UserType.host');
	}

    /**
     * @param $user
     *
     * @return bool
     */
    public function isArticle($user) {
        return $user['user_type_id'] == Configure::read('UserType.article');
    }

    /**
     * @param $user
     *
     * @return bool
     */
    public function isNPS($user) {
        return $user['user_type_id'] == Configure::read('UserType.nps');
    }
}
