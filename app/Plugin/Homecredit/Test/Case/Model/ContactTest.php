<?php
App::uses('Contact', 'Homecredit.Model');

/**
 * Contact Test Case
 *
 */
class ContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contact = ClassRegistry::init('Homecredit.Contact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contact);

		parent::tearDown();
	}

}
