<?php
	$imgPath = '/img/loan-process/';
	$images = array(
		'dream-bubbles.png',
		'id-card.png',
		'hc-stand2.png',
		'calendar.png'
	);
?>
<section class="loan-process desktop">
	<div class="no-loop ptb30 bg-greenish">
		<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php
					echo $this->Html->link(
						$this->StaticText->getStripped('Link - My first loan page'),
						array('pageurl' => $firstLoanPage['Page']['tree_slug']),
						array('class' => 'see-details pull-right','escape' => false)
					);
			?>
				<h2 class="title pull-left"><span></span><?php echo $this->StaticText->getStripped('Loan Process Homepage - title'); ?></h2>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row ptb30">

					<?php
						for($i = 0; $i < 4; $i++) {
					?>
						<div class="col-xs-3 text-center lp-step<?php echo $i+1 ?>">
							<div class="img-wrapper" style="background-image: url('<?php echo $imgPath . $images[$i] ?>');">
							</div>
							<div class="step-info pt20 plr20">
								<div class="vertical-align">
									<div class="content-wrapper">
										<?php
											$descr = 'Loan Process Homepage - Step ' . ($i + 1) . ' - description';
										?>
										<p>
											<?php echo $this->StaticText->getStripped($descr); ?>
										</p>
									</div>
								</div>
							</div>
						</div>

					<?php
					}
					?>
		</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<a href="" class="btn btn-success scroll-to-form">
								<span>
									<?php echo $this->StaticText->getStripped('Loan Process - Get a Loan'); ?>
								</span>
								<?php /*
								echo $this->Html->image(
									$this->Doodle->renderPath('young-fellow.png'),
									array(
										'class' => 'doodle'
									)
								);
							     */	?>
							</a>
						</div>
					</div>

				<div class="swiper-pagination"></div>
				<a href="#" class="swiper-prev"></a>
				<a href="#" class="swiper-next"></a>
				</div>
			</div>

		</div>
	</div>
</section>
