<?php
	$imgPath = '/img/loan-process/';
	$images = array(
		'mobile.jpg',
		'map.jpg',
		'id-card.jpg',
		'hc-stand.jpg'
	);
?>
<section class="loan-process">
	<div class="container-fluid no-loop">
		<div class="row">
			<h2 class="title col-xs-12 text-center"><?php echo $this->StaticText->getStripped('Loan Process WCL - title'); ?></h2>
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
											$descr = 'Loan Process WCL - Step ' . ($i + 1) . ' - description';
										?>
								    	<p>
								    		<?php echo $this->StaticText->getStripped($descr); ?>
								    		<?php
											if($i == 2) {
											?>
												<span class="ttip-container">
													<span class="ttip">
														<span class="glyphicon glyphicon-info-sign fs-18"></span>
													</span>
													<span>
														<span class="glyphicon glyphicon-remove"></span>
														<?php echo $this->StaticText->getStripped('Loan Process WCL - Step 3 - tooltip'); ?>
													</span>
												</span>
											<?php
											}
											?>
								    	</p>
									</div>
							    </div>
							    <a href="" class="btn btn-success scroll-to-form">
						    		<span>
										<?php echo $this->StaticText->getStripped('Schedule appointment'); ?>
									</span>
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
