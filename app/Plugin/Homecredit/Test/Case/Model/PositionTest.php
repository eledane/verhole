<?php
App::uses('Position', 'Homecredit.Model');

/**
 * Position Test Case
 *
 */
class PositionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.position'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Position = ClassRegistry::init('Homecredit.Position');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Position);

		parent::tearDown();
	}

}
