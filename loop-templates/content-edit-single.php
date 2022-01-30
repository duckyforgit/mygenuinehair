<?php
/**
 * Template Name: Edit Single
 *
 * Template for displaying a dashboard page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
acf_form_head();
get_header();
$container = get_theme_mod( 'understrap_container_type' );



?>
 
 

<div class="container wrapper" id="page-wrapper">
	<div class="row"> 

	<div class="col-md-12 content-area" id="content" tabindex="-1">


			<main class="site-main" id="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
<?php $post_id = acf_get_valid_post_id();
echo "post id is ".$post_id; ?>
		<?php the_content();  
		$settings = array(
				'id' 						=> 'acf-form-edit',
        'post_id'       => 'edit_post', // defaults to current post id
        'post_title'    => true,
        'post_content'  => true,
        'new_post'      => false,
    );
	  acf_form( $settings ); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</main>
</div>
</div>
