<?php
//debug($pageData);die;
	//$class = "wcl-wcl2";
	switch ($pageData['url']) {
		case "wcl1":
			$class = " wcl1";
			break;
		case "wcl2":
			$class = "wcl-wcl2 wcl2";
			break;
		case "wcl3":
			$class = "wcl-wcl3 wcl3";
			break;
		case "wcl4":
			$class = "wcl-wcl4 wcl4";
			break;
		case "wcl5":
			$class = "wcl-wcl5 wcl5";
			break;
		case "wcl6":
			$class = "wcl-wcl6 wcl6";
			break;
		case "wcl7":
			$class = "wcl-wcl7 wcl7";
			break;
		case "wcl8":
			$class = "wcl-wcl8 wcl8";
			break;
		case "wcl9":
			$class = "wcl-wcl9 wcl9";
			break;
		case "wcl10":
			$class = "wcl-wcl10 wcl10";
			break;
		case "wcl11":
			$class = "wcl-wcl11 wcl11";
			break;
		case "wcl12":
			$class = "wcl-wcl12 wcl12";
			break;
		case "wcl13":
			$class = "wcl-wcl13 wcl13";
			break;
	}
	if(!isset($class)) {
		$class = '';
	} else {
?>
<style>
		footer .footer-content {
			display: none;
		}
		.wcl > .cta-wrapper .scroll-to-form {
			display: none;
		}
		
		.navbar .loans-wrapper .link-wrapper, .navbar .text-phone, ul.langs.pull-right, ul.links.pull-left {
			display: none;
		}

		.page-logo:after{
			content: "中国领先消费金融品牌";
			position: absolute;
			left: 120px;
			top: 20px;
			white-space: nowrap;
			color: #4d4d4d;

		}
		@media(max-width: 1199px) {
			.page-logo:after{
				left: 90px;
				top: 10px;

			}
		}
		.nav-wrapper {
			position: relative;
		}
		.nav-wrapper:after {
			content: "";
			height: 60px;
			width: 60px;
			background: url("../img/nav-tag-zh.png") no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: absolute;
			right: 15px;
			top: -65px;
		}
		.background-holder:after {
			content: "";
			height: 35px;
			width: 35px;
			background: url("../img/nav-tag-zh.png") no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: absolute;
			right: 15px;
			top: 10px;
		}
		.navbar .nav-main {
			background: #fff;
			border: none;
			-webkit-box-shadow: none;
			box-shadow: none;
		}
		.navbar .loans-wrapper {
			height: 0;
			background: none;
			position: relative;
		}
		.navbar .loans-wrapper .nav-tag {
			position: absolute;
			right: 0;
			left: auto;
			margin: 0 auto;
			top: -69px;
			width: 62px;
			display: none;
		}

		.result strong {
			display: none; 
		}
		.result span {
			position: relative;
			padding-right: 31px;
		}
		.result span:after {
			content: "元";
			position: absolute;
			right: 0;
			top: 0;
			color: #ff0000;
			font-size: 27px;
			line-height: 33px;
		}
		body {
		  padding-top: 0;
		}
		.navbar {
			position: static;
		}
		.homepage-leaveForm  .hc-form:after {
			content:"";
			height: 60px;
			width: 60px;
			background: url("../img/nav-tag-zh.png") no-repeat;
			-webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
			position: absolute;
			right: 15px;
			top: 15px;
		}

		@media (max-width: 991px) {
			body {
			  padding-top: 0;
			}
			.navbar .nav-main .navbar-toggle, .navbar .nav-main #call-us {
				display: none;
			}

			.page-logo:after {
				left: 63px;
				top: 6px;
				font-size: 14px;
			}

			.homepage-leaveForm  .hc-form:after {
				height: 45px;
				width: 45px;
			}
			.navbar .loans-wrapper {
				border: none;
				top: 0px;
				z-index: 60!important;
				-webkit-transform: none!important;
				-moz-transform:  none!important;
				-o-transform:  none!important;
				-ms-transform:  none!important;
				transform:  none!important;
			}
			.navbar .loans-wrapper .nav-tag {
				position: absolute;
				right: 5px;
				left: auto;
				margin: 0 auto;
				top: -44px;
				width: 40px;
			}
		}
</style>
<?php
	};
?>
<section class="wcl wcl-section-new wcl-new <?php echo $class; ?>">

	<?php echo $this->Element('wcl-heading-a'); ?>

	<div class="container">
		<?php echo $this->Element('calculator-wcl-a'); ?>
	</div>
	
	
	<?php 
	   // echo $this->element('long-requirement-new');
	?>
	
	<?php 
		//echo $this->element('impatient-people-new)';
		echo $this->element('impatient-people-new-a', array('class' => 'wcl2'));
		//echo $this->Element('wcl-temper');
	?>

	<?php echo $this->Element('box-wcl', array('class' => 'centered-box', 'btn' => 'hidden')); ?>
	<div class="ajaxLeaveForm">
		<?php echo $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu','class' => 'homepage-leaveForm wcloan')); ?>
	</div>

<?php /*
	<div class="ajaxLeaveForm">
		<?php echo $this->element('ContactForms/contact-form',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>

*/ ?>
</section>
<script type="text/javascript">
	var calcData = <?php echo $csvWCL; ?>;
	//var monthSliderInitialStep = 3;
	//var amountSliderInitialStep = 3;
	var foo = null;
</script>

