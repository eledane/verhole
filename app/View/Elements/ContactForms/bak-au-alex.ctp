<?php
/**
 * 涉及改动位置：
 * 1. 新增文件: app/View/Elements/ContactForms/ask-users.ctp
 * 2. 改动文件：leaveFormGeneral.ctp
 *    1) formMenu 4行
 *    2) <div class=" <?php echo $formClass; ?>" style="<?php echo $form_menu_style; ?>">
 *    3) <div class="col-sm-6" id="rowhigh1">
 * 3. 改动文件：home.ctp
 *    $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu',
 * 4. 改动文件：firstLoan.ctp
 *    echo $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu',
 * 5. 改动文件：walkInCashLoan.ctp
 *    echo $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu',
 * 6. 新增目录：app/webroot/img/ask-users目录
 *    arrows.png
 *    ask-users-bg-pc.jpg
 */
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

$leadChannelCode = !empty($_GET['UTM_Source']) ? $_GET['UTM_Source'] : 'DIRECT';
?>

<?php
$this->extend('/Elements/ContactForms/leaveFormGeneral');
$this->assign('form_menu_style', "display:none");
$this->start('formMenu');
?>
<div class=<?php echo $class_menu ?> >
<div class="container">
	<div class="main-forms">
		<div class="main-contents">
			<div class="main-title">亲，您曾经使用过捷信的商品分期或现金贷款服务吗？</div>
			<div class="main-btns clearfixs">
				<ul>
					<li class="wcl-radio-menu">是，我使用过</li>
					<li><a href="http://www.moiapps.com/alex.php">否，我没有使用过</a></li>
				</ul>
			</div>
			<div class="main-des">
				<ul id="navlist">
					<li class="list1"></li>
					<li class="list2"><a href=""><span>捷现贷产品仅限从未使用过捷信产品的新客户申请</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<?php
$this->end();
?>

<?php
$this->start('leaveFormFields');
$this->assign('class', !empty($class) ? $class : null);
$this->assign('contactType', Configure::read('Contact.wcl'));
$this->assign('leaveFormSubmitUrl', $this->Html->getAbsoluteLangLink('/leaveContact/wcl'));
$this->assign('formCreate', $this->Form->create('Contact', array('url' => $this->Html->getAbsoluteLangLink('/leaveContact/wcl'), 'class' => 'hc-form')));
if (!empty($sectionNameContactForm)) {
	$this->assign('sectionNameContactForm', $sectionNameContactForm);
}
?>
<div class="row contact-wcl-form">
	<ul id="navlist">
		<li class="list1"></li>
		<li class="list2"><a href=""><span>留下联系方式</span></a></li>
	</ul>
	<!-- <div class="col-sm-12 mb20 form-title"> -->
		<!-- <h2><?php echo $this->StaticText->getStripped('Leave contact form - Main title'); ?></h2> -->

	<?php echo "<script> var region_json = jQuery.parseJSON('" . $regions_json . "'); </script>"; ?>
	<!-- </div> -->

</div>
<!--
22222
<?php
var_dump($_GET);
?>
-->
<div class="col-sm-6 col-sm-12border">
	<div class="row" id="rowhigh">

		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.name', array('id' => 'inputFullName', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My full name') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Name'), 'div' => 'form-group')); ?>
			<div class="custom_error-message error-message--out-of-form-group error-inputFullName" style="display: none;">Please, fill in this field.</div>
		</div>

		<!-- TODO: fix phone placeholder to Phone (1st capital letter) -->
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.phone', array('id' => 'inputPhoneNumber', 'class' => 'form-control', 'label' => $this->StaticText->getStripped('Leave contact form - My phone number') . '&nbsp;*', 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Phone'), 'div' => 'form-group')); ?>
			<div class="custom_error-message error-message--out-of-form-group error-inputPhoneNumber" style="display: none;">Please, fill in this field.</div>
		</div>

		<div class="col-sm-12">

			<div class="row" style="display:none">
				<div class="col-sm-12 wcl-already-customer mb20">
					<div class="wcl-question">
						<?php echo $this->staticText->getStripped('Leave contact form - Current customer'); ?>
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
								),
								'value' => 1,
							)
						);
						?>
						<div class="custom_error-message error-message--out-of-form-group error-inputCurrentCustomer" style="display: none;"><?php echo _('can not be empty') ?></div>
					</div>
				</div>
			</div>






			<!-- No -->
			<div class="leave-form-city" style="display:none">
				<p class="wcl-disclaimer"><?php echo $this->staticText->getStripped('WCL - Form Disclaimer'); ?></p>

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
			</div>







			<!-- Yes -->
			<div class="leave-form-provinces" style="">
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

	</div>
</div>
<div class="col-sm-6" >
	<div id="rowhigh2">
	<div class="row sm-p-top-0">
		<div class="col-sm-12">
			<?php echo $this->Form->input('Contact.client_comment', array('id' => 'inputClientComment', 'style'=>'height:67px', 'type' => 'textarea', 'class' => 'form-control textarea-big', 'maxlength' => '1000', 'label' => $this->StaticText->getStripped('Leave contact form - Client comment'), 'placeholder' => $this->StaticText->getStripped('Leave contact form - placeholder - Client comment'), 'div' => 'form-group')); ?>
		</div>
	</div>
	<!-- TODO: Change text to I agree to Data Policy -->
	<div class="row mb200">
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

		$('.main-btns ul li a').click(function(e) {
		   var $this = $(this);
		   var data = '<?php echo $leadChannelCode; ?>';
		   e.preventDefault();
		   $.post('https://api-uat.homecredit.cn/wclgateway/landingpage#n', {'leadChannelCode': data}, function() {
		       window.location = $this.attr('href');
		   });
		});



	function load_submit()
	{
		var utm_name = getQueryVariable("UTM_Source");
		if (utm_name == false || utm_name.length == 0) {
			utm_name = "DIRECT";
		}

		document.getElementById("leadRawData").value = utm_name;

		console.log(utm_name);

		document.send_utm.submit();
		// window.location.href="http://www.zmkorean.com";
	}

	function getQueryVariable(var_name)
	{
		var query = window.location.search.substring(1);
		var vars = query.split("&");
		for (var i=0;i<vars.length;i++) {
			var pair = vars[i].split("=");
			if(pair[0] == var_name){
				return pair[1];
			}
		}
		return(false);
	}

	$(document).ready(function () {
		var answer = null;
		var radios = $('.wcl-radio');
		var radios_menu = $('.wcl-radio-menu');
		var cities = $('.leave-form-city');
		var provinces = $('.leave-form-provinces');


		function resetSelects() {
			cities.slideUp();
			provinces.slideDown();

			$('.cities').slideDown();

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

			// answer = '1';
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

			// if (!(radios.filter(':checked').length == 1)) {
			//if (false) {
			//	$('.error-inputCurrentCustomer').text(ERROR_FILL).slideDown();
			//	status = false;
			//} else {
				$('.error-inputCurrentCustomer').slideUp();
			//}

			return status;
		}


		function showInputs() {
			answer = radios.filter(':checked').attr('value');
			resetSelects();
			// answer = '1';
			if (answer == '1') {
				cities.slideUp();
				provinces.slideDown();
			} else if (answer == '0') {
				cities.slideDown();
				provinces.slideUp();
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
					// answer = '1';
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

		function resetSelectsMenu() {
			$('#inputProvinceName').val('');
			$('#selectProvinceName').val('');

			$('#inputCityName').val('');
			$('#inputCity').val('');

			$('#inputCityName option:not(:first-child)').remove();
			$('#inputCity option:not(:first-child)').remove('');
		}

		radios_menu.on('click', function () {
			resetSelectsMenu();
			$(".homepage-leaveForm").show();
			$(".homepage-menu").hide();
			//showInputs();
		});

		$(".ttip").on("mouseenter",function(){
			//console.log("mouseenter");

			$(this).siblings("span").css("display","block");
		}).on("mouseleave",function(){

			//console.log("mouseleave");
			$(this).siblings("span").css("display","none");
		})

	});
</script>

<style>
	.homepage-menu{
		width:100%;
	}

	.homepage-menu ul, .homepage-menu li, .homepage-leaveForm ul, .homepage-leaveForm li{
		margin:0;
		padding:0
	}
	.homepage-leaveForm li, .homepage-menu li {
		list-style: none outside none;
	}
	.clearfixs:after { content: "."; display: block; height: 0; clear: both;}
	.clearfixs { display: inline-block; }
	* html .clearfixs { height: 1%; }
	.clearfixs { display: block; }
	.col-sm-12border{
		border-right:1px double #ffffff;
	}

	.homepage-menu ul{padding:0; list-style-type:none;width:94%;margin:0 auto}
	
	ul#navlist{padding:0;width:94%;margin:0 auto; font:20px;padding-bottom:13px;}
	ul#navlist li span{ background:red;}
	ul#navlist li{height: 30px;width:100%;font-size:20px;color:#fff}
	ul#navlist .list1{border-bottom: 1px solid #fff;width: 100%;margin-bottom: -15px;}
	#navlist a{display: block;color: #666;text-decoration: none;padding:0px 5px;width: 100%;text-align: center;color:#FFF}
	#navlist a span{
		padding:0 20px 0 20px;
		color:#FFF;
	}

	.main-forms{
		background: #f5f5f5;
		-webkit-border-radius: 6px;
		-webkit-background-clip: padding-box;
		-moz-border-radius: 6px;
		-moz-background-clip: padding;
		border-radius: 6px;
		background-clip: padding-box;
		padding: 15px 0;
		color: #fff;
		margin: 0;
		position: relative;
		border:1px solid #d8d8d8;
		height:340px;
		background:url("../img/ask-users/ask-users-bg-pc.jpg") no-repeat 50% 50%;
	}

	.main-forms:before {
		content: '';
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 6px 20px 6px;
		border-color: transparent;
		top: -8px;
		position: absolute;
		left: 50%;
		-webkit-transform: translateX(-50%);
		-moz-transform: translateX(-50%);
		-o-transform: translateX(-50%);
		-ms-transform: translateX(-50%);
		transform: translateX(-50%);
		background:url('../img/ask-users/arrows.png') 50% 0% no-repeat;
	}

	.main-contents{
		width:100%;
		padding-top:70px;
	}

	.main-title{
                margin: 0 0 2% 0px;
		font-size:20px;
		font-weight:bold;
		color:#474747;
		text-align:center;
	}


	.main-btns{
		width:50%;
		margin:0 auto;
	}

	.main-btns ul li{
		float:left;
		width:36%;
		margin:5% 0 5% 10%;
		height:36px;
		background:#FE0000;
		color:#fff;
		font-size:18px;
		text-align:center;
		border-radius:5px;
		line-height:36px;
		font-weight:normal;
		cursor:pointer;
	}

        .main-des {
            margin: 2% 0 0 0;
        }
	.main-des ul{padding:0; list-style-type:none;width:94%;margin:0 auto}
	.main-des ul#navlist{font:20px;padding-bottom:13px;}
	.main-des ul#navlist li span{ background:#F5F5F5}
	.main-des ul#navlist li{height: 20px;width:100%;font-size:14px;color:#fff}
	.main-des ul#navlist .list1{border-bottom: 1px solid #cfcfcf;width: 100%;margin-bottom: -10px;}
	.main-des #navlist a{display: block;color: #666;text-decoration: none;padding:0px 5px;width: 100%;text-align: center;color:#FFF;text-align:center;}
	.main-des #navlist a span{
		padding:5px 15px 0 15px;
		color:#464646;
		font-weight:bold;
		text-align:center;
	}


	#rowhigh,#rowhigh2{
		width:70%;
		margin:0 auto;
	}

	#rowhigh1{
		width:100%;
		margin:0 auto;
		padding:0px;
	}

	.mb200{
		margin:60px 0px 65px 0px;
	}

	@media only screen and (min-width:768px) and (max-width:1024px){

		.col-sm-12border{
			border-right:0px double #ffffff;
		}

		.main-des ul#navlist .list1{border-bottom:0px solid #cfcfcf;width: 100%;margin-bottom: -15px;}
		ul#navlist .list1{border-bottom:0px solid #cfcfcf;width: 100%;margin-bottom: -15px;}

		.main-btns ul li{
			float:left;
			width:44%;
			margin:5% 3% 5% 3%;
			height:36px;
			background:#FE0000;
			color:#fff;
			font-size:18px;
			text-align:center;
			border-radius:5px;
			line-height:36px;
			font-weight:normal;
			cursor:pointer;
		}
	}


	@media only screen and (min-width:320px) and (max-width:768px){

		.col-sm-12border{
			border-right:0px double #ffffff;
		}

		.main-des ul#navlist .list1{border-bottom:0px solid #cfcfcf;width: 100%;margin-bottom: -15px;}
		ul#navlist .list1{border-bottom:0px solid #cfcfcf;width: 100%;margin-bottom: -15px;}

		.main-title{
			margin:0 10% 0 10%;
                        font-size:18px;
			font-weight:normal;
			color:#474747;
			text-align:center;
		}

		.main-btns{
			width:70%;
			 margin:0 auto;
		}
		.main-btns ul li{
			float:left;
			width:100%;
			margin:10% 0 0 0;
			height:32px;
			background:#FE0000;
			color:#fff;
			font-size:14px;
			text-align:center;
			border-radius:5px;
			line-height:32px;
			font-weight:normal;
			cursor:pointer;
		}
                
		div .main-des{
			margin:3% 20% 0 20%;
			text-align:center;
		}
                
		.main-des ul#navlist{font:14px;padding-bottom:13px;}


		.main-des ul#navlist li{
                      height:30px;width:100%;font-size:14px;color:#fff;
                }


		.main-contents{
			width:100%;
			padding-top:50px;
		}



		#rowhigh{
			width:100%;
			margin:0 auto;
		}

		#rowhigh2{
			width:90%;
			margin:0 auto;
		}

		#rowhigh1{
			width:100%;
			margin:0 auto;
		}

		.mb200{
			margin:40px 0px 40px -14px;
		}

		.main-des #navlist a span{
			padding:0px;
			color:#474747;
			font-weight:normal;
			text-align:center;
		}
	}
	.fix:before,.fix:after{display:table;content:" ";clear:both}
</style>
<?php
$this->end();
?>
