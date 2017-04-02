<?php

App::uses('HomecreditAppModel', 'Homecredit.Model');

/**
 * Post Model
 *
 * @property PostType $PostType
 */
class Post extends HomecreditAppModel {

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'url' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'perex' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'highlighted' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
			'onlyone' => array(
				'rule' => 'checkHighlightedPosts',
				'message' => 'Only one post can be highlighted'
			)
		),
		'publication_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
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
		'PostType' => array(
			'className' => 'Homecredit.PostType',
			'foreignKey' => 'post_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $wysiwygFormFields = array('perex', 'content');
	public $actsAs = array(
		'Seed.SeedTranslate' => array('url', 'name', 'perex', 'content'),
	);

	public function checkHighlightedPosts($check) {
		if (!empty($this->data[$this->alias]['highlighted']) && $this->data[$this->alias]['highlighted']) {
			$options = array(
				'conditions' => array(
					$this->alias . '.highlighted' => true,
				)
			);
			if (!empty($this->data[$this->alias][$this->primaryKey])) {
				$options['conditions'][] = array(
					$this->alias . '.' . $this->primaryKey . ' <>' => $this->data[$this->alias][$this->primaryKey]
				);
			}
			$found = $this->find('first', $options);
			return empty($found);
		}
		return true;
	}

	public function getHighlight() {
		$this->loadMedia = true;
		$this->Behaviors->load('Containable');
		return $this->find('first', array(
			'conditions' => array(
				'highlighted' => true
			),
			'contain' => array(
				'PostType'
			)
		));
	}
	
	public function getPostsByType($typeId,$limit,$excludeHighlighted = true) {
		$this->loadMedia = true;
		$this->Behaviors->load('Containable');
		$options = array(
			'limit' => $limit,
			'conditions' => array(
				'post_type_id' => $typeId
			),
			'order' => array(
				'publication_date' => 'DESC'
			),
			'contain' => array(
				'PostType'
			)
		);
		if($excludeHighlighted) {
			$options['conditions'][] = array('highlighted' => false);
		}
		return $this->find('all',$options);
	}
	
	public function getBulletin() {
		return $this->getPostsByType(Configure::read('Posts.type_bulletin'),3);
	} 
	public function getEfforts() {
		return $this->getPostsByType(Configure::read('Posts.type_efforts'),3);
	} 
	
	public function getBeforeDisplayFindParams($name,$currentParams) {
		if(empty($currentParams['conditions'])) {
			$currentParams['conditions'] = array();
		}
		if($name == 'bulletinPosts') {
			$currentParams['conditions'][] = array(
				$this->alias.'.post_type_id' => Configure::read('Posts.type_bulletin')
			);
			$currentParams['order'] = array(
				$this->alias.'.publication_date' => 'DESC'
			);
		}
		if($name == 'effortsPosts') {
			$currentParams['conditions'][] = array(
				$this->alias.'.post_type_id' => Configure::read('Posts.type_efforts')
			);
			$currentParams['order'] = array(
				$this->alias.'.publication_date' => 'DESC'
			);
		}
		return $currentParams;
	}
	
	public function dataBeforeDisplay($data) {
		if(!empty($data['Post'])) {
			$id = $data['Post']['id'];
			$this->loadMedia = true;
			$data['RelatedPosts'] = $this->find('all',array(
				'conditions' => array(
					'Post.id <> ' => $id,
					'Post.post_type_id' => $data['Post']['post_type_id']
				),
				'limit' => 3,
				'order' => array(
					'Post.publication_date' => 'DESC'
				)
			));
		}
		return $data;
	}

}
