<?php 

/**
 * The Shortcode
 */
function wagon_stories_post_shortcode( $atts, $content = null ) {
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
	    'posts_per_page'   => $posts_per_page,
	    'offset'           => 0,
	    'orderby'          => 'date',
	    'order'            => 'DSC',
	    'post_type'        => 'successstories',
	    'post_status'      => 'publish',
	    'suppress_filters' => true 
	);
	$posts = get_posts( $args );
	ob_start();
		?> 
		<div class="divider-space space-25x"></div>
		<div class="row">
			<div class="col-sm-8">
			    <div class="heading heading-h3 heading-w-subtitle heading-icon heading-special">
			        <h3 class="special-title"><?php echo $sbr_title; ?></h3>
			        <div class="special-subtitle"><?php echo $sbr_title_shadow; ?></div>
			    </div>
			</div>
		</div>
		<div class="divider-space space-20x"></div>
		<div class="slider slider_type_testimonial recent-testimonials-carousel vc_custom_1441797348241" id="js-slider-21255402757987650c2973">
		<?php foreach($posts as $post): setup_postdata( $post ); ?>

			
			    
			    <div class="slider-item testimonials-carousel-item">
			        <div class="testimonial testimonial_type_slider">
			            <div class="row">
			                <div class="col-sm-6 col-xs-12">
			                    <div class="testimonial-images">
			                        <div class="testimonial-images-inner">
			                            <div class="testimonial-image testimonial-image-first">
			                                <img height="223" src="
												<?php if(get_field('before_picture', $post->ID, false)):?>
												    <?php the_field('before_picture', $post->ID, false);?>
												<?php endif;?>
			                                " width="250">
			                                <div class="testimonial-image-caption">
			                                    <h4 class="testimonial__caption-title">Before</h4>
			                                </div>
			                            </div>
			                            <div class="testimonial-image testimonial-image-second">
			                                <img height="223" src="
												<?php if(get_field('after_picture', $post->ID, false)):?>
												    <?php the_field('after_picture', $post->ID, false);?>
												<?php endif;?>
			                                " width="250">
			                                <div class="testimonial-image-caption">
			                                    <div class="testimonial__caption-title">
			                                        After
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-sm-6 col-xs-12">
			                    <div class="testimonial-content">
			                        <h5 class="testiomonial__title"><a href="#"><?php echo $post->post_title; ?></a></h5>
			                        <div class="tc_des">
			                        	<?php the_content(); ?>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			
		    <!--End of section three-->
		<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<?php

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode( 'wagon_stories_post', 'wagon_stories_post_shortcode' );

/**
 * The VC Functions
 */
function wagon_stories_post_shortcode_vc() {
	vc_map( 
		array(
			"icon" => 'wagon-vc-block',
			"name" => __("Stories Post Type", 'reign'),
			"base" => "wagon_stories_post",
			"category" => __('sbr AuthLab Block', 'reign'),
			'description' => __('Pull all stories post', 'reign'),
			"params" => array(
				array(
					"type" => "textarea",
					"heading" => __("Welcome Title", 'Reign'),
					"param_name" => "sbr_title",
				),
				array(
					"type" => "textfield",
					"heading" => __("Shadow For Title", 'Reign'),
					"param_name" => "sbr_title_shadow",
				),
				array(
					"type" => "textfield",
					"heading" => __("Show How Many Post will show?", 'reign'),
					"param_name" => "posts_per_page",
					"value" => '1'
				)
			)
		) 
	);
}
add_action( 'vc_before_init', 'wagon_stories_post_shortcode_vc' );