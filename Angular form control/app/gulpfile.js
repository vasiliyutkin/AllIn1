var gulp            = require('gulp'),
    server          = require('gulp-server-livereload'),
    autoprefixer    = require('gulp-autoprefixer'),
    minifyCss       = require('gulp-minify-css'),
    minifyHTML      = require('gulp-minify-html'),
    inject          = require('gulp-inject'),
    mainBowerFiles  = require('gulp-main-bower-files');

//running server task
gulp.task('server', function() {
    gulp.src('./')
        .pipe(server({
            livereload: true,
            directoryListing: true,
            open: true
        }));
});
//autoprefix and minify stylesheets
gulp.task('css', function () {
    return gulp.src('styles/style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('../dist/styles'));
});
//minify main index.html file
gulp.task('html', function() {
    var opts = {
        conditionals: true,
        spare:true
    };

    return gulp.src('./*.html')
        .pipe(minifyHTML(opts))
        .pipe(gulp.dest('../dist'));
});
//minify angular templates files (views)
gulp.task('templates', function() {
    var opts = {
        conditionals: true,
        spare:true
    };

    return gulp.src('./views/*.html')
        .pipe(minifyHTML(opts))
        .pipe(gulp.dest('../dist/templates'));
});

gulp.task('inject', function () {
    var target = gulp.src('./index.html');
    var sources = gulp.src(['./scripts/**/*.js', './styles/*.css'], {read: false});
    return target.pipe(inject(sources))
        .pipe(gulp.dest('../dist'));
});

gulp.task('default', ['templates', 'css', 'html', 'server']);