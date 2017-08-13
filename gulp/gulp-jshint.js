const gulp   = require( 'gulp' );
const jshint = require( 'gulp-jshint' );

gulp.task( 'jshint', function () {
	gulp.src( './assets/src/js/*.js' )
		.pipe( jshint() )
		.pipe( jshint.reporter( 'default' ) )
} )
