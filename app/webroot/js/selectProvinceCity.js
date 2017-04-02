var selectProvinceYes = function() {
	var finalHTML = '';
	var myObj = {};
	var jsonFile;

	function createCitiesSelectbox(id) {
		var cities = '';
		cities += '<option value="">' + cityPlaceholderYes + '</option>';

		for (var i = 0; i < myObj[id].cities.length; i++) {
			cities += '<option value="' + myObj[id].cities[i] + '">' + myObj[id].cities[i] + '</option>';
		};
		$('.leave-form-provinces .cities select option').remove();
		$('.leave-form-provinces .cities select').append(cities);
		setCity(selectedCityYes);
	}

	function setCity(id) {
		$('.leave-form-provinces .cities select').val(id);
	}

	function init() {
		if($('.leave-form-provinces .cities select option').length) {
			if ($('html').attr('lang') === 'zh') {
				jsonFile = '/js/provinces.json';
			} else {
				jsonFile = '/js/provinces_english.json';
			}
			cityPlaceholderYes = $('.leave-form-provinces .cities select option')[0].text;
			finalHTML += '<option value="">' + cityPlaceholderYes + '</option>';

			$.getJSON(jsonFile, function (data) {
				for (var i = 0; i < data.length; i++) {

					myObj[data[i].province] = {
						cities: []
					};

					for (var b = 0; b < data[i].cities.length; b++) {

						myObj[data[i].province].cities[b] = data[i].cities[b];

					};

				};

				if($('.leave-form-provinces .provinces select').val() === '' || $('.leave-form-provinces .provinces select').val() === undefined || $('.leave-form-provinces .provinces select').val() === 'undefined') {
					$('.leave-form-provinces .cities select option').remove();
					$('.leave-form-provinces .cities select').append('<option value="">' + cityPlaceholderYes + '</option>');
				} else {
					createCitiesSelectbox($('.provinces select').val());
				}

				$('.leave-form-provinces .provinces select').on('change', function () {
					if($('.leave-form-provinces .provinces select').val() === '' || $('.leave-form-provinces .provinces select').val() === undefined || $('.leave-form-provinces .provinces select').val() === 'undefined') {
						$('.leave-form-provinces .cities select option').remove();
						$('.leave-form-provinces .cities select').append('<option value="">' + cityPlaceholderYes + '</option>');
					} else {
						selectedCityYes = '';
						createCitiesSelectbox($('.leave-form-provinces .provinces select').val());
					}
				});

				$('.leave-form-provinces .cities select').on('change', function () {
					selectedCityYes = $(this).val();
				});

			});
		}
	}

	return {
		init: init,
		setCity: setCity
	};

}



var selectProvinceNo = function() {
	var finalHTML = '';
	var myObj = {};
	var jsonFile;

	function createCitiesSelectbox(id) {
		var cities = '';
		cities += '<option value="">' + cityPlaceholderNo + '</option>';

		for (var prop in myObj[id].cities) {
			cities += '<option value="' + prop + '">' + myObj[id].cities[prop] + '</option>';
		};


		$('.leave-form-city .cities select option').remove();
		$('.leave-form-city .cities select').append(cities);
		setCity(selectedCityNo);
	}

	function setCity(id) {
		$('.leave-form-city .cities select').val(id);
	}

	function init() {
		if($('.leave-form-city .cities select option').length) {
			cityPlaceholderNo = $('.leave-form-city .cities select option')[0].text;
			finalHTML += '<option value="">' + cityPlaceholderNo + '</option>';

				var data = region_json;

				for (var i = 0; i < data.length; i++) {
					myObj[data[i].province] = {
						cities: []
					};

					for (var prop in data[i].cities) {
						myObj[data[i].province].cities[prop] = data[i].cities[prop];
					};

				};

				if($('.leave-form-city .provinces select').val() === '' || $('.leave-form-city .provinces select').val() === undefined || $('.leave-form-city .provinces select').val() === 'undefined') {
					$('.leave-form-city .cities select option').remove();
					$('.leave-form-city .cities select').append('<option value="">' + cityPlaceholderNo + '</option>');
				} else {
					createCitiesSelectbox($('.leave-form-city .provinces select').val());
				}

				$('.leave-form-city .provinces select').on('change', function () {
					if($('.leave-form-city .provinces select').val() === '' || $('.leave-form-city .provinces select').val() === undefined || $('.leave-form-city .provinces select').val() === 'undefined') {
						$('.leave-form-city .cities select option').remove();
						$('.leave-form-city .cities select').append('<option value="">' + cityPlaceholderNo + '</option>');
					} else {
						selectedCityNo = '';
						createCitiesSelectbox($('.leave-form-city .provinces select').val());
					}
				});

				$('.leave-form-city .cities select').on('change', function () {
					selectedCityNo = $(this).val();
				});
		}
	}

	return {
		init: init,
		setCity: setCity
	};

}

