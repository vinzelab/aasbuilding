<?php
  function aasbuilding_script_enqueue(){
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
  }
add_action( 'wp_enqueue_scripts', 'aasbuilding_script_enqueue');
 ?>
