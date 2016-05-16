// Include Gulp
var gulp = require('gulp');

// Include Plugins
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var connect = require('gulp-connect-php');
var sync = require('browser-sync');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var babelify = require('babelify');

// Error Handling
function handleError(err) {
  console.log(err.toString());
  this.emit('end');
}

// ========  Tasks  ========

gulp.task('default', ['serve', 'watch']);

gulp.task('serve', function() {
  connect.server({
    base: './public'
  });
  sync.init({
    proxy: 'localhost:8000',
    open: false,
    notify: false
  });
});

gulp.task('watch', function() {
  gulp.watch('resources/assets/js/**/*.js', ['scripts']);
  gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
  gulp.watch('resources/views/**/*.blade.php').on('change', sync.reload);
});

gulp.task('scripts', function() {
  return browserify('resources/assets/js/app.js', { debug: true })
  // .transform(babelify)
  .bundle()
  .on('error', handleError)
  .pipe(source('app.min.js'))
  .pipe(gulp.dest('public/js'))
  .pipe(sync.reload({stream: true}));
});

gulp.task('sass', function() {
  return gulp.src('resources/assets/sass/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass({ outputStyle: 'compact' }))
  .on('error', handleError)
  .pipe(autoprefixer('last 2 versions', '> 5%', 'Firefox ESR'))
  .pipe(rename({suffix: '.min'}))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('public/css'))
  .pipe(sync.reload({stream: true}));
});
