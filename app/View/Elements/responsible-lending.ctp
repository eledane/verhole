<section class="responsible-lending">
	<div class="row even about-us-item lending">
		<div class="container-fluid">
			<div class="row">
				<h2 class="col-xs-12 text-center">
					<?php echo $this->StaticText->getStripped('about-us-responsible-lending-title'); ?>
				</h2>

				<p>
					<?php echo $this->StaticText->getStripped('about-us-responsible-lending'); ?>
				</p>

				<div class="text-center">
					<?php
					echo $this->Html->link(
						$this->StaticText->getStripped('about-us-see-financial-literacy') . '' . $this->Html->image($this->Doodle->renderPath('spoiled-white.png'), array('class' => 'doodle spoiled')),
						array(
							'pageurl' => $financialLiteracyPage['Page']['tree_slug'],

						),
						array(
							'escape' => false
						)
					);
					?>
				</div>
			</div>

		</div>
	</div>
</section>
