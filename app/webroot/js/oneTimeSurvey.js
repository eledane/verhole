/*------------------------------------
	DOM ready
-------------------------------------*/


$(document).ready(function () {
	Survey_Init();
});

/*------------------------------------
	Globals
-------------------------------------*/

var SURVEY_OPEN_TIME = null,
	SURVEY_TIMEOUT =  null,
	SURVEY_SLIDER_START = null,
	SURVEY_SLIDER_MIN = null,
	SURVEY_SLIDER_MAX = null, 
	SURVEY_SLIDER_HANDLE = null,
	SURVEY_SLIDER_CONTAINER = null,
	SURVEY_FORM = null,
	SURVEY_VALUE = null,
	SURVEY_FLASH_9 = null,
	SURVEY_FLASH_10 = null;

function Survey_SetGlobals() {
	SURVEY_FORM = $('#oneTimeSurveyDisplayForm');
	SURVEY_SLIDER_START = 8;
	SURVEY_OPEN_TIME = 90000;
	SURVEY_SLIDER_MIN = 0;
	SURVEY_SLIDER_MAX = 10;
	SURVEY_SLIDER_CONTAINER = $(".slider-container"),
	SURVEY_FLASH_9 = $(".survey-9");
	SURVEY_FLASH_10 = $(".survey-10");
}

/*------------------------------------
	One Time Survey
-------------------------------------*/

function Survey_Init() {
	Survey_SetGlobals();
	Survey_HearthSlider_Init();
	Survey_HearthSliderMobile_Init();
	Survey_OpenAfter(SURVEY_OPEN_TIME);
	Survey_BindEvents();
	Survey_ResolveActions();
	Survey_SetShareTexts();
}

function Survey_BindEvents() {
	Survey_OnClose();
	Survey_OnShare();
	Survey_PreventDefaultFormSubmit()
}

function Survey_ResolveActions() {
	var actionBtn = $('#oneTimeSurvey').find('[data-action]');

	actionBtn.on('click', function(e) {
		e.preventDefault;
		var action = $(this).attr('data-action');

		switch (action) {
			case 'not_finished':
				Survey_NotFinished();
				break;
			case 'refuse':
				Survey_Refuse();
				break;
			case 'continue':
				Survey_Continue();
				break;
			case 'vote':
				Survey_Vote();
				break;
			case 'send':
				Survey_SendForm();
				break;
			case 'send_no_thank_you':
				Survey_SendForm(true);
				break;
			default:
		}
	});
}

function Survey_Open(trigger) {
	var cookie = $.cookie('one_time_survey');
	clearTimeout(SURVEY_TIMEOUT);

	$('#oneTimeSurveyTrigger').attr('value', trigger);

	if(!cookie) {
		$('#oneTimeSurvey').modal('show');
	}
}

function Survey_OpenAfter(time) {
	SURVEY_TIMEOUT = setTimeout(function() {
		Survey_Open('time');
	}, time);
}

function Survey_NotFinished() {
	$('#oneTimeSurvey').modal('hide');
	Survey_OpenAfter(SURVEY_OPEN_TIME);
}

function Survey_Refuse() {
	$('#oneTimeSurvey').modal('hide');
	Survey_SetCookie();
}

function Survey_SetCookie() {
	$.cookie('one_time_survey', '1', { expires: 365, path: '/' });
}

function Survey_Continue() {
	$('#oneTimeSurvey .step-1').slideUp(500);
	$('#oneTimeSurvey .step-2').slideDown(500);
}

function Survey_ThankYou() {
	$('#oneTimeSurvey .step-3-comment').slideUp(500);
	$('#oneTimeSurvey .step-3-share').slideUp(500);
	$('#oneTimeSurvey .step-4').slideDown(500)
}

function Survey_Vote() {
	// Stop hearth storm
	snowStorm.toggleSnow('stop');

	if(SURVEY_VALUE < 9) {
		$('#oneTimeSurvey .step-2').slideUp(500);
		$('#oneTimeSurvey .step-3-comment').slideDown(500);
	} else if (SURVEY_VALUE > 8) {
		$('#oneTimeSurvey .step-2').slideUp(500);
		$('#oneTimeSurvey .step-3-share').slideDown(500);
	}
}

function Survey_OnClose() {
	$('#oneTimeSurvey').on('hidden.bs.modal', function () {
		Survey_Reset();
		// set cookie on modal hide
		Survey_SetCookie();
		// Stop hearth storm
		snowStorm.toggleSnow('stop');
	})
}

function Survey_Reset() {
	$('#oneTimeSurvey .step-1').show();
	$('#oneTimeSurvey .step-2').hide();
	$('#oneTimeSurvey .step-3-comment').hide();
	$('#oneTimeSurvey .step-3-share').hide();
	$('#oneTimeSurvey .step-4').hide();
}

function Survey_SendForm(disable_thank_you) {
	var $submitBtn = SURVEY_FORM.find('[type="submit"]');
	var formData = SURVEY_FORM.serialize();

	$submitBtn.attr("disabled", true);

	$.ajax({
		url: '/survey/addVote',
		data: formData,
		type: "POST",

		success: function(data){
			$submitBtn.attr("disabled", false);

			if (disable_thank_you) {
				$('#oneTimeSurvey').modal('hide');
			} else {
				Survey_ThankYou();
			}

			Survey_SetCookie();
		},

		error:function(data){
			$submitBtn.attr("disabled", false);
		}

	});
}

function Survey_PreventDefaultFormSubmit() {
	var $submitBtn = SURVEY_FORM.find('[type="submit"]');

	$submitBtn.on('click', function(e) {
		e.preventDefault();
	})
}

function Survey_OnShare() {
	var $shareBtn = $('#oneTimeSurvey').find('[data-share]');

	$shareBtn.on('click', function(e) {
		var social_network = $(this).attr('data-share');
		var already_shared = $('#oneTimeSurveySocialNetworks').attr('value');

		$('#oneTimeSurveySocialNetworks').attr('value', already_shared + social_network + ', ');

		Survey_SetShareTexts();

		$('#oneTimeSurveyShared').attr('value', 1);
	});
}


/*------------------------------------
	Hearth Slider
-------------------------------------*/

function Survey_HearthSlider_Init() {
	$('#oneTimeSurveySlider').labeledslider({
		min: SURVEY_SLIDER_MIN,
		max: SURVEY_SLIDER_MAX,
		range: 'min',
		value: SURVEY_SLIDER_START,
		create: Survey_HearthSlider_OnSlide,
		slide: Survey_HearthSlider_OnSlide
	});
}

function Survey_HearthSlider_Init() {
	$('#oneTimeSurveySlider').labeledslider({
		min: SURVEY_SLIDER_MIN,
		max: SURVEY_SLIDER_MAX,
		range: 'min',
		value: SURVEY_SLIDER_START,
		create: Survey_HearthSlider_OnSlide,
		slide: Survey_HearthSlider_OnSlide
	});
}

function Survey_HearthSlider_OnSlide(e, ui) {
	var value = ui.value;
	SURVEY_SLIDER_HANDLE = $('#oneTimeSurveySlider .ui-slider-handle');
	if (value == undefined || value == 'undefined' || value == null || value == 'null') {
		value = SURVEY_SLIDER_START;
	}

	if ($("#oneTimeSurveySlider .ui-slider-handle .survey-flash").length < 1) {
		SURVEY_FLASH_9.appendTo(SURVEY_SLIDER_HANDLE);
		SURVEY_FLASH_10.appendTo(SURVEY_SLIDER_HANDLE);
	}

	if (value == SURVEY_SLIDER_MAX ) {
		SURVEY_FLASH_10.show(0,"swing", function() {});
	} else {
		SURVEY_FLASH_10.hide();
	}

	if (value == SURVEY_SLIDER_MAX -1) {
		SURVEY_FLASH_9.show(0,"swing", function() {});
	} else {
		SURVEY_FLASH_9.hide();
	}

	// Hearth Storm
	if (value == SURVEY_SLIDER_MAX) {
		snowStorm.toggleSnow('start');
	} else {
		snowStorm.toggleSnow('stop');
	}

	Survey_HearthSlider_SetValue(value);
	Survey_HearthSliderMobile_SetValue(value);
}

function Survey_HearthSlider_SetValue(value) {
	SURVEY_VALUE = value;
	$('#oneTimeSurveyScore').attr('value', value);
	$('#oneTimeSurveySlider .ui-slider-handle').attr('data-hearth', value);
}

function Survey_HearthSlider_Update(value) {
	$('#oneTimeSurveySlider').labeledslider({value: value});
}

/*------------------------------------
	Hearth Slider Mobile
-------------------------------------*/

function Survey_HearthSliderMobile_Init() {
	Survey_HearthSliderMobile_BindEvents();
	Survey_HearthSliderMobile_ResolveActions();
}

function Survey_HearthSliderMobile_ResolveActions() {
	var actionBtn = $('#oneTimeSurvey').find('[data-slide]');

	actionBtn.on('click', function(e) {
		e.preventDefault;
		var action = $(this).attr('data-slide');

		switch (action) {
			case 'prev':
				Survey_HearthSliderMobile_SlidePrev();
				break;
			case 'next':
				Survey_HearthSliderMobile_SlideNext();
				break;
			default:
		}
	});
}

function Survey_HearthSliderMobile_BindEvents() {
	Survey_HearthSliderMobile_OnSwipeLeft();
	Survey_HearthSliderMobile_OnSwipeRight();
	Survey_HearthSliderMobile_AllowScrollY();
}

function Survey_HearthSliderMobile_AllowScrollY() {
	$('#oneTimeSurveySliderMobile').on('movestart', function(e) {
		if ((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) {
			e.preventDefault();
		}
	});
}

function Survey_HearthSliderMobile_OnSwipeLeft() {
	$('#oneTimeSurveySliderMobile').on('swipeleft', function(e) {
		Survey_HearthSliderMobile_SlideNext();
	});
}

function Survey_HearthSliderMobile_OnSwipeRight() {
	$('#oneTimeSurveySliderMobile').on('swiperight', function(e) {
		Survey_HearthSliderMobile_SlidePrev();
	});
}

function Survey_HearthSliderMobile_SlidePrev() {
	var actualValue = $('#oneTimeSurveySliderMobile .hearth').attr('data-hearth'),
		newValue = parseInt(actualValue, 10) - 1;

	if(newValue >= SURVEY_SLIDER_MIN) {
		Survey_HearthSliderMobile_SetValue(newValue);
		Survey_HearthSlider_SetValue(newValue);
		Survey_HearthSlider_Update(newValue);
	}
}

function Survey_HearthSliderMobile_SlideNext() {
	var actualValue = $('#oneTimeSurveySliderMobile .hearth').attr('data-hearth'),
		newValue = parseInt(actualValue, 10) + 1;

	if(newValue <= SURVEY_SLIDER_MAX) {
		Survey_HearthSliderMobile_SetValue(newValue);
		Survey_HearthSlider_SetValue(newValue);
		Survey_HearthSlider_Update(newValue);
	}
}

function Survey_HearthSliderMobile_SetValue(value) {
	SURVEY_VALUE = value;
	$('#oneTimeSurveySliderMobile .hearth').attr('data-hearth', value);
	$('#oneTimeSurveySliderMobile .actual-value').text(value);

	if (value == SURVEY_SLIDER_MAX ) {
		SURVEY_FLASH_10.show(0,"swing", function() {});
	} else {
		SURVEY_FLASH_10.hide();
	}

	if (value == SURVEY_SLIDER_MAX -1) {
		SURVEY_FLASH_9.show(0,"swing", function() {});
	} else {
		SURVEY_FLASH_9.hide();
	}
} 


/*------------------------------------
 Share
-------------------------------------*/

function Survey_SetShareTexts() {
	var ShareText = $('input[name=share_text]:checked').val(),
		$shareWeibo = $('.share_weibo'),
		$shareQzone = $('.share_qzone'),
		$shareBaidu = $('.share_baidu'),
		$shareWechat = $('.share_wechat');

	$shareWeibo.attr('href', 'http://service.weibo.com/share/share.php?url='+ document.URL + '&appkey=&title=' + Survey_GetRandomShareText() + '&pic=&ralateUid=&language=zh_cn');
	$shareQzone.attr('href', 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+ document.URL + '&appkey=&title=' + Survey_GetRandomShareText() + '&pic=&ralateUid=&language=zh_cn');
	$shareBaidu.attr('href', 'http://tieba.baidu.com/f/commit/share/openShareApi?url='+ document.URL + '&appkey=&title=' + Survey_GetRandomShareText() + '&pic=&ralateUid=&language=zh_cn');
	$shareWechat.attr('src', 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' + document.URL);
}

function Survey_GetRandomShareText() {
	var random_index = Math.floor(Math.random() * SURVEY_SHARE_TEXTS.length);

	return SURVEY_SHARE_TEXTS[random_index];
}
