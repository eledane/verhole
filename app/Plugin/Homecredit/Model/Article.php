<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * Article Model
 *
 */
class Article extends HomecreditAppModel {

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
		'perex' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content' => array(
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
        'ArticleCategory' => array(
            'className' => 'Homecredit.ArticleCategory',
            'foreignKey' => 'article_category_id'
        )
    );
	
	public $hasAndBelongsToMany = array(
		'ArticleTag' => array(
			'className' => 'Homecredit.ArticleTag',
			'joinTable' => 'articles_article_tags',
			'foreignKey' => 'article_id',
			'associationForeignKey' => 'article_tag_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	
	public $wysiwygFormFields = array('perex','content');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name','perex','content'),
	);
	
	public function beforeFind($query) {
		if(Configure::read('Config.language') != "zho"){
			$query['conditions']['Article.chinese_only'] = '0';
		} else {
			$query['conditions']['Article.english_only'] = '0';
		}
		return $query;
	}
	
	public function	getPublicOrdering() {
		return array(
				'Article.published' => 'DESC',
		);
	}
}
