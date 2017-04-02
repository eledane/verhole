<?php
App::uses('Download', 'Homecredit.Model');

/**
 * Download Test Case
 *
 */
class DownloadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.download'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Download = ClassRegistry::init('Homecredit.Download');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Download);

		parent::tearDown();
	}

}
