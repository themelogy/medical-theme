var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/medical';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

//    mix.sass('bootstrap.scss', cssPath + '/bootstrap.min.css')
//       .sass('main.scss', cssPath + '/main.min.css');
//
//    mix.version([
//        'css/all.min.css'
//    ], themePath);

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css')
        .sass('main.scss', 'resources/assets/css/main.min.css');

    mix.copy('resources/assets', 'assets')
        .copy('resources/assets/vendor/flag-icon-css/flags', 'assets/flags');

    mix.styles([
        'bootstrap.min.css',
        'main.min.css',
        'animations.css',
        'fonts.css',
        '../vendor/layerslider/css/layerslider.css',
        '../vendor/flag-icon-css/css/flag-icon.min.css'
    ], 'resources/assets/css/all.min.css');

    mix.scripts([
        'main.js'
    ], 'resources/assets/js/main.min.js');

    mix.version([
        'css/all.min.css'
    ], 'assets');

    mix.stylistPublish();

});