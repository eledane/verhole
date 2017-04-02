<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * MyFirstLoanCategory Model
 *
 * @property MyFirstLoanStep $MyFirstLoanStep
 */
class MyFirstLoanCategory extends HomecreditAppModel {

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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'MyFirstLoanStep' => array(
			'className' => 'Homecredit.MyFirstLoanStep',
			'foreignKey' => 'my_first_loan_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Children' => array(
			'className' => 'Homecredit.MyFirstLoanCategory',
			'foreignKey' => 'parent_id',
			'dependent' => true,
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
	
	public $belongsTo = array(
		'Parent' => array(
			'className' => 'Homecredit.MyFirstLoanCategory',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name','slug','tree_slug'),
		'SeedTree',
		'SluggableTree'=>array(
			'overwrite' => true, 
            'length' => 64, 
            'slug' => 'slug', 
            'pathField' => 'tree_slug', 
            'label' => array('name'), 
            'delimiter' => '/',
			'treeBehavior' => 'SeedTree'
		)
	);
	public $parentField = 'parent_id';
	
	public function getCategoriesWithSteps() {
		$this->Behaviors->load('Containable');
		$this->loadMedia = true;
		$this->MyFirstLoanStep->loadMedia = true;
		$steps = $this->find('threaded',array(
			'order' => array(
				$this->alias.'.ordering' => "ASC"
			),
			'contain' => array(
				'MyFirstLoanStep' => array(
					'order' => array(
						'MyFirstLoanStep.ordering' => 'ASC'
					)
				)
			)
		));
		return $steps;
	}

}
