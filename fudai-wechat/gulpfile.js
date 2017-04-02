var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    less = require('gulp-less'),
    strip = require('gulp-strip-css-comments'),
    LessPluginCleanCSS = require('less-plugin-clean-css'),
    LessPluginAutoPrefix = require('less-plugin-autoprefix'),
    cleancss = new LessPluginCleanCSS({advanced: true}),
    autoprefix = new LessPluginAutoPrefix({browsers: ["last 10 versions"]});
var notify = require('gulp-notify');
var size = require('gulp-size');
var rename = require("gulp-rename");
var cssFiles = [
    'assets/css/style.css'
];

var jsFiles = [
    'lib/jquery-ui-1.9.2.custom/js/jquery-1.9.1.js',
    'lib/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js',
    'lib/jquery.ui.touch-punch.min.js',
    'lib/modernizr/modernizr.js',
    'lib/jquery-smooth-scroll-master/jquery.smooth-scroll.min.js',
    'lib/jQuery.dotdotdot-master/src/js/jquery.dotdotdot.min.js',
    'lib/jquery-cookie/src/jquery.cookie.js',
    'lib/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.js',
    'lib/meetselva-attrchange/js/attrchange.js',
    'lib/bootstrap-3/dist/js/bootstrap.js',
    'lib/TweenMax.min.js',
    'lib/roundSlider/dist/roundSlider.min.js',
    'assets/js/animation.js',
    'assets/js/app.js',
    'assets/js/controller.js',
    'assets/js/listener.js',
    'assets/js/slick.js',
    'assets/js/script.js',
    'lib/fastclick.js',
    'lib/respond/src/respond.js',
    'lib/jquery.corner.js',
    'lib/slick-1.5.9/slick/slick.min.js',
];

// minify&concat css files loaded in indexTrans.html
gulp.task('concat-minify-css', function() {
  return gulp.src(cssFiles)
    .pipe(concat('all.css'))
    .pipe(minifycss({compatibility: 'ie8'}))
    .pipe(gulp.dest('assets/css/min'));
});

// minify english css addon
gulp.task('minify-css-en', function() {
  return gulp.src('assets/css/style_en.css')
    .pipe(minifycss({compatibility: 'ie8'}))
    .pipe(gulp.dest('assets/css/min'));
});

// minify ie css addon
gulp.task('minify-css-ie', function() {
  return gulp.src('assets/css/styleIE.css')
    .pipe(minifycss({compatibility: 'ie8'}))
    .pipe(gulp.dest('assets/css/min'));
});

// minify terms ie css addon
gulp.task('minify-css-ie-terms', function() {
  return gulp.src('assets/css/styleIETerms.css')
    .pipe(minifycss({compatibility: 'ie8'}))
    .pipe(gulp.dest('assets/css/min'));
});

// minify&concat js files
gulp.task('concat-minify-js', function() {
  return gulp.src(jsFiles)
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/min'));
});


gulp.task('css', ['less', 'less_watch']);
gulp.task('less', function () {
    return gulp.src('assets/less/application.less')
        .pipe(less({plugins: [autoprefix]}))
        .on('error', Errors)
        .pipe(rename('style.css'))
        .pipe(gulp.dest('assets/css/'))
        .pipe(notify('Less compiled'));
});
gulp.task('less_watch', function () {
    gulp.watch('assets/less//**/*.less', ['less']);
    gulp.watch('assets/less//*.less', ['less']);
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



gulp.task('default', ['concat-minify-js', 'concat-minify-css']);
