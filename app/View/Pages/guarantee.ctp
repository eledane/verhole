<header id="header" class="guarantee">
		<div class="banner">
			<div class="container">
				<h1><?php echo $this->StaticText->getStripped('guarantee - main headline'); ?></h1>
			</div>
		</div>
		<div class="container">
			<div class="ribbon-badge">
				<?php
					$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
					if ($language !== 'en') {
						$ribbonMobile = '/img/guarantee/zh/ribbon-mobile.png';
						$ribbon = '/img/guarantee/zh/ribbon.png';
						$arrow = '/img/guarantee/zh/yay.png';
					} else {
						$ribbonMobile = '/img/guarantee/ribbon-mobile.png';
						$ribbon = '/img/guarantee/ribbon.png';
						$arrow = '/img/guarantee/arrow.png';
					}
				?>
				<img src="<?php echo $ribbonMobile; ?>" alt="" class="showMobile ribbon">
				<img src="<?php echo $ribbon; ?>" alt="" class="showTablet ribbon ribbon-large">
				<img src="<?php echo $arrow; ?>" alt="" class="showTablet arrow">
				<h2 class="showTablet">
					<?php echo $this->StaticText->getStripped('guarantee - ribbon headline'); ?>
				</h2>
			</div>

			<div class="info">
				<p class="heading"><?php echo $this->StaticText->getStripped('guarantee - salutation'); ?></p>
				<p><?php echo $this->StaticText->getStripped('guarantee - into paragraph'); ?></p>
			</div>
		</div>
	</header>
<div class="container guarantee">
	<div id="carousel" class="owl-carousel guarantee-carousel">
		<div>
			<img src="/img/guarantee/person-1.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 1 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 1 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 1 - paragraph'); ?></p>
		</div>

		<div>
			<img src="/img/guarantee/person-2.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 2 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 2 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 2 - paragraph'); ?></p>
		</div>

		<div>
			<img src="/img/guarantee/person-3.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 3 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 3 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 3 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-4.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 4 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 4 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 4 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-5.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 5 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 5 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 5 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-6.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 6 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 6 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 6 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-7.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 7 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 7 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 7 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-8.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 8 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 8 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 8 - paragraph'); ?></p>
		</div>
		<div>
			<img src="/img/guarantee/person-9.jpg" alt="">
			<h3><?php echo $this->StaticText->getStripped('guarantee - slide 9 - headline'); ?></h3>
			<h4><?php echo $this->StaticText->getStripped('guarantee - slide 9 - subheadline'); ?></h4>
			<p><?php echo $this->StaticText->getStripped('guarantee - slide 9 - paragraph'); ?></p>
		</div>
	</div>

	<div class="wrapper">
		<div class="wrapper-box wrapper-box-left">
			<div class="img-box"><img src="/img/guarantee/person-1.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 1 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 1 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 1 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>

		<div class="wrapper-box wrapper-box-right">
			<div class="img-box"><img src="/img/guarantee/person-2.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 2 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 2 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 2 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>

		<div class="wrapper-box wrapper-box-left">
			<div class="img-box"><img src="/img/guarantee/person-3.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 3 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 3 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 3 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>

		<div class="wrapper-box wrapper-box-right">
			<div class="img-box"><img src="/img/guarantee/person-4.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 4 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 4 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 4 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>
		<div class="wrapper-box wrapper-box-left">
			<div class="img-box"><img src="/img/guarantee/person-5.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 5 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 5 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 5 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>

		<div class="wrapper-box wrapper-box-right">
			<div class="img-box"><img src="/img/guarantee/person-6.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 6 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 6 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 6 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>
		<div class="wrapper-box wrapper-box-left">
			<div class="img-box"><img src="/img/guarantee/person-7.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 7 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 7 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 7 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>

		<div class="wrapper-box wrapper-box-right">
			<div class="img-box"><img src="/img/guarantee/person-8.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 8 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 8 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 8 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="divider"><img src="/img/guarantee/divider-arrow.png" alt=""></div>
		<div class="wrapper-box wrapper-box-left">
			<div class="img-box"><img src="/img/guarantee/person-9.jpg" alt=""></div>
			<div class="text-box">
				<h3><?php echo $this->StaticText->getStripped('guarantee - box 9 - headline'); ?></h3>
				<h4><?php echo $this->StaticText->getStripped('guarantee - box 9 - subheadline'); ?></h4>
				<p><?php echo $this->StaticText->getStripped('guarantee - box 9 - paragraph'); ?></p>
			</div>
		</div>
		<div class="clearfix"></div>

	</div>

</div>


<script type="text/javascript" src="/js/guarantee.js"></script>