module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> theme scripts : <%= grunt.template.today("yyyy-mm-dd") %> */\n',
        compress: true,
        mangle: false
      },
      build: {
        src: ['js/<%= pkg.name %>.js', 'js/navigation.js', 'js/skip-link-focus-fix.js'],
        dest: 'js/<%= pkg.name %>.min.js'
      },
      customizer: {
        src: 'js/customizer.js',
        dest: 'js/customizer.min.js'
      }
    },
    cssmin: {
      options: {
        report: 'min',
        sourceMap: true
      },
      build: {
        src: ['css/bootstrap.css', 'css/bootstrap-select.css', 'css/bootstrap-checkbox.css'],
        dest: 'css/bootstrap-pack.min.css'
      },
      target: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.css', '!*.min.css', '!bootstrap*.css'],
          dest: 'css',
          ext: '.min.css'
        }]
      },

    }
  });

  // grunt.loadNpmTasks('grunt-contrib-jshint');
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'cssmin']);
};
