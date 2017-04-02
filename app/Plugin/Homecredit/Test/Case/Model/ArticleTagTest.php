<?php
App::uses('ArticleTag', 'Homecredit.Model');

/**
 * ArticleTag Test Case
 *
 */
class ArticleTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.article_tag',
		'plugin.homecredit.article',
		'plugin.homecredit.articles_article_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticleTag = ClassRegistry::init('Homecredit.ArticleTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticleTag);

		parent::tearDown();
	}

}
