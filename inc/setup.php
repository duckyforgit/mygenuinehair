<?php
/**
 * Theme basic setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'understrap_setup' );

if ( ! function_exists( 'understrap_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function understrap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on understrap, use a find and replace
		 * to change 'understrap' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'understrap', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primaryOne' => __( 'Primary One Menu', 'understrap' ),
				'primaryTwo' => __( 'Primary Two Menu', 'understrap' ),
				'secondary' => __( 'Secondary Menu', 'understrap' ),
				'social-media' => __( 'Social Media Menu', 'understrap' ),
				'handheld'  => __( 'Handheld Menu', 'understrap' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'understrap_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Set up the WordPress Theme logo feature.
		//add_theme_support( 'custom-logo' );
    add_theme_support(
				'custom-logo',
				array(
					'width'      => 300,
					'height'     => 100,
					'flex-width' => true,
				)
			);
		// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );   

   // add_theme_support( 'custom-header' );

    add_theme_support('woocommerce');
		// Check and setup theme default settings.
	understrap_setup_theme_default_settings();

	add_theme_support( 'editor-styles' );

	add_editor_style( 'dist/css/editor-style.css' );
	add_theme_support('align-wide');
	}
	 
}


add_filter( 'excerpt_more', 'understrap_custom_excerpt_more' );

if ( ! function_exists( 'understrap_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function understrap_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = ' ...';
		}
		return $more;
	}
}

if ( ! function_exists( 'understrap_get_excerpt' ) ) {

	function understrap_get_excerpt( $args = array() ) {

		// Defaults
		$defaults = array(
			'post'            => '',
			'length'          => 40,
			'readmore'        => false,
			'readmore_text'   => esc_html__( 'read more', 'understrap' ),
			'readmore_after'  => '',
			'custom_excerpts' => true,
			'disable_more'    => false,
		);

		// Apply filters
		$defaults = apply_filters( 'understrap_get_excerpt_defaults', $defaults );

		// Parse args
		$args = wp_parse_args( $args, $defaults );

		// Apply filters to args
		$args = apply_filters( 'understrap_get_excerpt_args', $defaults );

		// Extract
		extract( $args );

		// Get global post data
		if ( ! $post ) {
			global $post;
		}

		// Get post ID
		$post_id = $post->ID;

		// Check for custom excerpt
		if ( $custom_excerpts && has_excerpt( $post_id ) ) {
			$output = $post->post_excerpt;
		}

		// No custom excerpt...so lets generate one
		else {

			// Readmore link
			$readmore_link = '<a href="' . get_permalink( $post_id ) . '" class="readmore">' . $readmore_text . $readmore_after . '</a>';

			// Check for more tag and return content if it exists
			if ( ! $disable_more && strpos( $post->post_content, '<!--more-->' ) ) {
				$output = apply_filters( 'the_content', get_the_content( $readmore_text . $readmore_after ) );
			}

			// No more tag defined so generate excerpt using wp_trim_words
			else {

				// Generate excerpt
				$output = wp_trim_words( strip_shortcodes( $post->post_content ), $length );

				// Add readmore to excerpt if enabled
				if ( $readmore ) {

					$output .= apply_filters( 'understrap_readmore_link', $readmore_link );

				}

			}

		}

		// Apply filters and echo
		//return apply_filters( 'understrap_get_excerpt', $output );
		//return 20;

	}

}


function understrap_custom_excerpt_length( $length ) {
    return 20;
}
//add_filter( 'excerpt_length', 'understrap_custom_excerpt_length', 999 );
if ( ! function_exists( 'understrap_get_excerpt_read_more' ) ) {
	function understrap_get_excerpt_read_more($newline=false){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 200);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		if ($newline) {
			$excerpt = $excerpt.'<br><br><a href="'.get_the_permalink().'">Continue reading...</a>'; 
		}
		else {
			$excerpt = $excerpt.'... <a href="'.get_the_permalink().'">READ MORE</a>';
		}
		
		return $excerpt;
	}
}

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' <p><a class="btn btn-secondary understrap-read-more-link stretched-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __(
				'Read More ...',
				'understrap'
			) . '</a></p>';
		}
		return $post_excerpt;
	}
}
//add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );
 
// Add featured image sizes
//
// Sizes are optimized and cropped for landscape aspect ratio
// and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
add_image_size( 'thumbnail', 150, 150, true ); 
add_image_size( 'post-image', 150, 150, true ); 
add_image_size( 'featured-post', 200, 250, true);
add_image_size( 'logo', 300, 169, true );
add_image_size( 'featured-video', 200, 130, true );
add_image_size( 'blog', 400, 200, true );
add_image_size( 'featured-blog', 300, 150, true );
add_image_size( 'featured-medium', 300, 200, true );
add_image_size(	'featured-event', 1920, 400, true );
add_image_size(	'featured-landscape', 1200, 900, true );
add_image_size( 'featured-portrait', 900, 1200, true ); // name, width, height, crop 

add_image_size( 'background', 1920, 1080, true );
add_image_size( 'banner', 1048, 250, true );
add_image_size( 'banner-xlarge', 1920, 400, true );
add_image_size( 'banner-large', 1440, 700, true );

// Add additional image sizes without cropping
add_image_size( 'dd-video', 640 );

// Register the new image sizes for use in the add media modal in wp-admin
function understrap_custom_sizes( $sizes ) {
	return array_merge(
		$sizes, array(
			'post-image'  => __( 'Post Thumbnail' ),
			'featured-video'  => __( 'Featured Video' ),
			'featured-medium'  => __( 'Featured Medium' ),
			'featured-event' => __( 'Featured Event' ),
			'banner-large'  => __( 'Banner Large' ),
			 
		)
	);
}
add_filter( 'image_size_names_choose', 'understrap_custom_sizes' );
// and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
 
 
 
 


