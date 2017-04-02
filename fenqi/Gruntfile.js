//Gruntfile
    module.exports = function(grunt) {

    //Initializing the configuration object
      grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // Task configuration
        concat: {
          options: {
            separator: ';',
          },
          js_frontend: {
            src: [
              //'./bower_components/jquery/dist/jquery.js',
              './bower_components/bootstrap/dist/js/bootstrap.js',
              './bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js',
              './bower_components/ladda-bootstrap/dist/spin.js',
              './bower_components/ladda-bootstrap/dist/ladda.js',
              './dev/js/nette.ajax.js',
              './dev/js/main.js',
              './dev/js/jqEasing.js',
              './dev/js/classie.js',
              './dev/js/cbpAnimatedHeader.js',
              './dev/js/contact_me.js',
              './dev/js/agency.js'
            ],
            dest: './public/js/main.js',
          }
        },

        less:{
          development: {
            options: {
              compress: true,  //minifying the result
            },
            files: {
              //compiling base.less into screen.css
              "./public/css/screen.css":"./dev/less/index.less",
            }
          }
        },
        uglify:{
          options: {
            mangle: false  // Use if you want the names of your functions and variables unchanged
          },
          frontend: {
            files: {
              './public/js/main.js': './public/js/main.js',
            }
          },
        },

        watch:{

            js_frontend: {
              files: [
                //watched files
                //'./bower_components/jquery/dist/jquery.js',
                './bower_components/bootstrap/dist/js/bootstrap.js',
                './bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js',
                './dev/js/main.js'
                ],   
              tasks: ['concat:js_frontend','uglify:frontend'],     //tasks to run
              options: {
                livereload: true                        //reloads the browser
              }
            },
            
            less: {
              files: ['./dev/less/*.less'],  //watched files
              tasks: ['less'],                          //tasks to run
              options: {
                livereload: true                        //reloads the browser
              }
            },

        }
      });

    // Plugin loading

     grunt.loadNpmTasks('grunt-contrib-concat');
     grunt.loadNpmTasks('grunt-contrib-watch');
     grunt.loadNpmTasks('grunt-contrib-less');
     grunt.loadNpmTasks('grunt-contrib-uglify');
     
     // Task definition
     grunt.registerTask('default', ['watch']);

  };
