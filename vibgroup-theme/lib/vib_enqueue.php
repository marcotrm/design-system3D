<?php

    function add_theme_scripts() {
        // js enqueue
        wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js' ,array('jquery') );
        wp_enqueue_script('splide-js', get_stylesheet_directory_uri() . '/assets/js/splide.min.js', array('jquery'), null, true);
	    
	    // css enqueue
        wp_enqueue_style('design-system-css', get_stylesheet_directory_uri() . '/assets/css/design-system.css', array(), null, 'all');
        wp_enqueue_style('splide-css', get_stylesheet_directory_uri() . '/assets/css/splide.min.css', array(), null, 'all');
        //wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . '/assets/css/custom-fonts.css', array(), null, 'all');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');