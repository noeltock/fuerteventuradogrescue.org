const gulp     = require( 'gulp' );
const newer    = require( 'gulp-newer' );
const imagemin = require( 'gulp-imagemin' );

// Minify images.
gulp.task( 'images', function () {
	return gulp.src( './assets/src/images/**/*.{jpg,jpeg,png,svg}')
		.pipe( newer( 'assets/dist/images' ) )
		.pipe( imagemin( {
			progressive: true,
			svgoPlugins: [
				{ removeViewBox: false },
				{ cleanupIDs: false }
			],
		} ) )
		.pipe( gulp.dest( 'assets/dist/images' ) );
} );
