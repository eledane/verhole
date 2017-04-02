
<div class="container">

	<?php echo $this->Form->create(
		'budgetTool',
		array(
			'default'=> 'false',
			'class' => 'budget-tool-form',
			'inputDefaults' => array(
				'required' => true,
				'data-type' => 'number',
				'type' => 'text'
			)
		)
	);?>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<img class="inline-img question-mark" src="../img/budget-planner/question.png" alt="question mark" />
			<div class="row first">
				<?php
					echo $this->Html->image(
						$this->Doodle->renderPath('uh-oh-budget.png'),
						array(
							'class' => 'doodle bubble-uh-oh'
						)
					);
				?>
				<?php echo $this->Form->input($this->StaticText->getStripped('Can I afford it - I’m interested in'), array(
					'type' => 'radio',
					'data-type' => 'radio',
					'id' => 'interestedIn',
					'div' => 'col-sm-12 budget-tool-col',
					'class' => 'budgetType',
					'options' => array(
						$this->StaticText->getStripped('Loans Menu - POS Loan') => $this->StaticText->getStripped('Loans Menu - POS Loan'),
						$this->StaticText->getStripped('Loans Menu - Walk-in Cash Loan') => $this->StaticText->getStripped('Loans Menu - Walk-in Cash Loan')
					),
					'default' => (!empty($selectedCategory)?$selectedCategory:''),
					'escape' => false
				));?>
			</div>
		</div>
	</div>
	<div class="row income-fields-row">
		<div class="col-sm-8 col-sm-offset-2">
			<img class="inline-img" src="../img/budget-planner/income.png" alt="income mark" />
			<fieldset class="income-fields">
				<legend><?php echo $this->StaticText->getStripped('Can I afford it - Monthly Income'); ?></legend>
				<div class="row">
					<div class="col-sm-6">
						<?php echo $this->Form->input('workIncome', array('id' => 'workIncome', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - Work income'), 'div' => 'form-group', 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
					<div class="col-sm-6">
						<?php echo $this->Form->input('parttimeIncome', array('id' => 'parttimeIncome', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - Part-time job income'), 'div' => 'form-group',  'required' => false, 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php
				echo $this->Html->image(
					$this->Doodle->renderPath('go-for-it-red.png'),
					array(
						'class' => 'doodle go-for-it'
					)
				);
			?>
			<img class="inline-img" src="../img/budget-planner/expenses.png" alt="income mark" />
			<fieldset class="expenses-fields">
				<legend><?php echo $this->StaticText->getStripped('Can I afford it - Monthly Expenses'); ?></legend>
				<div class="row">
					<div class="col-sm-6">
						<?php echo $this->Form->input('inputRents', array('id' => 'inputRents', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - House rent'), 'div' => 'form-group', 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
					<div class="col-sm-6">
						<?php echo $this->Form->input('inputFood', array('id' => 'inputFood', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - Food'), 'data-min' => '1000000', 'div' => 'form-group', 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
					<div class="col-sm-6">
						<?php echo $this->Form->input('inputChildren', array('id' => 'inputChildren', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - Children cost'), 'required'=> false, 'div' => 'form-group', 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
					<div class="col-sm-6">
						<?php echo $this->Form->input('otherExpenses', array('id' => 'otherExpenses', 'type' => 'tel', 'class'=>'form-control form-number', 'label' => $this->StaticText->getStripped('Can I afford it - Other personal expenses'), 'required'=> true, 'div' => 'form-group', 'after' => $this->Html->Tag('div', '¥', array('class' => 'input-placeholder-helper'))));?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
	<div class="row mandatory-row">
		<div class="col-xs-6 col-xs-offset-6 col-sm-8 col-sm-offset-2">
			<p class="mandatory-text"><?php echo $this->StaticText->getStripped('Can I afford it - Fields marked with'); ?> <span class="color-red">*</span> <?php echo $this->StaticText->getStripped('Can I afford it - are mandatory'); ?>.</p>
		</div>
	</div>
	<div class="row last relative">
		<?php
			echo $this->Html->image(
				$this->Doodle->renderPath('its-great-red.png'),
				array(
					'class' => 'doodle great'
				)
			);
		?>
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<?php echo $this->Form->button($this->StaticText->getStripped('Can I afford it - Calculate'), array('id'=>'nobackendSubmit', 'type'=>'submit', 'class'=> 'btn btn-danger')) ?>
		</div>
	</div>
	<?php echo $this->Form->end();?>
</div>
<section class="budget-results">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 results-sections">
				<div class="budget-result-loan">
					<h2 class="bold"><?php echo $this->staticText->getStripped('Can I afford it - results - Title') ?></h2>
					<div class="result-loan-status">
						<img class="inline-img" src="../img/budget-planner/income.png" alt="income mark" />
						<span class="result-loan-heading middle"><?php echo $this->StaticText->getStripped('Can I afford it - results - Monthly Income'); ?></span>
						<span class="result-loan-income middle"></span>
					</div>
					<div class="result-loan-status">
						<img class="inline-img" src="../img/budget-planner/expenses.png" alt="expenses mark" />
						<span class="result-loan-heading middle"><?php echo $this->StaticText->getStripped('Can I afford it - results - Monthly Expenses'); ?></span>
						<span class="result-loan-expenses middle"></span>
					</div>
					<div class="result-loan-status">
						<p class="result-loan-bottom-heading"><?php echo $this->StaticText->getStripped('Can I afford it - Disposable income'); ?></p>
						<p class="disposable-income"></p>
					</div>
					<div class="result-loan-status status-emergency" style="display: none;">
						<p class="result-loan-bottom-heading"><?php echo $this->StaticText->getStripped('Can I afford it - Savings for emergency'); ?></p>
						<p class="savings-emergency"></p>
					</div>
					<div class="result-loan-status status-installment" style="display: none;">
						<p class="result-loan-bottom-heading"><?php echo $this->StaticText->getStripped('Can I afford it - Income for monthly installment'); ?></p>
						<p class="income-monthly-installment"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 contact-box" style="display: none;">
				<?php
				echo $this->Element('box', array('class' => 'box-white'));
				?>
			</div>
		</div>
	</div>
	<div class="ajaxLeaveForm" style="display: none;">
		<?php
			echo $this->element('ContactForms/contact-form',array('class' => 'homepage-leaveForm', 'sectionNameContactForm' => $WCLPage['Page']['title']));
		?>
	</div>
</section>
