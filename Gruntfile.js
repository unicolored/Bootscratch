/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON( 'package.json' ),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
    '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
    '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
    '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
    ' Licensed <%= pkg.licenses %> */\n',
    // Task configuration.
    less: {
      options: {
        compress: false,
        yuicompress: false,
        banner: '<%= banner %>'
      },
      fromscratch: {
        files: {
          '<%= pkg.distCss %>/<%= pkg.name %>.css': '<%= pkg.local %>/less/<%= pkg.name %>.less',
        }
      }
    },
    concat: {
      options: {
        banner: '<%= banner %>',
        stripBanners: true
      },
      dist: {
        src: ['<%= pkg.local %>/js/<%= pkg.name %>.js'],
        dest: '<%= pkg.local %>/<%= pkg.name %>.concat.js'
      }
    },
    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      dist: {
        src: '<%= concat.dist.dest %>',
        dest: '<%= pkg.distJs %>/<%= pkg.name %>.min.js'
      }
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        unused: true,
        boss: true,
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        }
      },
      gruntfile: {
        src: 'Gruntfile.js'
      }
    },
    qunit: {
      files: ['test/**/*.html']
    },
    watch: {
      options: {
        nospawn: true,
        livereload: true,
        port: 80
      },
      gruntfile: {
        files: '<%= jshint.gruntfile.src %>',
        tasks: ['jshint:gruntfile']
      },
      less: {
        files: '<%= pkg.local %>/less/<%= pkg.name %>.less',
        tasks: ['less:fromscratch']
      },
      html: {
        files: '<%= pkg.dist %>/index.html',
        //tasks: ['less:fromscratch']
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-qunit');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task.
  grunt.registerTask('default', ['less','jshint', 'concat', 'uglify', 'watch']);

};
