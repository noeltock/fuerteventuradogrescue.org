const gulp       = require( 'gulp' )
const requireDir = require( 'require-dir' )

// For neatness, most tasks have been split up into separate files
// Just load them all from ./gulp directory.
requireDir( './gulp' )

gulp.task( 'lint', [ 'phpcs', 'jshint' ] )
gulp.task( 'default', [ 'styles', 'scripts', 'images' ] )
