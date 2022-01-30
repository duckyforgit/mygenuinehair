<?php
/**
 * Template Name: Portfolio Page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<style>
	.gallery {
	margin-bottom: 1.5em;
}

.gallery-item {
	display: inline-block;
	text-align: center;
	vertical-align: top;
	width: 100%;

	.gallery-columns-2 & {
		max-width: 50%;
	}

	.gallery-columns-3 & {
		max-width: 33.33%;
	}

	.gallery-columns-4 & {
		max-width: 25%;
	}

	.gallery-columns-5 & {
		max-width: 20%;
	}

	.gallery-columns-6 & {
		max-width: 16.66%;
	}

	.gallery-columns-7 & {
		max-width: 14.28%;
	}

	.gallery-columns-8 & {
		max-width: 12.5%;
	}

	.gallery-columns-9 & {
		max-width: 11.11%;
	}
}

.gallery-caption {
	display: block;
}
	 #wpfront-notification-bar 
    {
        background: #424242;
        background: -moz-linear-gradient(top, #424242 0%, #333333 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#424242), color-stop(100%,#333333));
        background: -webkit-linear-gradient(top, #424242 0%,#333333 100%);
        background: -o-linear-gradient(top, #424242 0%,#333333 100%);
        background: -ms-linear-gradient(top, #424242 0%,#333333 100%);
        background: linear-gradient(to bottom, #424242 0%, #333333 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#424242', endColorstr='#333333',GradientType=0 );
    }

    #wpfront-notification-bar div.wpfront-message
    {
        color: #ffffff;
    }

    #wpfront-notification-bar a.wpfront-button
    {
        background: #00b7ea;
        background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b7ea), color-stop(100%,#009ec3));
        background: -webkit-linear-gradient(top, #00b7ea 0%,#009ec3 100%);
        background: -o-linear-gradient(top, #00b7ea 0%,#009ec3 100%);
        background: -ms-linear-gradient(top, #00b7ea 0%,#009ec3 100%);
        background: linear-gradient(to bottom, #00b7ea 0%, #009ec3 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 );

        color: #ffffff;
    }

    #wpfront-notification-bar-open-button
    {
        background-color: #00b7ea;
    }

    #wpfront-notification-bar  div.wpfront-close 
    {
        border: 1px solid #555555;
        background-color: #555555;
        color: #000000;
    }

    #wpfront-notification-bar  div.wpfront-close:hover 
    {
        border: 1px solid #aaaaaa;
        background-color: #aaaaaa;
    }
	.intro h3 {
    font-size: 1.75rem;
    text-transform: capitalize;
    font-weight: 400;
    line-height: 47px;
}
.intro h3 p {
    margin-bottom: 0.5rem;
}
ul#filters {
    margin: 0;
    padding: 10px;
    list-style: none;
    display: inline-flex;
    justify-content: center;
}
ul#filters li {
    padding: 10px 15px;
}
</style>
<div class="wrapper" id="page-wrapper">

	<div class="container-wide" id="content" tabindex="-1">

		<div class="row">
            <div class="col-md-12 intro"><h3><p>Hi, my name is mark,</p>
<p>I'm a product designer from milan</p>
<p>welcome to my website.</p></h3></div>
			<main class="site-main row" id="main">

                <ul class="col" id="filters"><li id="filter--all" class="filter selected" data-filter="*"><a href="#">All</a></li><li class="filter" data-filter=".mobile-app"><a href="#">Mobile App</a></li><li class="filter" data-filter=".product-design"><a href="#">Product Design</a></li></ul><div class="w-100" id="portfolio-grid" style="position: relative; height: 1412.3px;"><article class="product-design col-md-6 item post-295 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-product-design" id="post-295" style="position: absolute; left: 0px; top: 0px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/stackr/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/oliur-rM7fqrIQb94-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/oliur-rM7fqrIQb94-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/oliur-rM7fqrIQb94-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/stackr/" rel="bookmark">Stackr phone case</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/product-design/"><span>Product Design</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	<article class="product-design col-md-6 item post-294 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-product-design" id="post-294" style="position: absolute; left: 720px; top: 0px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/smart-watch/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/rachit-tank-2cFZ_FB08UM-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/rachit-tank-2cFZ_FB08UM-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/rachit-tank-2cFZ_FB08UM-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/smart-watch/" rel="bookmark">Smart Watch</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/product-design/"><span>Product Design</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	<article class="product-design col-md-6 item post-293 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-product-design" id="post-293" style="position: absolute; left: 0px; top: 470.766px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/ps4-ultra/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/norbert-levajsics-dUx0gwLbhzs-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/norbert-levajsics-dUx0gwLbhzs-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/norbert-levajsics-dUx0gwLbhzs-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/ps4-ultra/" rel="bookmark">PS4 Ultra</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/product-design/"><span>Product Design</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	<article class="product-design col-md-6 item post-292 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-product-design" id="post-292" style="position: absolute; left: 720px; top: 470.766px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/nike-air/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/imani-clovis-LxVxPA1LOVM-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/imani-clovis-LxVxPA1LOVM-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/imani-clovis-LxVxPA1LOVM-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/nike-air/" rel="bookmark">Nike Air</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/product-design/"><span>Product Design</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	<article class="product-design col-md-6 item post-291 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-product-design" id="post-291" style="position: absolute; left: 0px; top: 941.532px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/cocooil/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/deanna-alys-6LBBOwkPzyQ-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/deanna-alys-6LBBOwkPzyQ-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/deanna-alys-6LBBOwkPzyQ-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/cocooil/" rel="bookmark">Cocooil</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/product-design/"><span>Product Design</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	<article class="mobile-app col-md-6 item post-284 portfolio type-portfolio status-publish has-post-thumbnail hentry project_type-mobile-app" id="post-284" style="position: absolute; left: 720px; top: 941.532px;">
<a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/mobile-app/"><img data-src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/daniel-korpai-aUmq85-2V7I-unsplash-1300x850.jpg" class="w-100 lazyloaded" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/daniel-korpai-aUmq85-2V7I-unsplash-1300x850.jpg"><noscript><img class="w-100" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/uploads/2019/11/daniel-korpai-aUmq85-2V7I-unsplash-1300x850.jpg"></noscript></a>	<header class="preview-header">
    
		<h2 class="entry-title"><a href="https://demo.hotwpthemes.com/overstrap-portfolio/portfolio/mobile-app/" rel="bookmark">Mobile App</a></h2><a class="post-cat" href="https://demo.hotwpthemes.com/overstrap-portfolio/project_type/mobile-app/"><span>Mobile App</span></a>		


	</header><!-- .entry-header -->

</article><!-- #post-## -->
	</div>			</main><!-- #main -->

		</div><!-- .row -->
    
    
	</div><!-- #content -->

</div>
<script type="text/javascript">if(typeof wpfront_notification_bar == "function") wpfront_notification_bar({"position":1,"height":0,"fixed_position":"on","animate_delay":0.5,"close_button":false,"button_action_close_bar":false,"auto_close_after":0,"display_after":1,"is_admin_bar_showing":false,"display_open_button":false,"keep_closed":false,"keep_closed_for":0,"position_offset":0,"display_scroll":false,"display_scroll_offset":100});</script>

<script type="text/javascript" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/plugins/block-gallery/dist/js/vendors/flickity.min.js?ver=1.1.6"></script>

<script type="text/javascript" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-includes/js/imagesloaded.min.js?ver=3.2.0"></script>
<script type="text/javascript" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-includes/js/masonry.min.js?ver=3.3.2"></script><script type="text/javascript" src="https://demo.hotwpthemes.com/overstrap-portfolio/wp-content/plugins/block-gallery/dist/js//block-gallery-masonry.min.js?ver=1.1.6"></script>
<!-- using isotope -->
<script>

	jQuery(function($) {

  var $container = $('#portfolio-grid'); //The ID for the list with all the blog posts
  $container.isotope({ //Isotope options, 'item' matches the class in the PHP
    itemSelector: '.item',
    layoutMode: 'masonry'
  });

  //Add the class selected to the item that is clicked, and remove from the others
  var $optionSets = $('#filters'),
    $optionLinks = $optionSets.find('li');

  $optionLinks.click(function() {
    var $this = $(this);
    // don't proceed if already selected
    if ($this.hasClass('selected')) {
      return false;
    }
    var $optionSet = $this.parents('#filters');
    $optionSets.find('.selected').removeClass('selected');
    $this.addClass('selected');

    //When an item is clicked, sort the items.
    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector
    });

    return false;
  });

  $(window).scroll(function(){
    $container.isotope( 'layout' );
  });
  
  $(document).ready(function() {
    $container.isotope( 'layout' );
  });

});
</script>