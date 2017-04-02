<?php
App::uses('ArticleCategory', 'Homecredit.Model');

/**
 * ArticleCategory Test Case
 *
 */
class ArticleCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.article_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticleCategory = ClassRegistry::init('Homecredit.ArticleCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticleCategory);

		parent::tearDown();
	}

}
