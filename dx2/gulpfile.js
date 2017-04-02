var gulp = require('gulp');
var autoprefix = require('gulp-autoprefixer');
var concatfile = require('gulp-concat');
var less = require('gulp-less');
var minify = require('gulp-minify-css');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');

var sourceAdminJsDir = 'assets/js/admin/';
var sourceAdminLessDir = 'assets/less/admin/';
var sourceFrontJsDir = 'assets/js/front/';
var sourceFrontLessDir = 'assets/less/front/';

var destAdminJsDir = 'www/admin/js/';
var destAdminCssDir = 'www/admin/css/';
var destFrontJsDir = 'www/js/';
var destFrontCssDir = 'www/css/';

var js_paths = {
	front: [
		'bower_components/jquery/dist/jquery.js',
		'bower_components/datetimepicker/jquery.datetimepicker.js',
		'bower_components/bootstrap/dist/js/bootstrap.js',
		'bower_components/nette.ajax.js/nette.ajax.js',
		'assets/js/live-form-validation.js',
		'assets/js/bowser.js',
		'bower_components/seiyria-bootstrap-slider/js/bootstrap-slider.js',
		'bower_components/ladda-bootstrap/js/spin.js',
		'bower_components/ladda-bootstrap/js/ladda.js',
		'bower_components/fingerprintjs2/fingerprint2.js',
        'assets/js/_numberFormatter.js',
		sourceFrontJsDir + '*.js'
	],
	admin: [
		'bower_components/jquery/dist/jquery.js',
		'bower_components/jquery-ui/jquery-ui.js',
		'bower_components/bootstrap/dist/js/bootstrap.js',

		'bower_components/moment/moment.js',
		'bower_components/bootstrap-daterangepicker/daterangepicker.js',
		//'assets/js/live-form-validation.js',
		'bower_components/nette-forms/src/assets/netteForms.js',
		'bower_components/typeahead.js/dist/bloodhound.js',
		'bower_components/typeahead.js/dist/typeahead.jquery.js',
		'bower_components/nette.ajax.js/nette.ajax.js',

		'../vendor/o5/grido/client-side/js/grido.js',
		'../vendor/o5/grido/client-side/js/plugins/grido.datepicker.js',
		'../vendor/o5/grido/client-side/js/plugins/grido.nette.ajax.js',
		'../vendor/o5/grido/client-side/js/plugins/grido.typeahead.js',

		'bower_components/datetimepicker/jquery.datetimepicker.js',

		sourceAdminJsDir + '*.js'
	]
};

gulp.task('default', [
		'watch',
		'front_less',
		'admin_less',
		'front_js',
		'admin_js'
	]
);

gulp.task('front_less', function() {
	return css(sourceFrontLessDir + 'index.less', destFrontCssDir, 'Front');
});

gulp.task('admin_less', function() {
	return css(sourceAdminLessDir + 'index.less', destAdminCssDir, 'Admin');
});

gulp.task('front_js', function() {
	return js(js_paths.front, destFrontJsDir, 'Front');
});

gulp.task('admin_js', function() {
	return js(js_paths.admin, destAdminJsDir, 'Admin');
});


gulp.task('watch', function () {
	gulp.watch(sourceAdminLessDir + '*.less', ['admin_less']);
	gulp.watch(sourceAdminJsDir + '*.js', ['admin_js']);

	gulp.watch(sourceFrontLessDir + '*.less', ['front_less']);
	gulp.watch(sourceFrontJsDir + '*.js', ['front_js']);
});

function swallowError (error) {
    console.log(error.toString());
    var args = Array.prototype.slice.call(arguments);
    notify.onError({
        title: "Compile Error",
        message: "<%= error.message %>"
    }).apply(this, args);
    notify('ERROR');
}

function css(source, destination, module) {
	return gulp.src(source)
		.pipe(less({ style: 'compressed' }))
		.on('error', swallowError)
		.pipe(autoprefix('last 10 version'))
		.on('error', swallowError)
		.pipe(minify({compatibility: 'ie8'}))
		.on('error', swallowError)
		.pipe(gulp.dest(destination))
		.on('error', swallowError)
		.pipe(rename('screen.css'))
		.on('error', swallowError)
		//.pipe(notify(module + ' CSS Done'))
		//.on('error', swallowError);
}

function js(source, destination, module) {
	return gulp.src(source)
		.pipe(concatfile('app.js'))
	    .on('error', swallowError)
		.pipe(uglify())
		.on('error', swallowError)
		.pipe(gulp.dest(destination))
		.on('error', swallowError)
		//.pipe(notify(module + ' Javascript Done'))
		//.on('error', swallowError);
}
