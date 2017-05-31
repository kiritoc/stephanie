var gulp = require('gulp'),
    concat = require("gulp-concat"),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    rename = require('gulp-rename'),
    minify = require('gulp-minify');

gulp.task('default', ['watch']);

gulp.task('watch', function () {
    watchSass({
        files: 'src/scss/stephanie.scss',
        name: 'stephanie.css',
        output: '../assets/css'
    });

    watchJs({
        files: '../assets/js/main.js',
        output: '../assets/js'
    });
});

function watchSass(sassData) {
    gulp.src(sassData.files)
        .pipe(watch(sassData.files, function () {
            gulp.src(sassData.files)
                .pipe(sass())
                .pipe(concat(sassData.name))
                .pipe(sourcemaps.init())
                .pipe(cleanCSS())
                .pipe(sourcemaps.write())
                .pipe(rename({suffix: '.min'}))
                .pipe(gulp.dest(sassData.output));
        }));
}

function watchJs(jsData) {
    gulp.src(jsData.files)
        .pipe(watch(jsData.files, function () {
            gulp.src(jsData.files)
                .pipe(minify({
                    ext:{
                        min:'.min.js'
                    }}))
                .pipe(gulp.dest(jsData.output));
        }));
}