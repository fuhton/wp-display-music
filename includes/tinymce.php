<?php
namespace Dis_Mus\TinyMCE;

/**
 * Default setup routine
 *
 * @uses add_action()
 * @uses add_filter()
 *
 * @return void
 */
function setup() {
  add_action( 'admin_head', __NAMESPACE__ . '\tinymce_i18n_strings' );
  add_filter( 'mce_buttons', __NAMESPACE__ . '\tinymce_register_button' );
  add_filter( 'mce_external_plugins', __NAMESPACE__ . '\tinymce_register_plugin' );
}

/**
 * Define a TinyMCE button
 *
 * @return array An array of TinyMCE buttons
 */
function tinymce_register_button( $buttons ) {
  $buttons[] = 'disMusShortcode';

  return $buttons;
};

/**
 * Include our TinyMCE plugin
 *
 * @param  array $plugins An array of TinyMCE plugins
 *
 * @return array          A modified array of TinyMCE plugins
 */
function tinymce_register_plugin( $plugins ) {
  // The value is a path to a JavaScript file containing a TinyMCE plugin.
  $plugins['disMusShortcode'] = sprintf( '%sassets/js/tinymce.js?ver=%s',
    DIS_MUS_URL,
    filemtime( DIS_MUS_PATH . '/assets/js/tinymce.js' )
  );

  return $plugins;
};

/**
 * Outputs internationalized text strings for the TinyMCE plugin.
 *
 * As we build out admin controls, we'll want to localize this properly using wp_localize_script().
 *
 * @uses apply_filters()
 * @uses esc_html__()
 * @uses esc_html_x()
 *
 * @return void
 */
function tinymce_i18n_strings() {
  $labels = array(
    'disMusFieldButtonTooltip' => esc_html__( 'Display Music', 'dis-mus'),
    'vexFieldDisplayTitle'     => esc_html__( 'VexTab', 'dis-mus' ),
    'vexFieldWindowTitle'      => esc_html_x( 'Add New VexTab', 'window title', 'dis-mus' ),
  );

  $labels = apply_filters( 'dis_mus_tinymce_labels', $labels );

  ?>
    <script>
      var disMusShortcodeTinyMCELabels = <?php echo json_encode( $labels ); ?>;
    </script>
  <?php
}
