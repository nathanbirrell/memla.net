module.exports = (grunt) ->

  # load Grunt plugins
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks)

  grunt.initConfig

    # load content from the package.json
    pkg: grunt.file.readJSON('package.json')

    # process sass-files
    sass:
      all:
        options:
          compass: true
          style: 'compressed'
        files: 'assets/css/style.css': 'assets/scss/style.scss'

    # minify css-files
    cssmin:
      options:
        banner: 'By @nathanbirrell for Memla, 2014.'
      all:
        files:
          'assets/css/*.min.css': [
            'assets/css/*.css'
          ]

    # minify js-files
    uglify:
      options:
        banner: 'By @nathanbirrell for Memla, 2014.'
      js:
        files:
          'assets/js/*.min.js': [
            'assets/js/*.js',
            'assets/js/**/*.js'
          ]
        options:
          mangle: false

    # watch the following files, and perform above actions accordingly
    watch:
      options:
        livereload: true

      livereload:
        files: [
          'assets/css/**/*'
          'assets/js/**/*'
        ]
        tasks: ['reload']

      sass:
        files: ['assets/scss/*.sass']
        tasks: ['sass']
      css:
        files: ['assets/css/*.css']
        tasks: ['cssmin']
      js:
        files: [
          'assets/js/*.js',
          'assets/js/**/*.js'
        ]
        tasks: ['uglify']

      tmpl:
        files: [
          'site/templates/*'
          'site/snippets/*'
          'site/plugins/*'
        ]
        tasks: ['reload']


    php:
      all:
        options:
          port: 7007
          hostname: 'localhost'
          base: ''
          keepalive: true

    open:
      all:
        path: 'http://<%= php.all.options.hostname %>:<%= php.all.options.port%>'


  grunt.registerTask "reload", "reload Chrome on OS X", ->
    require("child_process").exec("osascript " +
        "-e 'tell application \"Google Chrome\" " +
          "to tell the active tab of its first window' " +
        "-e 'reload' " +
        "-e 'end tell'")

  # Register defaults
  grunt.registerTask('server', ['open','php'])
  grunt.registerTask('default', ['reload','watch'])
