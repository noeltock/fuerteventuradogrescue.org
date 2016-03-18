var gulp = require('gulp'),
    sass = require('gulp-sass'),
    neat = require('node-neat').includePaths,
    browserSync = require('browser-sync').create(),
    gutil = require('gulp-util'),
    plumber = require('gulp-plumber');


gulp.task('sass', function () {
    gulp.src('sass/*.scss')
        .pipe(plumber(function (error) {
                gutil.log(error.message);
                this.emit('end');
        }))
        .pipe(sass({
            includePaths: ['styles'].concat(neat)
        }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
});

gulp.task('watch', function() {
    browserSync.init({
        proxy: "fuerte.dev"
    });
    gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
