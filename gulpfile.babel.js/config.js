const src = 'resources';
const dest = 'public';

const config = { src, dest };

config.styles = {
  src: [`${src}/styles/main.scss`],
  watch: [
    `${src}/views/**/*.scss`,
    `${src}/styles/**/*.scss`,
  ],
  dest: `${dest}/styles`,
  cssnext: {
    features: { colorRgba: false },
    browsers: '> 1%',
    warnForDuplicates: false,
  },
  sass: {
    includePaths: 'node_modules',
  },
};

config.scripts = {
  paths: ['scripts/main.js'],
};

config.images = {
  src: `${src}/images/**/*`,
  watch: [`${src}/images/**/*`, `${src}/components/**/*`],
  dest: `${dest}/images`,
  imagemin: {
    progressive: true,
    interlaced: true,
    svgoPlugins: [{ cleanupIDs: false }],
  },
};

config.browserSync = {
  port: 9000,
  proxy: 'devtest.lvh.me',
};

export default config;
