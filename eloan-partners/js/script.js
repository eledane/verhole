// smooth scrolling

$(document).ready(function () {
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        var offset = -110;

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + offset
        }, 1500, 'easeInOutExpo');
        return false;
        event.preventDefault();
    });

//Form
    $('#contact').validate({
        rules: {
            "partner-name": {
                required: true,
                pattern: /^([^0-9]*)$/  //not a number
            },
            "URL": {
                required: true,
                url: true
            },
            "contact-person-name": {
                required: true,
                pattern: /^([^0-9]*)$/
            },
            "contact-person-phone": {
                required: true,
                pattern: /^([^a-z]*)$/
            },
            "daily-sales": {
                required: true,
                number: true
            },
            "daily-visitors": {
                required: true,
                number: true
            },
            "average-price": {
                required: true,
                number: true
            }
        }
    });

});
