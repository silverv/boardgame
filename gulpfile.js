var gulp = require('gulp');
var sass = require('gulp-sass');
sass.compiler = require('node-sass');
const { watch } = require('gulp');


gulp.task('copy', copy);
function copy() {
    return gulp.src('./src/index.html')
        .pipe(gulp.dest('./dist/'));
}
function sassFunction() {
    return gulp.src('./src/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/css'));
}
gulp.task('sass', sassFunction);

exports.default = function () {
    // Or a composed task
    watch(['src/html/*.html'], gulp.series(copy));
    watch(['src/scss/*.scss'], gulp.series(sassFunction));
};