<?php
App::uses('WalkInCashLoan', 'Homecredit.Model');

/**
 * WalkInCashLoan Test Case
 *
 */
class WalkInCashLoanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.walk_in_cash_loan',
		'plugin.homecredit.csv_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WalkInCashLoan = ClassRegistry::init('Homecredit.WalkInCashLoan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WalkInCashLoan);

		parent::tearDown();
	}

}
