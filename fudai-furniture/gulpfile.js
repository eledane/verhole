var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

var cssFiles = [
    'lib/bootstrap-3.3.5-dist/css/bootstrap.css',
    'assets/css/style.css',
];

var jsFiles = [
    'lib/jquery-ui-1.9.2.custom/js/jquery-1.9.1.js',
    'lib/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js',
    'lib/jquery.ui.touch-punch.min.js',
    'lib/jquery-smooth-scroll-master/jquery.smooth-scroll.min.js',
    'lib/jQuery.dotdotdot-master/src/js/jquery.dotdotdot.min.js',
    'lib/jquery-cookie/src/jquery.cookie.js',
    'lib/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.js',
    'lib/meetselva-attrchange/js/attrchange.js',
    'lib/TweenMax.min.js',
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



gulp.task('default', ['concat-minify-js']);
