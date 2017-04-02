$(document).ready(function(){
    new BowserClass();
});

// Old Browser support notice
var $buoop = {c:2};
function $buo_f(){
 var e = document.createElement("script");
 e.src = "//browser-update.org/update.min.js";
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}

var formatter = new NumberFormatter('&nbsp;');
var sliderFormatter = new NumberFormatter(' ');

$(function() {
    collect();
});

// Smoothscroll
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if ($(this).data('scroll-ignore') !== "") {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                window.history.replaceState('menu', 'Menu', '#' + target[0].id);
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 60
                    }, 1000);
                    return false;
                }
            }
        }
    });
});

var openErrorModal = function() {
    $('#error-modal').modal('show');
    window.history.replaceState('error', 'Error', '#ref-add-error');

    setTimeout(function() {
        $('#error-modal').modal('hide');
    }, 10000);
};

$(window).scroll(function() {
    if ($('#navbar').length) {
        var headerHeight = $('#navbar').outerHeight();
        var scrollTop = $(window).scrollTop();

        if (scrollTop > headerHeight) {
            $('.navbar-transparent').addClass('navbar-fixed-top navbar-blue');
        } else {
            $('.navbar-transparent').removeClass('navbar-fixed-top navbar-blue');
        }
    }
});

$(window).scroll(function() {
    if ($('#benefits').length) {
        var top = $('#benefits').offset().top;
        var scrollTop = $(window).scrollTop();
        if (scrollTop >= top) {
            $('#currently-watching').css('opacity', '1');
        } else {
            $('#currently-watching').css('opacity', '0');
        }

        var contactHeight = $('#contact').height();
        if ($(window).scrollTop() + $(window).height() > $(document).height() - contactHeight) {
            $('#currently-watching').css('opacity', '0');
        }
    }
});

$('.search-result .close-popup').on('click' , function(e) {
    e.preventDefault();
    $('.search-result').fadeOut();
});

var countExample = function() {
    var price = parseInt($('#product-price').val());
    var loanCount = parseInt($('#loan-count').val());

    var version = parseInt($('#example').data('example-version'));
    var interest = 0;
    if (version > 0) {
        interest = price / 100 * (version * loanCount );
    } else {
        interest = 0;
    }


    var fullPrice = price + interest;
    var monthlyPayment = (fullPrice / loanCount);
    var monthlyInterest = interest / loanCount;

    var $monthlyPaymetElem = $('#monthly-payment strong');
    var $interestElem = $('#interest strong');
    var $fullInterestElem = $('#full-interest strong');
    var $priceElem = $('#price strong');

    $monthlyPaymetElem.html('¥&nbsp;'+monthlyPayment.toFixed(0));
    formatter.format($monthlyPaymetElem);
    $interestElem.html('¥&nbsp;'+monthlyInterest.toFixed(0));
    formatter.format($interestElem);
    $fullInterestElem.html('¥&nbsp;'+interest.toFixed(0));
    formatter.format($fullInterestElem);
    $priceElem.html('¥&nbsp;'+fullPrice.toFixed(0));
    formatter.format($priceElem);
};

var countSearch = function() {
    var price = parseInt($('#crawled-price').val());
    var loanCount = parseInt($('#frm-priceSearchHeader-inputForm-tenor').val());

    var version = parseInt($('#example').data('example-version'));
    var interest = 0;
    if (version > 0) {
        interest = price / 100 * (version * loanCount);
    } else {
        interest = 0;
    }

    var fullPrice = price + interest;
    var monthlyPayment = (fullPrice / loanCount);
    var monthlyInterest = interest / loanCount;

    var $monthlyPaymetElem = $('#search-monthly-payment strong');
    var $interestElem = $('#search-interest strong');
    var $fullInterestElem = $('#search-full-interest strong');
    var $priceElem = $('#search-price strong');

    $monthlyPaymetElem.html('¥&nbsp;'+monthlyPayment.toFixed(0));
    formatter.format($monthlyPaymetElem);
    $interestElem.html('¥&nbsp;'+monthlyInterest.toFixed(0));
    formatter.format($interestElem);
    $fullInterestElem.html('¥&nbsp;'+interest.toFixed(0));
    formatter.format($fullInterestElem);
    $priceElem.html('¥&nbsp;'+fullPrice.toFixed(0));
    formatter.format($priceElem);
};

var slideRecalculate = function() {
}

$(function() {
    $('#example #product-price').slider({
        formatter: function(value) {
    		return '¥ '+sliderFormatter.formatValue(value);
    	}
    });
    $('#example #loan-count').slider();
    $('#example .slider').on("slide", countExample);
    $('#example .slider').on("change", countExample);
    
    $('#product-price').siblings('.slider').find('.tooltip-main').removeClass('top').addClass('bottom');
    $('#loan-count').siblings('.slider').find('.tooltip-main').removeClass('top').addClass('bottom');

    countExample();
});

var checkValidCoupon = function(text) {
    if (text == "Koupitovanoce2015" || text == "hcvanoce2015") {
        dataLayer.push({
            'event': 'gaTriggerEvent',
            'gaEventCategory': 'Lead',
            'gaEventAction': 'Kupon'
        });
    }
};

var initLoaderButton = function(){
    var l;

    $('#snippet-priceSearchHeader-searchForm .priceSearchButton').off('click').on('click', function(e) {
        l = Ladda.create(this);

        var $input = $('#frm-priceSearchHeader-searchForm-shop_url');
        if (!($input.hasClass('has-error') || $input.val().length === 0)) {
            l.start();
            $(this).submit();
        }
    });

    $('#frm-priceSearchHeader-searchForm-shop_url').on('paste', function () {
      var element = this;
      setTimeout(function () {
        var text = $(element).val();
        l = Ladda.create($('#snippet-priceSearchHeader-searchForm .priceSearchButton')[0]);
        l.start();
        $('#frm-priceSearchHeader-searchForm').submit();
      }, 100);
    });

    $('#snippet-cart-productPriceSearch-searchFormSmall .priceSearchButton').off('click').on('click', function(e) {
        l = Ladda.create(this);

        var $input = $('#frm-cart-productPriceSearch-smallSearchForm-shop_url');
        if (!($input.hasClass('has-error') || $input.val().length === 0)) {
            l.start();
            $(this).submit();
        }
    });


    $('#frm-cart-productPriceSearch-smallSearchForm-shop_url').on('paste', function () {
      var element = this;
      setTimeout(function () {
        var text = $(element).val();
        l = Ladda.create($('#snippet-cart-productPriceSearch-searchFormSmall .priceSearchButton')[0]);
        l.start();
        $('#frm-cart-productPriceSearch-smallSearchForm').submit();
      }, 100);
    });

    $('#frm-cart-newOrderForm-coupon, #frm-cart-callForm-coupon').on('paste', function () {
        var element = $(this);

        setTimeout(function() {
            checkValidCoupon(element.val());
        }, 100);
    });

    $('#frm-cart-newOrderForm-coupon, #frm-cart-callForm-coupon').on('focusout', function () {
        var element = $(this);

        setTimeout(function() {
            checkValidCoupon(element.val());
        }, 100);
    });
};

initLoaderButton();

$(function() {
    $('#snippet--cart').on('change', '#loanSlider', function(e) {
        fillForms();

        dataLayer.push({
            'event': 'gaTriggerEvent',
            'gaEventCategory': 'Engagement',
            'gaEventAction': 'Term',
            'gaEventLabel': $('#loanSlider').val()
        });
    });

    $('#snippet--cart').on('slide', '#loanSlider', function(e) {
        fillForms();
    });

});
// HEADER - OPEN CART

$('body').on('click', '.cart', function(event) {
    event.preventDefault();

    window.history.replaceState('kosik', 'Kosik', '#kosik');
    openCart();
});

// BODY - CLOSE searchForm
$('#snippet-priceSearchHeader-searchForm').on('click', '.close-results', function(e) {
    e.preventDefault();
    $('.search-result').fadeOut();
});

$('#snippet-priceSearchHeader-searchForm').on('focus', 'input[name="shop_url"]', function(e) {
    $('.form-error-message').remove();
});

$(".close-popup").click(function(e) {
    e.preventDefault();
    $('.search-result').fadeOut();
});


/*$('#snippet-priceSearchHeader-searchForm').on('input', 'input[name="shop_url"]', function(e) {
    if ($(this).val() === "") {
        $('.search-result').fadeOut();
    }
});*/




$('#snippet-priceSearchHeader-searchForm').on('click', '#continue-shopping', function(e) {
    e.preventDefault();

    $('input[name="shop_url"]').val("");
    $('.search-result').fadeOut();
});

$('#snippet-registerUser-registration').on('click', '.btn-login', function(e) {
    e.preventDefault();

    $('#register-modal').modal('hide');
    setTimeout(function() {
        $('#signin-modal').modal('show');
    }, 600);
});

$('#snippet--cart').on('change', '#select-nav-tabs', function(e) {
    $('#snippet--cart .active').removeClass('active');
    $($(this).val()).addClass('active');
});

var l;
$('#most-wanted .btn').off('click').on('click', function(e) {
    l = Ladda.create(this);

    l.start();

    window.ladda = l;
});

$('#navbar').on({
    mouseenter: function() {
        $("#snippet--cartItemCount .dropdown").addClass("hover");
    }
}, '.cart');

$('#navbar').on({
    mouseenter: function() {
        $("#snippet--cartItemCount .dropdown").removeClass("hover");
    }
}, '.dropdown-menu');

// GAEVENTS
$('.navbar-left .gevent').click(function() {
    var data = $(this);
    dataLayer.push({
        'event': data.data('gaevent'),
        'gaEventCategory': data.data('gacategory'),
        'gaEventAction': data.data('gaaction'),
        'gaEventLabel': data.data('galabel')
    });
});

$('.try-it.gevent').click(function() {
    var data = $(this);
    dataLayer.push({
        'event': data.data('gaevent'),
        'gaEventCategory': data.data('gacategory'),
        'gaEventAction': data.data('gaaction'),
        'gaEventLabel': data.data('galabel')
    });
});

$('.most-wanted-description .gevent').click(function() {
    var data = $(this);
    dataLayer.push({
        'event': data.data('gaevent'),
        'gaEventCategory': data.data('gacategory'),
        'gaEventAction': data.data('gaaction'),
        'gaEventLabel': data.data('galabel')
    });
});

$('#snippet--cart').on('change', '#note', function() {
    $('input[name="note"]').val($(this).val());
});

$(document).on('click', '.gevent', function(e) {
    var data = $(this);
    dataLayer.push({
        'event': data.data('gaevent'),
        'gaEventCategory': data.data('gacategory'),
        'gaEventAction': data.data('gaaction'),
        'gaEventLabel': data.data('galabel')
    });
});

BowserClass = function () {
    html_class = [];

    if (bowser.mobile) html_class.push('mobile');

    if (bowser.tablet) html_class.push('tablet');

    if (!bowser.mobile && !bowser.tablet) html_class.push('desktop');

    if (bowser.chrome) html_class.push('chrome');
    if (bowser.firefox) html_class.push('firefox');
    if (bowser.msie) html_class.push('msie');
    if (bowser.msedge) html_class.push('msedge');
    if (bowser.android) html_class.push('android');
    if (bowser.ios) html_class.push('ios');
    if (bowser.opera) html_class.push('opera');
    if (bowser.phantom) html_class.push('phantom');
    if (bowser.safari) html_class.push('safari');
    if (bowser.seamonkey) html_class.push('seamonkey');
    if (bowser.blackberry) html_class.push('blackberry');
    if (bowser.webos) html_class.push('webos');
    if (bowser.silk) html_class.push('silk');
    if (bowser.bada) html_class.push('bada');
    if (bowser.tizen) html_class.push('tizen');
    if (bowser.sailfish) html_class.push('sailfish');

    if (bowser.ios) html_class.push('ios');
    if (bowser.ipad) html_class.push('ipad');
    if (bowser.iphone) html_class.push('iphone');
    if (bowser.ipod) html_class.push('ipod');

    var tmp_version = typeof bowser.version === 'string' ? bowser.version : '';
    tmp_version = tmp_version.replace(/\./g, '-');

    html_class.push('v' + tmp_version);

    var orientation = $(window).width() >= $(window).height() ? 'landscape' : 'portrait';
    html_class.push(orientation);

    $('html').addClass(html_class.join(' '));
};

function formatNumbers(){
    $('.number-format, .slider-tick-label').each(function(){
        formatter.format($(this));
    });
}

$(document).ready(function(){
    formatNumbers();
});
