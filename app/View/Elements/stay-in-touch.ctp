<section class="stay-in-touch">
	<div class="before-footer text-center">
		<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="stay-in-touch-headline"><?php echo $this->StaticText->getStripped('Stay in touch') ?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<a href="http://weixin.qq.com/r/XXUhLkTEz3qwh1VNnyB5" target="_blank" class="aboutus-share-link">
							<img src="<?php if ($pageData['locale'] == 'eng') { echo '/img/QR/QR-we-chat.png'; } else { echo '/img/QR/QR-we-chat-zh.png'; } ?>" alt="QR code - We Chat" class="logo-bottom">
							<span><?php echo $this->StaticText->getStripped('About us - wechat share text') ?></span>
						</a>
						
						<?php 
							echo $this->Html->link(
								$this->Html->image(
									'about-us/weibo-logo-colored.png',
									array(
							  			'class' => 'logo-bottom eye-logo'
									)
								) . $this->Html->tag('span',
										$this->StaticText->getStripped('About us - weibo share text')
								),
								'http://weibo.com/hccjiexin/home?topnav=1&wvr=6',
								array(
									'escape' => false,
									'class' => 'aboutus-share-link weibo-share'
								)
							);
							echo $this->Html->link(
								$this->Html->image(
									'about-us/baidu-logo-small.png',
									array(
										'class' => 'logo-bottom baidu-logo-bottom'
									)
								) . $this->Html->tag('span',
										$this->StaticText->getStripped('About us - baidu share text')
								),
								'http://tieba.baidu.com/f?kw=%E6%8D%B7%E4%BF%A1&ie=utf-8&fr=wwwt',
								array(
									'escape' => false,
									'class' => 'aboutus-share-link baidu-share'
								)
							);
						?>
					</div>
				</div>
				<div class="text-center contact-link">
					<?php
						echo $this->Html->link(
							 $this->StaticText->getStripped('about-us-see-contact-details'),
							array(
								'pageurl' => $contactPage['Page']['tree_slug'],
							),
							array(
								'title' => '',
								'escape' => false
							)
						);
					?>
				</div>
		</div>
		
	</div>

</section>
