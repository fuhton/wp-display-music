<?php
namespace Dis_Mus\Setup;

/**
 * Default setup routine
 *
 * @uses add_action()
 * @uses do_action()
 *
 * @return void
 */
function setup() {
  add_action( 'init', __NAMESPACE__ . '\init' );

  do_action( 'dis_mus_loaded' );
}

/**
 * Initializes the plugin and fires an action other plugins can hook into.
 *
 * @uses do_action()
 *
 * @return void
 */
function init() {  require_once DIS_MUS_INC . 'enqueue.php';
  require_once DIS_MUS_INC . 'shortcodes.php';
  require_once DIS_MUS_INC . 'tinymce.php';

  \Dis_Mus\Enqueue\setup();
  \Dis_Mus\Shortcodes\setup();
  \Dis_Mus\TinyMCE\setup();

  do_action( 'dis_mus_init' );
}
