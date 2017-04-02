/*global $,jQuery,document,Swiper,console,startCountdown,Countdown*/
var carousel = (function ($) {
    'use strict';

    var elements = {
            section: '',
            container: '.carousel-container',
            nextBtn: '.swiper-next',
            prevBtn: '.swiper-prev',
            pagination: '.swiper-pagination',
            countdown: '.countdown',
            noLoop: '.no-loop',
            staticImage: '.static-image',
            promotionSwiper: '.swiper',
        },
        settings = {
            loop: false,
            paginationClickable: true,
            simulateTouch: true,
            initialSlide: 0,
            calculateHeight:true,
            //progress: true,
            onTouchMove: onTouchMove,
            //resizeReInit: true,
            onSlideChangeStart: onSlideChangeStart,
            onFirstInit: onFirstInit,
            onSlideChangeEnd: onSlideChangeEnd,
            //onTouchStart: onTouchStart,
            onTouchEnd: onTouchEnd,
            //onSlideReset: onSlideReset,
            onProgressChange: onProgressChange,
            //onSetWrapperTransition: onSetWrapperTransition
        },
        settingsPromotion = {
            loop: true,
            autoplay: 5000,
            speed: 1200,
            paginationClickable: true,
            simulateTouch: true,
            initialSlide: 0,
            calculateHeight:true,
            //progress: true,
            onTouchMove: onTouchMove,
            //resizeReInit: true,
            onSlideChangeStart: onSlideChangeStart,
            onFirstInit: onFirstInit,
            //onTouchStart: onTouchStart,
            //onTouchEnd: onTouchEnd,
            //onSlideReset: onSlideReset,
            onProgressChange: onProgressChange,
            //onSetWrapperTransition: onSetWrapperTransition
        },
        $elements = [],
        swipers = [];

    function addSwiperEvents($swiper, swiper) {
        var $nextBtn = $swiper.find($elements.nextBtn),
            $prevBtn = $swiper.find($elements.prevBtn);

        swiper.nextBtn = $nextBtn;
        swiper.prevBtn = $prevBtn;

        swiper.nextBtn.on('click', function (e) {
            e.preventDefault();
            swiper.swiper.swipeNext();
        });

        swiper.prevBtn.on('click', function (e) {
            e.preventDefault();
            swiper.swiper.swipePrev();
        });

    }

    function checkSlides(swiper) {
        if (swiper.slides.length === 1) {
            return false;
        } else {
            return true;
        }
    }

    function hideImages() {
        var image = $(elements.staticImage);
        if (image.length) {
            image.fadeOut(200);
        }
    }

    function showImages() {
        var image = $(elements.staticImage);
        if (image.length) {
            image.fadeIn(200);
        }
    }

    function startCountdown() {
        var countdownElem = $(elements.countdown),
            element,
            finalDate,
            countDownDate,
            countdownBody,
            finishMessage,
            promotionLink,
            countdown;

        if (countdownElem.length) {

            countdownElem.each(function () {
                element = $(this);
                countdownBody = $(this).parent();
                promotionLink = $(this).closest('.swiper-slide-content').find('.btn');
                finalDate = $(this).data('end').split(/[- :]/);
                countDownDate = new Date(finalDate[0], finalDate[1] - 1, finalDate[2], finalDate[3], finalDate[4], finalDate[5]);
                countdown = new Countdown(element, countDownDate);
                countdown.run(countdownBody, promotionLink);
            });
        }
    }

    function onSlideClick(swiper) {
        //onSlideChangeEnd();
    }

    function onTouchMove(swiper) {

    }

    function onSlideChangeStart(swiper) {
        //onsSlideChangeStart();
    }

    function onProgressChange(swiper) {
       // Progress
    }

    function onTouchStart(swiper) {
    }

    function onTouchEnd(swiper) {
        onSlideChangeEnd(swiper);
    }

    function onSetWrapperTransition(swiper) {
    }

    function onSlideReset(swiper) {
        onSlideChangeEnd(swiper);
    }

    function onFirstInit() {
        startCountdown();
    }

    function onSlideChangeEnd(swiper) {
        var slidesCount,
            active,
            $pagination;

        //showImages();
        //console.log(swipers);
        for (var i = 0; i < swipers.length; i++) {
            if (swipers[i].swiper.loopCreated === true) {
                slidesCount = swipers[i].swiper.slides.length - 2;
                if (slidesCount === 1) {
                    swipers[i].nextBtn.hide();
                    swipers[i].prevBtn.hide();
					if(typeof $pagination !== "undefined") {
						$pagination.hide();
					}
                }
            } else {
                slidesCount = swipers[i].swiper.slides.length;
                active = (swipers[i].section.find('.swiper-slide-active').index()) + 1;
                $pagination = $(swipers[i].pagination).find('.swiper-pagination-switch');
                $pagination.removeClass('swiper-active-switch');
                $($pagination[active - 1]).addClass('swiper-active-switch');
                if (slidesCount > 1) {
                    if (active === 1) {
                        swipers[i].prevBtn.hide();
                        swipers[i].nextBtn.show();
                    } else if (active === slidesCount) {
                        swipers[i].prevBtn.show();
                        swipers[i].nextBtn.hide();
                    } else {
                        swipers[i].prevBtn.show();
                        swipers[i].nextBtn.show();
                    }
                } else {
                    swipers[i].nextBtn.hide();
                    swipers[i].prevBtn.hide();
                    $pagination.hide();
                }
            }
        };
    }

    function reinit() {
        for (var i = 0; i < swipers.length; i++) {
            swipers[i].swiper.swipeTo(0,300);
            swipers[i].swiper.reInit();
            swipers[i].swiper.destroy();
            swipers[i].prevBtn.unbind();
            swipers[i].nextBtn.unbind();
        }
        swipers = [];
        firstLoanInit();
    }

    function firstLoanInit() {
        var prop,
            $swiper,
            $section,
            $swipers,
            newSwiper,
            pagination,
            slidesCount,
            isThereNoLoop,
            loop = false,
            swajpr;


        for (prop in elements) {
            if (elements.hasOwnProperty(prop)) {
                $elements[prop] = $(elements.section + ' ' + elements[prop]);
            }
        }

        $swipers = $('.tab-content .active').find(elements.container);
        $.each($swipers, function (index, value) {
            $swiper = $(value);
            $section = $swiper.closest('section');
            swajpr = 'section.' + $section[0].className + ' ' + elements.container;

            isThereNoLoop = $section.find($(elements.noLoop)).length;
            slidesCount = $section.find('.swiper-slide').length;
            if (isThereNoLoop === 1 || slidesCount === 1) {
                settings.loop = false;
            } else {
                settings.loop = true;
            }
            pagination = 'section.' + $section[0].className + ' ' + elements.pagination;
            settings.pagination = pagination;
            newSwiper = $(swajpr).swiper(settings);
            //newSwiper = new Swiper(swajpr, settings);
            swipers[index] = {
                swiper: newSwiper,
                section: $section,
                pagination: pagination,
                nextBtn: {},
                prevBtn: {}
            };
            addSwiperEvents($(swajpr), swipers[index]);
        });

       onSlideChangeEnd();
    }

    function init() {
        var prop,
            $swiper,
            $section,
            newSwiper,
            pagination,
            slidesCount,
            isThereNoLoop,
            loop = false,
            swajpr;



        for (prop in elements) {
            if (elements.hasOwnProperty(prop)) {
                $elements[prop] = $(elements.section + ' ' + elements[prop]);
            }
        }

        $.each($elements.container, function (index, value) {
            $swiper = $(value);
            $section = $swiper.closest('section');
            swajpr = 'section.' + $section[0].className + ' ' + elements.container;
            isThereNoLoop = $section.find($(elements.noLoop)).length;
            slidesCount = $section.find('.swiper-slide').length;
            var swajprType = $section[0].className;
            if (isThereNoLoop === 1 || slidesCount === 1) {
                settings.loop = false;
            } else {
                settings.loop = true;
            }
            pagination = 'section.' + $section[0].className + ' ' + elements.pagination;
            settings.pagination = pagination;
            settingsPromotion.pagination = pagination;
            if(swajprType === 'swiper') {
                newSwiper = $(swajpr).swiper(settingsPromotion);
            } else {
                newSwiper = $(swajpr).swiper(settings);
            }
            swipers[index] = {
                swiper: newSwiper,
                section: $section,
                pagination: pagination,
                nextBtn: {},
                prevBtn: {}
            };
            addSwiperEvents($(swajpr), swipers[index]);
        });

       onSlideChangeEnd();

    }

    return {

        init: init,
        firstLoanInit: firstLoanInit,
        reinit: reinit

    };

}(jQuery));
