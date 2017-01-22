const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .webpack('app.js');

    mix.scripts(['libraries/jquery-3.1.1.js', 'libraries/password-score.js', 'libraries/password-score-options.js', 'libraries/password-strength-meter.js', 'password-strength-checker.js'], 'public/js/password-score-combined.js');
});