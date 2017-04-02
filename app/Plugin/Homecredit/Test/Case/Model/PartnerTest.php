<?php
App::uses('Partner', 'Homecredit.Model');

/**
 * Partner Test Case
 *
 */
class PartnerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.partner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Partner = ClassRegistry::init('Homecredit.Partner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Partner);

		parent::tearDown();
	}

}
