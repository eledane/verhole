
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
    

    $('.navbar-toggle').on('click',function(){
        if (this.menu_){
            controller.handleMenu(0); //open
            this.menu_ = 0;
        }else{
            controller.handleMenu(1); //close
            this.menu_ = 1;
        }
    });            

    $('.nav.navbar-nav a').on('click',function(){
        controller.handleMenu(0); //close
        this.menu_ = 0;
    });            
    
    $('.arrows').on('click',function(){
        if ($(this).hasClass('active')) {
            _hmt.push(['_trackEvent','how','next']);
            _czc.push(['_trackEvent','how','next']);
            _paq.push(['trackEvent','how','next']);
            ga('send', 'event','how','next');
            controller.changeStep(this);
        }
    });


    $('.stepWrapper').swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount){                
            var classes = $(this).attr('class').split(' ');
            var idS;
            $.each(classes, function(key,val){
                if (val.substr(0,4) == 'step'){
                    idS = val.substr(4);
                }
            });
            var arrow = $('.arrows.arrow'+idS);
            if (arrow.length){
                controller.changeStep(arrow);
            }

            _hmt.push(['_trackEvent','how','next']);
            _czc.push(['_trackEvent','how','next']);
            _paq.push(['trackEvent','how','next']);
            ga('send', 'event','how','next');
            
        },
        swipeRight:function(event, direction, distance, duration, fingerCount){                
            var classes = $(this).attr('class').split(' ');
            var idS;
            $.each(classes, function(key,val){
                if (val.substr(0,4) == 'step'){
                    idS = val.substr(4)-1;
                }
            });
            var arrow = $('.arrows.arrow'+idS);
            if (arrow.length){
                controller.changeStep(arrow);
            }
            _hmt.push(['_trackEvent','how','next']);
            _czc.push(['_trackEvent','how','next']);
            _paq.push(['trackEvent','how','next']);
            ga('send', 'event','how','next');
            
        },
        threshold:100
    });
        

    $('#firstMenu').on('click', function () {
        _hmt.push(['_trackEvent','menu','go to','how it works']);
        _czc.push(['_trackEvent','menu','go to','how it works']);
        _paq.push(['trackEvent','menu','go to','how it works']);
        ga('send', 'event','menu','go to','how it works');
    });

    $('#secondtMenu').on('click', function () {
        _hmt.push(['_trackEvent','menu','go to','faq']);
        _czc.push(['_trackEvent','menu','go to','faq']);
        _paq.push(['trackEvent','menu','go to','faq']);
        ga('send', 'event','menu','go to','faq');
    });

    $('#thirdMenu').on('click', function () {
        _hmt.push(['_trackEvent','menu','go to','about HCC']);
        _czc.push(['_trackEvent','menu','go to','about HCC']);
        _paq.push(['trackEvent','menu','go to','about HCC']);
        ga('send', 'event','menu','go to','about HCC');
    });

    $('#fourthMenu').on('click', function () {
        _hmt.push(['_trackEvent','menu','go to','calculator']);
        _czc.push(['_trackEvent','menu','go to','calculator']);
        _paq.push(['trackEvent','menu','go to','calculator']);
        ga('send', 'event','menu','go to','calculator');
    });

    // CALCULATOR TWO MISSING
    
/*
    $('#loanButton').on('click', function() {
        _hmt.push(['_trackEvent','calculator','apply']);
        _czc.push(['_trackEvent','calculator','apply']);
        _paq.push(['trackEvent','calculator','apply']);
        ga('send', 'event','calculator','apply');
    });*/

    $('#termsButton').on('click', function () {
        _hmt.push(['_trackEvent','calculator','view','terms and conditions']);
        _czc.push(['_trackEvent','calculator','view','terms and conditions']);
        _paq.push(['trackEvent','calculator','view','terms and conditions']);
        ga('send', 'event','calculator','view','terms and conditions');
    });
  
    $('.stepButton').on('click', function () {
        _hmt.push(['_trackEvent','how','to the calculator']);
        _czc.push(['_trackEvent','how','to the calculator']);
        _paq.push(['trackEvent','how','to the calculator']);
        ga('send', 'event','how','to the calculator');
    });


    $('#faq1').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what is MCL']);
        _czc.push(['_trackEvent','faq','view','what is MCL']);
        _paq.push(['trackEvent','faq','view','what is MCL']);
        ga('send', 'event','faq','view','what is MCL');
    });


    $('#faq2').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','who is HCC']);
        _czc.push(['_trackEvent','faq','view','who is HCC']);
        _paq.push(['trackEvent','faq','view','who is HCC']);
        ga('send', 'event','faq','view','who is HCC');
    });



    $('#faq3').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what is the price']);
        _czc.push(['_trackEvent','faq','view','what is the price']);
        _paq.push(['trackEvent','faq','view','what is the price']);
        ga('send', 'event','faq','view','what is the price');
    });



    $('#faq4').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','when should i repay']);
        _czc.push(['_trackEvent','faq','view','when should i repay']);
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
        _czc.push(['_trackEvent','faq','view','how to check status']);
        _paq.push(['trackEvent','faq','view','how to check status']);
        ga('send', 'event','faq','view','how to check status');
    });



    $('#faq7').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','what if I replay late']);
        _czc.push(['_trackEvent','faq','view','what if I replay late']);
        _paq.push(['trackEvent','faq','view','what if I replay late']);
        ga('send', 'event','faq','view','what if I replay late');
    });



    $('#faq8').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','someone from HCC called is my info safe']);
        _czc.push(['_trackEvent','faq','view','someone from HCC called is my info safe']);
        _paq.push(['trackEvent','faq','view','someone from HCC called is my info safe']);
        ga('send', 'event','faq','view','someone from HCC called is my info safe');
    });



    $('#faq9').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','do you perform verification']);
        _czc.push(['_trackEvent','faq','view','do you perform verification']);
        _paq.push(['trackEvent','faq','view','do you perform verification']);
        ga('send', 'event','faq','view','do you perform verification');
    });



    $('#faq10').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','why not approved']);
        _czc.push(['_trackEvent','faq','view','why not approved']);
        _paq.push(['trackEvent','faq','view','why not approved']);
        ga('send', 'event','faq','view','why not approved');
    });


    $('#faq11').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','how to early repay']);
        _czc.push(['_trackEvent','faq','view','how to early repay']);
        _paq.push(['trackEvent','faq','view','how to early repay']);
        ga('send', 'event','faq','view','how to early repay');
    });


    $('#faq12').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','general terms and conditions']);
        _czc.push(['_trackEvent','faq','view','general terms and conditions']);
        _paq.push(['trackEvent','faq','view','general terms and conditions']);
        ga('send', 'event','faq','view','general terms and conditions');
    });


    $('#faq13').on('click', function () {
        _hmt.push(['_trackEvent','faq','view','privacy policy']);
        _czc.push(['_trackEvent','faq','view','privacy policy']);
        _paq.push(['trackEvent','faq','view','privacy policy']);
        ga('send', 'event','faq','view','privacy policy');
    });


    $('.faqButton').on('click', function () {
        _hmt.push(['_trackEvent','why','to the calculator']);
        _czc.push(['_trackEvent','why','to the calculator']);
        _paq.push(['trackEvent','why','to the calculator']);
        ga('send', 'event','why','to the calculator');
    })
};