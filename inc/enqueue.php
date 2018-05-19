<?php

function fahr_enqueue() {


  wp_register_style('fahr_icons' , 'https://fonts.googleapis.com/icon?family=Material+Icons' );
  wp_register_style('ft_oswald' , 'https://fonts.googleapis.com/css?family=Oswald:400,700' );

  wp_enqueue_style('fahr_icons');
  wp_enqueue_style('ft_oswald');


  wp_register_script('fahr_jqueryscroll', get_template_directory_uri() . '/assets/js/jquery.slimscroll.min.js', array(), false , true );
  wp_register_script('fahr_aos', get_template_directory_uri() . '/assets/js/aos.js', array(), false , true );
  wp_register_script('fahr_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false , true );
  wp_register_script('fahr_main', get_template_directory_uri() . '/assets/js/main.js', array(), false , true);

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('fahr_jqueryscroll');
  wp_enqueue_script('fahr_aos');
  wp_enqueue_script('fahr_bootstrap');
  wp_enqueue_script('fahr_main');

}
