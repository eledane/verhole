<?php
App::uses('Po', 'Homecredit.Model');

/**
 * Po Test Case
 *
 */
class PoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.po'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Po = ClassRegistry::init('Homecredit.Po');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Po);

		parent::tearDown();
	}

}
