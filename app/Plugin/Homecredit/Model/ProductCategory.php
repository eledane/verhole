<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * ProductCategory Model
 *
 * @property Product $Product
 */
class ProductCategory extends HomecreditAppModel {

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
		'description' => array(
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
		'Product' => array(
			'className' => 'Homecredit.Product',
			'foreignKey' => 'product_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
			'innerForm' => array(
				'id',
				'price',
				'months',
				'monthly',
			)
		)
	);
	
	public $belongsTo = array(
        'CsvFile' => array(
            'className' => 'Homecredit.CsvFile',
            'foreignKey' => 'csv_file_id'
        )
    );
	
	public $wysiwygFormFields = array('description');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name','description'),
	);
	public function getProductCategories() {
		$this->loadMedia = true;
		$this->Behaviors->load('Containable');
		$data = $this->find('all');
		return $data;
	}
	public function getCategoryWithProducts($categoryId) {
		$this->loadMedia = true;
		$this->Behaviors->load('Containable');
		$this->Product->loadMedia = true;
		return $this->find('first',array(
			'contain' => array(
				'Product'=> array(
					'order' => array(
						'Product.ordering' => 'ASC'
					)
				),
			),
			'conditions' => array(
				'ProductCategory.id' => $categoryId
			)
		));
	}
	
	public function getCashLoans() {
		return $this->getCategoryWithProducts(Configure::read('ProductCategory.cashloans'));
	}
	public function getElectronics() {
		return $this->getCategoryWithProducts(Configure::read('ProductCategory.electronics'));
	}
	public function getMotorbikes() {
		return $this->getCategoryWithProducts(Configure::read('ProductCategory.motorbikes'));
	}
	public function dataBeforeDisplay($data) {
		if(!empty($data['ProductCategory']['csv_file_id'])) {
			$csvFile = $this->CsvFile->getForamtedData($data['ProductCategory']['csv_file_id']);
			$data['CsvFile'] = $csvFile;
		}
		return $data;
	}
	
	public function getBeforeDisplayFindParams($name,$currentParams) {
		if($name == 'categories') {
			$this->Behaviors->load('Containable');
			$currentParams['contain'] = array(
				'Product' => array(
					'order' => array(
						'Product.price' => 'ASC',
						'Product.months' => 'ASC'
					)
				)
			);
		}
		return $currentParams;
	}
}
