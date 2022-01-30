<?php
/**
 * WooCommerce Header Cart.
 *
 * @package understrap
 */
if ( ! function_exists( 'woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart	 *
	 * 
	 */
	function woocommerce_header_cart() {
		 
			if ( is_cart() ) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
			?>
		<ul id="site-header-cart" class="site-header-cart menu">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php storefront_cart_link(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
			<?php
		
	}
}