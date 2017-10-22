let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
   
/** themes/vcms-general */
mix.sass('resources/vcms-themes/vcms-general/assets/sass/components/editor-bar.scss', 'public/vcms-themes/vcms-general/css/components');
mix.sass('resources/vcms-themes/vcms-general/assets/sass/skins/default.scss', 'public/vcms-themes/vcms-general/css/skins');

/** themes/vcms-editor */
mix.sass('resources/vcms-themes/vcms-editor/assets/sass/vcms-editor.scss', 'public/vcms-themes/vcms-editor/css');
mix.sass('resources/vcms-themes/vcms-editor/assets/sass/skins/default.scss', 'public/vcms-themes/vcms-editor/css/skins');
mix.sass('resources/vcms-themes/vcms-editor/assets/sass/pages/loginpage.scss', 'public/vcms-themes/vcms-editor/css/pages');