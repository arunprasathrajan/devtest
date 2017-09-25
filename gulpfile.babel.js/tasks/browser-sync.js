import gulp from 'gulp';
import browserSync from 'browser-sync';
import watchify from 'watchify';
import gulpUtil from 'gulp-util';
import { createBundlers, scriptsStream, applyEnv } from './scripts';

export const browserSyncTask = (config) => {
  gulp.task('browsersync', ['build:dev'], () => {
    browserSync({
      files: config.dest,
      notify: false,
      port: config.browserSync.port,
      proxy: config.browserSync.proxy,
      watchOptions: {
        debounceDelay: 1000,
      },
    });

    gulp.watch(config.dest).on('change', browserSync.reload);
    gulp.watch(config.styles.watch, ['styles:dev']);
    gulp.watch(config.images.watch, ['images']);

    const bundlers = createBundlers(config);

    bundlers.forEach(bundler => {
      const watchifyBundle = watchify(applyEnv(bundler.bundle, true));
      watchifyBundle.on('log', gulpUtil.log);
      const bundlerArr = [{ bundle: watchifyBundle, script: bundler.script }];
      scriptsStream(config, bundlerArr, true);
      watchifyBundle.on('update', scriptsStream.bind(null, config, bundlerArr, true, false));
    });
  });
};
