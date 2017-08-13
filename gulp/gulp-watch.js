const gulp        = require( 'gulp' )
const browserSync = require( 'browser-sync' ).get( 'bs' )

gulp.task( 'watch', ['browser-sync'], function () {
	gulp.watch( ['./assets/src/scss/**/*.scss', './lib/hm-pattern-library/assets/sass/**/*.scss'], ['styles'] )
	gulp.watch( ['./assets/src/js/**/*.js'], ['scripts'] ).on( 'change', browserSync.reload )
	gulp.watch( ['./**/*.php'], ['phpcs'] ).on( 'change', browserSync.reload )
} )
