import gulp from 'gulp';

export const defaultTask = () => {
  gulp.task('default', ['build:prod']);
};
