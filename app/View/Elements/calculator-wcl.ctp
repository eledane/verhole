<?php
	if (isset($pageData['modulesData']['promotion']['Product']['price'])){
		$initial = $pageData['modulesData']['promotion']['Product']['price']; //JS takto nastavi initial na nejblizi nizsi hodnotu k cislu
	}
	else {
		$initial = 5000; //JS takto nastavi initial na minimalni hodnotu slideru
	}
	//pozor, toto nejsou pocty mesicu, ale pocty kroku na slideru (pocet mesicu pro jednotlive kroky je v jsonu)
	$minTime = '0';
?>
	<div class="sliders">
	<?php
	echo $this->Html->image(
		$this->Doodle->renderPath('go-for-it-calculator.png'),
		array(
			'class' => 'doodle d1-wcl'
		)
	);
	?>
		<div class="row">
			<div class="col-xs-12">
				<h2 class="slider-heading text-center">
					<?php
						echo $this->StaticText->getStripped('Calculator - WCL - Title');
					?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="form">
					<?php
						$homepageUrl = $homepage['Page']['url'];
						$thisUrl = $pageData['url'];
						if($homepageUrl === $thisUrl):
					?>
					<div class="calculator-switch-wrapper">
						<div class="calculator-switch-text">
							<?php echo $this->StaticText->getStripped('Already a customer?'); ?>
						</div>
						<div class="calculator-switch-button">
							<input class="calculator-switch" type="radio" name="calculatorSwitch2" id="calculator-switch-posl" data-toggle-type="posl">
							<label for="calculator-switch-posl" class="calculator-switch-main-label-posl"><?php echo $this->StaticText->getStripped('Calculator - switch position 1'); ?></label>
							<input class="calculator-switch" type="radio" name="calculatorSwitch2" id="calculator-switch-wcl" data-toggle-type="wcl" checked>
							<label for="calculator-switch-wcl" class="calculator-switch-main-label-wcl"><?php echo $this->StaticText->getStripped('Calculator - switch position 2'); ?></label>
						</div>
					</div>
					<?php
						endif;
					?>
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
				<div class="calculator-results">
					<div class="result">
						<div><?php echo $this->StaticText->getStripped('Calculator - Monthly payment'); ?></div> <strong>¥</strong><span></span>
						<i>
							<?php
							echo $this->Html->image(
								$this->Doodle->renderPath('yay-red.png'),
								array(
									'class' => 'doodle d2'
								)
							);
							?>
						</i>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php
					echo $this->Element('box', array('class' => 'centered-box'));
				?>
			</div>
		</div>

		<?php
		if(!empty($contactFormElement)) {
			echo $contactFormElement;
		}
		?>
		<div class="col-xs-12">
			<div class="note visible-xs-block visible-sm-block">
				<p><?php echo $this->StaticText->getStripped('Calculator - Note'); ?></p>
			</div>
			<div class="note hidden-md-custom">
				<p><?php echo $this->StaticText->getStripped('Calculator - Note'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 home-cal-update">
				<div class="loan-list">
					<?php
						echo $this->Html->link(
							$this->StaticText->getStripped('Price Lists'),
							array(
								'pageurl' => $pricelistsPage['Page']['tree_slug']
							)
						);
					?>
				</div>
			</div>

			<div class="col-xs-12 home-cal-update">

				<div class="vas-list">
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
				</div>


		</div>
	</div>



