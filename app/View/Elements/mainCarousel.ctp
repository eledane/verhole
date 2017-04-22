<?php
//debug($pageData);die;
//debug($promotions);die;

$currentPromotions = array();
foreach($promotions as $promotion) {
    if(is_array($promotion['Promotion']['end'])) {
        $promotion['Promotion']['end'] = $promotion['Promotion']['end']['year'] .'-'. $promotion['Promotion']['end']['month'] .'-'.$promotion['Promotion']['end']['day'] .' '.$promotion['Promotion']['end']['hour'] .':'.$promotion['Promotion']['end']['min'].':00';
    }
	$promotionDate = strtotime($promotion['Promotion']['end']);
	$currentDate = strtotime(date("D M j G:i:s T Y"));
	if ($currentDate < $promotionDate) {
		$currentPromotions[] = $promotion;
	}
}
// echo '<!--';print_r($currentPromotions);echo '-->';

?>
<?php
if(!empty($currentPromotions)){

	?>
	<section class="swiper" data-class="promotion">
		<div class="carousel-container swiper-update">
			<div class="swiper-wrapper">
				<?php
				foreach($currentPromotions as $promotion) {

					if(new DateTime() < new DateTime($promotion['Promotion']['end'])){
// echo '<!--';print_r($promotion['Promotion']);echo '-->';

						if($promotion['Promotion']['published'] == true) {
							$img = $this->Media->getFirstImagePath($promotion['Promotion']['moduleMedia']);
							if($pageData['locale'] === 'zho') {
								$desktop = $this->Media->getImagePathByName($promotion['Promotion']['moduleMedia'], 'desktop-zh');
								$mobile = $this->Media->getImagePathByName($promotion['Promotion']['moduleMedia'], 'mobile-zh');
							} else {
								$desktop = $this->Media->getImagePathByName($promotion['Promotion']['moduleMedia'], 'desktop-en');
								$mobile = $this->Media->getImagePathByName($promotion['Promotion']['moduleMedia'], 'mobile-en');
							}
							if(empty($desktop)) {
								$desktop = $img;
							}
							if(empty($mobile)) {
								$mobile = $img;
							}
						?>
							<div class="swiper-slide promotion-bg" style="background-image: url('/<?php echo $desktop; ?>');" data-desktop="<?php echo $desktop; ?>" data-mobile="<?php echo $mobile; ?>">

								<a href="<?php echo $promotion['Promotion']['absolute_url']; ?>"  target="_blank">
								<div class="swiper-slide-content">
									<div class="text-wrapper" style="visibility: hidden">
										<h1 class="<?php if($promotion['Promotion']['hide_detail_mobile'] === true){ echo 'hide-detail-mobile';}?>">
										<?php
											if($promotion['Promotion']['hide_title'] !== true) {
												echo $promotion['Promotion']['title'];
											}
										?>
										</h1>
										<p class="<?php if($promotion['Promotion']['hide_detail_mobile'] === true){ echo 'hide-detail-mobile';}?>">
											<?php
												echo String::truncate(
												$promotion['Promotion']['short_description'],
												65,
												array(
													'ellipsis' => '...',
													'exact' => false,
													'html' => true
												));
											?>
										</p>
									</div>

								</div>
								</a>

							</div>
						<?php
						}
					}
				}
				?>

			</div>
			<div class="swiper-pagination"></div>
			<a href="#" class="swiper-prev"></a>
			<a href="#" class="swiper-next"></a>
		</div>
	</section>
<?php
}
?>
