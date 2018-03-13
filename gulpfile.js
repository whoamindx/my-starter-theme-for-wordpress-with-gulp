const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const cleanCSS = require('gulp-clean-css');
const babili = require('gulp-babili');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');


const autoprefixerConfigs = {
    browsers: ['last 2 versions'],
    cascade: false
}
const files_js = [
			'src/js/jquery-3.2.1.min.js',
			'src/js/owlcarousel/owl.carousel.min.js',
			'src/js/owlcarousel/owl.navigation.min.js',
			'src/js/modernizr.custom.min.js',
			'src/js/jquery.dlmenu.min.js',
			'src/js/scrollReveal.min.js',
			'src/js/app.js'
		];
/* * * * * * * * * * * * * * * * * * * * * * DEV * * * * * * * * * * * * * * * * * * * * * */
gulp.task('sass', () => {
	return gulp.src('src/sass/style.scss')
	.pipe(sourcemaps.init())
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerConfigs))
	.pipe(sourcemaps.write())
	.pipe(concat('main.min.css'))
	.pipe(gulp.dest('dist/css'));
});


gulp.task('js', () => {
	return gulp.src(files_js)
	.pipe(concat('scripts.min.js'))
	.pipe(concat('app.min.js'))
	.pipe(gulp.dest('dist/js'))
});


gulp.task('default', ['sass','js'], () => {
	gulp.watch('src/sass/style.scss', ['sass']);
	gulp.watch('src/js/app.js', ['js']);
});



/* * * * * * * * * * * * * * * * * * * * * * PROD * * * * * * * * * * * * * * * * * * * * * */
gulp.task('sass_prod', () => {
	return gulp.src('src/sass/style.scss')
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerConfigs))
	.pipe(cleanCSS())
	.pipe(concat('main.min.css'))
	.pipe(gulp.dest('dist/css'));
});


gulp.task('js_prod', () => {
	return gulp.src(files_js)
	.pipe(concat('app.min.js'))
	.pipe(babili())
	.pipe(gulp.dest('dist/js'))
});


gulp.task('prod', ['sass_prod','js_prod']);