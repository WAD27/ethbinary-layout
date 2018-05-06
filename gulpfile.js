var gulp = require('gulp')

var sass = require('gulp-sass')

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
  // return gulp.src('scss/**/*.scss')//accept any file in scss folder
  .pipe(sass())
  .pipe(gulp.dest('css/'))
})
