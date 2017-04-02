<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * ArticlesArticleTag Model
 *
 * @property Article $Article
 * @property ArticleTag $ArticleTag
 */
class ArticlesArticleTag extends HomecreditAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'article_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'article_tag_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Article' => array(
			'className' => 'Homecredit.Article',
			'foreignKey' => 'article_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ArticleTag' => array(
			'className' => 'Homecredit.ArticleTag',
			'foreignKey' => 'article_tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
