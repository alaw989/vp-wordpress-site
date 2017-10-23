// Load Grunt
module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Tasks
    sass: { // Begin Sass Plugin
      dist: {
        options: {
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'app/scss',
          src: ['**/*.scss'],
          dest: 'app/css',
          ext: '.css'
      }]
      }
    },
    postcss: { // Begin Post CSS Plugin
      options: {
        map: false,
        processors: [
      require('autoprefixer')({
            browsers: ['last 2 versions']
          })
    ]
      },
      dist: {
        src: 'app/css/styles.css'
      }
    },
    watch: { // Compile everything into one task with Watch Plugin
      options: {
        interval: 5000
      },
      css: {
        files: '**/*.scss',
        tasks: ['sass', 'postcss']
      },
      js: {
        files: '**/*.js',
        tasks: ['uglify']
      }
    }
  });
  // Load Grunt plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss'); 
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Register Grunt tasks
  grunt.registerTask('default', ['watch']);
};