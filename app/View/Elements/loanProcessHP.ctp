<?php
	$imgPath = '/img/loan-process/';
	$images = array(
		'dream-bubbles.png',
		'id-card.png',
		'hc-stand2.png',
		'calendar.png'
	);
?>
<section class="loan-process">
	<div class="container-fluid no-loop">
		<div class="row">
			<h2 class="title loan-process-hp-mobile"><?php echo $this->StaticText->getStripped('Loan Process Homepage - title'); ?></h2>
			<div class="carousel-container">
				<div class="swiper-wrapper">

					<?php
						for($i = 0; $i < 4; $i++) {
					?>
				    <div class="swiper-slide"> 
				    	<div class="swiper-slide-content">
				    		<div class="img-wrapper" style="background-image: url('<?php echo $imgPath . $images[$i] ?>');">
				    		</div>
							<div class="step-info">
								<div class="vertical-align">
									<div class="content-wrapper">
										<?php
											$descr = 'Loan Process Homepage - Step ' . ($i + 1) . ' - description';
										?>
								    	<p>
								    		<?php echo $this->StaticText->getStripped($descr); ?>
								    	</p>
									</div>
							    </div>
							    <a href="#" class="btn btn-success scroll-to-form">
						    		<span>
										<?php echo $this->StaticText->getStripped('Loan Process - Get a Loan'); ?>
									</span>
									<?php
									echo $this->Html->image(
										$this->Doodle->renderPath('young-fellow.png'),
										array(
											'class' => 'doodle fellow'
										)
									);
									?>
						    	</a>
						    </div>
				    	</div>
				    </div>

				    <?php
					}
					?>

			  	</div>
			  	<div class="swiper-pagination"></div>
			  	<a href="#" class="swiper-prev"></a>
			  	<a href="#" class="swiper-next"></a>
			</div>

		</div>
	</div>
</section>
