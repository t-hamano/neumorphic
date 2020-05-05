const gulp = require( 'gulp' );
const gulpZip = require( 'gulp-zip' );
const gulpChmod = require( 'gulp-chmod' );
const del = require( 'del' );
const gulpSass = require( 'gulp-sass' );
const plumber = require( 'gulp-plumber' );
const notify = require( 'gulp-notify' );
const postcss = require( 'gulp-postcss' );
const autoprefixer = require( 'autoprefixer' );
const csscomb = require( 'gulp-csscomb' );
const mmq = require( 'gulp-merge-media-queries' );

// Delete a folder after archiving
function cleanFiles( cb ) {
	return del( './neomorphic', cb );
}

// Sass
function sass() {
	return gulp.src( './assets/sass/**/*.scss' )
	.pipe( plumber( {
		errorHandler: notify.onError( 'Error: <%= error.message %>' )
	} ) )
	.pipe( gulpSass( {
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
};

// Copy files that need to deploy
function copyFiles() {
	return gulp.src(
		[
			'**',
			'!.gitignore',
			'!node_modules',
			'!node_modules/**',
			'!release',
			'!release/**',
			'!gulpfile.js',
			'!package.json',
			'!package-lock.json',
			'!phpcs.ruleset.xml'
		],
		{ base: './' }
	)
	.pipe( gulp.dest( './neomorphic' ) );
}

// Archive
function zip() {
	return gulp.src( 'neomorphic/**', { base: '.' })
	.pipe( gulpChmod( 0o755, 0o755 ) )
	.pipe( gulpZip( 'neomorphic.zip' ) )
		.pipe( gulp.dest( 'release' ) );
}

// Deploy
exports.deploy = gulp.series( copyFiles, zip, cleanFiles );

//Default Task
exports.default = function () {
	sass();
	gulp.watch( './assets/sass/**/*.scss', sass );
};
