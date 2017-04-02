<?php
/**
 * WalkInCashLoanFixture
 *
 */
class WalkInCashLoanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'walkInCashLoan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'csv_file_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'csv_file_id' => 1,
			'ordering' => 1,
			'created' => '2015-05-15 16:50:35',
			'modified' => '2015-05-15 16:50:35'
		),
	);

}
