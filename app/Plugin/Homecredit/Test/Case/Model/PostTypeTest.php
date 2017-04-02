<?php
App::uses('PostType', 'Homecredit.Model');

/**
 * PostType Test Case
 *
 */
class PostTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.post_type',
		'plugin.homecredit.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PostType = ClassRegistry::init('Homecredit.PostType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostType);

		parent::tearDown();
	}

}
