<?php
function pet_data(){
    wp_enqueue_style('pet_adoption_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','pet_data');
function pagetitle(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','pagetitle');
?>