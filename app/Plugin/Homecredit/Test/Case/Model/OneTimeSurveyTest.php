<?php
App::uses('OneTimeSurvey', 'Homecredit.Model');

/**
 * OneTimeSurvey Test Case
 *
 */
class OneTimeSurveyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.homecredit.one_time_survey'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OneTimeSurvey = ClassRegistry::init('Homecredit.OneTimeSurvey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OneTimeSurvey);

		parent::tearDown();
	}

}
