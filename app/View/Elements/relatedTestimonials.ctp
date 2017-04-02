<h2 class="text-center color-red">
	<?php echo $this->StaticText->getStripped('Related stories') ?>
</h2>
<div class="container related-stories">
<?php 
	$count = count($data);
	$z = 0;
	for ($i = 0; $i < $count;$i++) :
		$row = $data[$i]['Testimonial'];
		$detailID = $pageData['modulesData']['testimonial']['Testimonial']['id'];
		$rowID = $row['id'];
		if($rowID !== $detailID && $z < 3) {
?>
		<div class="row body">
			<div class="col-xs-4 col-sm-3 left-side">
				<?php
				$img = $this->Media->getFirstImagePath($row['moduleMedia']);
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
					<p>
						<?php echo $row['description']; ?>
					</p>
					<?php
					echo $this->Html->link(
						$this->StaticText->getStripped('Testimonials Read More'),
						array( 'pageurl' => $pageData['tree_slug'] . '/'.$row['url'] ),
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
$z++;
	}
	endfor;
?>
</div>