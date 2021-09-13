<?php
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Right Sidebar',
            'id' => 'right-sidebar',
            'before-widget' => '',
            'after-widget' => '',
            'before-title' => '<h5 class="widget-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'service Box First Row',
            'id' => 'service-b1r',
            'before-widget' => '',
            'after-widget' => '',
            'before-title' => '<h5 class="widget-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'service Box Second Row',
            'id' => 'service-b2r',
            'before-widget' => '',
            'after-widget' => '',
            'before-title' => '<h5 class="widget-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Team Member',
            'id' => 'team-member',
            'before-widget' => '',
            'after-widget' => '',
            'before-title' => '<h5 class="widget-title">',
            'after_title' => '</h5>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');
