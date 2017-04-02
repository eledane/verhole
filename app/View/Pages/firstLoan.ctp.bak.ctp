<script type="text/javascript">
	var texts = {
		1: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 1 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 1 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 1 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 1 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': '',
				'man': '',
				'position': 'left'
			},
			'textPosition': 'left',
			'image': {
				'woman': '/img/get-loan/woman_02.png',
				'man': '/img/get-loan/man_03.png'
			},
			'imageOffset': {
				'woman': -90
			},
			'arrowOffset': {
				'woman': 0,
				'man': -320
			}
		},
		2: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 2 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 2 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 2 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 2 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': 'id-card.png',
				'man': 'id-card.png',
				'position': 'left'
			},
			'textPosition': 'right',
			'image': {
				'woman': '/img/get-loan/woman_03.png',
				'man': '/img/get-loan/man_04.png',
			},
			'imageOffset': {
				'woman': -320,
				'man': -200
			},
			'arrowOffset': {
				'woman': -200
			}
		},
		3: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 3 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 3 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 3 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 3 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': 'place.png',
				'man': 'place.png',
				'position': 'right'
			},
			'textPosition': 'left',
			'image': {
				'woman': '/img/get-loan/woman_04.png',
				'man': '/img/get-loan/man_05.png'
			},
			'imageOffset':{
				'woman': -90,
				'man': -140
			},
			'arrowOffset': {
				'woman': -280,
				'man' : -300
			}
		},
		4: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 4 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 4 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 4 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 4 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': '',
				'man': 'salesman.png',
				'position': 'left'
			},
			'textPosition': 'right',
			'image': {
				'woman': '/img/get-loan/woman_05.png',
				'man': '/img/get-loan/man_06.png'
			},
			'imageOffset':{
				'woman': -210,
				'man': -200
			}
		},
		5: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 5 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 5 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 5 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 5 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': 'salesman.png',
				'man': 'doc.png',
				'position': 'right'
			},
			'textPosition': 'left',
			'image': {
				'woman': '/img/get-loan/woman_06.png',
				'man': '/img/get-loan/man_07.png'
			},
			'imageOffset':{
				'woman': -160,
				'man': -210
			},
			'arrowOffset': {
				'woman': 30
			}
		},
		6: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 6 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 6 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 6 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 6 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': 'doc.png',
				'man': '',
				'position': 'left'
			},
			'textPosition': 'right',
			'image': {
				'woman': '/img/get-loan/woman_07.png',
				'man': '/img/get-loan/man_07.png'
			},
			'imageOffset':{
				'woman': -210,
			}
		},
		7: {
			'h1' : {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 7 - header - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 7 - header - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'p': {
				'woman': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 7 - description - woman", array("a", "strong", "i", "b", "img"))); ?>',
				'man': '<?php echo str_replace(array("\r", "\n"), "",$this->StaticText->getStripped("First loan - step 7 - description - man", array("a", "strong", "i", "b", "img"))); ?>'
			},
			'icon': {
				'woman': '',
				'man': '',
				'position': 'left'
			},
			'textPosition': 'left',
			'image': {
				'woman': '/img/get-loan/woman_07.png',
				'man': '/img/get-loan/man_07.png'
			},
			'imageOffset':{
				'woman': -200,
			}
		}
	}
</script>



<div class="scroller-wrapper for-tablet-and-bigger">
	
	<div class="scroller-container">
		<div class="swiper-common">
			<h1 class="normal text-center"><?php echo $this->StaticText->getStripped('First loan - My'); ?> <strong class="color-red"><?php echo $this->StaticText->getStripped('First loan - first loan'); ?></strong></h1>
			<div class="row">
				<div class="col-xs-12 btns-wrapper text-center">
					<a class="tag-gray tag-woman btn gray active" data-gender="woman" title="<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?>">
						<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><strong><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?></strong>
					</a>
					<a class="tag-gray tag-man  btn gray" data-gender="man" title="<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><?php echo $this->StaticText->getStripped('First loan - more cash'); ?>">
						<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><strong><?php echo $this->StaticText->getStripped('First loan - more cash'); ?></strong>
					</a>
				</div>
			</div>
		</div>
		<div class="inner male page-swiper man-bg">
			<div class="my-first-loan-counter">
				<div class="number-wrapper">
					<div class="point-with-number" data-th="1">
						1
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="2">
						2
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="3">
						3
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="4">
						4
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="5">
						5
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
			
			</div>
		</div>
		<div class="inner female page-swiper woman-bg">
			<div class="my-first-loan-counter">
				<div class="number-wrapper">
					<div class="point-with-number" data-th="1">
						1
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="2">
						2
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="3">
						3
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="4">
						4
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="5">
						5
					</div>
				</div>
				<div class="number-wrapper">
					<div class="point-with-number" data-th="6">
						6
					</div>
				</div>
			</div>
			<div class="swiper-wrapper">
			
			</div>
		</div>
	</div>

	<div class="scroller-templates">
		<div class="scroller-template first">
			<section class="my-first-loan">
				<div class="container">
					<h1 class="normal text-center"><?php echo $this->StaticText->getStripped('First loan - My'); ?> <strong class="color-red"><?php echo $this->StaticText->getStripped('First loan - first loan'); ?></strong></h1>
					<h2 class="text-center"><?php echo $this->StaticText->getStripped('First loan - What do you dream about?'); ?></h2>
					<div class="row">
						<div class="col-xs-6 text-center">
							<div class="woman-wrapper" data-gender="woman" data-scroll-to="[data-index=1]" data-set-active="woman">
								<a class="tag-green tag-woman btn green" title="<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?>">
									<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><strong><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?></strong>
								</a>
								<a class="woman hidden-xs" title="<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?>">
									<img src="/img/get-loan/loans-woman.png" alt=""/>
								</a>
							</div>
						</div>
						<div class="col-xs-6 text-center">
							<div class="man-wrapper" data-gender="man" data-scroll-to="[data-index=1]" data-set-active="man">
								<a class="tag-green tag-man btn green" title="<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><?php echo $this->StaticText->getStripped('First loan - more cash'); ?>">
									<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><strong><?php echo $this->StaticText->getStripped('First loan - more cash'); ?></strong>
								</a>
								<a class="man hidden-xs" title="<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><?php echo $this->StaticText->getStripped('First loan - more cash'); ?>">
									<img src="/img/get-loan/loans-man.png" alt=""/>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="scroller-template steps">
			<section class="my-first-loan">
				<div class="container">
					<div class="row sm-top-30">
						<div class="col-lg-10 col-lg-offset-1">
							<div class="col-md-12">
								<div class="row step step1">
									<div class="arrow-first-loan glyphicon glyphicon-arrow-down" data-arrow-next-step title="">
									</div>
									<div class="icon" data-icon></div>
									<section class="col-sm-4 text-box active" data-set-classes-primary>
										<div class="point-with-nuber">
											<div data-step-number-primary></div>
										</div>
										<h1 class="smaller normal header-primary"><div data-header-primary></div></h1>
										<div class="description description-primary"><div data-description-primary></div></div>
										<a class="btn red default" href="#" data-next-step>
											<?php echo $this->StaticText->getStripped('First loan - Next step'); ?>
										</a>
									</section>
									<img src="/img/get-loan/loans-woman.png" alt="" class="persone hidden-xs" data-person-img>
								</div>

								<div class="big-arrow"  data-set-direction></div>
								<div class="row step step2 reverse sm-top-70 hidden-xs">
									<section class="col-sm-4 text-box"  data-set-classes-secondary>
										<!--<div class="point-with-nuber">
											<div data-step-number-secondary></div>
										</div>-->
										<h1 class="smaller normal header-secondary"><div data-header-secondary></div></h1>
										<div class="description description-secondary"><div data-description-secondary></div></div>
									</section>
									<div class="both"></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="scroller-template last">
			<section class="my-first-loan">
				<div class="container">

					<div class="row sm-top-30">
						<div class="col-lg-10 col-lg-offset-1">
							<div class="col-md-12">
								<div class="row step step1">
									<section class="animate col-sm-4 col-sm-offset-1 text-box active col-xs-10 col-xs-offset-2 final">
										<div class="point-with-nuber ">
											<div data-step-number-primary></div>
										</div>
										<h1 class="smaller normal header-primary"><div data-header-primary></div></h1>
										
										<div class="description description-primary"><div data-description-primary></div></div>
									</section>
									<img src="/img/get-loan/loans-woman.png" alt="" class="persone" data-person-img/>
									<div class=" col-sm-4 col-sm-offset-3 change-grid">
										<section class="box bg-light-gray animate">
											<h1 class="smaller normal"><?php echo $this->StaticText->getStripped('Leave contact box - Get'); ?> <strong class="color-red" data-box-header><?php echo $this->StaticText->getStripped('Leave contact box - a loan now'); ?></strong></h1>
											<b class="color-light-gray"><?php echo $this->StaticText->getStripped('Leave contact box - Call us'); ?></b>
											<strong class="color-green small block bold" data-phone><a href="tel:<?php echo $this->StaticText->getStripped('My First Loan - woman - phone - link'); ?>" class="tel"><?php echo $this->StaticText->getStripped('My First Loan - woman - phone - text'); ?></a></strong>
											<div class="row mt10"><div class="text-line"><?php echo $this->StaticText->getStripped('Leave contact box - OR'); ?></div></div>
											<a class="btn red default bold mt20 btn-leave" href="#" title="<?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?>"><?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?></a>
											<small class="block mt10"><?php echo $this->StaticText->getStripped('Contact us - and we will contact you'); ?></small>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>


<div class="for-smaller-then-tablet">
	<section class="my-first-loan">
		<div class="container">
			<h1 class="normal text-center"><?php echo $this->StaticText->getStripped('First loan - My'); ?> <strong class="color-red"><?php echo $this->StaticText->getStripped('First loan - first loan'); ?></strong></h1>
			<div class="row">
				<div class="col-xs-12 btns-wrapper text-center">
					<div class="row">
						<div class="col-xs-6">
							<a class="tag-gray tag-woman btn gray active" data-gender="woman" title="<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?>">
								<?php echo $this->StaticText->getStripped('First loan - I dream about '); ?><strong><?php echo $this->StaticText->getStripped('First loan - going shopping'); ?></strong>
							</a>
						</div>
						<div class="col-xs-6">
							<a class="tag-gray tag-man  btn gray" data-gender="man" title="<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><?php echo $this->StaticText->getStripped('First loan - more cash'); ?>">
								<?php echo $this->StaticText->getStripped('First loan - I dream about having '); ?><strong><?php echo $this->StaticText->getStripped('First loan - more cash'); ?></strong>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row sm-top-30 mobile-item">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									1
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									2
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									3
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									4
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									5
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item mobile-item-last">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									6
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-30 mobile-item" style="display: none;">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="col-md-12">
						<div class="row step step1">
							<section class="text-box active col-xs-10 col-xs-offset-2">
								<div class="point-with-nuber">
									7
								</div>
								<h1 class="smaller normal header-primary"></h1>
								<div class="description description-primary"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="row sm-top-20">
				<div class="col-sm-12">
					<section class="box bg-light-gray">
						<h1 class="smaller normal"><?php echo $this->StaticText->getStripped('Leave contact box - Get'); ?> <strong class="color-red" data-box-header><?php echo $this->StaticText->getStripped('Leave contact box - a loan now'); ?></strong></h1>
						<b class="color-light-gray"><?php echo $this->StaticText->getStripped('Leave contact box - Call us'); ?></b>
						<strong class="color-green small block bold" data-phone><a href="tel:<?php echo $this->StaticText->getStripped('My First Loan - woman - phone - link'); ?>" class="tel"><?php echo $this->StaticText->getStripped('My First Loan - woman - phone - text'); ?></a></strong>
						<div class="row mt10"><div class="text-line"><?php echo $this->StaticText->getStripped('Leave contact box - OR'); ?></div></div>
						<a class="btn red default bold mt20 btn-leave" href="#" data-show=".leaveForm" title="<?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?>"><?php echo $this->StaticText->getStripped('Leave contact box - Leave contact'); ?></a>
						<small class="block mt10"><?php echo $this->StaticText->getStripped('Contact us - and we will contact you'); ?></small>
					</section>
				</div>
				<div class="both"></div>
				<div class="col-sm-12">
				</div>
				<div class="both"></div>
			</div>

		</div>
	</section>
</div>

<div class="container" id="leave-form-wrap">
	<section class="box bg-light-gray form mt40 leaveForm col-lg-10 col-lg-offset-1">
		<div class='big-arrow right-to-left-small'></div>
		<p class="color-light-gray biggerInForm"><strong><?php echo $this->StaticText->getStripped('Contact us - Leave us your contact information'); ?></strong> <?php echo $this->StaticText->getStripped('Contact us - and we will get back to you soon as possible'); ?></p>
		<?php echo $this->element('fbConnect'); ?>
		<div class="ajaxLeaveForm">
			<?php echo $this->element('leaveForm'); ?>
		</div>

	</section>
</div>

<div class="hide" data-tel-man><a href="tel:<?php echo $this->StaticText->getStripped('My First Loan - man - phone - link'); ?>" class="tel"><?php echo $this->StaticText->getStripped('My First Loan - man - phone - text'); ?></a></div>
<div class="hide" data-tel-woman><a href="tel:<?php echo $this->StaticText->getStripped('My First Loan - woman - phone - link'); ?>" class="tel"><?php echo $this->StaticText->getStripped('My First Loan - woman - phone - text'); ?></a></div>

<div class="hide" data-box-header-man><?php echo $this->StaticText->getStripped('Leave contact box - cash now'); ?></div>
<div class="hide" data-box-header-woman><?php echo $this->StaticText->getStripped('Leave contact box - a loan now'); ?></div>

<script type="text/javascript" src="/js/firstLoan.js"></script>
<script type="text/javascript" src="/js/firstLoanCommon.js">
	
</script>
