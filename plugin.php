<?php
/*
Plugin Name:	Slick Slider Oxy
Description:	Custom plugin to enqueue Slick Slider resources
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'slick_enqueuer' );

function slick_enqueuer() {

	//CSS enqueue from directory
	wp_enqueue_style( 'SlickSlider', plugin_dir_url( __FILE__ ) . 'assets/css/slick.css' );
	wp_enqueue_style( 'SlickSliderTheme', plugin_dir_url( __FILE__ ) . 'assets/css/slick-theme.css' );

	//JS enqueue from directory
	wp_enqueue_script( 'SlickSliderScriptMin', plugin_dir_url( __FILE__ ) . 'assets/js/slick.min.js', '', '', true );	
}
