<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Faq Model
 *
 */
class Faq extends HomecreditAppModel {

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
		'answer' => array(
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
        'FaqCategory' => array(
            'className' => 'Homecredit.FaqCategory',
            'foreignKey' => 'faq_category_id'
        )
    );
	
	public $wysiwygFormFields = array('answer');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('title','answer'),
	);
	public $supportedImageTypes = array(
		'faq-image-en' => array(
			'description' => "FAQ image EN version",
			'resolution' => array(
				'width' => '200',
				'height' => '200'
			)
		),
		'faq-image-zh' => array(
			'description' => "FAQ image ZH version",
			'resolution' => array(
				'width' => '200',
				'height' => '200'
			)
		)
	);
}
