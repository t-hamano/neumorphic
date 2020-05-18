const gulp = require( 'gulp' );
const zip = require( 'gulp-zip' );
const chmod = require( 'gulp-chmod' );
const rename = require( 'gulp-rename' );
const cleanCss = require( 'gulp-clean-css' );
const del = require( 'del' );
const sass = require( 'gulp-sass' );
const plumber = require( 'gulp-plumber' );
const notify = require( 'gulp-notify' );
const postcss = require( 'gulp-postcss' );
const autoprefixer = require( 'autoprefixer' );
const csscomb = require( 'gulp-csscomb' );
const mmq = require( 'gulp-merge-media-queries' );

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
			'!cmmposer.json',
			'!cmmposer-lock.json',
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
