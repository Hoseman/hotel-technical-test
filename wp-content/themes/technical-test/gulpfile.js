const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('gulp-cssnano');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');


gulp.task("sass", function(done){
    return gulp.src('./src/stylesheets/*.scss')
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(cssnano())
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('./dist/stylesheets'));
    done();
});

// Image optimization
gulp.task("images", function() {
    return gulp.src('./src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img'));
});

// Javascript
gulp.task("javascript", function(done){
    return(
        gulp.src('./src/scripts/**/*.js')
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest("./dist/scripts"))
    );
    done();
});

// Watch Task
gulp.task('watch', function(){
    gulp.watch(
        ['./src/stylesheets/**/*.scss', './src/scripts/**/*.js'], gulp.series(['sass', 'javascript'])
        );
});

// Watch Task
gulp.task('watch', function() {
    gulp.watch(
        ['./src/stylesheets/**/*.scss', './src/scripts/**/*.js', './src/img/*'],
        gulp.series(['sass', 'javascript', 'images'])
    );
});