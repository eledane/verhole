<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * FaqCategory Model
 *
 * @property Faq $Faq
 */
class FaqCategory extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Faq' => array(
			'className' => 'Homecredit.Faq',
			'foreignKey' => 'faq_category_id',
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

	public $belongsTo = array(
        'FaqSection' => array(
            'className' => 'Homecredit.FaqSection',
            'foreignKey' => 'faq_section_id'
        )
    );

	public $actsAs = array(
		'Seed.SeedTranslate' => array('title', 'url')
	);

	public function getBeforeDisplayFindParams($includeName,$opts) {
		if($includeName == 'faq_detail') {
			$this->Behaviors->load('Containable');
			$opts['contain'] = array('Faq', 'FaqSection');
			$this->Faq->loadMedia = true;
		}
		return $opts;
	}
	public $supportedImageTypes = array(
		'category-image-en' => array(
			'description' => "Category image EN version",
			'resolution' => array(
				'width' => '200',
				'height' => '200'
			)
		),
		'category-image-zh' => array(
			'description' => "Category image ZH version",
			'resolution' => array(
				'width' => '200',
				'height' => '200'
			)
		)
	);

}