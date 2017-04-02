<?php
App::uses('ProductCategory', 'Homecredit.Model');

/**
 * ProductCategory Test Case
 *
 */
class ProductCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.product_category',
		'plugin.homecredit.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductCategory = ClassRegistry::init('Homecredit.ProductCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductCategory);

		parent::tearDown();
	}

}
