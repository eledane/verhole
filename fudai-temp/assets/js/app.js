
var App = function () {
	this.$animation;
	this.$listener;
	this.$controller;
};


App.init = function () {
	return new App();
};


App.prototype.configure = function () {
	this.$animation = new Animation();
	this.$controller = new Controller(this.$animation);
	this.$listener = new Listener(this.$controller);
  
	this.$listener.listen();
};
