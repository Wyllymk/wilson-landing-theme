const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const browserSync = require("browser-sync").create();
const del = require("del");

// Paths
const paths = {
  styles: {
    src: "assets/scss/**/*.scss",
    main: "assets/scss/style.scss",
    dest: "assets/dist",
  },
  scripts: {
    src: "assets/js/**/*.js",
    dest: "assets/dist",
  },
};

// Clean dist folder
function clean() {
  return del(["assets/dist"]);
}

// Compile SCSS to CSS
function styles() {
  return gulp
    .src(paths.styles.main)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

// Minify JavaScript
function scripts() {
  return gulp
    .src(paths.scripts.src)
    .pipe(sourcemaps.init())
    .pipe(concat("main.js"))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

// Watch files
function watch() {
  browserSync.init({
    proxy: "http://localhost:8888", // Change to your local WordPress URL
    notify: false,
  });

  gulp.watch(paths.styles.src, styles);
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch("*.php").on("change", browserSync.reload);
}

// Build task
const build = gulp.series(clean, gulp.parallel(styles, scripts));

// Default task
exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.build = build;
exports.default = build;
