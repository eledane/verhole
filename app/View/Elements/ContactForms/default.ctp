<?php
	$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
	if ($language !== 'en') {
		$jsonFile = 'js/provinces.json';
	} else {
		$jsonFile = 'js/provinces_english.json';
	}
	$json = file_get_contents(WWW_ROOT . $jsonFile);
	$obj = json_decode($json);
	$provinces = array();
	$i = 0;
	foreach($obj as $province){
		$provinces[$province->province] = $province->province;
		$i++;
	}
?>
<?php
$this->extend('/Elements/ContactForms/leaveFormGeneral');
$this->start('leaveFormFields');
$this->assign('class',!empty($class)?$class:null);
$this->assign('contactType',!empty($contactType)?$contactType:null);
$this->assign('leaveFormSubmitUrl',$this->Html->getAbsoluteLangLink('/leaveContact'));
$this->assign('formCreate',$this->Form->create('Contact', array('url' => $this->Html->getAbsoluteLangLink('/leaveContact'), 'class' => 'hc-form')));
?>
<div class="row">
	<div class="col-sm-12 mb20 form-title">
		<h2><?php echo $this->StaticText->getStripped('Leave contact form - Main title'); ?></h2>
	</div>
</div>
<div class="col-sm-6">
	<div class="row">
		<div class="form-group">
			<div class="col-sm-12 provinces">
				<?php
				$this->Form->unlockField('province_name');
				?>
				<?php echo $this->Form->input('province_name', array('id' => 'inputProvinceName', 'type' => 'select', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - Select province') . '&nbsp;*', 'options' => $provinces, 'empty' => $this->StaticText->getStripped('Leave contact form - placeholder - Province'), 'div' => 'form-group')); ?>
			</div>
			<div class="col-sm-12 cities">
				<?php
				$this->Form->unlockField('city_name');
				?>
				<?php echo $this->Form->input('city_name', array('id' => 'inputCityName', 'type' => 'select', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - Select city') . '&nbsp;*',  'empty' => $this->StaticText->getStripped('Leave contact form - placeholder - City'), 'div' => 'form-group')); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php echo $this->Form->input('name', array('id' => 'inputFullName', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My full name') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Name'), 'div' => 'form-group')); ?>
		</div>
		<div class="col-sm-12">
			<?php echo $this->Form->input('phone', array('id' => 'inputPhoneNumber', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My phone number') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Phone'), 'div' => 'form-group')); ?>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="row sm-p-top-0">
		<div class="col-sm-12">
			<?php echo $this->Form->input('client_comment', array('id' => 'inputClientComment', 'type' => 'textarea', 'class' => 'form-control textarea-big', 'maxlength' => '1000', 'label' => $this->StaticText->getStripped('Leave contact form - Client comment'), 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Client comment'), 'div' => 'form-group')); ?>
		</div>
	</div>
	<div class="row mb20">
		<div class="col-sm-12 agreement">
			<?php echo $this->Form->input('agreement', array('id' => 'inputAgreement', 'type' => 'checkbox', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - Agreement'), 'div' => 'form-group')); ?>
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
