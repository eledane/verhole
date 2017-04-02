var data,
	slider1Value,
	slider2Value,
	cList,
	trackingElements = new Array();

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

$(document).ready(function () {
	
	if ($.cookie('lastProductCode')) {
		console.log('Last Product code was: ' + $.cookie('lastProductCode'));
	}

	if ($.cookie('clicked')) {
		$('#faq3 .defaultLoan').remove();
		$('#faq3 .freeLoan').removeClass('hidden');
		$('#defaultLabels').hide();
		$('#defaultLabelsImage').addClass('hidden');
		$('#freeLabelsImage').removeClass('hidden');
		$('#freeLabels').removeClass('hidden');
		$('#bottomSerWinLoan').removeClass('hidden');
		$('.header-before').fadeOut();
		$('.header-after').fadeIn();
	}

	$("#applyButton").click(function(){
		$('.modal').removeClass('in');
		$('.modal-backdrop').removeClass('in');
		$('body').removeClass('modal-open');
		$('.modal-backdrop.fade').hide();
		$('#myModalApply').hide();
	});

	slider1Value = $("#slider1-value");
	slider2Value = $("#slider2-value");
	$('.bubble-inner').dotdotdot({
		after: "a.readmore",
		ellipsis: ''
	});

	$("#slider1").slider({
		range: "min",
		min: 100,
		max: 500,
		value: 300,
		animate: true,
		step: 50,
		create: function (event, ui) {
			slider1Value.val($("#slider1").slider('value'));
		},
		slide: function (event, ui) {
			slider1Value.val(ui.value);
			try {
				_hmt.push(['_trackEvent', 'calculator', 'set', 'amount']);
				_czc.push(['_trackEvent', 'calculator', 'set', 'amount']);
				//_paq.push(['trackEvent', 'calculator', 'set', 'amount']);
				ga('send', 'event', 'calculator', 'set', 'amount');
			} catch (e) {
				// catch undefined tracking libs
			}

			var tmp = "0px";
			var months = $('#slider2').slider('value');
			var price = 90;

			if ($.cookie('clicked')) {
				price = ui.value / months;
			} else {
				switch (months) {
					case 1:
						price = 1.02 * ui.value;
						break;
					case 2:
						price = 0.52 * ui.value;
						break;
					case 3:
						price = 0.35333 * ui.value;
						break;
					case 4:
						price = 0.27 * ui.value;
						break;
					case 5:
						price = 0.22 * ui.value;
						break;
					case 6:
						price = 0.18667 * ui.value;
						break;
				}
			}
			$('.calcLoan').html(Math.round(price));
			$('.strip1 .ui-slider-handle .actualValue').html('¥' + ui.value);
		}
	});
	$('.strip1 .ui-slider-handle').append('<div class="actualValue">¥' + $('#slider1').slider('value') + '</div>');

	function _GET(q, s) {
		s = (s) ? s : window.location.search;
		var re = new RegExp('&amp;' + q + '=([^&amp;]*)', 'i');
		return (s = s.replace(/^\?/, '&amp;').match(re)) ? s = s[1] : s = '';
	}

	var month = '个月';
	if (_GET('lang') == 'en') {
		var month = 'months';
	}

	$("#slider2").slider({
		range: "min",
		min: 1,
		max: 6,
		value: 3,
		animate: true,
		step: 1,
		create: function (event, ui) {
			slider2Value.val($("#slider2").slider('value'));
		},
		slide: function (event, ui) {
			slider2Value.val(ui.value);
			try {
				_hmt.push(['_trackEvent', 'calculator', 'set', 'tenure']);
				_czc.push(['_trackEvent', 'calculator', 'set', 'tenure']);
				//_paq.push(['trackEvent', 'calculator', 'set', 'tenure']);
				ga('send', 'event', 'calculator', 'set', 'tenure');
			} catch (e) {
				// catch undefined tracking libs
			}

			var tmp = "0px";
			var amm = $('#slider1').slider('value');
			var price = 90;
			switch (ui.value) {
				case 1:
					price = $.cookie('clicked') ? amm / ui.value  : 1.02 * amm;
					tmp = '115px';
					break;
				case 2:
					price = $.cookie('clicked') ? amm / ui.value : 0.52 * amm;
					if ($(window).width() < 640) tmp = $(window).width() * 0.12 + "px";
					break;
				case 3:
					price = $.cookie('clicked') ? amm / ui.value : 0.35333 * amm;
					break;
				case 4:
					price = $.cookie('clicked') ? amm / ui.value : 0.27 * amm;
					break;
				case 5:
					price = $.cookie('clicked') ? amm / ui.value : 0.22 * amm;
					if ($(window).width() < 640) tmp = '-' + $(window).width() * 0.12 + "px";
					break;
				case 6:
					price = $.cookie('clicked') ? amm / ui.value : 0.18667 * amm;
					tmp = '-115px';
					break;
			}
			$('.calcLoan').html(Math.round(price));
			$('.strip2 .ui-slider-handle .actualValue').html(ui.value + ' (' + month + ')');
			var el = $('.strip2 .ui-slider-handle .actualValue');
		},
		create: function (event, ui) {
			var amm = $('#slider1').slider('value');
			var price = $.cookie('clicked') ? amm / 3 : 0.35333 * amm;
			$('.calcLoan').html(Math.round(price));
		},
		stop: function(event, ui){
			if(ui.value > 1 && ui.value <= 6){
				$('.legend .min').show();
			}
			if(ui.value < 5){
				$('.legend .max').show();
			}
		}
	});
	$('.strip2 .ui-slider-handle').append('<div class="actualValue">' + $('#slider2').slider('value') + ' (' + month + ')</div>');

	function msieversion() {
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");

		if (msie > 0)      // If Internet Explorer, return version number
			return (parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
		else                 // If another browser, return 0
			return ('otherbrowser');

		return false;
	}

	var iev = msieversion();

	if (iev != '6' && iev != '7') {
		$(".strip1 .ui-slider-handle").attrchange({
			trackValues: true,
			callback: function (evnt) {
				if (evnt.attributeName == "style") {
					var endCharPos = evnt.newValue.length - 8;
					var left = evnt.newValue.substr(6, endCharPos);
					var sliderWidth = $('#slider1').width();
					if ($(window).width() >= 768) {
						var HVal = 80;
						var hVal = 15;
					} else {
						var HVal = 60;
						var hVal = 10;
					}
					var handleRightStop = (sliderWidth - HVal) / (sliderWidth / 100);
					var handleLeftStop = HVal / (sliderWidth / 100);
					if (left > handleRightStop) {
						var leftMax = (sliderWidth - hVal) / (sliderWidth / 100);
						if (left > leftMax) {
							var leftR = (left - leftMax) * (sliderWidth / 100);
							$('.strip1 .actualValue').css('left', '-' + leftR + 'px');
						}
						$('.strip1 .legend .max').css('display', 'none');
					} else if (left < handleLeftStop) {
						var leftMin = hVal / (sliderWidth / 100);
						if (left < leftMin) {
							var leftL = (leftMin - left) * (sliderWidth / 100);
							$('.strip1 .actualValue').css('left', leftL + 'px');
						}
						$('.strip1 .legend .min').css('display', 'none');
					} else {
						$('.strip1 .legend .max').css('display', 'block');
						$('.strip1 .legend .min').css('display', 'block');
						$('.strip1 .actualValue').css('left', '0px');
					}
				}
			}
		});

		$(".strip2 .ui-slider-handle").attrchange({
			trackValues: true,
			callback: function (evnt) {
				if (evnt.attributeName == "style") {
					var endCharPos = evnt.newValue.length - 8;
					var left = evnt.newValue.substr(6, endCharPos);
					var sliderWidth = $('#slider2').width();
					if ($(window).width() >= 768) {
						var HVal = 150;
						var hVal = 25;
					} else {
						var HVal = 115;
						var hVal = 25;
					}
					var handleRightStop = (sliderWidth - HVal) / (sliderWidth / 100);
					var handleLeftStop = HVal / (sliderWidth / 100);
					if (left > handleRightStop) {
						var leftMax = (sliderWidth - hVal) / (sliderWidth / 100);
						if (left > leftMax) {
							var leftR = (left - leftMax) * (sliderWidth / 100);
							$('.strip2 .actualValue').css('left', '-' + leftR + 'px');
						}
						$('.strip2 .legend .max').css('display', 'none');
					} else if (left < handleLeftStop) {
						var leftMin = hVal / (sliderWidth / 100);
						if (left < leftMin) {
							var leftL = (leftMin - left) * (sliderWidth / 100);
							$('.strip2 .actualValue').css('left', leftL + 'px');
						}
						$('.strip2 .legend .min').css('display', 'none');
					} else {
						$('.strip2 .legend .max').css('display', 'block');
						$('.strip2 .legend .min').css('display', 'block');
						$('.strip2 .actualValue').css('left', '0px');
					}
				}
			}
		});
	}

	$('.navbar-toggle').on('click', function () {
		if ($(this).attr('class') == 'navbar-toggle') {
			$('.navbar-default').removeClass('open');
		} else {
			$('.navbar-default').addClass('open');
		}
	});


	$('.close-info-bar').on('click', function () {
		$(this).parent().hide();
		$('.header-after img').css({'margin-top':'0px'});
	});

	if(!$('.header-after .graphic-bar').html()){
		$('.header-after img').css({'margin-top':'0px'});
	}
	$(window).on('resize', function () {
		if ($(window).width() > 768) {
			$("#headerImg").attr('src', './assets/img/header-bg.png');
		} else {
			$("#headerImg").attr('src', './assets/img/header-bg-small.png');
		}
	});


	$("#loanButton").on('click', function (e) {

		e.preventDefault();
		if (!$(this).closest('.loanBtn').hasClass('paused')) {

			var months = $('#slider2').slider('value');
			var price = $('#slider1').slider('value');
			var monhly = $('.calcLoan').html();
			var uuid = getCookie('mlcuid');
			var url = getCookie('oqs') || window.location.href.split("?")[1];
			if (typeof url == 'undefined') {
				url = '';
			}

			var ref = "direct";
			var docref = document.referrer;
            var n = docref.indexOf(window.location.origin);

			if (document.referrer && document.referrer != "") {
				if (!~n) 
					ref = document.referrer;

				if(getCookie("incoming")!="")
					ref = getCookie("incoming");					
			} 

			url = url.replace('#calculatorD', '');
			url = url.replace('#processD', '');
			url = url.replace('#calculator', '');
			url = url.replace('#process', '');
			url = url.replace('&lang=en', '');
			url = url.replace('&lang=cn', '');
			url = url.replace('lang=en', '');
			url = url.replace('lang=cn', '');

			$('.Btnloading-wrapper').addClass('Btnsending');

			new Fingerprint2().get(function(fingerprint, components){

				var data = {"months": months, "price": price, "referrer": ref, "url": url, "uuid": uuid, "fingerprint": fingerprint};
				$.post("getUrl.php", data, function (result, stat) {




					data = $.parseJSON(result);
					submitAnalytics(data, monhly, months, price);

					if (typeof url != '') {
						url += '&';
					}
					var clientIdUrl;

					if (clientId === undefined) {
						clientIdUrl = "";
					} else {
						clientIdUrl = '&clientId=' + clientId;
					}

					if (window.location.href.indexOf('hc-cn-mcl.utdigit.com/') >= 0 || window.location.href.indexOf('fudai.homecredit.cn') >=0) {
						console.log('data[hash] = ' + data['hash'] + 'clientId = ' + clientId);
						window.location.href = 'https://api-uat.homecredit.cn/morest/auth?' + 'z=' + data['hash'] + clientIdUrl;
						
					} else {
						window.location.href = 'https://app.homecredit.cn/hccgateway/auth?' + 'z=' + data['hash'] + clientIdUrl;
					}
				}).fail(function () {
					$('#myModalError').modal({
						show: true,
						keyboard: false
					});
					$(this).removeClass("loading")
				});
			});
		}

		return false;
	});


	if ($(window).width() > 768) {
		var topP = 100;
		var topC = 150;
	} else {
		var topP = 50;
		var topC = 100;
	}
	var hashUrl = window.location.href.split("#")[1];
	if (hashUrl != 'undefined') {
		switch (hashUrl) {
			case 'processD':
				var targetD = $('#process');
				$('html,body').animate({
					scrollTop: targetD.offset().top - topP
				}, 1000);
				break;
			case 'calculatorD':
				var targetD = $('#calculator');
				$('html,body').animate({
					scrollTop: targetD.offset().top - topC
				}, 1000);
				break;
		}
	}

	$(function () {
		$('a[href*=#]:not([href=#])').click(function () {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if ($(this).attr('href') == '#calculator') {
					var topm = topC;
				} else {
					var topm = topP;
				}
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - topm
					}, 1000);
					return false;
				}
			}
		});
	});


	$('.thumb').parent().on('mouseenter', function () {
		$(this).children(':first').hide();
		$(this).children(':nth-child(2)').show();
		$(this).children(':nth-child(3)').show();
	});
	$('.thumb').parent().on('mouseleave', function () {
		$(this).children(':first').show();
		$(this).children(':nth-child(2)').hide();
		$(this).children(':nth-child(3)').hide();
	});

	var arrowLeft = $('.more_stories_header .left');
	var arrowRight = $('.more_stories_header .right');

	var controlStory = function (id) {

		$('.stories_slider').not("#" + id).hide();
		$("#" + id).show();

		controlArrows(id);
	};

	var controlArrows = function (id) {
		if (id == 0) {
			arrowLeft.css({display: 'none'});
		}
		else {
			arrowLeft.css({display: 'inline'});
		}

		if (id == (count_stories - 1)) {
			arrowRight.css({display: 'none'});
		}
		else {
			arrowRight.css({display: 'block'});
		}
	};

	if ($('.stories_0').length) {
		var active_slide = 0;
		var count_stories = $('.stories_slider').length;
		$('.stories_slider').hide();

		controlStory(active_slide);

		arrowRight.click(function () {
			if (active_slide < (count_stories - 1)) {
				active_slide++;
			}
			controlStory(active_slide);
		});
		arrowLeft.click(function () {
			if (active_slide !== 0) {
				active_slide--;
			}
			controlStory(active_slide);
		});

	}

	function checkIfElementExists(el) {
		if ($('#' + el).length) {
			return true;
		}
		return false;
	}

	function pushObjectToArray(array, el, name) {
		array.push({'id': el, 'name': name});
	}


	trackingElements = [
		{
			id: 'firstMenu',
			name: 'time_click_how_to_use'
		},
		{
			id: 'secondMenu',
			name: 'time_click_frq_qst'
		},
		{
			id: 'thirdMenu',
			name: 'time_click_about_HCC'
		},
		{
			id: 'fourthMenu',
			name: 'time_click_apply_now'
		},
		{
			id: 'loanButton',
			name: 'whether_click_borrow_button_calculator'
		},
		{
			id: 'termsButton',
			name: 'time_click_MCL_term_use_1stpage'
		},
		{
			id: 'processButton',
			name: 'whether_click_borrow_button_steps'
		},
		{
			id: 'storiesButton',
			name: 'whether_click_borrow_button_bottom'
		},
		{
			id: 'slider1',
			name: 'drag_loan_bar'
		},
		{
			id: 'slider2',
			name: 'drag_tenure_bar'
		},
		{
			id: 'modalClose',
			name: 'time_close_MCL_term_use_1stpage'
		},
	];

	function sendComplexAnalytics() {

		var uuid = getCookie('mlcuid');
		var hash = getCookie('mlchsh');

		cList = new Array();
		$.each(trackingElements, function (index) {
			if (trackingElements[index] && checkIfElementExists(trackingElements[index].id)) {
				pushObjectToArray(cList, trackingElements[index].id, trackingElements[index].name);
			}
		});
		if (typeof tracking !== "undefined") {
			tracking.form.bindTracking('FUDAI', uuid, 'fudaiLandingPage', cList, hash);
		}
	}

	setTimeout(sendComplexAnalytics,2000);

});

var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam) {
			return sParameterName[1];
		}
	}
	return '';
};

function submitLoan() {

	var months = $('#slider2').slider('value');
	var price = $('#slider1').slider('value');
	var monhly = $('.calcLoan').html();
	var uuid = getCookie('mlcuid');
	var url = window.location.href.split("?")[1];
	if (typeof url == 'undefined') {
		url = '';
	}

	if (document.referrer) {
		var ref = document.referrer;
	} else {
		var ref = "direct";
	}

	url = url.replace('#calculatorD', '');
	url = url.replace('#processD', '');
	url = url.replace('#calculator', '');
	url = url.replace('#process', '');
	url = url.replace('&lang=en', '');
	url = url.replace('&lang=cn', '');
	url = url.replace('lang=en', '');
	url = url.replace('lang=cn', '');

	var data = {"months": months, "price": price, "referrer": ref, "url": url, "uuid": uuid};

	$('.Btnloading-wrapper').addClass('Btnsending');

	$.post("getUrl.php", data, function (result, stat) {

		data = $.parseJSON(result);
		console.log(data);return false;
		submitAnalytics(data, monhly, months, price);

		if (typeof url != '') {
			url += '&';
		}

		/*if (window.location.href.indexOf('hc-cn-mcl.utdigit.com/') >= 0) {
			window.location.href = 'https://api-uat.homecredit.cn/morest/auth?' + 'z=' + data['hash'];
		} else {
			window.location.href = 'https://app.homecredit.cn/hccgateway/auth?' + 'z=' + data['hash'];
		}*/
	}).fail(function () {
		$('#myModalError').modal({
			show: true,
			keyboard: false
		});
	});

	return false;
}


function submitAnalytics(data, monhly, months, price) {
	ga('require', 'ecommerce', 'ecommerce.js');
	var transaction = {
		id: 'MCL-' + data['id'],
		affiliation: getUrlParameter('utm_source'),
		revenue: monhly * months,
		shipping: monhly,
		tax: (monhly * months) - price
	};
	var addItem = {
		id: 'MCL-' + data['id'],
		sku: data['productCode'],
		name: data['productCode'],
		category: 'MCL',
		price: monhly * months,
		quantity: '1'
	};


	ga('ecommerce:addTransaction', transaction);
	ga('ecommerce:addItem', addItem);

	ga('ecommerce:send');

	_hmt.push(['_trackEvent', 'calculator', 'click-apply']);
	//_paq.push(['trackEvent', 'calculator', 'click-apply']);
	ga('send', 'event', 'calculator', 'click-apply');

	_hmt.push(['_trackEvent', 'calculator', 'apply']);
	//_paq.push(['trackEvent', 'calculator', 'apply']);
	ga('send', 'event', 'calculator', 'apply');
}


// After Winning Loan:
$("#applyButton").click(function(){
   $('.modal').removeClass('in');
   $('.modal-backdrop').removeClass('in');
   $('body').removeClass('modal-open');
});


$("#applyButtonNot").click(function(){
	$('.headerCoinsFake').removeClass('hidden');
});


$('#applyButton').click(function() {
  $('.header-before').fadeOut('slow', function(){});
      $('.header-after').fadeIn('slow', function(){});
});


// Loader:

// $("#applyButton").click(function(){
//     $('.header-loading').addClass('loader-on');
// });
