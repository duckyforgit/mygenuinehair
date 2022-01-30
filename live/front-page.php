<?php
/**
 * The main static front page templage
 *
 * This is the static front page template file in a WordPress theme
 * It is used to display front page.
 * 
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page-container" class="page-content"> 
 <style>#intro .intro-image { background-size: cover;}</style>  
 <?php get_template_part( 'template-parts/content', 'hero-banner-video'); ?> 
  <?php get_template_part( 'template-parts/sections/section', 'client'); ?>
    <hr>
    <?php $enabled_sections = foundationpress_get_sections();
   /* print_r($enabled_sections);
    Array ( 
      [0] => Array ( [id] => services [menu_text] => ) 
      [1] => Array ( [id] => intro [menu_text] => ) 
      [2] => Array ( [id] => about [menu_text] => ) 
      [3] => Array ( [id] => features [menu_text] => ) 
      [4] => Array ( [id] => cta [menu_text] => ) 
      [5] => Array ( [id] => testimonial [menu_text] => ) ) */
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {


          if ( ( $section['id'] == 'intro' )) { ?>
                <?php $disable_intro_section = foundationpress_get_option( 'disable_intro_section' );
                $disable_intro_section = true;
                 
                if( true === $disable_intro_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="blog-posts-wrapper page-section">
                       
                    <?php get_template_part( 'template-parts/sections/section', esc_attr( $section['id'] ) ); ?>
                   
                    </section>
                <?php endif; ?>
                 

            <?php } elseif( $section['id'] == 'about' ) { ?>
                <?php $disable_about_section = foundationpress_get_option( 'disable_about_section' );
                if( true ==$disable_about_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section relative">
                        
                    <?php get_template_part( 'template-parts/sections/section', esc_attr( $section['id'] ) ); ?>
                        
                    </section>
            <?php endif; ?>

      
 

            <?php } elseif( $section['id'] == 'testimonial' ) { ?>
            <?php $disable_testimonial_section = foundationpress_get_option( 'disable_testimonial_section' );
            
            if( true ==$disable_testimonial_section): ?>
                <section id="<?php echo esc_attr( $section['id'] ); ?>">
                <div class="overlay"></div>
                    <div class="content-wrapper">                        
                      <?php //get_template_part( 'template-parts/sections/section', esc_attr( $section['id'] )   ); ?>
                      <?php get_template_part( 'template-parts/sections/section-testimonial-ajax' );?>
                    </div> 
                </section>            
            <?php endif; ?>

           <?php } 
        }
    }
    
 
?>

  
<?php get_template_part( 'template-parts/content', 'survey'); ?>
<?php get_template_part( 'template-parts/content', 'consultation'); ?>
<?php //get_template_part( 'template-parts/sections/section', 'exit-intent'); ?>
 
 
<?php get_footer(); 