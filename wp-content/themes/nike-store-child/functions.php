<?php
function nike_child_enqueue_styles() {
    // Load Parent Theme Styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load Child Theme Styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'nike_child_enqueue_styles');


function nike_store_customize_woocommerce() {
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar'); 
}
add_action('wp', 'nike_store_customize_woocommerce');
?>
