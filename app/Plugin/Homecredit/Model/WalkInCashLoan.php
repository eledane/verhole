<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * WalkInCashLoan Model
 *
 * @property CsvFile $CsvFile
 */
class WalkInCashLoan extends HomecreditAppModel {
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CsvFile' => array(
			'className' => 'Homecredit.CsvFile',
			'foreignKey' => 'csv_file_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function getFirst() {
		$this->Behaviors->load('Containable');
		return $this->find('first',array(
		));
	}
	
	public function dataBeforeDisplay($data) {
		if(!empty($data['WalkInCashLoan']['csv_file_id'])) {
			$csvFile = $this->CsvFile->getForamtedData($data['WalkInCashLoan']['csv_file_id']);
			$data['CsvFile'] = $csvFile;
		}
		return $data;
	}
}
