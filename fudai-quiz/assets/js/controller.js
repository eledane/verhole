
var Controller = function (animation) {
	this.$animation = animation;
  
	this.brickCounter_ = 0;
};


Controller.prototype.faqHandler = function (el) {
        this.$animation.hanleFaq(el);
};

Controller.prototype.handleMenu = function (state){
        if ($(window).width() < 768){
            if (state){
                this.$animation.openMenu();
            }else{
                this.$animation.closeMenu();
            }
        }
    }

Controller.prototype.changeStep = function (el){
        if ($(window).width() < 768){
            this.$animation.animateSteps(el);
        }
    }

