<?php
/**
 * understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Load functions to secure your WP install.
*/
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Visual Composer setting
 */
require get_template_directory() . '/inc/plugin_file/vc_init.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load custom WordPress gallery.
*/
require get_template_directory() . '/inc/bootstrap-wp-gallery.php';


/**
* Load WooCommerce functions.
*/
require get_template_directory() . '/inc/woocommerce.php';



add_filter('tiny_mce_before_init', 'tinymce_init');

function tinymce_init( $init ) {
    $init['extended_valid_elements'] .= ', span[style|id|nam|class|lang]';
    $init['verify_html'] = false;
    return $init;
}

add_filter('tiny_mce_before_init', 'tinymce_inita');

function tinymce_inita( $init ) {
    $init['extended_valid_elements'] .= ', a[style|id|nam|class|lang]';
    $init['verify_html'] = false;
    return $init;
}