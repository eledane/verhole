<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Product Model
 *
 * @property ProductCategory $ProductCategory
 * @property Promotion $Promotion
 */
class Product extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'months' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'monthly' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'price' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'product_category_id' => array(
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
		'ProductCategory' => array(
			'className' => 'Homecredit.ProductCategory',
			'foreignKey' => 'product_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
