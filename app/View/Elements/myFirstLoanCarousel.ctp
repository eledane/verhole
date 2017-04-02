<div class="carousel-container">
	<div class="swiper-wrapper">

		<?php
		if(!empty($step2['children'])) {
			?>
			<?php
			foreach($loanSteps as $step3) {
				if(!empty($step3['children'])) {
					foreach($step3['children'] as $children3) {
						?>
						<h3><a href="#<?php echo $children3['MyFirstLoanCategory']['url']; ?>"><?php echo $children3['MyFirstLoanCategory']['name']; ?></a></h3>
					<?php
					}
				}
			}
			?>
			<?php
			$addClass2 = false;
			foreach($step2['children'] as $children) {
				if($addClass2 === false){
					$class2 = 'active';
					$addClass2 = true;
				} else {
					$class2 = '';
				}
				?>
				<div id="<?php echo $children['MyFirstLoanCategory']['url']; ?>" class="<?php echo $class2; ?>">
					<?php
					foreach($children['MyFirstLoanStep'] as $childrenstep) {
						?>
						<div>
							<h4><?php echo $childrenstep['name']; ?></h4>
							<p><?php echo $childrenstep['description']; ?></p>
						</div>
					<?php
					}
					?>
				</div>
			<?php
			}
		} else {
			?>
			<?php
			foreach($step2['MyFirstLoanStep'] as $children) {
				$child_img = $this->Media->getFirstImagePath($children['moduleMedia']);
				?>
				<div class="swiper-slide">
					<div class="swiper-slide-content">
						<div class="img-wrapper col-lg-3 col-lg-offset-3">
							<img src="/<?php echo $child_img; ?>" alt="<?php echo $children['name']; ?>">
						</div>
						<div class="vertical-align col-lg-4">
							<div class="content-wrapper">
								<h4><?php echo $children['name']; ?></h4>
								<p>
									<?php
									echo String::truncate(
										$children['description'],
										350,
										array(
											'ellipsis' => '...',
											'exact' => false,
											'html' => true
										)
									);
									?>
									<?php
									if(!empty($children['tooltip'])) {
										?>
										<span class="ttip-container ttip-left">
											<span class="ttip">
												<span class="glyphicon glyphicon-info-sign fs-18"></span>
											</span>
											<span>
												<span class="glyphicon glyphicon-remove"></span>
												<?php echo $children['tooltip']; ?>
											</span>
											<span class="ttiplabel"><?php echo $this->staticText->getStripped('My first loan - tooltip label'); ?></span>
										</span>
									<?php
									}
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		<?php
		}
		?>
	</div>
	<div class="swiper-pagination"></div>
	<a href="#" class="swiper-prev"></a>
	<a href="#" class="swiper-next"></a>
</div>