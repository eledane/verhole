var DEFAULT_ZOOM = 9;
var CLUSTERER_MAX_ZOOM = 15;
var MAP_INITIAL_POSITION = {
	lat: 36.628722,
	lng: 117.836561
};
var PLACE_FOCUS_ZOOM = 16;
var POPUP_TRANSLATION_LNG = 0.0;
var POPUP_TRANSLATION_LAT = 0.003;

var markers = [];
var mp, townSelect, regionSelect, type;
var zoom = 5;
var currentPosition;
var firstStep = true;
var dragEnabled = false;
var initialized = false;
var mapShown = true;
var townSelectVal;
var currentPositionMarker = 'map_pin_current_position.png';
var defaultMarker = 'map_pin.png';
var markersArray = [];

var mc;
//default clusterer options
var mStyles = [{
	url: '/img/map_pin_empty.png',
	size: new BMap.Size(60, 59),
	opt_anchor: [16, 0],
	textColor: '#ff00ff',
	opt_textSize: 14
}];

var currentLanguage;

var options = {
	reqCashLoans:  false,
	reqPosloans:  false
};

var translations = {
	address: {
		en: "Address",
		zh: "地址"
	},
	hours: {
		en: "Opening hours",
		zh: "营业时间"
	},
	electronics: {
		en: "Electronic shops",
		zh: "电子产品零售店"
	},
	cashloans: {
		en: "Cash loans",
		zh: "现金贷"
	}
};

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function setCurrentPositionFromBrowser(callback){
	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
			var pnt = new BMap.Point(position.coords.longtitude,position.coords.latitude);
			callback(pnt);
        }, function(){
			handleNoGeolocation(true);
		});
    } else {
        handleNoGeolocation(false);
    }
}

function setMarkerWithCurrentPosition(marker){
	marker.hide();
	marker.setIcon(new BMap.Icon('/img/'+ currentPositionMarker, new BMap.Size(51, 58)));
	marker.setPosition(currentPosition);
	marker.show();
};

function handleNoGeolocation(errorFlag) {

    if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
    } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
    }

    var options = {
        map: map,
        position: currentPosition,
        content: content
    };
		window.alert(content);
    	mp.setCenter(new BMap.Point(options.position));

}

function setCheckboxOptions(){
	options = {
		reqCashLoans:  $("#checkbox_0").hasClass("active"),
		reqPosloans:  $("#checkbox_1").hasClass("active")
	};
}

function clearOverlays(){
	for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].hide();
        markersArray[i] = undefined;
    }
    markersArray.length = 0;
	mp.clearOverlays();
}

function setMarkers(isSearch){
	var mrkrs = markers;

	var bounds = mp.getBounds();
	var markersArray = [];

	clearOverlays();
	setCheckboxOptions();

	//map marker objects
	markersArray = [];
	var markersData = [];

	//markers variable: generated in php code
	for (var i = 0; i < mrkrs.length; i++) {
        var currentMarker = mrkrs[i];

        if (
            (!options.reqCashLoans && currentMarker.reqCashLoans === !options.reqCashLoans) ||
            (!options.reqPosloans && currentMarker.reqPosloans === !options.reqPosloans)
        ) {

			var pnt = new BMap.Point(currentMarker.lng.toString(),currentMarker.lat.toString());
			var marker = new BMap.Marker(pnt);
			marker.setIcon(new BMap.Icon(currentMarker.marker, new BMap.Size(61, 87)));
			marker.setZIndex(currentMarker.id);
			marker.setTitle(currentMarker.name);

			markersData.push(currentMarker);

			if(currentMarker.display){
				marker.show();
			} else {
				marker.hide();
			}

            markersArray.push(marker);

            if (bounds.containsPoint(marker.getPosition()) || markers[i].display) {
                var x = currentMarker.id;
                if (!$("#markers-list .map-marker[data-target=" + x + "]").length) {
                    $("#markers-list .maps-div-scroll").append('<div class="map-marker" data-lat="' + currentMarker.lat + '" data-id="' + currentMarker.id + '" data-lng="' + currentMarker.lng + '" data-distance="'+currentMarker.distanceInMeters+'" data-target="' + x + '"><span>'+currentMarker.distance+'</span><div class="desc"><p class="name">' + currentMarker.name + '</p><p class="address">' + currentMarker.address + '</p></div></div>');
                } else {
					$("#markers-list .map-marker[data-target=" + x + "] span").html(currentMarker.distance);
								}
            } else {
                $("#markers-list .map-marker[data-target=" + currentMarker.id + "]").remove();
            }
			addInfoWindow(marker, currentMarker);
        } else {
			$('.infoBox  > div[data-id='+currentMarker.id+']').parent().fadeOut();
			$("#markers-list .map-marker[data-target=" + currentMarker.id + "]").remove();
		}
	}

	fillList(markersData);
	bindListEvents();
	refreshClusterer(markersArray); //replacement of mc.addMarkers
	$("#count-of-search-items").text(markersArray.length);

}

function fillList(markersArray){
	var innerList = $("#markers-list").find(".maps-div-scroll");
	innerList.html('');
	$.each(markersArray, function(key, marker){
		innerList.append(
			"<div class='map-marker' data-lat='" + marker.lat.toString() + "' data-lng='" + marker.lng.toString() + "' data-id='" + key + "' data-target='" + marker.id.toString() + "'>"
				+ "<div class='desc'>"
					+ "<p class='name'>" + marker.name.toString() + "</p>"
					+ "<p class='address'>" + marker.address.toString() + "</p>"
				+ "</div>"
			+ "</div>");
	});
	if(markersArray.length > 0){
		actionAfterChangePlace(new BMap.Point(markersArray[0].lng, markersArray[0].lat));
		sortElements();
	}
}

function bindListEvents(){
	var listItems = $("#markers-list").find(".maps-div-scroll").find(".map-marker");
	listItems.each(function(){
		var item = $(this);
		item.click(function(){
			var id = item.data("id");
			focusPlace(id);
		});
	});
}

function closeList(){
	var list = $("#markers-list").find(".maps-div-scroll-wrap");
	var head = $('.result-number');
	list.removeClass('active');
	head.removeClass('active');

}

function focusPlace(markerId){
	var marker = markers[markerId];
	var lng = marker.lng;
	var lat = marker.lat;

	var pnt = new BMap.Point(lng, lat);
	var altLat = parseFloat(lat) + POPUP_TRANSLATION_LAT;
	var altLng = parseFloat(lng) + POPUP_TRANSLATION_LNG;
	var altpnt = new BMap.Point(altLng, altLat);

	closeList();

	mp.centerAndZoom(altpnt, PLACE_FOCUS_ZOOM);
	mp.openInfoWindow(marker.iwindow, pnt);
}

function refreshClusterer(mrkrs) {
	if(mc != undefined){
		mc.clearMarkers();
	}
	mc = new BMapLib.MarkerClusterer(mp, {markers:mrkrs});
	mc.setMaxZoom(CLUSTERER_MAX_ZOOM);
	mc.setStyles(mStyles);
}

function sortElements(){
	var $wrapper = $('#markers-list .maps-div-scroll');
	var count = markers.length;
	if(count > 0) {
		$('.result-number').addClass('can-open');
	} else {
		$('.result-number').removeClass('can-open');
		$("#markers-list .maps-div-scroll-wrap").removeClass('active')
		$('.result-number ').removeClass('active');
	}
	/*$wrapper.find('.map-marker').sort(function (a, b) {
		return  +$(a).data('distance') - +$(b).data('distance');
	}).appendTo($wrapper);*/
}

function addInfoWindow(marker, info){
	var adress = "";
	var contentString =
		'<div id="content" data-id="'+info.id+'">'+
			'<h1 id="firstHeading" class="firstHeading" style="color: #fe0000; font-size: 18px; margin: -5px 0 0 0;">' + info.name + '</h1>' +					'<div id="bodyContent">' +
				'<div class="info-item" style=" padding: 12px 0;">' +
					'<h2 style="color: #fe0000; font-size: 16px; font-weight: bold; margin: 0 0 10px 0;">' + translations.address[currentLanguage] + ':</h2>' +
					'<p style="color: #000; font-size: 14px; margin: 0;">' + info.address + '</p>' +
			'</div>';

	if (typeof info.openHour != 'undefined' && info.openHour != '' && info.openHour != null && info.openHour != 'null') {
		contentString +=
			'<div class="info-item" style="padding: 12px 0 10px 0; border-top: 1px solid #d8d8d8;">' +
				'<h2 style="color: #fe0000; font-size: 16px; font-weight: bold; margin: 0 0 10px 0;">' + translations.hours[currentLanguage] + ':</h2>' +
				'<p style="color: #000; font-size: 14px; margin: 0;">' + info.openHour +'</p>' +
			'</div>';
	}

	contentString += '<div class="info-item" style=" padding: 17px 0 5px 0; border-top: 1px solid #d8d8d8;">';

	if(info.reqPosloans) {
		contentString += '<img src="/img/icon-nav-electronics.png" style="margin-right: 15px;" alt="' + translations.electronics[currentLanguage] + '" title="' + translations.electronics[currentLanguage] + '"/>';
	}

	if(info.reqCashLoans) {
		contentString += '<img src="/img/icon-nav-cash-loans.png" style="margin-right: 15px;" alt="' + translations.cashloans[currentLanguage] + '" title="' + translations.cashloans[currentLanguage] + '"/>';
	}

	contentString += '</div>';
	contentString += '</div></div>';

	var IVopts = {
		enableMessage:true,
	};
	var infoWindow = new BMap.InfoWindow(contentString, IVopts);
	info.iwindow = infoWindow;

	marker.addEventListener('click', function(e){
		$(".infoBox").fadeOut(100);

		$(".map-marker").removeClass("active");
		$(".map-marker[data-target=" + (marker.zIndex - 1) + "]").addClass("active");

		var pnt = new BMap.Point(marker.M.lng, marker.M.lat);
		var mapcenter = new BMap.Point(marker.M.lng + POPUP_TRANSLATION_LNG, marker.M.lat + POPUP_TRANSLATION_LAT);

		//mp.setCenter(mapcenter);
		mp.openInfoWindow(infoWindow, pnt);
	});
}

function initCheckboxControl(){
	$("#map-top-controls .checkbox").click(function (){
		if($(this).find('.checkbox-item').hasClass('active')){
			$(this).find('.checkbox-item').removeClass('active');
		} else {
			$(this).find('.checkbox-item').addClass('active');
		}
		setMarkers(false);
		sortElements();
	});
}

function getMarkersInViewport(){
	var bounds = mp.getBounds();
	var markersInViewport = [];

	for(var i = 0; i < markers.length; i++){
		var marker = markers[i];
		if (bounds.containsPoint(new BMap.Point(marker.lng, marker.lat))){
			markersInViewport.push(marker);
		}
	}

	return markersInViewport;
}

function actionAfterChangePlace(point){
	var input = document.getElementById('pac-input');

        $("#markers-list").fadeIn();

		//var markersInViewport = getMarkersInViewport();

		$('#count-of-search-items').html(markers.length);
		//filterList(markersInViewport);

        currentPosition = point;
}

function filterList(markersInViewport){
	var listItems = $("#markers-list").find(".maps-div-scroll").find(".map-marker");
	listItems.each(function(){
		var toShow = false;

		if(toShow){
			listItem.show();
		} else {
			listItem.hide();
		}
	});
}

function fixTouchScrolling(){
	setTimeout(function () {
		$("#map-canvas").append("<div id='map-overlay'></div>");
		$("#map-canvas").append("<div id='map-loader'></div>");
		if(!dragEnabled){
			$("#map-overlay").show();
		}
		mp.addEventListener('touchmove', function(){
			return true;
		});
	}, 1000);

}

function initSelectEvents(){
	regionSelect = $("#region-select");
	townSelect = $("#town-select");
	$(regionSelect).prop('selectedIndex', 0);
	$(townSelect).prop('selectedIndex', 0);
	$(regionSelect).trigger('change');
	$(townSelect).trigger('change');
	//type = regionSelect.data('type');
	type = $(".calculator-switch:checked").data('toggle-type');
	if(typeof type === "undefined" || type === "undefined" || type === null) {
		type = '';
	}

	$('#map-top-controls').addClass('hidden');	
	/*
	if(type == 'wcl') {
		$('#map-top-controls').hide();		
	} else {
		$('#map-top-controls').show();
	}
	*/
	showLoading();

	$.ajax({
		method: 'GET',
		url: BASE_URL + "api/provinces/"+type,
		contentType: 'application/x-www-form-urlencoded'
	}).success(function(data){
		regionSelect.find("option:not([value=null])").remove();
		$.each(data, function(key, item){
			regionSelect.append("<option value='" + item + "'>" + item + "</option>");
		});
		hideLoading();
	}).fail(function(){
		//window.alert("Failed to get town data.");
		hideLoading();
	})

	townSelect.hide();

	regionSelect.change(function(){
		var selected = $(this).val();
		if(selected == null || selected == "null") return;
		showLoading();
		$.ajax({
			method: 'POST',
			url: BASE_URL + 'api/cities/'+type,
			contentType: 'application/x-www-form-urlencoded',
			data: {province: selected}
		}).success(function(data){
			townSelect.find("option:not([value=null])").remove();
			$.each(data, function(key, item){
				townSelect.append("<option value='" + item + "'>" + item + "</option>");
			});
			if(!$(".map-button button").hasClass('disabled')) {
				$(".map-button button").addClass('disabled');
			}
			townSelect.show();
			hideLoading();
		}).fail(function(){
			//window.alert("Failed to get town data.");
			hideLoading();
		})
	});

	$(".map-button button").click(function(){
		if(!initialized){
			initialize(handleSearchButton);
			initialized = true;
			return;
		}
		handleSearchButton();

	})
}

function handleSearchButton(){
	var selected = townSelect.val();
	if(selected == null || selected == "null") {
		return false;
	}
	showLoading();
	$.ajax({
		method: 'POST',
		url: BASE_URL + 'api/stores/'+type,
		contentType: 'application/x-www-form-urlencoded',
		data: {
			province: regionSelect.val(),
			city: selected
		}
	}).success(function(data){
		markers = prepareData(data);
		mp.centerAndZoom(new BMap.Point(markers[0].lng, markers[0].lat), DEFAULT_ZOOM);
		setMarkers();
		hideLoading();
		hideOptions();
	}).fail(function(){
		//window.alert("Failed to get town data.");
		hideLoading();
	});
}

function showOptions(){
	var searchButton = $('.search-button-head');
	mapShown = true;
	searchButton.find('i').removeClass('fa-search');
	searchButton.find('i').addClass('fa-close');
}

function hideOptions(){
	var searchButton = $('.search-button-head');
	mapShown = false;
	$('.map-overlay').fadeOut(500);
	// $(".map-calculator").fadeOut(500).addClass('hidden');
	if($('.map-calculator-switch-wcl').hasClass('fake')){
		$('#map-top-controls').addClass('hidden');
	} else{
		$('#map-top-controls').removeClass('hidden');
	}
	searchButton.removeClass('init');
	searchButton.find('i').removeClass('fa-close');
	searchButton.find('i').addClass('fa-search');
}

function showOverlay() {
	if (mapShown === true) {
		if ($('.search-button-head').hasClass('init')) {
			// do nothing
		} else {
			$('.map-overlay').fadeOut();
			hideOptions();
		}
	} else {
		$('.map-overlay').fadeIn();
		showOptions();
	}
}

function prepareData(inputData){
	var outputData = [];

	$.each(inputData, function(key, item){
		var newItem = {
			id: item.Store.id,
			name: item.Store.name,
			lat: item.Store.latitude,
			lng: item.Store.longitude,
			address: item.Store.street + " " + item.Store.city + " " + item.Store.district + "<br />" + item.Store.province,
			marker: "/img/pin-black.png",
			reqCashLoans: item.Store.pos_type == 'WCL'?true:false,
			reqPosloans: item.Store.pos_type == 'POSL'?true:false,
			openHour: item.Store.openHour,
			display: true
		}
		outputData.push(newItem);
	});

	return outputData;
}

function fillSelect(select, data){
	select.find("option:not([value=null])").remove();
	$.each(data, function(key, item){
		select.append("<option value='" + item.id + "'>" + item.name + "</option>");
	});
}

function showLoading(){
	$("#map-loader").show();
}

function hideLoading(){
	$("#map-loader").hide();
}

function initialize(callback) {

	currentPosition = new BMap.Point(MAP_INITIAL_POSITION.lng, MAP_INITIAL_POSITION.lat);

  	mp = new BMap.Map('map-canvas');
	mp.disableScrollWheelZoom();

	if($(window).width() < 993){
		$('.btn-touch').addClass('active');
		mp.enableDoubleClickZoom();
		mp.disableDragging();
		dragEnabled = false;
		$("#map-overlay").show();
	} else {
		mp.disableDoubleClickZoom();
		mp.enableDragging();
		dragEnabled = true;
		$("#map-overlay").hide();
	}

	$('.open-checkboxes').click(function (){
		if($(window).width() < 993) {
			if($(this).hasClass('active')){
				$('#type-selector .checkbox').fadeOut();
				$('#type-selector').animate({height: '0px'});
				$(this).removeClass('active');
			} else {
				$('#type-selector').animate({height: '100px'});
				$('#type-selector .checkbox').fadeIn();
				$(this).addClass('active');
			}
		}
	});
	$('.btn-touch').click(function (){
			var val = true;
			if($('.btn-touch').hasClass('active')){
				mp.enableDragging();
				dragEnabled = true;
				$("#map-overlay").hide();
				mp.disableDoubleClickZoom();
			}
			else {
				mp.disableDragging();
				dragEnabled = false;
				$("#map-overlay").show();
				mp.enableDoubleClickZoom();
			}
			$('.btn-touch').toggleClass('active');
	});

	$('.search-button-head').click(showOverlay);
	$('.show-btn').click(showOverlay);
	$('.hide-btn').click(function(){
		$('.search-button-head').removeClass('init');
		showOverlay();
	});

	$('.result-number').show();

	$("#markers-list .result-number").click(function (){
		if($(this).hasClass('can-open')) {
			$("#markers-list .maps-div-scroll-wrap").toggleClass('active')
			$(this).toggleClass('active');
		}
	});

	$('.btn-zoom-in').click(function (){
		mp.zoomIn();
	});

	$('.btn-zoom-out').click(function (){
		mp.zoomOut();
	});

	mp.centerAndZoom(currentPosition, zoom);

	setMarkers(false);
	initCheckboxControl();

	$(document).on({'DOMNodeInserted': function(e) {
			$('.pac-item, .pac-item span', this).addClass('needsclick');
			e.preventDefault();
		}
	}, '.pac-container');

	$("#map-canvas").css('background-image',  'none');

	fixTouchScrolling();
	callback();
}

function preinit(){
	currentLanguage = $("html").attr("lang");
	if($(".map").length) {
		initSelectEvents();
		$("body").on("change", "#town-select", function() {
			townSelectVal = $('#town-select option[value="null"]:selected');
			if(townSelectVal.length < 1) {
				$(".map-button button").removeClass('disabled');
			} else {
				if(!$(".map-button button").hasClass('disabled')) {
					$(".map-button button").addClass('disabled');
				}
			}
		});
	}
}

//$(document).ready(function(){
//	preinit();
//});
window.onload = preinit;
