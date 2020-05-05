// Gulp
var gulp = require( 'gulp' );
// Compile Sass files
var sass = require( 'gulp-sass' );
// Prevent pipe breaking caused by errors
var plumber = require( 'gulp-plumber' );
// Error notification
var notify = require( 'gulp-notify' );
// Add vendor prefixes
var postcss = require( 'gulp-postcss' );
var autoprefixer = require( 'autoprefixer' );
// Format CSS coding style
var csscomb = require( 'gulp-csscomb' );
// Merge media queries
var mmq = require( 'gulp-merge-media-queries' );

// Compile Sass files
gulp.task( 'sass', done => {
	gulp.src( './assets/scss/**/*.scss' )
	.pipe( plumber( {
		errorHandler: notify.onError( 'Error: <%= error.message %>' )
	} ) )
	.pipe( sass( {
		outputStyle: 'expanded'
	} ) )
	.pipe( postcss( [
		autoprefixer( {
			grid: true
		} ),
	] ) )
	.pipe( mmq() )
	.pipe( csscomb() )
	.pipe( gulp.dest( './assets/css/' ) )
	done();
});

// File watcher
gulp.task( 'watch', () => {
	gulp.watch( './assets/scss/**/*.scss', gulp.task( 'sass' ) );
})

//Default Task
gulp.task( 'default', gulp.task( 'watch' ) );
