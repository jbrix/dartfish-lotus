<?php
/*
Plugin Name: jBrix WP Functions
Plugin URI: http://www.jbrix.co.kr/
Description: 제이브릭스 커스텀 플러그인 모음입니다
Version: 1.1
Author: 제이브릭스
Author URI: http://www.jbrix.co.kr/
*/


function custom_addon() {
    wp_register_style( 'custom-css',  plugin_dir_url( __FILE__ ) . 'custom.css' );
    wp_enqueue_style( 'custom-css' );
}
add_action( 'wp_enqueue_scripts', 'custom_addon' );




?>