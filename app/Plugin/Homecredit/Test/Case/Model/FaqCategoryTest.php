<?php
App::uses('FaqCategory', 'Homecredit.Model');

/**
 * FaqCategory Test Case
 *
 */
class FaqCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.faq_category',
		'plugin.homecredit.faq'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FaqCategory = ClassRegistry::init('Homecredit.FaqCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaqCategory);

		parent::tearDown();
	}

}
