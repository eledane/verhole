<section class="first-loan">
	<?php
	echo $this->Element('pageHeading',
		array(
		    'doodle' => 'pen.png',
		    'class' => 'pen',
			'heading' => 'My first loan - heading',
			'background' => 'my-first-loan.jpg',
			'tabs' => true
		)
	);
	?>
	<div class="container-fluid">
		<div class="row">
		
		
		
			<div class="tabpanel tabs-common">
				<ul class="nav nav-tabs tabs-menu" role="tablist">
					<?php
					$addClass = false;
					foreach($loanSteps as $step) {
						$img = $this->Media->getFirstImagePath($step['MyFirstLoanCategory']['moduleMedia']);
						if($addClass === false){
							$class = 'current';
							$first = 'col-sm-offset-2';
							$addClass = true;
						} else {
							$class = '';
							$first = '';
						}
						?>
						<div class="col-xs-6 col-sm-4 <?php echo $first ?>">
							<li role="presentation" class="<?php echo $class; ?>">
								<a class="btn-<?php echo $step['MyFirstLoanCategory']['url']; ?>" href="#<?php echo $step['MyFirstLoanCategory']['url']; ?>" aria-controls="<?php echo $step['MyFirstLoanCategory']['url']; ?>" role="tab" data-toggle="tab">
									<?php echo $step['MyFirstLoanCategory']['name']; ?>
								</a>
							</li>
						</div>
					<?php
					}
					?>
				</ul>
				<div class="tab-content">
					<?php
					$addClass3 = false;
					foreach($loanSteps as $step2) {
						if($addClass3 === false){
							$class3 = 'active';
							$addClass3 = true;
						} else {
							$class3 = '';
						}
						?>
						<div role="tabpanel" class="tab-pane fade in <?php echo $class3; ?>" id="<?php echo $step2['MyFirstLoanCategory']['url']; ?>">


							<section class="<?php echo $step2['MyFirstLoanCategory']['url']; ?>">
								<div class="container-fluid no-loop">
									<?php
									echo $this->Html->image(
										$this->Doodle->renderPath('great.png'),
										array(
											'class' => 'doodle'
										)
									);
									?>
									<h2 class="loan-process-headline"><?php echo $this->staticText->getStripped('My first loan - Loan Process'); ?></h2>
									<div class="row">
										<?php
										echo $this->Element('myFirstLoanCarousel', array('step2' => $step2, 'loanSteps' => $loanSteps));
										?>
									</div>
								</div>
							</section>
						</div>
					<?php
					}
					?>
				</div>
			</div>
			
			
			
		</div>
	</div>
	<hr/>
	<?php
		echo $this->Element('box', array('class' => 'centered-box'));
	?>

	<div class="ajaxLeaveForm first-loan-leave-form hidden" style="display: none;">
		<?php
			echo $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu','class' => 'homepage-leaveForm', 'sectionNameContactForm' => $WCLPage['Page']['title']));
		?>
	</div> 

  <?php /*
	<div class="ajaxLeaveForm first-loan-leave-form hidden" style="display: none;">
		<?php
			echo $this->element('ContactForms/contact-form',array('class' => 'homepage-leaveForm', 'sectionNameContactForm' => $WCLPage['Page']['title']));
		?>
	</div>
*/ ?>

</section>
