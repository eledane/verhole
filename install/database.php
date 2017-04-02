<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'hc-vietnam',
		'encoding' => 'utf8'
	);
	
	public $templatesConfig = array(
		'datasource' => 'Seed.TemplatesDatasource'
	);
}
