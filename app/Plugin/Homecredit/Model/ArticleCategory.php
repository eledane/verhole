<?php
App::uses('HomecreditAppModel', 'Homecredit.Model');
/**
 * ArticleCategory Model
 *
 */
class ArticleCategory extends HomecreditAppModel {

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
	);
	 public $hasMany = array(
        'Article' => array(
            'className' => 'Homecredit.Article',
			'foreignKey' => 'article_category_id',
        )
    );
	 
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url','name'),
	);
	
	public function getCategoriesWithArticles() {
		$this->Behaviors->load('Containable');
		$this->Article->Behaviors->load('Containable');
		$this->Article->loadMedia = true;
		$data = $this->find('all',array(
			'contain' => array(
				'Article' => array(
					//Trochu hack, nactu si o jeden vic nez zobrazuju a podle toho poznam, jesli mam zobrazit link na dalsi
					'limit' => 500,
				)
			),
		));
		//debug($data);die;
		if(!empty($data)) {
			$tags = $this->Article->ArticleTag->find('all');
			$tags = Hash::combine($tags, '{n}.ArticleTag.id', '{n}.ArticleTag');
			foreach($data as $categoryKey => $row) {
				$row['Article'] = Hash::sort($row['Article'], '{n}.published', 'DESC');
				$data[$categoryKey]['Article'] = $row['Article'];
				foreach($row['Article'] as $articleKey => $article) {
					$this->Article->ArticleTag->locale = $this->Article->locale;
					$articleDetail = $this->Article->find('first',array(
						'conditions' => array(
							'Article.id' => $article['id']
						),
						'contain' => array(
							'ArticleTag'
						)
					));
					if(!empty($articleDetail['ArticleTag'])) {
						$ids = Hash::extract($articleDetail['ArticleTag'], '{n}.id');
						$data[$categoryKey]['Article'][$articleKey]['ArticleTag'] = array_intersect_key($tags,  array_flip($ids));
					} else {
						$data[$categoryKey]['Article'][$articleKey]['ArticleTag'] = array();
					}
				}
			}
		}
		return $data;
	}
}
