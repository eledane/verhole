$(function() {
    var $win = $(window);
    var $doc = $(document);
    var isMobile = $win.width() <= 480;

    function runBanner2Animation() {
        var $lanterns = $(".section-banner2 .lantern");

        function handleOrientation(event) {
            var pct = event.gamma / 90;
            $lanterns.css("transform", "rotate(" + pct * -10 + "deg)");
        };

        window.addEventListener("deviceorientation", handleOrientation, false);
    };

    function runFQGAnimation() {
        var index = 0;
        var $prods = $(".section-fqg .prod");

        function fqgLoop() {
            var oldIndex = index;
            var oldPos, newPos;

            index++;
            if (index == 6) index = 1;

            $prods.each(function(i) {
                oldPos = oldIndex + i;
                if (oldPos > 5) oldPos -= 5;
                newPos = index + i;
                if (newPos > 5) newPos -= 5;
                $(this).removeClass("pos-" + oldPos).addClass("pos-" + newPos);
            });
            setTimeout(fqgLoop, 3e3);
        };

        fqgLoop();
    };

    function runProcessAnimation() {
        var index = 0;
        var $files = $(".section-process .options .file");

        function fqgLoop() {
            var oldIndex = index;
            var oldPos, newPos;

            index++;
            if (index == 7) index = 1;

            $files.each(function(i) {
                oldPos = oldIndex + i;
                if (oldPos > 6) oldPos -= 6;
                newPos = index + i;
                if (newPos > 6) newPos -= 6;
                $(this).removeClass("pos-" + oldPos).addClass("pos-" + newPos);
            });
            setTimeout(fqgLoop, 3e3);
        };

        fqgLoop();
    };

    if (isMobile) {
        runBanner2Animation();
        runFQGAnimation();
        runProcessAnimation();
    };
});