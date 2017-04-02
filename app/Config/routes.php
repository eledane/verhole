<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
//Router::connect('/admin', array('plugin' => 'Admin', 'controller' => 'Dashboard', 'action' => 'index'));
//Router::connect('/admin/*', array('plugin' => 'Admin'));
//Router::connect('/admin/:controller', array('plugin' => 'Admin'));
//Router::connect('/admin/:controller/:action', array('plugin' => 'Admin'));

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */

Router::connect('/admin/seed/users', array(
	'admin'=>true,
	'plugin' => 'homecredit', 
	'controller' => 'hcusers',
	'action'=>'index'));
Router::connect('/admin/seed/users/:action/*', array(
	'admin'=>true,
	'plugin' => 'homecredit', 
	'controller' => 'hcusers'));
CakePlugin::routes();
$langExp = implode('|', array_keys(Configure::read('Config.availableLanguages')));
Router::connect('/admin/preview/discard', array('admin' => true ,'plugin' => null, 'controller' => 'app', 'action' => 'discardPreview'));
Router::connect('/:language/admin/preview/discard', array('admin' => true ,'plugin' => null, 'controller' => 'app', 'action' => 'discardPreview'),array(array('language' => $langExp)));
Router::connect('/admin/:controller', array('plugin' => 'seed'));
Router::connect('/admin/:controller/:action/*', array('plugin' => 'seed'));

App::import('Vendor',"Seed.PagesDynamicRouter");
PagesDynamicRouter::generateDynamicRoutes();

Router::connect('/', array('plugin' => 'pages','controller'=>'pages','action'=>'display',''));
Router::connect('/:pageurl/*', array('plugin' => 'pages','controller'=>'pages','action'=>'display'),array('pass'=>array('pageurl'),'pageurl'=>'.*'));//,'persist'=>array('page')