<?php
$detail = $pageData['modulesData']['posloan-detail']['ProductCategory'];
if(isset($pageData['modulesData']['posloan-detail']['CsvFile'])){
	$csv = $pageData['modulesData']['posloan-detail']['CsvFile'];
}

$img = $this->Media->getFirstImagePath($detail['moduleMedia']);
?>
<section class="pos-loan-detail">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="/<?php echo $img; ?>" alt="<?php echo $detail['name']; ?>" class="img-responsive">
				<h1><?php echo $detail['name']; ?></h1>
				<p><?php echo $detail['description']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php if(isset($csv)){echo $this->Element('calculator');} ?>
				<?php echo $this->Element('box', array('class' => 'homepage-box')); ?>
				<div class="ajaxLeaveForm">
				<?php echo $this->element('ContactForms/default',array('class' => 'homepage-leaveForm')); ?>
				</div>
				<?php echo $this->Element('howToGetLoan'); ?>
				<?php echo $this->Element('map'); ?>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	var calcData = <?php echo $csv; ?>;
	//var monthSliderInitialStep = 3;
	//var amountSliderInitialStep = 3;
</script>

