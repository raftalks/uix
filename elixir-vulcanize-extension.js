/**
 * Created by raf on 4/25/16.
 */
var gulp = require('gulp');
var Elixir = require('laravel-elixir');
var vulcanize = require('gulp-vulcanize');

var Task = Elixir.Task;

Elixir.extend('vulcanize', function(src, dest)
{
    new Task('vulcanize', function()
    {
        return gulp.src(src)
            .pipe(vulcanize({
                stripComments: true,
                inlineCss: true,
                inlineScripts: true
            }))
            .pipe(gulp.dest(dest));
    });
});