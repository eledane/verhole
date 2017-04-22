<?php
$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
if ($language !== 'en') {
	$language = 'zh';
}

if( $language == 'zh'){
   $site_title = ' - ' . '捷信消费金融';
}else{
   $site_title = ' | ' .'Home Credit China'; 
}

function fmp($a, $b)
{
	return $a["ordering"] - $b["ordering"];
}
?><!DOCTYPE html>
<html lang="<?php echo $language; ?>" class="no-js <?php echo $language; ?>">
<head>
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<?php
	$ttl = $title_for_layout;
	if (!empty($pageData['title_for_search_engine'])) {
		//$ttl = $pageData['title_for_search_engine'] . Configure::read('Website.title_delimiter') . Configure::read('Website.title');
             if ($this->request->here == '/' || $this->request->here == '/homepage' || $this->request->here == '/en' || $this->request->here == '/en/homepage') {

		$ttl = $pageData['title_for_search_engine'];

              }else{

		$ttl = $pageData['title_for_search_engine'] . $site_title;
               }
	}
	?>
	<meta charset="utf-8">
	<?php
	if (Configure::read('debug') != '0') {
		?>
		<script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/vendor/numeral/numeral.js"></script>
		<script type="text/javascript" src="/vendor/jquery-waypoints/waypoints.min.js"></script>
		<script type="text/javascript" src="/vendor/respond/dest/respond.min.js"></script>
		<script type="text/javascript" src="/vendor/modernizr/modernizr.js"></script>
		<script type="text/javascript" src="/vendor/jquery-ui/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/vendor/watch/watch.js"></script>
		<script type="text/javascript" src="/vendor/headroom.js/dist/headroom.min.js"></script>
		<script type="text/javascript" src="/vendor/headroom.js/dist/jQuery.headroom.min.js"></script>
		<script type="text/javascript" src="/vendor/jquery.ui.touch-punch.dk/jquery.ui.touch-punch.dk.js"></script>
		<script type="text/javascript" src="/vendor/bootstrap-3/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/vendor/fastclick/lib/fastclick.js"></script>
		<script type="text/javascript" src="/vendor/idangerous-swiper/src/idangerous.swiper.js"></script>
		<script type="text/javascript" src="/vendor/slick-carousel/slick/slick.min.js"></script>
		<script type="text/javascript" src="/js/Countdown.js"></script>
		<script type="text/javascript" src="/js/idangerous.swiper.plugins.min.js"></script>
		<script src="/js/faq_section.js"></script>
		<script src="/js/firstLoan.js"></script>
		<script src="/js/carousel.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/markerclusterer.js"></script>
		<script src="/js/plugins.js"></script>
		<script src="/js/Slider.js"></script>
		<script src="/js/selectProvinceCity.js"></script>
		<script src="/js/jquery.cookie.js"></script>
		<script src="/js/jquery.ui.labeledslider.js"></script>
		<script src="/js/jquery.event.move.js"></script>
		<script src="/js/jquery.event.swipe.js"></script>
		<script src="/js/hearth-storm.js"></script>
		<script src="/js/oneTimeSurvey.js"></script>
		<script src="/js/baidu/api.js"></script>
		<script src="/js/baidu/icon-text-overlay.js"></script>
		<script src="/js/baidu/clusterer.js"></script>
		<script src="/js/bmap.js"></script>
	<?php
	} else {
	?>
		<script type="text/javascript"
				src="/js/build/script.min.js?<?php echo filemtime(WWW_ROOT . "/js/build/script.min.js"); ?>"></script>
		<script src="/js/baidu/api.js"></script>
		<script src="/js/baidu/icon-text-overlay.js"></script>
		<script src="/js/baidu/clusterer.js"></script>
		<script src="/js/bmap.js"></script>
		<?php
	}
	?>

	<title>
		<?php echo $ttl; ?>
	</title>
	<?php //echo $this->Html->meta('icon');	?>

	<?php
	if (!empty($pageData['modulesData']['detail'])) {
		$articleDescription = $pageData['modulesData']['detail']['Article']['perex'];
		$metaDescription = strip_tags($articleDescription);
		$metaDescription = str_replace(array("\r", "\n"), "", $metaDescription);
		$metaDescription = String::truncate(
			$metaDescription,
			160,
			array(
				'ellipsis' => '',
				'exact' => false,
				'html' => true
			)
		);
	} else {
		$metaDescription = $pageData['description'];
	};
	if (!empty($pageData['modulesData']['promotion'])) {
		$metaDescription = $pageData['modulesData']['promotion']['Promotion']['meta_description'];
	}
	?>

	<meta name="description" content="<?php echo $metaDescription; ?>">
	<meta name="keywords" content="<?php echo h($pageData['keywords']); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Cache-control" content="public">

	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php
	if (Configure::read('debug') != '0') {
		?>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/vendor/slick-carousel/slick/slick.css">
		<?php
	} else {
		?>
		<link rel="stylesheet" href="/css/style.min.css?<?php echo filemtime(WWW_ROOT . "/css/style.min.css"); ?>">
		<link rel="stylesheet" href="/css/appblock.css?<?php echo filemtime(WWW_ROOT . "/css/appblock.css"); ?>">
		<link rel="stylesheet" href="/css/nvas.css?<?php echo filemtime(WWW_ROOT . "/css/nvas.css"); ?>"> 
	      <?php  }	?>
	      <?php 
               if ($this->request->here == '/' || $this->request->here == '/homepage' || $this->request->here == '/en' || $this->request->here == '/en/homepage') { ?>
		<link rel="stylesheet" href="/css/home-style.css?<?php echo filemtime(WWW_ROOT . "/css/home-style.css"); ?>"> 
		<?php
	}
	?>

<?php
if (Configure::read('debug') == 0) {
?>
	<script src="https://analytics.homecredit.cn/track/track.js" type="text/javascript"></script>
	<!-- CNZZ -->
	<?php
	if($pageData['template'] !== 'promotion.ctp') {
	?>
<!--
	<script
		type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cspan id='cnzz_stat_icon_1252889685'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1252889685' type='text/javascript'%3E%3C/script%3E"));</script>
-->
	<?php
		} else {
			if($pageData['modulesData']['promotion']['Promotion']['winter_promotion'] === true) {
	?>
<!-- 		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1252889685'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1252889685%26l%3D3' type='text/javascript'%3E%3C/script%3E"));</script> -->
		<?php //require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1252889685).'" width="0" height="0"/>';?>
	<?php
			} else {
	?>
<!--
	<script
		type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cspan id='cnzz_stat_icon_1252889685'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1252889685' type='text/javascript'%3E%3C/script%3E"));</script>
-->
	<?php
			}
		}
	?>
<?php
}
?>
<?php
if (Configure::read('debug') == 0) {
?>
<script>
	var _hmt = _hmt || [];
	(function () {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?4b2b8036d233cfbe290c0ef3cc0dfcea";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<!--
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-65950413-1', 'auto');
	ga('send', 'pageview');
</script>
-->
<script>
    (function(a, e, f, g, b, c, d) {a.ClickiTrackerName = b;
        a[b] = a[b] || function() {(a[b].queue = a[b].queue || []).push(arguments)};
        a[b].start = +new Date; c = e.createElement(f); d = e.getElementsByTagName(f)[0];
        c.async = 1; c.src = g; d.parentNode.insertBefore(c, d)
    })(window, document, 'script', ('https:' == document.location.protocol ? 'https://stm-collect' : 'http://stm-cdn') + '.cn.miaozhen.com/clicki.min.js', 'stm_clicki');
    stm_clicki('create', 'dc-259', 'auto');
    stm_clicki('send', 'pageview');
</script>
<script>
    stm_clicki('require','heatmap', ('https:'==document.location.protocol?'https://stm-collect':'http://stm-cdn')+'.cn.miaozhen.com/plugins/heatmap.js');
    stm_clicki('heatmap:on',5);
</script>
<?php
}
?>
</head>
<body>
<?php
if (Configure::read('debug') == 0) {
?>
<img src="https://analytics.homecredit.cn/track/image.php" height="0" width="0" style=" display:none" alt=""/>
<?php
}
echo $this->element('preview');
?>

<?php echo $this->element('appFloat'); ?>
<header class="navbar appfloat-header">
	<nav>
		<div class="nav-top">
			<div class="container">
				<div class="row">
					<?php
					echo $this->element('topMenu');
					echo $this->element('langsMenu');
					?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="nav-main">
			<div class="background-holder visible-xs visible-sm"></div>
			<div class="container">
				<div class="row">
					<div class="nav-wrapper">
						<div class="navigation-top-wrapper">
							<?php //echo $this->element('productsMenu'); ?>
							<?php echo $this->element('topMenu'); ?>
							<?php /* echo $this->element('showMoreMenu'); */ ?>
							<?php echo $this->element('langsMenu'); ?>
					<div class="header-menu-hotline" style="font-size: 16px">
					<span class="img-wrapper"><img src="/img/appblock/tel-icon.jpeg" style="width: 5%; margin-bottom: 10px; margin-right: 10px"><?php echo $this->StaticText->getStripped('hotline-for-client'); ?></span>
						</div>
					<div  class="header-menu-hotline" style="font-size: 16px">
					<span class="img-wrapper"><img src="/img/appblock/tel-icon.jpeg" style="width: 5%; margin-right: 10px"><?php echo $this->StaticText->getStripped('hotline-for-potential-client'); ?></span>
						</div>
						</div>
					</div>
					<?php
					echo $this->Html->link(
						'<img src="/img/verhole/logo.png" alt="Home Credit"/>',
						array(
							'pageurl' => '/'
						),
						array(
							'class' => 'page-logo',
							'title' => $this->StaticText->getStripped('Logo - title'),
							'escape' => false
						));
					?>
					<a href="tel:<?php echo $this->StaticText->getStripped('Top menu - Phone'); ?>"
					   id="call-us" onclick="stm_clicki('send','event','callus','mobile-navbar');"><?php echo $this->StaticText->getStripped('Top menu - Call now'); ?><i></i></a>
					<button class="navbar-toggle" onclick="stm_clicki('send','event','menus','mobile-menus');">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php echo $this->element('loansMenu'); ?>
				</div>
			</div>

		</div>
	</nav>
</header>
<?php
echo $this->fetch('content');
if( $this->request->here == '/walk-in-cash-loan-social' || $this->request->here == '/en/walk-in-cash-loan-social'  ){
	echo $this->element('footerMenuSocial');
}else{
	echo $this->element('footerMenu');
}
?>

<script>
	<?php $currencyFormats = Configure::read('Currency.currency_formats'); ?>
	var defaultThousandSeparator = "<?php echo $currencyFormats[Configure::read('Currency.currency_format_default')]['thousands']?>";
</script>
<script>
	var BASE_URL = "<?php echo Router::fullBaseUrl().'/';?>";
</script>
<script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-245511-0']);

_mvq.push(['$logConversion']);
(function() {
var mvl = document.createElement('script');
mvl.type = 'text/javascript'; mvl.async = true;
mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mvl, s);
})();

</script>
<?php echo $this->element('one-time-survey'); ?>
</body>
</html>
