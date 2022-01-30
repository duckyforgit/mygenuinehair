<?php
/**
 * Template Name: Test Page Template
 *
 * Template for displaying a corporate page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="page-wrapper">

	<div class="" id="content" tabindex="-1">


			<main class="site-main" id="main">
				<?php the_content(); ?>
         <?php echo do_shortcode('greeting'); ?>
			</main>

	</div>
</div>


<?php
get_footer();