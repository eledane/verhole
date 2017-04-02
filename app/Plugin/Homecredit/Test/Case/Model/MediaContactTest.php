<?php
App::uses('MediaContact', 'Homecredit.Model');

/**
 * MediaContact Test Case
 *
 */
class MediaContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.media_contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaContact = ClassRegistry::init('Homecredit.MediaContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaContact);

		parent::tearDown();
	}

}
