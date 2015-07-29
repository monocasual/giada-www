module.exports = function(grunt)
{
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /* preprocess */

    preprocess: {
      options: {
        context: {
          'BASE_PATH': '<%= basePath %>'
        }
      },
      all: {
        files: {
        'css/main-<%= pkg.version %>.css' : 'css/main-<%= pkg.version %>.css'
        }
      }
    },

   /* concat - warning: order matters */

    concat: {
      js: {
        src: [
          'src/js/deps/jquery-1.11.1.js',
          'src/js/deps/**',
          'src/js/**',
        ],
        dest: 'js/main-<%= pkg.version %>.js'
      },
      css: {
        src: [
          'src/css/deps/bootstrap.min.js',
          'src/css/**'
        ],
        dest: 'css/main-<%= pkg.version %>.css'
      }
    },

    /* minify css */

    cssmin: {
      options: {
        keepSpecialComments: 0
      },
      all: {
        files: [{
          src:  'css/main-<%= pkg.version %>.css',
          dest: 'css/main-<%= pkg.version %>.css'
        }]
      }
    },

    /* minify js */

    uglify: {
      options: {
        compress: {
          drop_console: true, // remove console output
        }
      },
      all: {
        files: {
          'js/main-<%= pkg.version %>.js': ['js/main-<%= pkg.version %>.js']
        }
      }
    }
  });

  /* custom config vars */

  grunt.config.set('basePath', grunt.config.get('pkg.vars.' + grunt.cli.tasks[0] + '.base_path'));

  /* tell grunt the plugins we use */

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-preprocess');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-clean');

  /* register tasks */

  grunt.registerTask('dev', [
    'concat',
    //'preprocess'
    'uglify',
  ]);

  grunt.registerTask('dist', [
    'concat',
    //'preprocess',
    'uglify',
    'cssmin'
  ]);
};
