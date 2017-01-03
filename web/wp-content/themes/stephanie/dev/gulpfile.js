var gulp = require('gulp'),
    concat = require("gulp-concat"),
    watch = require('gulp-watch'),
    sass = require('gulp-sass');

gulp.task('default', ['watch']);

gulp.task('watch', function () {
    watchSass({
        files: 'src/scss/stephanie.scss',
        name: 'stephanie.css',
        output: '../assets/css',
        nameMin: 'site.min.js'
    });
});

function watchSass(sassData) {
    gulp.src(sassData.files)
        .pipe(watch(sassData.files, function () {
            gulp.src(sassData.files)
                .pipe(sass())
                .pipe(concat(sassData.name))
                .pipe(gulp.dest(sassData.output));
        }));
}