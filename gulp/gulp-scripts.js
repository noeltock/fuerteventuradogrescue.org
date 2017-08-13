const gulp   = require( 'gulp' )
const uglify = require( 'gulp-uglify' )
const concat = require( 'gulp-concat' )

gulp.task( 'script-theme', function () {
	gulp.src( './assets/src/js/theme/**/*.js' )
		.pipe( concat( 'theme.js' ) )
		.pipe( uglify() )
		.pipe( gulp.dest( './assets/dist/js' ) )
} )

gulp.task( 'script-case-studies', function () {
	gulp.src( './assets/src/js/case-studies/**/*.js' )
		.pipe( concat( 'case-studies.js' ) )
		.pipe( uglify() )
		.pipe( gulp.dest( './assets/dist/js' ) )
} )

gulp.task( 'scripts', ['jshint', 'script-theme', 'script-case-studies' ] );
