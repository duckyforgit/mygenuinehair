<?php
/**
 * Social Icons Widget
 *
 * Display the Social Icons.
 *
 * @package foundationpress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Social Icons Widget Class
 */
class Social_Icons_Widget extends WP_Widget {

	/**
	 * Widget Constructor
	 *
	 * @uses WP_Widget::__construct() Create Widget
	 * @return void
	 */
	function __construct() {

		parent::__construct(
			'social-icons', // ID.
			esc_html__( 'Social Icons Menu (Foundationpress)', 'foundationpress' ), // Name.
			array(
				'classname'                   => 'social-icons',
				'description'                 => esc_html__( 'Displays a Social Icons Menu.', 'foundationpress' ),
				'customize_selective_refresh' => true,
			) // Args.
		);

		// Filter Social Menu to add SVG icons.
		add_filter( 'walker_nav_menu_start_el', array( $this, 'nav_menu_social_icons' ), 10, 4 );

		// Delete Widget Cache on certain actions.
		add_action( 'wp_update_nav_menu', array( $this, 'delete_widget_cache' ) );
		add_action( 'switch_theme', array( $this, 'delete_widget_cache' ) );
	}

	/**
	 * Set default settings of the widget
	 *
	 * @return array Default widget settings.
	 */
	private function default_settings() {

		$defaults = array(
			'title' => '',
			'menu'  => 0,
		);

		return $defaults;
	}

	/**
	 * Reset widget cache object
	 *
	 * @return void
	 */
	public function delete_widget_cache() {

		wp_cache_delete( 'tzwb_social_icons', 'widget' );

	}

	/**
	 * Main Function to display the widget
	 *
	 * @uses this->render()
	 *
	 * @param array $args Parameters from widget area created with register_sidebar().
	 * @param array $instance Settings for this widget instance.
	 * @return void
	 */
	function widget( $args, $instance ) {

		$cache = array();

		// Get Widget Object Cache.
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'social_icons', 'widget' );
		}
		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		// Display Widget from Cache if exists.
		if ( isset( $cache[ $this->id ] ) ) {
			echo $cache[ $this->id ];
			return;
		}

		// Start Output Buffering.
		ob_start();

		// Get Widget Settings.
		$settings = wp_parse_args( $instance, $this->default_settings() );

		// Add Widget Title Filter.
		$widget_title = apply_filters( 'widget_title', $settings['title'], $settings, $this->id_base );

		// Output.
		echo $args['before_widget'];

		// Display Title.
		if ( ! empty( $widget_title ) ) {
			echo $args['before_title'] . $widget_title . $args['after_title'];
		};
		?>

		<div class="content">

			<?php echo $this->render( $settings ); ?>

		</div>

		<?php
		echo $args['after_widget'];

		// Set Cache.
		if ( ! $this->is_preview() ) {
			$cache[ $this->id ] = ob_get_flush();
			wp_cache_set( 'social_icons', $cache, 'widget' );
		} else {
			ob_end_flush();
		}
	}

	/**
	 * Display the social icon menu
	 *
	 * @see https://codex.wordpress.org/Function_Reference/wp_nav_menu WordPress Codex.
	 * @param array $settings Settings for this widget instance.
	 * @return void
	 */
	function render( $settings ) {

		// Check if there is a social_icons menu.
		if ( $settings['menu'] > 0 ) :

			// Set Social Menu Arguments.
			$menu_args = array(
				'menu'        => (int) $settings['menu'],
				'container'   => false,
				'menu_class'  => 'social-icons-menu social-icons-menu menu',
				'echo'        => true,
				'fallback_cb' => '',
				'before'      => '',
				'after'       => '',
				'link_before' => '<span class="screen-reader-text">',
				'link_after'  => '</span>',
				'depth'       => 1,
			);

			// Display Social Icons Menu.
			wp_nav_menu( $menu_args );

		endif;
	}

	/**
	 * Display SVG icons in social links menu.
	 *
	 * @param  string  $item_output The menu item output.
	 * @param  WP_Post $item        Menu item object.
	 * @param  int     $depth       Depth of the menu.
	 * @param  array   $args        wp_nav_menu() arguments.
	 * @return string  $item_output The menu item output with social icon.
	 */
	function nav_menu_social_icons( $item_output, $item, $depth, $args ) {

		// Return early if theme adds no support for Widget Bundle.
		if ( ! current_theme_supports( 'foundationpress' ) ) :
			return $item_output;
		endif;

		$theme_support = get_theme_support( 'foundationpress' );

		// Return early if theme adds no support for SVG Icons.
		if ( ! isset( $theme_support[0]['svg_icons'] ) || false === $theme_support[0]['svg_icons'] ) :
			return $item_output;
		endif;

		// Get supported social icons.
		$social_icons = $this->supported_social_icons();

		// Get all Social Icon widgets from the database. $this->option_name gives us the widget name (widget_social-icons).
		$social_icon_widgets = get_option( $this->option_name );

		// Get widget options from current widget. $this->number gives us the widget instance of the current widget.
		$widget_options = isset( $social_icon_widgets[ $this->number ] ) ? $social_icon_widgets[ $this->number ] : null;

		// Get social menu id which is selected in the widget options.
		$social_menu_id = isset( $widget_options['menu'] ) ? (int) $widget_options['menu'] : 0;

		// Change SVG icon inside social links menu if there is supported URL.
		if ( $social_menu_id === $args->menu ) {
			$icon = 'star';
			foreach ( $social_icons as $attr => $value ) {
				if ( false !== strpos( $item_output, $attr ) ) {
					$icon = esc_attr( $value );
				}
			}
			$item_output = str_replace( $args->link_after, '</span>' . $this->get_svg( $icon ), $item_output );
		}

		return $item_output;
	}

	/**
	 * Return SVG markup.
	 *
	 * @param string $icon SVG icon id.
	 * @return string $svg SVG markup.
	 */
	function get_svg( $icon = null ) {
		// Return early if no icon was defined.
		if ( empty( $icon ) ) {
			return;
		}

		// Create SVG markup.
		$svg  = '<svg class="icon icon-' . esc_attr( $icon ) . '" aria-hidden="true" role="img">';
		//$svg .= ' <use xlink:href="' . FOUNDATIONPRESS_PLUGIN_URL . 'assets/icons/social-icons.svg#icon-' . esc_html( $icon ) . '"></use> ';
		$svg .= '</svg>';

		return $svg;
	}

	/**
	 * Returns an array of supported social links (URL and icon name).
	 *
	 * @return array $social_links_icons
	 */
	function supported_social_icons() {
		// Supported social links icons.
		$supported_social_icons = array(
			'500px.com'       => '500px',
			'amazon'          => 'amazon',
			'apple'           => 'apple',
			'bandcamp.com'    => 'bandcamp',
			'behance.net'     => 'behance',
			'bitbucket.org'   => 'bitbucket',
			'codepen.io'      => 'codepen',
			'deviantart.com'  => 'deviantart',
			'digg.com'        => 'digg',
			'dribbble.com'    => 'dribbble',
			'dropbox.com'     => 'dropbox',
			'etsy.com'        => 'etsy',
			'facebook.com'    => 'facebook',
			'feed'            => 'feed',
			'flickr.com'      => 'flickr',
			'foursquare.com'  => 'foursquare',
			'plus.google.com' => 'google-plus',
			'github.com'      => 'github',
			'instagram.com'   => 'instagram',
			'linkedin.com'    => 'linkedin',
			'mailto:'         => 'envelope-o',
			'medium.com'      => 'medium',
			'meetup.com'      => 'meetup',
			'pinterest.com'   => 'pinterest-p',
			'getpocket.com'   => 'get-pocket',
			'reddit.com'      => 'reddit-alien',
			'skype.com'       => 'skype',
			'skype:'          => 'skype',
			'slideshare.net'  => 'slideshare',
			'snapchat.com'    => 'snapchat-ghost',
			'soundcloud.com'  => 'soundcloud',
			'spotify.com'     => 'spotify',
			'stumbleupon.com' => 'stumbleupon',
			'tumblr.com'      => 'tumblr',
			'twitch.tv'       => 'twitch',
			'twitter.com'     => 'twitter',
			'vimeo.com'       => 'vimeo',
			'vine.co'         => 'vine',
			'vk.com'          => 'vk',
			'wordpress.org'   => 'wordpress',
			'wordpress.com'   => 'wordpress',
			'xing.com'        => 'xing',
			'yelp.com'        => 'yelp',
			'youtube.com'     => 'youtube',
		);

		return $supported_social_icons;
	}

	/**
	 * Update Widget Settings
	 *
	 * @param array $new_instance Form Input for this widget instance.
	 * @param array $old_instance Old Settings for this widget instance.
	 * @return array $instance New widget settings
	 */
	function update( $new_instance, $old_instance ) {

		$instance          = $old_instance;
		$instance['title'] = esc_attr( $new_instance['title'] );
		$instance['menu']  = (int) $new_instance['menu'];
		$instance['style'] = esc_attr( $new_instance['style'] );

		$this->delete_widget_cache();

		return $instance;
	}

	/**
	 * Display Widget Settings Form in the Backend
	 *
	 * @param array $instance Settings for this widget instance.
	 * @return void
	 */
	function form( $instance ) {

		// Get Widget Settings.
		$settings = wp_parse_args( $instance, $this->default_settings() );
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'foundationpress' ); ?>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $settings['title'] ); ?>" />
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'menu' ); ?>"><?php esc_html_e( 'Select Social Menu:', 'foundationpress' ); ?></label><br/>
			<select id="<?php echo $this->get_field_id( 'menu' ); ?>" name="<?php echo $this->get_field_name( 'menu' ); ?>">
				<option value="0" <?php selected( $settings['menu'], 0, false ); ?>> </option>
				<?php
				// Display Menu Select Options.
				$nav_menus = wp_get_nav_menus( array( 'hide_empty' => true ) );

				foreach ( $nav_menus as $nav_menu ) :
					printf( '<option value="%s" %s>%s</option>', $nav_menu->term_id, selected( $settings['menu'], $nav_menu->term_id, false ), $nav_menu->name );
				endforeach;
				?>
			</select>
		</p>

		<?php
	}
}
