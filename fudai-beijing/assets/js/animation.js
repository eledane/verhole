var Animation = function () {};

Animation.prototype.openMenu = function () {
    var menuDiv = $('.navbar-default');
    var menuUl = $('#navbar');
    var topDiv = $('.navbar.navbar-default');
    var tl = new TimelineMax();
    tl.to(topDiv,0.2,{className:'+=open'})
      .to(menuDiv,0.7,{height:'100%'});
};

Animation.prototype.closeMenu = function () {
    var menuDiv = $('.navbar-default');
    var menuUl = $('#navbar');
    var button =$('.navbar-toggle.collapsed');
    var topDiv = $('.navbar.navbar-default');
    var tl = new TimelineMax();
    tl.to(menuDiv,0.7,{height:'62px'})
      .set(topDiv,{className:'-=open'});
};

Animation.prototype.hanleFaq = function (el){    
    var id = $(el).attr('id').substr(8);
    
    if ($('#faq'+id).hasClass('open')){
        $('#faq'+id).removeClass('open');
        $(el).attr('src','./assets/img/arrowClose.png');
    }else{
        if($(".open").length){
            var idOpen = $(".open").attr('id').substr(3);
            $('#faq'+idOpen).removeClass('open');
            $('#faqArrow'+idOpen).attr('src','./assets/img/arrowClose.png');
        }
        $('#faq'+id).addClass('open');
        $(el).attr('src','./assets/img/arrowOpen.png');
    }
}

Animation.prototype.animateSteps = function (el){
    var id = $(el).attr('id').substr(5);     
    
    var tl = new TimelineMax();
    switch(id){
        case '1': 
                if ($(el).hasClass('left')){
                    tl.fromTo($('.step2'), 0.5, {'margin-left': '0px', opacity:'1'}, {'margin-left': '300px', opacity:'0'},0)
                      .set($('.step2'),{className:'-=active'},0.5)
                      .fromTo($('.step1'), 0.5, {'margin-right':'300px', opacity:'0'}, {'margin-right':'0px', opacity:'1'},0.5)
                      .set($('.step1'),{className:'+=active'},0.5)
                      .set($('.arrow2'),{className:'-=active'},0)
                      .set($('.arrow1'),{className:'-=left'},0)
                      .set($('.arrow1'),{className:'-=active'},0)
                      .set($('.arrow1'),{className:'+=active'},1);
                }else{
                    tl.set($('.arrow1'),{className:'-=active'},0)
                      .fromTo($('.step1'), 0.5, {'margin-right': '0px', opacity:'1'}, {'margin-right': '300px', opacity:'0'},0)
                      .set($('.step1'),{className:'-=active'})
                      .fromTo($('.step2'), 0.5, {'margin-left':'300px', opacity:'0'}, {'margin-left':'0px', opacity:'1'},0.5)
                      .set($('.step2'),{className:'+=active'},0.5)
                      .set($('.arrow2'),{className:'+=active'},1)
                      .set($('.arrow1'),{className:'+=active left'},1);
                }
                break;
        case '2': 
                if ($(el).hasClass('left')){
                    tl.set($('.arrow2'),{className:'-=active'},0)
                      .fromTo($('.step3'), 0.5, {'margin-left': '0px', opacity:'1'}, {'margin-left': '300px', opacity:'0'},0)
                      .set($('.step3'),{className:'-=active'},0.5)
                      .fromTo($('.step2'), 0.5, {'margin-right':'300px', opacity:'0'}, {'margin-right':'0px', opacity:'1'},0.5)
                      .set($('.step2'),{className:'+=active'},0.5)
                      .set($('.arrow3'),{className:'-=active'},0)
                      .set($('.arrow2'),{className:'-=left'},0)
                      .set($('.arrow2'),{className:'+=active'},1)
                      .set($('.arrow1'),{className:'+= active left'},1);
                    
                }else{
                    tl.set($('.arrow2'),{className:'-=active'},0)
                      .set($('.arrow1'),{className:'-=active'})
                      .set($('.arrow1'),{className:'-=left'})
                      .fromTo($('.step2'), 0.5, {'margin-right': '0px', opacity:'1'}, {'margin-right': '300px', opacity:'0'},0)
                      .set($('.step2'),{className:'-=active'},0.5)
                      .fromTo($('.step3'), 0.5, {'margin-left':'300px', opacity:'0'}, {'margin-left':'0px', opacity:'1'},0.5)
                      .set($('.step3'),{className:'+=active'},0.5)
                      .set($('.arrow2'),{className:'+=active left'},1)
                      .set($('.arrow3'),{className:'+=active'},1);
                }
                break;
        case '3': 
                if ($(el).hasClass('left')){
                    tl.set($('.arrow3'),{className:'-=active'},0)
                      .fromTo($('.step4'), 0.5, {'margin-left': '0px', opacity:'1'}, {'margin-left': '300px', opacity:'0'},0)
                      .set($('.step4'),{className:'-=active'},0.5)
                      .fromTo($('.step3'), 0.5, {'margin-right':'300px', opacity:'0'}, {'margin-right':'0px', opacity:'1'},0.5)
                      .set($('.step3'),{className:'+=active'},0.5)
                      .set($('.arrow3'),{className:'-=left'},0)
                      .set($('.arrow3'),{className:'+=active'},1)
                      .set($('.arrow2'),{className:'+=active'},1);
                }else{
                    tl.set($('.arrow2'),{className:'-=active'})
                      .set($('.arrow3'),{className:'-=active'},0)
                      .fromTo($('.step3'), 0.5, {'margin-right': '0px', opacity:'1'}, {'margin-right': '300px', opacity:'0'},0)
                      .set($('.step3'),{className:'-=active'},0.5)
                      .fromTo($('.step4'), 0.5, {'margin-left':'300px', opacity:'0'}, {'margin-left':'0px', opacity:'1'},0.5)
                      .set($('.step4'),{className:'+=active'},0.5)
                      .set($('.arrow3'),{className:'+=left active'},1);
                }
                break;
    }
    
};