var gulp = require('gulp');
var path = require('path');
var colors = require('colors');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var less = require('gulp-less'),
	strip = require('gulp-strip-css-comments'),
	LessPluginCleanCSS = require('less-plugin-clean-css'),
	LessPluginAutoPrefix = require('less-plugin-autoprefix'),
	cleancss = new LessPluginCleanCSS({ advanced: true }),
	autoprefix= new LessPluginAutoPrefix({ browsers: ["last 3 versions"] });
var size = require('gulp-size');

gulp.task('less', function() {
	return gulp.src('app/webroot/css/style.less')
		.pipe(plumber({errorHandler: notify.onError("Error compiling LESS")}))
		.pipe(less({
			plugins: [autoprefix]
		}))
		.pipe(gulp.dest('app/webroot/css'))
		.pipe(notify('Compiled CSS!'));
});

gulp.task('watch', function() {
	var watcher = gulp.watch('app/webroot/css/**/*.less', ['less']);

	watcher.on('change', function(event) {
		var filename = event.path.lastIndexOf('/');
		filename = event.path.substr(filename + 1);
		console.log('File ' + filename.green + ' was ' + event.type + ', running tasks...');
	});
});

gulp.task('minifyjs', function() {
	return gulp.src([
			'app/webroot/vendor/jquery/dist/jquery.min.js',
			'app/webroot/vendor/numeral/numeral.js',
			'app/webroot/vendor/jquery-waypoints/waypoints.min.js',
			'app/webroot/vendor/respond/dest/respond.min.js',
			'app/webroot/vendor/modernizr/modernizr.js',
			'app/webroot/vendor/jquery-ui/jquery-ui-1.11.4.custom/jquery-ui.min.js',
			'app/webroot/vendor/watch/watch.js',
			'app/webroot/vendor/headroom.js/dist/headroom.min.js',
			'app/webroot/vendor/headroom.js/dist/jQuery.headroom.min.js',
			'app/webroot/vendor/jquery.ui.touch-punch.dk/jquery.ui.touch-punch.dk.js',
			'app/webroot/vendor/bootstrap-3/dist/js/bootstrap.min.js',
			'app/webroot/vendor/jquery-validation/dist/jquery.validate.min.js',
			'app/webroot/vendor/fastclick/lib/fastclick.js',
			'app/webroot/vendor/idangerous-swiper/src/idangerous.swiper.js',
			'app/webroot/js/Countdown.js',
			'app/webroot/js/firstLoan.js',
			'app/webroot/js/carousel.js',
			'app/webroot/js/main.js',
			'app/webroot/js/markerclusterer.js',
			'app/webroot/js/plugins.js',
			'app/webroot/js/Slider.js',
			'app/webroot/js/selectProvinceCity.js',
			'app/webroot/js/jquery.ui.labeledslider.js',
			'app/webroot/js/jquery.event.move.js',
			'app/webroot/js/jquery.event.swipe.js',
			'app/webroot/js/hearth-storm.js',
			'app/webroot/js/oneTimeSurvey.js',
			'app/webroot/js/onepercent.js'
		])
		.pipe(concat('script.js'))
		.pipe(gulp.dest('app/webroot/js/build'))
		.pipe(notify('Concat finished!'))
		.pipe(size({showFiles: true, title: ' Concat JS '.bgWhite.black}))
		.pipe(uglify())
		.pipe(rename('script.min.js'))
		.pipe(gulp.dest('app/webroot/js/build'))
		.pipe(notify('Uglify finished!'))
		.pipe(size({showFiles: true, title: ' Minified JS '.bgYellow.black}));
});

gulp.task('minifycss', function() {
	return gulp.src('app/webroot/css/style.less')
		.pipe(less({
			plugins: [autoprefix,cleancss]
		}))
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('app/webroot/css'))
		.pipe(strip())
		.pipe(gulp.dest('app/webroot/css'))
		.pipe(notify('CSS Autoprefixed and Minified!'))
		.pipe(size({showFiles: true, title: ' Minified CSS '.bgYellow.black}));
});

gulp.task('minify', ['minifyjs', 'minifycss']);
gulp.task('default', ['less', 'watch']);