<?php

/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::build(array(
		'Plugin'=> array(dirname(__FILE__).'/../../Vendor/Seed/SeedCore/Plugin/'),
		'Locale'=> array(dirname(__FILE__).'/../../Vendor/Seed/SeedCore/Locale/',dirname(__FILE__).'/../../app/Locale/')
	 )
);

Configure::write('Routing.prefixes', array('admin','api'));

// load all plugins present in app/Plugins dir
//Seed se musi nacitat jako prvni
CakePlugin::load("Seed");
CakePlugin::loadAll(array(array('bootstrap' => true, 'routes' => true, 'ignoreMissing' => true)));
// module configs now loaded
// load local config
Configure::load('local');
// load some kofo shiz
Configure::load('seed-custom');

//Preklady musime volat pres domain HC, nemuze to byt v default, protoze je dementne udelany seed
//Tato funkce jen obaluje to volani
function __hc($msg, $args = null) {
	return __d('hc', $msg, $args = null);
}
