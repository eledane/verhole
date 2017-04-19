           <?php  if ($this->request->here == '/' || $this->request->here == '/homepage' || $this->request->here == '/en' || $this->request->here == '/en/homepage'): ?>
		<div class="d-bottom appblock-float">
         <?php else: ?>
		<div class="d-bottom appblock-float" style="display:none">
         <?php endif;?> 
			<div class="d-main pc">
				<a href="http://app.homecreditcfc.cn/promo1/" target="_blank"><img src="<?php echo $this->webroot; ?>img/appblock/p/download_app_bottom.png" class="bottomImg"></a>
				<a href="javascript:void(0)" onclick="stm_clicki('send', 'event', 'homepagebanner', 'Click', 'closebutton');" class="d-b-close">关闭</a>
			</div>
			<div class="d-main mobile">
				<div class="bottomImg">
					<img src="<?php echo $this->webroot; ?>img/appblock/p/download_app_bottom_m1_new.jpeg" class="bottomImg1">
					<a href="" class="download-btn-m"><img src="<?php echo $this->webroot; ?>img/appblock/p/download_app_bottom_m2_new.jpeg" class="bottomImg2"></a>
				</div>
				<a href="javascript:void(0)" onclick="stm_clicki('send', 'event', 'homepagebanner', 'Click', 'closebutton');"  class="d-b-close"></a>
			</div>
		</div>	

             <?php /*   <div class="d-right">
			<ul>
				<li class="r1" style="display:none"><a href="javascript:;"></a></li>
				<li class="r2"><a href="javascript:;"></a><div class="rInfo">
           			<?php  if ($this->request->here == '/' || $this->request->here == '/homepage' || $this->request->here == '/en' || $this->request->here == '/en/homepage'): ?>
				<img src="<?php echo $this->webroot; ?>img/appblock/p/download_right_app.png">
				<?php else: ?>
				<img src="<?php echo $this->webroot; ?>img/appblock/p/download_right_app_noIndex.png">
				<?php endif; ?>
				</div></li>
				<li class="r3"><a href="javascript:;"></a><div class="rInfo"><img src="<?php echo $this->webroot; ?>img/appblock/new_download_right_wechat_share.png"></div></li>
			</ul>
		</div>

              	<div class="d-right-m-side">
		    <ul>
                 	<li class="r2">
				<a href="javascript:;" class="download-btn-m"></a>
				<div class="rInfo">
				<img src="<?php echo $this->webroot; ?>img/appblock/download_right_app.png">
				</div>
			</li>
                     </ul>	
			
		</div> */ ?>

	<div class="bigBg"></div>
	<div class="applicationForm"></div>
	
<script type="text/javascript">
		$(function(){
			
           <?php  if ($this->request->here == '/' || $this->request->here == '/homepage' || $this->request->here == '/en' || $this->request->here == '/en/homepage'): ?>
                      
			$(".d-right").animate({"width":"38px"}, 200);
   	       /*		if(sessionStorage.getItem('dbse')) {

				$(".d-bottom").hide()
		       //	$(".d-bottom").css("display", "none")
				$("header").removeClass('appfloat-header')
				$(".swiper .carousel-container").removeClass('swiper-update')
        			$(".d-right").animate({"width":"38px"}, 200)
				$(".d-right-m-side").slideDown();
			//	$(".d-right-m-side").show();
                          }
                   */
                        
                       $(".d-b-close").click(function(event) {
                    //            sessionStorage.removeItem('dbse');
                      //          sessionStorage.setItem('dbse', 1);
				$(".d-bottom").hide()
				$("header").removeClass('appfloat-header')
				$(".swiper .carousel-container").removeClass('swiper-update')
			//	$(".d-right").animate({"width":"38px"}, 200)
			//	$(".d-right-m").slideDown();
				$(".d-right-m-side").slideDown();
			});
			<?php else: ?>

				$("header").removeClass('appfloat-header')
				$(".swiper .carousel-container").removeClass('swiper-update')
				$(".d-right").animate({"width":"38px"}, 200)
				//$(".d-right-m").slideDown();
				$(".d-right-m-side").slideDown();
			<?php endif;?>

			$(".d-right").hover(function(){
				$(this).stop().animate({"width":"100px"}, 200)
			},function(){
				$(this).stop().animate({"width":"38px"}, 200)
			})

//			$(".d-right-m-side").hover(function(){
//				$(this).stop().animate({"width":"140px"}, 200)
//			},function(){
//				$(this).stop().animate({"width":"70px"}, 200)
//			})


			$(".d-right a").hover(function(){
				$(this).next(".rInfo").show()
			},function(){
				$(this).next(".rInfo").hide()
			})
			
  //                      $(".d-right-m-side a").click(function(){
  //      			$(this).addClass('on').siblings().removeClass('on')
  //      		});
//
		})

		//判断android & ios
    	var u = navigator.userAgent;
		var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
		var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端

		if(isAndroid){
			$(".download-btn-m").attr({"href":"http://apk.hiapk.com/appdown/com.hcc.app/20161102"});
		}
		if(isiOS){
			$(".download-btn-m").attr({"href":"https://itunes.apple.com/us/app/jie-xin-jin-rong/id921626073?l=zh&ls=1&mt=8"});
		}


	</script>
