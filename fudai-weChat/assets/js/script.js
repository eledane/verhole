var data,
	slider1Value,
	slider2Value,
	cList,
	trackingElements = new Array();
    pageWidth = 0;

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


function changeSliderValue(el, val){
    $(el).closest('.Slider-wrapper').find('.Slider-currentValue').html(val);
}

function changeSlidersValue(){
    changeSliderValue("#Slider1", slider1Value);
    changeSliderValue("#Slider2", slider2Value);

    

    var price = 0;
    switch (slider2Value){
        case 1: price = 1.02*slider1Value; break;
        case 2: price = 0.52*slider1Value; break;
        case 3: price = 0.35333*slider1Value; break;
        case 4: price = 0.27*slider1Value; break;
        case 5: price = 0.22*slider1Value; break;
        case 6: price = 0.18667*slider1Value; break;
    }
    $('.Results-textSum').html(Math.round(price*slider2Value));
    $('.Results-textFinal').html(Math.round(price));
}

function createSliders(){

    var width = $(window).width();
    var height = $(window).height();
    var width2;
    


    if(pageWidth != width) {

        pageWidth = width;   

        width = width/540*320;
        if(width>340){
            width = 340;
        }

        if(height > 400 && pageWidth < height){
            width2 = 540/1600*height;

            if(width > width2){
                width = width2;
            }
        }

        if(width < 150) width = 150;

        var scaleWidth = width/540*40;
        if(scaleWidth > 24) scaleWidth = 24;

        $("#Slider1").roundSlider("destroy");
        $("#Slider2").roundSlider("destroy");


        $("#Slider1").roundSlider({
            handleShape: "round",
            sliderType: "min-range",
            width: scaleWidth,
            radius: width/2,
            value: slider1Value,
            min: 100,
            max: 500,
            step: 10,
            circleShape: "half-top",

            drag: function (args) {
                slider1Value = args.value;
                changeSlidersValue();

                _hmt.push(['_trackEvent','calculator','set','amount']);
                //_paq.push(['trackEvent','calculator','set','amount']);
                ga('send', 'event','calculator','set','amount');   
            },
            change: function (args) {
                slider1Value = args.value;
                changeSlidersValue();

                _hmt.push(['_trackEvent','calculator','set','amount']);
                //_paq.push(['trackEvent','calculator','set','amount']);
                ga('send', 'event','calculator','set','amount');   
            }
        });

        
        $("#Slider2").roundSlider({
            sliderType: "min-range",
            handleShape: "round",
            width: scaleWidth,
            radius: width/2,
            value: 7 - slider2Value,
            min: 1,
            max: 6,
            circleShape: "half-bottom",
            drag: function (args) {

                slider2Value = 7 - args.value;
                changeSlidersValue();


                _hmt.push(['_trackEvent','calculator','set','tenure']);
                //_paq.push(['trackEvent','calculator','set','tenure']);
                ga('send', 'event','calculator','set','tenure');
            },
            change: function (args) {

                slider2Value = 7 - args.value;
                changeSlidersValue();


                _hmt.push(['_trackEvent','calculator','set','tenure']);
                //_paq.push(['trackEvent','calculator','set','tenure']);
                ga('send', 'event','calculator','set','tenure');
            }
        });

    }

    heightAdapt();
}


function initFaq() {
    faq = $('.Section-faq');
    if($(faq).length > 0){

        $(faq).find('.panel').each(function(){
            $(this).data('offsetTop', $(this).offset().top);
        });

        $('.panel-title a').on('click', function(e){
            if($(this).attr('aria-expanded') == 'false'){
                var offsetTop = $(this).closest('.panel').data('offsetTop');

                $('html, body').animate({
                    scrollTop: offsetTop
                }, 400);
            }
        });
    }
}

function heightAdapt(){
    var slider = $('.Sliders');

    $(slider).css('margin', '0');
    $('.MainBanner-textWrapper').css('margin', '0');

    var windowHeight = $(window).height();
    var pageHeight = $('.Page').height();
    var bannerMargin = 0;

    var height = windowHeight - pageHeight;
    height = height/2;

    if(height<15) height = 15;

    if(height > 40){
        bannerMargin = height/4*1.5;
        height = height/4*2.5;
    }

    $('.MainBanner-textWrapper').css('margin', bannerMargin + 'px 0');
    $(slider).css('margin', height + 'px 0');
}


$(document).ready(function(){
    slider1Value = 250;
    slider2Value = 3;
    changeSlidersValue();
    initFaq();

    if($('.Sliders').length > 0){
        createSliders();
        heightAdapt();

        $(window).resize(function(){
            createSliders();
            heightAdapt();
        })
    }

        

    function _GET(q,s) {
        s = (s) ? s : window.location.search;
        var re = new RegExp('&amp;'+q+'=([^&amp;]*)','i');
        return (s=s.replace(/^\?/,'&amp;').match(re)) ?s=s[1] :s='';
    }

    var month = '个月';
    if (_GET('lang') == 'en'){
        var month = 'months';
    }

    
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

    
    $("#loanButton:not(.Btn--loading)").on('click',function(){
        var months = slider2Value;
        var price = slider1Value;
        var monhly = $('.Results-textFinal').html();
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

        $(this).addClass('Btn--loading');
        
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
            //_paq.push(['trackEvent','calculator','click-apply']);
            ga('send', 'event','calculator','click-apply');
            
            _hmt.push(['_trackEvent','calculator','apply']);
            //_paq.push(['trackEvent','calculator','apply']);
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
	$("#loanButton:not(.Btn--loading)").on('click', function () {
		var months = slider2Value;
        var price = slider1Value;
        var monhly = $('.Results-textFinal').html();
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

        $(this).addClass('Btn--loading');

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

			ga('ecommerce:addTransaction', transaction);
			ga('ecommerce:addItem', addItem);

			ga('ecommerce:send');

			_hmt.push(['_trackEvent', 'calculator', 'click-apply']);
			//_paq.push(['trackEvent', 'calculator', 'click-apply']);
			ga('send', 'event', 'calculator', 'click-apply');

			_hmt.push(['_trackEvent', 'calculator', 'apply']);
			//_paq.push(['trackEvent', 'calculator', 'apply']);
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
			id: 'Slider1',
			name: 'drag_loan_bar'
		},
		{
			id: 'Slider2',
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

		if (typeof tracking !== "undefined") {
			tracking.form.bindTracking('FUDAI', uuid, 'fudaiLandingPage', cList, hash);
		}

	}
	sendComplexAnalytics();
    heightAdapt();
    
});