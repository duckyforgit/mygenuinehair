 
 /* jshint esversion: 8 */
 
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
//import named from 'vinyl-named';
import browserSync from "browser-sync";
import zip from "gulp-zip";
import info from "./package.json";
import replace from "gulp-replace";
//import wpPot from "gulp-wp-pot";
import purgecss from "gulp-purgecss";
//import purgecssWordpress from 'purgecss-with-wordpress';
import concat from 'gulp-concat';
 // you should write display: flex by final spec instead of display: box css line 22363:3
 // changed from dartSass to node-sass because of deprecation
const sass = require("gulp-sass")(require("node-sass"));
//
// IMPORTANT install popper as npm install @popperjs/core --save not popper.js
// 
// is either defined as prod or undefined and not prod
const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: [
    'src/scss/bundle.scss', 
    'src/scss/editor-styles.scss', 
    'src/scss/block-editor.scss', 
    'src/scss/admin.scss' ],
    dist: 'dist/css'
  },
  scripts: {
  //  src: ['src/js/bundle.js', 'src/js/bootstrap/bootstrap.bundle.js', 'src/js/skip-link-focus-fix.js', './node_modules/isotope-layout/js/isotope.js'],
  // src: [ './node_modules/isotope-layout/js/isotope.js', 'src/js/skip-link-focus-fix.js', 'src/js/bundle.js'],
    //src:  ['src/js/bundle.js','src/js/my-action-script.js'],
    src:  [
      'src/js/bundle.js', 
     // 'src/js/admin.js',     
     // 'src/js/customize-preview.js'
    ],
    dist: 'dist/js'
  }, 
    webfonts: {
    src: './node_modules/@fortawesome/fontawesome-free/webfonts/*',
    dist: 'dist/webfonts'
  } 
};
process.traceDeprecation = true;
// Configuration file for fontawesome


const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://localhost/genuine/" // put your local website link here
  });
  done();
};
export const reload = done => {
  server.reload();
  done();
};
//export const clean = () => {
  //return del(['dist']);
//} // returns a promise so can use the shortcut
export const clean = () => del(['dist']);

// initialize sourcemaps plugin
// pipe plugins to map
// create source map file before writing to destination
// note: all plugins must be compatible with sourcemaps to work
export const styles = () => {
  return src(paths.styles.src)
  	.pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie10'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    //.pipe(gulpif(PRODUCTION, purgecss))
    .pipe(dest(paths.styles.dist))
    .pipe(server.stream());
};
export const images = () => {
  return src('src/img/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest('dist/img'));
};

export const copy = () => {
  return src(['src/**/*','!src/{js,scss}','!src/{js,scss}/**/*' ])
  //return src(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*',  'img/**/*' ])
    .pipe(dest('dist'));
};

// bundle.scss is importing from node_modules but could be copied and imported from within src folder
export const copydir = () => {
  return src('./node_modules/bootstrap/scss/bootstrap.scss')
  .pipe(dest('src/scss/components'));
};

export const webfonts = () => {
  return src(paths.webfonts.src)  
  .pipe(dest(paths.webfonts.dist));
};
 
// webpack will minify if production only; use sourcemaps in development
export const scripts = () => {
  //return src(['src/js/bundle.js'])
  return src(paths.scripts.src)
  .pipe(named())
  .pipe(webpack({
    module: {
      rules: [
        {
          test: /\.js$/,
           exclude: {
          and: [/node_modules/],
          },

          use: {
            loader: 'babel-loader',
            options: {
              presets: [
             [ 
              '@babel/preset-env',
              {
              modules: 'auto'
              }
              ]
            ]
            }
          }         
        }          
      ]
    },
    
    output: {
      filename: '[name].js'
    },
    externals: {
      jquery: 'jQuery'
    },

    devtool: !PRODUCTION ? 'inline-source-map' : false,
    mode: PRODUCTION ? 'production' : 'development'
  }))
  //.pipe(dest('dist/js'))
  .pipe( concat( 'bundle.js' ) )
  .pipe(dest(paths.scripts.dist));
};
/*"css-purge": "purgecss --css assets/css/starter.css --content index.html --output assets/css/",*/ 
export const purge = () => {
  return src('dist/css/bundle.css')
  .pipe(purgecss({    
      content: ['**/*.php'],
      css: ['**/*.css'],
      safelist:  { 
       // purgecssWordpress.safelist
        standard: [/red$/],
        deep: [/blue$/],
        greedy: [/yellow$/] 
      }
      }))
    .pipe(dest('build/css'));
};

export const compress = () => {
return src([
    "**/*",
    "!node_modules{,/**}",
    "!bundled{,/**}",
    "!src{,/**}",
    "!.babelrc",
    "!.gitignore",
    "!gulpfile.babel.js",
    "!package.json",
    "!package-lock.json",
  ])
  .pipe(gulpif(
    file => file.relative.split(".").pop() !== "zip",
    replace("_themename", 'info.name')
  ))
  .pipe(zip(`${info.name}.zip`))
  .pipe(dest('bundled'));
};


export const pot = () => {
  return src("**/*.php")
  .pipe(
      wpPot({
        domain: "_themename",
        package: info.name
      })
    )
  .pipe(dest(`languages/${info.name}.pot`));
};

export const replace_filenames = () => {
  return src(paths.rename.src)
    .pipe(
      rename(path => {
        path.basename = path.basename.replace("_themename", info.name);
      })
    )
    .pipe(dest("./"));
};

export const delete_replaced_filenames = () => {
  return del(
    paths.rename.src.map(filename => filename.replace("_themename", info.name))
  );
};

export const watchForChanges = () => {
  //watch('src/scss/**/*.scss', styles);
  watch('src/scss/**/*.scss', series(styles, reload));
  watch('src/img/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'], series(copy, reload));
  watch('src/js/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
}; 



// import the functions from gulp to delete dist folder and copy images and styles and watch for changes
// series runs in order and parallel runs at once 

export const dev = series(
  clean, parallel(styles, images, copy, scripts), serve, watchForChanges);
//export const update = series(clean, parallel(styles, scripts), serve, watchForChanges);
//export const build = series(clean, parallel(styles, images, copy, scripts), pot, compress);

export const build = series(clean, parallel(styles, images, copy, scripts), compress);

export const bundle = series(
  build,
  replace_filenames,
  compress,
  delete_replaced_filenames
);
export default dev;

// gulp run build  -   runs gulp build --prod 