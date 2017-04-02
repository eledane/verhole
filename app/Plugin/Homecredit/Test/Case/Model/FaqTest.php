<?php
App::uses('Faq', 'Homecredit.Model');

/**
 * Faq Test Case
 *
 */
class FaqTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.faq'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Faq = ClassRegistry::init('Homecredit.Faq');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Faq);

		parent::tearDown();
	}

}
