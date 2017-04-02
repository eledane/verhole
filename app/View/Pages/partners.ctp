<section class="bg-light-gray" id="how-to-become-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				
				<h2 class="mb40"><?php echo $this->StaticText->getStripped('Partners - How to'); ?> <strong><?php echo $this->StaticText->getStripped('Partners - become our partner?'); ?></strong></h2>

				<p><?php echo $this->StaticText->getStripped('Partners - Description 2'); ?><?php echo $this->StaticText->getStripped('Partners - We wish'); ?> </p>
				
				<h3 class="littleHeader color-red"><?php echo $this->StaticText->getStripped('Partners - Requirements'); ?></h3>

				<ul>
					<li><?php echo $this->StaticText->getStripped('Partners - Owners of motorbike shops'); ?></li>
					<li><?php echo $this->StaticText->getStripped('Partners - Consumer goods supermarkets and stores.'); ?></li>
					<li><?php echo $this->StaticText->getStripped('Partners - Laptop, mobile phone supermarkets, stores.'); ?></li>
				</ul>

				<h3 class="littleHeader color-red"><?php echo $this->StaticText->getStripped('Partners - Benefits'); ?></h3>
				<ul>
					<li><?php echo $this->StaticText->getStripped('Partners - Enhancing sales volume, profit, acquire more customers and grow business.'); ?></li>
					<li><?php echo $this->StaticText->getStripped('Partners - Special marketing campaigns'); ?></li>
					<li><?php echo $this->StaticText->getStripped('Partners - Promotion and co-branding campaigns'); ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php echo $this->Element('box', array('class' => 'centered-box partners-box')); ?>
<div class="container">
	<div class="row">

		<div class="ajaxLeaveForm" style="display: none;">
    		<?php echo $this->Element('ContactForms/default-without-agreement', array('class' => 'homepage-leaveForm')); ?>
    	</div>
	</div>
</div>
