<section class="about-us-heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 about-us-heading">
				<?php
				echo $this->Html->image(
					$this->Doodle->renderPath('sound.png'),
					array(
						'class' => 'doodle heading-1'
					)
				);
				?>
				<h1><?php echo $this->StaticText->getStripped('About Us') ?></h1>
				<!--<?php
				echo $this->Html->image(
					'about-us/section-1.png',
					array(
						'class' => 'section-img'
					)
				);
				?>-->

				<?php echo $this->StaticText->getStripped('about-us-section1-text', array('h2', 'p')); ?>
				<?php
				echo $this->Html->link(
					$this->StaticText->getStripped('about-us-section1-link'),
					array('pageurl' => $aboutHCPage['Page']['tree_slug'])
				);
				?>

			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>