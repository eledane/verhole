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
foreach ($obj as $province) {
	$provinces[$province->province] = $province->province;
	$i++;
}
switch ($pageData['modulesData']['promotion']['Promotion']['url']) {
    case '1607':
    case '1607__':
        $__section = '1607pos';
    break;
    case 'onepercent':
    case 'onepercent__':
        $__section = '1per';
    break;
}
?>
<?php
$this->extend('/Elements/ContactForms/leaveFormGeneral');
$this->start('leaveFormFields');
$this->assign('class', !empty($class) ? $class : null);
$this->assign('contactType', Configure::read('Contact.wcl'));
$this->assign('leaveFormSubmitUrl', $this->Html->getAbsoluteLangLink('/leaveContact/wcl'));
$this->assign('formCreate', $this->Form->create('Contact', array('url' => $this->Html->getAbsoluteLangLink('/leaveContact/wcl'), 'class' => 'hc-form')));
$this->assign('sectionNameContactForm', $__section);
?>
<div class="row contact-wcl-form">
	<div class="col-sm-12 mb20 form-title">
		<h2><?php echo $this->StaticText->getStripped('Leave contact form - Main title'); ?></h2>

		<?php echo "<script> var region_json = jQuery.parseJSON('" . $regions_json . "'); </script>"; ?>
	</div>
</div>
<!--
11111
<?php
var_dump($pageData['modulesData']['promotion']['Promotion']['url']);
?>
-->
<div class="col-sm-6">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12 wcl-already-customer mb20">
					<div class="wcl-question">
						<?php
    				    if($language == 'en') {
        				    echo 'Have you ever successfully applied an Home Credit loan before in China?';
        				} else {
        				    echo '亲，您曾经使用过捷信的贷款服务吗？';
        				}
        				?>
					</div>
					<div class="wcl-radio-wrapper">
						<?php
						echo $this->Form->input('Contact.current_customer',
							array(
								'id' => 'inputCurrentCustomer',
								'class' => 'form-control wcl-radio',
								'label' => $this->StaticText->getStripped('Leave contact form - Current customer'),
								'div' => 'form-group',
								'type' => 'radio',
								'required' => true,
								'fieldset' => false,
								'legend' => false,
								'options' => array(
									'1' => __d('hc', 'yes'),
									'0' => __d('hc', 'no')
								)
							)
						);
						?>
						<div class="custom_error-message error-message--out-of-form-group error-inputCurrentCustomer" style="display: none;"><?php echo _('can not be empty') ?></div>
					</div>
				</div>
			</div>






			<!-- No -->
<!--			<div class="leave-form-city" style="display:none">

				<div class="provinces">
					<?php
					$this->Form->unlockField('Contact.province_name');
					?>
					<div class="form-group"><label for="selectProvinceName"><?php echo $this->StaticText->getStripped('Leave contact form - Select province');?></label>
						<select class="form-control" id="selectProvinceName">
							<option value=""><?php echo $this->StaticText->getStripped('Leave contact form - placeholder - Province'); ?></option>
<?php
						foreach ($regions as $region => $cities) {
							echo '<option value="' . $region . '">' . $region . '</option>' . "\n";
						}

?>
						</select>
					</div>

					<div class="custom_error-message error-message--out-of-form-group error-selectProvinceName" style="display: none;">Please, fill in this field.</div>
				</div>
				<div class="cities">
					<?php
					$this->Form->unlockField('Contact.city_id');
					?>
					<?php
					echo $this->Form->input('Contact.city_id', array(
						'id' => 'inputCity',
						'class' => 'form-control',
						'label' => $this->StaticText->getStripped('Leave contact form - City') . '&nbsp;*',
						'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - City'),
						'div' => 'form-group',
						'required' => true,
						'empty' => $this->StaticText->getStripped('Leave contact form - placeholder - City'),
						'options' => array()
					));
					?>
					<div class="custom_error-message error-message--out-of-form-group error-inputCity" style="display: none;">Please, fill in this field.</div>
				</div>
			</div>-->







			<!-- Yes -->
			<div class="leave-form-provinces" style="display:none;">
				<div class="provinces">
					<?php
					$this->Form->unlockField('Contact.province_name');
					?>
					<?php
					echo $this->Form->input('Contact.province_name', array(
						'id' => 'inputProvinceName',
						'type' => 'select',
						'class' => 'form-control',
						'label' => $this->StaticText->getStripped('Leave contact form - Select province') . '&nbsp;*',
						'options' => $provinces,
						'empty' => $this->StaticText->getStripped('Leave contact form - placeholder - Province'),
						'div' => 'form-group'));
					?>
					<div class="custom_error-message error-message--out-of-form-group error-inputProvinceName" style="display: none;">Please, fill in this field.</div>
				</div>
				<div class="cities">
					<?php
					$this->Form->unlockField('Contact.city_name');
					?>
					<?php
					echo $this->Form->input('Contact.city_name', array(
						'id' => 'inputCityName',
						'type' => 'select',
						'class' => 'form-control',
						'label' => $this->StaticText->getStripped('Leave contact form - Select city') . '&nbsp;*',
						'empty' => $this->StaticText->getStripped('Leave contact form - placeholder - City'),
						'div' => 'form-group'
					));
					?>
					<div class="custom_error-message error-message--out-of-form-group error-inputCityName" style="display: none;">Please, fill in this field.</div>
				</div>
			</div>






		</div>


		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.name', array('id' => 'inputFullName', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My full name') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Name'), 'div' => 'form-group')); ?>
			<div class="custom_error-message error-message--out-of-form-group error-inputFullName" style="display: none;">Please, fill in this field.</div>
		</div>

		<!-- TODO: fix phone placeholder to Phone (1st capital letter) -->
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.phone', array('id' => 'inputPhoneNumber', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My phone number') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Phone'), 'div' => 'form-group')); ?>
			<div class="custom_error-message error-message--out-of-form-group error-inputPhoneNumber" style="display: none;">Please, fill in this field.</div>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="row sm-p-top-0">
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.client_comment', array('id' => 'inputClientComment', 'type' => 'textarea', 'class' => 'form-control textarea-big', 'maxlength' => '1000', 'label' => $this->StaticText->getStripped('Leave contact form - Client comment'), 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Client comment'), 'div' => 'form-group')); ?>
		</div>
	</div>
	<!-- TODO: Change text to I agree to Data Policy -->
	<div class="row mb20">
		<div class="col-sm-12 agreement">
			<?php echo $this->Form->input('Contact.agreement', array('id' => 'inputAgreement', 'type' => 'checkbox', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - Agreement'), 'div' => 'form-group')); ?>
			<div class="custom_error-message error-inputAgreement" style="display: none;">Please, fill in this field.</div>
			<span class="ttip">
			</span>

			<!-- TODO: Change text from 'Send' to 'Leave Contact' -->
			<span>
				<span class="glyphicon glyphicon-remove"></span>
				<?php echo $this->StaticText->getStripped('Leave contact form - tooltip'); ?>
			</span>
		</div>
	</div>
</div>
<?php
$this->end();
?>

<?php
$this->start('leaveFormJS');
?>


<?php
$errors = array(
	'en' => array(
		'ERROR_FILL' => "Please, fill in this field.",
		'ERROR_INVALID_PHONE' => "Please enter a valid phone number",
		'ERROR_INVALID_NAME_MIN' => "Name must contain at least 2 characters.",
		'ERROR_INVALID_NAME_MAX' => "Name can contain 50 characters at maximum.",
	),
	'zh' => array(
		'ERROR_FILL' => "请填写这一栏",
		'ERROR_INVALID_PHONE' => "请输入有效电话号码",
		'ERROR_INVALID_NAME_MIN' => "姓名必须包含最少2个汉字。",
		'ERROR_INVALID_NAME_MAX' => "名字最多包含50个字符",
	)
);

$locale = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
//$locale = 'zh';

?>

<script>

	$(document).ready(function () {
		var answer = null;
		var radios = $('.wcl-radio');
		var cities = $('.leave-form-city');
		var provinces = $('.leave-form-provinces');

		function resetSelects() {
			cities.slideUp();
			provinces.slideUp();

			$('.cities').slideUp();

			$('#inputProvinceName').val('');
			$('#selectProvinceName').val('');

			$('#inputCityName').val('');
			$('#inputCity').val('');

			$('#inputCityName option:not(:first-child)').remove();
			$('#inputCity option:not(:first-child)').remove('');
		}

		<?php

				foreach ($errors[$locale] as $name => $error) {
					echo "\t\t";
					echo 'var ' . $name . '="'.$error.'";';
					echo "\n";
				}
		?>

		function checkInputs() {
			var status = true;

			if (answer == '1') {
				if (!($('#inputProvinceName').val() != '')) {
					$('.error-inputProvinceName').text(ERROR_FILL).slideDown();
					status = false;
				} else {
					$('.error-inputProvinceName').slideUp();

					if (!($('#inputCityName').val() != '')) {
						$('.error-inputCityName').text(ERROR_FILL).slideDown();
						status = false;
					} else {
						$('.error-inputCityName').slideUp();
					}
				}
			}
			else if (answer == '0') {
				if (!($('#selectProvinceName').val() != '')) {
					$('.error-selectProvinceName').text(ERROR_FILL).slideDown();
					status = false;
				} else {
					$('.error-selectProvinceName').slideUp();

					if (!($('#inputCity').val() != '')) {
						$('.error-inputCity').text(ERROR_FILL).slideDown();
						status = false;
					} else {
						$('.error-inputCity').slideUp();
					}
				}
			}

			if (!($('#inputFullName').val().length >= 2)) {
				$('.error-inputFullName').text(ERROR_FILL).slideDown();
				status = false;
			} else {
				$('.error-inputFullName').slideUp();
			}

			if (
				!(
					(("" + parseInt($('#inputPhoneNumber').val())).length == ($('#inputPhoneNumber').val()).length)
					&&
					($('#inputPhoneNumber').val().length >= 9)
					&&
					($('#inputPhoneNumber').val().length <= 12)
				)
			) {
				$('.error-inputPhoneNumber').text(ERROR_INVALID_PHONE).slideDown();
				status = false;
			} else {
				$('.error-inputPhoneNumber').slideUp();
			}

			if (!($('#inputAgreement:checked').length)) {
				$('.error-inputAgreement').text(ERROR_FILL).slideDown();
				status = false;
			} else {
				$('.error-inputAgreement').slideUp();
			}

			if (!(radios.filter(':checked').length == 1)) {
				$('.error-inputCurrentCustomer').text(ERROR_FILL).slideDown();
				status = false;
			} else {
				$('.error-inputCurrentCustomer').slideUp();
			}

			return status;
		}


		function showInputs() {
			answer = radios.filter(':checked').attr('value');
			resetSelects();
			if (answer == '1') {
				cities.slideUp();
				provinces.slideDown();
			} else if (answer == '0') {
// 				cities.slideDown();
// 				provinces.slideUp();
				cities.slideUp();
				provinces.slideDown();
			}
		}

		radios.on('change', function () {
			showInputs();
		});
		showInputs();


		$('.btn-send-form').unbind('click').bind('click', function (e) {
			var ithis = this;
			e.preventDefault();
			if (!checkInputs()) {
			} else {
				var wclForm = $('.wcl').length;
				var wcl1form = $(".wcl1").length;
				var wcl2form = $(".wcl-wcl2").length;
				var wcl3form = $(".wcl-wcl3").length;
				var wcl4form = $('.wcl-wcl4').length;
				var wcl5form = $('.wcl-wcl5').length;
				var wcl6form = $('.wcl-wcl6').length;
				var wcl7form = $('.wcl-wcl7').length;
				var wcl8form = $('.wcl-wcl8').length;
				var wcl9form = $('.wcl-wcl9').length;
				var wcl10form = $('.wcl-wcl10').length;
				var wcl11form = $('.wcl-wcl11').length;
				var wcl12form = $('.wcl-wcl12').length;
				var wcl13form = $('.wcl-wcl13').length;
				var wcl14form = $('.wcl-wcl14').length;
				var wcl_1607 = $('.wcl_1607').length;
				var wcl_onepercent = $('.wcl_onepercent').length;
				var alreadyCustomer = $(".wcl-already-customer").length;
				var homepage = $('.homepage-indicator').length;
				if(wcl1form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl1');
					_hmt.push(['_trackEvent','cta','send','form_wcl1']);
					//_czc.push(['_trackEvent','cta','send','form_wcl1']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl1');
					//console.log('wcl1');
				} else if (wcl2form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl2');
					_hmt.push(['_trackEvent','cta','send','form_wcl2']);
					//_czc.push(['_trackEvent','cta','send','form_wcl2']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl2');
					//console.log('wcl2');
				} else if (wcl3form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl3');
					_hmt.push(['_trackEvent','cta','send','form_wcl3']);
					//_czc.push(['_trackEvent','cta','send','form_wcl3']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl3');
					//console.log('wcl3');
				} else if (wcl4form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl4');
					_hmt.push(['_trackEvent','cta','send','form_wcl4']);
					//_czc.push(['_trackEvent','cta','send','form_wcl4']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl4');
					//console.log('wcl4');
				} else if (wcl5form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl5');
					_hmt.push(['_trackEvent','cta','send','form_wcl5']);
					//_czc.push(['_trackEvent','cta','send','form_wcl5']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl5');
					//console.log('wcl5');
				} else if (wcl6form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl6');
					_hmt.push(['_trackEvent','cta','send','form_wcl6']);
					//_czc.push(['_trackEvent','cta','send','form_wcl6']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl6');
					//console.log('wcl6');
				} else if (wcl7form && wclForm) {
					stm_clicki('send','event','cta','send','form_wcl7');
					_hmt.push(['_trackEvent','cta','send','form_wcl7']);
					//_czc.push(['_trackEvent','cta','send','form_wcl7']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl7');
					//console.log('wcl7');
        		} else if (wcl8form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl8');
        			_hmt.push(['_trackEvent','cta','send','form_wcl8']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl8']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl8');
        			//console.log('wcl8');
        		} else if (wcl9form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl9');
        			_hmt.push(['_trackEvent','cta','send','form_wcl9']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl9']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl9');
        			//console.log('wcl9');
        		} else if (wcl10form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl10');
        			_hmt.push(['_trackEvent','cta','send','form_wcl10']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl10']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl10');
        			//console.log('wcl10');
        		} else if (wcl11form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl11');
        			_hmt.push(['_trackEvent','cta','send','form_wcl11']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl12']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl12');
        			//console.log('wcl11');
        		} else if (wcl12form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl12');
        			_hmt.push(['_trackEvent','cta','send','form_wcl12']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl12']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl12');
        			//console.log('wcl12');
        		} else if (wcl13form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl13');
        			_hmt.push(['_trackEvent','cta','send','form_wcl13']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl13']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl13');
        			//console.log('wcl13');
				} else if (wcl14form && wclForm) {
            		stm_clicki('send','event','cta','send','form_wcl14');
        			_hmt.push(['_trackEvent','cta','send','form_wcl14']);
        			//_czc.push(['_trackEvent','cta','send','form_wcl14']);
        			//ga('send', 'event', 'cta', 'send', 'form_wcl14');
        			//console.log('wcl13');
				} else if (wclForm || homepage) {
					stm_clicki('send','event','cta','send','form_wcl');
					_hmt.push(['_trackEvent','cta','send','form_wcl']);
					//_czc.push(['_trackEvent','cta','send','form_wcl']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl');
					//console.log('wcl');
				} else if (wcl_1607) {
					stm_clicki('send','event','cta','send','form_wcl_1607');
					_hmt.push(['_trackEvent','cta','send','form_wcl_1607']);
					//_czc.push(['_trackEvent','cta','send','form_wcl']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl');
					//console.log('wcl');
				} else if (wcl_onepercent) {
					stm_clicki('send','event','cta','send','form_wcl_onepercent');
					_hmt.push(['_trackEvent','cta','send','form_wcl_onepercent']);
					//_czc.push(['_trackEvent','cta','send','form_wcl']);
					//ga('send', 'event', 'cta', 'send', 'form_wcl');
					//console.log('wcl');
				} else {
					stm_clicki('send','event','cta','send','form_posl');
					_hmt.push(['_trackEvent','cta','send','form_posl']);
					//_czc.push(['_trackEvent','cta','send','form_posl']);
					//ga('send', 'event', 'cta', 'send', 'form_posl');
					//console.log('posl');
				}
				if(alreadyCustomer) {
					var radios = $('.wcl-radio');
					var answer = radios.filter(':checked').attr('value');
					if (answer == '1') {
					    stm_clicki('send','event','cta','send','customer');
						_hmt.push(['_trackEvent','cta','send','customer']);
						//_czc.push(['_trackEvent','cta','send','customer']);
						//ga('send', 'event', 'cta', 'send', 'customer');
					} else if (answer == '0') {
					    stm_clicki('send','event','cta','send','noncustomer');
						_hmt.push(['_trackEvent','cta','send','noncustomer']);
						//_czc.push(['_trackEvent','cta','send','noncustomer']);
						//ga('send', 'event', 'cta', 'send', 'noncustomer');
					}
					var _mvq = window._mvq || [];window._mvq = _mvq;
					_mvq.push(['$setAccount', 'm-245511-0']);
					_mvq.push(['$setGeneral', 'registered', '', '', Math.random()]);
					_mvq.push(['$logConversion']);
				}
				$.ajax({
					async: false,
					data: $('.btn-send-form').closest("form").serialize(),
					dataType: "html",
					label: "",
					success: function (data, textStatus) {
						$(".ajaxLeaveForm").html(data);
						formObject.reload();
					},
					type: "post",
					<?php
						if($locale == 'en') {
					?>
					url: "\/en\/leaveContact\/wcl"
					<?php
					} else {
					?>
					url: "\/leaveContact\/wcl"
					<?php
					}
					?>
				});
			}
		});
	});
</script>

<?php
$this->end();
?>
