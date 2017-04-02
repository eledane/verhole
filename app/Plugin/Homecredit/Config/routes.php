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
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'dashboard', 'action' => 'index'));



/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	//require CAKE . 'Config' . DS . 'routes.php';

Router::connect('/admin/homecredit/articlecategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articleCategories','action'=>'index'));
Router::connect('/admin/homecredit/articlecategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articleCategories'));

Router::connect('/admin/homecredit/articles', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articles','action'=>'index'));
Router::connect('/admin/homecredit/articles/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articles'));

Router::connect('/admin/homecredit/contacts', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'contacts','action'=>'index'));
Router::connect('/admin/homecredit/contacts/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'contacts'));

Router::connect('/admin/homecredit/stores', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'stores','action'=>'index'));
Router::connect('/admin/homecredit/stores/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'stores'));

Router::connect('/admin/homecredit/employees', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'employees','action'=>'index'));
Router::connect('/admin/homecredit/employees/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'employees'));

Router::connect('/admin/homecredit/faqs', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqs','action'=>'index'));
Router::connect('/admin/homecredit/faqs/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqs'));

Router::connect('/admin/homecredit/partners', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'partners','action'=>'index'));
Router::connect('/admin/homecredit/partners/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'partners'));

Router::connect('/admin/homecredit/positions', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'positions','action'=>'index'));
Router::connect('/admin/homecredit/positions/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'positions'));

Router::connect('/admin/homecredit/products', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'products','action'=>'index'));
Router::connect('/admin/homecredit/products/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'products'));

Router::connect('/admin/homecredit/productcategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'productCategories','action'=>'index'));
Router::connect('/admin/homecredit/productcategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'productCategories'));

Router::connect('/admin/homecredit/partnercategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'partnerCategories','action'=>'index'));
Router::connect('/admin/homecredit/partnercategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'partnerCategories'));

Router::connect('/admin/homecredit/promotions', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'promotions','action'=>'index'));
Router::connect('/admin/homecredit/promotions/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'promotions'));

Router::connect('/admin/homecredit/myfirstloancategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'myFirstLoanCategories','action'=>'index'));
Router::connect('/admin/homecredit/myfirstloancategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'myFirstLoanCategories'));

Router::connect('/admin/homecredit/myfirstloansteps', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'myFirstLoanSteps','action'=>'index'));
Router::connect('/admin/homecredit/myfirstloansteps/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'myFirstLoanSteps'));

Router::connect('/admin/homecredit/testimonials', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'testimonials','action'=>'index'));
Router::connect('/admin/homecredit/testimonials/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'testimonials'));

Router::connect('/admin/homecredit/csvfiles', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'csvFiles','action'=>'index'));
Router::connect('/admin/homecredit/csvfiles/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'csvFiles'));

Router::connect('/admin/homecredit/settings', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'settings','action'=>'index'));
Router::connect('/admin/homecredit/settings/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'settings'));

Router::connect('/admin/homecredit/cities', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'cities','action'=>'index'));
Router::connect('/admin/homecredit/cities/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'cities'));

Router::connect('/admin/homecredit/regions', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'regions','action'=>'index'));
Router::connect('/admin/homecredit/regions/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'regions'));

Router::connect('/admin/homecredit/articletags', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articleTags','action'=>'index'));
Router::connect('/admin/homecredit/articletags/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'articleTags'));

Router::connect('/admin/homecredit/downloads', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'downloads','action'=>'index'));
Router::connect('/admin/homecredit/downloads/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'downloads'));

Router::connect('/admin/homecredit/faqcategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqCategories','action'=>'index'));
Router::connect('/admin/homecredit/faqcategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqCategories'));

Router::connect('/admin/homecredit/faqsections', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqSections','action'=>'index'));
Router::connect('/admin/homecredit/faqsections/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'faqSections'));

Router::connect('/admin/homecredit/walkincashloans', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'walkInCashLoans','action'=>'index'));
Router::connect('/admin/homecredit/walkincashloans/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'walkInCashLoans'));

Router::connect('/admin/homecredit/contacttypes', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'contactTypes','action'=>'index'));
Router::connect('/admin/homecredit/contacttypes/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'contactTypes'));

Router::connect('/admin/homecredit/posts', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'posts','action'=>'index'));
Router::connect('/admin/homecredit/posts/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'posts'));

Router::connect('/admin/homecredit/posttypes', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'postTypes','action'=>'index'));
Router::connect('/admin/homecredit/posttypes/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'postTypes'));

Router::connect('/admin/homecredit/downloadcategories', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'downloadCategories','action'=>'index'));
Router::connect('/admin/homecredit/downloadcategories/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'downloadCategories'));

Router::connect('/admin/homecredit/mediacontacts', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'mediaContacts','action'=>'index'));
Router::connect('/admin/homecredit/mediacontacts/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'mediaContacts'));

Router::connect('/admin/homecredit/onetimesurveys', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'oneTimeSurveys','action'=>'index'));
Router::connect('/admin/homecredit/onetimesurveys/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'oneTimeSurveys'));

Router::connect('/admin/homecredit/announcements', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'announcements','action'=>'index'));
Router::connect('/admin/homecredit/announcements/:action/*', array('admin'=>true,'plugin' => 'homecredit', 'controller' => 'announcements'));


Router::connect('/api/cities/*', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'stores','action'=>'cities'));
Router::connect('/api/stores/*', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'stores','action'=>'stores'));
Router::connect('/api/provinces/*', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'stores','action'=>'provinces'));


$langExp = implode('|', array_keys(Configure::read('Config.availableLanguages')));

Router::connect('/survey/addVote', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'oneTimeSurveys', 'action' => 'addVote'));
Router::connect('/:language/survey/addVote', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'oneTimeSurveys', 'action' => 'addVote'),array(array('language' => $langExp)));

Router::connect('/leaveContact/contact', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'addContact'));
Router::connect('/:language/leaveContact/contact', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'addContact'),array(array('language' => $langExp)));

Router::connect('/leaveContact/wcl', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'addWcl'));
Router::connect('/:language/leaveContact/wcl', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'addWcl'),array(array('language' => $langExp)));

Router::connect('/leaveContact/noAgreement', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'noAgreement'));
Router::connect('/:language/leaveContact/noAgreement', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'noAgreement'),array(array('language' => $langExp)));


Router::connect('/leaveContact', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'add'));
Router::connect('/:language/leaveContact', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'contacts', 'action' => 'add'),array(array('language' => $langExp)));

Router::connect('/getArticles/*', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'articles', 'action' => 'getArticles'));
Router::connect('/:language/getArticles/*', array('admin'=>false,'plugin' => 'homecredit', 'controller' => 'articles', 'action' => 'getArticles'),array(array('language' => $langExp)));