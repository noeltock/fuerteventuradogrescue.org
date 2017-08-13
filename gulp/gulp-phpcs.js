const gulp  = require( 'gulp' )
const phpcs = require( 'gulp-phpcs' )
const cache = require( 'gulp-cached' )

gulp.task( 'phpcs', function () {
	return gulp.src( [ '!./vendor/**/*', '!./lib/**/*', './**/*.php' ] )
		.pipe( cache( 'lint-php' ) )
		.pipe( phpcs( {
			bin:      'vendor/bin/phpcs',
			standard: './phpcs.ruleset.xml',
		} ) )
		.pipe( phpcs.reporter( 'log' ) )
		.pipe( phpcs.reporter( 'fail' ) )
} )
