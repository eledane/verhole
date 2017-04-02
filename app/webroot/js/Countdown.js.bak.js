/** Class for countdown element controlling **/
function Countdown(element, targetDate, lang, selectors){
	
	/** Default selectors for time elements **/
	var secondSelector = ".seconds";
	var minuteSelector = ".minutes";
	var hourSelector = ".hours";
	var daySelector = ".days";
	
	/** If the selector argument object is passed, use its selectors **/
	if(typeof selectors != typeof undefined){
		secondSelector = selectors.seconds;
		minuteSelector = selectors.minutes;
		hourSelector = selectors.hours;
		daySelecotr = selectors.hours;
	}
	
	/** Here are selectors for elements, in which time texts are set **/
	this.secondsElem = element.find(secondSelector);
	this.minutesElem = element.find(minuteSelector);
	this.hoursElem = element.find(hourSelector);
	this.daysElem = element.find(daySelector);
	
	/** Countdown target time (got from constructor param) **/
	this.targetDate = targetDate;
	this.strings = Countdown.englishStrings;
	
	/** Set string set according to constructor param **/
	if(lang != "en"){
		this.strings = Countdown.vietnameseStrings;
	}
	
	/** Values of an instance **/
	this.remaining = 0;
	this.seconds = 0;
	this.minutes = 0;
	this.hours = 0;
	this.days = 0;
}

/** How often should we decrease time (ms)**/
Countdown.prototype.frequency = 1000;

/** Static variables for time operations **/
Countdown.daySeconds = 86400;
Countdown.hourSeconds = 3600;
Countdown.minuteSeconds = 60;

/** String sets for both langs **/
Countdown.englishStrings = {
	dayText: " day",
	daysText: " days",
	hourText: " hour",
	hoursText: " hours",
	minuteText: " minute",
	minutesText: " minutes",
	secondText: " second",
	secondsText: " seconds"
}
Countdown.vietnameseStrings = {
	dayText: " ngày",
	daysText: " ngày",
	hourText: " giờ",
	hoursText: " giờ",
	minuteText: " phút",
	minutesText: " từ phút",
	secondText: " giây",
	secondsText: " giây"
}

/** Updates inner variables and DOM to new values **/
Countdown.prototype.refresh = function(){
	this.setValues();
	this.changeTexts();
}

/** Starts the countdown **/
Countdown.prototype.run = function(){
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
Countdown.prototype.setValues = function(){
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
	var secondText = this.strings.secondsText;
	if(this.seconds == 1){
		secondText = this.strings.secondText;
	}
	
	var minuteText = this.strings.minutesText;
	if(this.minutes == 1){
		minuteText = this.strings.minuteText;
	}
	
	var hourText = this.strings.hoursText;
	if(this.hours == 1){
		hourText = this.strings.hourText;
	}
	
	var dayText = this.strings.daysText;
	if(this.days == 1) {
		dayText = this.strings.dayText;
	}
	
	this.secondsElem.text(this.seconds + secondText);
	this.minutesElem.text(this.minutes + minuteText);
	this.hoursElem.text(this.hours + hourText);
	this.daysElem.text(this.days + dayText);
}

