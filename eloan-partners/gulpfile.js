// REQUIRED MODULES
// npm install gulp colors gulp-notify gulp-plumber gulp-uglify gulp-sourcemaps gulp-concat gulp-rename gulp-less gulp-strip-css-comments less-plugin-clean-css less-plugin-autoprefix gulp-size --save-dev
// END OF REQUIRED MODULES

var gulp = require('gulp');
var path = require('path');
var colors = require('colors');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var less = require('gulp-less'),
	strip = require('gulp-strip-css-comments'),
	LessPluginCleanCSS = require('less-plugin-clean-css'),
	LessPluginAutoPrefix = require('less-plugin-autoprefix'),
	cleancss = new LessPluginCleanCSS({advanced: true}),
	autoprefix = new LessPluginAutoPrefix({browsers: ["last 10 versions"]});
var size = require('gulp-size');
//var closureCompiler = require('gulp-closure-compiler');
var browserSync = require('browser-sync').create();

var template = '.';
var build = template + '/build';

var jsFiles = [
	template + '/vendor/jquery/jquery.min.js',
	template + '/vendor/modernizr/modernizr.js',
	template + '/vendor/respond/dest/respond.min.js',
	template + '/vendor/fastclick/lib/fastclick.js',
	template + '/vendor/bootstrap-3/dist/js/bootstrap.min.js',
	template + '/vendor/easing/jquery.easing.min.js',
	
	template + '/js/jquery.validate.min.js',
	template + '/js/additional-methods.min.js',
	template + '/js/script.js'
];


gulp.task('default', ['js', 'css']);

gulp.task('css', ['less', 'less_watch']);
gulp.task('less', function () {
	return gulp.src(template + '/css/style.less')
		.pipe(sourcemaps.init())
		.pipe(less({plugins: [autoprefix]}))
		.on('error', Errors)
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(build))
		.pipe(notify('Less compiled'));
});
gulp.task('less_watch', function () {
	gulp.watch(template + '/css/**/*.less', ['less']);
	gulp.watch(template + '/css/*.less', ['less']);
});


gulp.task('js', ['js_concat', 'js_watch']);
gulp.task('js_concat', function () {
	return gulp.src(jsFiles)
		.pipe(sourcemaps.init())
		.pipe(concat('script.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(build))
		.pipe(notify('Js compiled'));
});
gulp.task('js_watch', function () {
	gulp.watch(jsFiles, ['js_concat']);
});


gulp.task('build', ['build_js', 'build_css']);

gulp.task('build_css', function () {
	return gulp.src(template + '/css/style.less')
		.pipe(less({plugins: [autoprefix,cleancss]}))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(build))
		.pipe(notify('Less compiled'));
});

gulp.task('build_js', function () {
	return gulp.src(jsFiles)
		.pipe(concat('script.js'))
		.pipe(uglify())
		//.pipe(closureCompiler({
		//	continueWithWarnings: true,
		//	compilerPath: template + '/vendor/closure-compiler/compiler.jar',
		//	fileName: 'app.js'
		//}))
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(build))
		.pipe(notify('Js compiled'));
});


function Errors(error) {
	console.log(error.toString());
	var args = Array.prototype.slice.call(arguments);
	notify.onError({
		title: "Compile Error",
		message: "<%= error.message %>"
	}).apply(this, args);
	notify('ERROR');
}


 gulp.task('minifyjs', function() {
 return gulp.src(jsFiles)
 .pipe(concat('script.js'))
 .pipe(gulp.dest('build'))
 .pipe(size({showFiles: true, title: ' Concatenated JS '.bgWhite.black}))
 .pipe(uglify())
 .pipe(gulp.dest('build'))
 .pipe(notify('Uglify finished!'))
 .pipe(size({showFiles: true, title: ' Minified JS '.bgYellow.black}));
 });


 gulp.task('minifycss', function() {
 return gulp.src('css/style.less')
 .pipe(less({
 plugins: [autoprefix,cleancss]
 }))
 .pipe(gulp.dest('build'))
 .pipe(strip())
 .pipe(gulp.dest('build'))
 .pipe(notify('CSS Autoprefixed and Minified!'))
 .pipe(size({showFiles: true, title: ' Minified CSS '.bgYellow.black}));
 });
 

//gulp.task('serve', ['less'], function() {
//    browserSync.init({ proxy: "respiforum" });
//    gulp.watch(sourceCssDir + '/*.less', ['less']);
//	gulp.watch(sourceCssDir + '/*/*.less', ['less']);
//    gulp.watch(sourceViewsDir + '/*.php').on('change', browserSync.reload);
//});

gulp.task('minify', ['minifyjs', 'minifycss']);
//gulp.task('compile', ['less', 'concatjs']);
//gulp.task('default', ['less', 'watch']);
