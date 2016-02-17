var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application.
 | This example demonstrates:
 |  *-> Compiling a sass file into a css file.
 |  *-> Copying a css file into the asset directory: resources/assets/css
 |      This is because Laravel refers to this directory globally.
 |  *-> Combining several types of css files into one, using .styles
 |  *-> Versioning css files so that each build will always have a deffirent name
 |      resulting in better debugging on browser refresh.
 |      the resulting files is saved to: public/build/css
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .copy('public/css/app.css', 'resources/assets/css/app.css')
        .scriptsIn('public/assets/js')              /*
                                                     * Place all JavaScript found in directory
                                                     *      --->>> public/assets/js
                                                     * into --->>> public/js/all.js
                                                     */
        .styles(['app.css', 'plain.css', 'example.css'])
                                                    /*
                                                     * Place all css filenames in array located in directory
                                                     *       --->>> resources/assets/css
                                                     * into  --->>> public/css/all.css
                                                     */
       .version('css/all.css');
});
