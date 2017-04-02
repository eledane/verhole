<?php

$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages')); 

switch ($pageData['modulesData']['promotion']['Promotion']['url']) {
    case 'onepercent':
    case 'onepercent__':
        $class = 'wcl_onepercent';
        $__section = 'op';
    break;
}
if(!isset($class)) {
	$class = '';
}
$this->assign('class', !empty($class) ? $class : null);
$this->assign('section', !empty($__section) ? $__section : null);
$this->assign('language', $lang);
if($lang == 'en') {
?>
<link rel="stylesheet" href="/promotions/op/css/style.css">
<div class="onepercentv2">
<div class="section-banner">
	<img src="/promotions/op/img/en/banner_m.jpg">
</div>

<div class="section-fqg2">
	<div class="wp">
		<h2 class="headline">1% over payment every month You can have it at once！</h2>
		<div class="products">
			<div class="prod pc"><span>PC</span></div>
			<div class="prod mobile"><span>MOBILE PHONE</span></div>
			<div class="prod motor"><span>MOTORBIKE</span></div>
			<div class="prod electronic"><span>FASHION ELECTRONICS</span></div>
			<div class="prod appliance"><span>HOME APPLIANCE</span></div>
		</div>
		<div class="contactus">
			<span class="text">Call Us<strong>400 027 1265</strong></span>
		</div>
	</div>
</div>

<div class="section-statistics2">
	<div class="wp">
		<h2 class="headline"><img src="/promotions/op/img/en/statistics_headline.png" alt=""></h2>
		<div class="tbox">
			<ul class="table">
				<li class="item-1">
					<div class="h"><span class="icon"></span><strong class="name">Maximum Loan(RMB)</strong></div>
					<div class="d"><span>10,000</span></div>
				</li>
				<li class="item-2">
					<div class="h"><span class="icon"></span><strong class="name">Lowest DP<sup>*</sup></strong></div>
					<div class="d"><span>10% of Price</span></div>
				</li>
				<li class="item-3">
					<div class="h"><span class="icon"></span><strong class="name">Monthly Rates<sup>*</sup></strong></div>
					<div class="d"><span>Less than 1% of goods price</span></div>
				</li>
				<li class="item-4">
					<div class="h"><span class="icon"></span><strong class="name">Tenure</strong></div>
					<div class="d"><span>10/12/15/18/24</span></div>
				</li>
			</ul>
			<ul class="remarks">
				<li>*Lowest down payment amount will be determined by loan amount</li>
				<li>*Flexible package and insurance are excluded</li>
			</ul>
		</div> 
		
		<div class="ft">
			<img src="/promotions/op/img/en/statistics_text.png">
		</div>
	</div>
</div>

<div class="section-lc <?php echo $class;?>">
	<div class="wp">
		<h2 class="headline">Loan Calculator</h2>
		<div class="cal">
			<p>What's your amount of loan?</p>
			<div class="slider-box">
				<div id="slider-amount"></div>
			</div>

			<p>How many installments do you want to pay in?</p>
			<div class="slider-box">
				<div id="slider-months"></div>
			</div>

			<div class="result">
				<p>This is your monthly installment. Apply for the loan right now!</p>
				<p class="loan">¥<span id="calc-result">0</span></p>
			</div>
		</div>
		<div class="cta">
			<div class="cta-box">
				<h4>Apply for the loan <br>right now!</h4>
				<span>contact us</span>
				<strong>400 027 1265</strong>
				<span>or</span>
				<a href="javascript:;" class="scroll-to-form">Leave your information</a>
				<p>We will contact you</p>
			</div>
		</div>
		<div class="tips">
			<strong>Warm prompt:</strong>
			<p>1）The result of the loan calculator dose not include the premium service fee. It's for reference only. Details of the intallment products is subject to the consumer finance loan  contract.signed by you.</p>
			<p>2）For more details about the loan, please check the “loan rate table” below, consult the sales representative of our business cooperators, or call the customer service hotline.</p>
		</div>
	</div>
</div>
</div>
	<div class="ajaxLeaveForm" style="display: none;background:transparent;margin-top: 40px;">
		<?php echo $this->element('ContactForms/contact-form-promotion',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>
</div>


<div class="onepercentv2">



<div class="section-process2">
	<div class="wp">
		<h2 class="headline"><img src="/promotions/op/img/en/process_headline.png"></h2>
		<h3 class="subtitle">You only need to fulfill 2-3 easy conditions</h3>

		<div class="files clearfix">
			<div class="file required">
				<img src="/promotions/op/img/process_card_main.png">
				<span>ID Card(required)</span>
			</div>
			<span class="plus"><span class="h"></span><span class="v"></span></span>
			<div class="options">
				<div class="file security">
					<img src="/promotions/op/img/process_card_security.png">
					<span>Social Insurance Card</span>
				</div>
				<div class="file bank">
					<img src="/promotions/op/img/process_card_bank.png">
					<span>Debit Card &<br>Transaction Receipt</span>
				</div>
				<div class="file driving">
					<img src="/promotions/op/img/process_card_driving.png">
					<span>Driver's License</span>
				</div>
				<div class="file family">
					<img src="/promotions/op/img/process_card_family.png">
					<span>Residence Booklet</span>
				</div>
				<div class="file insurance">
					<img src="/promotions/op/img/process_card_insurance.png">
					<span>Health Insurance Card</span>
				</div>
				<div class="file work">
					<img src="/promotions/op/img/process_card_work.png">
					<span>Employment Authorization Document</span>
				</div>
			</div>
		</div> 
		
		<div class="attention">
			<h3><img src="/promotions/op/img/en/process_attention.png"></h3>
			<ol>
				<li><span>1.</span> 1% mentioned here means 1% of the total goods price</li>
				<li><span>2.</span> The details of installment products shall be subject to the consumer finance loan contract signed by you.</li>
			</ol>
		</div>
	</div>
</div>
</div>

<script src="/promotions/op/js/page.js"></script>
<?php
} else {
?>
<link rel="stylesheet" href="/promotions/op/css/style.css">
<div class="onepercentv2">
<div class="section-banner">
	<img src="/promotions/op/img/banner_m.jpg">
</div>

<div class="section-fqg2">
	<div class="wp">
		<h2 class="headline"></h2>
		<div class="products">
			<div class="prod pc"><span>电脑</span></div>
			<div class="prod mobile"><span>手机</span></div>
			<div class="prod motor"><span>摩托车</span></div>
			<div class="prod electronic"><span>电子产品</span></div>
			<div class="prod appliance"><span>家电</span></div>
		</div>
		<div class="contactus">
			<span class="text">快来联系我们吧！<strong>400 027 1265</strong></span>
		</div>
	</div>
</div>

<div class="section-statistics2">
	<div class="wp">
		<h2 class="headline"><img src="/promotions/op/img/statistics_headline.png" alt=""></h2>
		<div class="tbox">
			<ul class="table">
				<li class="item-1">
					<div class="h"><span class="icon"></span><strong class="name">最高贷款金额(元)</strong></div>
					<div class="d"><span>10,000</span></div>
				</li>
				<li class="item-2">
					<div class="h"><span class="icon"></span><strong class="name">最低首付<sup>*</sup></strong></div>
					<div class="d"><span>商品总价的10%</span></div>
				</li>
				<li class="item-3">
					<div class="h"><span class="icon"></span><strong class="name">每月费率<sup>*</sup></strong></div>
					<div class="d"><span>不超过商品总价的1％</span></div>
				</li>
				<li class="item-4">
					<div class="h"><span class="icon"></span><strong class="name">期数</strong></div>
					<div class="d"><span>10、12、15、18、24期可选</span></div>
				</li>
			</ul>
			<ul class="remarks">
				<li>*最低首付金额需根据贷款金额确定</li>
				<li>*选择灵活还款服务包和保险除外</li>
			</ul>
		</div> 
		
		<div class="ft">
			<img src="/promotions/op/img/statistics_text.png">
		</div>
	</div>
</div>

<div class="section-lc <?php echo $class;?>">
	<div class="wp">
		<h2 class="headline">贷款计算器</h2>
		<div class="cal">
			<p>亲，你的贷款金额是多少？</p>
			<div class="slider-box">
				<div id="slider-amount"></div>
			</div>

			<p>你想分几个月偿还呢？</p>
			<div class="slider-box">
				<div id="slider-months"></div>
			</div>

			<div class="result">
				<p>以下是你的月付金额，还不错吧。</p>
				<p class="loan">¥<span id="calc-result">0</span></p>
			</div>
		</div>
		<div class="cta">
			<div class="cta-box">
				<h4>马上申请贷款吧！</h4>
				<span>联系我们</span>
				<strong>400 027 1265</strong>
				<span>或者</span>
				<a href="javascript:;" class="scroll-to-form">留下联络方式</a>
				<p>我们将会联系您</p>
			</div>
		</div>
		<div class="tips">
			<strong>温馨提示：</strong>
			<p>1）此分期付款计算器的计算结果尚未包含保险手续费和灵活还款服务包费,仅供参考。分期付款产品的具体内容以您签署的消费贷款合同为准。</p>
			<p>2）如欲查询某一具体商品的分期付款情况,请点击下方的“贷款费率表”进行查看,或咨询合作商户的店内销售代表,或者致电客户服务热线了解更多分期付款详细信息。</p>
		</div>
	</div>
</div>

</div>
	<div class="ajaxLeaveForm" style="display: none;background:transparent;margin-top: 40px;">
		<?php echo $this->element('ContactForms/contact-form-promotion',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>
</div>

<div class="onepercentv2">

<div class="section-process2">
	<div class="wp">
		<h2 class="headline"><img src="/promotions/op/img/process_headline.png"></h2>
		<h3 class="subtitle">放轻松，你只需要提供以下2-3项简单证明文件！</h3>

		<div class="files clearfix">
			<div class="file required">
				<img src="/promotions/op/img/process_card_main.png">
				<span>身份证（必须）</span>
			</div>
			<span class="plus"><span class="h"></span><span class="v"></span></span>
			<div class="options">
				<div class="file security">
					<img src="/promotions/op/img/process_card_security.png">
					<span>社保卡</span>
				</div>
				<div class="file bank">
					<img src="/promotions/op/img/process_card_bank.png">
					<span>银行卡 + 交易回单</span>
				</div>
				<div class="file driving">
					<img src="/promotions/op/img/process_card_driving.png">
					<span>驾驶证</span>
				</div>
				<div class="file family">
					<img src="/promotions/op/img/process_card_family.png">
					<span>户口簿</span>
				</div>
				<div class="file insurance">
					<img src="/promotions/op/img/process_card_insurance.png">
					<span>医保卡</span>
				</div>
				<div class="file work">
					<img src="/promotions/op/img/process_card_work.png">
					<span>工卡</span>
				</div>
			</div>
		</div> 
		
		<div class="attention">
			<h3><img src="/promotions/op/img/process_attention.png"></h3>
			<ol>
				<li><span>1.</span> 此处提到的1%为商品总价的1%。</li>
				<li><span>2.</span> 具体条款以借款人与捷信公司签订的消费信贷合同约定为准。</li>
			</ol>
		</div>
	</div>
</div>
</div>

<script src="/promotions/op/js/page.js"></script>
<?php
}
?>
