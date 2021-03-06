var gulp = require('gulp'),
imagemin = require('gulp-imagemin'),
del = require('del'),
usemin = require('gulp-usemin'),
rev = require('gulp-rev'),
cssnano = require('gulp-cssnano'),
uglify = require('gulp-uglify');

gulp.task('deleteDist', function(){
   return del('./dist'); 
});

gulp.task('optimizeImg', ['deleteDist'], function(){
   return gulp.src('./app/assets/images/**/*')
    .pipe(imagemin({
       progressive: true,
       interlaced: true,
       multipass: true
   }))
    .pipe(gulp.dest('./dist/assets/images'));
});

gulp.task('usemin', ['deleteDist'], function(){
   return gulp.src('./app/*.php')
    .pipe(usemin({
       css: [function(){return rev()}, function(){return cssnano()}],
       js: [function(){return rev()}, function(){return uglify()}]
   }))
    .pipe(gulp.dest('./dist'));
});

gulp.task('build', ['deleteDist', 'optimizeImg', 'usemin']);