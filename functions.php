<?php
add_action( 'wp_enqueue_scripts', 'diva_style' );
add_action( 'wp_enqueue_scripts', 'diva_scripts' );

function diva_style() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
function diva_scripts() {

  wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/scripts.js', array('jquery'), 'null', true );
}
function my_scripts_method()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery-ajax', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
  wp_enqueue_script('jquery-ajax');
}

add_action('wp_enqueue_scripts', 'my_scripts_method');
?>
