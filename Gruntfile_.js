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
    'app/webroot/vendor/jqueryui/jquery-ui.js',
    'app/webroot/vendor/watch/watch.js',
    'app/webroot/vendor/jquery.ui.touch-punch.dk/jquery.ui.touch-punch.dk.js',
    'app/webroot/vendor/bootstrap-3/dist/js/bootstrap.min.js',
    'app/webroot/vendor/jquery-validation/dist/jquery.validate.min.js',
    'app/webroot/vendor/fastclick/lib/fastclick.js',
    'app/webroot/vendor/idangerous-swiper/src/idangerous.swiper.js',
	 'app/webroot/js/fbConnect.js',
	'app/webroot/js/Countdown.js',
	'app/webroot/js/firstLoan.js',
	'app/webroot/js/main.js',
	'app/webroot/js/markerclusterer.js',
	'app/webroot/js/plugins.js',
	'app/webroot/js/Slider.js',
	'app/webroot/js/baidu/api.js',
	'app/webroot/js/baidu/icon-text-overlay.js',
	'app/webroot/js/baidu/clusterer.js',
	'app/webroot/js/bmap.js',

      ],
      dest: 'app/webroot/js/build/script.js',
    },
  },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
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
