<?php
if (!empty($data['ArticleTag'])) {
	$dataAttrs = ' data-tags=\'[';
	$count = count($data['ArticleTag']);
	$x = 0;
	foreach($data['ArticleTag'] as $articleTag) {
		$dataAttrs = $dataAttrs . '"' . $articleTag['name'] . '"';
		if($x < $count && $count - 1 !== $x) {
			$dataAttrs = $dataAttrs . ', ';
		}
		$x++;
	}
	$dataAttrs = $dataAttrs . ']\'';
} else {
	$dataAttrs = '';
}
if(!isset($newOffset)) {
	$newOffset = Configure::read('Article.items_per_page');
}
if(!isset($hasMore)) {
	$hasMore = false;
	
}
?>
<div class="row article" <?php echo $dataAttrs; ?>>
	<?php
		$imageSource = $this->Media->getThumb($this->Media->getFirstImagePath($data['moduleMedia']), 428);
		$detailLink = $this->Html->getAbsoluteLangLink('/' . $page['tree_slug'] . "/" . $data['url']);
	?>
	<div class="col-sm-9 sm-top-20">
		<h1 class="littleHeader text-left">
			<?php
			echo $this->Html->link($data['name'], $detailLink, array('class' => 'fs-22 bold text-left'));
			?>
		</h1>
		<div class="description">
<?php echo $data['perex']; ?>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<span class="color-light-gray"><span class="color-light-gray"><?php echo $this->StaticText->getStripped('Posted on'); ?> <?php echo date("Y.m.d", strtotime($data['published'])); ?></span></span>
			</div>
			<?php
			echo $this->Html->link($this->StaticText->getStripped('Read more'), $detailLink, array('class' => 'more'));
			?>
		</div>
	</div>
	<?php
	if( ! empty($imageSource)):
	?>
	<div class="col-sm-3">
		<?php
		echo $this->Html->link('<img src="/' . $this->Media->getThumb($this->Media->getFirstImagePath($data['moduleMedia']), 428) . '" alt="' . $data['name'] . '"/>', $detailLink, array(
			'escape' => false, 'class' => 'image-wrapper'
		));
		?>
	</div>
	<?php endif; ?>
</div>
