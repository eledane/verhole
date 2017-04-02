$(document).ready(function() {
	$(".Slider__loader").addClass("loader--hidden");
	$(".Sliders").removeClass("Sliders--hidden");

    heightAdapt();
    setTimeout(heightAdapt, 50);
    setTimeout(heightAdapt, 100);
    setTimeout(heightAdapt, 500);
});