<?php
App::uses('Store', 'Homecredit.Model');

/**
 * Store Test Case
 *
 */
class StoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.store',
		'plugin.homecredit.meeting_request'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Store = ClassRegistry::init('Homecredit.Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
