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
			<h2 class="title col-xs-12 text-center"><?php echo $this->StaticText->getStripped('Loan Process POS Loan - title'); ?></h2>
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
										<?php $descr = 'Loan Process POS Loan - Step ' . ($i + 1) . ' - description'; ?>
								    	<p>
								    		<?php echo $this->StaticText->getStripped($descr); ?>
								    	</p>
									</div>
							    </div>
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

