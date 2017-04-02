<?php
global $config;
$config = array();
$config['UserType.host'] = 3;
$config['UserType.article'] = 4;
$config['UserType.nps'] = 5;

$config['adminEmail'] = 'admin@homecredit.cn';
$config['debugEmail'] = array('kovarik@usertechnologies.com');

$config['ProductCategory'] = array(
	"motorbikes" => "3",
	"electronics" => "2",
	"cashloans" => "4"
	);
//Nevim co to je, neco v budgetTool.ctp
$config['BudgetTool.nevim_co_to_je'] = array(
	$config['ProductCategory']['motorbikes'] => 215000,
	$config['ProductCategory']['electronics'] => 90000,
	$config['ProductCategory']['cashloans'] => 475000,
);
$config['Page.motorbikes'] = "9";
$config['Page.electronics'] = "8";
$config['Page.cashloans'] = "10";
$config['Page.can_i_afford_it'] = "13";
$config['Page.my_first_loan'] = "3";
$config['Page.media'] = "12";
$config['Currency.czk'] = "czk";
$config['Currency.usd'] = "usd";
$config['Currency.eur'] = "eur";
$config['Currency.gbp'] = "gbp";
$config['Currency.vnd'] = "vnd";
$config['Currency.cny'] = "cny";
$config['Currency.supported_currencies'] = array(
	$config['Currency.cny'] => strtoupper($config['Currency.cny']),
);
$config['Currency.currency_format_default'] = $config['Currency.cny'];
$config['Currency.currency_formats'] = array(
	'dot-dash' =>
	array(
		'places' => 2,
		'wholePosition' => 'after',
		'wholeSymbol' => ',-',
		'thousands' => ' ',
		'decimals' => ',',
	),
	$config['Currency.czk'] =>
	array(
		'places' => 0,
		'wholePosition' => 'after',
		'wholeSymbol' => ' Kč',
		'thousands' => ' ',
		'decimals' => ',',
	),
	
	$config['Currency.eur'] =>
	array(
		'places' => 2,
		'wholePosition' => 'after',
		'wholeSymbol' => ' EUR',
		'thousands' => ' ',
		'decimals' => ',',
	),
	
	$config['Currency.usd'] =>
	array(
		'places' => 2,
		'wholePosition' => 'after',
		'wholeSymbol' => ' USD',
		'thousands' => ' ',
		'decimals' => ',',
	),
	$config['Currency.vnd'] =>
	array(
		'places' => 0,
		'wholePosition' => 'after',
		'wholeSymbol' => ' VNĐ',
		'thousands' => ',',
		'decimals' => ',',
	),
	$config['Currency.cny'] =>
	array(
		'places' => 2,
		'wholePosition' => 'after',
		'wholeSymbol' => ' ¥',
		'thousands' => ',',
		'decimals' => '.',
	),
	
);
$config['Calc.csv_import_folder'] = "files/calc-csv";
$config['Article.items_per_page'] = "3";
$config['Contact.regular'] = "regular";
$config['Contact.wcl'] = "wcl";
$config['Contact.contact'] = "contact";
$config['Files.icons'] = array(
	'default' => 'default.png',
	'doc' => 'doc.png',
	'docx' => 'doc.png',
	'ppt' => 'ppt.png',
	'pptx' => 'ppt.png',
	'pdf' => 'pdf.png',
	'xls' => 'xls.png',
	'xlsx' => 'xls.png',
	'txt' => 'txt.png',
	'jpg' => 'jpg.png',
	'jpeg' => 'jpeg.png',
	'png' => 'png.png',
	'gif' => 'gif.png',
);
$config['Menu.careerLink'] = "http://jobs.homecreditcfc.cn/Page/HcIndex";
$config['Texts.allowed_tags'] = array(
	'strong', 'b', 'i', 'em'
);
$config['pricelistsDownloadCategoryId'] = "1";
$config['financialLiteracyPage'] = 'financial-literacy';
$config['Posts.type_efforts'] = 1;
$config['Posts.type_bulletin'] = 2;
$config['Page.bulletin'] = 23;
$config['Page.efforts'] = 24;
$config['pricelists'] = '1';
$config['pboc'] = '13';


$config['partner_form.to'] = 'gazimagomedov@usertechnologies.com';