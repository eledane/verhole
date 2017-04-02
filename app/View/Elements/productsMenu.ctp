<?php
if(!empty($pageData['menus'])) {
	$menu = Hash::extract($pageData['menus'],'{n}[url=/products-menu/].children');
	if(!empty($menu)) {$menu = $menu[0];}
?>

	<ul class="nav-main-items">
	<?php
	$i = 0;
	foreach($menu as $menuitem) {
		?>
		<li class="product-menuitem-<?php echo $i; ?>">
			<?php
			$active = "";
			if($pageData['tree_slug'] == $menuitem['Page']['tree_slug']) {
				$active = "active";
			}
			echo $this->Html->link('<span><span class="product-menu-content">'.$menuitem['name'].'</span></span>',array(
				'pageurl' => $menuitem['Page']['tree_slug']
			),array(
				'class' => $active,
				'escapeTitle' => false,
				'title' => $menuitem['name']
			));
			$i++;
			?>
		</li>
		<?php
	}
	?>
		<li class="phone color-green">
			<a href="tel:<?php echo $this->StaticText->getStripped('Top menu - phone - link'); ?>"><span><span class="product-menu-content"><?php echo $this->StaticText->getStripped('Top menu - phone - text'); ?></span></span></a>
		</li>
	</ul>
	<?php
}
?>
