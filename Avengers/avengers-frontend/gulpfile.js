var gulp = require('gulp'),
    server = require('gulp-server-livereload');

//running server task
gulp.task('server', function() {
    gulp.src('./')
        .pipe(server({
            livereload: true,
            directoryListing: true,
            open: true
        }));
});

gulp.task('default', ['server']);
