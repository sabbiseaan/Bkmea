<?php 

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if( function_exists('vc_set_as_theme') ){
	function wagon_vcSetAsTheme() {
		vc_set_as_theme();
	}
	add_action( 'vc_before_init', 'wagon_vcSetAsTheme' );
}else {
	wp_enqueue_style( 'sparkling-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css');
	return;
}

// Add Bootstrap support in VC
if(!( function_exists('wagon_custom_css_classes_for_vc_row_and_vc_xs_column') )){
	function wagon_custom_css_classes_for_vc_row_and_vc_xs_column( $class_string, $tag ) {
		if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
			$class_string = preg_replace( '/vc_col-xs-(\d{1,2})/', 'col-xs-$1', $class_string );
		}
		return $class_string; // Important: you should always return modified or original $class_string
	}
	add_filter( 'vc_shortcodes_css_class', 'wagon_custom_css_classes_for_vc_row_and_vc_xs_column', 10, 2 );
}
if(!( function_exists('wagon_custom_css_classes_for_vc_row_and_vc_column') )){
	function wagon_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
		if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
			$class_string = preg_replace( '/vc_col-md-(\d{1,2})/', 'col-md-$1', $class_string );
		}
		return $class_string; // Important: you should always return modified or original $class_string
	}
	add_filter( 'vc_shortcodes_css_class', 'wagon_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
}
if(!( function_exists('wagon_custom_css_classes_for_vc_row_and_vc_sm_column') )){
	function wagon_custom_css_classes_for_vc_row_and_vc_sm_column( $class_string, $tag ) {
		if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
			$class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'col-sm-$1', $class_string );
		}
		return $class_string; // Important: you should always return modified or original $class_string
	}
	add_filter( 'vc_shortcodes_css_class', 'wagon_custom_css_classes_for_vc_row_and_vc_sm_column', 10, 2 );
}
if(!( function_exists('wagon_custom_css_classes_for_vc_row_and_vc_lg_column') )){
	function wagon_custom_css_classes_for_vc_row_and_vc_lg_column( $class_string, $tag ) {
		if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
			$class_string = preg_replace( '/vc_col-lg-(\d{1,2})/', 'col-lg-$1', $class_string );
		}
		return $class_string; // Important: you should always return modified or original $class_string
	}
	add_filter( 'vc_shortcodes_css_class', 'wagon_custom_css_classes_for_vc_row_and_vc_lg_column', 10, 2 );
}

/**
 * Redirect page template if vc_row shortcode is found in the page.
 * This lets us use a dedicated page template for Visual Composer pages
 * without the need for on page checks, or custom page templates.
 * 
 * It's buyer-proof basically.
*/
if(!( function_exists('wagon_vc_page_template') )){
	function wagon_vc_page_template( $template ){
		global $post;

		if( is_archive() || is_404() )
			return $template;

		if(!( isset($post->post_content) ) || is_search())
			return $template;

		if( 'no' == get_option('foundry_vc_redirect_' . $post->post_type) )
			return $template;

		if( has_shortcode($post->post_content, 'vc_row') ){
			$new_template = locate_template( array( 'page_visual_composer.php' ) );
			if (!( '' == $new_template )){
				return $new_template;
			}
		}
		return $template;
	}
	add_filter( 'template_include', 'wagon_vc_page_template', 99 );
}



if(!( function_exists('wagon_icons_settings_field') )){
	function wagon_icons_settings_field( $settings, $value ) {

		$icons = $settings['value'];

		$output = '<a href="#" id="wagon-icon-toggle" class="button button-primary button-large">Show/Hide Icons</a><div class="wagon-icons"><div class="wagon-icons-wrapper">';
		foreach( $icons as $icon ){
			$active = ( $value == $icon) ? ' active' : '';
			$output .= '<i class="icon '. $icon . $active .'" data-icon-class="'. $icon .'"></i>';
		}
		$output .= '</div><input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput wagon-icon-value ' .
			esc_attr( $settings['param_name'] ) . ' ' .
			esc_attr( $settings['type'] ) . '_field" type="text" value="' . esc_attr( $value ) . '" />' . '</div>';

		return $output;
	}
	vc_add_shortcode_param( 'wagon_icons', 'wagon_icons_settings_field' );
}



/**
 * Add additional functions to certain blocks.
 * vc_map runs before custom post types and taxonomies are created, so this function is used
 * to add custom taxonomy selectors to VC blocks, a little annoying, but works perfectly.
 */
if(!( function_exists('wagon_vc_add_att') )){
	function wagon_vc_add_attr(){

        /**
         * Add client category selectors
         */
        $client_args = array(
            'orderby'                  => 'name',
            'hide_empty'               => 0,
            'hierarchical'             => 1,
            'taxonomy'                 => 'client_category'
        );
        $client_cats = get_categories( $client_args );
        $final_client_cats = array( 'Show all categories' => 'all' );

        if( is_array($client_cats) ){
            foreach( $client_cats as $cat ){
                $final_client_cats[$cat->name] = $cat->term_id;
            }
        }

        $attributes = array(
            'type' => 'dropdown',
            'heading' => "Show Specific client Category?",
            'param_name' => 'filter',
            'value' => $final_client_cats
        );
        vc_add_param('wagon_clients', $attributes);


    }
	add_action('init', 'wagon_vc_add_attr', 999);
}


/**
 * Page builder blocks below here
 * add you files here
 */

get_template_part('inc/plugin_file/custom_vc_blocks/vc_stories_post');
get_template_part('inc/plugin_file/custom_vc_blocks/vc_programs_table');