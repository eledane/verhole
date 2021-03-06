<?php
$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
if( $language == 'en'){
  $client_num = 59.9;
  }else{
  $client_num = '5,990';
}
?>

<div class="hc-in-numbers">
	<div class="hc-in-china">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="row">
					<?php
					echo $this->Html->image(
						$this->Doodle->renderPath('join-in-arrow.png'),
						array(
							'class' => 'doodle'
						)
					);
					?>
					<h2 ><?php echo $this->staticText->getStripped('About HC - HC in China'); ?></h2>
					<div class="col-xs-6 text-center numbers">
						<span>8</span> <p><?php echo $this->staticText->getStripped('About HC - Years'); ?></p>
					</div>
					<div class="col-xs-6 text-center numbers">
						<span>280</span> <p><?php echo $this->staticText->getStripped('About HC - Cities'); ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="hc-globally">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="row">
					<h2><?php echo $this->staticText->getStripped('About HC - HC Globally'); ?></h2>
					<div class="col-xs-6 text-center numbers">
						<span class="small">86,000</span> <p><?php echo $this->staticText->getStripped('About HC - Employees'); ?></p>
					</div>
					<div class="col-xs-6 text-center numbers">
						<span class="small"><?php echo $client_num; ?><span>&nbsp;<?php echo $this->staticText->getStripped('About HC - Customers - unit'); ?></span></span> <p><?php echo $this->staticText->getStripped('About HC - Customers'); ?></p>
					</div>
				</div>
				<div class="row mt40">
					<div class="col-xs-6 text-center numbers">
						<span class="small">215,000</span> <p><?php echo $this->staticText->getStripped('About HC - Distribution points'); ?></p>
					</div>
					<div class="col-xs-6 text-center numbers">
						<span class="small">11&nbsp;<?php echo $this->staticText->getStripped('About HC - Operating Income - unit'); ?>&nbsp;<?php echo $this->staticText->getStripped('About HC - Operating Income - currency'); ?></span> <p><?php echo $this->staticText->getStripped('About HC - Operating Income'); ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<?php
		echo $this->Html->image(

			'about-us/global-map.jpg',
			array(
				'alt' => 'Office',
				'class' => 'global-map'
			)
		);
		?>
	</div>
</div>
