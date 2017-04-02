<div class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				
				<div class="sub-heading text-center">
					<h2>
						<?php
							echo $this->StaticText->getStripped('WCL - Get cash easily');
						?>
					</h2>
					<span>
						<?php
							echo $this->StaticText->getStripped('WCL - Leave it to HC');
						?>
					</span>
				</div>
				<?php
					echo $this->Html->image(
						'wcl/3-2-1.png',
						array(
							'class' => 'steps-img',
							'alt' => '3 2 1'
						)
					);
				?>
				<div class="text-center fs-17">
					<?php
						echo $this->StaticText->getStripped('WCL - Steps description', array('strong', 'b', 'span'));
					?>
				</div>
			</div>
		</div>
	</div>
</div>
