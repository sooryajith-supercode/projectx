// Variables for CSS and SCRIPTS
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');

// CSS TASK
function minifycss() {
  return gulp
    .src('./src/scss/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename('app.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./dist/css'));
}

// JS TASK
const jsFiles = ['./src/js/app.js'];
const jsDest = './dist/js/';

function minifyscripts() {
  return gulp
    .src(jsFiles, { allowEmpty: true }) // allowEmpty to prevent error if missing
    .pipe(sourcemaps.init())
    .pipe(concat('app.js'))
    .pipe(gulp.dest(jsDest))
    .pipe(rename('app.min.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(jsDest));
}

// WATCH TASK
function watchFiles() {
  gulp.watch('./src/scss/**/*.scss', minifycss);
  gulp.watch('./src/js/*.js', minifyscripts);
}

// DEFAULT TASK
const build = gulp.parallel(minifycss, minifyscripts, watchFiles);

exports.minifycss = minifycss;
exports.minifyscripts = minifyscripts;
exports.watch = watchFiles;
exports.default = build;