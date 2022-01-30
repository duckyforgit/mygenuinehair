<?php
/**
 * Declaring widgets
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
  
/**
 * Add filter to the parameters passed to a widget's display callback.
 * The filter is evaluated on both the front and the back end!
 *
 * @link https://developer.wordpress.org/reference/hooks/dynamic_sidebar_params/
 */
add_filter( 'dynamic_sidebar_params', 'understrap_widget_classes' );

if ( ! function_exists( 'understrap_widget_classes' ) ) {

	/**
	 * Count number of visible widgets in a sidebar and add classes to widgets accordingly,
	 * so widgets can be displayed one, two, three or four per row.
	 *
	 * @global array $sidebars_widgets
	 *
	 * @param array $params {
	 *     Parameters passed to a widget’s display callback.
	 *
	 *     @type array $args  {
	 *         An array of widget display arguments.
	 *
	 *         @type string $name          Name of the sidebar the widget is assigned to.
	 *         @type string $id            ID of the sidebar the widget is assigned to.
	 *         @type string $description   The sidebar description.
	 *         @type string $class         CSS class applied to the sidebar container.
	 *         @type string $before_widget HTML markup to prepend to each widget in the sidebar.
	 *         @type string $after_widget  HTML markup to append to each widget in the sidebar.
	 *         @type string $before_title  HTML markup to prepend to the widget title when displayed.
	 *         @type string $after_title   HTML markup to append to the widget title when displayed.
	 *         @type string $widget_id     ID of the widget.
	 *         @type string $widget_name   Name of the widget.
	 *     }
	 *     @type array $widget_args {
	 *         An array of multi-widget arguments.
	 *
	 *         @type int $number Number increment used for multiples of the same widget.
	 *     }
	 * }
	 * @return array $params
	 */
	function understrap_widget_classes( $params ) {

		global $sidebars_widgets;

		/*
		 * When the corresponding filter is evaluated on the front end
		 * this takes into account that there might have been made other changes.
		 */
		$sidebars_widgets_count = apply_filters( 'sidebars_widgets', $sidebars_widgets );

		// Only apply changes if sidebar ID is set and the widget's classes depend on the number of widgets in the sidebar.
		if ( isset( $params[0]['id'] ) && strpos( $params[0]['before_widget'], 'dynamic-classes' ) ) {
			$sidebar_id   = $params[0]['id'];
			$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );

			$widget_classes = 'widget-count-' . $widget_count;
			if ( 0 === $widget_count % 4 || $widget_count > 6 ) {
				// Four widgets per row if there are exactly four or more than six widgets.
				$widget_classes .= ' col-md-3';
			} elseif ( 6 === $widget_count ) {
				// If exactly six widgets are published.
				$widget_classes .= ' col-md-2';
			} elseif ( $widget_count >= 3 ) {
				// Three widgets per row if there's three or more widgets.
				$widget_classes .= ' col-md-4';
			} elseif ( 2 === $widget_count ) {
				// If two widgets are published.
				$widget_classes .= ' col-md-6';
			} elseif ( 1 === $widget_count ) {
				// If just on widget is active.
				$widget_classes .= ' col-md-12';
			}

			// Replace the placeholder class 'dynamic-classes' with the classes stored in $widget_classes.
			$params[0]['before_widget'] = str_replace( 'dynamic-classes', $widget_classes, $params[0]['before_widget'] );
		}

		return $params;

	}
} // End of if function_exists( 'understrap_widget_classes' ).

add_action( 'widgets_init', 'understrap_widgets_init' );

if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Right Sidebar', 'understrap' ),
				'id'            => 'right-sidebar',
				'description'   => __( 'Right sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Left Sidebar', 'understrap' ),
				'id'            => 'left-sidebar',
				'description'   => __( 'Left sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Slider', 'understrap' ),
				'id'            => 'hero',
				'description'   => __( 'Hero slider area. Place two or more widgets here and they will slide!', 'understrap' ),
				'before_widget' => '<div class="carousel-item">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas for Blog', 'understrap' ),
				'id'            => 'herocanvas',
				'description'   => __( 'Full size canvas hero area for Bootstrap and other custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Top Full', 'understrap' ),
				'id'            => 'statichero',
				'description'   => __( 'Full top widget with dynamic grid', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .static-hero-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer Full', 'understrap' ),
				'id'            => 'footerfull',
				'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .footer-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
			register_sidebar(
			array(
				'name'          => __( 'Upcoming Events', 'understrap' ),
				'id'            => 'upcomingevents',
				'description'   => __( 'Event List widget for events with category of upcoming', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="event-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .event-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
			register_sidebar(
			array(
	        'name'          => __('Home Main Content Area', 'understrap'),
	        'id'            => 'widget-home',
	        'description'	=> 'Use widget description',
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h2 data-aos="fade-up" class="widget-title" ><span>',
	        'after_title'   => '</span></h2><hr>',
	    ));
// if ( is_customize_preview() ) {
//         $widget_home_description = sprintf( esc_html__( 'Displays widgets on home page main content area.%1$s Note : Please go to %2$s "Static Front Page"%3$s setting, Select "A static page" then "Front page" and "Posts page" to show added widgets', 'understrap' ), '<br />','<b><a class="understrap-customizer" data-section="static_front_page" style="cursor: pointer">','</a></b>' );
//     }
// else{
//         $widget_home_description = esc_html__( 'Displays widgets on Front/Home page. Note : Please go to Setting => Reading, Select "A static page" then "Front page" and "Posts page" to show added widgets', 'understrap' );
//     }
     
			register_sidebar(
			array(
	        'name'          => __('Home Main Content Area', 'understrap'),
	        'id'            => 'widget-home',
	        'description'	=> $widget_home_description,
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h2 data-aos="fade-up" class="widget-title" ><span>',
	        'after_title'   => '</span></h2><hr>',
	    ));
			$understrap_inc_dir = get_template_directory() . '/inc';
		//require_once($understrap_inc_dir.'/widgets/widget-recent-posts-template.php');  // Recent posts widget.
   // require_once($understrap_inc_dir.'/widgets/widget-gallery.php');   // Custom widget.);

	//	register_widget( 'Widget_Gallery' );
		 

	}
} // End of function_exists( 'understrap_widgets_init' ).
if ( ! function_exists( 'understrap_register_widgets' ) ) :
function understrap_register_widgets() {
 
  register_widget( 'Recent_Posts_Sidebar_Widget' );
  register_widget( 'Understrap_Widget_Gallery' ); 
  register_widget( 'Tabbed_Content_Widget' );
}
add_action( 'widgets_init', 'understrap_register_widgets' ); 
endif;
 
  
 //add_shortcode( 'widget_area', 'prefix_widget_area_shortcode' );
 /** * Display widget area with shortcode. * * @since  1.0.0 * * @return string  */
function prefix_widget_area_shortcode( $atts ) {    
	$atts = shortcode_atts(        
		array(            
			'id' => '',        
		),        
		$atts,        
		'widget_area'    
			);    
		ob_start();    
		understrap_widget_area( $atts['id'], array(        
			'before' => '<div class="' . $atts['id'] . ' widget-area"><div class="wrap">',        
			'after'  => '</div></div>',    
		) );    
		return ob_get_clean(); 
}



add_action( 'wp_footer', 'prefix_list_widget_areas' );
/**
 * Outputs a list of widget area IDs.
 *
 * @since  1.0.0
 *
 * @return void
 */
function prefix_list_widget_areas() {

	foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {

		echo $sidebar['id'] . '<br>';

	}

}

function torque_hello_world_shortcode( $atts ) {
   $a = shortcode_atts( array(
      'name' => 'world'
   ), $atts );
   return 'Hello ' . $a["name"];
}
add_shortcode( 'helloworld', 'torque_hello_world_shortcode' );


 