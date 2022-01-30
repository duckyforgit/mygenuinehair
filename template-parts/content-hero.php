<?php
/**
 * Template part Content Hero
 *
 * This is the template that displays hero image
 *
 *  
 */
?>
<?php $banner_image = get_header_image(); ?>
 
<!-- Background image -->
   <div id="intro" class="bg-image shadow-2-strong" style="background-image: url(<?php echo $banner_image; ?>)">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.68);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3"><?php echo esc_html(get_theme_mod('custom_banner_title_text' ) ); ?></h1>
            <h2 class="h3 mb-4"><?php echo esc_html(get_theme_mod('custom_banner_subtitle_text' ) ); ?></h2>
            <h3 class="h5 mb-4"><?php echo esc_html(get_theme_mod('custom_banner_description_text' ) ); ?></h3>

            <div class="d-flex justify-content-center">
              <a class="btn btn-light btn-lg m-2" href="<?php  echo get_permalink( get_theme_mod ( 'custom_button_left_url' ) ); ?>" role="button" ><?php echo esc_html( get_theme_mod('custom_button_left_text' ) );?>
              </a>
              <a class="btn btn btn-outline-light btn-primary btn-lg m-2" href="<?php  echo get_permalink( get_theme_mod ( 'custom_button_right_url' ) ); ?>" role="button"><?php echo esc_html( get_theme_mod('custom_button_right_text' ) );?></a>
           </div>
          </div>
        </div>
      </div>
    </div>    