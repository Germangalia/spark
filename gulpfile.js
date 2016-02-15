var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Less
=======
 | for your Laravel application. By default, we are compiling the Sass
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
<<<<<<< HEAD
    mix.sass('app.scss')
       .browserify('app.js')
       .version(['css/app.css', 'js/app.js']);
=======
    mix.sass('app.scss');
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
});
