<?php
namespace Dis_Mus\Enqueue;

/**
 * Default setup routine
 *
 * @uses add_action()
 *
 * @return void
 */
function setup() {
  add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\load_frontend_scripts' );
}

/**
 * Load the frontend scripts
 *
 * @uses wp_register_script()
 * @uses wp_enqueue_script()
 *
 * @return void
 */
function load_frontend_scripts() {
  wp_register_script(
    'dis-mus-tab-div',
    DIS_MUS_URL . 'assets/js/vextab-div.js',
    array(),
    DIS_MUS_VERSION,
    true
  );

  wp_enqueue_script( 'dis-mus-tab-div' );
}
