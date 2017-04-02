<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * DownloadCategory Model
 *
 * @property Download $Download
 */
class DownloadCategory extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Download' => array(
			'className' => 'Homecredit.Download',
			'foreignKey' => 'download_category_id',
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
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('name'),
	);
	
	
	public function getBeforeDisplayFindParams($name,$currentParams) {
		if(empty($currentParams['contain'])) {
			$currentParams['contain'] =array();
		}
		$this->Behaviors->load('Containable');
		$this->Download->loadMedia = true;
		$currentParams['contain']['Download'] =
				array(
				'order' => array(
					'Download.ordering' => 'ASC'
				)
		);
		return $currentParams;
	}

}
