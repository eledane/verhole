/** Class for loan sliders **/
function Slider(selector){
	this.element = $(selector);
	this.value = this.element.data("value");
	this.input = $(this.element.data("input"));
	this.calc = calcData;
	this.step = this.getStepSize();
	this.secondSlider = {};
	this.touched = false;
	
	this.setBounds();
	if(this.isMonthSlider()){
		this.setBounds(0, this.calc.monthSteps.length - 1);
	}
}

/** Default separator for number formatting **/
Slider.defaultNumberSeparator = ",";

/** Setup slider attributes, set it to starting value **/
Slider.prototype.setup = function(){
	this.element.parent().append("<div class='min'>" + this.formatNumber(this.min) + "</div>");
	this.element.parent().append("<div class='actualValue'>" + this.formatNumber(this.value) + "</div>");
	this.element.parent().append("<div class='max'>" + this.formatNumber(this.max) + "</div>");

	
	if(this.isMonthSlider()){
		this.element.parent().find(".min").text(this.calc.monthSteps[this.min]);
		this.element.parent().find(".max").text(this.calc.monthSteps[this.calc.monthSteps.length - 1]);
	}
	
	var thisInstance = this;
	
	if(!this.isMonthSlider()){
		this.correctInitialValue();
	}
	
	/** Calling actual slider generation **/
	this.element.slider({
		value: this.value,
		min: this.min,
		max: this.max,
		step: this.step,
		range: "min",

//		animate: true,

		slide: function (event, ui) {
			$(this).slider('value', ui.value);
			thisInstance.update(ui.value);
			if(thisInstance.isMonthSlider()){
				thisInstance.updateMinMax();
			}
			thisInstance.touched = true;
			$(this).slider('option', 'step', thisInstance.getStepSize());
		},
		change: function(event, ui){
			
		},
		start: function(){

			if($(this).hasClass('slider-amount')){
				stm_clicki('send','event','calculator','set','loan amount');
				_hmt.push(['_trackEvent','calculator','set','loan amount']);
				//_czc.push(['_trackEvent','calculator','set','loan amount']);
				//ga('send', 'event','calculator','set','loan amount');
			} else{
				stm_clicki('send','event','calculator','set','tenure');
				_hmt.push(['_trackEvent','calculator','set','tenure']);
				//_czc.push(['_trackEvent','calculator','set','tenure']);
				//ga('send', 'event','calculator','set','tenure');
			}
		},
		stop: function(){
		}
	});
	thisInstance.showVal(this.value);
}

Slider.prototype.getStepSize = function(){
	var stepSize = 100; //default
	var step1;
	
	//step for month slider is always 1
	if(this.isMonthSlider()){
		return 1;	
	}
	
	for(var key in this.calc.data[0]){
		if(step1 == undefined){
			step1 = key;	
		} else {
			stepSize = key - step1;
			break;
		}
	}
	return stepSize;
}

Slider.prototype.getMiddleValue = function(monthStep, amountStep){
	var middle = 0;
	this.step = this.getStepSize();
	if (this.isMonthSlider() && typeof(monthSliderInitialStep) != typeof(undefined)) {
		middle = monthSliderInitialStep;
	} else if (!this.isMonthSlider() && typeof(amountSliderInitialStep) != typeof(undefined)) {
		middle = amountSliderInitialStep;
	} else {
		middle = this.getNearestStep((this.min+this.max)/2);		
	}
	if (this.isMonthSlider() && monthStep) {
		middle = monthStep;
	}
	if (!this.isMonthSlider() && amountStep) {
		middle = amountStep;
	}
	middle = this.min + middle*this.step;
	return middle;
}

Slider.prototype.getNearestStep = function(value){
	return Math.floor((value-this.min)/this.step);
}

Slider.prototype.isVisible = function(){
	if (typeof jQuery === "function" && this.element[0] instanceof jQuery) {
        el = el[0];
    }

    var rect = this.element[0].getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

Slider.prototype.animateToMiddle = function(delay, middle){
	this.step = this.getStepSize();
	var instance = this;
	instance.touched = true;
	setTimeout(function(){
		instance.update(middle);
		instance.element.slider('value',middle);
		var range = instance.element.find('.ui-slider-range');
		var handle = instance.element.find('.ui-slider-handle');
		$(range).addClass('increased-transition');
		$(handle).addClass('increased-transition');
		setTimeout(function() {
			$(range).removeClass('increased-transition');
			$(handle).removeClass('increased-transition');
		}, delay);
	}, delay);
}

/** Update slider data and handle label **/
Slider.prototype.update = function(value){
	this.showVal(value);
	this.setInput(value);
}

/** Make initial value fit into slider bounds and steps **/
Slider.prototype.correctInitialValue = function(){
	this.step = this.getStepSize();
	var newValue = Math.floor((this.value - this.min) / this.step) * this.step + this.min;
	if(newValue < this.min){
		newValue = this.min;
	}
	if(newValue > this.max){
		newValue = this.max;
	}
	this.value = newValue;
	this.input.val(newValue);
}

/** Update slider min and max **/
Slider.prototype.updateMinMax = function(newMin, newMax){
	var value = this.element.slider("option", "value");
	var newMax = newMax || this.getNewMax(value);
	var newMin = newMin || this.getNewMin(value);
	this.secondSlider.changeMax(newMax);
	this.secondSlider.changeMin(newMin);
}

/** Saves reference to second slider **/
Slider.prototype.setSecondSlider = function(ref){
	this.secondSlider = ref;
}

/** Get new slider max **/
Slider.prototype.getNewMax = function(step){
	var data = this.calc.data[step];
	var newMax = -1;
	var zeroEntries = [];
	$.each(data, function(key, entry){
		if(entry != 0){
			zeroEntries.push(parseInt(key));
		}
	});
	for(var i = 0; i < zeroEntries.length; i++){
		if(newMax < zeroEntries[i]){
			newMax = zeroEntries[i];
		}
	}
	return newMax;
}

/** Get new slider min **/
Slider.prototype.getNewMin = function(step){
	var data = this.calc.data[step];
	var newMax = Number.MAX_VALUE;
	var zeroEntries = [];
	$.each(data, function(key, entry){
		if(entry != 0){
			zeroEntries.push(parseInt(key));
		}
	});
	for(var i = 0; i < zeroEntries.length; i++){
		if(newMax > zeroEntries[i]){
			newMax = zeroEntries[i];
		}
	}
	return newMax;
}

/** Set min and max labels**/
Slider.prototype.setMaxLabel = function(newMax){
	this.element.parent().find(".max").text(this.formatNumber(newMax));
}

/** Set min and max labels**/
Slider.prototype.setMinLabel = function(newMin){
	this.element.parent().find(".min").text(this.formatNumber(newMin));
}

/** Function displaying current slider value under the handle **/
Slider.prototype.showVal = function(value){
	if(this.isMonthSlider()){
		value = this.calc.monthSteps[value];
		$("#ContactRepaymentLength").val(value);
	}
	this.element.find(".ui-slider-handle").html("<div class='value'>" + this.formatNumber(value) + "</div>");
	this.element.find(".ui-slider-handle").animate({marginLeft: -(this.element.find(".ui-slider-handle").width() / 2)}, 100);
	this.element.parent().find(".actualValue").html(this.formatNumber(value));

}

/** Function setting the value of corresponding input according to slider value **/
Slider.prototype.setInput = function(value){
	this.input.val(value);
	this.input.trigger("change");
}

/** Determine if month or amount slider **/
Slider.prototype.isMonthSlider = function(){
	if(this.element.hasClass("slider-months")){
		return true;
	}
	return false
}

/** Get min and max values for this slider **/
Slider.prototype.setBounds = function(min, max){
	this.step = this.getStepSize();
	var minVal = min;
	var maxVal = max;
	if(!this.isMonthSlider()){
		var middle = 0;
		middle = Math.floor(this.calc.data.length / 2);
		var middleObj = this.calc.data[middle];
		var minSet = false;
		for (var i in middleObj){
			if (!minSet){
				minVal = i;
			}
			if (middleObj[i] != 0){
				minSet = true;
			}
			if(middleObj[i] != 0){
				maxVal = i;	
			}
		}
	}
		
	this.min = parseInt(minVal);
	this.max = parseInt(maxVal);
}

/** Change slider calc data set (used for cash loans) **/
Slider.prototype.changeCalc = function(newCalc){
	this.step = this.getStepSize();
	if(newCalc == 'wcl') {
		this.calc = calcData;
	} else {
		this.calc = calcDataPosl;
	}
	//this.calc = calcData[newCalc];
}

/** Change slider range to reflect changed calc data set **/
Slider.prototype.changeRange = function(){
	var newMax = this.getHighestKey();
	if(this.getCurrentValue() > newMax){
		this.setValue(newMax);
	}
	this.element.slider('option', {max: newMax});
	this.setMaxLabel(newMax);	
}

/** Change max of slider **/
Slider.prototype.changeMax = function(newMax){
	if(this.getCurrentValue() > newMax){
		this.setValue(newMax);
	}
	this.element.slider('option', {max: newMax});
	this.setMaxLabel(newMax);
}

/** Change min of slider **/
Slider.prototype.changeMin = function(newMin){
	if(this.getCurrentValue() < newMin){
		this.setValue(newMin);
	}
	this.element.slider('option', {min: newMin});
	this.setMinLabel(newMin);
}

/** Get highest key of the current calc **/
Slider.prototype.getHighestKey = function(){
	var highest = 0;
	$.each(this.calc.data[0], function(key, value){
		var keyNum = parseInt(key);
		if(highest < keyNum){
			highest = keyNum;
		}
	});
	return highest;
}

/** Get current slider value **/
Slider.prototype.getCurrentValue = function(){
	var value = this.element.slider('value');
	return value;
}

/** Set slider value **/
Slider.prototype.setValue = function(value){
	this.element.slider('value', value);
	this.update(value);
}

/** Format number **/
Slider.prototype.formatNumber = function(number){
	return moneyFormat(number);
}

