var FirstLoan = function(options){
	this.lastScrollTop = $(window).scrollTop();
	this.lastTouchY = 0;
	this.selector = options.selector;
	this.dom = $(options.selector);
	this.texts = options.texts;
	this.template = $(options.template);
	this.gender = options.gender;
	this.swiper = null;
	this.atEnd = false;
	this.preventScrolling = false;
	this.pages = this.dom.find(options.pagerSelector);
	this.slideClass = options.slideClass;
	this.swiperSuspended = false;
	this.transitionSpeed = options.speed || 500;
	this.stepCountTotal = options.stepCountTotal;
}

FirstLoan.animSpeed = 700;
FirstLoan.commonElems = $(".swiper-common");

FirstLoan.prototype.handleButtons = function(){
	var firstLoan = this;
	$(".btn-leave").click(function(e){
		e.preventDefault();
		$(".leaveForm").slideDown();
		showFooter();
		firstLoan.suspend();
		$('body, html').animate({
			scrollTop: $(".leaveForm").offset().top
		}, 500);
	});
}

FirstLoan.prototype.showPages = function(){
	this.pages.fadeIn(FirstLoan.animSpeed);
}

FirstLoan.prototype.hidePages = function(){
	this.pages.fadeOut(FirstLoan.animSpeed);
}

FirstLoan.prototype.highlightPageNum = function(num){
	num -= 1;
	if(num < 0) num = 0;
	var numElem = this.pages.find(".number-wrapper").eq(num);
	this.pages.find("[data-th]").removeClass("active");
	numElem.find("[data-th]").addClass("active");
}

FirstLoan.prototype.prevSlide = function(){
	if(!this.preventScrolling){
		this.swiper.swipePrev();
	}
}

FirstLoan.prototype.nextSlide = function(){
	if(!this.preventScrolling){
		this.swiper.swipeNext();
	}
}

FirstLoan.prototype.goToSlide = function(index){
	if(index > this.stepCountTotal){
		index = this.stepCountTotal;
	}
	//if(!this.preventScrolling){
		this.swiper.swipeTo(index);
	//}
}

FirstLoan.prototype.suspend = function(){
	var firstLoan = this;
	firstLoan.sliderSuspended = true;
}

FirstLoan.prototype.wake = function(){
	var firstLoan = this;
	firstLoan.sliderSuspended = false;
}

FirstLoan.prototype.showCommons = function(){
	FirstLoan.commonElems.stop().animate({
		opacity: 1
	},FirstLoan.animSpeed);
}

FirstLoan.prototype.hideCommons = function(){
	FirstLoan.commonElems.stop().animate({
		opacity: 0
	},FirstLoan.animSpeed);
}

FirstLoan.prototype.handlePagerClicks = function(){
	var firstLoan = this;
	this.pages.find(".number-wrapper").click(function(e){
		var clicked = $(this);
		var target = clicked.find("[data-th]").data("th");
		firstLoan.goToSlide(target);
	});
}

FirstLoan.prototype.setSlideOpacity = function(el){
	var firstLoan = this;
	var screenPos = el[0].getBoundingClientRect();
	var navHeight = $(".navbar").height();
	var top = screenPos.top;
	var bottom = screenPos.bottom - navHeight*2;
	var viewportHeight = $(window).height() - navHeight;
	var centerDistance = Math.abs((viewportHeight - top) - bottom);
	var newOpacity =  1 - ((centerDistance / viewportHeight));
	
	el.css("opacity", newOpacity);
}

FirstLoan.prototype.setSlideToFullOpacity = function(el){
	var firstLoan = this;
	el.animate({
		opacity: 1
	}, FirstLoan.animSpeed);
}

FirstLoan.prototype.findDomHeight = function(){
	var firstLoan = this;
	var slides = this.dom.find("."+this.slideClass);
	var maxHeight = 0;
	slides.each(function(){
		var slide = $(this);
		if(slide.height() > maxHeight){
			maxHeight = slide.height();
		}
	});
}

FirstLoan.prototype.fillTexts = function(element, number, content){
	var num = element.find("[data-step-number-primary]");
	var heading = element.find("[data-header-primary]");
	var desc = element.find("[data-description-primary]");
	var icon = element.find("[data-icon]");
	var box = element.find("[data-set-classes-primary]");
	var arrow = element.find("[data-arrow-next-step]");
	var img = element.find("[data-person-img]");
	
	num.text(number);
	heading.text(content.h1[this.gender]);
	desc.text(content.p[this.gender]);
	
	img.attr("src",content.image[this.gender]);
	if(content.imageOffset != undefined && content.imageOffset[this.gender] != undefined){
		img.css("margin-left", content.imageOffset[this.gender] + "px");
	}
	if(content.arrowOffset != undefined && content.arrowOffset[this.gender] != undefined){
		arrow.css("margin-left", content.arrowOffset[this.gender] + "px");
	}
	
	if(content.textPosition == 'left'){
		box.addClass("col-sm-offset-1");
		arrow.addClass("arrow-right");
		img.addClass("persone-right");
	} else {
		box.addClass("col-sm-offset-8");
		arrow.addClass("arrow-left");
		img.addClass("persone-left");
	}
	
	/*if(content.icon[this.gender]  != ""){
		var iconString = content.icon[this.gender].substring(0, content.icon[this.gender].length - 4);
		icon.removeClass("salesman");
		icon.addClass(iconString);
		icon.addClass("icon-" + content.icon.position);
	}*/
}	

FirstLoan.prototype.prepareDom = function(){
	var firstLoan = this;
	
	var intro = $(".scroller-templates .scroller-template.first").clone();
	intro.addClass(firstLoan.slideClass);
	firstLoan.dom.find(".swiper-wrapper").append(intro);
	
	var lastKey = firstLoan.stepCountTotal;
	
	$.each(this.texts, function(key, value){
		if(key >= lastKey) return;
		var copy = firstLoan.template.clone();
		var container = copy.find('.my-first-loan');
		firstLoan.fillTexts(copy, key, value);
		copy.addClass(firstLoan.slideClass);
		
		if(value.textPosition == 'right'){
			container.append("<div class='big-arrow right-to-left'></div>");
		} else {
			container.append("<div class='big-arrow left-to-right'></div>");
		}
		
		
		firstLoan.dom.find(".swiper-wrapper").append(copy);
	});
	
	var finish = $(".scroller-templates .scroller-template.last").clone();
	firstLoan.fillTexts(finish, lastKey, firstLoan.texts[lastKey]);
	finish.addClass(firstLoan.slideClass);
	firstLoan.dom.find(".swiper-wrapper").append(finish);
	
	var maxH = $(window).innerHeight() - $(".navbar").height() + "px";
	
	firstLoan.dom.css("max-height", maxH);
	firstLoan.dom.height(firstLoan.findDomHeight());
	FirstLoan.commonElems.css("top", $(".navbar").height() + "px");
	FirstLoan.commonElems.css({opacity: 0});
}

FirstLoan.prototype.prepareMobileTexts = function(){
	var firstLoan = this;
	var mobileElems = $(".mobile-item");
	$.each(mobileElems, function(key, itemstring){
		var item = $(itemstring);
		var heading = item.find(".header-primary");
		var desc = item.find(".description");
		heading.text(firstLoan.texts[key+1].h1[firstLoan.gender]);
		desc.text(firstLoan.texts[key+1].p[firstLoan.gender]);
	});
}

FirstLoan.prototype.updatePager = function(){
	var firstLoan = this;
	var active = firstLoan.swiper.activeIndex;
	firstLoan.highlightPageNum(active);
	
}

FirstLoan.prototype.handleScroll = function(event){
	var currentScrollTop = $(window).scrollTop();
	if (currentScrollTop > this.lastScrollTop){
    	//this.nextSlide();
	} else {
		//this.prevSlide();
	}
	this.lastScrollTop = currentScrollTop;
	if (currentScrollTop == 0) {
		hideFooter();
		this.wake();
	}
}

FirstLoan.prototype.handleTouch = function(){
	var firstLoan = this;
	var swiper = this.swiper;
	var lastSlide = firstLoan.stepCountTotal;
	
	$("." + this.slideClass).bind('touchstart touchmove touchend', function(event){
		if(firstLoan.sliderSuspended){
			event.stopPropagation();
		}
	});
	/*$("." + this.slideClass).bind('touchmove', function(event){
		
	});*/
	
	$("." + this.slideClass).bind('touchstart', function(event){
		var lastSlide = firstLoan.stepCountTotal;
		if(lastSlide == swiper.activeIndex){
				
		}
	})
}

FirstLoan.prototype.slideChangeStart = function(swiper){
	var firstLoan = this;
	var last = firstLoan.stepCountsTotal + 1;
	var active = swiper.activeIndex;
	
	firstLoan.highlightPageNum(active);
	
	if (active > 0) {
		firstLoan.dom.addClass(firstLoan.gender + '-bg');
	}
	if(firstLoan.swiper.activeIndex == 0) {
		firstLoan.hideCommons();
		firstLoan.hidePages();
	} else {
		firstLoan.showCommons();
		firstLoan.showPages();
	}
}

FirstLoan.prototype.slideChangeEnd = function(swiper){
	var firstLoan = this;
	var active = swiper.activeIndex;
	var last = firstLoan.stepCountTotal + 1;
	var activeElem = swiper.activeSlide();

	firstLoan.highlightPageNum(active);
	if(active == last -1){
		firstLoan.atEnd = true;
		this.suspend();
		showFooter();
	}
	
}

FirstLoan.prototype.init = function(){
	var firstLoan = this;
	$(window).scroll(firstLoan.handleScroll.bind(firstLoan));
	firstLoan.prepareDom();
	
	firstLoan.swiper = new Swiper(firstLoan.selector, {
	mode: 'vertical',
	onSlideChangeStart: firstLoan.slideChangeStart.bind(firstLoan),
	onSlideChangeEnd: firstLoan.slideChangeEnd.bind(firstLoan),
	speed: firstLoan.transitionSpeed,
	watchActiveIndex: true
	});
	firstLoan.handlePagerClicks();
	firstLoan.handleButtons();
	firstLoan.handleTouch();
	Navbar.prototype.preventChanges = true;

}
$(document).ready(function(){
	var firstLoanPage = $(".first-loan");
	if(firstLoanPage.length) {
		$(".or").addClass("hidden");
		$(".box-part-leave").addClass("hidden");
		$(".first-loan-leave-form").addClass("hidden");
	}
	$('.btn-cash').on("click", function(e){
		e.preventDefault();
		$(".or").removeClass("hidden");
		$(".box-part-leave").removeClass("hidden");
		$(".first-loan-leave-form").removeClass("hidden");

	})
	$('.btn-commodities').on("click", function(e){
		e.preventDefault();
		$(".or").addClass("hidden");
		$(".box-part-leave").addClass("hidden");
		$(".first-loan-leave-form").addClass("hidden");

	})
});
