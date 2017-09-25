import gulp from 'gulp';
import del from 'del';

export const cleanTask = (config) => {
  gulp.task('clean', del.bind(null, config.dest));
};
