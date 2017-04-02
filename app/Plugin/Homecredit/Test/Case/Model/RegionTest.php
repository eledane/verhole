<?php
App::uses('Region', 'Homecredit.Model');

/**
 * Region Test Case
 *
 */
class RegionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.region',
		'plugin.homecredit.city'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Region = ClassRegistry::init('Homecredit.Region');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Region);

		parent::tearDown();
	}

}
