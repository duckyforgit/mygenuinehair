<?php
/**
 * Template Name: Portfolio Sample Page
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
.no-js img.lazyload { display: none; }
			figure.wp-block-image img.lazyloading { min-width: 150px; }
							.lazyload, .lazyloading { opacity: 0; }
				.lazyloaded {
					opacity: 1;
					transition: opacity 400ms;
					transition-delay: 0ms;
				}
.lazyloaded {
    opacity: 1;
    transition: opacity 400ms;
    transition-delay: 0ms;
}
article blockquote {
    background: #ffffff;
    padding: 2.4em 2.4em 2em;
    margin: 1.8em 0;
    color: #6e6e6e;
    margin-left: calc(var(--gap--vertical)*-1 - 4px);
}
article blockquote::before {
    content: url(Assets/icons/right-quote.svg);
    font-size: 17px;
    display: block;
    width: 33px;
    height: 33px;
    line-height: 26px;
    margin-bottom: 21px;
}
h3.widget-title {
    margin-top: 0;
    margin-bottom: 30px;
    font-size: 20px;
    letter-spacing: -.2px;
    padding-bottom: 24px;
    border-bottom: 1px solid #ddd;
}
.footer-widget ul, aside ul {
    padding: 0;
    list-style: none;
}
.footer-widget ul li, aside ul li {
    padding: 0.5em 0;
    border-bottom: 1px solid #f7f8fa;
}
.footer-widget ul li a, aside ul li a {
    color: #787878;
}
</style>
<main class="site-main" id="main">

				
					
<article class="post-2 page type-page status-publish hentry" id="post-2">

	<header class="entry-header">

		<h1 class="entry-title">Sample Page</h1>
	</header><!-- .entry-header -->

	
	<div class="entry-content">

		
<p>This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>



<blockquote class="wp-block-quote"><p>Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.)</p></blockquote>



<p>…or something like this:</p>



<blockquote class="wp-block-quote"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>



<p>As a new WordPress user, you should go to <a href="https://demo.hotwpthemes.com/overstrap-portfolio/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

					
				
			</main>
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