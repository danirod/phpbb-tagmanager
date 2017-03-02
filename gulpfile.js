const gulp = require('gulp');
const clean = require('gulp-clean');
const zip = require('gulp-zip');
const package = require('./package.json');
const composer = require('./composer.json');

/**
 * Packs the extension into a proper extension directory structure. This is the
 * structure that phpBB expects: namespace / project-name. It doesn't contain
 * files that should not belong into a distribution pack.
 */
gulp.task('build', [], () => {
    return gulp.src([
        'README.md',
        'composer.json',
        'license.txt',
        'config/**/*',
        'event/**/*',
        'language/**/*',
        'migrations/**/*',
        'styles/**/*'
    ], { base: '.' }).pipe(gulp.dest(`dist/${composer.name}`))
});

/**
 * Creates Zip distribution for this extension.
 */
gulp.task('dist', ['build'], () => {
    return gulp.src('dist/**/*', { base: 'dist' })
            .pipe(zip(`${package.name}-v${package.version}.zip`))
            .pipe(gulp.dest('dist'));
});

/**
 * Cleans the project.
 */
gulp.task('clean', [], () => {
    return gulp.src('dist', { read: false }).pipe(clean());
});
