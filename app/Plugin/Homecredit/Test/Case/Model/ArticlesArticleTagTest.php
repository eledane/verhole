<?php
App::uses('ArticlesArticleTag', 'Homecredit.Model');

/**
 * ArticlesArticleTag Test Case
 *
 */
class ArticlesArticleTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.articles_article_tag',
		'plugin.homecredit.article',
		'plugin.homecredit.article_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticlesArticleTag = ClassRegistry::init('Homecredit.ArticlesArticleTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticlesArticleTag);

		parent::tearDown();
	}

}
