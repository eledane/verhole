<?php
/**
 * OneTimeSurveyFixture
 *
 */
class OneTimeSurveyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'one_time_survey';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'trigger' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'score' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'shared' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'trigger' => 'Lorem ipsum dolor sit amet',
			'score' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'shared' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'ordering' => 1,
			'created' => '2015-09-02 18:32:33',
			'modified' => '2015-09-02 18:32:33'
		),
	);

}
