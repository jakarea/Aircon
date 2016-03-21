var gulp = require('gulp'),
mainBowerFiles = require('main-bower-files'),
runSequence = require('run-sequence'),
gulpFilter = require('gulp-filter'),
less = require('gulp-less'),
sourcemaps = require('gulp-sourcemaps'),
concat = require('gulp-concat'),
uglify = require('gulp-uglify'),
minify = require('gulp-minify-css');


/**
 * Filters for bower main files
 */
var jsFilter = gulpFilter('**/*.js'),
cssFilter = gulpFilter('**/*.css'),
fontFilter = gulpFilter(['**/*.svg', '**/*.eot', '**/*.woff', '**/*.ttf']),
imgFilter = gulpFilter(['**/*.png', '**/*.gif', '**/*.jpg']);


/**
 * public folder structure
 * @type {{js: string, css: string, images: string, fonts: string,
root: string}}
 */
var public = {
js: 'public/assets/js',
css: 'public/assets/css',
images: 'public/assets/img',
fonts: 'public/assets/fonts',
root: 'public/',
build: 'public/assets/build'
};

var matcher = {
less: 'public/assets/less/*.less',
js: 'public/assets/js/*.js',
css: 'public/assets/css/*.css'
}


/**
 * Process all bower files
 * and concat them, move them
 */
gulp.task('bower', function(){
return gulp.src(mainBowerFiles())

.pipe(jsFilter)
.pipe(sourcemaps.init())
.pipe(uglify())
.pipe(concat('a.vendors.js'))
// .pipe(sourcemaps.write())
.pipe(gulp.dest(public.js))
.pipe(jsFilter.restore())

.pipe(cssFilter)
.pipe(minify())
// .pipe(sourcemaps.init())
.pipe(concat('a.vendors.css'))
// .pipe(sourcemaps.write())
.pipe(gulp.dest(public.css))
.pipe(cssFilter.restore())

.pipe(imgFilter)
.pipe(gulp.dest(public.images))
.pipe(imgFilter.restore())

.pipe(fontFilter)
.pipe(gulp.dest(public.fonts))
.pipe(fontFilter.restore());
});


/**
 * Compile all less files into css file
 * and move them to public folder
 */
gulp.task('less', function(){
return gulp.src(matcher.less)
.pipe(less())
.pipe(concat('app.css'))
.pipe(gulp.dest(public.css));
});


/**
 * move all js files to build folder
 */
gulp.task('js', function(){
return gulp.src(matcher.js)
// .pipe(uglify())
.pipe(concat('build.js')).pipe(gulp.dest(public.build));
});
/**
 * move all css files to build folder
 */
gulp.task('css', ['less'], function(){
return gulp.src(matcher.css)
.pipe(minify())
.pipe(concat('build.css')).pipe(gulp.dest(public.build));
});


/**
 * Watchers
 */
gulp.task('watch', function(){
gulp.watch([matcher.less, matcher.css], ['css']);
gulp.watch(matcher.js, ['js']);
});

/**
 * Initialize all the tasks
 */
gulp.task('initialize', function(){
runSequence('bower', ['js', 'css']);
});


/**
 * Default task
 */
gulp.task('default', ['initialize', 'watch']);