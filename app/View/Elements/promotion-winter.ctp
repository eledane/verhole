<link rel="stylesheet" href="<?php echo $this->webroot; ?>promotions/op/css/style.css">
<?php

global $landing_translate, $landing_locale;
//debug($pageData);die;
$landing_translate = array(
	'eng' => array(
		'from_now' => "0 DOWN PAYMENT  0 RATES <br >BRING YOUR SWEET DREAMS",
        	'bg' => "en",
		'laptops' => "Laptops",
		'fashion_stuff' => "Fashion stuff",
		'smartphones' => "Smartphones",
		'gadgets' => "Gadgets",
		'motorcycles' => "Motorcycles",

		'believe' => "Believe it or not, the monthly payment costs you a dinner only and <strong>you can get your dreamed gadget immediately!</strong>",
		'loan_amount' => "Loan amount",
		'dp_amount' => "DP amount (RMB Yuan)",
		'rates' => "Rates",
		'tenure' => "Tenure",
        	'video' => "http://player.youku.com/embed/XMTM5NDY2MzU0NA==",
		'application_process' => "Application process",
		'relax' => "Relax, you have to provide us only 2-3 pieces of the following simple verfication documents!",
		'ID Card' => 'ID Card',
		'ID+Social' => "ID+social security card",
		'ID+Bank' => "ID+Bank card+Bank slips",
		'ID+Driving' => "ID+Driving license ",
		'ID+HuKou' => "ID+HuKou register",
		'ID+insurance' => "ID+Medicare card",
		'ID+Work card' => "ID+Work card",

		'bing' => "Bing! Only 15 minutes, your wish comes true!", //todo: use it

		'attentions' => "Attentions:",
		'attention - 1' => "* 0 minimum down payment, 0 rates(not include flexibility package& customer guarantee plan),in 6 and 8 months repayment;",
		'attention - 2' => "* Specific terms are subject to the loan contract between lenders and HCC.",

		'just_give' => "Just give us a call",
		'expirationDate' => "*&nbsp;&nbsp;6 tenures promotion is only for Suning, Dixintong POS and all POS in Fujian province, maximum loan amount up to 2,000RMB, maximum down payment increase to 500RMB, other POS maximum loan amount is 1,000RMB, maximum down payment is 200RMB.Effective date: Feb 11st, 2017 - Mar 31st, 2017.",
		'expirationDate1' => "*&nbsp;&nbsp;8 tenures promotion is only for Dixintong, Sanjiu maximum loan amount up to 5,000RMB, maximum down payment increase to 2,000RMB, other POS maximum loan amount is 3,000RMB, maximum down payment is 1,000RMB. Effective date: Mar 10st, 2017 - Apr 10th, 2017.",
		'expirationDate2' => "*&nbsp;&nbsp;Please consult the POS sales for further details.",
	),

	'zho' => array(
		'from_now' => " 0首付，0费率，6期8期随心选<br>8期产品在迪信通, 叁玖合作门店<br>最高贷款额5,000元",
	        'bg' => "zh",
		'laptops' => "电脑",
		'fashion_stuff' => "时尚消费品",
		'smartphones' => "手机",
		'gadgets' => "数码产品",
		'motorcycles' => "摩托车",
        	'video' => "http://player.youku.com/embed/XMTM5NDY2NTQxNg==",
		'believe' => "每月只花一顿大餐的钱，给你一个渴望成真的机会！ 还不赶紧往下看？",
		'loan_amount' => "贷款金额范围",
		'dp_amount' => "首付（元）",
		'rates' => "费率",
		'tenure' => "期数",

		'application_process' => "办理流程",
		'relax' => "放轻松，你只需要提供以下2-3项简单证明文件！",
		'ID Card' => '身份证',
		'ID+Social' => "身份证+社保卡",
		'ID+Bank' => "身份证+银行卡+交易回单",
		'ID+Driving' => "身份证+驾驶证",
		'ID+HuKou' => "身份证+户口本",
		'ID+insurance' => "身份证+医保卡",
		'ID+Work card' => "身份证+工卡",

		'bing' => "15分钟，心愿到手！", //todo: use it

		'attentions' => "请注意：",
		'attention - 1' => "* 最低首付为0，费率为0（选择灵活还款服务包和客户保障计划除外），期数为6期、8期；",
		'attention - 2' => "* 具体条款以借款人与捷信公司签订的消费信贷合同约定为准。",

		'just_give' => "快来联系我们吧",
		'expirationDate' => "*&nbsp;&nbsp;&nbsp;&nbsp;6期产品仅苏宁，迪信通合作门店及福建省所有门店最高贷款升级至2,000元，最高首付升级至500元，其他门店最高贷款为1,000元，最高首付为200元.<br>活动日期2017年2月11日-2017年3月31日.",
		'expirationDate1' => "*&nbsp;&nbsp;&nbsp;&nbsp;8期产品仅迪信通, 叁玖合作门店最高贷款升级至5,000元，最高首付升级至2,000元，其他门店最高贷款为3,000元，最高首付为1,000元.<br>活动日期2017年3月10日-2017年4月10日.",
		'expirationDate2' => "*&nbsp;&nbsp;&nbsp;&nbsp;更多信息请咨询门店销售.",
	)
);

$landing_locale = $pageData['locale'];

function translate($key, $print = true) {
	global $landing_locale, $landing_translate;

	if (isset($landing_translate[$landing_locale][$key])) {
		$text = $landing_translate[$landing_locale][$key];
	} else {
		$text = $key;
	}

	if ($print)
		print $text;
	else
		return $text;
}

$promotion = $pageData['modulesData']['promotion']['Promotion'];
if (isset($pageData['modulesData']['promotion']['CsvFile'])) {
	$csv = $pageData['modulesData']['promotion']['CsvFile'];
}
$promotionDate = strtotime($promotion['end']);
$currentDate = strtotime(date("D M j G:i:s T Y"));
if ($currentDate < $promotionDate) {

	// images for detail of promotion
	$img = $this->Media->getFirstImagePath($promotion['moduleMedia']);
	if ($pageData['locale'] === 'zho') {
		$desktop = $this->Media->getImagePathByName($promotion['moduleMedia'], 'desktop-zh');
		$mobile = $this->Media->getImagePathByName($promotion['moduleMedia'], 'mobile-zh');
	} else {
		$desktop = $this->Media->getImagePathByName($promotion['moduleMedia'], 'desktop-en');
		$mobile = $this->Media->getImagePathByName($promotion['moduleMedia'], 'mobile-en');
	}
	if (empty($desktop)) {
		$desktop = $img;
	}
	if (empty($mobile)) {
		$mobile = $img;
	}
	?>
	<section class="promotion-detail">
        <div class="promotion-bg-2 <?php translate('bg'); ?>">
        <div class="header promotion-bg winter-promotion-bg text-center <?php translate('bg'); ?> " data-mobile="<?php echo $mobile; ?>">

            <div align="center">
                <div class="embed-responsive embed-responsive-4by3" style="max-width:460px; max-height:300px">
                  <!--  <iframe class="embed-responsive-item" style="max-width:460px; max-height:300px" height="300" width="460" src="<?php translate('video'); ?>" frameborder=0 allowfullscreen></iframe> -->
                </div>
            </div>
            <!--<div class="time-wrapper">
				<?php
				echo $this->Html->link(
					'<span>' . $this->StaticText->getStripped('promotions-link-detail') . '</span>',
					'#',
					array(
						'title' => '',
						'class' => 'btn btn-danger',
						'escape' => false
					)
				);
				?>

			</div>-->
           </div>
		</div>
	</section>


	<div class="promotionWinter">
		<h1 class="promotionWinter__header"><?php translate('from_now');?></h1>

		<div class="tiles">
			<div class="swiper-wrapper">
				<div class="swiper-slide tiles__item">
					<div class="tiles__box">
						<div class="bg"></div>
						<span class="tiles__description"><?php translate('laptops'); ?></span>
					</div>
					<div class="tiles__image">
						<div class="tiles__image__wrapper">
							<div class="tiles__image__table">
								<div class="tiles__image__center">
									<img src="/img/promotionWinter/tiles_laptops.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide tiles__item">
					<div class="tiles__box">
						<div class="bg"></div>
						<span class="tiles__description"><?php translate('fashion_stuff'); ?></span>
					</div>
					<div class="tiles__image">
						<div class="tiles__image__wrapper">
							<div class="tiles__image__table">
								<div class="tiles__image__center">
									<img src="/img/promotionWinter/tiles_fashion_stuff.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide tiles__item">
					<div class="tiles__box">
						<div class="bg"></div>
						<span class="tiles__description"><?php translate('smartphones'); ?></span>
					</div>
					<div class="tiles__image">
						<div class="tiles__image__wrapper">
							<div class="tiles__image__table">
								<div class="tiles__image__center">
									<img src="/img/promotionWinter/tiles_smartphones.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide tiles__item">
					<div class="tiles__box">
						<div class="bg"></div>
						<span class="tiles__description"><?php translate('gadgets'); ?></span>
					</div>
					<div class="tiles__image">
						<div class="tiles__image__wrapper">
							<div class="tiles__image__table">
								<div class="tiles__image__center">
									<img src="/img/promotionWinter/tiles_gadgets.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide tiles__item">
					<div class="tiles__box">
						<div class="bg"></div>
						<span class="tiles__description"><?php translate('motorcycles'); ?></span>
					</div>
					<div class="tiles__image">
						<div class="tiles__image__wrapper">
							<div class="tiles__image__table">
								<div class="tiles__image__center">
									<img src="/img/promotionWinter/tiles_motorcycles.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination tiles__pagination"></div>
		</div>

			<div class="onepercentv2 onepercentv3">
			<div class="section-lc">
				<div class="wp">
					<div class="cta" style="width: 72%; float: none">
						<div class="cta-box">
							<h4>马上申请贷款吧！</h4>
							<span>联系我们</span>
							<strong>400 027 1265</strong>
							<span>或者</span>
							<a href="javascript:;" class="scroll-to-form">留下联络方式</a>
							<p>我们将会联系您</p>
						</div>
					</div>
				</div>
			</div>
			</div>

	</div>

	<hr class="grayLine">

	<div class="promotionWinter">

		<div class="statistics">
			<div class="statistics__imageWrapper">
				<img src="/img/promotionWinter/statistics_image.png" alt="Statistics" class="statistics__image hidden-xs"/>
				<img src="/img/promotionWinter/statistics_image_xs.png" alt="Statistics" class="statistics__image visible-xs"/>
				<div class="statistics__imageBubble">
					<?php translate('believe'); ?>
				</div>
			</div>

			<div class="statistics__table">
				<div class="statistics__table__cell">
					<div class="statistics__table__image">
						<div class="statistics__table__imageCenter">
							<img src="/img/promotionWinter/statistics_bag.png" alt="">
						</div>
					</div>
					<div class="statistics__table__description">
						<div class="statistics__table__descriptionCenter">
							<?php translate('loan_amount'); ?>
						</div>
					</div>
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							¥100 - ¥1,000
						</div>
					</div>
					
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							¥100 - ¥5,000
						</div>
					</div>
				</div>

				<div class="statistics__table__cell">
					<div class="statistics__table__image">
						<div class="statistics__table__imageCenter">
							<img src="/img/promotionWinter/statistics_coins.png" alt="">
						</div>
					</div>
					<div class="statistics__table__description">
						<div class="statistics__table__descriptionCenter">
							<?php translate('dp_amount'); ?>
						</div>
					</div>
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							¥0 - ¥200
						</div>
					</div>

					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							¥0 - ¥2,000
						</div>
					</div>

				</div>
                
                

				<div class="statistics__table__cell">
					<div class="statistics__table__image">
						<div class="statistics__table__imageCenter">
							<img src="/img/promotionWinter/statistics_statistic.png" alt="" class="autoWidth">
						</div>
					</div>
					<div class="statistics__table__description">
						<div class="statistics__table__descriptionCenter">
							<?php translate('rates'); ?>
						</div>
					</div>
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							0&nbsp;%
						</div>
					</div>
					
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							0&nbsp;%
						</div>
					</div>

				</div>

				<div class="statistics__table__cell">
					<div class="statistics__table__image">
						<div class="statistics__table__imageCenter">
							<img src="/img/promotionWinter/statistics_calendar.png" alt="">
						</div>
					</div>
					<div class="statistics__table__description">
						<div class="statistics__table__descriptionCenter">
							<?php translate('tenure'); ?>
						</div>
					</div>
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							6
						</div>
					</div>
					<div class="statistics__table__value">
						<div class="statistics__table__valueCenter">
							8
						</div>
					</div>


				</div>
			</div>
			<div style="font-size:12px; color:#333; line-height:27px; margin-top:15px;">
				<?php translate('expirationDate1'); ?><br>
				<div style="margin-top: 5px;"><?php translate('expirationDate2'); ?></div>
				<?php //translate('expirationDate2'); ?>
			</div>
		</div>
	</div>

	<hr class="grayLine">

	<div class="promotionWinter">
		<h2 class="promotionWinter__secondHeader"><?php translate('application_process'); ?></h2>

		<div class="process">
			<p class="process__description"><?php translate('relax'); ?></p>

			<div class="process__mainCard">
				<img class="process__mainCardImage" src="/img/promotionWinter/process_card_main.png" alt="" width="270" height="189"/>
				<p class="process__cardDescription text-center"><?php translate('ID Card'); ?></p>

				<div class="process__plus">+</div>
			</div>

			<div class="process__cards">
				<div class="swiper-wrapper">
					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--1">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_security.png" alt="" width="220" height="154">
								<p class="process__cardDescription"><?php translate('ID+Social'); ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--2">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_blank.png" alt="" width="220" height="154">

								<p class="process__cardDescription"><?php translate('ID+Bank'); ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--3">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_driving.png" alt="" width="220" height="154">

								<p class="process__cardDescription"><?php translate('ID+Driving'); ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--4">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_family.png" alt="" width="220" height="154">

								<p class="process__cardDescription"><?php translate('ID+HuKou'); ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--5">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_insurance.png" alt="" width="220" height="154">

								<p class="process__cardDescription"><?php translate('ID+insurance'); ?></p>
							</div>
						</div>
					</div>

					<div class="swiper-slide process__item">
						<div class="">
							<div class="process__card process__card--6">
								<img class="process__cardImage" src="/img/promotionWinter/process_card_work.png" alt="" width="220" height="154">

								<!-- todo: translate -->
								<p class="process__cardDescription"><?php translate('ID+Work card'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>


		<div class="addedInformation">
			<div class="addedInformation__content">
				<h3 class="addedInformation__header"><?php translate('attentions'); ?></h3>

				<div class="addedInformation__info">
					<p class="addedInformation__text"><?php translate('attention - 1'); ?></p>
				</div>
				<div class="addedInformation__info">
					<p class="addedInformation__text"><?php translate('attention - 2'); ?></p>
				</div>
			</div>
		</div>

<div class="onepercentv2 onepercentv3">
<div class="section-lc">
	<div class="wp">
		<div class="cta" style="width: 72%; float: none">
			<div class="cta-box">
				<h4>马上申请贷款吧！</h4>
				<span>联系我们</span>
				<strong>400 027 1265</strong>
				<span>或者</span>
				<a href="javascript:;" class="scroll-to-form">留下联络方式</a>
				<p>我们将会联系您</p>
			</div>
		</div>
	</div>
</div>
</div>


	</div>

<div class="ajaxLeaveForm" style="display: none;background:transparent;margin-top: 40px;">
		<?php echo $this->element('ContactForms/contact-form-promotion',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>


	<?php
} else {
	echo $this->Element('error');
}
?>
