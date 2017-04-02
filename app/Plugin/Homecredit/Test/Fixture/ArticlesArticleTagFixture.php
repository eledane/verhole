<?php
/**
 * ArticlesArticleTagFixture
 *
 */
class ArticlesArticleTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'article_tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
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
			'article_id' => 1,
			'article_tag_id' => 1,
			'created' => '2015-05-11 13:56:12',
			'modified' => '2015-05-11 13:56:12'
		),
	);

}
