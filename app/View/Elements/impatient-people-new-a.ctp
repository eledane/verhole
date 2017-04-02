<section class="impatient-people wcl2 wcl-section-three">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2" style="margin-top: 40px">
				<h2><?php echo $this->staticText->getStripped('WICL-third-section-title') ?></h2>
				<div class="row">
					<div class="col-xs-7 third-screen-wcl">
						<ul class="simple-steps">
							<li><?php echo $this->staticText->getStripped('WICL-third-section-step1') ?></li>
							<li><?php echo $this->staticText->getStripped('WICL-third-section-step2') ?></li>
							<li><?php echo $this->staticText->getStripped('WICL-third-section-step3') ?></li>
							<li><?php echo $this->staticText->getStripped('WICL-third-section-step4') ?></li>
							<li><?php echo $this->staticText->getStripped('WICL-third-section-step5') ?></li>
						<li></li>
						</ul>
					</div>
					<div class="col-xs-5">
						<?php
							echo $this->Html->image(
								'impatient-boy.png',
								array(
									'alt' => 'Impatient boy'
								)
							);
						?>
					</div>

					<div class="box-part  box-part-leave wilc-third-apply-button"><a class="btn btn-success scroll-to-form" href="#" title="<?php echo $this->StaticText->getStripped('WICL-second-section-apply'); ?>"><?php echo $this->StaticText->getStripped('WICL-second-section-apply'); ?></a>										
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
