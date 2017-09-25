import gulp from 'gulp';
import runSequence from 'run-sequence';

export const buildTask = () => {
  gulp.task('build:dev', (callback) => {
    runSequence('clean', ['copy', 'images'], callback);
  });

  gulp.task('build:prod', (callback) => {
    runSequence('clean', ['copy', 'images'], 'rev', callback);
  });
};
