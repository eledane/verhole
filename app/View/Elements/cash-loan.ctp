<section class="cash-loan">
	<?php
	echo $this->Html->image(
		$this->Doodle->renderPath('go-for-it-gray.png'),
		array(
			'class' => 'doodle go-for-it'
		)
	);
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-md-4">
				<?php
				echo $this->Html->image(
					'about-us/section-3.png',
					array(
						'class' => 'section-img'
					)
				);
				?>
			</div>
			<div class="col-xs-6 col-md-8">
				<?php echo $this->StaticText->getStripped('about-us-section3-text', array('h2', 'p')); ?>
				<?php
				echo $this->Html->link(
					$this->StaticText->getStripped('about-us-section2-link'),
					array('pageurl' => $WCLPage['Page']['tree_slug'])
				);
				?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>