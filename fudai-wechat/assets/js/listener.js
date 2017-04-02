
var Listener = function (controller) {
	this.$controller = controller;
        this.menu_ = 0;
};


Listener.prototype.listen = function () {
	var controller = this.$controller;

    $("div[id^=faq] .faqTitle").each(function(){
        $(this).on('click', function(){
            controller.faqHandler($(this).find("img[id^=faqArrow]"));
        });
    });
    
           
    
    $('.arrows').on('click',function(){
        if ($(this).hasClass('active')) {
            _hmt.push(['_trackEvent','how','next']);
            _paq.push(['trackEvent','how','next']);
            ga('send', 'event','how','next');
            controller.changeStep(this);
        }
    });




    $('#termsButton').on('click', function () {
        _hmt.push(['_trackEvent','calculator','view','terms and conditions']);
        _paq.push(['trackEvent','calculator','view','terms and conditions']);
        ga('send', 'event','calculator','view','terms and conditions');
    });
  
    $('.stepButton').on('click', function () {
        _hmt.push(['_trackEvent','how','to the calculator']);
        _paq.push(['trackEvent','how','to the calculator']);
        ga('send', 'event','how','to the calculator');
    });


    $('#faq1').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what is MCL']);
        _paq.push(['trackEvent','faq','view','what is MCL']);
        ga('send', 'event','faq','view','what is MCL');
    });


    $('#faq2').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','who is HCC']);
        _paq.push(['trackEvent','faq','view','who is HCC']);
        ga('send', 'event','faq','view','who is HCC');
    });



    $('#faq3').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what is the price']);
        _paq.push(['trackEvent','faq','view','what is the price']);
        ga('send', 'event','faq','view','what is the price');
    });



    $('#faq4').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','when should i repay']);
        _paq.push(['trackEvent','faq','view','when should i repay']);
        ga('send', 'event','faq','view','when should i repay');
    });



    $('#faq5').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','how to repay']);
        _czc.push(['_trackEvent','faq','view','how to repay']);
        _paq.push(['trackEvent','faq','view','how to repay']);
        ga('send', 'event','faq','view','how to repay');
    });



    $('#faq6').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','how to check status']);
        _paq.push(['trackEvent','faq','view','how to check status']);
        ga('send', 'event','faq','view','how to check status');
    });



    $('#faq7').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what if I replay late']);
        _paq.push(['trackEvent','faq','view','what if I replay late']);
        ga('send', 'event','faq','view','what if I replay late');
    });



    $('#faq8').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','someone from HCC called is my info safe']);
        _paq.push(['trackEvent','faq','view','someone from HCC called is my info safe']);
        ga('send', 'event','faq','view','someone from HCC called is my info safe');
    });



    $('#faq9').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','do you perform verification']);
        _paq.push(['trackEvent','faq','view','do you perform verification']);
        ga('send', 'event','faq','view','do you perform verification');
    });



    $('#faq10').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','why not approved']);
        _paq.push(['trackEvent','faq','view','why not approved']);
        ga('send', 'event','faq','view','why not approved');
    });


    $('#faq11').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','how to early repay']);
        _paq.push(['trackEvent','faq','view','how to early repay']);
        ga('send', 'event','faq','view','how to early repay');
    });


    $('#faq12').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','general terms and conditions']);
        _paq.push(['trackEvent','faq','view','general terms and conditions']);
        ga('send', 'event','faq','view','general terms and conditions');
    });


    $('#faq13').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','privacy policy']);
        _paq.push(['trackEvent','faq','view','privacy policy']);
        ga('send', 'event','faq','view','privacy policy');
    });


    $('.faqButton').on('click', function () {
        _hmt.push(['_trackEvent','why','to the calculator']);
        _paq.push(['trackEvent','why','to the calculator']);
        ga('send', 'event','why','to the calculator');
    })
};