<section class="product-loan">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-md-8">
				<?php echo $this->StaticText->getStripped('about-us-section2-text', array('h2', 'p')); ?>
				<?php 
					echo $this->Html->link(
						$this->StaticText->getStripped('about-us-section2-link'),
						array( 'pageurl' => $posLoanPage['Page']['tree_slug'] )
					);
				?>
			</div>
			<div class="col-xs-6 col-md-4">
				<?php
				echo $this->Html->image(
					$this->Doodle->renderPath('wow.png'),
					array(
						'class' => 'doodle heading-2'
					)
				);

				echo $this->Html->image(
					'about-us/section-2.png',
					array(
						'class' => 'section-img pull-right'
					)
				);
				?>
			</div>
		</div>
	</div>
</section>