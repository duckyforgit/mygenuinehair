<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/rest-api.php',                        // Custom rest api.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/custom-header.php',
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/template-functions.php',
	'/gutenberg/custom-blocks.php',
	'/class-wp-bootstrap-5-navwalker.php',

	'/rest-post-nonce.php'
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
	$understrap_includes[] = '/woocommerce/cart/header-cart.php';
	//$understrap_includes[] = '/woocommerce/cart/cart.php';
	//$understrap_includes[] = '/woocommerce/cart/cart-empty.php';
	//$understrap_includes[] = '/woocommerce/cart/proceed-to-checkout-button.php';
	//$understrap_includes[] = '/woocommerce/storefront-woocommerce-hooks.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

if ( ! function_exists( 'workroom1128_setup_theme' ) ) :
	function workroom1128_setup_theme() {
		 
	}
	add_action( 'after_setup_theme', 'workroom1128_setup_theme' );
endif;

/*  add tab linking to another page in member subscription */

add_filter( 'pms_member_account_tabs', 'pmsc_change_member_account_tabs', 20, 2 );
function pmsc_change_member_account_tabs( $tabs, $args ) {
    $tabs['add-posts-tab'] = __( 'Add Blog Posts', 'paid-member-subscriptions' );
 
    return $tabs;
}
 
add_filter( 'pms_account_get_tab_url', 'pmsc_get_tab_url', 20, 2 );
function pmsc_get_tab_url( $url, $tab ) {
    if ( $tab == 'add-posts-tab' )
        return home_url( 'add-posts' );
 
    return $url;
}