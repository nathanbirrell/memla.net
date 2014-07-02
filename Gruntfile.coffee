module.exports = (grunt) ->

  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks)

  grunt.initConfig

    # load content from the package.json
    pkg: grunt.file.readJSON('package.json')


    # Set up some vars
    paths:
      assets: 'assets'
      coffee: '<%= paths.assets %>/coffee'
      js: '<%= paths.assets %>/js'
      sass: '<%= paths.assets %>/sass'
      sassfilename: 'styles'
      css: '<%= paths.assets %>/styles'
    banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */'


    # process coffee-files
    coffee:
      all:
        options:
          join: false
          bare: true
        files: [
          expand: true
          cwd: '<%= paths.coffee %>'
          src: ['*.coffee']
          dest: '<%= paths.coffee %>/pre_js'
          ext: '.js'
        ]

    # minify js-files
    uglify:
      options:
        banner: '<%= banner %>'
      js:
        files:
          '<%= paths.js %>/script.min.js': [
            '<%= paths.coffee %>/pre_js/jquery*.js'
            '<%= paths.coffee %>/pre_js/*.js'
          ]
        options:
          mangle: false


    # process sass-files
    sass:
      all:
        options:
          compass: true
          style: 'compressed'
        files: '<%= paths.sass %>/temp_<%= paths.sassfilename %>.css': '<%= paths.sass %>/<%= paths.sassfilename %>.sass'

    # minify css-files
    cssmin:
      options:
        banner: '<%= banner %>'
      all:
        files:
          '<%= paths.css %>/<%= paths.sassfilename %>.css': [
            '<%= paths.sass %>/*.css'
          ]


    watch:
      options:
        livereload: true

      livereload:
        files: [
          '<%= paths.css %>/**/*'
          '<%= paths.js %>/**/*'
        ]
        tasks: ['reload']

      sass:
        files: ['<%= paths.sass %>/*.sass']
        tasks: ['sass']
      css:
        files: ['<%= paths.sass %>/*.css']
        tasks: ['cssmin']
      coffee:
        files: ['<%= paths.coffee %>/*.coffee']
        tasks: ['coffee']
      js:
        files: [
          '<%= paths.coffee %>/pre_js/*.js'
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


  grunt.registerTask('server', ['open','php'])
  grunt.registerTask('default', ['reload','watch'])
