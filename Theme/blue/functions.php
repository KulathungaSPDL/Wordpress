<?php

// add customiser
require_once('templates/helpers/customizer.php');
// add widgets location
require_once('templates/helpers/widget-area.php');
// add service-box-widgets
require_once('templates/helpers/widget/service_box_widgets.php');
// add team-member-widget
require_once('templates/helpers/widget/team_member_widgets.php');

if (!function_exists('blue_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function blue_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('blue', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Enable support for title-tag.
         */
        add_theme_support('title-tag');

        /**
         * Enable support for serach form
         */
        add_theme_support('html5', array('search-form'));

        /**
         * Enable support for custom logo
         */
        add_theme_support('custom-logo');

        /**
         * Enable support for widgets
         */
        add_theme_support('widgets');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'blue'),
            'secondary' => __('Secondary Menu', 'blue'),
            'footer' => __('Footer Menu', 'blue')
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }

    function blue_register_style() {

        // register style
        // $version = wp_get_theme()->get('Version');
        wp_enqueue_style('blue-boostrap', get_template_directory_uri() . "/bootstrap/bootstrap.css", array(), '5.0', 'all');
        // wp_enqueue_style('blue-style', get_template_directory_uri() . "/css/templatemo-xtra-blog.css", array(), $version, 'all');
        wp_enqueue_style('blue-misc', get_template_directory_uri() . "/css/misc.css", array(), '5.0', 'all');
        wp_enqueue_style('blue-blue-scheme', get_template_directory_uri() . "/css/blue-scheme.css", array(), '5.0', 'all');
        wp_enqueue_style('blue-fa1', "http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali", array(), '5.0.0', 'all');
        wp_enqueue_style('blue-fa2', "http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600", array(), '5.0.0', 'all');
        
        // register script
        wp_enqueue_script('blue-bootstrap', get_template_directory_uri() . "/js/jquery-1.10.2.min.js", array(), '5.0.0', 'all');
        wp_enqueue_script('blue_jquary', get_template_directory_uri() . "/js/jquery-migrate-1.2.1.min.js", array(), '5.0.0', 'all');

        wp_enqueue_script('blue_jquary-1', get_template_directory_uri() . "/js/min/plugins.min.js", array(), '5.0.0', true);
        wp_enqueue_script('blue_jquary-2', get_template_directory_uri() . "/js/min/medigo-custom.min.js", array(), '5.0.0', true);
        wp_enqueue_script('blue_my_quary', get_template_directory_uri() . "/js/quary.js", array(), '5.0.0', true);

    }
    add_action('wp_enqueue_scripts', 'blue_register_style');

    //add li tag to the style
    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

    //add anchor tag to the style
    function add_link_atts($atts) {
        $atts['class'] = '';
        return $atts;
    }
    add_filter('nav_menu_link_attributes','add_link_atts');
 
    // Add widgets
    function wpdocs_register_widgets() {
        register_widget( 'My_Widget' );
    }
    add_action( 'widgets_init', 'wpdocs_register_widgets' );


    // insert image to vidgets
    function aw_include_script() {
 
        if ( ! did_action( 'wp_enqueue_media' ) ) {
            wp_enqueue_media();
        }
      
        wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/js/quary.js', array('jquery'), null, false );
    }
    add_action( 'admin_enqueue_scripts', 'aw_include_script' );

    

endif; // blue_setup
add_action('after_setup_theme', 'blue_setup');


