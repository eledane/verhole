<?php
if (isset($pageData['modulesData']['promotion']['Product']['price'])){
	$initial = $pageData['modulesData']['promotion']['Product']['price']; //JS takto nastavi initial na nejblizi nizsi hodnotu k cislu
}
else {
	$initial = 5000; //JS takto nastavi initial na minimalni hodnotu slideru
}
//pozor, toto nejsou pocty mesicu, ale pocty kroku na slideru (pocet mesicu pro jednotlive kroky je v jsonu)
$minTime = '0';

$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));

?>
<div class="sliders">
	<?php
	echo $this->Html->image(
		$this->Doodle->renderPath('go-for-it-calculator.png'),
		array(
			'class' => 'doodle d1'
		)
	);
	?>
	<div class="row xs-text-center">
		<div class="col-sm-6 ">
			<h2 class="slider-heading text-left "><?php echo $this->StaticText->getStripped('Calculator - POSL - Title'); ?></h2>
		</div>
		<div class="col-sm-6 text-right">
			<?php
					echo $this->Html->link(
						$this->StaticText->getStripped('Link - My first loan page'),
						array('pageurl' => $firstLoanPage['Page']['tree_slug']),
						array('class' => 'all-related link-with-arrow link-to-first-loan','escape' => false)
					);
			?>
		</div>
	</div>
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
			
			<div class="calculator-results">
				<div class="result">
					<div><?php echo $this->StaticText->getStripped('Calculator - Monthly payment'); ?></div> <strong>¥</strong><span></span>
					<i>
						<?php
						echo $this->Html->image(
							$this->Doodle->renderPath('yay.png'),
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
				// check whether we are on posl page. If so, add class to box part
				$currentTemplate = $pageData['template'];
				$poslTemplate = $posLoanPage['Page']['template'];
				if($currentTemplate === $poslTemplate) {
					$class = 'centered-box pos-loan-box';
				} else {
					$class = 'centered-box';
				}
				echo $this->Element('box', array('class' => $class));
			?>
		</div>
	</div>
	<?php
	if(empty($pageData['modulesData']['categories'])) {
	?>
		<div class="ajaxLeaveForm" style="display: none;">
			<?php
			echo $this->element('ContactForms/default',array('class' => 'homepage-leaveForm'));
			?>
		</div>
	<?php
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
		<div class="col-xs-12">
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
	</div>
</div>




