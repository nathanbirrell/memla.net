module.exports = function(grunt){

    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: {
              reload: true
            },
            js: {
                files: ['assets/js/*.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['assets/css/*.scss'],
                tasks: ['sass']
            }
        },

        cssmin: {
            build: {
                src: 'assets/css/style.css',
                dest: 'assets/css/style.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'assets/css/*.css': 'assets/css/*.scss'
                }
            }
        },

        concat: {
          dev: {
            src: 'assets/js/root/**/*.js',
            dest: 'assets/js/main.js'
          }
        },

        uglify: {
            options: {
              mangle: false //To prevent changes to your variable and function names
            },
            build: {
                files: {
                    'assets/js/main.min.js': ['assets/js/main.js']
                }
            }
        },

        imagemin: {
          png: {
            options: {
              optimizationLevel: 7 //Compression level
            },
            files: [{
              expand: true, //Dynamic expansion
              cwd: 'assets/img/uncompressed',
              src: ['assets/img/uncompressed/*.png'],
              dest: 'assets/img',
              ext: '.png'
            }]
          },
          jpg: {
            options: {
            progressive: true //Lossless or progressive conversion
            },
            files: [{
              expand: true,
              cwd: 'assets/img/uncompressed',
              src: ['assets/img/uncompressed/*.jpg'],
              dest: 'assets/img/folder',
              ext: '.jpg'
            }]
          }
        },

        php: {
          all: {
            options: {
              port: 7007,
              hostname: 'localhost',
              base: '',
              keepalive: true
            }
          }
        },

        open: {
          all: {
            path: 'http://localhost:7007',
            app: 'Google Chrome'
          }
        }
    });

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('server', ['open','php']);
    // grunt.registerTask('build',  ['sass', 'cssmin', 'concat', 'uglify', 'imagemin']);

};
