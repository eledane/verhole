<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Setting Model
 *
 */
class Setting extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $hiddenFormFields = array('name','ordering');
	
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	public $hasMedia = false;
	
	public function getValue($name) {
		return $this->find('first',array(
			'conditions' => array(
				'Setting.name' => $name
			)
		));
	}
	
	public function getEmails($name) {
		$values = $this->getValue($name);
		if(!empty($values)) {
			$values = $values['Setting']['value'];
			$values = str_replace(' ', '', $values);
			$values = explode(',', $values);
		}
		return $values;
	}
	
	public function getCallcenterEmails() {
		return $this->getEmails('callcenter email');
	}
	
	public function getContactUsEmails() {
		return $this->getEmails('contact us email');
	}
	public function getPartnersEmails() {
		return $this->getEmails('partners email');
	}
}
