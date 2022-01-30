<?php
/**
 * Template Name: Cosmetics Template
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
 
<style>h3 {
font-family:'Allura", handwriting;
}</style>
<div class="wrapper" id="page-wrapper">

	<div class="container-full" id="content" tabindex="-1">


			<main class="site-main" id="main">
				<?php
				//	while ( have_posts() ) {
				//		the_post();

				//		get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
				//		if ( comments_open() || get_comments_number() ) {
				//			comments_template();
				//		}
				//	}
					?>
<style>
	.has-parallax {
    background-attachment: fixed;
}
.has-white-color {
	color: #fff;
}
.cover-image {
    position: relative;
    background-size: cover;
    background-position: 50%;
    min-height: 430px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1em;
    box-sizing: border-box;
}
.cover__gradient-background {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
    opacity: .5;
}
</style>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<!-- <header class="entry-header">

				<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</header> --><!-- .entry-header -->

			<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<div class="ast-cart-menu-wrap">
								<span class="count">
									0								</span>
							</div>
		 
				<div class="entry-content clear" itemprop="text" >
					<div class="d-flex align-items-center justify-content-start has-parallax has-background-gradient cover-image" style="background-image:url('http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/shutterstock_1103646698-1980x1320.jpg'); min-height:850px"><!-- <span aria-hidden="true" class="cover__gradient-background" style="background:linear-gradient(180deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 100%)"></span> -->
						<div class="" style="max-width:1200px; margin:0 auto">
							<h6 class="has-white-color has-text-color">We believe everyone is gifted with "Good Hair."</h6>
							<h1 class="has-white-color has-text-color">We work closely with nature <br><span class="has-white-color">to help you believe it too.</span></h1>
							<p class="has-white-color">Personalized hair care products that target individual hair type.
							</p>
							<div class="btn button">
								<a class="btn btn-outline-light btn-lg m-2" href=" " role="button">Find your Good Hair</a>
								<a class="btn btn-light btn-lg m-2" href=" " role="button">Buy Now</a>
						</div>
					</div>
				</div>
				<div class="wp-block-group alignfull">
					<div class="wp-block-group__inner-container">
						<h3 class="has-text-align-center">A Brush of Perfection</h3>
						<h2 class="has-text-align-center">Add a Flavor to Being a Girl</h2>
						<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
						<div class="woocommerce columns-4 ">
							<ul class="products columns-4">
							<li class="ast-article-single product type-product post-316 status-publish first instock product_cat-paste-masks has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/anti-aging-skin-toner/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/given-skin-toner-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"  ></a>
							</div>
							<div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Paste Masks </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/anti-aging-skin-toner/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Anti-aging Skin Toner</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>40.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-312 status-publish instock product_cat-feminine-deodorants has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/product/coco-body-oil/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/coco-body-oil.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Feminine Deodorants </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/coco-body-oil/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Coco Body Oil</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>60.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-317 status-publish instock product_cat-skin-fresheners has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/daily-moisturiser/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/daily-moisturizer.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Skin Fresheners </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/daily-moisturiser/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Daily Moisturiser</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>45.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-305 status-publish last instock product_cat-skin-milk has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/deep-cleanser/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/deep-cleanser.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Skin Milk </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/deep-cleanser/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Deep Cleanser</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>40.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-307 status-publish first instock product_cat-balms has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/night-care-cream/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Balms </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/night-care-cream/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Night Care Cream</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>25.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-314 status-publish instock product_cat-face-cream has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/rose-essential-oil/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Face Cream </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/rose-essential-oil/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Rose Essential Oil</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>30.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-313 status-publish instock product_cat-anti-aging-cream has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/shaving-kit/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Anti-aging Cream </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/shaving-kit/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Shaving Kit</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>55.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-315 status-publish last instock product_cat-skin-toner has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/skin-whitening-toner/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							 Skin Toner </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/skin-whitening-toner/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Skin Whitening Toner</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>45.00</bdi></span></span>
							</div></li>
							</ul>
							</div>
							<div class="wp-block-group alignfull has-background" style="background-color:#f8fbfc"><div class="wp-block-group__inner-container">
							<div class="wp-block-cover" style="background-image:url(https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/bg-02-free-img.jpg)"><div class="wp-block-cover__inner-container">
							<div class="wp-block-columns are-vertically-aligned-center">
							<div class="wp-block-column is-vertically-aligned-center"></div>
							<div class="wp-block-column is-vertically-aligned-center">
							<h3 class="has-text-align-center has-black-color has-text-color">Be Bold, Be Daring</h3>
							<h2 class="has-text-align-center has-black-color has-text-color">A Whole New Look</h2>
							<p class="has-text-align-center has-black-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
							<div class="wp-block-buttons is-content-justification-center">
							<div class="wp-block-button"><a class="wp-block-button__link">View More</a></div>
							</div>
							</div>
							</div>
							</div></div>
							</div></div>
							<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container">
							<div class="wp-block-columns are-vertically-aligned-center">
							<div class="wp-block-column is-vertically-aligned-center">
							<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img loading="lazy" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/season-sale-1.png" alt="" class="wp-image-663" width="75" height="75" srcset="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/season-sale-1.png 150w, https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/season-sale-1-100x100.png 100w" sizes="(max-width: 75px) 100vw, 75px"></figure></div>
							<h4 class="has-text-align-center">SEASON SALE</h4>
							<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
							</div>
							<div class="wp-block-column is-vertically-aligned-center">
							<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img loading="lazy" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/free-shipping.png" alt="" class="wp-image-658" width="75" height="75" srcset="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/free-shipping.png 150w, https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/free-shipping-100x100.png 100w" sizes="(max-width: 75px) 100vw, 75px"></figure></div>
							<h4 class="has-text-align-center">FREE SHIPPING</h4>
							<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
							</div>
							<div class="wp-block-column is-vertically-aligned-center">
							<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img loading="lazy" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/money-back.png" alt="" class="wp-image-659" width="75" height="75" srcset="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/money-back.png 150w, https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/08/money-back-100x100.png 100w" sizes="(max-width: 75px) 100vw, 75px"></figure></div>
							<h4 class="has-text-align-center">MONEY BACK</h4>
							<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
							</div>
							</div>
							</div></div>
							<figure class="wp-block-gallery columns-7 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-07-free-img.png" alt="Logo" data-id="140" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-07-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-07-free-img/" class="wp-image-140"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-05-free-img.png" alt="Logo" data-id="138" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-05-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-05-free-img/" class="wp-image-138"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-06-free-img.png" alt="Logo" data-id="139" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-06-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-06-free-img/" class="wp-image-139"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-03-free-img.png" alt="Logo" data-id="136" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-03-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-03-free-img/" class="wp-image-136"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-02-free-img.png" alt="Logo" data-id="135" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-02-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-02-free-img/" class="wp-image-135"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-01-free-img.png" alt="Logo" data-id="134" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-01-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-01-free-img/" class="wp-image-134"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="190" height="140" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-04-free-img.png" alt="Logo" data-id="137" data-full-url="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/logo-04-free-img.png" data-link="https://websitedemos.net/cosmetics-store-08/logo-04-free-img/" class="wp-image-137"></figure></li></ul></figure>
							<div class="wp-block-cover alignfull has-parallax" style="background-image:url(https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/02/bg-03-free-img.png);min-height:700px"><div class="wp-block-cover__inner-container">
							<h3 class="has-text-align-center has-black-color has-text-color">Testimonials</h3>
							<h2 class="has-text-align-center has-black-color has-text-color">Our Happy Clients</h2>
							<p class="has-text-align-center has-black-color has-text-color">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.”</p>
							<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img loading="lazy" src="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/03/customer4.jpg" alt="" class="wp-image-425" width="100" height="100" srcset="https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/03/customer4.jpg 200w, https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/03/customer4-150x150.jpg 150w, https://websitedemos.net/cosmetics-store-08/wp-content/uploads/sites/668/2020/03/customer4-100x100.jpg 100w" sizes="(max-width: 100px) 100vw, 100px"></figure></div>
							<p class="has-text-align-center has-black-color has-text-color">Marilyn Keller</p>
							</div></div>
							<div class="wp-block-group alignfull has-white-background-color has-background"><div class="wp-block-group__inner-container">
							<h3 class="has-text-align-center">Blossom into a New You!</h3>
							<h2 class="has-text-align-center">Latest Products</h2>
							<p class="has-text-align-center">Lorem ipsum dolor sit amet.</p>
							<div class="woocommerce columns-4 "><ul class="products columns-4">
							<li class="ast-article-single product type-product post-315 status-publish first instock product_cat-skin-toner has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/skin-whitening-toner/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/beauty-cream.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Skin Toner </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/skin-whitening-toner/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Skin Whitening Toner</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>45.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-313 status-publish instock product_cat-anti-aging-cream has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/shaving-kit/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/shaving-kit.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Anti-aging Cream </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/shaving-kit/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Shaving Kit</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>55.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-314 status-publish instock product_cat-face-cream has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/rose-essential-oil/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/rose-essential-oil.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Face Cream </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/rose-essential-oil/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Rose Essential Oil</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>30.00</bdi></span></span>
							</div></li>
							<li class="ast-article-single product type-product post-307 status-publish last instock product_cat-balms has-post-thumbnail shipping-taxable purchasable product-type-simple">
							<div class="astra-shop-thumbnail-wrap"><a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/night-care-cream/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream-400x400.jpg 400w, http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/cosmetics/night-care-cream.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px"></a></div><div class="astra-shop-summary-wrap"> <span class="ast-woo-product-category">
							Balms </span>
							<a href="http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/product/night-care-cream/" class="ast-loop-product__link"><h2 class="woocommerce-loop-product__title">Night Care Cream</h2></a><div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
							<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>25.00</bdi></span></span>
							</div></li>
							</ul>
							</div>
							</div></div>
							<div class="wp-block-group alignfull has-background" style="background-color:#f8fbfb"><div class="wp-block-group__inner-container">
							<div class="wp-block-columns are-vertically-aligned-center">
							<div class="wp-block-column is-vertically-aligned-center">
							<h2>Sign-up the<br>Makeup Fan Club</h2>
							</div>
							<div class="wp-block-column is-vertically-aligned-center"><div class="wpforms-container " id="wpforms-581"><form id="wpforms-form-581" class="wpforms-validate wpforms-form" data-formid="581" method="post" enctype="multipart/form-data" action="/cosmetics-store-08/" data-token="8dd234b16c06003561e2b15b8cd4238a" novalidate="novalidate"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-field-container"><div id="wpforms-581-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-581-field_1">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-581-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="Enter your email address" required=""></div></div><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="581"><input type="hidden" name="wpforms[author]" value="122"><input type="hidden" name="wpforms[post_id]" value="542"><button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-581" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Subscribe">Subscribe</button></div></form>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->
</main><!-- #main -->