import gulp from 'gulp';
import changed from 'gulp-changed';
import es from 'event-stream';

export const copyTask = (config) => {
  gulp.task('copy', () => {
    return es.concat(config.copy.folders.map((folder) => {
      return gulp.src(folder.src)
        .pipe(changed(folder.dest))
        .pipe(gulp.dest(folder.dest));
    }));
  });
};
