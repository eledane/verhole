<?php
global $config;

// move to model "Website"

$config['Website.title'] = 'Home credit China';
$config['Website.title_delimiter'] = ' | ';
$config['Website.company']= 'User Technologies s.r.o.';
//Teoreticky vzdy usertech
$config['Website.author']= 'User Technologies s.r.o.';
$config['Website.author_url'] = 'http://www.usertechnologies.com';
//Muze byt i jina
$config['Website.copyright'] = $config['Website.company'];

// availiable languages displayCode => Tcode
$config['Config.availableLanguages'] = array(
        'en' => 'eng',
		'zh' => 'zho'
);

$languages = Configure::read('Config.availableLanguages');
// default language
$config['Config.defaultLanguage'] = $config['Config.availableLanguages']['zh'];
Configure::write('Config.language',$config['Config.defaultLanguage']);

$config['Export.output_types'] = array(
	'Excel5' => array(
		'class_name' => 'Excel5',
		'display_name' => 'Excel 5',
		'ext' => 'xls',
		'mime' => 'application/vnd.ms-excel'
	),
	'CSV' => array(
		'class_name' => 'Excel2007',
		'display_name' => 'Excel 2007',
		'ext' => 'xlsx',
		'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
	),
	'HTML' => array(
		'class_name' => 'HTML',
		'display_name' => 'HTML',
		'ext' => 'html',
		'mime' => 'text/html'
	),
	'PDF' => array(
		'class_name' => 'PDF',
		'display_name' => 'PDF',
		'ext' => 'pdf',
		'mime' => 'application/pdf'
	),
	'CSV' => array(
		'class_name' => 'CSV',
		'display_name' => 'CSV',
		'ext' => 'csv',
		'mime' => 'text/csv'
	),
);

$config['Media.imageExtensions'] = array('jpg','png','bmp');
$config['Menus.adminMenu']=array(
	array(
		'name'=>'Seed',
		'children'=>array(
			array(
				'name'=> 'Users',
				'url'=>array(
					'plugin'=>'seed',
					'controller'=>'users'
				)
			),
		),
	),
	array(
		'name'=>'Pages',
		'url'=>array(
			'plugin'=>'pages',
			'controller'=>'pages'
		),
		'children' => array(
			array(
				'name'=>'Menu',
				'url'=>array(
					'plugin'=>'menus',
					'controller'=>'menus'
				),
			)
		)
	),
//	array(
//		'name'=>'Modules',
//		'url'=>array(
//			'plugin'=>'modules',
//			'controller'=>'modules'
//		),
//	),
	array(
		'name'=>'Texts',
		'url'=>array(
			'plugin'=>'texts',
			'controller'=>'texts',
		),
	),

	array(
		'name'=>'Articles',
		'url'=>array(
			'plugin'=>'homecredit',
			'controller'=>'articles',
		),
		'children' => array(
			array(
				'name'=>'Article categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'articlecategories',
				),
			),
			array(
				'name'=>'Article tags',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'articleTags',
				),
			),

		)
	),

	array(
		'name'=>'FAQ',
		'url'=>array(
			'plugin'=>'homecredit',
			'controller'=>'faqs',
		),
		'children' => array(
			array(
				'name'=>'FAQ Categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'faqcategories',
				),
			),
			array(
				'name'=>'FAQ Sections',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'faqsections',
				),
			),
		)
	),

	array(
		'name'=>'Products',
//		'url'=>array(
//			'plugin'=>'homecredit',
//			'controller'=>'products',
//		),
		'children' => array(
			array(
				'name'=>'Product Categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'productcategories',
				),
			),
			array(
				'name'=>'Promotions',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'promotions',
				),
			),
		)
	),
	array(
		'name'=>'Posts',
		'children' => array(
			array(
				'name'=>'Posts',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'posts',
				),
			),
			array(
				'name'=>'Post types',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'posttypes',
				),
			),
		)
	),
	array(
		'name'=>'Walk In Cash Loan',
		'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'walkincashloans',
				),
	),
	array(
		'name'=>'My First Loan',
		'children' => array(
			array(
				'name'=>'Categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'myfirstloancategories',
				),
			),
			array(
				'name'=>'Steps',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'myfirstloansteps',
				),
			),
		)
	),
	array(
		'name'=>'CSV files',
		'url'=>array(
			'plugin'=>'homecredit',
			'controller'=>'csvfiles',
		),
	),
//	array(
//		'name'=>'Settings',
//		'url'=>array(
//			'plugin'=>'homecredit',
//			'controller'=>'settings',
//		),
//	),

	array(
		'name'=>'Homecredit',
		'children' => array(
			array(
				'name'=>'Announcements',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'announcements',
				),
			),
			array(
				'name'=>'Stores',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'stores',
				),
			),
			array(
				'name'=>'Contact',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'contacts',
				),
			),
			array(
				'name'=>'Employee',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'employees',
				),
			),
			array(
				'name'=>'Partners',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'partners',
				),
			),
			array(
				'name'=>'Partner Categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'partnercategories',
				),
			),
			array(
				'name'=>'Testimonials',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'testimonials',
				),
			),
			array(
				'name'=>'Regions',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'regions',
				),
			),
			array(
				'name'=>'Cities',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'cities',
				),
			),
			array(
				'name'=>'Downloads',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'downloads',
				),
			),
			array(
				'name'=>'Download categories',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'downloadcategories',
				),
			),
			array(
				'name'=>'Contact types',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'contacttypes',
				),
			),
			array(
				'name'=>'Media Contacts',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'mediacontacts',
				),
			),
			array(
				'name'=>'Onetime survey',
				'url'=>array(
					'plugin'=>'homecredit',
					'controller'=>'onetimesurveys',
				),
			)
		)
	),
	array(
		'name'=>'Export',
		'children'=> array(
			array(
				'name' => 'Contacts',
				'url' => array(
					'plugin'=>'homecredit',
					'controller'=>'contacts',
					'action' => 'exportContacts'
				),
				'options' => array(
					'target' => '_blank'
					)
			),
			array(
				'name' => 'Contacts grouped',
				'url' => array(
					'plugin'=>'homecredit',
					'controller'=>'contacts',
					'action' => 'exportContactsGrouped'
				),
				'options' => array(
					'target' => '_blank'
				)
			),
			array(
				'name' => 'Contacts Filtered',
				'url' => array(
					'plugin'=>'homecredit',
					'controller'=>'contacts',
					'action' => 'exportFiltered'
				)
			),
			array(
				'name' => 'Onetime Surveys',
				'url' => array(
					'plugin'=>'homecredit',
					'controller'=>'onetimesurveys',
					'action' => 'exportSurveys'
				),
				'options' => array(
					'target' => '_blank'
					)
			),
		),
	),
);

$config['Texts.allowed_tags'] = array(
	'br',
	'a'
);

// 'type_id' => 'level'
$config['Users.hierarchy'] = array(
	1 => 2,
	2 => 1,
	3 => 3,
	4 => 3
);
