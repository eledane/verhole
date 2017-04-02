<?php
App::uses('MyFirstLoanCategory', 'Homecredit.Model');

/**
 * MyFirstLoanCategory Test Case
 *
 */
class MyFirstLoanCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.my_first_loan_category',
		'plugin.homecredit.my_first_loan_step'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MyFirstLoanCategory = ClassRegistry::init('Homecredit.MyFirstLoanCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MyFirstLoanCategory);

		parent::tearDown();
	}

}
