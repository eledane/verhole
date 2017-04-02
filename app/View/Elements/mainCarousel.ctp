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

function option_onclick_sss($ref_url)
{
    $str_onclick = "";
    
    if ($ref_url == "http://www.homecreditcfc.cn/promotion/006promotion")  {
        $str_onclick = "stm_clicki('send', 'event', '006promotion', 'click', 'bannerbutton');";
    } else if ($ref_url == "http://www.niubs.com/wap/gallery-index---0--4.html") {
        $str_onclick = "stm_clicki('send', 'event', 'niubs', 'click', 'bannerbutton');";
    } else if ($ref_url == "http://www.homecreditcfc.cn/promotion/onepercent") {
        $str_onclick = "stm_clicki('send', 'event', 'onepercent', 'click', 'bannerbutton');";
    } else if ($ref_url == "http://sanxing0rate.homecreditcfc.cn") {
        $str_onclick = "stm_clicki('send', 'event', 'sanxing0rate', 'click', 'bannerbutton');";
    } else if ($ref_url == "http://www.homecreditcfc.cn/fudai/?utm_source=Web-site&utm_medium=banner&utm_campaign=MCL&utm_group=Web-site") {
        $str_onclick = "stm_clicki('send', 'event', 'fudai', 'click', 'bannerbutton');";
    } else if ($ref_url == "\\walk-in-cash-loan ") {
        $str_onclick = "stm_clicki('send', 'event', 'walk-in-cash-loan', 'click', 'bannerbutton');";
    } else if ($ref_url == "http://www.homecreditcfc.cn/promotion/wechat_banner") {
        $str_onclick = "stm_clicki('send', 'event', 'promotion', 'click', 'bannerbutton');";
    }
    return $str_onclick;
}

?>
<?php
if(!empty($currentPromotions)){

	?>
	<section class="swiper" data-class="promotion">
		<div class="carousel-container swiper-update">
			<div class="swiper-wrapper">
				<?php
				foreach($currentPromotions as  $nu => $promotion) {

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
								<div class="swiper-slide-content">
									<div class="text-wrapper">
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
									<?php
									if(empty($promotion['Promotion']['absolute_url'])) {
										$lang = '';
										if ($promotionPage['Page']['locale'] === 'eng') {
											$lang = 'en/';
										}
										?>
										<div class="time-wrapper">
										<?php
											if($promotion['Promotion']['hide_countdown'] !== true) {
										?>
											<div class="time">
												<h3><?php echo $this->staticText->getStripped('Promotions - Remaining time'); ?></h3>
												<div class="countdown" data-end="<?php echo $promotion['Promotion']['end']; ?>">
													<span><span class="days"></span> <span><?php echo $this->staticText->getStripped('Promotions - days'); ?></span></span>
													<span><span class="hours"></span> <span><?php echo $this->staticText->getStripped('Promotions - hours'); ?></span></span>
													<span><span class="minutes"></span> <span><?php echo $this->staticText->getStripped('Promotions - minutes'); ?></span></span>
													<!--<span><span class="seconds"></span> <span>seconds</span></span>-->
												</div>
											</div>
										<?php
										}
										?>
											<?php
											if( $nu == 0){

											echo $this->Html->link(
												'<span>' . $this->StaticText->getStripped('promotions-link-absolute_first') . '</span>' . $this->Html->image($this->Doodle->renderPath('bravo.png'),array('class' => 'bravo doodle')),
												array(
													'pageurl' => $promotionPage['Page']['tree_slug'] . '/' . $promotion['Promotion']['url'],
												),
												array(
													'title' => $this->StaticText->getStripped('promotions-link-absolute_first'),
													'class' => 'btn btn-danger',
													'escape' => false
												)
											);

											}elseif( $nu == 1){

												echo $this->Html->link(
												'<span>' . $this->StaticText->getStripped('promotions-link-absolute_second') . '</span>' . $this->Html->image($this->Doodle->renderPath('bravo.png'),array('class' => 'bravo doodle')),
												array(
													'pageurl' => $promotionPage['Page']['tree_slug'] . '/' . $promotion['Promotion']['url'],
												),
												array(
													'title' => $this->StaticText->getStripped('promotions-link-absolute_second'),
													'class' => 'btn btn-danger',
													'escape' => false
												)
											);

											}else{
											echo $this->Html->link(
												'<span>' . $this->StaticText->getStripped('promotions-link-detail') . '</span>' . $this->Html->image($this->Doodle->renderPath('bravo.png'),array('class' => 'bravo doodle')),
												array(
													'pageurl' => $promotionPage['Page']['tree_slug'] . '/' . $promotion['Promotion']['url'],
												),
												array(
													'title' => $this->StaticText->getStripped('promotions-link-detail'),
													'class' => 'btn btn-danger',
													'escape' => false
												)
											);


											}
											?>
										</div>
									<?php
									} else {
										?>
										<div class="time-wrapper">
<a href="<?php echo $promotion['Promotion']['absolute_url']; ?>" onclick="<?php echo option_onclick_sss($promotion['Promotion']['absolute_url']); ?>"  target="_blank" class="btn btn-danger">
																<span>
												                     <?php 
												    if( $nu == 0){
												    echo $this->StaticText->getStripped('promotions-link-absolute_first');
												   }elseif( $nu == 1){
												    echo $this->StaticText->getStripped('promotions-link-absolute_second');
												    }else{
												   echo $this->StaticText->getStripped('promotions-link-absolute');
												  } ?>
													</span>
										</a>
										</div>
									<?php
									}
									?>
								</div>
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
