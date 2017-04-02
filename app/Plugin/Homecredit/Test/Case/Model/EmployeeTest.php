<?php
App::uses('Employee', 'Homecredit.Model');

/**
 * Employee Test Case
 *
 */
class EmployeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.employee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employee = ClassRegistry::init('Homecredit.Employee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employee);

		parent::tearDown();
	}

}
