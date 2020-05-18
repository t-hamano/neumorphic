var gulp = require( 'gulp' );
var zip = require( 'gulp-zip' );
var chmod = require( 'gulp-chmod' );
var rename = require( 'gulp-rename' );
var cleanCss = require( 'gulp-clean-css' );
var del = require( 'del' );
var sass = require( 'gulp-sass' );
var plumber = require( 'gulp-plumber' );
var notify = require( 'gulp-notify' );
var postcss = require( 'gulp-postcss' );
var autoprefixer = require( 'autoprefixer' );
var csscomb = require( 'gulp-csscomb' );
var mmq = require( 'gulp-merge-media-queries' );

// Delete a folder after archiving
function cleanFiles( cb ) {
	return del( './neumorphic', cb );
}

// Sass
function compileSass() {
	return gulp.src( './assets/sass/**/*.scss' )
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
	.pipe( cleanCss() )
	.pipe( rename({
		suffix: '.min'
	}) )
	.pipe( gulp.dest( './assets/css/' ) )
};

// Copy files that need to deploy
function copyFiles() {
	return gulp.src(
		[
			'**',
			'!.gitignore',
			'!node_modules',
			'!node_modules/**',
			'!vendor',
			'!vendor/**',
			'!release',
			'!release/**',
			'!gulpfile.js',
			'!composer.json',
			'!composer.lock',
			'!package.json',
			'!package-lock.json',
			'!phpcs.ruleset.xml'
		],
		{ base: './' }
	)
	.pipe( gulp.dest( './neumorphic' ) );
}

// Archive
function makeZip() {
	return gulp.src( 'neumorphic/**', { base: '.' })
	.pipe( chmod( 0o755, 0o755 ) )
	.pipe( zip( 'neumorphic.zip' ) )
		.pipe( gulp.dest( 'release' ) );
}

// Deploy
exports.deploy = gulp.series( compileSass, copyFiles, makeZip, cleanFiles );

//Default Task
exports.default = function () {
	compileSass();
	gulp.watch( './assets/sass/**/*.scss', compileSass );
};
