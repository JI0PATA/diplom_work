<?php
/*
Plugin Name: AJAX Pages
Description: AJAX Pages
Author: Konstantin Larin
Version: 1.0
Author URI: https://larin.dev/
*/

add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );

function my_custom_script_load(){
    wp_enqueue_script( 'my-custom-script', plugin_dir_url( __FILE__ ) . '/inc/main.js', array( 'jquery' ) );
    wp_enqueue_style( 'my-custom-style', plugin_dir_url( __FILE__ ) . '/inc/main.css');
}