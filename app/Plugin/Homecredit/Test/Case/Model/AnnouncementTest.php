<?php
App::uses('Announcement', 'Homecredit.Model');

/**
 * Announcement Test Case
 *
 */
class AnnouncementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.announcement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Announcement = ClassRegistry::init('Homecredit.Announcement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Announcement);

		parent::tearDown();
	}

}
