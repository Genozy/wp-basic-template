<?php

function genozy_custom_header_and_background() {


  add_theme_support( 'custom-header', apply_filters( 'genozy_custom_header_args', array(
    'default-text-color'     => '#888888',
    'width'                  => 1200,
    'height'                 => 280,
    'flex-height'            => true,
    'wp-head-callback'       => 'genozy_header_style',
  ) ) );
}
add_action( 'after_setup_theme', 'genozy_custom_header_and_background' );

if (!function_exists('genozy_header_style')):
  function genozy_header_style() {
    if ( display_header_text() ) {
  		return;
  	}
  }
endif;

function genozy_customize_register( $wp_customize ) {


}


add_action( 'customize_register', 'genozy_customize_register', 11 );
