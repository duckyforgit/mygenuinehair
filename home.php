<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
//if (  is_home() ) {
    // get_header('inner');
//}
    get_header('inner');
//}

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_home()) : ?>
    <div class="container">
        

        <div class="shadow-2-strong relative module-inside">
                    <?php ?>
           <div class="row">
             
                <header class="col-8 entry-header">
                   <h1><?php single_post_title(); ?></h1>
               </header>
               <div class="col-4 d-flex justify-content-end align-items-center">                
                   <a class="btn btn-sm btn-outline-secondary" href="#">Subscribe</a>
                </div>

           </div>
                  
            <!-- <div class="logo-banner deep-tan-opaque"  >

                <img src="<?php //echo get_template_directory_uri().'/dist/img/canvaPhotos/logo-banner.jpg'; ?>" alt="<?php //echo bloginfo(); ?>">
            </div> -->
        </div> 
    </div>
<?php endif; ?>


   <!--  <div class="<?php //echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row"> -->
            <!-- Do the left sidebar check and opens the primary div -->
            <?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

         
                
            <!-- <div class="container"> -->
              

            <!-- Category Filters for Articles
           ============================================= -->
      <!-- <div id="categories" class="navbar navbar-expand-lg justify-content-between" role="banner">
    <?php
          /* wp_nav_menu(array(
               'theme_location' => 'secondary',
               'container' => false,
               'menu_class' => 'flex-item justify-content-between',
               'fallback_cb' => '__return_false',
               'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
               'depth' => 1,
                //'walker' => new Understrap_WP_Bootstrap_Navwalker()
           ));*/
    ?> 
          </div> -->

            <!--<div id="filters" class="nav-scroller py-1 mb-2">  
                <?php

                    //$categories = get_categories();

                    // search for space and replace with hyphen?>

            <div class="nav d-flex justify-content-between blog-selectors button-group filters-button-group ">

                <button class="p-2 link-secondary is-checked" data-filter="*">All</button>

                <?php  //foreach ( $categories as $category ) : ?>
                    <?php //if ($category !== "Uncategorized" ) : ?>
                        <button class="" data-filter=".<?php //echo $category->slug; ?>"><?php //echo $category->name; ?>
                        </button>
                    <?php //endif; ?>
                <?php //endforeach; ?>

            </div>

            </div>--> <!-- end of filters -->
   
     <!-- Post Content
            ============================================= -->
  <?php
    $args = array(
    'category_name' => 'featured',
    );
    $featured = new WP_Query($args);
    if ($featured->have_posts()) :
                        // Start the Loop.
        while ($featured->have_posts()) :
            $featured->the_post();
            $newline="true";

            
            ?>
  
       <div class="container">

        <div class="featured-post module">

          <div class="row p-4 p-md-5 mb-4 text-white rounded module-inside">

            <div class="col-sm-12 col-lg-8">

                <h2 class="display-4 entry-title text-white">

                <?php the_title(); ?></h2>

                <div class="entry-content" >

                     <p class="lead my-3 text-white">

                     <?php echo understrap_get_excerpt_read_more($newline); ?></p> 

                </div>

            </div>

          </div>

          <!-- <div class="logo-banner deep-tan-opaque">
 
             <img src="<?php //echo get_template_directory_uri().'/dist/img/canvaPhotos/logo-banner.jpg'; ?>" alt="<?php echo bloginfo(); ?>">

         </div> -->

      </div>

    </div>

            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
    <div>
    <?php
    $args2 = array(
        'posts_per_page' => 2,
    'category_name'  => 'featured-subpost',
    );
    $subposts = new WP_Query($args2);
    if ($subposts->have_posts()) :
                        // Start the Loop.
            $newline="true";
        ?> 
    <div class="container"> 
        <div class="row mb-2 align-items-center">
        <?php	while ($subposts->have_posts()) :
            $subposts->the_post();
            $newline = true;
            $posttags = array();
            $posttags = get_the_tags();
            ?>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative align-items-center">
            <div class="col p-4 d-flex flex-column ">               
              <strong class="d-inline-block mb-2 text-primary tag"><?php foreach ($posttags as $tag) {
                    echo $tag->name . ' ';
                                                                   } ?></strong>              
              
                <h3 class="h4 mb-0"><?php the_title(); ?></h3>                                                          
                
              <div class="mb-1 text-muted"><p><?php the_time('F jS, Y'); ?></p> </div>           
              <a href="<?php the_permalink(); ?>" class="stretched-link">Read now</a>             
            </div>
            <div class="col-auto d-none d-xl-block">
                <?php the_post_thumbnail('featured-post'); ?>
            </div>
          </div>
        </div>
     
        <?php endwhile; ?>
      </div>
      </div>
    <?php endif;
     wp_reset_postdata();
    ?>
      </div>            

                <div class="container px-4"> 
                    <div class="row g-5">
                    <div class="col-md-8 pt-4">
                          <h3 class="pt-1 pb-4 fst-italic border-bottom">
                            <!-- <h3 class="pb-4 mt-4 mb-3 fst-italic border-bottom"> -->
                            Find your Good Hair
                          </h3>               
                 
                        <?php if (have_posts()) :
                        // Start the Loop.
                            while (have_posts()) :
                                the_post(); ?>
                            <!-- Posts
                ============================================= -->
                                 
                            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> >
                                <div class="entry-wrapper">
                                    <header class="entry-header">
                                        <div class="relative">
                                        <?php the_title(sprintf('<h2 class="blog-post-title"><a href="%s" rel="bookmark" class="stretched-link">', esc_url(get_the_permalink())), '</a></h2>'); ?>                                        
                                        </div>

                                        <div class="relative">

                                            <p class="blog-post-meta"><?php echo get_the_date();?> by <?php the_author_posts_link();?></p>

                                        </div>

                                    </header>

                                    <div class="entry-content relative" >

                                     <p><?php echo understrap_get_excerpt_read_more(); ?></p>

                                     <a href='<?php echo get_the_permalink(); ?>' class="stretched-link"></a>

                                    </div>
                                     
                                </div>

                            </article> 
                             
                        <!-- </div> -->

                            <?php endwhile;   ?>
  
                        <?php else : ?>
                        <div class="item align-center text-center">

                            <h2>No articles to show</h2>

                        </div> 
                         <!-- show 404 error here -->
                        <?php endif;
                        wp_reset_postdata();  ?>

    
            <!-- The pagination component -->
            <?php understrap_pagination(); ?>
    
            <!-- Do the right sidebar check -->
            <?php get_template_part('global-templates/right-sidebar-check'); ?>
        <!--    </div> -->
            </div>
       </div>
  </div>

 

<?php
get_footer();