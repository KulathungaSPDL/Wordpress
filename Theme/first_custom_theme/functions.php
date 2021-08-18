<?php

// Add stylesheet 
    function firstcustomtheme_register_style() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('firstcustomtheme-style', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
        wp_enqueue_style('firstcustomtheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), '5.0.0', 'all');
        wp_enqueue_style('firstcustomtheme-fontawesome', "https://use.fontawesome.com/releases/v5.15.3/css/all.css", array(), '5.15.3', 'all');
        // wp_enqueue_style('firstcustomtheme-googleapis', "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js", array(), '2.1.1', 'all');
        // wp_enqueue_style('firstcustomtheme-cloudflare', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js", array(), '3.1.1', 'all');
        // wp_enqueue_style('firstcustomtheme-gstatic', "https://fonts.gstatic.com", array(), '0.0', 'all');
        wp_enqueue_style('firstcustomtheme-googleapis1', "https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700&display=swap", array(), '0.0', 'all');
        wp_enqueue_style('firstcustomtheme-googleapis2', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap", array(), '0.0', 'all');
        wp_enqueue_style('firstcustomtheme-googleapis3', "https://fonts.googleapis.com/css2?family=Cardo:ital@1&display=swap", array(), '0.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'firstcustomtheme_register_style' );

    // Add script file
    function firstcustomtheme_register_script() {

        // wp_enqueue_script('firstcustomtheme-js', get_template_directory_uri() . "/assets/js/script.js", array(), true);
        wp_enqueue_script('firstcustomtheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js", array(), '5.0.0', true);
        wp_enqueue_script('firstcustomtheme-popperjs', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js", array(), '2.9.1', true);
        wp_enqueue_script('firstcustomtheme-bootstrapc', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js", array(), '5.0.0', true);

    }
    add_action('wp_enqueue_scripts', 'firstcustomtheme_register_script' );

    //theme support here
    function firstcustomtheme_theme_support() {
        // Add dynamic support title
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'firstcustomtheme_theme_support');


    //Add side menu
    function firstcustomtheme_menus() {

        $locations = array (
            'primary' => "Desktop Primary Top bar"
        );
        register_nav_menus($locations);
    }
    add_action('init', 'firstcustomtheme_menus');
    ?>

