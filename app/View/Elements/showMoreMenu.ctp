<ul class="links pull-left show-more">
	<li><a href="#"><?php echo $this->StaticText->getStripped("Navbar - show more"); ?><span class="caret"></span></a></li>
</ul>
<ul class="links pull-left none">
<?php
	if(!empty($pageData['menus'])) {
		$menuProduct = Hash::extract($pageData['menus'],'{n}[url=/products-menu/].children.{n}.Page.id');
		$menuTop = Hash::extract($pageData['menus'],'{n}[url=/top-menu/].children.{n}.Page.id');


		$menuMore = Hash::extract($pageData['menus'],'{n}[url=/footer-menu/].children');


		if(!empty($menuMore)) {
			$menuMore = $menuMore[0];
		}
		foreach($menuMore as $menuitem) {

			if(in_array($menuitem['Page']['id'], $menuProduct) || in_array($menuitem['Page']['id'], $menuTop) || $menuitem['Page']['tree_slug'] == 'homepage') {
				continue;
			}



			?><li><?php
				echo $this->Html->link($menuitem['name'],array(
					'pageurl' => $menuitem['Page']['tree_slug']
				), array('title' => $menuitem['name']));
				?></li>
			<?php
		}
	}
	?>
</ul>
