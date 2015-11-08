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
      bsjs: {
      	src: ['js/bootstrap*.js', '!js/*.min.js', '!js/jquery*.js'],
      	dest: 'js/bootstrap.min.js'
      },
      jquery: {
      	src: ['js/jquery*.js', '!js/*.min.js', '!js/bootstrap*.js'],
      	dest: 'js/jquery.plugins.min.js'
      },
      wedding: {
        src: [
          'js/classie.js',
          'js/navigation.js',
          'js/skip-link-focus-fix.js',
          'js/<%= pkg.name %>.js'
        ],
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
      bootstrap: {
        src: ['css/bootstrap*.css', '!css/*.min.css'],
        dest: 'css/bootstrap-pack.min.css'
      },
      wedding: {
	    src: ['css/style-*.css', '!css/*.min.css'],
	    dest: 'css/<%= pkg.name %>.min.css'
      }
    }
  });

  // grunt.loadNpmTasks('grunt-contrib-jshint');
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'cssmin']);
};
