<?php

$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages')); 

switch ($pageData['modulesData']['promotion']['Promotion']['url']) {
    case '1607':
    case '1607__':
        $class = 'wcl_1607';
        $__section = '1607pos';
    break;
}
if(!isset($class)) {
	$class = '';
}
$this->assign('class', !empty($class) ? $class : null);
$this->assign('ssection', !empty($__section) ? $__section : null);
$this->assign('language', $lang);
if($lang == 'en') {
?>
<link rel="stylesheet" href="/promotions/1607/css/style.css">

<div id="s1607">
<div class="section-banner">
	<div class="hg"></div>
	<a href="http://qr02.cn/E4nSCh"></a>
</div>

<div class="section-lc <?php echo $class;?>">
	<div class="wp">
		<h2 class="headline"><span>Loan Calculator</span></h2>
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
				<h4>The lucky draw is available for<br />goods price over ¥1607<br />Apply for the loan now!</h4>
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
	<div class="lc-shadow"><img src="/promotions/1607/img/shadow.png" alt=""></div>
</div>

</div>
	<div class="ajaxLeaveForm" style="display: none;background:transparent;margin-top: 40px;">
		<?php echo $this->element('ContactForms/contact-form-promotion',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>
</div>

<script src="/promotions/1607/js/page.min.js"></script>
<?php
} else {
?>
<link rel="stylesheet" href="/promotions/1607/css/style.css">

<div id="s1607">
<div class="section-banner">
	<div class="hg"></div>
	<a href="http://qr02.cn/E4nSCh"></a>
</div>

<div class="section-lc <?php echo $class;?>">
	<div class="wp">
		<h2 class="headline"><span>贷款计算器</span></h2>
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
				<h4>商品金额超过1607元（不含）<br>即可参加抽奖活动<br>马上申请贷款吧！</h4>
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
	<div class="lc-shadow"><img src="/promotions/1607/img/shadow.png" alt=""></div>
</div>

</div>
	<div class="ajaxLeaveForm" style="display: none;background:transparent;margin-top: 40px;">
		<?php echo $this->element('ContactForms/contact-form-promotion',array('class' => 'homepage-leaveForm wcloan')); ?>
	</div>
</div>

<script src="/promotions/1607/js/page.min.js"></script>

<?php
}
?>
