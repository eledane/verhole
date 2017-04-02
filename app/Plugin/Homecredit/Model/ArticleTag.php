<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * ArticleTag Model
 *
 * @property Article $Article
 */
class ArticleTag extends HomecreditAppModel {

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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Article' => array(
			'className' => 'Homecredit.Article',
			'joinTable' => 'articles_article_tags',
			'foreignKey' => 'article_tag_id',
			'associationForeignKey' => 'article_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
	
	public $hiddenFormFields = array('Article');
	
	public $actsAs = array(
		'Seed.SeedTranslate' => array('name','url'),
	);

}
