var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');
 
//Concat all JS
gulp.task('concatJs', function() {
  gulp.src('./wp-content/themes/cartello/js/main.js')
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest('./wp-content/themes/cartello/js/'));
});

// browser-sync task for starting the server.
gulp.task('browserSync', function() {
    //watch files
    var files = [
    './wp-content/themes/cartello/style.css',
    './wp-content/themes/cartello/*.php',
    './wp-content/themes/cartello/js/*.js'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "altodavila.dev.dev",
    notify: false
    });
});

gulp.task('sass', function() {
  gulp.src('./wp-content/themes/cartello/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(plumber({
      handleError: function (err) {
        console.log(err)
        this.emit('end')
      }
    }))
    .pipe(sass())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('./wp-content/themes/cartello/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch', ['browserSync', 'concatJs', 'sass'], function(){
  gulp.watch('./wp-content/themes/cartello/**/*.scss', ['sass']);
  // Other watchers
})

gulp.task('default', ['sass'], function() {
  console.log( 'Feito!' );
});

