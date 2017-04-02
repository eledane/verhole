<?php
$class = $this->fetch('class');
$contactType = $this->fetch('contactType');
if (!empty($class)) {
	$formClass = $class;
} else {
	$formClass = '';
}
?>

<?php
$form_menu_style = $this->fetch('form_menu_style'); 
echo $this->fetch('formMenu');
?>

<div class=" <?php echo $formClass; ?>" style="<?php echo $form_menu_style; ?>">
	<?php
	if (empty($contactType)) {
		$contactType = Configure::read('Contact.regular');
	}

	if (!empty($this->request->data['Contact']['type'])) {
		$contactType = $this->request->data['Contact']['type'];
	}

	$url = $this->here;
	if (!empty($this->request->data['Contact']['form_url'])) {
		$url = $this->request->data['Contact']['form_url'];
	}
	$sectionName = $this->fetch('sectionNameContactForm');
	if(empty($sectionName)) {
		$sectionName = (!empty($pageData['title']) ? $pageData['title'] : 'homepage');
	}
	if(!empty($this->request->data['Contact']['section'])) {
		$sectionName = $this->request->data['Contact']['section'];
	}

	$submitUrl = $this->fetch('leaveFormSubmitUrl');
	if (empty($submitUrl)) {
		$submitUrl = $this->Html->getAbsoluteLangLink('/leaveContact');
	}
	?>
	<div class="container">
		<div class="row main-form">
			<?php
			echo $this->Message->getError();
			echo $this->Message->getSuccess();
			echo $this->fetch('formCreate');
			echo $this->Form->input('fb_account', array(
				'type' => 'hidden',
				'id' => 'fb-account-input'
			));
			?>
			<?php
			echo $this->Form->input('type', array(
				'type' => 'hidden',
				'value' => $contactType
			));
			?>
			<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('section', array('type' => 'hidden', 'value' => $sectionName)); ?>
			<?php echo $this->Form->input('calculator_type', array('type' => 'hidden')); ?>
			<?php
			if (isset($pageData['modulesData']['promotion']['Product']['name'])) {
				$promotionName = $pageData['modulesData']['promotion']['Product']['name'];
			}
			?>
			<?php echo $this->Form->input('promotion_name', array('type' => 'hidden', 'value' => isset($promotionName) ? $promotionName : "")); ?>
			<?php
			$this->Form->unlockField('loan_amount');
			echo $this->Form->input('loan_amount', array('type' => 'hidden'));
			$this->Form->unlockField('repayment_length');
			echo $this->Form->input('repayment_length', array('type' => 'hidden'));
			$this->Form->unlockField('documents');
			echo $this->Form->input('documents', array('type' => 'hidden'));
			$this->Form->unlockField('interested_in');
			echo $this->Form->input('interested_in', array('type' => 'hidden'));
			$this->Form->unlockField('work_income');
			echo $this->Form->input('work_income', array('type' => 'hidden'));
			$this->Form->unlockField('parttime_income');
			echo $this->Form->input('parttime_income', array('type' => 'hidden'));
			$this->Form->unlockField('rents');
			echo $this->Form->input('rents', array('type' => 'hidden'));
			$this->Form->unlockField('food');
			echo $this->Form->input('food', array('type' => 'hidden'));
			$this->Form->unlockField('children_cost');
			echo $this->Form->input('children_cost', array('type' => 'hidden'));
			$this->Form->unlockField('other_expenses');
			echo $this->Form->input('other_expenses', array('type' => 'hidden'));
			$this->Form->unlockField('utm_campaign');
			echo $this->Form->input('utm_campaign', array('type' => 'hidden', 'value' => isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''));
			$this->Form->unlockField('utm_source');
			echo $this->Form->input('utm_source', array('type' => 'hidden', 'value' => isset($_GET['utm_source']) ? $_GET['utm_source'] : ''));
			$this->Form->unlockField('utm_medium');
			echo $this->Form->input('utm_medium', array('type' => 'hidden', 'value' => isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''));
			$this->Form->unlockField('utm_content');
			echo $this->Form->input('utm_content', array('type' => 'hidden', 'value' => isset($_GET['utm_content']) ? $_GET['utm_content'] : ''));
			$this->Form->unlockField('utm_term');
			echo $this->Form->input('utm_term', array('type' => 'hidden', 'value' => isset($_GET['utm_term']) ? $_GET['utm_term'] : ''));
			echo $this->Form->input('form_url', array('type' => 'hidden', 'value' => $url));
			?>
			<?php
			echo $this->fetch('leaveFormFields');
			?>
			<div class="col-sm-6">
                            <div id="rowhigh">
				<?php
				echo $this->Js->submit($this->StaticText->getStripped('Leave contact form - SEND'), array(
					'label' => '',
					'update' => '.ajaxLeaveForm',
					'async' => false,
					'type' => 'json',
					'buffer' => false,
					'url' => $submitUrl,
					'class' => 'btn btn-dark btn-send-form',
					'div' => 'form-group')
				);
				?>
                           </div>
			</div>
<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php
echo $this->fetch('leaveFormJS');
?>
