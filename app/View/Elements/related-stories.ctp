<?php
if(!empty($data)) {
?>
<section class="related-stories">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>
				<?php 
				echo $label;
				?>
				</h2>
			</div>
		</div>
		<?php
		foreach($data as $row) {
			$row = $row['Post'];
			$videoClass = "";
			if (!empty($row['youku_video']) || !empty($row['baidu_video']) || !empty($row['qq_video'])) {
				$videoClass = "video";
			}
			?>
			<div class="row body">
				<div class="col-xs-4 col-sm-3 left-side <?php echo $videoClass; ?>">
					<?php
					$img = $this->Media->getThumb($this->Media->getFirstImagePath($row['moduleMedia']), 400);
					if(!empty($img)) {
					?>
						<img src="/<?php echo $img; ?>" alt="<?php echo h($row['name']); ?>">
					<?php
					}
					?>
				</div>
				<div class="col-xs-8 col-sm-9 right-side">
					<div class="row">
						<div class="col-xs-12">
						<?php
						echo $row['perex'];
						echo $this->Html->link(
							$this->StaticText->getStripped('Testimonials Read More'),
							array( 'pageurl' => $pageUrl . '/'.$row['url'] ),
							array(
								'class' => 'read-more link-with-arrow',
								'escape' => false
							)
						);
						?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
 		?>
		<div class="clearfix"></div>
		<?php
		if(!empty($showLinkAll)) {
		?>
		<div class="row">
			<div class="col-xs-12 text-center bottom-link">
				<?php
					echo $this->Html->link(
						$this->StaticText->getStripped('CustomerStories-RelatedStories-read all stories'),
						array( 'pageurl' => $pageUrl . '/' ),
						array(
							'class' => 'all-related link-with-arrow'
						)
					);
				?>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</section>
<?php
}