<?php 
    // Add stylesheet 
    function dinushathirdtheam_register_style() {

        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('dinushathirdtheam-bootstrasp', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(), '5.1.0', 'all');
        wp_enqueue_style('dinushathirdtheam-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
    }
    add_action('wp_enqueue_scripts', 'dinushathirdtheam_register_style' );

    // Add script file
    function dinushathirdtheam_register_script() {

        wp_enqueue_script('dinushathirdtheam-jquery', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js", array(), '5.1.0', true);
        wp_enqueue_script('dinushathirdtheam-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js", array(), '2.9.3', true);
        wp_enqueue_script('dinushathirdtheam-bootstrapcdn', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js", array(), '5.1.0', true);
    }
    add_action('wp_enqueue_scripts', 'dinushathirdtheam_register_script' );

    //theme support here
    function dinushathirdtheam_theme_support() {
        // Add dynamic support title
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'dinushathirdtheam_theme_support');

    //add menu
    function dinushathirdtheam_menus() {

        $locations = array (
            'top-menu' => "Top Menu Location",
            'mobile-menu' => "Mobile Menu Location"
        );
        register_nav_menus($locations);
    }
    add_action('init', 'dinushathirdtheam_menus');


    // custom image sizes
    add_image_size( 'blog-large', 800, 400, false );
    add_image_size( 'blog-small', 300, 200, true );

    //add sidebar
    function dinushathirdtheam_register_sidebar () {
        // page sidebar
        register_sidebar( 
            array (
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
         );

         // blog sidebar
         register_sidebar( 
            array (
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
         );

    }
    add_action('widgets_init','dinushathirdtheam_register_sidebar');


?>