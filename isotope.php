<?php
/**
 * The main template file blog with boxed columns
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="index-wrapper" class="wrapper">
	<div id="content" tabindex="-1" class="container">
 
<div id="filters" class="">  
<?php 
	$categories = get_categories();  

	// search for space and replace with hyphen?>
  <div class="blog-selectors button-group filters-button-group">
      <button class=" button is-checked" data-filter="*">All</button>
 			<?php  foreach ( $categories as $category ) : ?>
 				<?php if ($category->name !== "Uncategorized" ) : ?>
      	<button class="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?>
      	</button>
      <?php endif; ?>
    	<?php  endforeach;   ?>
  </div>  
</div>

<?php if ( have_posts() ) : ?>
 
	<div class="grid grid-x" >
  
 
		<?php while ( have_posts() ) : the_post(); ?>

		 	<?php $terms = get_the_terms(get_the_ID(), 'category');   
	    if ($terms && ! is_wp_error($terms)) :
	      $tslugs_arr = array();
	      $string = "";
	      foreach ($terms as $term) {      
	        $string .= $term->slug;
	        $string .= " "; 
	      }     
	    endif; ?>

    <div class="grid-item <?php echo $string; ?>" data-category="<?php echo $string; ?>" data-equalizer="top" data-equalize-on="medium">   
   		<article id="post-<?php the_ID(); ?>" <?php post_class('list-content'); ?> >
		   	<div class="post-thumbnail">
		 
					<a class="wp-post-image-link" href="<?php the_permalink();?>" title="" rel="bookmark" >
						<?php the_post_thumbnail('featured-blog'); ?>
					</a>
				</div>
    
	      <header class="entry-header"  data-equalizer-watch="top"  >
					<div class="entry-meta">
						<span class="entry-meta__date">
							<?php //foundationpress_entry_meta_date(); ?> 
						</span>
						<span class="entry-meta__category">
							<?php the_category(' | '); ?>
						</span>
					</div>		  			 
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<!-- <p><?php //echo "Permalink: " . get_permalink(); ?></p> -->
			  	<div class="entry-content" > 	
				 		<?php the_excerpt();?>				 			
				 	</div>
				</header>
				 
			 	<div class="entry-link"><?php //echo foundationpress_continue_reading_link(); ?></div>

			 </article> 
			</div>

		<?php endwhile;   ?>
  
 		<?php else : ?>
    <div class="item align-center text-center">
   		<h2>No articles to show</h2>
   	</div> 
     <!-- show 404 error here -->
<?php endif;   
wp_reset_postdata();  ?> 
  </div><!-- end of filter -->
 </div>
</div>  

<?php get_footer();