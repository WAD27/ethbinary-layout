var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
  // return gulp.src('scss/**/*.scss')//accept any file in scss folder
  .pipe(sass())
  .pipe(gulp.dest('css/'))
  .pipe(browserSync.reload({
    stream: true
  }))
})

gulp.task('watch', ['browserSync','sass']/*order*/, function() {
  gulp.watch('scss/**/*.scss',['sass'])
  gulp.watch('sections/**/*.php', browserSync.reload); 
  gulp.watch('js/**/*.js', browserSync.reload);
})

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      basedir: '/'
    }
  })
})
