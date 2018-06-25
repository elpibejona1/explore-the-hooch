var fileinclude = require('gulp-file-include'),
  gulp = require('gulp'),
  watch = require('gulp-watch');


gulp.task('default', function () {
    console.log("Hello from default gulp task.");
});

gulp.task('fileinclude', function() {
  gulp.src(['_html/**/*.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch('_includes/*.html', ['fileinclude']);
  gulp.watch('_images/**/*.svg', ['fileinclude']);
	gulp.watch('_html/**/*.html', ['fileinclude']);
});