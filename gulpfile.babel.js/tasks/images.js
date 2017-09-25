import gulp from 'gulp';
import gulpIf from 'gulp-if';
import cache from 'gulp-cache';
import imagemin from 'gulp-imagemin';
import gulpUtil from 'gulp-util';

export const imagesTask = (config) => {
  gulp.task('images', () => {
    return gulp.src(config.images.src)
      .pipe(gulpIf(gulpIf.isFile, cache(imagemin(config.images.imagemin))
      .on('error', (err) => {
        gulpUtil.log(err);
        this.end();
      })))
      .pipe(gulp.dest(config.images.dest));
  });
};
