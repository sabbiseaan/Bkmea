<?php 




/**
 * The welcome box Shortcode
 */
// function sbr_welcomebox_shortcode( $atts, $content = null ) {
// 	extract( 
// 		shortcode_atts( 
// 			array(
// 				'sbr_title'			=>'',
// 				'sbr_title_shadow'	=> '',
// 				'table_list_title'	=>'',
// 				'vid_url' 		=> ''
// 			), $atts 
// 		) 
// 	);
	
// 	//$side_img[] = wp_get_attachment_image_src($welcome_img, "large");
// 		$output = '
// 			<div class="row welcome_block">
// 			    <div class="col-sm-8">
// 			        <div class="heading heading-h3 heading-w-subtitle heading-icon heading-special">
// 			            <h3 class="special-title">'.$sbr_title.'</h3>
// 			            <div class="special-subtitle">'.$sbr_title_shadow.'</div>
// 			        </div>
// 			    </div>
// 			    <div class="col-xs-12 col-sm-6">
// 			        <div class="divider-space space-25x"></div>
// 			        '.$content.'
// 			        <div class="divider-space space-20x"></div>
// 			    </div>
// 			<div class="col-xs-12 col-sm-6 ">
// 				<div class="wel_vid"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="'.$vid_url.'"></iframe></div></div>
// 			</div></div>
// 	    ';	
// 	return $output;
// }
// add_shortcode( 'sbr_welcomebox', 'sbr_welcomebox_shortcode' );

// /**
//  * The VC welcome_box
//  */
// function sbr_welcomebox_shortcode_vc() {
// 	vc_map( 
// 		array(
// 			"icon" => 'wagon-vc-block',
// 			"name" => __("Welcome Block", 'nurealamsabbir'),
// 			"base" => "sbr_welcomebox",
// 			"category" => __('AuthLab Block', 'nurealamsabbir'),
// 			'description' => __('Create your programs table beautiful way', 'nurealamsabbir'),
// 			"params" => array(
// 				array(
// 					"type" => "textarea",
// 					"heading" => __("Welcome Title", 'nurealamsabbir'),
// 					"param_name" => "sbr_title",
// 				),
// 				array(
// 					"type" => "textfield",
// 					"heading" => __("Shadow Title", 'nurealamsabbir'),
// 					"param_name" => "sbr_title_shadow",
// 				),
// 				array(
// 					"type" => "textfield",
// 					"heading" => __("Video Url", 'nurealamsabbir'),
// 					"param_name" => "vid_url",
// 				),
// 				array(
// 					"type" => "textarea_html",
// 					"heading" => __("Welcome Text", 'nurealamsabbir'),
// 					"param_name" => "content",
// 				)
// 			)
// 		) 
// 	);
// }
// add_action( 'vc_before_init', 'sbr_welcomebox_shortcode_vc' );















/**
 * The About Me Shortcode
 */
// function sbr_about_me_shortcode( $atts, $content = null ) {
// 	extract( 
// 		shortcode_atts( 
// 			array(
// 				'sbr_title'			=>'',
// 				'sbr_title_shadow'	=> '',
// 				'table_list_title'	=>'',
// 				'welcome_img' 		=> ''
// 			), $atts 
// 		) 
// 	);
	
// 	$side_img[] = wp_get_attachment_image_src($welcome_img, "large");
// 		$output = '
// 			<div class="row">
// 				<div class="col-sm-8">
// 				    <div class="heading heading-h3 heading-w-subtitle heading-icon heading-special">
// 				        <h3 class="special-title">'.$sbr_title.'</h3>
// 				        <div class="special-subtitle">'.$sbr_title_shadow.'</div>
// 				    </div>
// 				</div>
// 			</div>
// 			<div class="divider-space space-25x"></div>
// 			<div class="row">
// 			    <div class="col-md-6 col-sm-6">
// 			        <div class="center"><img alt="" class="circle" src="'.$side_img[0][0].'"></div>
// 			    </div>
// 			    <div class="col-md-6 col-sm-6">
// 			        '.$content.'
// 			    </div><!--/ .col-sm-6-->
// 			</div><!--/ .row-->
// 	    ';	
// 	return $output;
// }
// add_shortcode( 'sbr_about_me', 'sbr_about_me_shortcode' );

// /**
//  * The VC welcome_box
//  */
// function sbr_about_me_shortcode_vc() {
// 	vc_map( 
// 		array(
// 			"icon" => 'wagon-vc-block',
// 			"name" => __("About Me Block", 'nurealamsabbir'),
// 			"base" => "sbr_about_me",
// 			"category" => __('AuthLab Block', 'nurealamsabbir'),
// 			'description' => __('', 'nurealamsabbir'),
// 			"params" => array(
// 				array(
// 					"type" => "textarea",
// 					"heading" => __("Welcome Title", 'nurealamsabbir'),
// 					"param_name" => "sbr_title",
// 				),
// 				array(
// 					"type" => "textfield",
// 					"heading" => __("Shadow Title", 'nurealamsabbir'),
// 					"param_name" => "sbr_title_shadow",
// 				),
// 				array(
// 					"type" => "attach_image",
// 					"heading" => __("Profile Picture", 'nurealamsabbir'),
// 					"param_name" => "welcome_img",
// 					"value" => '',
// 				),
// 				array(
// 					"type" => "textarea_html",
// 					"heading" => __("About Me Content", 'nurealamsabbir'),
// 					"param_name" => "content",
// 				)
// 			)
// 		) 
// 	);
// }
// add_action( 'vc_before_init', 'sbr_about_me_shortcode_vc' );











/**
 * The VC Image over text
 */

function image_overtext_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'text_block_image'	=>'',
				'left_right'		=> '',
				'etraclass'			=> ''
			), $atts 
		) 
	);


	
		$shortimg[] = wp_get_attachment_image_src($text_block_image, "large");
		
		$output = '
			<figure class="info_context '. $etraclass.'">
				<div class="ic_img_wrp '. $left_right.'">
					<img src="'.$shortimg[0][0] .'" class="img-responsive" />
				</div>
				<figcaption class="ic_text_wrp">'.$content.'</figcaption>
			</figure>
	    ';	
	return $output;
}
add_shortcode( 'image_overtext', 'image_overtext_shortcode' );


function image_overtext_shortcode_vcs() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Image over text", 'nurealamsabbir'),
			"base" => "image_overtext",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Create your block with image', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "attach_image",
					"heading" => __("Post image", 'nurealamsabbir'),
					"param_name" => "text_block_image",
					"admin_label" => true,
					"value" => '',
				),
				array(
					"type"        => "dropdown",
					"heading"     => __("Image Position"),
					"param_name"  => "left_right",
					"admin_label" => true,
					"value"       => array(
						'No Image'   => 'default',
						'Left'   => 'left',
						'Right'   => 'right',
						'Top'   => 'top',
						'Bottom'   => 'Bottom'
					),
					"std"         => $defaults['left_right'],
					"description" => __("The description")
				),
				// array(
				// 	"type" => "textarea_raw_html",
				// 	"heading" => __("Welcome Title", 'nurealamsabbir'),
				// 	"param_name" => "sbr_title",
				// ),
				// array(
				// 	"type" => "textfield",
				// 	"heading" => __("Shadow Title", 'nurealamsabbir'),
				// 	"param_name" => "sbr_title_shadow",
				// ),
				// array(
				// 	"type" => "attach_image",
				// 	"heading" => __("Profile Picture", 'nurealamsabbir'),
				// 	"param_name" => "welcome_img",
				// 	"value" => '',
				// ),
				
				array(
					"type" => "textarea_html",
					"heading" => __("Content", 'nurealamsabbir'),
					"admin_label" => true,
					"param_name" => "content"
				),
				array(
					"type"        => "textfield",
					"heading"     => __("Extra Class"),
					"param_name"  => "etraclass",
					"value"			=> ''
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'image_overtext_shortcode_vcs' );




/**
 * The Shortcode Latest Story
 */
function sbr_latest_news_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'posts_per_page'	=>'1',
				'sbr_title'			=> '',
				'sbr_title_shadow' 	=>''
			), $atts 
		) 
	);
	$args = array(
		//Type & Status Parameters
	    'posts_per_page'   => $posts_per_page,
		'post_type'   => 'latest_news',
		'post_status' => 'any',
	);
	
	$latest_news = new WP_Query( $args );
	ob_start();
		?> 
		<ul class="list-unstyled lst_news_list">
			<?php while ( $latest_news->have_posts() ) : $latest_news->the_post(); ?>
				<li class="lst_news_item">
					<h3 class="title mg_0"><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
					<div><span class="date"><?php echo get_the_date('M j, Y'); ?></span></div>
					<div class="lst_news_exrp"><?php the_excerpt();	 ?></div>
				</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'sbr_latest_news', 'sbr_latest_news_shortcode' );

/**
 * The VC Functions
 */
function sbr_latest_news_shortcode_vc() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Get Latest News", 'nurealamsabbir'),
			"base" => "sbr_latest_news",
			"category" => __('AuthLab Post Block', 'nurealamsabbir'),
			'description' => __('Pull all stories post', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textarea",
					"heading" => __("Welcome Title", 'nurealamsabbir'),
					"param_name" => "sbr_title",
				),
				array(
					"type" => "textfield",
					"heading" => __("Shadow For Title", 'nurealamsabbir'),
					"param_name" => "sbr_title_shadow",
				),
				array(
					"type" => "textfield",
					"heading" => __("Show How Many Post will show?", 'nurealamsabbir'),
					"param_name" => "posts_per_page",
					"value" => '1'
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'sbr_latest_news_shortcode_vc' );

				
				
				
				



/**
 * The Shortcode selected publications
 */
function sbr_publiction_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'posts_per_page'	=>'1',
				'sbr_title'			=> '',
				'sbr_title_shadow' 	=>''
			), $atts 
		) 
	);
	$args = array(
		//Type & Status Parameters
	    'posts_per_page'   => $posts_per_page,
		'post_type'   => 'publication',
		'post_status' => 'any',
	);
	
	$publications = new WP_Query( $args );
	ob_start();?> 
		<div class="paper_cut">
			<?php if ( $publications->have_posts() ) : while ( $publications->have_posts() ) : $publications->the_post(); ?>
				<div class="pub-item with-icon">
				    <div class="elem-wrapper">
				        <i class="oli oli-bookmark"></i>
				    </div>
				    <div class="content-wrapper">
				        <h3 class="title mb_0"><?php the_title(); ?></h3>
				        <div class="slc_des">
					        <div class="authr">
					        	<?php if(get_field('researchers_name')):?>
				                    <?php the_field('researchers_name');?>
				                <?php endif;?>
					        </div>
					        <div class="citation">
					        	Publication year:
	    	                    <?php if(get_field('publication_year')):?>
	    		                    <?php the_field('publication_year');?>
	    		                <?php endif;?>
					        </div>
					    </div>
				        <div class="description">
				            <a class="link-with-icon" href="#"><i class="fa fa-external-link"></i>Publisher's website</a>
				        </div>
				    </div>
				</div>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
	    </div>
	<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'sbr_publiction', 'sbr_publiction_shortcode' );

/**
 * The VC Functions
 */
function sbr_publiction_shortcode_vc() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Get publications", 'nurealamsabbir'),
			"base" => "sbr_publiction",
			"category" => __('AuthLab Post Block', 'nurealamsabbir'),
			'description' => __('Pull all stories post', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Show How Many Post will show?", 'nurealamsabbir'),
					"param_name" => "posts_per_page",
					"value" => '1'
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'sbr_publiction_shortcode_vc' );

























/**
 * The Shortcode shadow header
 */
function sbr_shadowheader_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'title'			=>'',
				'sec_title'		=> '',
				'font_style' 	=>'italic',
				'black_space'	=>'2x',
				'class'			=>'0'
			), $atts 
		) 
	);
	//print_r($class);
	ob_start();?> 
		<?php if ($class !='0'):?>
			<div class="<?php echo $class ?>">
		<?php endif; ?>
		<div class="sec_head <?php echo $black_space; ?>"> 
			<h2 class="title"><?php echo $title; ?></h2>
			<div class="sec_title <?php echo $font_style; ?>"><?php echo $sec_title; ?></div>
	    </div>
	    <?php if ($class !='0'):?>
	    	</div>
	    <?php endif; ?>
	<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'sbr_shadowheader', 'sbr_shadowheader_shortcode' );

/**
 * The VC Functions
 */
function sbr_shadowheader_shortcode_vc() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Shadow Title", 'nurealamsabbir'),
			"base" => "sbr_shadowheader",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Give your section title', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Your Title", 'nurealamsabbir'),
					"param_name" => "title",
					"value" => '',
					'admin_label'=> true
				),
				array(
					"type" => "textfield",
					"heading" => __("Your Secondary Title", 'nurealamsabbir'),
					"param_name" => "sec_title",
					"value" => ''
				),
				array(
					"type" => "dropdown",
					"heading" => __("Secondary Title Font Style", 'nurealamsabbir'),
					"param_name" => "font_style",
					"value" => array(
						'Normal'   => 'normal',
						'Italic'   => 'italic'
					),
					"std" => $defaults['font_style']
				),
				array(
					"type" => "dropdown",
					"heading" => __("Space Under Title", 'nurealamsabbir'),
					"param_name" => "black_space",
					"value" => array(
						'4x'   => '4X',
						'2x'   => '2x'
					),
					"std" => $defaults['font_style']
				),
				array(
					"type" => "textfield",
					"heading" => __("Extra Class", 'nurealamsabbir'),
					"param_name" => "class",
					"value" => ''
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'sbr_shadowheader_shortcode_vc' );





/**
 * The VC welcome Head
 */

function homepage_head_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'text_block_image'	=>'',
				'left_right'		=> '',
			), $atts 
		) 
	);


	
		$shortimg[] = wp_get_attachment_image_src($text_block_image, "large");
		
		$output = '
			<div class="info_context">
				<div class="ic_img_wrp">
					<img src="'.$shortimg[0][0] .'" class="img-responsive" />
				</div>
				<div class="ic_text_wrp">
					'.$content.'
				</div>
			</div>
	    ';	
	ob_start();?> 
		<?php if ($left_right !='left'):?>
		
	<?php endif ;

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'homepage_head', 'homepage_head_shortcode' );


function homepage_head_shortcode_vcs() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Home Page Head", 'nurealamsabbir'),
			"base" => "homepage_head",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Edit your homepage head', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "attach_image",
					"heading" => __("Post image", 'nurealamsabbir'),
					"param_name" => "text_block_image",
					"value" => '',
				),
				array(
					"type" => "text",
					"heading" => __("Post image", 'nurealamsabbir'),
					"param_name" => "jhul",
					"value" => '',
				),
				array(
					"type"        => "dropdown",
					"heading"     => __("Image Position"),
					"param_name"  => "left_right",
					"admin_label" => true,
					"value"       => array(
						'left'   => 'left',
						'right'   => 'right'
					),
					"std"         => $defaults['left_right'],
					"description" => __("The description")
				),
				
				array(
					"type" => "textarea_html",
					"heading" => __("About Me Content", 'nurealamsabbir'),
					"param_name" => "content"
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'homepage_head_shortcode_vcs' );








/**
 * The Shortcode For Custom Post Type
 */
function sbr_getposttype_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'sbr_title'		=>'',
				'posttype'		=> '',
				'sbr_button'	=> 'Read More',
				'btn_url'		=> '',
				'secclass' 		=>'',
				'btn_class'		=>'',
				'posts_per_page'=>''
			), $atts 
		) 
	);
	$args = array(
		//Type & Status Parameters
	    'posts_per_page'   => $posts_per_page,
		'post_type'   => $posttype,
		'post_status' => 'any',
	);
	
	$list_posts = new WP_Query( $args );
	ob_start();
		?> 

		
		<div class="research_news <?php echo $secclass; ?>">
			<h2 class="research_news_title">
			    <?php echo $sbr_title; ?>
			</h2>
			<?php while ( $list_posts->have_posts() ) : $list_posts->the_post(); ?>
				<div class="with_border_bottom">
				    <a href=" <?php the_permalink(); ?> "><p class="list_post_title"><?php the_title();	 ?></p></a>
				    <p class="list_post_meta"><span><?php echo get_the_date('M j, Y'); ?></span></p>
				</div>
			<?php endwhile; wp_reset_query();?>
		    
		    <div class="btn_wrp <?php echo $btn_class; ?>">
		        <a class="btn_view news_btn" href="#" role="button"><?php echo $sbr_button; ?></a>
		    </div>
		</div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'sbr_getposttype', 'sbr_getposttype_shortcode' );

/**
 * The VC Functions
 */
function sbr_getposttype_shortcode_vc() {

	$args = array(
       'public'   => true,
       '_builtin' => false,
    );

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'

    $post_types = get_post_types( $args, 'objects'); 

    foreach ( $post_types  as $post_type => $properties ) {
       $posttypes_array[$properties->labels->name] = $properties->query_var;
    }
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Get Post With List View", 'nurealamsabbir'),
			"base" => "sbr_getposttype",
			"category" => __('AuthLab Post Block', 'nurealamsabbir'),
			'description' => __('Pull selected cusom post with list', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textarea",
					"heading" => __("Section Title", 'nurealamsabbir'),
					"param_name" => "sbr_title",
				),
				array(
					"type"        => "dropdown",
					"heading"     => __("Select Post Type"),
					"param_name"  => "posttype",
					'description' => __('Our deafult post type is Research news ', 'nurealamsabbir'),
					"admin_label" => true,
					"value"       => $posttypes_array,
					"std"         => $defaults['left_right'],
					"description" => __("The description")
				),
				array(
					"type" => "textfield",
					"heading" =>'Number Of Post',
					"param_name" => "posts_per_page",
				),
				array(
					"type" => "textfield",
					"heading" =>'Read More Button Text',
					"param_name" => "sbr_button",
				),
				array(
					"type" => "textfield",
					"heading" => __("Button Url", 'nurealamsabbir'),
					"param_name" => "btn_url",
					"value" => ''
				),
				array(
					"type" => "textfield",
					"heading" => __("Button Class", 'nurealamsabbir'),
					"param_name" => "btn_class",
					"value" => ''
				),
				array(
					"type" => "textfield",
					"heading" =>'Section Class',
					"param_name" => "secclass",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'sbr_getposttype_shortcode_vc' );










/**
 * The Shortcode For authlab map
 */
function sbr_google_map_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'lat'		=>'23.813421',
				'lon'		=> '88.757144'
			), $atts 
		) 
	);
	
	ob_start();
		?> 
			<div id="googleMap" class="contact_map" data-lat="<?php echo $lat; ?>" data-lon="<?php echo $lon; ?>"></div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'sbr_google_map', 'sbr_google_map_shortcode' );

/**
 * The VC Functions
 */
function sbr_google_map_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Google Map", 'nurealamsabbir'),
			"base" => "sbr_google_map",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Give your lon and lat value', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'latitude',
					"admin_label" => true, 
					"param_name" => "lat",
				),
				array(
					"type" => "textfield",
					"heading" =>'longitude',
					"param_name" => "lon",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'sbr_google_map_shortcode_vc' );


/**
 * The Shortcode For authlab Action button
 */
function action_button_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'btn_txt'		=>'view All',
				'btn_url'		=> '#',
				'btn_class'		=> ''
			), $atts 
		) 
	);
	
	ob_start();
		?> 
			<a class="btn_view <?php echo $btn_class; ?>" href="<?php echo $btn_url; ?>"><?php echo $btn_txt; ?></a>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'action_button', 'action_button_shortcode' );

/**
 * The VC Functions
 */
function action_button_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Action button", 'nurealamsabbir'),
			"base" => "action_button",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Pull selected cusom post with list', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'Button Text',
					"admin_label" => true, 
					"param_name" => "btn_txt",
				),
				array(
					"type" => "textfield",
					"heading" =>'Button Url',
					"param_name" => "btn_url",
				),
				array(
					"type" => "textfield",
					"heading" =>'Button Class',
					"param_name" => "btn_class",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'action_button_shortcode_vc' );






/**
 * The Shortcode For authlab Get post By year
 */

/**
 * The VC Functions
 */

// end





/**
 * The Shortcode For Group post
 */
function grouppost_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'block_one'				=>'...',
				'block_one_column'		=>'col-sm-3',
				'block_three'			=> '',
				'block_three_column'	=> 'col-sm-3 col-md-2',
				"content_column"		=> 'col-sm-6 col-md-7',
				"class"					=> ''
			), $atts  
		) 
	);
	
	ob_start();
		?> 	
			<div class="sbr_column_post <?php echo $class ;?>">
				<div class="row sbr_column_row">
					<div class="<?php echo $block_one_column;?> item"><?php echo $block_one;?></div>
					<div class="<?php echo $content_column;?> item"><?php echo $content;?></div>
					<div class="<?php echo $block_three_column;?>  item column-three"><?php echo $block_three;?></div>
				</div>
			</div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'grouppost', 'grouppost_shortcode' );

/**
 * The VC Functions
 */
function grouppost_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Custom Column Post", 'nurealamsabbir'),
			"base" => "grouppost",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Three Column Post', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'Block One',
					"admin_label" 	=> true, 
					"param_name"	=> "block_one",
					"edit_field_class" =>"vc_col-sm-10"
				),
				array(
					"type" => "textfield",
					"heading" =>'Column Width', 
					"param_name"	=> "block_one_column",
					"edit_field_class" =>"vc_col-sm-2",
					"value"				=> "col-sm-3"
				),
				array(
					"type" => "textarea_html",
					"heading" =>'Block Two',
					"param_name" => "content",
					"admin_label" 	=> true,
					"edit_field_class" =>"vc_col-sm-10"
				),
				array(
					"type" => "textfield",
					"heading" =>'Column Width',
					"param_name" => "content_column",
					"edit_field_class" =>"vc_col-sm-2",
					"value"				=> "col-sm-6 col-md-7"
				),
				array(
					"type" => "textfield",
					"heading" =>'Block Three',
					"param_name" => "block_three",
					"admin_label" 	=> true,
					"edit_field_class" =>"vc_col-sm-10"
				),
				array(
					"type" => "textfield",
					"heading" =>'Column Width',
					"param_name" => "block_three_column",
					"edit_field_class" =>"vc_col-sm-2",
					"value"				=> "col-sm-3 col-md-2"
				),
				array(
					"type" => "textfield",
					"heading" =>'Class',
					"param_name" => "class",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'grouppost_shortcode_vc' );



/**
 * The Shortcode For BKMEA Border Title
 */
function bkmea_border_title_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'title_text'	=>'Title',
				'title_text_tag'	=>'h2',
				'bw'				=> '1',
				'bc'				=> '#f0f0f0',
				'text_align'		=> 'text-left',
				"class"			=> ''
			), $atts  
		) 
	); 
		

	ob_start();
		?> 	
			<div class="title-align <?php echo $text_align;?> ">
				<<?php echo $title_text_tag;?> class="bkmea-title <?php echo $class ;?>"><?php echo $title_text ;?></<?php echo $title_text_tag;?>>
			</div>
			<style>
				.bkmea-title {
					border-bottom: <?php echo $bw .'px' ;?> solid <?php echo $bc;?>
				}
				 
			</style>

		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'bkmea_border_title', 'bkmea_border_title_shortcode' );

/**
 * The VC Functions
 */
function bkmea_border_title_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("BKMEA Custom Title", 'nurealamsabbir'),
			"base" => "bkmea_border_title",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Three Column Post', 'nurealamsabbir'),
			"admin_enqueue_css" => get_template_directory_uri().'/css/vc_custom.css',
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'BKMEA Title Text',
					"admin_label" 	=> true, 
					"edit_field_class" =>"vc_col-sm-8",
					"param_name"	=> "title_text",
					"description"		=>"Put your title text here",
					"group"		=> "Text"
				),
				array(
					"type" => "textfield",
					"heading" =>'Title Tag Level',
					"edit_field_class" =>"vc_col-sm-2 mg-fix",
					"param_name"	=> "title_text_tag",
					"value"			=>"h2",
					"description"		=>"Heading level h1-h6",
					"group"		=> "Text"
				),
				array(
					"type" => "textfield",
					"heading" =>'Border Width',
					"description"		=>"Border width in number",
					"edit_field_class" =>" vc_col-sm-3", 
					"param_name"	=> "bw",
					"description"		=>"Give only integer value",
					"group"		=> "Text",
					"value"		=>"1"
				),
				array(
					"type" => "colorpicker",
					"heading" =>'Border Color',
					"edit_field_class" =>"vc_col-sm-3", 
					"param_name"	=> "bc",
					"group"		=> "Text",
					"description"		=>"Pick your color",
					"value"		=>"f0f0f0"
				),
				array(
					"type" => "textfield",
					"heading" =>'Text Align',
					"param_name"	=> "text_align",
					"group"		=> "More Options",
					"value"		=>"text-left"
				),
				array(
					"type" => "textfield",
					"heading" =>'Eextra Class',
					"param_name" => "class",
					"group"		=> "Text"
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'bkmea_border_title_shortcode_vc' );

/**
 * The Shortcode For BKMEA in a glance
 */
function bkmea_ina_glance_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'glance_text'	=>'fff',
				'bkmea_image'	=>'',
				'img_alt'		=> '',
				"class"			=> ''
			), $atts  
		) 
	); 
		
	if (!empty($bkmea_image)) {
		$side_img[] = wp_get_attachment_image_src($bkmea_image, "large");
	}else {
		$side_img[0][0]  = 'http://lorempixel.com/400/200/business';
	}
	ob_start();
		?> 	

			<div class="<?php echo $class; ?>">
		    	<figure class="in-a-glance-single">
		    		<img  alt="<?php echo $img_alt; ?>" class="img-responsive" src="<?php echo $side_img[0][0] ?>">
		    	    <figcaption class="glance-single-caption"><h3 class="_glance-text"><?php echo $glance_text; ?></h3></figcaption>
		    	</figure>	
			</div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'bkmea_ina_glance', 'bkmea_ina_glance_shortcode' );

/**
 * The VC Functions
 */
function bkmea_ina_glance_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("BKMEA In A Glance", 'nurealamsabbir'),
			"base" => "bkmea_ina_glance",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Three Column Post', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'BKMEA Caption',
					"admin_label" 	=> true, 
					"param_name"	=> "glance_text"
				),
				array(
					"type" => "attach_image",
					"heading" =>'BKMEA Image', 
					"param_name"	=> "bkmea_image"
				),
				array(
					"type" => "textfield",
					"heading" =>'Image Alt', 
					"param_name"	=> "img_alt"
				),
				array(
					"type" => "textfield",
					"heading" =>'Eextra Class',
					"param_name" => "class",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'bkmea_ina_glance_shortcode_vc' );



// 










/**
 * The Shortcode For authlab Research Hilights
 */
function research_hilights_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'buttom_slider_heading'		=>'Research Hilight',
				'btn_txt'		=>'view All',
				'btn_url'		=> '#',
				'btn_class'		=> ''
			), $atts 
		) 
	);
	$side_img=array();
	$btn_txt=explode(',', $btn_txt);
	if (is_array($btn_txt)) {
		foreach ($btn_txt as $key) {
			$side_img[] = wp_get_attachment_image_src($key, "large");
			$balbal = $key;
		} 
	}
	
	ob_start();?>
		<div class="owl-partner-slider">
			<?php foreach ($side_img as $key) { ?>
				<div class="item single_img">
				    <img src="<?php echo $key[0];?>" alt="partner-1" class="partner-img img-responsive">
				</div>
				
			<?php } ?>
		</div>
	<?php
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'research_hilights', 'research_hilights_shortcode' );

/**
 * The VC Functions
 */
function research_hilights_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Mini Carousel", 'nurealamsabbir'),
			"base" => "research_hilights",
			"category" => __('AuthLab Post Block', 'nurealamsabbir'),
			'description' => __('Select Multiple Number of Image with Custom Url', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'Bottom Slider Heading',
					"param_name" => "buttom_slider_heading",
				),
				array(
					"type" => "attach_images",
					"heading" =>'Select Multiple Image',
					"admin_label" => true, 
					"param_name" => "btn_txt",
				),
				array(
					"type" => "textfield",
					"heading" =>'Image Url',
					"param_name" => "btn_url",
				),
				array(
					"type" => "textfield",
					"heading" =>'Image Class',
					"param_name" => "btn_class",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'research_hilights_shortcode_vc' );
//



/**
 * The Shortcode For Welcome Block
 */
function bkmea_welcome_block_shortcode( $atts, $content = null ) {
	extract( 
		shortcode_atts( 
			array(
				'title_text'	=>'Welcome to Bkmea',
				'bkmea_image'	=>'',
				'image_position'	=>'right',
				'img_alt'		=> '',
				"class"			=> ''
			), $atts  
		) 
	); 
		
	if (!empty($bkmea_image)) {
		$side_img[] = wp_get_attachment_image_src($bkmea_image, "large");
	}else {
		$side_img[0][0]  = 'http://lorempixel.com/400/200/business';
	}
	ob_start();
		?> 	


			<div class="row <?php echo $image_position.' '; echo $class;?>">
			    <div class="col-lg-12">
			        <h2 class="bkmea-title"><?php echo $title_text;?></h2>
			    </div>
			    <?php if ($image_position == "left") {
			    	$pos_fix_frist = 'col-sm-push-5';
			    	$pos_fix_sceond = 'col-sm-pull-7';
			    }elseif ($image_position == "right") {
			    	$pos_fix_frist = 'deafult';
			    	$pos_fix_sceond = 'deafult';
			    } 
			    ?>
			    <div class="col-md-7 <?php  echo $pos_fix_frist;?>">
			       <div class="welcome-text">
			           <?php echo $content;?>
			       </div>
			    </div>
			    <div class="col-md-5 <?php  echo $pos_fix_sceond;?>">
			       <img src="<?php echo $side_img[0][0] ?>" alt="welcome image" class="img-responsive">
			    </div>
			</div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'bkmea_welcome_block', 'bkmea_welcome_block_shortcode' );

/**
 * The VC Functions
 */
function bkmea_welcome_block_shortcode_vc() {

	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("AuthLab Welcome Block", 'nurealamsabbir'),
			"base" => "bkmea_welcome_block",
			"category" => __('AuthLab Block', 'nurealamsabbir'),
			'description' => __('Image over text', 'nurealamsabbir'),
			"params" => array(
				array(
					"type" => "textfield",
					"heading" =>'Title',
					"admin_label" 	=> true, 
					"param_name"	=> "title_text"
				),
				array(
					"type" => "attach_image",
					"heading" =>'BKMEA Image', 
					"param_name"	=> "bkmea_image"
				),
				array(
					"type"        => "dropdown",
					"heading"     => __("Image Position"),
					"param_name"  => "image_position",
					"value"       => array(
						'No Position'   => 'default',
						'Left'   => 'left',
						'Right'   => 'right',
						'Top'   => 'top',
						'Bottom'   => 'Bottom'
					),
					"description" => __("Place image whatever you want")
				),
				array(
					"type" => "textfield",
					"heading" =>'Image Alt', 
					"param_name"	=> "img_alt"
				),
				array(
					"type" => "textarea_html",
					"heading" =>'Content', 
					"admin_label" 	=> true, 
					"param_name"	=> "content"
				),

				array(
					"type" => "textfield",
					"heading" =>'Eextra Class',
					"param_name" => "class",
				)
			)
		) 
	);
}
add_action( 'wp_loaded', 'bkmea_welcome_block_shortcode_vc' );
// 
				