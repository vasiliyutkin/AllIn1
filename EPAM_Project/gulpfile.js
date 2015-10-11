var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    sass = require('gulp-ruby-sass'),
    livereload = require('gulp-livereload'),
    plumber = require('gulp-plumber'),
    prefix = require('gulp-autoprefixer');

//Scripts Task
//Uglifies
gulp.task('scripts', function () {
    return gulp.src('app.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('ready/js/'))
        .pipe(livereload());
});

//Styles Task
//Uglifies
gulp.task('styles', function () {
    return sass('style.scss', {
            style: 'compressed'
        })
        .pipe(plumber())
        .pipe(prefix('last 2 versions'))
        .pipe(gulp.dest('ready/css/'))
        .pipe(livereload());
});


//Watch Task
//Watches JS and CSS
gulp.task('watch', function () {
    var server = livereload();
    gulp.watch('app.js', ['scripts']);
    gulp.watch('style.scss', ['styles']);
});

//executing the gulp program
gulp.task('default', ['scripts', 'styles', 'watch']);