<?php

function load_scripts() {
    wp_enqueue_style('style',get_template_directory_uri()."/style.css", false , '1.1','all');
    wp_enqueue_script('style',get_template_directory_uri()."/js/main.js",array(),'1.0',true);


}

add_action('wp_enqueue_scripts' ,'load_scripts');

function config(){

    register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu'
        'wp_devs_footer_menu' => 'Main Menu'
    ));

}

add_action('after_setup_theme','comfig',0);

function wpdevs_sidebar(){
    register_sidebar(
        array(
            'name' => 'Block Sidebar';
            'id' => 'sidebar-blog';
            'description' => 'This is the blog sidebar.',
            'before widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>', 
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    register_sidebar(
        array(
            'name' => 'Service 1';
            'id' => 'services-1';
            'description' => 'first service area',
            'before widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>', 
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    register_sidebar(
        array(
            'name' => 'Service 2';
            'id' => 'services-2';
            'description' => 'second service area',
            'before widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>', 
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    register_sidebar(
        array(
            'name' => 'Service 3';
            'id' => 'services-3';
            'description' => 'third service area',
            'before widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>', 
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
    );

    add_action('widgets_init','wpdevs_sidebars');

}

?>