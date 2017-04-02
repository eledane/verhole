<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * Articles Controller
 *
 */
class ArticlesController extends HomecreditAppController {
	public function beforeFilter() {
		parent::beforeFilter();
		if($this->request->action == 'getArticles') {
			$this->Auth->allow();
		}
		$this->Article->Behaviors->load('Containable');
	}
	
	public function getArticles($categoryId,$offset = 0) {
		$this->fakePageData();
		$this->Article->loadMedia = true;
		$data = $this->Article->find('all',array(
			'order'=> $this->Article->getPublicOrdering(),
			'conditions' => array(
				'Article.article_category_id' => $categoryId,
			),
			'offset' => $offset,
			'limit' => Configure::read('Article.items_per_page')+1
		));
		$this->set('articles',$data);
		$this->loadModel('Pages.Page');
		$page = $this->Page->find('first',array(
			'conditions' => array(
				'Page.id' => Configure::read('Page.media')
			)
		));
		$this->set('page',$page);
		$this->set('newOffset',$offset+Configure::read('Article.items_per_page'));
		$this->set('categoryId',$categoryId);
		$this->view = 'Homecredit.Articles/list';
	}
}
