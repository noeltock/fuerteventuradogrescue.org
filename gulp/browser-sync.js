const gulp        = require( 'gulp' )
const browserSync = require( 'browser-sync' ).create( 'bs' )

gulp.task( 'browser-sync', function () {
	browserSync.init( {
		proxy:  'fuerte.dev',
		notify: {
			styles: {
				left:   '0',
				right:  'auto',
				top:    'auto',
				bottom: '0',
			},
		},
	} )
} )
