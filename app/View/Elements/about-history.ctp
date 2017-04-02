<section class="about-history">
	<div class="history-image first"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="mt10 mb20 text-justify">
					<?php 
						echo $this->staticText->getStripped('About HC - History headline');
					?>
				</h2>

				<?php
						echo $this->Html->image(
							$this->Doodle->renderPath('zuile.png'),
							array(
								'class' => 'doodle zuile'
							)
						);
					?>
				<!-- rozdelit text na 2 pole: About HC - History-->
				<p>
					<?php echo $this->staticText->getStripped('About HC - History text 1'); ?>
				</p>
				
			</div>
		</div>
	</div>
	<div class="history-image second"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p>
					<?php echo $this->staticText->getStripped('About HC - History text 2'); ?>
				</p>
			</div>
		</div>
	</div>
	
</section>

