module.exports = function(grunt){

    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        cssc: {
            build: {
                options: {
                    consolidateViaDeclarations: true,
                    consolidateViaSelectors:    true,
                    consolidateMediaQueries:    true
                },
                files: {
                    'assets/css/*.css': 'assets/css/*.css'
                }
            }
        },

        cssmin: {
            build: {
                src: 'assets/css/*.css',
                dest: 'assets/css/*.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'assets/css/*.css': 'assets/css/*.scss'
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'assets/js/*.min.js': ['assets/js/*.js']
                }
            }
        },

        watch: {
            options: {
              reload: true
            },
            html: {
                files: ['*.html','*.php','content/*','site/templates/*'],
                tasks: []
            },
            js: {
                files: ['assets/js/*.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['assets/sass/**/*.scss'],
                tasks: ['buildcss']
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

    grunt.registerTask('default', ['open','php']);

};
