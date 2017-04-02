var Listener = function (controller) {
	this.$controller = controller;
	this.menu_ = 0;
};


Listener.prototype.listen = function () {
	var controller = this.$controller;

	$("div[id^=faq] .faqTitle").each(function () {
		$(this).on('click', function () {
			controller.faqHandler($(this).find("img[id^=faqArrow]"));
		});
	});


	$('.navbar-toggle').on('click', function () {
		if (this.menu_) {
			controller.handleMenu(0); //open
			this.menu_ = 0;
		} else {
			controller.handleMenu(1); //close
			this.menu_ = 1;
		}
	});

	$('.nav.navbar-nav a').on('click', function () {
		controller.handleMenu(0); //close
		this.menu_ = 0;
	});

	$('.arrows').on('click', function () {
		if ($(this).hasClass('active')) {
            try {
                _hmt.push(['_trackEvent', 'how', 'next']);
                _czc.push(['_trackEvent', 'how', 'next']);
                _paq.push(['trackEvent', 'how', 'next']);
                ga('send', 'event', 'how', 'next');
                controller.changeStep(this);
            } catch(e) {
                // catch undefined tracking libs
            }
		}
	});


	$('.stepWrapper').swipe({
		swipeLeft: function (event, direction, distance, duration, fingerCount) {
			var classes = $(this).attr('class').split(' ');
			var idS;
			$.each(classes, function (key, val) {
				if (val.substr(0, 4) == 'step') {
					idS = val.substr(4);
				}
			});
			var arrow = $('.arrows.arrow' + idS);
			if (arrow.length) {
				controller.changeStep(arrow);
			}

            try {
                _hmt.push(['_trackEvent', 'how', 'next']);
                _czc.push(['_trackEvent', 'how', 'next']);
                _paq.push(['trackEvent', 'how', 'next']);
                ga('send', 'event', 'how', 'next');
            } catch (e) {
                // catch undefined tracking libs
            }

		},
		swipeRight: function (event, direction, distance, duration, fingerCount) {
			var classes = $(this).attr('class').split(' ');
			var idS;
			$.each(classes, function (key, val) {
				if (val.substr(0, 4) == 'step') {
					idS = val.substr(4) - 1;
				}
			});
			var arrow = $('.arrows.arrow' + idS);
			if (arrow.length) {
				controller.changeStep(arrow);
			}
            try {
                _hmt.push(['_trackEvent', 'how', 'next']);
                _czc.push(['_trackEvent', 'how', 'next']);
                _paq.push(['trackEvent', 'how', 'next']);
                ga('send', 'event', 'how', 'next');
            } catch(e) {
                // catch undefined tracking libs
            }

		},
		threshold: 100
	});


	$('#firstMenu').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'menu', 'go to', 'how it works']);
            _czc.push(['_trackEvent', 'menu', 'go to', 'how it works']);
            _paq.push(['trackEvent', 'menu', 'go to', 'how it works']);
            ga('send', 'event', 'menu', 'go to', 'how it works');
        } catch(e) {
            // catch undefined tracking libs
        }
	});

	$('#secondtMenu').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'menu', 'go to', 'faq']);
            _czc.push(['_trackEvent', 'menu', 'go to', 'faq']);
            _paq.push(['trackEvent', 'menu', 'go to', 'faq']);
            ga('send', 'event', 'menu', 'go to', 'faq');
        } catch(e) {
            // catch undefined tracking libs
        }
	});

	$('#thirdMenu').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'menu', 'go to', 'about HCC']);
            _czc.push(['_trackEvent', 'menu', 'go to', 'about HCC']);
            _paq.push(['trackEvent', 'menu', 'go to', 'about HCC']);
            ga('send', 'event', 'menu', 'go to', 'about HCC');
        } catch(e) {
            // catch undefined tracking libs
        }
	});

	$('#fourthMenu').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'menu', 'go to', 'calculator']);
            _czc.push(['_trackEvent', 'menu', 'go to', 'calculator']);
            _paq.push(['trackEvent', 'menu', 'go to', 'calculator']);
            ga('send', 'event', 'menu', 'go to', 'calculator');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#termsButton').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'calculator', 'view', 'terms and conditions']);
            _czc.push(['_trackEvent', 'calculator', 'view', 'terms and conditions']);
            _paq.push(['trackEvent', 'calculator', 'view', 'terms and conditions']);
            ga('send', 'event', 'calculator', 'view', 'terms and conditions');
        } catch(e) {
            //
        }
	});

	$('.stepButton').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'how', 'to the calculator']);
            _czc.push(['_trackEvent', 'how', 'to the calculator']);
            _paq.push(['trackEvent', 'how', 'to the calculator']);
            ga('send', 'event', 'how', 'to the calculator');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq1').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'what is MCL']);
            _czc.push(['_trackEvent', 'faq', 'view', 'what is MCL']);
            _paq.push(['trackEvent', 'faq', 'view', 'what is MCL']);
            ga('send', 'event', 'faq', 'view', 'what is MCL');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq2').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'who is HCC']);
            _czc.push(['_trackEvent', 'faq', 'view', 'who is HCC']);
            _paq.push(['trackEvent', 'faq', 'view', 'who is HCC']);
            ga('send', 'event', 'faq', 'view', 'who is HCC');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq3').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'what is the price']);
            _czc.push(['_trackEvent', 'faq', 'view', 'what is the price']);
            _paq.push(['trackEvent', 'faq', 'view', 'what is the price']);
            ga('send', 'event', 'faq', 'view', 'what is the price');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq4').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'when should i repay']);
            _czc.push(['_trackEvent', 'faq', 'view', 'when should i repay']);
            _paq.push(['trackEvent', 'faq', 'view', 'when should i repay']);
            ga('send', 'event', 'faq', 'view', 'when should i repay');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq5').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'how to repay']);
            _czc.push(['_trackEvent', 'faq', 'view', 'how to repay']);
            _paq.push(['trackEvent', 'faq', 'view', 'how to repay']);
            ga('send', 'event', 'faq', 'view', 'how to repay');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq6').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'how to check status']);
            _czc.push(['_trackEvent', 'faq', 'view', 'how to check status']);
            _paq.push(['trackEvent', 'faq', 'view', 'how to check status']);
            ga('send', 'event', 'faq', 'view', 'how to check status');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq7').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'what if I replay late']);
            _czc.push(['_trackEvent', 'faq', 'view', 'what if I replay late']);
            _paq.push(['trackEvent', 'faq', 'view', 'what if I replay late']);
            ga('send', 'event', 'faq', 'view', 'what if I replay late');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq8').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'someone from HCC called is my info safe']);
            _czc.push(['_trackEvent', 'faq', 'view', 'someone from HCC called is my info safe']);
            _paq.push(['trackEvent', 'faq', 'view', 'someone from HCC called is my info safe']);
            ga('send', 'event', 'faq', 'view', 'someone from HCC called is my info safe');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq9').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'do you perform verification']);
            _czc.push(['_trackEvent', 'faq', 'view', 'do you perform verification']);
            _paq.push(['trackEvent', 'faq', 'view', 'do you perform verification']);
            ga('send', 'event', 'faq', 'view', 'do you perform verification');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq10').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'why not approved']);
            _czc.push(['_trackEvent', 'faq', 'view', 'why not approved']);
            _paq.push(['trackEvent', 'faq', 'view', 'why not approved']);
            ga('send', 'event', 'faq', 'view', 'why not approved');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq11').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'how to early repay']);
            _czc.push(['_trackEvent', 'faq', 'view', 'how to early repay']);
            _paq.push(['trackEvent', 'faq', 'view', 'how to early repay']);
            ga('send', 'event', 'faq', 'view', 'how to early repay');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq12').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'general terms and conditions']);
            _czc.push(['_trackEvent', 'faq', 'view', 'general terms and conditions']);
            _paq.push(['trackEvent', 'faq', 'view', 'general terms and conditions']);
            ga('send', 'event', 'faq', 'view', 'general terms and conditions');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('#faq13').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'faq', 'view', 'privacy policy']);
            _czc.push(['_trackEvent', 'faq', 'view', 'privacy policy']);
            _paq.push(['trackEvent', 'faq', 'view', 'privacy policy']);
            ga('send', 'event', 'faq', 'view', 'privacy policy');
        } catch(e) {
            // catch undefined tracking libs
        }
	});


	$('.faqButton').on('click', function () {
        try {
            _hmt.push(['_trackEvent', 'why', 'to the calculator']);
            _czc.push(['_trackEvent', 'why', 'to the calculator']);
            _paq.push(['trackEvent', 'why', 'to the calculator']);
            ga('send', 'event', 'why', 'to the calculator');
        } catch(e) {
            // catch undefined tracking libs
        }
	})
};
