function faqSection() {
	var tab = $('.tabs-menu-faqSecti li[role="presentation"]');
	var tabContent = $('.faqPage .tab-pane');
	$(tab).each(function(index) {
		$(this).removeClass('current');
		if(index === 0) {
			//$(this).addClass('active');
		}
	});
	$(tab).on('click', function(e) {
		var that = $(this);
		$(tab).each(function() {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		var id = $(this).attr('data-id');
		$(tabContent).each(function() {
			var that = $(this);
			if($(this).data('id') == id) {
				$(that).addClass('active in');
			} else {
				$(this).removeClass('active in');
			}
		});
	});
}

function faqSectionDropTabs() {
	
	$('.tabWrap #tabInn').click(function (e) {
		var opened = $(this).parent().hasClass('opens');
		$('.tabWrap #tabInn').each(function() {
			var answer = $(this).parent().find('.tab-answer');
			if($(answer).css('display') === 'block') {
				$(this).parent().find('.tab-answer').slideToggle();
			}
			if($(this).hasClass('rotate')) {
				$(this).toggleClass('rotate');
			}
			var parent = $(this).parent();
			if($(parent).hasClass('opens')) {
				$(parent).toggleClass('opens');
			}
		});
		if(!opened) {
			$(this).parent().find('.tab-answer').slideToggle();
			$(this).toggleClass('rotate');
			$(this).parent().toggleClass('opens');
		}
	 });
}

function toggleFaqQuestions() {
	var speedValue = 100;
	var faqMenuItem = $('.desktop-faq-category');
	$(faqMenuItem).each(function() {
		var questionsWrapperId = $(this).data('toggle-category');
		var wrapperElements = $(this).parent().parent().find('[data-category]');
		var wrapperEl = $('[data-category="'+questionsWrapperId+'"]');
		var faqImages = $(this).parent().parent().find('[data-category-image]');
		var faqImage = $('[data-category-image="'+questionsWrapperId+'"]');
		var that = $(this);
		$(this).on('click', function(e) {
			e.preventDefault();
			$(wrapperElements).each(function() {
				$(this).hide(300);
			})
			$(faqImages).each(function() {
				$(this).fadeOut();
			});
			faqImage.fadeIn(300);
			faqMenuItem = $(this).parent().parent().find('.desktop-faq-category');
			$(faqMenuItem).each(function() {
				$(this).removeClass('active');
			});
			$(that).addClass('active');
			var wrapperChild = wrapperEl.find('.tabWrap');
			var childCount = wrapperChild.length;
			var speed = parseInt(speedValue * childCount);
			wrapperEl.show(speed);
		}) 
	});
}
function toggleFaqCategory() {
	var categoryParam = getUrlParameter('category');
	var categoryToggleTarget = $('.desktop-faq-category[title="'+categoryParam+'"]');
	if($(categoryToggleTarget).length) {
		$(categoryToggleTarget).click();
	}
}
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
