const gulp = require( 'gulp' );
// const uglify = require( 'gulp-uglify' );
const sass = require( 'gulp-sass' );

/**
 * Copy the necessary files from node_modules to our own directories
 */
gulp.task( 'copyDependencies', function(){
    // Font Awesome 5.x
    gulp.src( 'node_modules/@fortawesome/fontawesome-free/css/all.min.css' )
        .pipe( gulp.dest( 'assets/css' ) );
    gulp.src( 'node_modules/@fortawesome/fontawesome-free/webfonts/*' )
        .pipe( gulp.dest( 'assets/webfonts' ) );

    // Normalize.css
    gulp.src( 'node_modules/normalize.css/normalize.css' )
        .pipe( gulp.dest( 'assets/css' ) );

    // jQuery (needed for Bootstrap)
    gulp.src( 'node_modules/jquery/dist/jquery.min.js' )
        .pipe( gulp.dest( 'assets/js' ) );

    // Popper.js (needed for Bootstrap)
    gulp.src( 'node_modules/popper.js/dist/popper.min.js' )
        .pipe( gulp.dest( 'assets/js' ) );

    // Bootstrap 4.x
    gulp.src( 'node_modules/bootstrap/dist/css/bootstrap.min.css' )
        .pipe( gulp.dest( 'assets/css' ) );
    gulp.src( 'node_modules/bootstrap/dist/js/bootstrap.min.js' )
        .pipe( gulp.dest( 'assets/js' ) );
} );

/**
 * Compile Sass files to CSS files
 * This is used for production as the CSS will be minified/compressed
 */
gulp.task( 'sass', function() {
    gulp.src( 'assets/sass/main.scss' )
        .pipe( sass( {outputStyle: 'compressed'} ).on( 'error', sass.logError ) )
        .pipe( gulp.dest( 'assets/css' ) );
} );

/**
 * Compile Sass files to CSS files
 * This is used for development as the CSS will not be minified/compressed,
 * which is easier for debugging
 */
gulp.task( 'sass-dev', function() {
    gulp.src( 'assets/sass/main.scss' )
        .pipe( sass( { outputStyle: 'expanded', indentWidth: 4 } ).on( 'error', sass.logError ) )
        .pipe( gulp.dest( 'assets/css' ) );
} );

/**
 * Watch if there are any changes made to the CSS or JS files
 */
gulp.task( 'watch', function() {
    gulp.watch( 'assets/sass/**/*.scss', ['sass-dev'] );
} );

/**
 * Compile files for testing and debugging
 */
gulp.task( 'development', function() {
    console.log( 'TODO' );
} );

/**
 * Compile files for porduction
 */
gulp.task( 'production', function() {
    console.log( 'TODO' );
} );