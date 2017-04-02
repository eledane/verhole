<?php
$language = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages'));
if ($language !== 'en') {
	$language = 'vi';
}
?><!DOCTYPE html>
<html lang="<?php echo $language; ?>" class="no-js <?php echo $language; ?>">
<head>
    <?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<?php 
	$ttl = $title_for_layout;
	if(!empty($pageData['title_for_search_engine'])) {
		$ttl = $pageData['title_for_search_engine']. Configure::read('Website.title_delimiter') . Configure::read('Website.title');
	}
	?>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="fWaOVBvMg2ECeYUgZ4n-IRE66OpBKAI6rCwyL26yRxM" />
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
    <?php
        if(Configure::read('debug') != '0') {
    ?>
        <script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/numeral/numeral.js"></script>
        <script type="text/javascript" src="/vendor/jquery-waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="/vendor/respond/dest/respond.min.js"></script>
        <script type="text/javascript" src="/vendor/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="/vendor/jqueryui/jquery-ui.js"></script>
        <script type="text/javascript" src="/vendor/watch/watch.js"></script>
        <script type="text/javascript" src="/vendor/jquery.ui.touch-punch.dk/jquery.ui.touch-punch.dk.js"></script>
        <script type="text/javascript" src="/vendor/bootstrap-3/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/vendor/fastclick/lib/fastclick.js"></script>
        <script type="text/javascript" defer src="/vendor/idangerous-swiper/src/idangerous.swiper.js"></script>
        <script type="text/javascript" src="/js/Countdown.js"></script>
        <script src="/js/fbConnect.js"></script>
        <script src="/js/firstLoan.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/markerclusterer.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/Slider.js"></script>
        <script src="/js/map.js"></script>
    <?php
        } else {
    ?>
	   <script type="text/javascript" src="/js/build/script.min.js"></script>
    <?php
        }
    ?>
	
	<title>
		<?php echo $ttl; ?>
	</title>
	<?php //echo $this->Html->meta('icon');	?>

    <meta property="fb:app_id" content="778755058839315" />
    <meta property="og:title" content="<?php echo $ttl; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.homecredit.vn/img/logo-hc-main.png" />
    <meta property="og:site_name" content="<?php echo Configure::read('Website.title'); ?>" />

    <?php
        if(!empty($pageData['modulesData']['detail'])) {
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
        if(!empty($pageData['modulesData']['promotion'])) {
            $metaDescription = $pageData['modulesData']['promotion']['Promotion']['meta_description'];
        }
    ?>
    <meta property="og:description" content="<?php echo $metaDescription; ?>" />

    <meta name="description" content="<?php echo $metaDescription; ?>">
	<meta name="keywords" content="<?php echo h($pageData['keywords']); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="/css/normalize.css">
    <?php
        if(Configure::read('debug') != '0') {
    ?>
    <link rel="stylesheet" href="/css/style.css">
    <?php
        } else {
    ?>
    <link rel="stylesheet" href="/css/style.min.css">
    <?php
        }
    ?>

    
</head>
<body>
<div style='display:none;'><img height='1' width='1' style='border-style:none;' alt='' src='http://static.novanet.vn/conversion.gif?ctid=175'/></div>
<div style='width:1px;height:1px;display:none'><img src='http://static.novanet.vn/adverclient.js?code=1169'/></div>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 969698048;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/969698048/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-55135171-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s[removed].insertBefore(ga, s);
})();
</script>
<header class="navbar">
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
            <div class="container">
                <div class="row">
                    
                    <div class="nav-wrapper">
						<?php echo $this->element('productsMenu'); ?>
                        <?php echo $this->element('topMenu');?>
						<?php /* echo $this->element('showMoreMenu'); */ ?>
						<?php echo $this->element('langsMenu'); ?>
                    </div>
					<?php
					echo $this->Html->link('<img src="/img/logo-hc-main.png" alt="Home Credit"/>',array(
						'pageurl' => '/'
					),array(
						'class'=>'page-logo',
						'title' => 'Home Credit Vietnam',
						'escape' => false
					));
					?>
                    <button class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

	<?php
	echo $this->fetch('content');
	echo $this->element('footerMenu');
	?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55135171-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Start of Zopim Live Chat Script--->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2cJZgMFnWf0Le6Ho0lvHmeP5WQoYer00';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<script type="text/javascript">
<?php $currencyFormats = Configure::read('Currency.currency_formats'); ?>
	var defaultThousandSeparator = "<?php echo $currencyFormats[Configure::read('Currency.currency_format_default')]['thousands']?>";
</script>


<!--End of Zopim Live Chat Script--->
<script>
	$zopim(function() {
		$zopim.livechat.setLanguage('<?php echo $language; ?>');
	});
</script>
<!-- -->

</body>
</html>
