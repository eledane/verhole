<section class="impatient-people">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<h2><?php echo $this->staticText->getStripped('WCL - Impatient title') ?></h2>
				<p><?php echo $this->staticText->getStripped('WCL - Impatient Just finish'); ?>
				<span> <?php echo $this->staticText->getStripped('WCL - Impatient 2 simple steps'); ?> </span></p>
				<div class="row">
					<div class="col-xs-7">
						<ul class="simple-steps">
							<li><?php echo $this->staticText->getStripped('WCL - Impatient step 1') ?></li>
							<li><?php echo $this->staticText->getStripped('WCL - Impatient step 2') ?></li>
							<li><?php echo $this->staticText->getStripped('WCL - Impatient step 3') ?></li>
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
				</div>
			</div>
		</div>
	</div>
</section>
<style>
	@media(max-width: 767px) {
		.ajaxLeaveForm + .call-to-action-box {
			display: none;
		}
		.map {
			display: none;
		}
	}
</style>