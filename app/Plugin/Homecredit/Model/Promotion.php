<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Promotion Model
 *
 * @property Product $Product
 */
class Promotion extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
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
	
	public $belongsTo = array(
		'CsvFile' => array(
			'className' => 'Homecredit.CsvFile',
			'foreignKey' => 'csv_file_id'
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public $wysiwygFormFields = array('description');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','title','description','short_description','absolute_url'),
	);
	public $hiddenViewFields = array(
		'meta_description',
	);
	public function getPromotions() {
		$this->loadMedia = true;
		$this->Behaviors->load('Containable');
		$data = $this->find('all');
// 		$data[] = array();
// 		echo '<!--';print_r($data);echo '-->';
		return $data;
	}
	public function getBeforeDisplayFindParams($includeName,$opts) {
		$this->Behaviors->load('Containable');
		$opts['conditions'][] = array('Promotion.published' => true); 
		return $opts;
	}
	
	public function dataBeforeDisplay($data) {
		if(!empty($data['Promotion']['csv_file_id'])) {
			$csvFile = $this->CsvFile->getForamtedData($data['Promotion']['csv_file_id']);
			$data['CsvFile'] = $csvFile;
		}
		return $data;
	}
	public $supportedImageTypes = array(
		'desktop-en' => array(
			'description' => "Desktop EN version",
			'resolution' => array(
				'width' => '1920',
				'height' => '402'
			)
		),
		'desktop-zh' => array(
			'description' => "Desktop ZH version",
			'resolution' => array(
				'width' => '1920',
				'height' => '402'
			)
		),
		'mobile-en' => array(
			'description' => "Mobile EN version",
			'resolution' => array(
				'width' => '768',
				'height' => '402'
			)
		),
		'mobile-zh' => array(
			'description' => "Mobile ZH version",
			'resolution' => array(
				'width' => '768',
				'height' => '402'
			)
		),
	);
}
