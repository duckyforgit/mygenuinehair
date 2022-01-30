<?php

function acf_testimonial_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial item block
		acf_register_block(array(
			'name'				=> 'testimonial-item-block',
			'title'				=> __('Testimonial Item Block'),
			'description'		=> __('A custom block for testimonial items.'),
			'render_template'	=> 'template-parts/blocks/testimonial-item/block-testimonial-item.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'testimonial' ),
		));
	}
}

add_action('acf/init', 'acf_testimonial_item_block');

function acf_quiz_template_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a quiz template block
		acf_register_block(array(
			'name'				=> 'quiz-item-block',
			'title'				=> __('quiz Item Block'),
			'description'		=> __('A custom block for quiz items.'),
			'render_template'	=> 'template-parts/blocks/quiz/block-quiz-template.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'quiz' ),
		));
	}
}

add_action('acf/init', 'acf_quiz_template_block');

function mgh_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

                $content = '<!-- wp:column {"style":{"color":{"background":"#c8e6da"}}} -->
<div class="wp-block-column has-background" style="background-color:#c8e6da"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">We are diverse yet the same.</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"style":{"border":{"radius":0}}} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":822,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="http://localhost/genuine/wp-content/uploads/2021/10/81q5bzGbDML._SL1500_-small.jpg" alt="" class="wp-image-822"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":257,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://localhost/genuine/wp-content/uploads/2021/07/organic-products-hero.png" alt="" class="wp-image-257"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->';

		register_block_pattern(
			'mgh/call-to-action-gallery',
			array(
				'title'         => __( 'Call to Action Gallery', 'mgh' ),
				'description'   => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'mgh' ),
				'content'       => trim($content),
				'categories'    => array( 'hero' ),
				'keywords'      => array( 'cta' ),
                                'viewportWidth' => 1400,
                                'blockTypes'    => array( 'core/gallery' ),
			)
		);

	}

}
add_action( 'init', 'mgh_register_block_patterns' );

function mgh_register_block_categories() {
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'hero',
			array( 'label' => _x( 'Hero', 'Block pattern category', 'mgh' ) )
		);

	}
}
add_action( 'init', 'mgh_register_block_categories' );