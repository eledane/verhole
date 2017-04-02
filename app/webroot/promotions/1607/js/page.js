$(function() {
	var instalMap = {1010: 111,1510: 167,2010: 222,2510: 278,3010: 333,3510: 394,4010: 450,4510: 506,5010: 562,1012: 94,1512: 142,2012: 189,2512: 236,3012: 283,3512: 335,4012: 383,4512: 431,5012: 479,5512: 527,6012: 575,1015: 78,1515: 117,2015: 156,2515: 194,3015: 233,3515: 277,4015: 317,4515: 356,5015: 396,5515: 435,6015: 475,1018: 67,1518: 100,2018: 133,2518: 167,3018: 200,3518: 238,4018: 272,4518: 306,5018: 340,5518: 374,6018: 408,1024: 53,1524: 79,2024: 106,2524: 132,3024: 158,3524: 190,4024: 217,4524: 244,5024: 271,5524: 298,6024: 325,6524: 364,7024: 392,7524: 420,8024: 448,8524: 476,9024: 504,9524: 532,10024: 560};

	var termList = [10, 12,15,18, 24];

	var laMap = {
		10: 5000,
		12: 6000,
		15: 6000,
		18: 6000,
		24: 10000
	};

	var $slideAmount = $( "#slider-amount" );
	var $slideMonths = $( "#slider-months" );
	var $calcResult = $( "#calc-result" );

	var $slideAmountValue = $("<span class='value' />");
	var $slideMonthsValue = $("<span class='value' />");

	$slideAmount.slider({
		min: 1000,
		max: 10000,
		step: 500,
		value: 5000,
		range: "min",
		create: function( event ) {
			$slideAmount.find(".ui-slider-handle").append($slideAmountValue.text(5000));
			$slideAmount.after("<span class='min'>1000</span>").after("<span class='max'>10000</span>");
		},
		slide: function( event, ui ) {
			var amount = ui.value;
			$slideAmountValue.text(amount);

			var months = termList[$slideMonths.slider("value")];

			$calcResult.text(instalMap[amount+months]);
		}
	});

	$slideMonths.slider({
		min: 0,
		max: 4,
		value: 2,
		range: "min",
		create: function( event ) {
			$slideMonths.find(".ui-slider-handle").append($slideMonthsValue.text(termList[2]));	
			$slideMonths.after("<span class='min'>"+termList[0]+"</span>").after("<span class='max'>"+termList[4]+"</span>");	
		},
		slide: function( event, ui ) {
			var months = termList[ui.value];
			$slideMonthsValue.text(months);

			var amoutMax = laMap[months];
			$slideAmount.slider( "option", "max", amoutMax);
			$slideAmount.siblings(".max").text(amoutMax);

			var amount = $slideAmount.slider("value");

			$slideAmountValue.text(amount);
			$calcResult.text(instalMap[amount+months]);
		}
	});

	$calcResult.text(instalMap[5000+termList[2]]);
});