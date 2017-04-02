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
