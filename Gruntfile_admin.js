module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
   concat: {
	basic: {
	  src: [
		  'app/webroot/vendor/modernizr/modernizr.js',
		  'app/webroot/vendor/fastclick/lib/fastclick.js',
		  'app/webroot/js/jquery.min.js',
		  'app/webroot/vendor/jquery-ui/ui/minified/jquery-ui.min.js',
		  'app/webroot/vendor/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.js',
		  'app/webroot/vendor/jquery-treetable/javascripts/src/jquery.treetable.js',
		  'app/webroot/vendor/speakingurl/speakingurl.min.js',
		  'app/webroot/vendor/bootstrap/docs/assets/js/bootstrap.min.js',
		  'app/webroot/vendor/jquery-ui/ui/minified/jquery.ui.widget.min.js',
		  'app/webroot/vendor/jquery-ui/ui/i18n/jquery.ui.datepicker-en-GB.js'
	  ],
	  dest: 'app/webroot/js/build/admin_script.js',
	},
	css: {
	  src: [
	  	  'app/webroot/css/seed-fonts.css',
		  'app/webroot/vendor/bootstrap/docs/assets/css/bootstrap.css',
		  'app/webroot/vendor/jquery-ui/themes/black-tie/jquery-ui.css',
		  'app/webroot/vendor/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.css',
		  'app/webroot/vendor/jquery-treetable/stylesheets/jquery.treetable.css',
	  ],
	  dest: 'app/webroot/css/build/admin_style.css'
	},
  },
	uglify: {
	  options: {
		banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
	  },
	  build: {
		src: 'app/webroot/js/build/admin_script.js',
		dest: 'app/webroot/js/build/admin_script.min.js'
	  }
	},
	cssmin: {
		css:{
		src: 'app/webroot/css/build/admin_style.css',
		dest: 'app/webroot/css/build/admin_style.min.css'
		  }
	}
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-strip-css-comments');
  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify', 'cssmin']);
  grunt.registerTask('build', ['concat', 'uglify', 'cssmin']);

};
