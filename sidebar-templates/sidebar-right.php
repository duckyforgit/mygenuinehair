<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 pt-4 widget-area position-sticky" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 pt-4 widget-area" id="right-sidebar" role="complementary">
    <div class="position-sticky" style="top:2rem">
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>
    </div>

</div><!-- #right-sidebar -->
