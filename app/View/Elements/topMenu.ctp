<?php
if(!empty($pageData['menus'])) {
	$menu = Hash::extract($pageData['menus'],'{n}[url=/top-menu/].children');
	if(!empty($menu)) {
		$menu = $menu[0];
	}
	usort($menu, "fmp");
	?>
	<div class="col-xs-12">
		<ul class="links pull-left">
		<?php
		foreach($menu as $menuitem) {
			?>
			<li class="<?php echo $menuitem['class']; ?>">
				<?php
				$active = "";
				if($pageData['tree_slug'] == $menuitem['Page']['tree_slug']) {
					$active = "active";
				}
				if($menuitem['Page']['tree_slug'] == 'career') {
					$pageUrl = Configure::read('Menu.careerLink');
					$target = '_blank';
					echo $this->Html->link($menuitem['name'],$pageUrl,array(
						'class' => $active, 'title' => $menuitem['name'], 'target' => $target
					));
				} elseif ($menuitem['class'] == 'customer-portal') {
					$pageUrl = $menuitem['url'];
					$target = '_blank';
					echo $this->Html->link($menuitem['name'],$pageUrl,array(
						'class' => $active, 'title' => $menuitem['name'], 'target' => $target
					));
				} else {
					$pageUrl = $menuitem['Page']['tree_slug'];
					$target = '_self';
					echo $this->Html->link($menuitem['name'],array(
						'pageurl' => $pageUrl
					),array(
						'class' => $active, 'title' => $menuitem['name'], 'target' => $target
					));
				}
				?>
			</li>
			<?php
		}
		?>
		</ul>
	</div>
	<?php
}