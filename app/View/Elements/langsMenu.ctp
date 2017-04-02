<?php
$langs = Configure::read('Config.availableLanguages');
?>
<ul class="langs pull-right">
	<?php
	$c = 0;
	foreach ($langs as $title => $lang) {
		$c++;
		$class = "";
		$url = $title;

		if ($title == 'zh') {
			$language = '中文';
		} else {
			$language = 'en';
		}

		if (Configure::read('Config.language') == $lang) {
			$class = 'active';
		}
		if ($lang == Configure::read('Config.defaultLanguage')) {
			$url = "";
		}
		?>
		<li>
			<?php
			echo $this->Html->link($language,'/'.$url,array(
				'class' => $class, "title"=>$title
			));
			?>
		</li>
		<?php
	}
	?>
</ul>
