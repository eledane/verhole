<footer>
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 mobile-row col-md-5 col-lg-2">
					<h3><?php echo $this->StaticText->getStripped('Footer - products headline'); ?></h3>
					<ul class="products">
						<?php
						echo $this->Html->tag(
							'li',
							$this->Html->link(
								$this->StaticText->getStripped('POS Loan'),
								array(
									'pageurl' => $posLoanPage['Page']['tree_slug'],
								),
								array(
									'title' => '',
									'escape' => false
								)
							),
							array(
								'escape' => false
							)
						);
						echo $this->Html->tag(
							'li',
							$this->Html->link(
								$this->StaticText->getStripped('Walk-in Cash Loan'),
								array(
									'pageurl' => $WCLPage['Page']['tree_slug'],
								),
								array(
									'title' => '',
									'escape' => false
								)
							),
							array(
								'escape' => false
							)
						);
						echo $this->Html->tag(
							'li',
							$this->Html->link(
								$this->StaticText->getStripped('Value Added Services - title'),
								array(
									'pageurl' => $valueAddedServicesPage['Page']['tree_slug'],
								),
								array(
									'title' => '',
									'escape' => false
								)
							),
							array(
								'escape' => false
							)
						);
						?>
					</ul>
				</div>
				<div class="col-xs-7 mobile-row col-md-7 col-lg-4">
					<h3><?php echo $this->StaticText->getStripped('Footer - important links headline'); ?></h3>
					<?php
					if (!empty($pageData['menus'])) {
						$menu = Hash::extract($pageData['menus'], '{n}[url=/footer-menu/].children');
						if (!empty($menu)) {
							$menu = $menu[0];
						}
						?>
						<ul class="important-links">
							<?php
							function cmp($a, $b)
							{
								return $a["ordering"] - $b["ordering"];
							}

							usort($menu, "cmp");
							foreach ($menu as $menuitem) {
								?>
								<li class="<?php echo $menuitem['class']; ?>">
									<?php
									$active = "";
									if ($pageData['tree_slug'] == $menuitem['Page']['tree_slug']) {
										$active = "active";
									}
									if ($menuitem['Page']['tree_slug'] == 'career') {
										$pageUrl = Configure::read('Menu.careerLink');
										$target = '_blank';
										echo $this->Html->link($menuitem['name'], $pageUrl, array(
											'class' => $active, 'title' => $menuitem['name'], 'target' => $target
										));
									} else if ($menuitem['class'] == 'feedback') {

										$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
										if ($language !== 'en') {
											$pageUrl = $faqPage['Page']['tree_slug'] . '/%E5%AE%A2%E6%88%B7%E5%8F%8D%E9%A6%88%E5%A4%84%E7%90%86%E6%B5%81%E7%A8%8B';
										} else {
											$pageUrl = $faqPage['Page']['tree_slug'] . '/customer-feedback-handing-process';
										}
										$target = '_self';
										echo $this->Html->link(
											$menuitem['name'],
											array('pageurl' => $pageUrl),
											array('class' => $active, 'title' => $menuitem['name'], 'target' => $target)
										);
									} else {
										$pageUrl = $menuitem['Page']['tree_slug'];
										$target = '_self';
										echo $this->Html->link($menuitem['name'], array(
											'pageurl' => $pageUrl
										), array(
											'class' => $active, 'title' => $menuitem['name'], 'target' => $target
										));
									}
									?>
								</li>
								<?php
							}
							?>
						</ul>
						<?php
					}
					?>
				</div>
				<div class="col-xs-12 col-lg-6">
					<div class="row">
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos footer-social we-chat" data-title="<?php echo $this->StaticText->getStripped('Footer - Social WeChat'); ?>">
							<span class="we-chat-QR hidden-xs hidden-sm">
								<img src="/img/footer/icons/wechat.png" class="we-chat-logo">
								<a href="http://weixin.qq.com/r/XXUhLkTEz3qwh1VNnyB5" target="_blank">
									<img src="
									<?php if ($pageData['locale'] == 'eng') {
										echo '/img/QR/QR-we-chat-simple.png';
									} else {
										echo '/img/QR/QR-we-chat-simple.png';
									} ?>"
										 alt="QR code - We Chat" class="img-responsive">
									<p><?php echo $this->StaticText->getStripped('Footer - Social QR Wechat'); ?></p>
								</a>
							</span>
							<span class="visible-xs visible-sm hidden-md hidden-lg">
								<a href="http://weixin.qq.com/r/XXUhLkTEz3qwh1VNnyB5" target="_blank">
									<img src="/img/footer/icons/wechat.png" class="we-chat-logo">
								</a>
							</span>
						</div>
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos footer-social qr-download" data-title="<?php echo $this->StaticText->getStripped('Footer - Social APP'); ?>">
							<div class="gr-download-box hidden-xs hidden-sm">
								<img src="/img/footer/icons/hc.png" class="gr-download-logo">
								<a href="http://app.homecreditcfc.cn?utm_source=hccwebsite&utm_medium=sitetraffic&utm_campaign=website_footer_ongoing" target="_blank">
									<img src="/img/QR/QR-download-app-20160420.png" alt="QR code - Download our app"
										class="img-responsive">
									<p><?php echo $this->StaticText->getStripped('Footer - Social QR APP'); ?></p>
								</a>
							</div>
							<span class="visible-xs visible-sm hidden-md hidden-lg">
								<a href="http://app.homecreditcfc.cn?utm_source=hccwebsite&utm_medium=sitetraffic&utm_campaign=website_footer_ongoing" target="_blank">
									<img src="/img/footer/icons/hc.png" class="gr-download-logo">
								</a>
							</span>
						</div>
						<div class="clearfix hidden-md"></div>
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos" data-title="<?php echo $this->StaticText->getStripped('Footer - Social Weibo'); ?>">
							<a href="http://weibo.com/u/3499016007?topnav=1&wvr=6&topsug=1" class="logo" target="_blank">
								<span class="img-wrapper">
									<img src="/img/footer/icons/sinaweibo.png" alt="Weibo" class="weibo">
								</span>
							</a>
						</div>
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos" data-title="<?php echo $this->StaticText->getStripped('Footer - Social Baidu'); ?>">
							<a href="http://tieba.baidu.com/f?kw=%E6%8D%B7%E4%BF%A1&amp;ie=utf-8&amp;fr=wwwt"
							   class="logo" target="_blank">
								<span class="img-wrapper">
									<img src="/img/footer/icons/baidutieba.png" alt="Baidu Tieba" class="baidu">
								</span>
							</a>
						</div>

						<div class="clearfix hidden-md"></div>
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos client-hotline" data-title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->StaticText->getStripped('hotline-for-client'); ?>">
							<a href="javascript:;" class="logo" target="_blank">
								<span class="img-wrapper">
									<img src="/img/appblock/tel-icon-pc.png" alt="Weibo" class="weibo">
								</span>
							</a>
						</div>
						<div class="col-xs-6 col-md-3 col-lg-4 col-lg-offset-1 logos client-hotline" data-title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->StaticText->getStripped('hotline-for-potential-client'); ?>">
							<a href="javascript:;" class="logo" target="_blank">
								<span class="img-wrapper">
									<img src="/img/appblock/tel-icon-pc.png" alt="Baidu Tieba" class="baidu">
								</span>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
		    <p style="text-align:center;padding-bottom:0;">作为银监会批准设立的四家试点消费金融公司中的外资公司——捷信消费金融有限公司于2010年底正式在中国天津注册成立。<br />捷信消费金融有限公司是捷信集团(Home Credit B.V.)在中国的的子公司，致力于让任何人在任何地点都能获得可负担得起的消费贷款。</p>
			<p>&copy; <?php echo $this->StaticText->getStripped('Footer - copyright'); ?>,<br
					class="visible-xs-block visible-sm-block"> <?php echo $this->staticText->getStripped('Footer-ICPlicense'); ?>
				<a href="/img/copyright/license.jpg" style="display:inline-block; padding-left:20px;"><img src="/img/copyright/logo.png" /></a>
			</p>
		</div>
	</div>
</footer>


