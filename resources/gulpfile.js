var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
const minify = require('gulp-minify');
var runSequence = require('run-sequence');
var csso = require('gulp-csso');
var del = require('del');

var SASS = 'sass';
var CSS = './../css';
var JS = './../fonts';
var IMG = './../images';
var JS = './../js';

// Set the browser that you want to support
/*const AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];*/




var sassOptions = {
    includePaths: ['./node_modules/breakpoint-sass/stylesheets']
};

// tasks
gulp.task('sass', done => {
    gulp.src(SASS + '/chahmirian.scss')
        .pipe(sourcemaps.init())
        .pipe(sass.sync(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer({}))
        .pipe(csso())
        .pipe(concat('app.min.css'))
        .pipe(sourcemaps.write('./../css'))
        .pipe(gulp.dest(CSS));
    done();
});

gulp.task('js', done => {
    gulp.src('js/src/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('js/dist'))
    done();
});

gulp.task('imagemin', done => {
    gulp.src(IMG + '/*')
        .pipe(imagemin())
        .pipe(gulp.dest(IMG));
    done();
});

// build
gulp.task('build', gulp.series('sass', 'js', 'imagemin'));

// watch
gulp.task('watch', function() {
    return gulp.watch(SASS + '/**/*.scss', gulp.series(gulp.series('sass', 'js', 'imagemin')));
});

// default
gulp.task('default', gulp.series('build', 'watch'));