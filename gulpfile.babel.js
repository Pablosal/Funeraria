import gulp from 'gulp';
import yargs from 'yargs';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import uglify from 'gulp-uglify';
import zip from 'gulp-zip';
const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: 'dist/assets/css/bundle.css',
    dest: 'pack/assets/css/bundle.css'
  },
  images: {
    src: 'Img/**/*,{jpg,jpeg,png,svg,gif}',
    dest: 'pack/assets/Img'
  },
  scripts: {
    src: 'dist/assets/js/bundle.js',
    dest: 'pack/assets/js/bundle.js'
  },
  others: {
    src: [
      'dist/assets/**/*',
      '!dist/assets/{images,js,css}',
      '!dist/assets/{images,js,css}/**/*'
    ],
    dest: 'pack/assets/**/*'
  },
  package: {
    src: [
      '**/*',
      '!.vscode',
      '!node_modules{,/**}',
      '!packaged{,**}',
      '!src{,**}',
      '!.babelrc',
      '!.gitignore',
      '!gulpfile.babel.js',
      '!package.json',
      '!yarn.lock'
    ],
    dest: 'packaged'
  }
};
export const styles = () => {
  return gulp
    .src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: 'ie8' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest));
};
export const images = () => {
  return gulp
    .src(paths.images.src)
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest(paths.images.dest));
};
export const copy = () => {
  return gulp.src(paths.others.src).pipe(paths.others.dest);
};
export const scripts = () => {
  gulp
    .src(paths.scripts.src)
    .pipe(gulpif(PRODUCTION, uglify))
    .pipe(gulp.dest(paths.scripts.dest));
};
export const clean = () => {
  return del(['dist']);
};
export const watch = () => {
  gulp.watch('', styles);
  gulp.watch(paths.images.src, images);
  gulp.watch(paths.others.src, copy);
};
export const dev = () => {
  gulp.series(clean, gulp.parallel(styles, scripts, images, copy), watch);
};
export const build = () => {
  gulp.series(clean, gulp.parallel(styles, scripts, images, copy));
};
export const bundle = gulp.series(build, compress);
export default dev;
export const compress = () => {
  return gulp
    .src(paths.package.src)
    .pipe(zip('funeraria.zip'))
    .pipe(gulp.dest(paths.package.dest));
};
//
