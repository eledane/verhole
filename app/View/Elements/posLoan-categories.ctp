<section class="pos-loan">
	<div class="container">
		<div class="row pos-loan-title">
			<div class="col-xs-12">
				<h1><?php echo $this->StaticText->getStripped('POS Loan'); ?></h1>
			</div>
		</div>
	</div>
	<?php
	echo $this->Element('mainCarousel');
	?>
	<div class="call-to-action-box">
		<?php echo $this->StaticText->getStripped('POS Loan - Select your commodity', array("span")); ?>
		<?php
		echo $this->Html->image(
			$this->Doodle->renderPath('go-for-it-bordered.png'),
			array(
				'class' => 'doodle'
			)
		);
		?>
	</div>
	<div class="pos-loan-list-bg">
		<div class="container">
			<div class="row">
				<?php
				foreach($pageData['modulesData']['categories'] as $productCategory) {
					$img = $this->Media->getFirstImagePath($productCategory['ProductCategory']['moduleMedia']);
					$products = null;
					$firstProduct = null;
					if(!empty($productCategory['Product'])) {
						$products = $productCategory['Product'];
						$firstProduct = Hash::sort($products, '{n}.monthly', 'ASC');
						$firstProduct = $firstProduct[0];
					}
					?>
					<div class="col-xs-12 col-md-6 col-lg-4 commodity-split">
						<div class="commodity-item">
							<div class="col-xs-12 commodity-wrapper">
								<div class="img-wrapper col-xs-4">
									<img src="<?php echo '/' . $img; ?>" alt="" class="img-responsive">
								</div>
								<div class="col-xs-7 col-xs-offset-5 commodity-desc">
									<h2><?php echo $productCategory['ProductCategory']['name']; ?></h2>
									<?php
									if(!empty($products)) {
										?>
										<p class="starts-on"><?php echo __d('hc','from');?> <span><?php echo $this->CurrencyNumber->formattedPrice($firstProduct['monthly']); ?>/ <?php echo __d('hc','month');?></span></p>
										<?php
									}
									?>
								</div>
								<div class="clearfix"></div>
								<?php
								if(!empty($products)) {
								?>
								<div class="table-wrapper">
									<table class="commodity-pricing">
										<tbody>
										<tr>
											<?php
											foreach($products as $pro) {
												?>
												<td>
													<span><?php echo $this->CurrencyNumber->formattedPrice($pro['price']); ?></span>
													<?php echo $this->CurrencyNumber->formattedPrice($pro['monthly']); ?> <?php echo __d('hc','monthly');?>  / <?php echo h($pro['months']); ?> <?php echo __d('hc','months');?> 
												</td>
												<?php
											}
											?>
										</tr>
										</tbody>
									</table>
								</div>
								<?php
								}
								?>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php if(isset($csvPOSL)){echo $this->Element('calculator');} ?>
		</div>
	</div>
</div>
<?php 
	echo $this->element('vas');
?>
<?php
echo $this->Element('loanProcessPOSL');
echo $this->Element('loanProcessPOSLDesktop');
echo $this->Element('box', array('class' => 'centered-box'));
?>
<?php /*
<div class="ajaxLeaveForm" style="display: none;background: url(../img/cta-bg.jpg);margin-bottom: 0;padding-bottom: 30px;">
	<?php
	echo $this->element('ContactForms/default',array('class' => 'homepage-leaveForm'));
	?>
</div> */ ?>

	<div class="ajaxLeaveForm" style="display: none;">
		<?php
			echo $this->element('ContactForms/ask-users',array('class_menu' => 'homepage-menu','class' => 'homepage-leaveForm', 'sectionNameContactForm' => $WCLPage['Page']['title']));
		?>
	</div> 

<?php echo $this->element('map'); ?>
<script type="text/javascript">
	var calcData = <?php echo $csvPOSL; ?>;
	var monthSliderInitialStep = 3;
	var amountSliderInitialStep = 3;
</script>
