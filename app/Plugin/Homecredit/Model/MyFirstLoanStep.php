<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * MyFirstLoanStep Model
 *
 * @property MyFirstLoanCategory $MyFirstLoanCategory
 */
class MyFirstLoanStep extends HomecreditAppModel {

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
		'url' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'my_first_loan_category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MyFirstLoanCategory' => array(
			'className' => 'Homecredit.MyFirstLoanCategory',
			'foreignKey' => 'my_first_loan_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name','description', 'tooltip'),
	);
}
