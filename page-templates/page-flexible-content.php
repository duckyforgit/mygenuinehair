<?php
/**
 * Template Name: Flexible Content
 * Template Post Type: post
 *
 * This template can be used to display flexible ACF content
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' ); ?>
 
<div class="wrapper" id="single-wrapper in-single-php">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="row">
			<div class="col-sm-12"> 

?><?php if( have_rows('flexible') ): ?>
<?php while( have_rows('flexible') ): the_row(); ?>
		<?php if (get_row_layout() == 'columns_section'): ?>
 		<!-- 	<pre> --><?php //print_r( get_sub_field( 'columns' )); ?><!-- </pre>  -->
 		<?php 	$columns = get_sub_field('columns'); ?>
		<div class="row"> 
 		
 		<?php foreach($columns as $column): ?>
 			
				<div class="col-lg-4"> 
		 			<h3> <?php echo $column['title'];?></h3>
		 			<p> <?php echo $column['content'];?></p>
		 			<?php if($column['image']): ?>
		 					<img src="<?php echo $column['image']['url'];?>" alt="" width="300">
		 			<?php endif; ?>
				</div>
		
 		<?php endforeach; ?>


		</div>

		<?php endif; ?>


		<?php if (get_row_layout() == 'textarea_with_image'):

				$title = get_sub_field('title');
				$content = get_sub_field('content');
				$image = get_sub_field('image');
				//echo print_r($image);
				$picture = $image['sizes']['medium_large'];
				$side = get_sub_field('image_side');
				echo "side is ".$side;
			?>

			<div class="row">
				
			<?php if ($side == 'left') : ?>
				<div class="col-sm-12 col-lg-6">
					<img src="<?php echo $picture; ?>" alt="" >
					

				</div>
				<div class="col-sm-12 col-lg-6">
					<h3> <?php echo $title; ?></h3>
					<?php echo $content; ?>
				</div>

			<?php else: ?>
				  <div class="col-sm-12 col-lg-6">
					<h3> <?php echo $title; ?></h3>
					<?php echo $content; ?>
				</div>
				<div class="col-sm-12 col-lg-6">
					<img src="<?php echo $picture; ?>" alt="" >
					

				</div> 
			<?php endif; ?>

				</div>
		 

		<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
			</div>
		</div>
	</div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

	</article>
	</div>
</div>



<?php
get_footer();