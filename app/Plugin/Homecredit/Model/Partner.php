<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Partner Model
 *
 */
class Partner extends HomecreditAppModel {

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
		'link' => array(
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
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('name'),
	);
	
	public $belongsTo = array(
		'PartnerCategory' => array(
			'className' => 'Homecredit.PartnerCategory',
			'foreignKey' => 'partner_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
