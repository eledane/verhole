<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Store Model
 *
 * @property MeetingRequest $MeetingRequest
 */
class Store extends HomecreditAppModel {

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
		'longitude' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'latitude' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cashloans' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'posloans' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'MeetingRequest' => array(
			'className' => 'Homecredit.MeetingRequest',
			'foreignKey' => 'store_id',
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
	
//	public $actsAs = array(
//		'Seed.SeedTranslate' => array('name','url','address','openinghours'),
//	);
	
	public function getStores (){
		$this->loadMedia = true;
		return $this->find('all');
	}
	
	public function getProvinces($type = null) {
		$options = array(
			'order' => array(
				'Store.province' => 'ASC'
			),
			'fields' => array(
				'DISTINCT (Store.province) AS province'
			)
		);
		$options = $this->_addTypeCondition($options, $type);
		$provinces = $this->find('all',$options);
		return Hash::extract($provinces, '{n}.Store.province');
	}
	
	public function getCities($province = null, $type = null) {
		$options = array(
			'order' => array(
				'Store.city' => 'ASC'
			),
			'fields' => array(
				'DISTINCT (Store.city) AS city'
			),
			'conditions' => array(
				'Store.province' => $province
			)
		);
		$options = $this->_addTypeCondition($options, $type);
		$cities = $this->find('all',$options);
		return Hash::extract($cities, '{n}.Store.city');
	}
	
	public function getStoresFiltered($province = null,$city = null, $type = null) {
		$options = array(
			'order' => array(
				'Store.name' => 'ASC'
			),
			'conditions' => array(
				'Store.province' => $province,
				'Store.city' => $city
			)
		);
		$options = $this->_addTypeCondition($options, $type);
		$stores = $this->find('all',$options);
		return $stores;
	}
	
	protected function _addTypeCondition($options,$type = null) {
		if(!empty($type)) {
			if(empty($options['conditions'])) {
				$options['conditions'] = array();
			}
			$options['conditions'][] = array(
				'Store.pos_type' => strtoupper($type)
			);
		}
		return $options;
	}

}
