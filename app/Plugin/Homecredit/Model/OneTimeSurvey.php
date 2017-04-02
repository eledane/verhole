<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * OneTimeSurvey Model
 *
 */
class OneTimeSurvey extends HomecreditAppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'one_time_survey';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'trigger' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'score' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url' => array(
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
	public $hiddenFormFields = array(
		'ordering'
	);
	public $hiddenViewFields = array(
		'ordering',
	);
}
