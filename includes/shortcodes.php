<?php
namespace Dis_Mus\Shortcodes;

/**
 * Default setup routine
 *
 * @uses add_action()
 *
 * @return void
 */
function setup() {
  add_action( 'dis_mus_init', __NAMESPACE__ . '\add_shortcodes' );
}

/**
 * Add the available shortcodes
 *
 * @uses add_shortcode()
 *
 * @return void
 */
function add_shortcodes() {
  add_shortcode( 'display-music', __NAMESPACE__ . '\dis_mus_shortcode' );
}

/**
 * Display the shortcode if there is content to display
 *
 * @uses esc_html()
 *
 * @param  array  $atts An array of user defined shortcode attributes
 *
 * @return string       A HTML string
 */
function dis_mus_shortcode( $atts ) {
  $atts = shortcode_atts( array(
    'vextab' => '',
  ), $atts, 'display-music' );

  if ( empty( $atts['vextab'] ) ) {
    return;
  }

  return sprintf(
    '<div class="vex-tabdiv">%1$s</div>', esc_html( $atts['vextab'] )
  );
}
