<?php
$videoClass = "";
if (!empty($data['youku_video']) || !empty($data['baidu_video']) || !empty($data['qq_video'])) {
	$videoClass = "video";
}
 ?>
<div class="row">
	<div class="col-xs-12 relative">
		<?php
			echo $this->Html->image(
				$this->Doodle->renderPath('yay-left.png'),
				array(
					'class' => 'doodle yay'
				)
			);
		?>
	</div>
</div>
<div class="row article">
	<?php
	$imageSource = $this->Media->getThumb($this->Media->getFirstImagePath($data['moduleMedia']), 428);
	$detailLink = $this->Html->getAbsoluteLangLink('/' . $page . "/" . $data['url']);
	if( ! empty($imageSource)):
	?>
	<div class="col-sm-3">
		<div class="post-inner <?php echo $videoClass; ?>">
			<?php
			echo $this->Html->link('<img src="/' . $this->Media->getThumb($this->Media->getFirstImagePath($data['moduleMedia']), 428) . '" alt="' . $data['name'] . '"/>', $detailLink, array(
				'escape' => false, 'class' => 'image-wrapper'
			));
			?>
		</div>
	</div>
	<?php endif; ?>
	<div class="col-sm-9 sm-top-20">
		<h1 class="littleHeader text-left">
			<?php
			echo $this->Html->link($data['name'], $detailLink, array('class' => 'color-light-gray fs-22 bold text-left'));
			?>
		</h1>
		<div class="description">
<?php echo $data['perex']; ?>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php
					echo $this->Html->link($this->StaticText->getStripped('Read more'), $detailLink, array('class' => 'read-more link-with-arrow'));
				?>
			</div>
		</div>
	</div>
</div>
