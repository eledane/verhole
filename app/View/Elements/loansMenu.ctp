<?php
$lang = '';
if($posLoanPage['Page']['locale'] === 'eng'){
	$lang = 'en/';
}
?>
<div class="loans-wrapper">
	<?php
		echo $this->Html->tag(
			'div',
			'',
			array(
				'class' => 'nav-tag',
				'style' => 'background-image: url(/img/'.$this->NavBadge->renderPath().')'
			)
		);
	?>
	<div class="hidden-sm hidden-xs">

		<div class="fifteen-days-guarantee-box">
			<span><img src="/img/15-days/triangle.png" width="30" class="triangle" ></span>

			<div class="fifteen-days-guarantee-content">
				<div class="row bubbles">
					<div class="bubble">
						<div class="text">
							<div class="center-text">
								<?php echo $this->StaticText->getStripped('15 Days guaranteed-1'); ?>
							</div>
						</div>
						<div class="text-left">
							<img src="/img/15-days/bubbles.png">
						</div>
					</div>
					<div class="bubble">
						<div class="text">
							<div class="center-text">
								<?php echo $this->StaticText->getStripped('15 Days guaranteed-2'); ?>
							</div>
						</div>
						<div class="text-left">
							<img src="/img/15-days/bubbles.png">
						</div>
					</div>
					<div class="bubble">
						<div class="text">
							<div class="center-text">
								<?php echo $this->StaticText->getStripped('15 Days guaranteed-3'); ?>
							</div>
						</div>
						<div class="text-left">
							<img src="/img/15-days/bubbles.png">
						</div>
					</div>
					<div class="bubble">
						<div class="text  text4">
							<div class="center-text">
								<?php echo $this->StaticText->getStripped('15 Days guaranteed-4'); ?>
							</div>
						</div>
						<div class="text-left">
							<img src="/img/15-days/bubbles.png">
						</div>
					</div>
					<div class="bubble">
						<div class="text">
							<div class="center-text">
								<?php echo $this->StaticText->getStripped('15 Days guaranteed-5'); ?>
							</div>
						</div>
						<div class="text-left">
							<img src="/img/15-days/bubbles.png">
						</div>
					</div>
				</div>
				<div class="row faces">
					<div class="face">
						<img src="/img/15-days/gif/1.gif">
					</div>
					<div class="face">
						<img src="/img/15-days/gif/2.gif">
					</div>
					<div class="face">
						<img src="/img/15-days/gif/3.gif">
					</div>
					<div class="face">
						<img src="/img/15-days/gif/4.gif">
					</div>
					<div class="face">
						<img src="/img/15-days/gif/5.gif">
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="fifteen-days-guarantee-box-mobile hidden-md hidden-lg">
		<section class="carousel-guarantee">
			<div class="fifteen-days-guarantee-content">
				<!-- Slider main container -->
				<div class="carousel-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="swiper-slide-content">
								<div class="content-wrapper">
									<div class="text">
										<div class="center-text">
											<?php echo $this->StaticText->getStripped('15 Days guaranteed-1'); ?>
										</div>
									</div>
									<div class="text-center bubbles-margin">
										<img src="/img/15-days/bubbles.png">
									</div>
									<div class="face">
										<img src="/img/15-days/gif/1.gif">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-content">
								<div class="content-wrapper">
									<div class="text">
										<div class="center-text">
											<?php echo $this->StaticText->getStripped('15 Days guaranteed-2'); ?>
										</div>
									</div>
									<div class="text-center bubbles-margin">
										<img src="/img/15-days/bubbles.png">
									</div>
									<div class="face">
										<img src="/img/15-days/gif/2.gif">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-content">
								<div class="content-wrapper">
									<div class="text">
										<div class="center-text">
											<?php echo $this->StaticText->getStripped('15 Days guaranteed-3'); ?>
										</div>
									</div>
									<div class="text-center bubbles-margin">
										<img src="/img/15-days/bubbles.png">
									</div>
									<div class="face">
										<img src="/img/15-days/gif/3.gif">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-content">
								<div class="content-wrapper">
									<div class="text">
										<div class="center-text">
											<?php echo $this->StaticText->getStripped('15 Days guaranteed-4'); ?>
										</div>
									</div>
									<div class="text-center bubbles-margin">
										<img src="/img/15-days/bubbles.png">
									</div>
									<div class="face">
										<img src="/img/15-days/gif/4.gif">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-content">
								<div class="content-wrapper">
									<div class="text">
										<div class="center-text">
											<?php echo $this->StaticText->getStripped('15 Days guaranteed-5'); ?>
										</div>
									</div>
									<div class="text-center bubbles-margin">
										<img src="/img/15-days/bubbles.png">
									</div>
									<div class="face">
										<img src="/img/15-days/gif/5.gif">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination"></div>
					<div class="swiper-prev"></div>
					<div class="swiper-next"></div>

				</div>
			</div>
		</section>
	</div>

<span class="link-wrapper">
			<?php
			echo $this->Html->link(
				'<span class="nb-prod-loan">' . $this->StaticText->getStripped('POS Loan') . '</span>',
				array(
					'pageurl' => $posLoanPage['Page']['tree_slug'],
				),
				array(
					'title' => '',
					'class' => 'btn-loan',
					'escape' => false
				)
			);
			?>

			<?php
			echo $this->Html->link(
				'<span class="nb-cash-loan">' . $this->StaticText->getStripped('Walk-in Cash Loan') . '</span>',
				array(
					'pageurl' => $WCLPage['Page']['tree_slug'],
				),
				array(
					'title' => '',
					'class' => 'btn-loan',
					'escape' => false
				)
			);
			?>
	</span>
</div>

