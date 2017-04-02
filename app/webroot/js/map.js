var directionsService = new google.maps.DirectionsService({suppressMarkers: true});
var currentPosition = new google.maps.LatLng(21.024107, 105.841523);
var markersArray = [];

var currentPositionMarker = 'map_pin_current_position.png';
var defaultMarker = 'map_pin.png';
var infowindow;

//zoom after search
var zoom = 16;
var map;
var mc;

var mapOptions = {};

var options = {
			reqCashLoans:  true,
			reqElectronics:  true,
			reqMotorbike:  false
};

var currentLanguage;

var translations = {
	address: {
		en: "Address",
		vi: "Địa chỉ"
	},
	hours: {
		en: "Opening hours",
		vi: "Giờ mở cửa"
	},
	electronics: {
		en: "Electronic shops",
		vi: "Điện tử gia dụng"
	},
	motorbikes: {
		en: "Motorbike shops",
		vi: "Xe máy"
	},
	cashloans: {
		en: "Cash loans",
		vi: "Vay tiền mặt"
	}
	
};

// init markers


$(document).ready(function() {
	
	currentLanguage = $("html").attr("lang");
	
	google.maps.event.addDomListener(window, 'load', initialize);	
	
	var setzoom = false;
	if($(window).width() < 993){
		setzoom = true;
		$('.btn-touch').addClass('active');
	}
	
	mapOptions = { 
        zoom: 10,
		scrollwheel: false,
        disableDefaultUI: true,
		disableDoubleClickZoom: setzoom,
		draggable: !setzoom,
        position: currentPosition
	};

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
				val = false;
			}
			map.setOptions({draggable: !val});
			map.setOptions({disableDoubleClickZoom: val});
			$('.btn-touch').toggleClass('active');
	});
	
	$('.result-number').show();
	
	$("#markers-list .result-number").click(function (){
		if($(this).hasClass('can-open')) {
			$("#markers-list .maps-div-scroll-wrap").toggleClass('active')
			$(this).toggleClass('active');
		}
	});
	$('.btn-gps').click(function (){
			var marker = new google.maps.Marker({
        map: map
			});
			setCurrentPositionFromBrowser (marker);
	});
	
	$('.btn-zoom-in').click(function (){

		var currentZoomLevel = map.getZoom();
		if(currentZoomLevel != 21) {
			map.setZoom(currentZoomLevel + 1);
		}
	});

	$('.btn-zoom-out').click(function (){

		var currentZoomLevel = map.getZoom();
		if(currentZoomLevel != 0) {
			map.setZoom(currentZoomLevel - 1);
		}
	});


});


function initialize() {
		
		$('#submit-maps').click(function() {
        google.maps.event.trigger(input, 'focus');
        google.maps.event.trigger(input, 'keydown', {keyCode: 13});
    });

    

    map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		
		infowindow = new InfoBox();
		
		/****************************************************************/				
		map.setCenter(currentPosition);
		
		var firstStep = true;
    google.maps.event.addListener(map, 'bounds_changed', function() {			
				if(firstStep){
					setMarkers(map, map.getBounds(),false);
					sortElements();
					firstStep = false;
				}
    });
		
		var marker = new google.maps.Marker({
        map: map
			});
		
		actionAfterChangePlace(marker);
		initCheckboxControl();
		
		var mcOptions = {
				styles: [{
					height: 59,
					url: "/img/map_pin_empty.png",
					width: 60,
					textSize: 14,					
				}]
			}
		mc = new MarkerClusterer(map, markersArray, mcOptions);
};


function clearOverlays() {

    for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(null);
    }
    markersArray.length = 0;
		
}

function setMarkers(map, bounds, isSearch) {
		
    clearOverlays();

		setCheckboxOptions();
		
	
    var defaultMarker = {
        url: '/img/'+defaultMarker,
        size: new google.maps.Size(51, 58),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(25, 58)
    };

    markersArray = [];
    for (var i = 0; i < markers.length; i++) {
				if(isSearch){
					markers[i].display = false;
				}
        var currentMarker = markers[i];

        if (
            (!options.reqCashLoans && currentMarker.reqCashLoans === !options.reqCashLoans) ||
            (!options.reqElectronics && currentMarker.reqElectronics === !options.reqElectronics) ||
            (!options.reqMotorbike && currentMarker.reqMotorbike === !options.reqMotorbike)
        ) {
						
            var myLatLng = new google.maps.LatLng(currentMarker.lat, currentMarker.lng);
            
						var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: currentMarker.marker,
                title: currentMarker.name,
                zIndex: currentMarker.id
            });
            markersArray.push(marker);
						
						
            if (bounds.contains(marker.getPosition()) || markers[i].display) {
								if(isSearch){
									markers[i].display = true;
								}
								
                var x = currentMarker.id;
                if (!$("#markers-list .map-marker[data-target=" + x + "]").length) {
                    $("#markers-list .maps-div-scroll").append('<div class="map-marker" data-lat="' + currentMarker.lat + '" data-lng="' + currentMarker.lng + '" data-distance="'+currentMarker.distanceInMeters+'" data-target="' + x + '" onclick="openPlace(' + x + ', '+currentMarker.lat+', '+currentMarker.lng+')"><span>'+currentMarker.distance+'</span><div class="icon"><img alt="" src="'+currentMarker.logo+'"></div><div class="desc"><p class="name">' + currentMarker.name + '</p><p class="address">' + currentMarker.address + '</p></div></div>');
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
		mc.clearMarkers();
		mc.addMarkers(markersArray);
}





function actionAfterChangePlace(marker){
	
	var input = document.getElementById('pac-input');
		
	var autocomplete = new google.maps.places.SearchBox(input);
	autocomplete.bindTo('bounds', map);
	


	google.maps.event.addListener(autocomplete, 'places_changed', function() {
				infowindow.close();
				
        $("#markers-list").fadeIn();
        
        var place = autocomplete.getPlaces();
        place = place[0];
        if (!place.geometry) {
            return;
        }

        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(zoom);
        }
        currentPosition = place.geometry.location;
								
				setMarkerDistance();
				setMarkers(map, map.getBounds(), true);
				setMarkerWithCurrentPosition(marker);
				sortElements();
    });
		
		
}


function setMarkerDistance(){
	for (var i = 0; i < markers.length; i++) {
				calcRoute(i, currentPosition, new google.maps.LatLng(markers[i].lat, markers[i].lng));
				
	}
	return true;
}

function setMarkerWithCurrentPosition(marker){
		marker.setVisible(false);
		
		marker.setIcon({
				url: '/img/'+ currentPositionMarker,
				size: new google.maps.Size(50, 57),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(25, 57)
		});
		
		marker.setPosition(currentPosition);
		marker.setVisible(true);
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
		var infowindow = new InfoBox(options);
    map.setCenter(options.position);

}

function openPlace(id, lat, lng) {
		if($(window).width()<993){
			$("#markers-list .maps-div-scroll-wrap").toggleClass('active')
			$(this).toggleClass('active');
		}
		var myLatLng = new google.maps.LatLng(lat + 2, lng);
		map.setCenter(myLatLng);
		google.maps.event.trigger(markersArray[id], 'click');
}


function calcRoute(i, start, end) {
	
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
		
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
			var distance = response.routes[0].legs[0].distance.text;
			var distanceInMeters = 0;
			if(distance.indexOf("km") > 0) {
				distanceInMeters = parseInt(distance.substr(0, distance.indexOf(" ")))*1000;
			} else {
				distanceInMeters = parseInt(distance.substr(0, distance.indexOf(" ")));
			}
			
			markers[i].distanceInMeters = distanceInMeters;
			markers[i].distance = distance;
			
			
			$("#markers-list .map-marker[data-target=" + markers[i].id + "]").data('distance', markers[i].distanceInMeters);
			$("#markers-list .map-marker[data-target=" + markers[i].id + "] span").html(markers[i].distance);
			sortElements();
		} else {
			markers[i].distance = '';
		}
  });
}


function setCurrentPositionFromBrowser (marker){
	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            currentPosition = new google.maps.LatLng(position.coords.latitude,
                position.coords.longitude);
								map.setCenter(currentPosition);
								setMarkerWithCurrentPosition(marker);
				}, function() {
            handleNoGeolocation(true);
        });
    } else {
        handleNoGeolocation(false);
    }
}


function initCheckboxControl(){
	$("#map-top-controls .checkbox").click(function (){
			if($(this).find('.checkbox-item').hasClass('active')){
				$(this).find('.checkbox-item').removeClass('active');
			} else {
				$(this).find('.checkbox-item').addClass('active');
			}
			setMarkers(map, map.getBounds(),false);
			sortElements();
		});
}

function setCheckboxOptions(){
	options = {
		reqCashLoans:  $("#checkbox_0").hasClass("active"),
		reqElectronics:  $("#checkbox_1").hasClass("active"),
		reqMotorbike:  $("#checkbox_2").hasClass("active")
	};
}

function sortElements(){
		
		var $wrapper = $('#markers-list .maps-div-scroll');
		var count = $wrapper.find('.map-marker').length;
		$('#count-of-search-items').html(count);
		if(count > 0) {
			$('.result-number').addClass('can-open');
		} else {
			$('.result-number').removeClass('can-open');
			$("#markers-list .maps-div-scroll-wrap").removeClass('active')
			$('.result-number ').removeClass('active');
		}
				$wrapper.find('.map-marker').sort(function (a, b) {
				return  +$(a).data('distance') - +$(b).data('distance');
		})
		.appendTo( $wrapper );
}

function addInfoWindow(marker, info) {
    var adress = "";


        var contentString = 
				'<div id="content" data-id="'+info.id+'">'+
					'<h1 id="firstHeading" class="firstHeading" style="color: #fe0000; font-size: 18px; margin: -5px 0 0 0;"><img src="'+info.logo+'">&nbsp;' + info.name + '</h1>' +					'<div id="bodyContent">' +
							'<div class="info-item" style=" padding: 12px 0;">' +
									'<h2 style="color: #fe0000; font-size: 16px; font-weight: bold; margin: 0 0 10px 0;">' + translations.address[currentLanguage] + ':</h2>' +
									'<p style="color: #000; font-size: 14px; margin: 0;">' + info.address + '</p>' +
							'</div>';
							
						if (typeof info.openHour != 'undefined' && info.openHour != '') {
							contentString += '<div class="info-item" style="padding: 12px 0 10px 0; border-top: 1px solid #d8d8d8;">' +
									'<h2 style="color: #fe0000; font-size: 16px; font-weight: bold; margin: 0 0 10px 0;">' + translations.hours[currentLanguage] + ':</h2>' +
									'<p style="color: #000; font-size: 14px; margin: 0;">' + info.openHour +'</p>' +
							'</div>';
						}
						contentString += '<div class="info-item" style=" padding: 17px 0 5px 0; border-top: 1px solid #d8d8d8;">';
						if(info.reqElectronics) {
							contentString += '<img src="/img/icon-nav-electronics.png" style="margin-right: 15px;" alt="' + translations.electronics[currentLanguage] + '" title="' + translations.electronics[currentLanguage] + '"/>';
						}
						if(info.reqMotorbike) {
							contentString += '<img src="/img/icon-nav-motorbikes.png" style="margin-right: 15px;" alt="' + translations.motorbikes[currentLanguage] + '" title="' + translations.motorbikes[currentLanguage] + '"/>';
						}
						if(info.reqCashLoans) {
							contentString += '<img src="/img/icon-nav-cash-loans.png" style="margin-right: 15px;" alt="' + translations.cashloans[currentLanguage] + '" title="' + translations.cashloans[currentLanguage] + '"/>';
						}
						contentString += '</div>';
				contentString += '</div></div>';

        var infoWindow = new InfoBox({
            content: contentString,
            pixelOffset: new google.maps.Size(-5, -25),
            alignBottom: true,
            boxStyle: {
                background: "#fff",
                //opacity: 0.75,
                width: "310px",
                position: "relative",
                padding: "18px 15px 13px 15px",
                boxShadow: "0 1px 15px rgba(0, 0, 0, 0.3)",
            },
            closeBoxPosition: "0 0px 0px -25px",
            closeBoxURL: "/img/close-btn.png",
            infoBoxClearance: new google.maps.Size(0, 0)
        });

        google.maps.event.addListener(marker, 'click', function() {
            $(".infoBox").fadeOut(100);

            $(".map-marker").removeClass("active");
            $(".map-marker[data-target=" + (marker.zIndex - 1) + "]").addClass("active");

						infoWindow.close();
						infoWindow.open(map, marker);
						//var newPosition = new google.maps.LatLng(0,0);
						//map.setCenter(newPosition);
            

        });

}

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(document).on({
    'DOMNodeInserted': function() {
        $('.pac-item, .pac-item span', this).addClass('needsclick');
    }
}, '.pac-container');