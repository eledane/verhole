<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Testimonial Model
 *
 */
class Testimonial extends HomecreditAppModel {

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
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'URL is not unique'
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
		'city' => array(
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
	
	public $wysiwygFormFields = array('content');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name','city','description','content'),
	);
	public $supportedImageTypes = array(
		'testimonial-image' => array(
			'description' => "Testimonial image",
			'resolution' => array(
				'width' => '200',
				'height' => '200'
			)
		),
		'bubble-en' => array(
			'description' => "Bubble en version",
			'resolution' => array(
				'width' => '192',
				'height' => '142'
			)
		),
		'bubble-zh' => array(
			'description' => "Bubble zh version",
			'resolution' => array(
				'width' => '192',
				'height' => '142'
			)
		)
	);
}
