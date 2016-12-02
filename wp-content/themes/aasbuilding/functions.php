<?php
  function aasbuilding_script_enqueue(){
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
  }
add_action( 'wp_enqueue_scripts', 'aasbuilding_script_enqueue');

function aasbuilding_theme_setup(){
  add_theme_support('menus');
  register_nav_menu( 'primary', 'hamburger menu' );
  register_nav_menu( 'sticky', 'sticky menu' );
  register_nav_menu( 'footer', 'footer menu' );
}
add_action( 'init', 'aasbuilding_theme_setup');
 ?>
