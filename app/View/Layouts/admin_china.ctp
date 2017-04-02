<?php
/**
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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$menuConfig=Configure::read('Menus.adminMenu');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
		<?php echo $this->Html->charset(); ?>
		<title>
			U+Seed
		</title>
		<?php
		//Vsechno jde bud ze seed modulu nebo pres Bower do slozky vendor
		$libsFolder =  Configure::read('Seed.bower_assets_folder');



		// CSS block
		echo '<link href="/css/build/admin_style.min.css" rel="stylesheet" type="text/css">';
		echo '
			<style type="text/css">
				body {
					padding-top: 60px;
					padding-bottom: 40px;
				}
				.sidebar-nav {
					padding: 9px 0;
				}

				@media (max-width: 980px) {
					/* Enable use of floated navbar text */
					.navbar-text.pull-right {
						float: none;
						padding-left: 5px;
						padding-right: 5px;
					}
				}
			</style>		
		';
		echo $this->Html->css("Seed.seed-default/icons/style.css");
		echo '<!--[if lt IE 8]><!-->';
		echo $this->Html->css("Seed.seed-default/icons/ie7/ie7.css");
		echo '<!--<![endif]-->';
		
		echo $this->Html->css("Seed.seed-default/style");
		echo $this->Html->css("Seed.seed-default/dynamic-grid/default");
		echo $this->Html->css("Seed.seed-default/dynamic-grid/component");
		echo $this->Html->css("Seed.seed-default/new-style");
		echo '<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">';


		// Javascript block
		echo '<script src="/js/build/admin_script.min.js"></script>';
		echo $this->Html->script("Seed.seed-default/seed");
		echo $this->Html->script("Seed.seed-default/ordering");
		echo $this->Html->script("Seed.seed-default/script");

		//neni v bower baliku
		echo $this->Html->script("Seed.seed-default/lib/fileupload/jquery.iframe-transport");
		echo $this->Html->script("Seed.seed-default/lib/fileupload/jquery.fileupload");
		
		echo $this->Html->script("Seed.seed-default/ckeditor-config");
		
		App::import('Vendor', 'Seed.LanguageCodes', array('file' => 'i18n/LanguageCodes.php'));;


		echo $this->fetch('meta');
		?>
		<meta name="viewport" content="user-scalable=no">	
		<?php
		echo $this->fetch('meta');
		echo $this->Html->meta('icon', '../img/seed/favicon.png');
		?>
		<!--<link rel="icon" type="image/png" href="seed/favicon.png" />-->
		<meta name="viewport" content="user-scalable=no">	
		
    </head>

    <body>
		<div class="loading-overlay">
			<div class="loading-indicator"></div>
		</div>


		<header class="main-header">
			<?php if($userData) { ?>
			<div class="user-info">
				<div class="username">
					<?php
					echo h($userData['email']);
					?>
				</div>
				<?php
				echo $this->Html->link(__('Logout'), array(
					'controller' => 'users',
					'action' => 'logout'
						), array(
					'class' => 'logout'
				));
				?>
				<div class='profile-link'>
				<?php
				echo $this->Html->link(__('Profile'), array(
					'admin' => true,
					'plugin' => 'seed',
					'controller' => 'users',
					'action' => 'profile'
						), array(
					'class' => 'logout profile-link'
				));
				?>
				</div>
			</div>
			<?php } ?>
			<nav class="main-nav">

				<a href="/admin" class="logo">
					<?php echo $this->Html->image('Seed.seed/seed-logo.png'); ?>					
				</a>
				<?php if($userData) { ?>
				<ul class="main-menu">
					<?php
					
					foreach($menuConfig as $menuItem) {
						echo "<li class=\"module-menu-item\">";
						if(!empty($menuItem['url'])) {
							$url = array(
								'admin' => true,
								'plugin' => $menuItem['url']['plugin'],
								'controller' => $menuItem['url']['controller'],
								'action' => (array_key_exists('action', $menuItem['url']) && !empty($menuItem['url']['action']))?$menuItem['url']['action']:'index'
								);
							if(array_key_exists('additionParams',  $menuItem['url'])) {
								$url = array_merge($url, $menuItem['url']['additionParams']);
							}
							echo $this->Html->link(ucfirst(__($menuItem['name'])), $url);
							echo $this->element('Seed.admin_new_block_button', array(
								'url' => $url
							));
						} else {
							echo "<span class=\"module-menu-title\">" . __($menuItem['name']) . "</span>";
						}
						if(!empty($menuItem['children'])) {
							echo '<ul class="main-submenu">';
							foreach($menuItem['children'] as $children) {
								$url2 = array(
										'admin' => true,
										'plugin' => $children['url']['plugin'],
										'controller' => $children['url']['controller'],
										'action' => (array_key_exists('action', $children['url']) && !empty($children['url']['action']))?$children['url']['action']:'index'
									);
								if(array_key_exists('additionParams',  $children['url'])) {
									$url2 = array_merge($url2, $children['url']['additionParams']);
								}
								echo "<li class=\"module-submenu-item clearfix\">";
								$options = array();
								if(!empty($children['options'])) {
									$options = $children['options'];
								}
								echo $this->Html->link(h(__($children['name'])), $url2,$options);
								if(	empty($options['taget'])) {
									echo $this->element('Seed.admin_new_block_button', array(
													'url' => $url2
												));
								}
								echo "</li>";
							}
							echo '</ul>';
						}
						
					}
					?>
				</ul>
				<?php } ?>
			</nav>

		</header>
		<div class="main-content container demo-3">
			<?php echo $this->fetch('content'); ?>


			<a href="#" id="add-row" class="grid-control add row"></a>
			<a href="#" id="add-column" class="grid-control add column"></a>
			<a href="#" id="remove-row" class="grid-control remove row"></a>
			<a href="#" id="remove-column" class="grid-control remove column"></a>

		</div><!-- /container -->
		<?php if($userData) { ?>
		<footer>
			<span class="copyright">Copyright &copy; 2009-<?php echo date('Y'); ?> User Technologies s.r.o.</span>
			<span class="languages"><?php echo __('Language'); ?>: <!--  <?php echo Configure::read('Config.language'); ?> -->
				
				<?php foreach (Configure::read('Config.availableLanguages') as $lang => $code) { ?>
						<?php
						$class = "";
						if(Configure::read('Config.language')==$code) {
							$class="class='active'";
						}
						echo "<span $class>";
						echo $this->Html->link(__(strtoupper($lang)), 
								array('admin' => false, 'plugin' => '', 'controller' => '', 'action' => 'switchLanguage',$lang),
								array()
								);
						echo "</span>";
						?>
				<?php } ?>
			</span>
		</footer>
		<?php } ?>

		<?php //echo $this->Minify->script('seed.js');  ?>
		<?php echo $this->Js->writeBuffer(); ?>
		<?php // echo $this->element('sql_dump');   ?>


		<div class="flashes" id="flashes">

		</div>

		<!-- serves primarily for login after 403 -->
		<div class="popup" id="popup">

		</div>

		<!-- serves as a target for js code to be executed
		eg if you call hidePopup() action, then result is hidePopup() function, which has to be executed somewhere-->
		<div class="hidden" id="ajax-result-target">

		</div>
		<?php
		echo $this->Html->script("Seed.seed-default/lib/dynamic-grid/classie");
		echo $this->Html->script("Seed.seed-default/lib/dynamic-grid/grid");
		echo $this->Html->script("Seed.seed-default/lib/seedHistory");
		?>
		<?php echo $this->fetch('script'); ?>
    </body>
</html>

<?php
