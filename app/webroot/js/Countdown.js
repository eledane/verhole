/** Class for countdown element controlling **/
function Countdown(element, targetDate){
	
	/** Default selectors for time elements **/
	var secondSelector = ".seconds";
	var minuteSelector = ".minutes";
	var hourSelector = ".hours";
	var daySelector = ".days";

	/** Here are selectors for elements, in which time texts are set **/
	this.secondsElem = element.find(secondSelector);
	this.minutesElem = element.find(minuteSelector);
	this.hoursElem = element.find(hourSelector);
	this.daysElem = element.find(daySelector);
	
	/** Countdown target time (got from constructor param) **/
	this.targetDate = targetDate;
	
	/** Values of an instance **/
	this.remaining = 0;
	this.seconds = 0;
	this.minutes = 0;
	this.hours = 0;
	this.days = 0;

	this.end = 0;
	this.counterBody = '.counterBody';
	this.promotionLink = '.btn';
}

/** How often should we decrease time (ms)**/
Countdown.prototype.frequency = 1000;

/** Static variables for time operations **/
Countdown.daySeconds = 86400;
Countdown.hourSeconds = 3600;
Countdown.minuteSeconds = 60;

/** Updates inner variables and DOM to new values, decides whether to stop or continue **/
Countdown.prototype.refresh = function(){

	if(this.days < 0 && this.end){
		this.end = 1;
		this.finish();
	}

	if(!this.end){
		this.setValues();
		this.changeTexts();
	}
}

Countdown.prototype.finish = function(){
	if($('html').hasClass('en')){
		var terminatedText = 'Promotion terminated';
	} else {
		var terminatedText = '促进终止';
	}

	var oThis = this;
	this.promotionLink.fadeOut();
	this.counterBody.find('.countdown').fadeOut();
	this.counterBody.find('h3').html(terminatedText);
}

/** Starts the countdown **/
Countdown.prototype.run = function(counterBody, promotionLink){
	this.counterBody = counterBody;
	this.promotionLink = promotionLink;
	this.remaining = this.getRemaining();
	this.refresh();
	setInterval(this.refresh.bind(this), this.frequency);
}

/** Get the time remaining before we reach target time (in seconds) **/
Countdown.prototype.getRemaining = function(){
	var currentDate = new Date();
	var remaining = (this.targetDate.getTime() - currentDate.getTime())/1000;
	return remaining;
}

/** Set instance variables to proper values, decrease remaining time by 
 * value of frequency variable **/
Countdown.prototype.setValues = function(callback){
	var remaining = this.remaining;
	var days = remaining/Countdown.daySeconds;
	days = Math.floor(days);
	remaining -= days*Countdown.daySeconds;
	if (days < 10 && days > 0) {
		days = "0" + days;
	}
	
	var hours = remaining/Countdown.hourSeconds;
	hours = Math.floor(hours);
	remaining -= hours*Countdown.hourSeconds;
	if (hours < 10 && hours > 0) {
		hours = "0" + hours;
	}
	
	var minutes = remaining/Countdown.minuteSeconds;
	minutes = Math.floor(minutes);
	remaining -= minutes*Countdown.minuteSeconds;
	if (minutes < 10 && minutes > 0) {
		minutes = "0" + minutes;
	}
	
	var seconds = Math.floor(remaining);
	if (seconds < 10 && seconds > 0) {
		seconds = "0" + seconds;
	}
	
	this.seconds = seconds;
	this.minutes = minutes;
	this.hours = hours;
	this.days = days;
	
	this.remaining -= this.frequency/1000;

}

/** Change texts in given html element to new values, choose 
 * the right time unit strings **/
Countdown.prototype.changeTexts = function(){
	this.secondsElem.text(this.seconds);
	this.minutesElem.text(this.minutes);
	this.hoursElem.text(this.hours);
	this.daysElem.text(this.days);
}
