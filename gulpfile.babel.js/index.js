import gulp from 'gulp';
import runSequence from 'run-sequence';
import { browserSyncTask as browserSync } from './tasks/browser-sync';
import { buildTask as build } from './tasks/build';
import { imagesTask as images } from './tasks/images';
import { stylesTask as styles } from './tasks/styles';
import { scriptsTask as scripts } from './tasks/scripts';
import config from './config';

build(config);
images(config);
styles(config);
scripts(config);
browserSync(config);

gulp.task('serve', ['browsersync']);

gulp.task('default', ['build:prod']);

gulp.task('build:dev', (callback) => {
  runSequence(['images', 'scripts:dev', 'styles:dev'], callback);
});

gulp.task('build:prod', (callback) => {
  runSequence(['images', 'scripts:prod', 'styles:prod'], callback);
});
