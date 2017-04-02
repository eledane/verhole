<section class="long-requirement">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<h2><?php echo $this->staticText->getStripped('WCL - Requirement title') ?></h2>
				<p class="subtitle"><?php echo $this->staticText->getStripped('WCL - Requirement subtitle'); ?>
				<span> <?php echo $this->staticText->getStripped('WCL - Requirement 3 steps'); ?> </span></p>
				<div class="row">
					<div class="col-xs-5">
						<?php
							echo $this->Html->image(
								'requirement-boy.png',
								array(
									'alt' => 'Requirement boy'
								)
							);
						?>
					</div>
					<div class="col-xs-7">
						<ul class="conditions">
							<li><?php echo $this->staticText->getStripped('WCL - Requirement step 1') ?></li>
							<li><?php echo $this->staticText->getStripped('WCL - Requirement step 2') ?></li>
							<li><?php echo $this->staticText->getStripped('WCL - Requirement step 3') ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>