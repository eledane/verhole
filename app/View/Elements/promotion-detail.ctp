<?php
	$promotion = $pageData['modulesData']['promotion']['Promotion'];
	if(isset($pageData['modulesData']['promotion']['CsvFile'])){
		$csv = $pageData['modulesData']['promotion']['CsvFile'];
	}
	$promotionDate = strtotime($promotion['end']);
	$currentDate = strtotime(date("D M j G:i:s T Y"));
	if ($currentDate < $promotionDate) {

	// images for detail of promotion
	$img = $this->Media->getFirstImagePath($promotion['moduleMedia']);
	if($pageData['locale'] === 'zho') {
		$desktop = $this->Media->getImagePathByName($promotion['moduleMedia'], 'desktop-zh');
		$mobile = $this->Media->getImagePathByName($promotion['moduleMedia'], 'mobile-zh');
	} else {
		$desktop = $this->Media->getImagePathByName($promotion['moduleMedia'], 'desktop-en');
		$mobile = $this->Media->getImagePathByName($promotion['moduleMedia'], 'mobile-en');
	}
	if(empty($desktop)) {
		$desktop = $img;
	}
	if(empty($mobile)) {
		$mobile = $img;
	}
?>
<section class="promotion-detail">
	<div class="header promotion-bg" style="background-image: url('/<?php echo $desktop; ?>');" data-desktop="<?php echo $desktop; ?>" data-mobile="<?php echo $mobile; ?>">
		<div class="text-wrapper">
			<h1 class="<?php if($promotion['hide_detail_mobile'] === true){ echo 'hide-detail-mobile';}?>">
				<?php
					if($promotion['hide_title'] !== true) {
						echo $promotion['title'];
					}
				?>
			</h1>
			<p class="<?php if($promotion['hide_detail_mobile'] === true){ echo 'hide-detail-mobile';}?>">
				<?php echo String::truncate(
					$promotion['short_description'],
					65,
					array(
						'ellipsis' => '...',
						'exact' => false,
						'html' => true
					));
				?>
			</p>
		</div>
		<div class="time-wrapper">
		<?php
			if($promotion['hide_countdown'] !== true) {
				?>
				<div class="time">
					<h3><?php echo $this->staticText->getStripped('Promotions - Remaining time'); ?></h3>
					<div class="countdown" data-end="<?php echo $promotion['end']; ?>">
						<span><span class="days"></span> <span><?php echo $this->staticText->getStripped('Promotions - days'); ?></span></span>
						<span><span class="hours"></span> <span><?php echo $this->staticText->getStripped('Promotions - hours'); ?></span></span>
						<span><span class="minutes"></span> <span><?php echo $this->staticText->getStripped('Promotions - minutes'); ?></span></span>
					</div>
				</div>
			<?php
				}
			?>
				<?php
				echo $this->Html->link(
					'<span>' . $this->StaticText->getStripped('promotions-link-detail') . '</span>',
					'#',
					array(
						'title' => '',
						'class' => 'btn btn-danger scroll-to-calc',
						'escape' => false
					)
				);
				?>


		</div>
	</div>
	<div class="container promotion-detail-content">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<h1 class="text-center"><?php echo $promotion['title']; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<?php echo $promotion['description']; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="loan-list">
					<?php
					echo $this->Html->link(
					$this->StaticText->getStripped('WCL - See Price List'),
					array(
						'pageurl' => $pricelistsPage['Page']['tree_slug'],
					),
					array(
						'class' => 'with-arrow',
					)
				);
				?>
				</div>
				
			</div>
		</div>
	</div>
	<?php
	echo $this->Element('loanProcessPOSL');
	?>

	<?php
		if($promotion['hide_form'] !== true) {
		echo $this->Element('box', array('class' => 'centered-box'));
	?>
		<div class="ajaxLeaveForm" style="display: none;">
		<?php
			echo $this->element('ContactForms/default',array('class' => 'homepage-leaveForm'));
		?>
		</div>
	<?php
	}
	?>

	<?php
	echo $this->element('map');
	?>
</section>
<?php
	} else {
	echo $this->Element('error');
	}
?>
