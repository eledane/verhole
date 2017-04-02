<?php
App::uses('MeetingRequest', 'Homecredit.Model');

/**
 * MeetingRequest Test Case
 *
 */
class MeetingRequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.meeting_request',
		'plugin.homecredit.pos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingRequest = ClassRegistry::init('Homecredit.MeetingRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingRequest);

		parent::tearDown();
	}

}
