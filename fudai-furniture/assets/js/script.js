var data,
	slider1Value,
	slider2Value,
	cList,
	trackingElements = new Array();

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}

$(document).ready(function(){
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
        slide: function (event,ui) {
            _hmt.push(['_trackEvent','calculator','set','amount']);
            _czc.push(['_trackEvent','calculator','set','amount']);
            _paq.push(['trackEvent','calculator','set','amount']);
            ga('send', 'event','calculator','set','amount');    

            var tmp = "0px";
            var months = $('#slider2').slider('value');
            var price = 90;
            switch (months){
                case 1: price = 1.02*ui.value; break;
                case 2: price = 0.52*ui.value; break;
                case 3: price = 0.35333*ui.value; break;
                case 4: price = 0.27*ui.value; break;
                case 5: price = 0.22*ui.value; break;
                case 6: price = 0.18667*ui.value; break;
            }
            $('.calcLoan').html(Math.round(price));
            $('.strip1 .ui-slider-handle .actualValue').html('¥' + ui.value);
        }
    });

    function _GET(q,s) {
        s = (s) ? s : window.location.search;
        var re = new RegExp('&amp;'+q+'=([^&amp;]*)','i');
        return (s=s.replace(/^\?/,'&amp;').match(re)) ?s=s[1] :s='';
    }

    var month = '个月';
    if (_GET('lang') == 'en'){
        var month = 'months';
    }

    $("#slider2").slider({
        range: "min",
        min: 1,
        max: 6,
        value: 3,
        animate: true,
        step: 1,
        slide: function (event,ui) {
            _hmt.push(['_trackEvent','calculator','set','tenure']);
            _czc.push(['_trackEvent','calculator','set','tenure']);
            _paq.push(['trackEvent','calculator','set','tenure']);
            ga('send', 'event','calculator','set','tenure');

            var tmp = "0px";
            var amm = $('#slider1').slider('value');
            var price = 90;
            switch (ui.value){
                case 1: price = 1.02*amm; tmp = '115px'; break;
                case 2: price = 0.52*amm; if ($(window).width() < 640) tmp = $(window).width()*0.12 + "px"; break;
                case 3: price = 0.35333*amm; break;
                case 4: price = 0.27*amm; break;
                case 5: price = 0.22*amm; if ($(window).width() < 640) tmp = '-' + $(window).width()*0.12 + "px"; break;
                case 6: price = 0.18667*amm; tmp = '-115px'; break;
            }
            $('.calcLoan').html(Math.round(price));
            $('.strip2 .ui-slider-handle .actualValue').html(ui.value + ' ('+month+')');
            var el = $('.strip2 .ui-slider-handle .actualValue');
        },
        create: function (event,ui) {     
                    var amm = $('#slider1').slider('value');
                    var price = 0.35333*amm;
                    $('.calcLoan').html(Math.round(price));
                }
    });
    
    //return IE version
    function msieversion() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0)      // If Internet Explorer, return version number
            return(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
        else                 // If another browser, return 0
            return('otherbrowser');

        return false;
    }
    var iev = msieversion();
    
    if (iev != '6' && iev != '7'){
        $(".strip1 .ui-slider-handle").attrchange({
            trackValues: true, 
            callback: function(evnt) {
                if(evnt.attributeName == "style") { 
                    var endCharPos = evnt.newValue.length-8;
                    var left = evnt.newValue.substr(6,endCharPos);
                    var sliderWidth = $('#slider1').width();
                    if ($(window).width() >= 768){
                        var HVal = 80;
                        var hVal = 15;
                    }else{
                        var HVal = 60;
                        var hVal = 10;
                    }
                    var handleRightStop = (sliderWidth-HVal)/(sliderWidth/100);
                    var handleLeftStop = HVal / (sliderWidth/100);
                    if (left > handleRightStop){
                        var leftMax = (sliderWidth-hVal)/(sliderWidth/100);
                        if (left > leftMax){
                            var leftR = (left-leftMax) * (sliderWidth/100);
                            $('.strip1 .actualValue').css('left','-'+leftR+'px');                        
                        }                    
                        $('.strip1 .legend .max').css('display','none');
                    }else if (left < handleLeftStop){                    
                        var leftMin = hVal / (sliderWidth/100);
                        if (left < leftMin){
                            var leftL = (leftMin - left) * (sliderWidth/100);
                            $('.strip1 .actualValue').css('left',leftL+'px');                        
                        }
                        $('.strip1 .legend .min').css('display','none');
                    }else{
                        $('.strip1 .legend .max').css('display','block');
                        $('.strip1 .legend .min').css('display','block');
                        $('.strip1 .actualValue').css('left','0px');
                    }
                }
            }
        });

        $(".strip2 .ui-slider-handle").attrchange({        
            trackValues: true, 
            callback: function(evnt) {
                if(evnt.attributeName == "style") { 
                    var endCharPos = evnt.newValue.length-8;
                    var left = evnt.newValue.substr(6,endCharPos);
                    var sliderWidth = $('#slider2').width();
                    if ($(window).width() >= 768){
                        var HVal = 150;
                        var hVal = 25;
                    }else{
                        var HVal = 115;
                        var hVal = 25;
                    }
                    var handleRightStop = (sliderWidth-HVal)/(sliderWidth/100);
                    var handleLeftStop = HVal / (sliderWidth/100);
                    if (left > handleRightStop){
                        var leftMax = (sliderWidth-hVal)/(sliderWidth/100);
                        if (left > leftMax){
                            var leftR = (left-leftMax) * (sliderWidth/100);
                            $('.strip2 .actualValue').css('left','-'+leftR+'px');                        
                        }                    
                        $('.strip2 .legend .max').css('display','none');
                    }else if (left < handleLeftStop){
                        var leftMin = hVal / (sliderWidth/100);
                        if (left < leftMin){
                            var leftL = (leftMin - left) * (sliderWidth/100);
                            $('.strip2 .actualValue').css('left',leftL+'px');                        
                        }
                        $('.strip2 .legend .min').css('display','none');
                    }else{
                        $('.strip2 .legend .max').css('display','block');
                        $('.strip2 .legend .min').css('display','block');
                        $('.strip2 .actualValue').css('left','0px');
                    }
                }
            }
        });
    }
    
    $('.navbar-toggle').on('click',function(){
        if ($(this).attr('class') == 'navbar-toggle'){
            $('.navbar-default').removeClass('open');
        }else{
            $('.navbar-default').addClass('open');
        }
    });        
    
    $(window).on('resize',function(){
        if ($(window).width() > 768) {
            $("#headerImg").attr('src','./assets/img/header.png');
        }else{
            $("#headerImg").attr('src','./assets/img/headerSmall.png');
        }
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
    
    $("#loanButton").on('click',function(){
        var months = $('#slider2').slider('value');
        var price = $('#slider1').slider('value');
        var monhly = $('.calcLoan').html();
        var url = window.location.href.split("?")[1];
        if (typeof url == 'undefined'){
            url = '';
        }
        
        if (document.referrer){
            var ref = document.referrer;
        }else{
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
        
        var data = {"months" : months, "price": price, "referrer": ref, "url": url};   

        $.post("getUrl.php", data, function(result,stat){
            data = $.parseJSON(result);
            ga('require', 'ecommerce', 'ecommerce.js');
            var transaction = {
                id: 'MCL-'+data['id'], 
                affiliation: getUrlParameter('utm_source'), 
                revenue: monhly * months, 
                shipping: monhly , 
                tax: (monhly * months) - price };
            var  addItem = { 
                id: 'MCL-'+data['id'], 
                sku: data['productCode'], 
                name: data['productCode'],
                category: 'MCL', 
                price: monhly * months, 
                quantity: '1'};
            ga('ecommerce:addTransaction', transaction); 
            ga('ecommerce:addItem', addItem); 

            ga('ecommerce:send');         

            _hmt.push(['_trackEvent','calculator','click-apply']);
            _czc.push(['_trackEvent','calculator','click-apply']);
            _paq.push(['trackEvent','calculator','click-apply']);
            ga('send', 'event','calculator','click-apply');
            
            _hmt.push(['_trackEvent','calculator','apply']);
            _czc.push(['_trackEvent','calculator','apply']);
            _paq.push(['trackEvent','calculator','apply']);
            ga('send', 'event','calculator','apply');  
            if (typeof url != ''){
                url += '&';
            }
            if (window.location.href.indexOf('hc-cn-mcl.utdigit.com/') >= 0){
                window.location.href ='https://api-uat.homecredit.cn/morest/auth?'+url+'z='+data['hash'];
            }else{
                window.location.href ='https://app.homecredit.cn/hccgateway/auth?'+url+'z='+data['hash'];
            }
        });  
        
        return false;
    });
	$("#loanButton").on('click', function () {
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
		console.log('input data:');
		console.table(data);
		$.post("getUrl.php", data, function (result, stat) {

			//return;

			data = $.parseJSON(result);
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
			console.log('output data:');
			console.log(data);
			ga('ecommerce:addTransaction', transaction);
			ga('ecommerce:addItem', addItem);

			ga('ecommerce:send');

			_hmt.push(['_trackEvent', 'calculator', 'click-apply']);
			_czc.push(['_trackEvent', 'calculator', 'click-apply']);
			_paq.push(['trackEvent', 'calculator', 'click-apply']);
			ga('send', 'event', 'calculator', 'click-apply');

			_hmt.push(['_trackEvent', 'calculator', 'apply']);
			_czc.push(['_trackEvent', 'calculator', 'apply']);
			_paq.push(['trackEvent', 'calculator', 'apply']);
			ga('send', 'event', 'calculator', 'apply');
			if (typeof url != '') {
				url += '&';
			}

			if (window.location.href.indexOf('hc-cn-mcl.utdigit.com/') >= 0) {
				window.location.href = 'https://api-uat.homecredit.cn/morest/auth?'+ 'z=' + data['hash'];
			} else {
				window.location.href = 'https://app.homecredit.cn/hccgateway/auth?' + 'z=' + data['hash'];
			}
		});

		return false;
	});
    
    
    if ($(window).width() > 768){
        var topP = 100;
        var topC = 150;
    }else{
        var topP = 50;
        var topC = 100;
    }
    var hashUrl = window.location.href.split("#")[1];
    if (hashUrl != 'undefined'){
        switch (hashUrl){
            case 'processD': 
                            var targetD = $('#process');
                            $('html,body').animate({
                                scrollTop: targetD.offset().top-topP
                            }, 1000);
                            break;
            case 'calculatorD': 
                            var targetD = $('#calculator');
                            $('html,body').animate({
                                scrollTop: targetD.offset().top-topC
                            }, 1000);
                            break;
        }
    }
    
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if ($(this).attr('href') == '#calculator'){
                var topm = topC;
            }else{
                var topm = topP;
            }
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top-topm
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

		$('.stories_slider').not("#"+id).hide();
		$("#"+id).show();

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
		if($('#'+el).length) {
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
		$.each(trackingElements, function(index) {
			if(checkIfElementExists(trackingElements[index].id)) {
				pushObjectToArray(cList, trackingElements[index].id, trackingElements[index].name);
			}
		});
		tracking.form.bindTracking('FUDAI', uuid, 'fudaiLandingPage', cList, hash);
	}
	sendComplexAnalytics();
    
    
});