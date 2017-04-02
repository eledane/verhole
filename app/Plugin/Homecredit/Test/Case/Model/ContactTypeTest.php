<?php
App::uses('ContactType', 'Homecredit.Model');

/**
 * ContactType Test Case
 *
 */
class ContactTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.contact_type',
		'plugin.homecredit.contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactType = ClassRegistry::init('Homecredit.ContactType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactType);

		parent::tearDown();
	}

}
