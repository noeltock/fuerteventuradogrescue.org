const gulp         = require( 'gulp' )
const sass         = require( 'gulp-sass' )
const autoprefixer = require( 'gulp-autoprefixer' )
const browserSync  = require( 'browser-sync' ).get( 'bs' )

gulp.task( 'styles', function () {
	gulp.src( ['./assets/src/scss/**/*.scss'] )
		.pipe( sass( { outputStyle: 'compressed' } ).on( 'error', sass.logError ) )
		.pipe( autoprefixer( { browsers: ['last 2 versions'] } ) )
		.pipe( gulp.dest( './assets/dist/css' ) )
		.pipe( browserSync.reload( { stream: true } ) )
} )
