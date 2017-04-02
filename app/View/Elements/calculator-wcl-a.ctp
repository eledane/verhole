<section class="calculator-wcl-new">
	<?php
		if (isset($pageData['modulesData']['promotion']['Product']['price'])){
			$initial = $pageData['modulesData']['promotion']['Product']['price']; 
		}
		else {
			$initial = 5000;
		}
		$minTime = '0';
	?>
		<div class="calculator-doodle">
			<div style="text-align: center; margin: 30px 0; font-size:30px">
				<?php
				echo $this->Html->image(
					$this->Doodle->renderPath('wicl-calculator.jpeg'),
					array(
						'class' => 'doodle talking-calculator'
					)
				);
	

				//echo $this->StaticText->getStripped('WICL-second-section-title'); 
				?>
			</div>
		</div>
		
		<div class="sliders">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="form">
						<strong class="section calculator-section"><?php echo $this->StaticText->getStripped('Calculator - Amount of the loan in RNB'); ?></strong>
						<div class="slider-wrapper">
							<div class="slider-elem slider-amount" data-value="<?php echo $initial;?>" data-input="#ContactLoanAmount"></div>
						</div>

						<strong class="section calculator-section mt-4"><?php echo $this->StaticText->getStripped('Calculator - Length of repayment in months'); ?></strong>
						<div class="slider-wrapper">
							<div class="slider-elem slider-months" data-value="<?php echo $minTime;?>" data-input="#input2"></div>
						</div>

						<input type="hidden" name="input1" id="input1" />
						<input type="hidden" name="input2" id="input2" />
					</div>
					
				</div>
				<div class="col-xs-12 col-md-6">
					<?php
						echo $this->Element('box-a', array('class' => 'centered-box'));
					?>
				</div>
			</div>

			<div class="col-xs-12">
				<div class="note visible-xs-block visible-sm-block">
					<p><?php echo $this->StaticText->getStripped('WICL-second-section-note'); ?></p>
				</div>
				<div class="note hidden-md-custom">
					<p><?php echo $this->StaticText->getStripped('WICL-second-section-note'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 calculator-footer">
					<div class="row">
						<div class="loan-list col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1 text-center fff">
							<?php
								echo $this->Html->link(
									$this->StaticText->getStripped('Price Lists'),
									array(
										'pageurl' => $pricelistsPage['Page']['tree_slug']
									),
									array(
										'target'=>'_blank'
									)
								);
							?>
						</div>
						<div class="vac col-xs-12 col-sm-4 col-lg-4	 text-center">
							<?php
								echo $this->Html->link(
									$this->StaticText->getStripped('Value Added Services - title'),
									array(
										'pageurl' => $valueAddedServicesPage['Page']['tree_slug']
									),
									array(
										'target'=>'_blank'
									)
								);
							?>
						</div>
						<div class="faq-calc col-xs-12 col-sm-4 col-lg-3 text-center">
							<?php
								$locale = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
								if($locale != 'en') {
									$faqTitle = $faqPage['Page']['title'];
									$faqLink = '捷现贷 (新客户)';
								} else {
									$faqTitle = 'FAQ';
									$faqLink = '捷现贷';
								}
								echo $this->Html->link(
									$faqTitle,
									array(
										'pageurl' => $faqPage['Page']['tree_slug'].'?category='.$faqLink
									),
									array(
										'target'=>'_blank'
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>




</section>
