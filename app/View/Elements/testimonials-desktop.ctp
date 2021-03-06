<!-- DODELAT LINK NA DETAIL PAGE AZ BUDE NAKODENA -->

<?php
if (!empty($testimonials)) {
	?>
	<section class="testimonials-desktop">
		<div class="container">
		<div class="testimonials-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="testimonials-headline">
							<span></span>
							<?php echo $this->StaticText->getStripped('Testimonials - headline'); ?>
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="row testimonials-wrapper">
				<?php
				foreach($testimonials as $tes) {
					$img = $this->Media->getImagePathByName($tes['Testimonial']['moduleMedia'], 'testimonial-image');
					?>
					<div class="col-xs-3 text-center wrp">
						<div class="swiper-slide-content">
							<?php
							if(!empty($img)) {
								?>
								<img src="/<?php echo h($img); ?>" alt="<?php echo h($tes['Testimonial']['name']); ?>" class="static-image testimonial-profile-photo">
								<?php
									$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
									if ($language !== 'en') {
										$bubble = $this->Media->getImagePathByName($tes['Testimonial']['moduleMedia'], 'bubble-zh');
									} else {
										$bubble = $this->Media->getImagePathByName($tes['Testimonial']['moduleMedia'], 'bubble-en');
									}
									if(!empty($bubble)):
								?>
								<?php
									endif;
							}
							?>

							<div class="step-info">
								<div class="testimonial-bubble">
									<div class="content-wrapper">
										<?php
										if ($pageData['locale'] == 'eng') {
											echo '“' . mb_substr(h($tes['Testimonial']['description']), 0, 85) . '...“';
										} else {
											echo '“' . mb_substr(h($tes['Testimonial']['description']), 0, 45) . '...“';
										} 
										?>
									</div>
								</div>
							</div>

							<div class="testimonial-name-wrapper">
								<span class="testimonial-name"><?php echo h($tes['Testimonial']['name']); ?></span>
								<span class="testimonial-city"><?php echo h($tes['Testimonial']['city']); ?></span>
							</div>
							<?php
							echo $this->Html->link(
								$this->staticText->getStripped('Testimonial - link to detail'),
								array( 'pageurl' => $testimonialPage['Page']['tree_slug'].'/'.$tes['Testimonial']['url'] ),
								array(
									'class' => 'testimonial-detail-link'
								)
							);
							?>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		<div class="clearfix"></div>
		</div>
	</section>

<?php
}
