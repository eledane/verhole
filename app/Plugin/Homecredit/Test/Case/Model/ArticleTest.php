<?php
App::uses('Article', 'Homecredit.Model');

/**
 * Article Test Case
 *
 */
class ArticleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.article'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Article = ClassRegistry::init('Homecredit.Article');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Article);

		parent::tearDown();
	}

}
