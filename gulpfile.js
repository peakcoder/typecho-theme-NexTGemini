var gulp = require('gulp');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var minifycss = require('gulp-clean-css'); //require('gulp-minify-css');
var concat = require('gulp-concat');
var order = require("gulp-order");

gulp.task('mainCss', function() {
    gulp.src(['src/css/*.css'])
        //.pipe(concat('main.css'))
        //.pipe(gulp.dest('NextGemini/res/css'))
        .pipe(concat('main.min.css'))
        .pipe(minifycss())
        //.pipe(rename({
        //suffix: '.min'
        //}))
        .pipe(gulp.dest('NextGemini/res/css'))
});

gulp.task('copyImages', function() {
    gulp.src(['src/images/*.*'])
        .pipe(gulp.dest('NextGemini/res/img'))
});

gulp.task('mainScript', function() {
    gulp.src(['src/js/src/*.js', 'src/js/src/schemes/*.js'])
        .pipe(order([
            'motion.js', //ok
            'utils.js', //have modify
            'bootstrap.js', //ok
            'affix.js', //ok
            'schemes/*.js',
            'menutree.js',
            'backtop.js'
        ]))
        .pipe(concat('main.min.js'))
        //.pipe(gulp.dest('NextGemini/res/js'))
        .pipe(uglify())
        //.pipe(rename({
        //suffix: '.min'
        //}))
        .pipe(gulp.dest('NextGemini/res/js'))
});

gulp.task('copyFancybox', function() {
    gulp.src(['vendors/fancybox/dist/jquery.fancybox.min.js', 'vendors/fancybox/dist/jquery.fancybox.min.css'])
        .pipe(gulp.dest('NextGemini/res/vendor/fancybox'))
});

gulp.task('copyFastClick', function() {
    gulp.src(['vendors/fastclick/build/fastclick.min.js'])
        .pipe(gulp.dest('NextGemini/res/vendor/fastclick'))
});

gulp.task('copyFontCss', function() {
    gulp.src(['vendors/Font-Awesome/css/font-awesome.min.css'])
        .pipe(gulp.dest('NextGemini/res/vendor/font-awesome/css'))
});

gulp.task('copyFont', function() {
    gulp.src(['vendors/Font-Awesome/fonts/*.*'])
        .pipe(gulp.dest('NextGemini/res/vendor/font-awesome/fonts'))
});

gulp.task('copyJquery', function() {
    gulp.src(['vendors/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('NextGemini/res/vendor/jquery'))
});

gulp.task('copyLazyload', function() {
    gulp.src(['vendors/jquery_lazyload/jquery.lazyload.min.js'])
        .pipe(gulp.dest('NextGemini/res/vendor/jquery_lazyload'))
});

gulp.task('copyPrettify', function() {
    gulp.src(['vendors/Typecho-CodePrettify/lib/*.*'])
        .pipe(gulp.dest('NextGemini/res/vendor/prettify'))
});

gulp.task('copyVelocity', function() {
    gulp.src(['vendors/velocity/velocity.min.js', 'vendors/velocity/velocity.ui.min.js'])
        .pipe(gulp.dest('NextGemini/res/vendor/velocity'))
});

gulp.task('default', ['mainCss', 'copyImages', 'mainScript', 'copyFancybox',
    'copyFastClick', 'copyFontCss', 'copyFont', 'copyJquery', 'copyLazyload',
    'copyPrettify', 'copyVelocity'
]);