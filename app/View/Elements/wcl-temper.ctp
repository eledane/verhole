<div class="wcl-temper">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 text-right col-sm-2 col-sm-offset-1">
						<?php
							echo $this->Html->image(
								'wcl/temper-bike.png',
								array(
									'alt' => 'Temper',
									'class' => 'temper-bike'
								)
							);
						?>
					</div>
			<div class="col-sm-6 col-xs-9 text-center">
				<h2 class="text-center color-white bold">
					<?php echo $this->StaticText->getStripped('WCL - Temper title'); ?>
				</h2>
				<span class="color-white">
					<em><?php echo $this->StaticText->getStripped('WCL - Temper subtitle', array('span', 'strong')); ?></em>
				</span>
				<p class="color-white fs-15 mt30">
							<?php
								echo $this->StaticText->getStripped('WCL - Temper description');
							?>
				</p>
			</div>
		</div>
	</div>
</div>