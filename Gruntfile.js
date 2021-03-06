module.exports = function(grunt){

    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            livereload: {
              files: [
                      'assets/css/app.css',
                      'assets/js/dist/app.min.js',
                      'content/**/*',
                      'site/**/*'
                      ],
              tasks: ['reload']
            },
            js: {
                files: ['assets/js/src/*.js'],
                tasks: ['concat','uglify']
            },
            css: {
                files: ['assets/css/**/**/*'],
                tasks: ['sass','cssmin']
            },
            tmpl: {
              files: ['site/templates/*','site/snippets/*','site/plugins/*'],
              tasks: ['reload']
            }
        },

        cssmin: {
            build: {
                src: 'assets/css/app.css',
                dest: 'assets/css/app.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'assets/css/app.css': 'assets/css/app.scss'
                }
            }
        },

        concat: {
          dist: {
              src: ['assets/js/src/jquery.min.js', 
                    'assets/js/src/foundation.min.js', 
                    'assets/js/src/jquery.easing.js', 
                    'assets/js/src/jquery.iosslider.min.js', 
                    'assets/js/src/imagesloaded.pkgd.min.js', 
                    'assets/js/src/jquery-imagefill.js', 
                    'assets/js/src/app.js'],
              dest: 'assets/js/dist/app.js'
          }
        },

        uglify: {
            options: {
              mangle: false //To prevent changes to your variable and function names
            },
            build: {
                files: {
                    'assets/js/dist/app.min.js': ['assets/js/dist/app.js']
                }
            }
        },

        // imagemin: {
        //   png: {
        //     options: {
        //       optimizationLevel: 7 //Compression level
        //     },
        //     files: [{
        //       expand: true, //Dynamic expansion
        //       cwd: 'assets/img/uncompressed',
        //       src: ['assets/img/uncompressed/*.png'],
        //       dest: 'assets/img',
        //       ext: '.png'
        //     }]
        //   },
        //   jpg: {
        //     options: {
        //     progressive: true //Lossless or progressive conversion
        //     },
        //     files: [{
        //       expand: true,
        //       cwd: 'assets/img/uncompressed',
        //       src: ['assets/img/uncompressed/*.jpg'],
        //       dest: 'assets/img/folder',
        //       ext: '.jpg'
        //     }]
        //   }
        // },

        php: {
          all: {
            options: {
              port: 7007,
              hostname: '127.0.0.1',
              base: '',
              keepalive: true
            }
          }
        },

        open: {
          all: {
            path: 'http://127.0.0.1:7007',
            app: 'Google Chrome'
          }
        }
    });

    grunt.registerTask("reload", "reload Chrome on OS X",
      function() {
        require("child_process").exec("osascript " +
            "-e 'tell application \"Google Chrome\" " +
              "to tell the active tab of its first window' " +
            "-e 'reload' " +
            "-e 'end tell'");
    });

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('server', ['php']);
    grunt.registerTask('build',['concat','uglify','sass']);
    // grunt.registerTask('build',  ['sass', 'cssmin', 'concat', 'uglify', 'imagemin']);

};
