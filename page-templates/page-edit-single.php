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

	

	<div class="entry-content"><?php $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '-1' ) ); ?>
 
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<?php
global $current_post;

	 if ( isset( $_GET['post'] ) ) {
	     
	    if ( $_GET['post'] == $post->ID )
	    {
	        $current_post = $post->ID;
        	$title = get_the_title();
        	$content = get_the_content();  
 $content = apply_filters('the_content', $content);
 //echo wp_filter_nohtml_kses( $content );

	    }
	}
endwhile; endif; ?>

		<h1><?php the_title(); ?></h1>
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>


		 <?php $post_id = acf_get_valid_post_id();
		echo "post id is ".$post_id; ?>
 
		 
<?php		$settings = array(
				'id' 						=> 'acf-form-edit',
        'post_id'       => 'edit_post', // defaults to current post id
        'post_title'    => true,
        'post_content'  => true,
        'new_post'      => false,
    );
	  acf_form( $settings ); ?>
<?php the_content(); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);

		endwhile; endif; 

		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</main>
</div>
</div>
