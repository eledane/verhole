<?php
App::uses('PartnerCategory', 'Homecredit.Model');

/**
 * PartnerCategory Test Case
 *
 */
class PartnerCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.partner_category',
		'plugin.homecredit.partner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PartnerCategory = ClassRegistry::init('Homecredit.PartnerCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PartnerCategory);

		parent::tearDown();
	}

}
