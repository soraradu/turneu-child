var gulp = require('gulp')
// var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

gulp.task('browserSync',function() {
	browserSync.init({
		proxy: 'http://localhost/Turneu/',
		notify: false
	})
})

gulp.task('sass', function () {
	return gulp.src('sass/**/*.sass')
	// .pipe(sass())
	// .pipe(gulp.dest('.'))
	.pipe(browserSync.reload({
		stream:true
	}))
})


gulp.task('watch', ['browserSync'], function(){
	// gulp.watch('sass/**/*.sass',['sass'])
	gulp.watch('**/*.sass',browserSync.reload)
	gulp.watch('**/*.css',browserSync.reload)
	gulp.watch('**/*.twig',browserSync.reload)
	gulp.watch('**/*.php', browserSync.reload)	
})



