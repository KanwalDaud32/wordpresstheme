<?php 
/* 
* Theme Function File
*/
function htmltowp_setup() {
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
    add_image-size('home-featured',600,400,array('center','center'));
    add_image-size('single-post',580,272,array('center','center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus( array(
        'primary' => __('Primary Menu','htmltowp')
    ));

};
add_action('after-setup_theme','wordpresstheme_setup');

function htmltowp_scripts(){
    wp_enqueu_style('style',get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('htmltowp_browser',get_temlate_directory_uri().'/assets/js/browser.min.js');
    wp_enqueue_script('htmltowp_browser',get_temlate_directory_uri().'/assets/js/breakpoints.min.js');
    wp_enqueue_script('htmltowp_browser',get_temlate_directory_uri().'/assets/js/util.js');
    wp_enqueue_script('htmltowp_browser',get_temlate_directory_uri().'/assets/js/main.js');
    


}
add_action('wp_enqueue_scripts', 'htmltowp_scripts');
function htmltowp_widget_init(){
    register_sidebar( array(
        'name' =>__('Primary Sidebar','htmltowp');
        'id' => 'main_sidebar',
        'description' => 'Main_Sidebar on Right Side',
        'before-widget' => '<section id ="%1$s" class= "box %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<header><h3 class"widget-title">',
        'after-title' => '<h3></header>',

    ));
    register_sidebar( array(
        'name' =>__('Home Banner','htmltowp');
        'id' => 'home-banner',
        'description' => 'Banner Area on Homepage',
        'before-widget' => '<section id ="%1$s" class= "widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h3 class"widget-title">',
        'after-title' => '<h3>',

    ));
    register_sidebar( array(
        'name' =>__('Home Services','htmltowp');
        'id' => 'home-services',
        'description' => 'Services Area on Homepage',
        'before-widget' => '<section id ="%1$s" class= "widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h3 class"widget-title">',
        'after-title' => '<h3>',

    ));
    register_sidebar( array(
        'name' =>__('Footer widget-1','htmltowp');
        'id' => 'footer-1',
        'before-widget' => '<section id ="%1$s" class= "widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<header><h2 class"widget-title">',
        'after-title' => '<h2></header>',

    ));
    register_sidebar( array(
        'name' =>__('Footer widget-2','htmltowp');
        'id' => 'footer-2',
        'before-widget' => '<section id ="%1$s" class= "widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<header><h2 class"widget-title">',
        'after-title' => '<h2></header>',

    ));
    register_sidebar( array(
        'name' =>__('Footer widget-3','htmltowp');
        'id' => 'footer-3',
        'before-widget' => '<section id ="%1$s" class= "widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<header><h2 class"widget-title">',
        'after-title' => '<h2></header>',

    ));

}
add_action( 'widgets_init','htmltowp_widget_init');

//Custom post type
require get_template_directory().'/inc/portfolio.php';