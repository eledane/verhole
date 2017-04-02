<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * FaqSection Model
 *
 */
class FaqSection extends HomecreditAppModel {

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
	public $hasMany = array(
		'FaqCategory' => array(
			'className' => 'Homecredit.FaqCategory',
			'foreignKey' => 'faq_section_id',
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
		'Seed.SeedTranslate' => array('title', 'url')
	);
	/*public function getBeforeDisplayFindParams($includeName,$opts) {
		if($includeName == 'faq_category_detail') {
			$this->Behaviors->load('Containable');
			$opts['contain'] = array('FaqCategory');
		}
		return $opts;
	}*/
	public function getBeforeDisplayFindParams($name,$currentParams) {
        $this->Behaviors->load('Containable');
    	  $currentParams['contain'] = array(
            'FaqCategory' => array('Faq')
        );
        $this->FaqCategory->loadMedia = true;
       return $currentParams;
	}
}
