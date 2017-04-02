<?php
/**
 * StoreFixture
 *
 */
class StoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'longitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'latitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'openinghours' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'cashloans' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'electronic' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'motorbike' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
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
			'url' => 'Lorem ipsum dolor sit amet',
			'longitude' => 'Lorem ipsum dolor sit amet',
			'latitude' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'openinghours' => 'Lorem ipsum dolor sit amet',
			'cashloans' => 1,
			'electronic' => 1,
			'motorbike' => 1,
			'ordering' => 1,
			'created' => '2014-11-28 10:05:12',
			'modified' => '2014-11-28 10:05:12'
		),
	);

}
