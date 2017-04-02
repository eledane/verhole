<?php
	$minLoan = '5000000';
	$maxLoan = '10000000';
	//pozor, toto nejsou pocty mesicu, ale pocty kroku na slideru (pocet mesicu pro jednotlive kroky je v jsonu)
	$minTime = '0'; 
	$maxTime = '3';  
	$step = '500000';
	$calc = 'CL1';
	$select = true;
?>

<script>var calcData=<?php echo $csvData; ?>;</script>

		<div class="sliders">
			<div class="col-sm-12">
				<div class="form">
					<strong class="section"><?php echo $this->StaticText->getStripped('Calculator - Amount of the loan in VNĐ'); ?></strong>
					<div class="slider-wrapper">
						<div class="slider-elem slider-amount" data-value="<?php echo $minLoan;?>" data-min="<?php echo $minLoan;?>" data-max="<?php echo $maxLoan;?>" data-step="<?php echo $step;?>" data-input="#ContactLoanAmount" data-calc="<?php echo $calc;?>"></div>
					</div>

					<strong class="section"><?php echo $this->StaticText->getStripped('Calculator - Length of repayment in months'); ?></strong>
					<div class="slider-wrapper">
						<div class="slider-elem slider-months" data-value="<?php echo $minTime;?>" data-min="<?php echo $minTime;?>" data-max="<?php echo $maxTime;?>" data-step="1" data-calc="<?php echo $calc;?>" data-input="#input2"></div>
					</div>
					<?php
					if($select){
						?>
						<div class="docs-wrapper">
							<strong><?php echo $this->StaticText->getStripped('Calculator - Documents'); ?></strong>
							<div class="documents-select">
								<div class="form-group">
									<input type="radio" data-text="<?php echo $this->StaticText->getStripped('Calculator - Personal ID + Family Record Book'); ?>" value="CL1" name="selection" id="selection-1" checked>
									<label for="selection-1"><?php echo $this->StaticText->getStripped('Calculator - Personal ID + Family Record Book'); ?></label>
									<div class="cleaner"></div>
									<input type="radio" data-text="<?php echo $this->StaticText->getStripped('Calculator - Personal ID + Family Record Book + Proof of Income'); ?>" value="CL2" name="selection" id="selection-2">
									<label for="selection-2"><?php echo $this->StaticText->getStripped('Calculator - Personal ID + Family Record Book + Proof of Income'); ?>
										<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
										<span class="tooltip">
											<?php echo $this->StaticText->getStripped('Calculator - documents - tooltip'); ?>
										</span>
									</label>
								</div>
							</div>
						</div>
					<?php
					}
					?>
					<input type="hidden" name="input1" id="input1" />
					<input type="hidden" name="input2" id="input2" />
				</div>
				<div class="result">
					<?php echo $this->StaticText->getStripped('Calculator - Monthly payment'); ?>: <span></span>&nbsp;<span class="green">VNĐ</span>
				</div>
				<div class="note">
					<p><?php echo $this->StaticText->getStripped('Calculator - Note'); ?></p>
				</div>
			</div>
		</div>



