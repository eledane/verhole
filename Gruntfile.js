module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concat: {
			basic: {
				src: [
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
					'app/webroot/js/idangerous.swiper.plugins.min.js',
					'app/webroot/js/Countdown.js',
					'app/webroot/js/Slider.js',
					'app/webroot/js/selectProvinceCity.js',
					'app/webroot/js/firstLoan.js',
					'app/webroot/js/carousel.js',
					'app/webroot/js/faq_section.js',
					'app/webroot/js/main.js',
					'app/webroot/js/markerclusterer.js',
					'app/webroot/js/plugins.js',
					'app/webroot/js/oneTimeSurvey.js',
					'app/webroot/js/jquery.cookie.js',
					'app/webroot/js/jquery.ui.labeledslider.js',
					'app/webroot/js/jquery.event.move.js',
					'app/webroot/js/jquery.event.swipe.js',
					'app/webroot/js/hearth-storm.js',
					'app/webroot/js/onepercent.js'
				],
				dest: 'app/webroot/js/build/script.js'
			}
		},
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
				sourceMap: 'mymap.map'
			},
			build: {
				src: 'app/webroot/js/build/script.js',
				dest: 'app/webroot/js/build/script.min.js'
			}
		},
		cssmin: {
			build_folder: {
				files: [{
					expand: true,
					cwd: 'app/webroot/css',
					src: ['*.css', '!*.min.css'],
					dest: 'app/webroot/css',
					ext: '.min.css'
				}]
			}
		},
		stripCssComments: {
			dist: {
				files: {
					'app/webroot/css/style.min.css': 'app/webroot/css/style.min.css'
				}
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-strip-css-comments');
	// Default task(s).
	grunt.registerTask('default', ['concat', 'uglify', 'cssmin', 'stripCssComments']);
	grunt.registerTask('build', ['concat', 'uglify', 'cssmin', 'stripCssComments']);
	grunt.registerTask('strip', ['stripCssComments']);

};
