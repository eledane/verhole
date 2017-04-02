var scrollSpeed = 500;
var alreadyRated = false;

function stars(){
	var stars = $(".stars:not(.rated) .rating span");
	
	stars.hover(function(){
		var target = $(this);
		var prevs = target.prevAll();
		prevs.addClass("prehover");
	}, function(){
		var target = $(this);
		var prevs = target.prevAll();
		prevs.removeClass("prehover");
		target.removeClass("prehover");
	});
	
	stars.click(starClicked);
}

function starClicked(event){
	var target = $(this);
	var link = target.data("link");
	var stars = $(".stars .rating span");
	var index = target.data("index");
	
	if (alreadyRated){
		return;	
	}
	
	$.ajax({
		url: link,
		headers: {
			'X-Requested-With': 'XMLHttpRequest'	
		}
	}).success(function(){
		stars.unbind();
		stars.removeClass("hovering");
		target.addClass("prehover");
		target.prevAll().addClass("prehover");
		alreadyRated = true;

		/*ga('send', 'event', {
			'eventCategory': 'Rating',
			'eventAction': 'Click',
			'eventLabel': index + ' stars'
		});*/

		_hmt.push(['_trackEvent','evaluation','rate']);
		_czc.push(['_trackEvent','evaluation','rate']);
		_paq.push(['trackEvent','evaluation','rate']);
		ga('send', 'event', 'evaluation', 'rate');

		$(".survey-thanks").animate({
			opacity: 1	
		}, 500);
	}).fail(function(){
		//console.log("rating error");
	});
}

$(document).ready(function(){

// 

	$.nette.init();



	function initHardAll(){

		$('form.ajax').on('submit', function(e){
			e.preventDefault();
		});

		$('.topsearchform').on('submit', function(e){
			$("#leadFormHeader").slideUp();
			e.preventDefault();
		});

		/* GA */
		$('.gaevent').off('click').on('click', function(){
			var params = {};

			params['eventCategory'] = $(this).data('gacategory');
			params['eventAction'] = $(this).data('gaaction');

			if( $(this).data('galabel') !== ""){
				params['eventLabel'] = $(this).data('galabel');
			}

			_hmt.push(['_trackEvent', params['eventCategory'],params['eventAction'],params['eventLabel']]);
			_czc.push(['_trackEvent', params['eventCategory'],params['eventAction'],params['eventLabel']]);
			_paq.push(['trackEvent', params['eventCategory'],params['eventAction'],params['eventLabel']]);

			ga('send', 'event', params);
		});

		$("#cheaper-link").on('click', function(e){
			e.preventDefault();
		});

		// bubble switcher
		/*$(".visible-toggle").off('click').on('click', function(e){
			var target = $(this).data('target');
			$(target).fadeToggle();
			e.preventDefault();
		});*/

		$(".page-scroll").on('click', function(e){
			
			var target = $(this).data("href");
			var scrollValue = $(target).offset().top - $('.navbar').height();

			$("html, body").animate({
				scrollTop: scrollValue
			}, scrollSpeed);

			e.preventDefault();
		})

		$("#close-final-form").off().on('click', function(e){
			$("#leadFormHeader").slideUp(); 
			$("#searchFormHeader input[name='shop_url']").val('');
			e.preventDefault();
		});

		var l;
		$('#frm-priceSearchHeader-searchForm-shop_url').change(function(event) {
			l.stop();
		});

		$('#priceSearchButton').on('click', function() {
			l = Ladda.create(this);

			var $input = $('#frm-priceSearchHeader-searchForm-shop_url');
			if (!($input.hasClass('has-error') || $input.val().length == 0)) {
				l.start();

				$(this).submit();
			}
		});
		

	}

	/* GA form sent */
	$.nette.ext('success', {
		success: function(payload){

			if(typeof payload.sendAnalytics != "undefined"){
				for(var i in payload.sendAnalytics){
					
					var params = {
						'eventCategory': payload.sendAnalytics[i].category,
						'eventAction': payload.sendAnalytics[i].action,
						'eventLabel': payload.sendAnalytics[i].label
					};

					_hmt.push(['_trackEvent', payload.sendAnalytics[i].category,payload.sendAnalytics[i].action,payload.sendAnalytics[i].label]);
					_czc.push(['_trackEvent', payload.sendAnalytics[i].category,payload.sendAnalytics[i].action,payload.sendAnalytics[i].label]);
					_paq.push(['trackEvent', payload.sendAnalytics[i].category,payload.sendAnalytics[i].action,payload.sendAnalytics[i].label]);

					ga('send', 'event', params);
				}
			}

			if(typeof payload.sendFacebook != "undefined"){
				for(var i in payload.sendFacebook){
					window._fbq = window._fbq || [];
					window._fbq.push(['track', payload.sendFacebook[i].pixelid, {'value':'0.00','currency':'CZK'}]);
				}
			}

			// show contact form to send lead
			if(typeof payload.showContactFormHeader != "undefined"){
				$("#leadFormHeader").slideDown(); 							// lead form
				$("#productPriceHeader .parsing-error").css('display', 'none');
				$("#productPriceHeader .price-wrapper").css('display', 'block');
				// $("#leadFormHeader").removeClass('lower');

				$("#productPriceHeader .price").text(payload.finalPrice); 	// set price
				$('#product_header').val(payload.shop);

				// With JQuery
				$("#months_header").slider({
				    ticks: [1, 2, 3],
				    ticks_labels: ['3 měsíce', '5 měsíců', '10 měsíců'],
				    ticks_snap_bounds: 1,
				    tooltip: 'hide',
				    value: 2
				});

				$("#price-per-month-2 .monthly").text( (payload.finalPrice/5) + "Kč" );

				$("#months_header").on('change', function(slideEvt){

					if(slideEvt.value.newValue == 1){
						$("#price-per-month-2 .monthly").text( Math.ceil(payload.finalPrice/3) + "Kč" );
					}

					if(slideEvt.value.newValue == 2){
						$("#price-per-month-2 .monthly").text( Math.ceil(payload.finalPrice/5) + "Kč" );
					}

					if(slideEvt.value.newValue == 3){
						$("#price-per-month-2 .monthly").text( Math.ceil(payload.finalPrice/10) + "Kč" );
					}

				});

				if(typeof payload.searchHeaderId != "undefined"){
					$("#search_id").val(payload.searchHeaderId);		// set search id
				}
			}

			// show contact form to send lead
			if(typeof payload.showContactFormFooter != "undefined"){
				$("#leadFormFooter").slideDown(); 							// lead form
				$("#priceBlockFooter").css('display', 'block');
				$(".contact-form .text-wrapper").css('display', 'block');
				$(".contact-form .parsing-error").css('display', 'none');
				$("#sliderBlockFooter").css('display', 'block');

				$("#try-it .price").text(payload.finalPrice + " Kč"); 	// set price
				$('#product_footer').val(payload.shop);

				// With JQuery
				$("#months").slider({
				    ticks: [1, 2, 3],
				    ticks_labels: ['3 měsíce', '5 měsíců', '10 měsíců'],
				    ticks_snap_bounds: 1,
				    tooltip: 'hide',
				    value: 2
				});

				$("#pricePerMonth").text( (payload.finalPrice/5) + "Kč" );

				$("#months").on('change', function(slideEvt){

					if(slideEvt.value.newValue == 1){
						$("#pricePerMonth").text( Math.ceil(payload.finalPrice/3) + "Kč" );
					}

					if(slideEvt.value.newValue == 2){
						$("#pricePerMonth").text( Math.ceil(payload.finalPrice/5) + "Kč" );
					}

					if(slideEvt.value.newValue == 3){
						$("#pricePerMonth").text( Math.ceil(payload.finalPrice/10) + "Kč" );
					}

				});

				if(typeof payload.searchHeaderId != "undefined"){
					$("#search_footer_id").val(payload.searchFooterId);		// set search id
				}

			}

			if(typeof payload.errorOnParsingHeader != "undefined"){
				$("#productPriceHeader .price-wrapper").css('display', 'none');
				$("#productPriceHeader .parsing-error").css('display', 'block');
				// $("#leadFormHeader").addClass('lower'); 							// lead form
			}

			if(typeof payload.errorOnParsingFooter != "undefined"){
				$("#priceBlockFooter").css('display', 'none');
				$(".contact-form .text-wrapper").css('display', 'none');
				$(".contact-form .parsing-error").css('display', 'block');
				$("#sliderBlockFooter").css('display', 'none');
				// $("#leadFormFooter").addClass('lower'); 							// lead form
			}

			initHardAll();
		}
	});

	stars();
	initHardAll();

	// hash and scroll
    var hash = window.location.hash;

    if(hash !== ''){
    	var target = $("a[data-href='"+hash+"']");
    	$(target).trigger('click');
    }

    /*
    $( window ).on('scroll', function() {
    	console.log($(window).scrollTop());
    	console.log($("#searchFormHeader").offset().top);

    	if($(window).scrollTop() > $("#searchFormHeader").offset().top){
    		$(".navbar .try-it .btn").fadeIn();
    	}else{
    		$(".navbar .try-it .btn").fadeOut();
    	}

	});*/

});