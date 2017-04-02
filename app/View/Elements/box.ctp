<section class="cta-wrapper">
	<div class="box box-light-grey <?php echo $class; ?>">
		<div class="box-part">
			<h1>
				<strong class="color-red box-text-wcl">
					<?php
					if(strpos($class, 'partners-box') !== false) {
						echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact');
					} else {
						echo $this->StaticText->getStripped('Leave contact box - Get a Loan now');
					}
					?>
				</strong>
				<strong class="color-red box-text-posl" style="display: none;">
					<?php
					if(strpos($class, 'partners-box') !== false) {
						echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact - posl');
					} else {
						echo $this->StaticText->getStripped('Leave contact box - Get a Loan now - posl');
					}
					?>
				</strong>
			</h1>
			<strong class="color-light-gray call-us-text"><?php echo $this->StaticText->getStripped('Leave contact box - Call us'); ?></strong>
			<?php

			if(strpos($class, 'partners-box') !== false) {
				echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Partners - Leave contact box - phone - link').'" class="tel" onclick="stm_clicki(\'send\',\'event\',\'callus\',\'partners-box\');">'.$this->StaticText->getStripped('Partners - Leave contact box - phone - text').'</a></strong>';
			} else {
				if($pageData['id'] == Configure::read('Page.cashloans') || $pageData['is_frontpage']) {
					echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Leave contact box - cash loans - phone - link').'" class="tel" onclick="stm_clicki(\'send\',\'event\',\'callus\',\'cashloans||frontpage\');">'.$this->StaticText->getStripped('Leave contact box - cash loans - phone - text').'</a></strong>';
				} else {
					echo '<strong class="color-green small block bold phone-text"><a href="tel:'.$this->StaticText->getStripped('Leave contact box - phone - link').'" class="tel" onclick="stm_clicki(\'send\',\'event\',\'callus\',\'others\');">'.$this->StaticText->getStripped('Leave contact box - phone - text').'</a></strong>';
				}
			}
			?>
		</div>
		<div class="box-part box-part-middle">
			<div class="row">
				<div class="or"><span><?php echo $this->StaticText->getStripped('Leave contact box - OR'); ?></span></div>
			</div>
		</div>
		<div class="box-part  box-part-leave">
			<?php
			if(!empty($pageData['modulesData']['WalkInCashLoan'])) {
				?>
					<a class="btn btn-success scroll-to-form" href="#" title="<?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact - button'); ?>"><?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact - button'); ?></a>
				<?php
			} else {
				if(strpos($class, 'partners-box') !== false) {
					?>
					<a class="btn btn-success scroll-to-form" href="#" title="<?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact - button'); ?>"><?php echo $this->StaticText->getStripped('Partners - Leave contact box - Leave contact - button'); ?></a>
					<?php
					} else {
					?>
					<a class="btn btn-success scroll-to-form" href="#" title="<?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?>"><?php echo $this->StaticText->getStripped('LEAVE CONTACT'); ?></a>
				<?php
				}
			}
			?>
			<small class="block we-contact-you"><?php echo $this->StaticText->getStripped('Leave contact box - and we will contact you'); ?></small>
		</div>
	</div>
</section>
