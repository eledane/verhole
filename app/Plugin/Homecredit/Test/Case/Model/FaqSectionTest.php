<?php
App::uses('FaqSection', 'Homecredit.Model');

/**
 * FaqSection Test Case
 *
 */
class FaqSectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.faq_section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FaqSection = ClassRegistry::init('Homecredit.FaqSection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaqSection);

		parent::tearDown();
	}

}
