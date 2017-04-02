<?php
App::uses('DownloadCategory', 'Homecredit.Model');

/**
 * DownloadCategory Test Case
 *
 */
class DownloadCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.download_category',
		'plugin.homecredit.download'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DownloadCategory = ClassRegistry::init('Homecredit.DownloadCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DownloadCategory);

		parent::tearDown();
	}

}
