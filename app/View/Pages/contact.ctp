<section class="contact-us">
	<?php
	echo $this->Element('pageHeading',
		array(
		    'doodle' => 'cellphone.png',
		    'class' => 'cellphone',
			'heading' => 'Contact us - main title',
			'background' => 'contact-us.jpg',
		)
	);
	?>
	<div class="container">
		<div class="color-light-gray text-center mt20"><strong><?php echo $this->staticText->getStripped('Contact us - sub heading'); ?></strong></div>
		<div class="row contact-row">
			<div class="col-sm-12 phone-buttons">
				<?php
				for ($i=1; $i < 6; $i++) {
					$title = $this->staticText->getStripped('Contact us - telephone number ' . $i . ' - title');
					$phone = $this->staticText->getStripped('Contact us - telephone number ' . $i);
					$title_key = 'Contact us - telephone number ' . $i . ' - title';
					$phone_key = 'Contact us - telephone number ' . $i;
					if(($title !== $title_key && $title !== '') || ($phone !== $phone_key && $phone !== '')) {
						?>
						<div class="p10 col-md-6">
							<?php
							if ($title !== $title_key && $title !== '') {
								?>
								<h2><?php echo $title; ?></h2>
							<?php
							}
							if ($phone !== $phone_key && $phone !== '') {
								echo $this->Html->link(

									'<i></i>' . $phone,
									'tel:' . $phone,
									array(
										'class' => 'phone-button visible-xs btn btn-success',
										'escape' => false
									)
								)
								?>
								<span class="phone-number hidden-xs"><i></i><?php echo $phone; ?></span>
							<?php
							}
							?>
						</div>
					<?php
					}
				}
				?>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 contact-qr-wrapper">
				<div class="row">
					<div class="col-sm-6">
						<div class="silver-border mt10">
						
							<a href="http://weixin.qq.com/r/XXUhLkTEz3qwh1VNnyB5" target="_blank">
								<img src="<?php if ($pageData['locale'] == 'eng') { echo '/img/QR/QR-we-chat.png'; } else { echo '/img/QR/QR-we-chat-zh.png'; } ?>" alt="QR code - We Chat" class="wechat-contact">
							</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="mt10 mb20">
							<?php
							echo $this->Html->link(
								$this->Html->image(
									'about-us/weibo-logo-colored.png',
									array(
										'alt' => 'Weibo',
										'class' => ''
									)
								),
								'http://weibo.com/hccjiexin/home?topnav=1&wvr=6',
								array(
									'class' => 'social-logo',
									'escape' => false
								)
							);
							echo $this->Html->link(
								$this->Html->image(
									'about-us/baidu-logo-small.png',
									array(
										'alt' => 'Baidu Tieba',
										'class' => ''
									)
								),
								'http://tieba.baidu.com/f?kw=%E6%8D%B7%E4%BF%A1&ie=utf-8&fr=wwwt',
								array(
									'class' => 'social-logo',
									'escape' => false
								)
							)
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<b class="or text-uppercase"><?php echo $this->staticText->getStripped('Contact us - or'); ?></b>
				<a class="btn btn-danger bold mt20 btn-leave scroll-to-form" href="#" title="<?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?>"><?php echo $this->StaticText->getStripped('LEAVE CONTACT'); ?>
				</a>
			</div>
		</div>
	</div>
	<div class="ajaxLeaveForm" style="display: none;">
		<?php echo $this->Element('ContactForms/contact'); ?>
	</div>
	<div class="hc-offices">
		<div class="container">
			<h2><?php echo $this->StaticText->getStripped('Leave contact box - Home Credit Offices')?></h2>

			<div class="col-sm-6 col-sm-offset-3">
				<div class="item">
					<?php
					echo $this->Html->image(
						$this->Doodle->renderPath('yay-arrow.png'),
						array(
							'class' => 'doodle'
						)
					);

					echo $this->Html->image(

						'office.png',
						array(
							'alt' => 'Office',
							'class' => ''
						)
					);
					?>
					<div class="name">
						<?php echo $this->StaticText->getStripped('Contact us - Name')?>
					</div>
					<div class="address">
						<?php echo $this->StaticText->getStripped('Contact us - Address')?>
					</div>
					<?php
					echo $this->Html->link(
						$this->staticText->getStripped('Contact us - offices telephone number'),
						'tel:' . $this->staticText->getStripped('Contact us - offices telephone number'),
						array(
							'class' => 'contacts',
							'escape' => false
						)
					);
					echo $this->Html->link(

						'www.homecreditcfc.cn',
						'http://www.homecreditcfc.cn',
						array(
							'class' => 'contacts color-red',
							'escape' => false
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo $this->element('map'); ?>

<?php //echo "Template : ".'app/View/Pages/' . $pageData['template']; ?>
<?php //echo $pageData['content']; ?>
