<?php
$this->extend('/Elements/ContactForms/leaveFormGeneral');
$this->start('leaveFormFields');
$this->assign('class',!empty($class)?$class:null);
$this->assign('contactType',  Configure::read('Contact.wcl'));
$this->assign('leaveFormSubmitUrl',$this->Html->getAbsoluteLangLink('/leaveContact/wcl'));
$this->assign('formCreate',$this->Form->create('Contact', array('url' => $this->Html->getAbsoluteLangLink('/leaveContact/wcl'), 'class' => 'hc-form')));
?>
<div class="row">
	<div class="col-sm-12 mb20 form-title">
		<h2><?php echo $this->StaticText->getStripped('Leave contact form - Main title'); ?></h2>
	</div>
</div>
<div class="col-sm-6">
	<div class="row">
		<div class="col-sm-12 wcl-disclaimer mb20">
			<?php echo $this->staticText->getStripped('WCL - Form Disclaimer'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.city_id', array(
				'id' => 'inputCity',
				'class' => 'form-control',
				'label' => $this->StaticText->getStripped('Leave contact form - City') . '&nbsp;*',
				'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - City'),
				'div' => 'form-group',
				'options' => $regions
				)); ?>
		</div>
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.name', array('id' => 'inputFullName', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My full name') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Name'), 'div' => 'form-group')); ?>
		</div>
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.phone', array('id' => 'inputPhoneNumber', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My phone number') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Phone'), 'div' => 'form-group')); ?>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="row sm-p-top-0">
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.client_comment', array('id' => 'inputClientComment', 'type' => 'textarea', 'class' => 'form-control textarea-big', 'maxlength' => '1000', 'label' => $this->StaticText->getStripped('Leave contact form - Client comment'), 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Client comment'), 'div' => 'form-group')); ?>
		</div>
	</div>
	<div class="row mb20">
		<div class="col-sm-12 agreement">
			<?php echo $this->Form->input('Contact.agreement', array('id' => 'inputAgreement', 'type' => 'checkbox', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - Agreement'), 'div' => 'form-group')); ?>
			<span class="ttip">
			</span>
			<span>
				<span class="glyphicon glyphicon-remove"></span>
				<?php echo $this->StaticText->getStripped('Leave contact form - tooltip'); ?>
			</span>
		</div>
	</div>
</div>
<?php
$this->end();
