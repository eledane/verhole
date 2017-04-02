<?php
class HomecreditSchema extends CakeSchema {

	public $product_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'csv_file_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $products = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'price'=>array('type' => 'float', 'null' => false, 'default' => 0),
		'months'=>array('type' => 'integer', 'null' => false, 'default' => 0),
		'monthly'=>array('type' => 'float', 'null' => false, 'default' => 0),
		'product_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $promotions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'meta_description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'short_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'absolute_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'end' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'hide_countdown' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'hide_title' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'hide_detail_mobile' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'hide_form' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'winter_promotion' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
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
	 * TODO - Nahrazena tabulkou Stores, smazat az budou presunuta data
	 * @var type
	 */
	public $pos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'longitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'latitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'openinghours' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'cashloans' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'electronic' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'motorbike' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $stores = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'longitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'latitude' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'pos_type' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'province' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'street' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'district' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'openinghours' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'cashloans' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'posloans' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $faqs = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'answer' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'faq_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $faq_categories = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'hot_question_category' => array('type' => 'boolean', 'null' => true, 'default' => null, 'length' => 1),
		'show_in_faq_page' => array('type' => 'boolean', 'null' => true, 'default' => null, 'length' => 1),
		'show_in_financial_literacy_page' => array('type' => 'boolean', 'null' => true, 'default' => 1, 'length' => 1),
		'faq_section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $faq_sections = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $contacts = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'client_comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'section' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'calculator_type' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'promotion_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'loan_amount' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'repayment_length' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'documents' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'interested_in' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'work_income' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'parttime_income' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rents' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'food' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'children_cost' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'other_expenses' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'agreement' => array('type' => 'boolean', 'null' => true, 'default' => null, 'length' => 1),
		'added_services' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'fb_account' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'current_customer' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'contact_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'province_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'city_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'form_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ip_address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'uuid' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'is_mobile' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $contact_types = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $partners = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'link' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'partner_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $partner_categories = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $positions = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'link' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'link_to_position' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'vietnamese_only' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $article_categories = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $articles = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'perex' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'article_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'chinese_only' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'english_only' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'published' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $article_tags = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $articles_article_tags = array(
		//integer id
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



	public $employees = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'position' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $my_first_loan_categories = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10 ),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 255, 'key' => 'unique', 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'tree_slug' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 255, 'key' => 'unique', 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $my_first_loan_steps = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'tooltip' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'my_first_loan_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $testimonials = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8', 'length' => 200),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $csv_files = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'months' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'parsed_json' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'file' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $settings = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $regions = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $cities = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'region_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $downloads = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'download_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $download_categories = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $walk_in_cash_loans= array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'csv_file_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $posts= array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'post_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'perex' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'youku_video' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'baidu_video' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'qq_video' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'highlighted' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'publication_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $post_types= array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $media_contacts = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'region' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $one_time_survey = array(
		//integer id
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'trigger' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'score' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'shared' => array('type' => 'boolean', 'null' => true, 'default' => 0, 'length' => 1),
		'social_networks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	
	public $announcements = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'link' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => 1, 'length' => 1),
		'ordering' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
