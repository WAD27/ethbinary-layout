// continuar con la configuracion de js.min y uglify
var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()
var useref = require('gulp-useref')

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
  // return gulp.src('scss/**/*.scss')//accept any file in scss folder
  .pipe(sass())
  .pipe(gulp.dest('css/'))
  .pipe(browserSync.reload({
    stream: true
  }))
})

gulp.task('browserSync', function() {
  browserSync.init({
    // server: { //for html as index
    //   basedir: 'app/'
    // },
    proxy: 'http://localhost/ethbinary',// for php as index
    options: {
      reloadDelay: 150
    },
  })
})

// gulp.task('useref', function() {
//   return gulp.src('*.php')
//   .pipe(useref())
//   .pipe(gulp.dest('./js/dist/'))
// })

gulp.task('watch', ['browserSync','sass'/*,'useref'*/]/*order*/, function() {
  gulp.watch('scss/**/*.scss',['sass'])
  gulp.watch('js/**/*.js', browserSync.reload)
  gulp.watch('sections/**/*.php', browserSync.reload)
  gulp.watch('*.php', browserSync.reload)//for php as index
})
