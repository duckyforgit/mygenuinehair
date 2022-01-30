<?php
/**
 * Custom header setup
 *
 * @package UnderStrap
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'understrap_custom_header_setup' );

if ( ! function_exists( 'understrap_custom_header_setup' ) ) {
	/**
	 * Set up custom header feature.
	 */
	function understrap_custom_header_setup() {

		/**
		 * Filter UnderStrap custom-header support arguments.
		 *
		 * @since UnderStrap 0.5.2
		 *
		 * @param array $args {
		 *     An array of custom-header support arguments.
		 *
		 *     @type string $default-image          Default image of the header.
		 *     @type string $default_text_color     Default color of the header text.
		 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
		 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
		 *     @type string $wp-head-callback       Callback function used to styles the header image and text
		 *                                          displayed on the blog.
		 *     @type string $flex-height            Flex support for height of header.
		 * }
		 */
		add_theme_support(
			'custom-header',
			apply_filters(
				'understrap_custom_header_args',
				array(
					'default-image' => '%s/dist/img/header.jpg',
					'width'         => 2000,
					'height'        => 1200,
					'flex-height'   => true,
					'header-text'   => true,
        // Header text color default
        	'default-text-color'        => '000'
        
				)
			)
		);

		register_default_headers(
			array(
				'default-image' => array(
					'url'           => '%s/dist/img/header.jpg',
					'thumbnail_url' => '%s/dist/img/header.jpg',
					'description'   => __( 'Default Header Image', 'understrap' ),
				),
			)
		);
	}
}
if ( ! function_exists( 'gh_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see ghn_custom_headerchnetup().
	 */
	function gh_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_themechnupport( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				 
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;


add_action( 'customize_register', 'gh_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function gh_register_theme_customizer( $wp_customize ) {
 
  // // Create custom panel.
  // $wp_customize->add_panel( 'banner_text', array(
  //   'priority'       => 75,
  //   'theme_supports' => '',
  //   'title'          => __( 'Banner Text', 'understrap' ),
  //   'description'    => __( 'Set editable text for the banner.', 'understrap' ),
  // ) );
  // Add Footer Text
  // Add section.
  // $wp_customize->add_section( 'custom_banner_title' , array(
  //   'title'    => __('Change Banner Title Text','understrap'),
  //   'panel'    => 'banner_text',
  //   'priority' => 20
  // ) );
  // Add setting
  $wp_customize->add_setting( 'custom_banner_title_text', array(
     'default'           => __( 'Everyone has "Good Hair"', 'understrap' ),
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_banner_title_text',
        array(
            'label'    => __( 'Main Banner Title Text', 'understrap' ),
            'section'  => 'header_image',
            'settings' => 'custom_banner_title_text',
            'priority' => 10,
            'type'     => 'text',
            'description' => __('Text put here be added to banner'),
        )
      )
  );

  $wp_customize->add_setting( 'custom_banner_subtitle_text', array(
     'default'           => __( 'We work closely with nature to help you believe it too.', 'understrap' ),
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_banner_subtitle_text',
        array(
            'label'    => __( 'Main Banner SubTitle Text', 'understrap' ),
            'section'  => 'header_image',
            'settings' => 'custom_banner_subtitle_text',
            'priority' => 10,
            'type'     => 'text',
            'description' => __('Add Subtitle to banner'),
        )
      )
  );
  $wp_customize->add_setting( 'custom_banner_description_text', array(
     'default'           => __( 'Our natural hair care products are designed to serve all populations with hair and scalp challenges,which ultimately affect the way we view and feel about ourselves.', 'understrap' ),
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_banner_description_text',
        array(
            'label'    => __( 'Main Banner Description Text', 'understrap' ),
            'section'  => 'header_image',
            'settings' => 'custom_banner_description_text',
            'priority' => 10,
            'type'     => 'text',
            'description' => __('Add Description to banner'),
        )
      )
  );
  $wp_customize->add_setting( 'custom_button_left_text', array(
     'default'           => __( 'Find your Good Hair', 'understrap' ),
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_button_left_text',
        array(
            'label'    => __( 'Main Banner Left Button Text', 'understrap' ),
            'section'  => 'header_image',
            'settings' => 'custom_button_left_text',
            'priority' => 10,
            'type'     => 'text',
            'description' => __('Add Text to Left Button on banner'),
        )
      )
  );
  $wp_customize->add_setting( 'custom_button_left_url', array(
     'default'           => '',
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_button_left_url',
        array(
            'label'    		=> __( 'Main Banner - Select the Left Button Link Page', 'understrap' ),
            'section'  		=> 'header_image',
            'settings' 		=> 'custom_button_left_url',
            'priority' 		=> 10,
            'type'     		=> 'dropdown-pages',
            'description' => __('Add a Page Link to the Left Button on banner'),
            
        )
      )
  );

  $wp_customize->add_setting( 'custom_button_right_text', array(
     'default'           => __( 'Learn more about our inspiration', 'understrap' ),
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_button_right_text',
        array(
            'label'    => __( 'Main Banner Right Button Text', 'understrap' ),
            'section'  => 'header_image',
            'settings' => 'custom_button_right_text',
            'priority' => 10,
            'type'     => 'text',
            'description' => 'Add Text to Right Button on banner',
        )
      )
  );
  $wp_customize->add_setting( 'custom_button_right_url', array(
     'default'           => '',
     'sanitize_callback' => 'understrap_sanitize_text_field',
     'transport'         => 'refresh',
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_button_right_url',
        array(
            'label'    		=> __( 'Main Banner - Select the Right Button Link Page', 'understrap' ),
            'section'  		=> 'header_image',
            'settings' 		=> 'custom_button_right_url',
            'priority' 		=> 10,
            'type'     		=> 'dropdown-pages',
            'description' => __('Add a Page Link to the Right Button on banner'),
            
        )
      )
  );


  // Sanitize text
  function understrap_sanitize_text_field( $text ) {
      return sanitize_text_field( $text );
  }
  function understrap_sanitize_url( $url ) {
	  return esc_url_raw( $url );
	}
	// sanitize checkbox fields
	function understrap_sanitize_checkbox( $input, $setting ) {
	    return sanitize_key( $input ) === '1' ? 1 : 0;
	}
}

