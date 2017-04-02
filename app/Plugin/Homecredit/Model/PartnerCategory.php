<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * PartnerCategory Model
 *
 * @property Partner $Partner
 */
class PartnerCategory extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Partner' => array(
			'className' => 'Homecredit.Partner',
			'foreignKey' => 'partner_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function getCategoriesWithPartners() {
		$this->Behaviors->load('Containable');
		$this->loadMedia = true;
		$this->Partner->loadMedia = true;
		$data = $this->find('all',array(
			'contain' => array(
				'Partner' => array(
					'order' => array(
						'Partner.ordering' => 'ASC'
					)
				)
			),
			'order' => array(
				'PartnerCategory.ordering' => 'ASC'
			)
		));
		return $data;
	}
	
}
