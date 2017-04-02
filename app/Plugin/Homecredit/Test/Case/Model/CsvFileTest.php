<?php
App::uses('CsvFile', 'Homecredit.Model');

/**
 * CsvFile Test Case
 *
 */
class CsvFileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.csv_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CsvFile = ClassRegistry::init('Homecredit.CsvFile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CsvFile);

		parent::tearDown();
	}

}
