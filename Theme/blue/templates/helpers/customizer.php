<?php
// Theme Name: bloue

// Wp_Customizer_Control

function fn_customizer_setting($wp_customizer)
{

    // hero section start

    // add customizer setting
    // include new section
    $wp_customizer->add_section('header', array(
        'title' => 'Main Banner Setting',
        'priority' => 70
    ));

    // change main banner image
    // allow us to add capability
    $wp_customizer->add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));
    // main banner image control
    // allwo add customiser setting
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label' => 'Header Image', 'Daily',
        'description' => 'Change Main Banner Image',
        'section' => 'header'
    )));

    // main banner head keyword
    // allow us to add capability
    $wp_customizer->add_setting('header_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Choose the Optimal Workspace for Your Business'
    ));
    // main banner head keyword control
    // allwo add customiser setting
    $wp_customizer->add_control('header_text_control', array(
        'label' => 'Header Text',
        'description' => 'Change Header text',
        'section' => 'header',
        'settings' => 'header_text_field'
    ));

    // main banner paragraph
    // allow us to add capability
    $wp_customizer->add_setting('header_para1_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'We asked six entrepreneurs with drastically different office strategies for their advice on'
    ));
    // main banner paragaph keyword
    // allwo add customiser setting
    $wp_customizer->add_control('header_para1_field', array(
        'label' => 'Header First Paragraph',
        'description' => 'Change First paragraph text here',
        'section' => 'header',
        'settings' => 'header_para1_field'
    ));

    // main banner paragraph
    // allow us to add capability
    $wp_customizer->add_setting('header_para2_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'choosing a workspace.'
    ));
    // main banner paragaph keyword
    // allwo add customiser setting
    $wp_customizer->add_control('header_para2_field', array(
        'label' => 'Header Second Paragraph',
        'description' => 'Change Second paragraph text here',
        'section' => 'header',
        'settings' => 'header_para2_field'
    ));

    // hero section end

    // blog section start

    // add customizer setting
    // include new section
    $wp_customizer->add_section('blogPosts', array(
        'title' => 'Home Blog Setting',
        'priority' => 70
    ));

    // change main banner image
    // allow us to add capability
    $wp_customizer->add_setting('blog_background_image', array(
        'capability' => 'edit_theme_options'
    ));
    // main banner image control
    // allwo add customiser setting
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'blog_background_image', array(
        'label' => 'Blog Background Image',
        'description' => 'Change blog section background image in Home page',
        'section' => 'blogPosts'
    )));


    // blog section topic
    // allow us to add capability
    $wp_customizer->add_setting('Blog_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Recent from our blog'
    ));
    // blog section topic
    // allwo add customiser setting
    $wp_customizer->add_control('Blog_text_field', array(
        'label' => 'Home page Blog section topic',
        'description' => 'Change Blog section topic',
        'section' => 'blogPosts',
        'settings' => 'Blog_text_field'
    ));

    // blog section content
    // allow us to add capability
    $wp_customizer->add_setting('Blog_content_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Everything you need to create a professional website.'
    ));
    // blog section content
    // allwo add customiser setting
    $wp_customizer->add_control('Blog_content_text_field', array(
        'label' => 'Home page Blog content section',
        'description' => 'Change Blog content section',
        'section' => 'blogPosts',
        'settings' => 'Blog_content_text_field'
    ));



    // add customizer setting
    // include new section
    $wp_customizer->add_section('our-team', array(
        'title' => 'Home Team Member Setting',
        'priority' => 70
    ));
    // team memeber section topic
    // allow us to add capability
    $wp_customizer->add_setting('Team_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Meet our happy staff'
    ));
    // blog section topic
    // allwo add customiser setting
    $wp_customizer->add_control('Team_text_field', array(
        'label' => 'Home page Team Memeber section topic',
        'description' => 'Change Team member section topic',
        'section' => 'our-team',
        'settings' => 'Team_text_field'
    ));

    // team section content
    // allow us to add capability
    $wp_customizer->add_setting('Team_content_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Everything you need to create a professional website.'
    ));
    // blog section content
    // allwo add customiser setting
    $wp_customizer->add_control('Team_content_text_field', array(
        'label' => 'Home page Tea,m member content section',
        'description' => 'Change Team Member content section',
        'section' => 'our-team',
        'settings' => 'Team_content_text_field'
    ));




     // add customizer setting
    // include new section
    $wp_customizer->add_section('site-footer', array(
        'title' => 'Footer Setting',
        'priority' => 70
    ));
    // team memeber section topic
    // allow us to add capability
    $wp_customizer->add_setting('Footer_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Copyright &copy; 2084 Company Name | Design: templatemo'
    ));
    // blog section topic
    // allwo add customiser setting
    $wp_customizer->add_control('Footer_text_field', array(
        'label' => 'Footger Section text change',
        'description' => 'This can change footer words',
        'section' => 'site-footer',
        'settings' => 'Footer_text_field'
    ));
}
add_action('customize_register', 'fn_customizer_setting');
