var elixir = require('laravel-elixir');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

// FABULOUS gulpfile.js at https://laracasts.com/discuss/channels/elixir/broken-mix-after-elixir-update


elixir.config.sourcemaps = false;
elixir.config.cssOutput = 'public/css';


elixir(function(mix) {

    /*
    |--------------------------------------------------------------------------
    | Copy
    |--------------------------------------------------------------------------
    */
    // no copying going on!


    /*
    |--------------------------------------------------------------------------
    | Mix
    |--------------------------------------------------------------------------
    */
    // bootstrap: specify the font path in variables.less (scroll down!)
    // font-awesome: specify the font path in variables.less

    // LESS
    mix.less([
        "resources/assets/bootstrap/v335/less/bootstrap.less",
        "resources/assets/font-awesome/v430/less/font-awesome.less",
    ], "resources/assets/southlasalle.min.css");

    // CSS
    mix.styles([
        "southlasalle.min.css",
        "southlasalle/v135/css/plugins/owl-carousel/owl.carousel.css",
        "southlasalle/v135/css/plugins/owl-carousel/owl.theme.css",
        "southlasalle/v135/css/plugins/owl-carousel/owl.transitions.css",
        "southlasalle/v135/css/plugins/animate.css",
        "southlasalle/v135/css/plugins/background.css",
        "southlasalle/v135/css/plugins/magnific-popup.css",
    ], "public/css/southlasalle.min.css");


    // JS
    mix.scripts([
        "southlasalle/v135/js/plugins/retina/retina.js",
    ], "public/js/retina.min.js");


    // following order specified at https://github.com/twbs/bootstrap/blob/master/dist/js/npm.js
    mix.scripts([
        "jquery/v1111/jquery-1.11.3.min.js",
        "bootstrap/v335/js/transition.js",
        "bootstrap/v335/js/alert.js",
        "bootstrap/v335/js/button.js",
        "bootstrap/v335/js/carousel.js",
        "bootstrap/v335/js/collapse.js",
        "bootstrap/v335/js/dropdown.js",
        "bootstrap/v335/js/modal.js",
        "bootstrap/v335/js/tooltip.js",
        "bootstrap/v335/js/popover.js",
        "bootstrap/v335/js/scrollspy.js",
        "bootstrap/v335/js/tab.js",
        "bootstrap/v335/js/affix.js",
        "southlasalle/v135/js/plugins/jquery.easing.min.js",
        "southlasalle/v135/js/plugins/classie.js",
        "southlasalle/v135/js/plugins/cbpAnimatedHeader.js",
        "southlasalle/v135/js/plugins/owl-carousel/owl.carousel.js",
        "southlasalle/v135/js/plugins/jquery.magnific-popup/jquery.magnific-popup.js",
        "southlasalle/v135/js/plugins/background/core.js",
        "southlasalle/v135/js/plugins/background/transition.js",
        "southlasalle/v135/js/plugins/background/background.js",
        "southlasalle/v135/js/plugins/jquery.mixitup.js",
        "southlasalle/v135/js/plugins/wow/wow.js",
        "southlasalle/v135/js/plugins/jqBootstrapValidation.js",
    ], "public/js/southlasalle.min.js");



    /*--------------------------------------------------------------------------
     | Version
     |--------------------------------------------------------------------------
     */

    /*
     mix.version([
     "css/vitality.min.css",
     "css/bootstrap_customize.min.css",
     "css/font-awesome_customize.min.css",
     "css/plugins.min.css",
     //"js/all.js"
     ]);
     */

});

