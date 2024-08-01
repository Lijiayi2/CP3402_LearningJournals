const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// Compile SCSS into CSS
function style() {
    return gulp.src('src/scss/**/*.scss')  // Source of any .scss file
        .pipe(sass().on('error', sass.logError))  // Compile Sass into CSS
        .pipe(cleanCSS({ compatibility: 'ie8' })) // Minify the CSS
        .pipe(rename({
            suffix: '.min' // Add a .min suffix
        }))
        .pipe(gulp.dest('dist/css'));  // Output compiled CSS to destination
}

// Watch files
function watch() {
    gulp.watch('src/scss/**/*.scss', style); // Watch for changes and re-run 'style'
}

// Define complex tasks
const build = gulp.series(style, watch);

// Export tasks
exports.style = style;
exports.watch = watch;
exports.default = build;
