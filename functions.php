<?php 

function load_assets(){
    //font
    wp_enqueue_style("font","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i", array(), "1.0", "all");
    //css
    wp_enqueue_style( "jquerycss", get_theme_file_uri() . '/build/jquery.bxslider.css', array(), '1.0.2', 'all' );
    wp_enqueue_style( "maincss", get_theme_file_uri() . '/build/index.css', array(), '1.0.2', 'all' );
    wp_enqueue_style( "mainstylecss", get_theme_file_uri() . '/build/style-index.css', array(), '1.0.3', 'all' );
    //js
    wp_enqueue_script( "jquery-1", get_theme_file_uri() . '/js/lib/jquery/jquery-1.10.2.min.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "bxslider", get_theme_file_uri() . '/js/lib/jquery/jquery.bxslider.min.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "jquery_cycle", get_theme_file_uri() . '/js/lib/jquery/jquery.cycle2.min.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "jquery_cycle_swipe", get_theme_file_uri() . '/js/lib/jquery/jquery.cycle2.swipe.min.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "jquery_easing", get_theme_file_uri() . '/js/lib/jquery/jquery.easing-1.3.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "jquery_carousel", get_theme_file_uri() . '/js/lib/jquery/jquery.jcarousellite.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "jquery_mousewheel", get_theme_file_uri() . '/js/lib/jquery/jquery.mousewheel-3.1.12.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "noconflict", get_theme_file_uri() . '/js/lib/jquery/noconflict.js', array('jquery'), '1.02', true );
    
    wp_enqueue_script( "enquire", get_theme_file_uri() . '/js/lib/enquire.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "imagesloaded", get_theme_file_uri() . '/js/lib/imagesloaded.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "modernizr", get_theme_file_uri() . '/js/lib/modernizr.custom.min.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "selectivizr", get_theme_file_uri() . '/js/lib/selectivizr.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "matchMedia", get_theme_file_uri() . '/js/lib/matchMedia.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "matchMedia_min", get_theme_file_uri() . '/js/lib/matchMedia.addListener.js', array('jquery'), '1.02', true );

    wp_enqueue_script( "app", get_theme_file_uri() . '/js/app.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "ccard", get_theme_file_uri() . '/js/ccard.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "minicart", get_theme_file_uri() . '/js/minicart.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "slideshow", get_theme_file_uri() . '/js/slideshow.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "thuvien_common", get_theme_file_uri() . '/js/thuvien_common.js', array('jquery'), '1.02', true );

    wp_enqueue_script( "cookies", get_theme_file_uri() . '/js/mage/cookies.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "translate", get_theme_file_uri() . '/js/mage/translate.js', array('jquery'), '1.02', true );

    wp_enqueue_script( "prototype", get_theme_file_uri() . '/js/prototype/prototype.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "validation", get_theme_file_uri() . '/js/prototype/validation.js', array('jquery'), '1.02', true );

    wp_enqueue_script( "builder", get_theme_file_uri() . '/js/scriptaculous/builder.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "controls", get_theme_file_uri() . '/js/scriptaculous/controls.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "dragdrop", get_theme_file_uri() . '/js/scriptaculous/dragdrop.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "effects", get_theme_file_uri() . '/js/scriptaculous/effects.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "slider", get_theme_file_uri() . '/js/scriptaculous/slider.js', array('jquery'), '1.02', true );

    wp_enqueue_script( "form", get_theme_file_uri() . '/js/varien/form.js', array('jquery'), '1.02', true );
    wp_enqueue_script( "js", get_theme_file_uri() . '/js/varien/js.js', array('jquery'), '1.02', true );

}
add_action("wp_enqueue_scripts","load_assets");