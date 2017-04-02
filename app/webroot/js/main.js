var cardSwiper;
var tilesSwiper;
var footerObject;
var formObject;
var slidersObject;
var texts;
var firstLoanObject;
var navbarObject;

var selectedCityYes = '';
var cityPlaceholderYes = '';

var selectedCityNo = '';
var cityPlaceholderNo = '';

function Form () {

	this.setLabelClass = function () {
		$(".form .form-group label").addClass("control-label");
	};

	this.changeErrorClass = function () {
		$(".form .form-group.error").addClass("has-error");
	};

	this.addIconToErrorMessage = function () {
		$(".form .error-message").prepend('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>');
	};

	this.reload = function () {
		if($('.contact-wcl-form').length > 0 || $('.default-contact-no-agreement').length > 0 || $('.default-contact-agreement').length > 0) {
			selectProvinceYes().init();
		}
		if($('.contact-wcl-form').length > 0) {
			selectProvinceNo().init();
		}
		if($('.ajaxLeaveForm .error-message').length) {
			var whereScroll = $(".ajaxLeaveForm .error-message:first-of-type").offset().top - 230;
			$('body, html').animate({
				scrollTop: whereScroll
			}, 500);
		}
		if( $("#public-successMessage").length ) {
			$(".ajaxLeaveForm").css("height", $(".ajaxLeaveForm").height());
			$("#ContactAddForm").fadeOut();
			$(".hc-form").fadeOut();
			$('.main-form').addClass('sent');
			$('.message > p').fadeIn();
			$(".ajaxLeaveForm").css("height", $(".ajaxLeaveForm .message").height());
			var whereScroll = $(".ajaxLeaveForm .message").offset().top - 150;
			$('body, html').animate({
				scrollTop: whereScroll
			}, 500);


			$(".color-light-gray.biggerInForm").hide();
			$(".leaveForm").find(".box").addClass("bg-success");
			$(".leaveForm.box").addClass("bg-success");
			$(".leaveForm input[type=text], .leaveForm input[type=tel], .leaveForm input[type=email]").attr("value", "");
			$(".leaveForm textarea").val("");
		}


		formObject.setLabelClass();
		formObject.changeErrorClass();
		formObject.addIconToErrorMessage();
		formObject.init();
	};

	this.init = function () {
		$("input[type=submit]").on("click", function (e) {
			formObject.reload();
		});
	};
}


function career() {

	/** otevření a zobrazení inzerátu na stránce career */
	if(typeof window.location.hash !== "undefined" && window.location.hash !== "" && $(window.location.hash + "-section").length > 0){
		showPosition ();
	}

	$("section.career .position .see-details a").on("click", function (e) {
		e.preventDefault();
		var textActual = $(this).html();
		var textHide = $(this).attr("data-text-hide");
		var textSee = $(this).attr("data-text-see");

		if (textActual == textHide) {
			$(this).html(textSee);
			$(this).parent().parent().parent().find(".description").hide(300);
		}
		else {
			$(this).html(textHide);
			$(this).parent().parent().parent().find(".description").show(300);
		}
	});
}

function faq() {
	$("section.faq .question").on("click", function () {
		$(this).toggleClass("active");
		$(this).parent().find(".answer").stop().slideToggle(300);
	});
}

function mediaCenter() {
	var thisInstance = this;


	this.initMediaCenter = function () {
		$(".tabs-menu .col-sm-4:first-child li").addClass("current");

		if (window.location.hash)
			$(".tabs-menu a[href*="+window.location.hash+"]").trigger("click");

	};

	$(".tabs-menu a").click(function (e) {
		e.preventDefault();


		var tab = $(this).attr("href");
		var scrollTopTo = $(window).scrollTop();
		window.location.href = tab;
		$(window).scrollTop(scrollTopTo);

		$(this).parent().parent().find("li").addClass("current");
		$(this).parent().parent().siblings().find("li").removeClass("current");
		$(".tab-content").not(tab).css("display", "none");
		$(tab).fadeIn();

		thisInstance.reloadArrows();
	});

	$("[data-type]").click(function (e) {
		e.preventDefault();

		var type = $(this).attr("data-type");

		var activeTab = $(".tabs-menu .current a").attr("href").split("-")[1];

		if (type == "previous") {
			$("[href=#tab-" + eval(eval(activeTab) - 1) + "]").trigger("click");
		} else if (type == "next") {
			$("[href=#tab-" + eval(eval(activeTab) + 1) + "]").trigger("click");
		}

		thisInstance.reloadArrows();
	});

	this.reloadArrows = function () {
		var activeTab = $(".tabs-menu .current a").attr("href").split("-")[1];

		$("[data-type]").removeAttr("class");
		$("[data-type] span").removeAttr("class");

		if (activeTab == 1) {
			$("[data-type=previous]").addClass("color-extra-light-gray");
			$("[data-type=previous] span").addClass("arrow light-gray-left");

			$("[data-type=next]").addClass("color-red");
			$("[data-type=next] span").addClass("arrow dark-gray-right");

		}
		else if (activeTab == 2) {
			$("[data-type=previous]").addClass("color-red");
			$("[data-type=previous] span").addClass("arrow dark-gray-left");

			$("[data-type=next]").addClass("color-red");
			$("[data-type=next] span").addClass("arrow dark-gray-right");
		}
		else if (activeTab == 3) {
			$("[data-type=previous]").addClass("color-red");
			$("[data-type=previous] span").addClass("arrow dark-gray-left");

			$("[data-type=next]").addClass("color-extra-light-gray");
			$("[data-type=next] span").addClass("arrow light-gray-right");
		}
	};
}

function Sliders() {
	var thisInstance = this;
	var sliders = [];
	/** Get slider values and search for correct result in the data set, write result to its element **/
	this.recountResult = function(){
		var resultElem = $(".result span:first");
		var amountSlider = sliders[0];
		var timeSlider = sliders[1];
		var amount = amountSlider.input.val();
		var time = timeSlider.input.val();
		var resultText = moneyFormat(amountSlider.calc.data[time][amount]);
		resultElem.text(resultText);
	};

	this.setDefaults = function(){
		$.each(sliders, function(key, slider){
			if(!slider.touched && slider.isVisible()){
				slider.animateToMiddle(500, slider.getMiddleValue());
				if(slider.isMonthSlider()){
					//slider.updateMinMax();
				}
			}
		})
	}

	/** Create slider object instances, set initial values, setup slider attributes **/
	this.init = function () {
		if($(".slider-wrapper").length < 1) return;
		var instance = this;
		$(".slider-wrapper").each(function (index) {
			var newSlider = new Slider($(this).find(".slider-elem"));
			newSlider.setInput(newSlider.element.data("value"));
			sliders.push(newSlider);
			newSlider.setup();
		})
		$.each(sliders, function(key, slider){
			slider.input.change(thisInstance.recountResult);
			if(slider.isMonthSlider()){
				slider.setSecondSlider(sliders[0]);
				var middleStep = Math.floor(slider.calc.monthSteps.length / 2);
				var mn = slider.secondSlider.getNewMin(middleStep);
				var mx = slider.secondSlider.getNewMax(middleStep);
				slider.updateMinMax(mn, mx);
			}
		});
		this.recountResult();
		$('.calculator-switch').change(function(){
			var newCalc = $('.calculator-switch:checked').data('toggle-type');
			thisInstance.changeCalc(newCalc);
		});

		// a little delay to prevent stuttering
		setTimeout(function(){
			thisInstance.setDefaults();
		}, 1000);
		$(window).scroll(function(){
			thisInstance.setDefaults();
		});

	};

	/** Change calc data set for all sliders to reflect selected documents **/
	this.changeCalc  = function(newCalc){
		$.each(sliders, function(key, slider){
			slider.changeCalc(newCalc);
			if(!slider.isMonthSlider()){
				slider.changeRange();
				slider.setBounds();
				if(newCalc === 'posl') {
					slider.animateToMiddle(500, slider.getMiddleValue(homeMonthSliderInitialStep, homeAmountSliderInitialStep));
				} else {
					slider.animateToMiddle(500, slider.getMiddleValue());
				}
			} else {
				this.element.parent().find(".min").text(this.calc.monthSteps[this.min]);
				this.element.parent().find(".max").text(this.calc.monthSteps[this.calc.monthSteps.length - 1]);
				slider.updateMinMax();
				if(newCalc === 'posl') {
					slider.animateToMiddle(500, slider.getMiddleValue(homeMonthSliderInitialStep, homeAmountSliderInitialStep));
				} else {
					slider.animateToMiddle(500, slider.getMiddleValue());
				}
			}
		});
		//thisInstance.setDefaults();
		this.recountResult();
	}

}

function Footer() {
	this.height = 0;

	this.loadHeight = function () {
		$("footer .min-375 .col-xs-4 ul").each(function (index) {
			var actualHeight = $(this).height();
			if (actualHeight > footerObject.height) {
				footerObject.height = actualHeight;
			}
		});
	};

	this.setHeight = function () {
		$("footer .min-375 .col-xs-4 ul").height(footerObject.height);
	};

	this.init = function () {
		footerObject.loadHeight();
		footerObject.setHeight();
	};

	$(window).on("resize", function () {
		footerObject.init();
	});
}

function InitAction() {
	/** TOGGLE ON CLICK */
	$("[data-show]").unbind().on("click", function (e) {
		e.preventDefault();
		$($(this).attr("data-show")).slideToggle(300);
	});
}

function budgetTool() {
	var thisInstance = this;

	// remove number separators from number
	this.getNumber = function (number) {
		return parseInt(number.replace(/\./gi, "").replace(/,/gi, "").replace(/ /gi, ""), 10);
	};
	this.getClosest = function (num, array) {
		var curr = array[0];
		var diff = Math.abs (num - curr);
		for (var val = 0; val < array.length; val++) {
			var newdiff = Math.abs (num - array[val]);
			if (newdiff < diff) {
				diff = newdiff;
				curr = array[val];
			}
		}
		return curr;
	}
	this.reverseArray = function(obj) {
		var new_obj = {};
		for (var prop in obj) {
			if(obj.hasOwnProperty(prop)) {
				new_obj[obj[prop]] = prop;
			}
		}
		return new_obj;
	};

	var incomeFields = $('.income-fields input[data-type="number"]');
	var expensesFields = $('.expenses-fields input[data-type="number"]');
	var claim = $(".result-info");
	var result = 0;
	var recommendedResult = 0.7; // 70% of result
	var recommendedInstallment = 0.8; // 80% of result
	var expenses = 0;
	var income = 0;
	var limit = 0;
	var emergencySavings = 0;
	var monthlyInstallmentIncome = 0;
	var minLoanValue = $('.budgetType:checked').val();

	// remove separators from all income input numbers and count them together
	$(incomeFields).each(function() {
		var num = thisInstance.getNumber(this.value);
		if (!isNaN(num)) {
			income += num;
		}
	});

	// remove separators from all expenses input numbers and count them together
	$(expensesFields).each(function() {
		var num = thisInstance.getNumber(this.value);
		if (!isNaN(num)) {
			expenses += num;
		}
	});

	result = income - expenses;
	recommendedResult *= result;
	recommendedInstallment *= result;
	emergencySavings = Math.floor(result * 0.2);
	monthlyInstallmentIncome = result - emergencySavings;

	// remove everything but number from result if income is more than 0
	if (income > 0) {
		income = income.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		$(".result-loan-income").text('¥' + moneyFormat(income));
	} else {
		$(".result-loan-income").text('0');
	}

	// remove everything but number from result if expenses are more than 0
	if (expenses > 0) {
		expenses = expenses.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		$(".result-loan-expenses").text('¥'+ moneyFormat(expenses));
	} else {
		$(".result-loan-expenses").text('0');
	}

	// Logic for showing result message and adding result classes to numbers
	// 	currently TO-DO
	// 	limit should be maximum loan amount
	// 	recommendedResult should be income - result multiplied by % where we count some money reserve for client to afford the loan
	if (recommendedResult < limit) {
		$(".disposable-income").addClass('loan-status-error').removeClass('loan-status-success loan-status-warning');
		$(".savings-emergency").addClass('loan-status-error').removeClass('loan-status-success loan-status-warning');
		$(".income-monthly-installment").addClass('loan-status-error').removeClass('loan-status-success loan-status-warning');
	}

	if (result >= limit && recommendedResult < limit) {
		$(".disposable-income").addClass('loan-status-warning').removeClass('loan-status-success loan-status-error');
		$(".savings-emergency").addClass('loan-status-warning').removeClass('loan-status-success loan-status-error');
		$(".income-monthly-installment").addClass('loan-status-warning').removeClass('loan-status-success loan-status-error');
	}

	if (recommendedResult >= limit) {
		$(".disposable-income").addClass('loan-status-success').removeClass('loan-status-error loan-status-warning');
		$(".savings-emergency").addClass('loan-status-success').removeClass('loan-status-error loan-status-warning');
		$(".income-monthly-installment").addClass('loan-status-success').removeClass('loan-status-error loan-status-warning');
	}

	// show or hide savings and monthly installment income wrapper
	if (result > 0) {
		$(".status-emergency").slideDown(300);
		$(".status-installment").slideDown(300);
	} else {
		$(".status-emergency").slideUp(300);
		$(".status-installment").slideUp(300);
	}

	// add text to result fields only when the result is more than zero
	if (result > 0) {
		result = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		emergencySavings = emergencySavings.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		monthlyInstallmentIncome = monthlyInstallmentIncome.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		$(".disposable-income").text('¥' + moneyFormat(result));
		$(".savings-emergency").text('¥' + moneyFormat(emergencySavings));
		$(".income-monthly-installment").text('¥' + moneyFormat(monthlyInstallmentIncome));
	} else {
		result = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
		//result = result.replace('-','');
		$(".disposable-income").text('¥' + moneyFormat(result));
	}
}

function formBudgetToolValues() {
	var interestedID = $('input[type="radio"][id*="InterestedIn"]:checked').attr("id");
	var interestedValue = $('label[for="' + interestedID + '"]').text();

	var workIncome = $("#workIncome").val();
	var parttimeIncome = $("#parttimeIncome").val();
	var inputRents = $("#inputRents").val();
	var inputFood = $("#inputFood").val();
	var inputChildren = $("#inputChildren").val();
	var otherExpenses = $("#otherExpenses").val();

	$("#ContactInterestedIn").val(interestedValue)
	$("#ContactWorkIncome").val(workIncome);
	$("#ContactParttimeIncome").val(parttimeIncome);
	$("#ContactRents").val(inputRents);
	$("#ContactFood").val(inputFood);
	$("#ContactChildrenCost").val(inputChildren);
	$("#ContactOtherExpenses").val(otherExpenses);
}

function replaceSelect(selector){
	var select = $(selector);
	var options = select.find("option");
	//select.hide();

	var replacement = "<div class='select-replacement'><div class='title'></div><div class='options'></div></div>";
	var $replacement = $(replacement);
	select.parent().prepend($replacement);

	options.each(function(){
		var newOption = "<div class='replacement-option' data-value='"+$(this).val()+"'>"+$(this).text()+"</div>";
		$replacement.find(".options").append(newOption);
	});
	$replacement.find(".title").text(options.first().text());
	$replacement.find(".options").first().addClass("selected");
	$replacement.find(".options").hide();

	bindSelectReplacementEvents();
}

function bindSelectReplacementEvents(){
	$(".select-replacement .title").click(function(){
		$(this).siblings(".options").slideToggle(100);
	});
	$(".select-replacement .replacement-option").click(function(){
		var select = $(this).closest(".select-replacement");
		select.find(".title").text($(this).text());
		$(".selected").removeClass("selected");
		$(this).addClass("selected");
		$(this).parent().slideUp(100);
		var origSelect = select.siblings("select");
		origSelect.val($(this).data("value"));
		origSelect.trigger('change');
	});
	$(document).click(function(e){
		if(!$('.select-replacement').is(e.target) && $(".select-replacement").has(e.target).length === 0){
			$(".select-replacement .options").hide();
		}
	});
}

function destroyPhone () {
	if($(window).width() > 1024) {
		$("a[href^=\"tel:\"]").removeAttr("href").addClass("text-phone");
	}
}

function moneyFormat ( number ) {
	//return numeral(number).format('0,0').replace(/,/gi, defaultThousandSeparator);
	return number;
}

function FormValidate() {
	var thisInstance = this;
	this.validate = function ( form ) {
		var valid = true;
		$(form).find("[data-type=number][required]").each(function (i) {
			var actualValue = $(this).val();

			$(this).parent().find('label.error').remove();
			$(this).removeClass("error");

			if( /(^\d{1,}(\.\d{3}){0,}?$)|(^\d{1,}(\,\d{3}){0,}?$)|(^\d{1,}(\ \d{3}){0,}?$)/.test( actualValue ) ) {
			}
			else {
				var id = $(this).attr("id");

				$(this).addClass("error");

				if ( actualValue )
					$(this).parent().append('<label id="'+id+'-error" class="error" for="'+id+'">'+errorMsg['IncorrectNumber']+'</label>');
				else
					$(this).parent().append('<label id="'+id+'-error" class="error" for="'+id+'">'+errorMsg['EmptyNumber']+'</label>');

				valid = false;
			}

		});
		/*$(form).find("[data-min][required]").each(function (i) {
		 var actualValue = $(this).val();
		 if(actualValue) {
		 var clearValue = parseInt(actualValue.replace(/,/g, ""));
		 var minValue = parseInt($(this).data('min'));

		 $(this).parent().find('label.error').remove();
		 $(this).removeClass("error");

		 if(clearValue < minValue) {
		 var id = $(this).attr("id");

		 $(this).addClass("error");

		 if ( actualValue ) {
		 $(this).parent().append('<label id="'+id+'-error" class="error" for="'+id+'">'+errorMsg['MinValue']+'</label>');
		 }

		 valid = false;
		 }
		 }

		 });*/


		var budgetType = $(".budgetType");
		var budgetTypeChecked = $(".budgetType:checked");
		if(!budgetTypeChecked.length) {
			var budgetType = $(".budgetType");
			var budgetTypeParent = budgetType.parent();
			$(budgetTypeParent).find('label.error').remove();
			$(budgetTypeParent).removeClass("error");
			budgetTypeParent.addClass('error');
			budgetTypeParent.append('<label id="error" class="error error-budgetType">'+errorMsg['EmptyField']+'</label>');
			valid = false;
		} else {
			var budgetType = $(".budgetType");
			var budgetTypeParent = budgetType.parent();
			$(budgetTypeParent).find('label.error').remove();
			$(budgetTypeParent).removeClass("error");
		}
		var budgetTypeLabel = budgetType.parent().find('label:not(.error)');
		$(budgetTypeLabel).on('click', function() {
			var budgetType = $(".budgetType");
			var budgetTypeParent = budgetType.parent();
			$(budgetTypeParent).find('label.error').remove();
			$(budgetTypeParent).removeClass("error");
		});

		$(form + " input[data-type=number]").unbind("keyup").keyup(function() {
			thisInstance.validate(form);
		});

		return valid;
	};




	this.initFormValidate = function () {
	};
}


/*function Navbar() {
 var NavbarInstance = this;
 this.navbar = $("header.navbar");
 this.topOffset = 0;
 this.direction = "";

 this.setNavbar = function ( direction ) {
 $("body").removeClass("scrollDown");
 if (direction == "down") {
 $("body").addClass("scrollDown");
 if ($(window).width() > 767) {
 this.navbar.find(".nav-top").stop().hide("blind", 200);
 $(".nav-main").stop().css({
 'transform' : 'translateY(0)',
 'box-shadow' : '0px 2px 3px rgba(0, 0, 0, 0.3)'
 });
 } else if ($(window).width() < 768) {
 $(".loans-wrapper").stop().slideUp(200)
 }
 }
 else {
 if ($(window).width() > 767) {
 this.navbar.find(".nav-top").stop().show("blind", 200);
 $(".nav-main").stop().css({
 'transform' : 'translateY(0)',
 'box-shadow' : 'none'
 });
 } else if ($(window).width() < 768) {
 $(".loans-wrapper").stop().slideDown(200)
 }
 }
 };




 $(window).on("scroll resize", function () {
 var actualDirection	= NavbarInstance.direction;
 var actualPosition	= NavbarInstance.topOffset + $(window).height() - 109;
 var actualOffset 	= $(window).scrollTop();
 var actualBodyHeight= $("body").height();


 if ((NavbarInstance.topOffset > actualOffset && !(actualBodyHeight <= actualPosition + 36)) || actualOffset <= 0) {
 NavbarInstance.direction = "up";
 }
 else if (NavbarInstance.topOffset < actualOffset || (actualBodyHeight <= actualPosition + 36)) {
 NavbarInstance.direction = "down";
 }


 NavbarInstance.topOffset = $(window).scrollTop();
 if (actualDirection != NavbarInstance.direction && !NavbarInstance.preventChanges)
 NavbarInstance.setNavbar( NavbarInstance.direction );
 });
 }

 Navbar.prototype.preventChanges = false;*/

function showPosition (){
	var el = window.location.hash + "-section";
	$(el + " .description").show();
	$(el + " .see-details a").html($(el + " .see-details a").attr("data-text-hide"));
	var y = $(el).offset().top -100;
	$('html, body').animate({
		scrollTop: y+"px"
	}, 400);
}


function setSameCommodityHeight(){
	var winWidth = $(window).width();
	var maxHeight = 0;

	if(winWidth > 991){
		$('.pos-loan .commodity-split').each(function(){
			var itemHeight = $(this).height();
			if( itemHeight > maxHeight ){
				maxHeight = itemHeight;
			}
		})
		$('.pos-loan .commodity-split, .pos-loan .commodity-item').each(function(){
			$(this).height(maxHeight);
		})
	} else{
		$('.pos-loan .commodity-split, .pos-loan .commodity-item').each(function(){
			$(this).css('height','inherit');
		})
	}
}



$(document).ready(function () {
	footerObject = new Footer();
	formObject = new Form();


	footerObject.init();

	InitAction();

	formObject.init();

    faqSection();
    faqSectionDropTabs();
    toggleFaqQuestions();
    toggleFaqCategory();

	//navbarObject = new Navbar();

	/** show more v navbar */
	$(".links.show-more").on("click", function (e) {
		e.preventDefault();
		$(this).parent().find(".none").toggle(300);



	});

	/** hiding menu **/
	$('nav').headroom({
		offset: 100,
		tolerance: {
			up: 5,
			down: 2
		}
	});

	/** zničit odkazy v nav idangerous swiper */
	$(".header-carousel-item").on("click", function (e) {e.preventDefault();});


	/** REPLACE SELECT **/
	//replaceSelect(".documents-select select");


	/** Image headers load on breakpoints **/
	function backgroundImgLazy() {
		var breakpointSm = 768;
		var breakpointMd = 992;
		var breakpointLg = 1200;
		var breakpointOrigin = 1440;
		var backgroundMd = $(".background-md");
		var backgroundSm = $(".background-sm");
		var backgroundLg = $(".background-lg");
		var backgroundOrigin = $(".background-origin");
		var backgroundFull = $(".background-full");
		var windowWidth = $(window).width();
		if (windowWidth <= breakpointSm) {
			backgroundSm.each(function() {
				$(this).attr("src", $(this).data("image"));
			})
		}
		if (windowWidth > breakpointSm && windowWidth <= breakpointMd) {
			backgroundMd.each(function() {
				$(this).attr("src", $(this).data("image"));
			})
		}
		if (windowWidth > breakpointMd && windowWidth <= breakpointLg) {
			backgroundLg.each(function() {
				$(this).attr("src", $(this).data("image"));
			})
		}
		if (windowWidth > breakpointLg && windowWidth <= breakpointOrigin) {
			backgroundOrigin.each(function() {
				$(this).attr("src", $(this).data("image"));
			})
		}
		if (windowWidth > breakpointOrigin) {
			backgroundFull.each(function() {
				$(this).attr("src", $(this).data("image"));
			})
		}
	};
	backgroundImgLazy();
	$(window).resize(function() {
		backgroundImgLazy();
	});


	/** ON LINK CLICK SLIDE */
	$(function () {
		$('.loan-control a').bind('click', function (event) {
			var $anchor = $(this);

			$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1600, 'easeOutCubic');
			event.preventDefault();
		});
	});

	/** LOAN CALCULATION - SLIDE TO MAP + FORM CONTROL */
	$('.loan-control a.btn').click(function () {

		$('.search-box, #type-selector').fadeOut(function () {
			$('.map-info-box .form').fadeIn();
		})
	});
	$('.form .close-btn').click(function () {
		$('.map-info-box .form').fadeOut(function () {
			$('.search-box, #type-selector').fadeIn();
		})
	});

	$('.navbar-toggle').click(function () {
		var toogle = $(this);
		var menu_wrapper = $('.nav-main');
		menu_wrapper.toggleClass('open');
	});

	/** FUCK YOU adBlock */
	$(".anti-adBlock").attr('style', 'display: inherit !important');

	$('.maps-div-scroll-wrap').hide();

	/** Form label required indicator **/
	$('.budget-tool-form input[data-type="number"][required]').parent().find('label').append(' <span class="meta-required">*</span>');

	$("#nobackendSubmit").click(function() {
		var resultInfo = $(".budget-results");
		var displayCheck = resultInfo.css("display");
		var form = $(".budget-tool-form");
		setTimeout(function() {
			var disposable_income = $('.disposable-income').text();
			disposable_income = disposable_income.replace('¥','');
			disposable_income = parseInt(disposable_income);
			if(disposable_income > 0) {
				$('.contact-box').fadeIn();
				var isPosChecked = $("#interestedInPOSLoan").prop("checked");
				if(isPosChecked == true) {
					$(".box-part-leave").addClass("hidden");
					$(".box-part-middle").addClass("hidden");
				} else {
					$(".box-part-leave").removeClass("hidden");
					$(".box-part-middle").removeClass("hidden");
				}
			} else {
				$('.contact-box').fadeOut();
			}
		}, 300);
		if (!(new FormValidate().validate(".budget-tool-form"))) {
			var errorOccurence = $(".error");
			if(errorOccurence.length) {
				var errorScroll = $(".error").offset().top - 230;
				$('body').animate({
					scrollTop: errorScroll
				}, 500);
			}
			return false;
		} else {
			$('#ContactRecommendedLoans').val('');
			budgetTool();
			if (displayCheck !== "block") {
				resultInfo.show("fast");
			}
			$('html, body').animate({
				scrollTop: $(resultInfo).offset().top
			}, 1500);
			formBudgetToolValues();
			return false;
		}

	});

	$("[data-hide-for]").each(function() {
		if ($(this).data("hide-for").split("-")[1] >= $(window).width()) {
			$(this).hide();
		}
	});
	/**** employees ******/
	var employees = $(".employees");
	var employee = $(".employee");
	var windowWidth = $(window).width();
	if (employees.length) {
		if (windowWidth > 767) {
			employee.click(function() {
				$(employee).each(function() {
					$(this).removeClass('active disabled');
				})
				$(this).addClass('active disabled');
				var name = $(this).find('.employee-name').text();
				var position = $(this).find('.employee-position').text();
				var description = $(this).find('.employee-description').html();
				var index = $(this).data('index');
				var pointTo = index % 3;
				if (index < 4) {
					var fakeContent = $('.fake-content-3');
					fakeContent.removeClass('pointer-down');
					if (fakeContent.length < 1) {
						$(".employee:last-child").after('<div class="fake-content fake-content-3 clearfix" style="display: none;"><button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><span class="employee-name"></span><span class="employee-position"></span><div class="description"></div></div>');
					}
				}
				if (index >= 4 && index < 7) {
					var fakeContent = $('.fake-content-6');
					fakeContent.removeClass('pointer-down');
					if (fakeContent.length < 1) {
						var fakeContent = $('.fake-content-3');
						fakeContent.addClass('pointer-down');
					}
				}
				if (index >= 7 && index < 10) {
					var fakeContent = $('.fake-content-9');
					fakeContent.removeClass('pointer-down');
					if (fakeContent.length < 1) {
						var fakeContent = $('.fake-content-6');
						fakeContent.addClass('pointer-down');
					}
				}
				if (index >= 10 && index < 13) {
					var fakeContent = $('.fake-content-12');
					fakeContent.removeClass('pointer-down');
					if (fakeContent.length < 1) {
						var fakeContent = $('.fake-content-9');
						fakeContent.addClass('pointer-down');
					}
				}
				if (index >= 13 && index < 16) {
					var fakeContent = $('.fake-content-15');
					fakeContent.removeClass('pointer-down');
					if (fakeContent.length < 1) {
						var fakeContent = $('.fake-content-12');
						fakeContent.addClass('pointer-down');
					}
				}
				fakeContent.removeClass('point-to-1 point-to-2 point-to-0');
				fakeContent.addClass('point-to-'+pointTo);
				if (fakeContent.css("display") === "block") {
					//fakeContent.fadeOut(350);
					var wrapper = fakeContent.find('.fake-content-wrapper');
					wrapper.fadeOut(350);
					setTimeout(function() {
						//fakeContent.css({
						//	'opacity': '0'
						//}).slideDown(350).animate({
						//	opacity: 1
						//}, {
						//	queue: false,
						//	duration: '350'
						//});
						fakeContent.find('.employee-name').text(name);
						fakeContent.find('.employee-position').text(position);
						fakeContent.find('.description').html(description);
						wrapper.css({
							'opacity': '0'
						}).slideDown(350).animate({
							'opacity': 1
						}, {
							queue: false,
							duration: '350'
						});
						fakeContent.show(350);
					}, 350);
				} else {
					fakeContent.find('.employee-name').text(name);
					fakeContent.find('.employee-position').text(position);
					fakeContent.find('.description').html(description);
					fakeContent.show(350);
				}
				//$('html, body').animate({
				//	scrollTop: $(fakeContent).offset().top - $('.nav-main').height() - 50
				//}, 1000);
				return false;
			})
		} else {
			employee.click(function() {
				var description = $(this).find('.employee-description');
				if (description.css("display") !== "block") {
					description.show(350);
				} else {
					description.hide(350);
				}
				return false;
			})
		}
		$(".fake-content .close").click(function() {
			$(this).parent().parent().hide(350);
			$(this).parent().find('.fake-content-wrapper').hide(350);
			$(employee).each(function() {
				$(this).removeClass('active disabled');
			})
		})
	}


	$("[data-scroll-to]").on("click", function (e) {
		e.preventDefault();
		var thisInstance = this;
		$('html, body').animate({
			scrollTop: $($(thisInstance).attr("data-scroll-to")).offset().top
		}, 1500);
	});

	/**** Data scroll improvement for leave contact ****/
	$("[data-scroll]").on("click", function (e) {
		e.preventDefault();
		var thisInstance = this;
		var that = this;
		var loanWrapperHeight = $(".loans-wrapper").height() * 2;
		if (!$(this).hasClass('no-more-scroll')) {
			$('html, body').animate({
				scrollTop: $($(thisInstance).attr("data-scroll")).offset().top - loanWrapperHeight
			}, 1500, function() {
				$(that).addClass('no-more-scroll');
			});
		} else {
			$(this).removeClass('no-more-scroll');
		}
	});


	/* destroy href="tel:..." */
	destroyPhone();

	/** INICIALIZES SLIDER */
	slidersObject = new Sliders();
	var sliders = $(".sliders");
	if (sliders.length) {
		slidersObject.init();
	}


	/*** if swiper has just 1 slide, loop and touch events are disabled ***/
	function hasMoreSlides() {
		var slideCount = $(".swiper-slide").length;
		if (slideCount > 1) {
			return true
		} else {
			return false;
		}
	}
	/**** carousel ***/
	var mySwiper = $('.swiper-container:not(.swiper-container-vertical)').swiper({
		//Your options here:
		mode:'horizontal',
		loop: hasMoreSlides(),
		simulateTouch: hasMoreSlides(),
		autoplay: 5000,
		onFirstInit: function(swiper) {
			var countdownElem = $(".countdown");
			if (countdownElem) {
				countdownElem.each(function() {
					var countdownElem = $(this);
					var countDownDate = $(this).data('end').split(/[- :]/);
					countDownDate = new Date(countDownDate[0], countDownDate[1]-1, countDownDate[2], countDownDate[3], countDownDate[4], countDownDate[5]);
					var lang = $("html").attr("lang");
					var countdown = new Countdown(countdownElem, countDownDate, lang);
					countdown.run();
				})
			}
		},
		onTouchStart: function(swiper) {
			swiper.stopAutoplay();
		}
		//autoplayDisableOnInteraction: true
	});



	if ($(window).width() < 767)
		cardSwiper = new Swiper('.process__cards', {
			slidesPerView: 3,

			pagination: $('.process__cards .swiper-pagination')[0],
			paginationClickable: true,

			spaceBetween: 0,
			loop: true,
			speed: 500,
			progress: true,
			calculateHeight: true,

			onProgressChange: function (swiper) {
				for (var i = 0; i < swiper.slides.length; i++) {
					var slide = swiper.slides[i];
					var progress = slide.progress;
					var scale = (1 - Math.min(Math.abs(progress + 1), 1) * 0.5);
					swiper.setTransform(slide, 'scale(' + scale + ')');

					var opacity = (1 - Math.min(Math.abs(progress + 1), 0.7));
					$(slide).css('opacity', opacity);

					if (opacity < .5) {
						$(slide).css('z-index', 5);
					} else {
						$(slide).css('z-index', 10);
					}
				}
			},
			onTouchStart: function (swiper) {
				for (var i = 0; i < swiper.slides.length; i++) {
					swiper.setTransition(swiper.slides[i], 0);
				}
			},
			onSetWrapperTransition: function (swiper, speed) {
				for (var i = 0; i < swiper.slides.length; i++) {
					swiper.setTransition(swiper.slides[i], speed);
				}
			}
		});

	if ($(window).width() < 767)
		tilesSwiper = new Swiper('.tiles', {
			slidesPerView: 3,

			pagination: $('.tiles .swiper-pagination')[0],
			paginationClickable: true,

			spaceBetween: 0,
			loop: true,
			speed: 500,
			progress: true,
			calculateHeight: true,

			onProgressChange: function (swiper) {
				for (var i = 0; i < swiper.slides.length; i++) {
					var slide = swiper.slides[i];
					var progress = slide.progress;
					var scale = (1 - Math.min(Math.abs(progress + 1), 1) * 0.5);
					swiper.setTransform(slide, 'scale(' + scale + ')');

					var opacity = (1 - Math.min(Math.abs(progress + 1), 0.7));
					$(slide).css('opacity', opacity);

					var bgOpacity = (1 - Math.min(Math.abs(progress + 1), 1));
					$(slide).find('.bg').css('opacity', bgOpacity);

					if (opacity < .5) {
						$(slide).css('z-index', 5);
					} else {
						$(slide).css('z-index', 10);
					}
				}
			},
			onTouchStart: function (swiper) {
				for (var i = 0; i < swiper.slides.length; i++) {
					swiper.setTransition(swiper.slides[i], 0);
					swiper.setTransition($(swiper.slides[i]).find('.bg')[0], 0);
				}
			},
			onSetWrapperTransition: function (swiper, speed) {
				for (var i = 0; i < swiper.slides.length; i++) {
					swiper.setTransition(swiper.slides[i], speed);
					swiper.setTransition($(swiper.slides[i]).find('.bg')[0], speed);
				}
			}
		});



	if (!hasMoreSlides()) {
		$(".arrow-left").css("display", "none");
		$(".arrow-right").css("display", "none");
	}
	$('.arrow-left').on('click', function(e){
		e.preventDefault();
		mySwiper.swipePrev();
		mySwiper.stopAutoplay();
	});
	$('.arrow-right').on('click', function(e){
		e.preventDefault();
		mySwiper.swipeNext();
		mySwiper.stopAutoplay();
	});
	if ($('.swiper-container:not(.swiper-container-vertical)').length) {
		mySwiper.addCallback('SlideChangeStart', function(swiper){
			var numberOfItems = $('.header-carousel-item').length;
			var activeSlide = parseInt(mySwiper.activeIndex - 1);
			$('.thumbs .active').removeClass('active');
			if(activeSlide == numberOfItems){activeSlide = 0}
			$('.thumbs .header-carousel-item:eq('+ activeSlide +')').addClass('active');
		})
	}
	$(".thumbs").on('click', '.header-carousel-item', function(e){
		e.preventDefault();
		mySwiper.swipeTo($(this).index(), 500);
		mySwiper.stopAutoplay();
	});

	/* promotion detail countdown */
	var promotion = $(".promotion");
	if (promotion.length) {
		var countdownElem = $(".countdown");
		var countDownDate = $(".countdown").data('end').split(/[- :]/);
		countDownDate = new Date(countDownDate[0], countDownDate[1]-1, countDownDate[2], countDownDate[3], countDownDate[4], countDownDate[5]);
		var lang = $("html").attr("lang");
		var countdown = new Countdown(countdownElem, countDownDate, lang);
		countdown.run();
	}
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		FastClick.attach(document.body);
	}

	/* leaveContact set picked document text value if document selection exists */
	var documentsSelection = $('input[name=selection]');
	if (documentsSelection) {
		var defaultDocumentsText = $('input[name=selection]:checked').data('text');
		var input = $("#ContactDocuments");
		input.val(defaultDocumentsText);
		documentsSelection.click(function() {
			var getDataText = $(this).data('text');
			input.val(getDataText);
		});
	}
	var calculatorTypeInput = $("#ContactCalculatorType");
	if(calculatorTypeInput.length) {
		//calculatorTypeInput.val(calculatorType);
	}

	function startCountdown() {
		var countdownElem = $('.countdown'),
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
				//countdownBody = $(this).parent();
				//promotionLink = $(this).closest('.swiper-slide-content').find('.btn');
				finalDate = $(this).data('end').split(/[- :]/);
				countDownDate = new Date(finalDate[0], finalDate[1] - 1, finalDate[2], finalDate[3], finalDate[4], finalDate[5]);
				countdown = new Countdown(element, countDownDate);
				countdown.run();
			});
		}
	}

	startCountdown();

	// Media Center article filters
	var mediaCenterFiltering = (function () {
		var elements = {
				container: '.media-filters',
				input: 'input',
				label: 'label'
			},
			classes = {
				active: 'active'
			},
			$filtersContainer = $(elements.container),
			targets = {},
			$inputs,
			$labels,
			active = [];

		function bindEvents() {
			var prop,
				selector,
				htmlFor,
				target;

			for (prop in targets) {
				if (targets.hasOwnProperty(prop)) {

					$(targets[prop].input).on('click', function () {
						if (this.checked === true) {

							for (prop in targets) {
								if (targets.hasOwnProperty(prop)) {
									if (targets[prop].name === this.value) {
										targets[prop].checked = true;
									}
								}
							}

						} else {

							for (prop in targets) {
								if (targets.hasOwnProperty(prop)) {
									if (targets[prop].name === this.value) {
										targets[prop].checked = false;
									}
								}
							}

						}

						$('[data-tags]').hide();

						for (prop in targets) {
							if (targets.hasOwnProperty(prop)) {
								if (targets[prop].checked === true) {
									$('[data-tags]').each(function () {
										dataTags = $(this).data('tags');
										target = this;
										if (dataTags.length === 0) {
											$(target).show();
										}
										for (i = 0; i < dataTags.length; i++) {
											if (dataTags[i] === targets[prop].name) {
												$(target).show();
											}
										}
									});
								}
							}
						}


						if ($(elements.input + ':checked').length === 0) {
							$('[data-tags]').show();
						}

					});

					// Check checkbox on label click
					$(targets[prop].label).on('click', function () {
						htmlFor = this.htmlFor;
						selector = elements.input + '[value="' + this.htmlFor + '"]';

						if ($(selector + ':checked').length) {

							$(selector).prop('checked', false);

							for (prop in targets) {
								if (targets.hasOwnProperty(prop)) {
									if (targets[prop].name === htmlFor) {
										targets[prop].checked = false;
									}
								}
							}

						} else {

							$(selector).prop('checked', true);

							for (prop in targets) {
								if (targets.hasOwnProperty(prop)) {
									if (targets[prop].name === htmlFor) {
										targets[prop].checked = true;
									}
								}
							}

						}

						$('[data-tags]').hide();

						for (prop in targets) {
							if (targets.hasOwnProperty(prop)) {
								if (targets[prop].checked === true) {
									$('[data-tags]').each(function () {
										dataTags = $(this).data('tags');
										target = this;
										if (dataTags.length === 0) {
											$(target).show();
										}
										for (i = 0; i < dataTags.length; i++) {
											if (dataTags[i] === targets[prop].name) {
												$(target).show();
											}
										}
									});
								}
							}
						}


						if ($(elements.input + ':checked').length === 0) {
							$('[data-tags]').show();
						}

					});
				}
			}
		}

		function init() {
			var $label,
				selector,
				dataTags,
				i,
				checked;

			if ($filtersContainer.length) {
				$inputs = $filtersContainer.find($(elements.input));
				$labels = $filtersContainer.find($(elements.label));

				$inputs.each(function () {
					selector = elements.label + '[for="' + this.value + '"]';
					$label = $filtersContainer.find(selector);
					checked = $(this)[0].checked;

					targets[this.value] = {
						name: this.value,
						input: this,
						label: $label,
						checked: checked
					}

				});

				bindEvents();
			}
		}

		init();

	}());

	if ($('.announcements').length == 1) {
		var verticalSwiper = new Swiper('.swiper-container-vertical', {
	        mode: 'vertical',
	        loop: true,
			autoplay: 5000,
			autoplayDisableOnInteraction: false
	    });
	}

	if ($('.first-loan').length === 1) {
		carousel.firstLoanInit();
	} else {
		carousel.init();
	}

	$('.first-loan .nav-tabs a').each(function () {
		$(this).on('click', function () {
			carousel.reinit();
			setTimeout( function() {
				carousel.reinit()
			}, 500);
		});

	});

	$('.scroll-to-form').on('click', function(e) {
		_hmt.push(['_trackEvent','calculator','leave contact']);
		_czc.push(['_trackEvent','calculator','leave contact']);
		ga('send', 'event','calculator','set','leave contact');

		$(".ajaxLeaveForm").slideDown();
		var whereScroll = $(".ajaxLeaveForm").offset().top - 150;
		e.preventDefault();
		$('body, html').animate({
			scrollTop: whereScroll
		}, 1000);
	});

	$('.scroll-to-calc').on('click', function(e) {
		var whereScroll;
		if($(".sliders").length) {
			whereScroll = $(".sliders").offset().top - 150;
		} else {
			$(".ajaxLeaveForm").slideDown();
			whereScroll = $(".ajaxLeaveForm").offset().top - 150;
		}
		e.preventDefault();
		$('body, html').animate({
			scrollTop: whereScroll
		}, 1000);
	});

	if($('.ajaxLeaveForm').length && ($('.contact-wcl-form').length > 0)) {
		selectProvinceYes().init();
		selectProvinceNo().init();
	}
	if($('.default-contact-no-agreement').length > 0) {
		selectProvinceYes().init();
	}
	if($('.default-contact-agreement').length > 0) {
		selectProvinceYes().init();
	}

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	if(isMobile.any()){
		// Mobile!
	} else {
		$('.slider-elem').find('span').addClass('desktop');
	}

	setSameCommodityHeight();
	$(window).resize(function(){
		setSameCommodityHeight();
	})

	var mflTabs = $('.first-loan').find('.tabs-menu');
	var mflTabsLi = mflTabs.find('li');

	mflTabs.on('click', 'a', function() {
		mflTabsLi.removeClass('current');
		$(this).closest('li').addClass('current');
	});


	var inputCityYes = $('.leave-form-provinces .cities');
	var inputProvinceYes = $('.leave-form-provinces select');
	inputCityYes.hide();
	inputProvinceYes.on('change', function() {
		inputCityYes.slideDown();
	});


	var inputCityNo = $('.leave-form-city .cities');
	var inputProvinceNo = $('.leave-form-city select');
	inputCityNo.hide();
	inputProvinceNo.on('change', function() {
		inputCityNo.slideDown();
	});


	$('.map-button > .btn-danger').on("click", function() {
		//_czc.push(['_trackEvent','pos','search','map']);
		//_hmt.push(['_trackEvent','pos','search','map']);
		//ga('send', 'event', 'pos', 'search', 'map');
	});

		var wclForm = $('.wcl').length;
		var wcl1form = $(".wcl1").length;
		var wcl2form = $(".wcl-wcl2").length;
		var wcl3form = $(".wcl-wcl3").length;
		var wcl4form = $('.wcl-wcl4').length;
		var wcl5form = $('.wcl-wcl5').length;
		var wcl6form = $('.wcl-wcl6').length;
		var wcl7form = $('.wcl-wcl7').length;
		var alreadyCustomer = $(".wcl-already-customer").length;
		var homepage = $('.homepage-indicator').length;
	$('.btn-send-form').on("click", function() {
		if(wcl1form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl1']);
			_czc.push(['_trackEvent','cta','send','form_wcl1']);
			ga('send', 'event', 'cta', 'send', 'form_wcl1');
			//console.log('wcl1');
		} else if (wcl2form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl2']);
			_czc.push(['_trackEvent','cta','send','form_wcl2']);
			ga('send', 'event', 'cta', 'send', 'form_wcl2');
			//console.log('wcl2');
		} else if (wcl3form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl3']);
			_czc.push(['_trackEvent','cta','send','form_wcl3']);
			ga('send', 'event', 'cta', 'send', 'form_wcl3');
			//console.log('wcl3');
		} else if (wcl4form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl4']);
			_czc.push(['_trackEvent','cta','send','form_wcl4']);
			ga('send', 'event', 'cta', 'send', 'form_wcl4');
			//console.log('wcl4');
		} else if (wcl5form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl5']);
			_czc.push(['_trackEvent','cta','send','form_wcl5']);
			ga('send', 'event', 'cta', 'send', 'form_wcl5');
			//console.log('wcl5');
		} else if (wcl6form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl6']);
			_czc.push(['_trackEvent','cta','send','form_wcl6']);
			ga('send', 'event', 'cta', 'send', 'form_wcl6');
			//console.log('wcl6');
		} else if (wcl7form && wclForm) {
			_hmt.push(['_trackEvent','cta','send','form_wcl7']);
			_czc.push(['_trackEvent','cta','send','form_wcl7']);
			ga('send', 'event', 'cta', 'send', 'form_wcl7');
			//console.log('wcl7');
		} else if (wclForm || homepage) {
			_hmt.push(['_trackEvent','cta','send','form_wcl']);
			_czc.push(['_trackEvent','cta','send','form_wcl']);
			ga('send', 'event', 'cta', 'send', 'form_wcl');
			//console.log('wcl');
		} else {
			_hmt.push(['_trackEvent','cta','send','form_posl']);
			_czc.push(['_trackEvent','cta','send','form_posl']);
			ga('send', 'event', 'cta', 'send', 'form_posl');
			//console.log('posl');
		}
		if(alreadyCustomer) {
			var radios = $('.wcl-radio');
			var answer = radios.filter(':checked').attr('value');
			if (answer == '1') {
				_hmt.push(['_trackEvent','cta','send','customer']);
				_czc.push(['_trackEvent','cta','send','customer']);
				ga('send', 'event', 'cta', 'send', 'customer');
			} else if (answer == '0') {
				_hmt.push(['_trackEvent','cta','send','noncustomer']);
				_czc.push(['_trackEvent','cta','send','noncustomer']);
				ga('send', 'event', 'cta', 'send', 'noncustomer');
			}
		}

	});

	$('.scroll-to-form').on("click", function() {
		_czc.push(['_trackEvent','cta','apply','button']);
		_hmt.push(['_trackEvent','cta','apply','button']);
		ga('send', 'event', 'cta', 'apply', 'button');
	});

	var ttipCont = $('.ttip-container');
	var ttip = $('.ttip');
	var ttipLabel = $('.ttiplabel');
	var formTtip = $('form .ttip');
	var formTtipSpan = $('form .ttip + span');
	formTtipSpan.on('click', '.glyphicon-remove', function() {
		$(this).parent().fadeOut(200);
	});
	ttipCont.on('click', '.glyphicon-remove', function() {
		$(this).closest('.ttip + span').fadeOut(200);
	});
	ttip.on('click mouseenter', function() {
		$(this).next().fadeIn(200);
	});
	ttip.on('mouseleave', function() {
		$(this).closest('.ttip + span').fadeOut(200);
	});
	ttipLabel.on('click mouseenter', function() {
		$(this).prev().fadeIn(200);
	});
	ttipCont.on('mouseleave', function() {
		$(this).find('.ttip + span').fadeOut(200);
	});

	formTtip.on('mouseleave', function() {
		$(this).next().fadeOut(200);
	});

	var inputName = $('#inputFullName');

	inputName.on('keyup', function() {
		var name = inputName.val();
		name = name.replace(/\d+/g, '');
		inputName.val(name);
	});

	var mediaTabs = $('.media-center').find('ul.tabs-menu');
	var mediaFilters = $('.articles-heading');

	mediaTabs.on('click', 'a', function() {
		if ($(this).attr('href') === '#media-contacts') {
			mediaFilters.hide();
		} else {
			mediaFilters.fadeIn();
		}
	});
	var promotionBg = $(".promotion-bg");
	function switchPromotionBg() {
		var windowWidth = $(window).width();
		$(promotionBg).each(function() {
			var mobileBg = $(this).data('mobile');
			var desktopBg = $(this).data('desktop');
			if(windowWidth < 768) {
				$(this).css('background-image', 'url("/' + mobileBg + '")');
			} else {
				$(this).css('background-image', 'url("/' + desktopBg + '")');
			}
		});
	}
	switchPromotionBg();
	$(window).resize(switchPromotionBg);

	/*** calculator wcl switch ***/
	var calculatorSwitch = $(".calculator-switch");
	var middleBox = $(".box .box-part-middle");
	var bottomBox = $(".box .box-part-leave");
	var leaveForm = $(".ajaxLeaveForm");
	var textWcl = $(".box .box-text-wcl");
	var textPosl = $(".box .box-text-posl");
	$(calculatorSwitch).on("click", function() {
		var toggleType = $(this).data('toggle-type');
		if(toggleType == "wcl") {
			$(middleBox).slideDown(200);
			$(bottomBox).slideDown(200);
			$(leaveForm).removeClass('hidden');

			textPosl.hide();
			textWcl.show();
		} else {
			$(middleBox).slideUp(200);
			$(bottomBox).slideUp(200);
			$(leaveForm).addClass('hidden');

			textWcl.hide();
			textPosl.show();
		}
		initSelectEvents();
		handleSearchButton();
	});
	/** carousel on badge hover **/
	$(".nav-tag").hover(
		function() {
			$( ".fifteen-days-guarantee-box").addClass( "fifteen-days-guarantee-box-visible" );
		}, function() {
			$( ".fifteen-days-guarantee-box").removeClass( "fifteen-days-guarantee-box-visible" );
		}
	);
	/** carousel oon badge click **/
	$(document).click(function(event) {
		if(!$(event.target).closest('.fifteen-days-guarantee-box-mobile, .nav-tag').length) {
			if($('.fifteen-days-guarantee-box-mobile').hasClass("carousel-visible")) {
				$('.fifteen-days-guarantee-box-mobile').removeClass("carousel-visible");
			}
		}
	});

	$(".nav-tag").on("click", function() {
		$(".fifteen-days-guarantee-box-mobile").toggleClass('carousel-visible');
	});

	/** height of text box in badge popup**/
	var elementHeights = $('.text').map(function() {
		return $(this).outerHeight();
	}).get();
	var maxHeight = Math.max.apply(null, elementHeights);
	$('.fifteen-days-guarantee-box .text').css('height', maxHeight);

	$(".map-calculator-switch-label").click(function(e) {
		$(".map-calculator-switch").removeClass("fake");
		$(this).prev(".map-calculator-switch").addClass("fake");
	});

	$(".calculator-switch-main-label-posl, .label-for-posl").on('click',function(e) {
		clickPosl();
		
	});

	$(".calculator-switch-main-label-posl, .label-for-posl").bind('touchstart', function(){
		clickPosl();
	});

	$(".calculator-switch-main-label-wcl, .label-for-wcl").on('click',function(e) {
		clickWcl();
	});
	$(".calculator-switch-main-label-wcl, .label-for-wcl").bind('touchstart', function(){
		clickWcl();
	});


});

function clickWcl(){
	$(".map-calculator-switch-pos").removeClass("fake");
	$(".map-calculator-switch-wcl").addClass("fake");
	$("#type-selector").addClass('hidden');
	showOverlay();
}

function clickPosl(){
	$(".map-calculator-switch-pos").addClass("fake");
	$(".map-calculator-switch-wcl").removeClass("fake");
	$("#type-selector").removeClass('hidden');
	showOverlay();
}
