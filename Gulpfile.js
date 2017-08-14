var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    gutil = require('gulp-util'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
    gulp.src('sass/*.scss')
        .pipe(sass({
            includePaths: require('node-neat').includePaths
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(plumber(function (error) {
                gutil.log(error.message);
                this.emit('end');
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
