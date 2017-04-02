$(document).ready(function () {
		var optionsMale = {
			selector: ".scroller-container .male.inner.page-swiper",
			template: ".scroller-templates .scroller-template.steps",
			pagerSelector: ".my-first-loan-counter",
			slideClass: "swiper-slide",
			texts: texts,
			stepCountTotal: 5,
			gender: 'man'
		}
		var optionsFemale = {
			selector: ".scroller-container .female.inner.page-swiper",
			template: ".scroller-templates .scroller-template.steps",
			pagerSelector: ".my-first-loan-counter",
			slideClass: "swiper-slide",
			texts: texts,
			stepCountTotal: 6,
			gender: 'woman'
		}
		var activeSwiper = {};
		var footerVisible = false;
		var prevEvent = null;
	 	var scrollPrevented = false;
	
		hideFooter = function(){
			var firstLoan = activeSwiper;
			firstLoan.preventScrolling = true;
			$('footer, .leaveForm').slideUp(FirstLoan.animSpeed, function(){
				footerVisible = false;
				if(firstLoan.swiper.activeIndex != 0){
					firstLoan.showPages();
				}
				firstLoan.wake();
				setTimeout(function () {
					firstLoan.preventScrolling = false;
				}, firstLoan.transitionSpeed);	
			});
		}

		showFooter = function(){
			var firstLoan = activeSwiper;
			if(!footerVisible){
				firstLoan.preventScolling = true;
				$("footer").show();
				//$(".leaveForm").show();
				firstLoan.hidePages();
				footerVisible = true;
				setTimeout(function () {
					firstLoan.preventScrolling = false;
					//firstLoan.wake();
				}, firstLoan.transitionSpeed);
			}
		}
		
		function preventScrollWithTimeout(){
			scrollPrevented = true;
			setTimeout(function(){
				scrollPrevented = false;
			}, 1500);
		}
	
		function mouseWheelUp(){
			var firstLoan = activeSwiper;
			if(!footerVisible){
				firstLoan.prevSlide();
				preventScrollWithTimeout();
			}
			if ($(window).scrollTop() == 0){
				hideFooter();	
			}
		}

		function mouseWheelDown(){
			var firstLoan = activeSwiper;
			if(firstLoan.swiper.activeIndex == firstLoan.swiper.slides.length - 1){
				showFooter();
			} else {
				firstLoan.nextSlide();
				preventScrollWithTimeout();
			}
		}

		function handleMouseWheel(){
			$('body').on({
				'mousewheel DOMMouseScroll': function(event) {
					
					if(prevEvent == null) {
						prevEvent = event;
					}
					
					if(scrollPrevented){
						return;
					}
									
					prevEvent = event;
					
					var firstLoan = activeSwiper;
					if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
						if (event.originalEvent.detail < 0) {
							mouseWheelUp();
						} else {
							mouseWheelDown();
						}
					} else {
						if (event.originalEvent.wheelDelta / 120 > 0) {
							mouseWheelUp();
						} else {
							mouseWheelDown();
						}
					}
				}
			})
		}
	
		function handleKeyboard(){
			$(document).on('keydown', function(e){
				var firstLoan = activeSwiper;
				var currentScrollTop = $(window).scrollTop();
				if (currentScrollTop == 0 && (e.keyCode == '38' || e.keyCode == '37')) {
					firstLoan.prevSlide();
				}
				else if (e.keyCode == '40' || e.keyCode == '39' && !firstLoan.footerVisible) {
					firstLoan.nextSlide();
				}
			});
		}
		
		function genderSwitch(target, transition, callback){
			var duration = 300;
			if(!transition){
				duration = 0;
			}
			if (target == 'woman'){
				var index = activeSwiper.swiper.activeIndex;
				activeSwiper = firstLoanObjectFemale;
				firstLoanObjectMale.dom.fadeOut(duration, function(){
					//firstLoanObjectFemale.goToSlide(index);
					firstLoanObjectFemale.goToSlide(1);
					firstLoanObjectFemale.dom.fadeIn(duration, function(){
						callback();
					});
				});
				
			} else {
				var index = activeSwiper.swiper.activeIndex;
				activeSwiper = firstLoanObjectMale;
				firstLoanObjectFemale.dom.fadeOut(duration, function(){
					firstLoanObjectMale.goToSlide(1);
					firstLoanObjectMale.dom.css({
						position: 'static',
						left: "auto",
						display: 'none'
					});
					firstLoanObjectMale.dom.fadeIn(duration, function(){
						callback();
					});
				});
			}
			activeSwiper.prepareMobileTexts();
		}
		
		function opacityChangeInterval(){
			window.setInterval(function () {
				var swiper = activeSwiper.swiper;
				var firstLoan = activeSwiper;
				if(firstLoan.footerVisible || $(window).width() < 768){
					return;
				}
				var el = $(swiper.activeSlide());
				var prev = el.prev();
				var next = el.next();
				firstLoan.setSlideOpacity(el);
				if(prev.length > 0)firstLoan.setSlideOpacity(prev);
				if(next.length > 0)firstLoan.setSlideOpacity(next);
			}, 20);
		}
		
		$("footer").css({
			marginTop: "100px"
		});
		$('footer').hide();
		$('.leaveForm').hide();
		$('body').css("overflow-y", "scroll");
		
		
		firstLoanObjectFemale = new FirstLoan(optionsFemale);
		firstLoanObjectFemale.init();
		firstLoanObjectFemale.prepareMobileTexts();
		firstLoanObjectMale = new FirstLoan(optionsMale);
		firstLoanObjectMale.init();
		activeSwiper = firstLoanObjectFemale;
	
		firstLoanObjectMale.dom.css({
			position: 'absolute',
			left: "-10000px"
		});
		
		//opacityChangeInterval();
		
		firstLoanObjectFemale.hidePages();
		firstLoanObjectMale.hidePages();
		
		$(".btn[data-gender]").click(function(e){
			var clicked = $(this);
			var targetGender = clicked.data("gender");
			genderSwitch(targetGender, true, function(){
				activeSwiper.updatePager();
			});	

			$(".btn[data-gender]").removeClass("active");
			clicked.addClass("active");
			hideFooter();
			if(targetGender == 'man') {
				$(".mobile-item-last").css("display", "none");
			} else {
				$(".mobile-item-last").css("display", "block");
			}
		});
		
		$(".woman-wrapper .btn").click(function(){
			$(".btn[data-gender]").removeClass("active");
			$(".btn[data-gender=woman]").addClass("active");
			if (activeSwiper.gender == 'man'){
				genderSwitch('woman', false, function(){
					activeSwiper.goToSlide(1);
				});
			}
			activeSwiper.goToSlide(1);
		});
		
		$(".man-wrapper .btn").click(function(){
			$(".btn[data-gender]").removeClass("active");
			$(".btn[data-gender=man]").addClass("active");
			if(activeSwiper.gender == 'woman'){
				genderSwitch('man', false, function(){
					activeSwiper.goToSlide(1);
				});
			} else {
				activeSwiper.goToSlide(1);
			}
			
		});
	
		$("[data-next-step], [data-arrow-next-step]").click(function(event){
			event.preventDefault();
			activeSwiper.nextSlide();
		});
	
		handleMouseWheel();
		handleKeyboard();
	});
