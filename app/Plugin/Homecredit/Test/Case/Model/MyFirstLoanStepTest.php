<?php
App::uses('MyFirstLoanStep', 'Homecredit.Model');

/**
 * MyFirstLoanStep Test Case
 *
 */
class MyFirstLoanStepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.my_first_loan_step',
		'plugin.homecredit.my_first_loan_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MyFirstLoanStep = ClassRegistry::init('Homecredit.MyFirstLoanStep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MyFirstLoanStep);

		parent::tearDown();
	}

}
