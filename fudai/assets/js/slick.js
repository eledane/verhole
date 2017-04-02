var CustomerStories = function () {
	this.initSlick();
};

CustomerStories.prototype.initSlick = function () {
	$('.slick_customer_stories').slick({
		arrows: true,
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});
};
