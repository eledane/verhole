<?php
	if (empty($btn)) {
		$btn = '';
	}
?>
<section class="cta-wrapper">
	<div class="box box-light-grey clearfix <?php echo $class; ?>">
		<div class="box-part">
			<h2>
				<strong class="color-red">
					<?php echo $this->StaticText->getStripped('Leave contact box - Get a Loan now'); ?>
				</strong>
			</h2>
			<strong class="color-light-gray call-us-text"><?php echo $this->StaticText->getStripped('Leave contact box - Call us'); ?></strong>
			<?php

			if(strpos($class, 'partners-box') !== false) {
				echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Partners - Leave contact box - phone - link').'" class="tel">'.$this->StaticText->getStripped('Partners - Leave contact box - phone - text').'</a></strong>';
			} else {
				if($pageData['id'] == Configure::read('Page.cashloans') || $pageData['is_frontpage']) {
					echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Leave contact box - cash loans - phone - link').'" class="tel">'.$this->StaticText->getStripped('Leave contact box - cash loans - phone - text').'</a></strong>';
				} else {
					echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Leave contact box - phone - link').'" class="tel">'.$this->StaticText->getStripped('Leave contact box - phone - text').'</a></strong>';
				}
			}
			?>
		</div>
		<div class="box-part box-part-middle">
			<div class="row">
				<div class="or"><span><?php echo $this->StaticText->getStripped('Leave contact box - OR'); ?></span></div>
			</div>
		</div>
		<div class="box-part">
			<?php
			if(strpos($class, 'partners-box') !== false) {
				?>
				<a class="btn btn-success scroll-to-form <?php echo $btn; ?>" href="#" title="<?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact'); ?>"><?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact'); ?></a>
			<?php
			} else {
				?>
				<a class="btn btn-success scroll-to-form <?php echo $btn; ?>" href="#" title="<?php echo $this->StaticText->getStripped('Schedule appointment'); ?>"><?php echo $this->StaticText->getStripped('Schedule appointment'); ?></a>
			<?php
			}
			?>
			<small class="block we-contact-you"><?php echo $this->StaticText->getStripped('Leave contact box - and we will contact you'); ?></small>
		</div>
	</div>
</section>
