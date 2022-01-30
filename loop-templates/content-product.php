<?php
/**
 * Partial template for product details in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<style>
	.woocommerce img, .woocommerce-page img {
    height: auto;
    max-width: 100%;
}
.woocommerce div.product div.images img {
    display: block;
    width: 100%;
    height: auto;
    box-shadow: none;
}

.woocommerce div.product div.images .woocommerce-product-gallery__wrapper .zoomImg {
    background-color: #fff;
    opacity: 0;
} 
</style>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		 
<section id="content" class="content">
		
			<div class="woocommerce-notices-wrapper"></div><div id="product-147" class="post-has-thumbnail product type-product post-147 status-publish first instock product_cat-mockups has-post-thumbnail featured shipping-taxable purchasable product-type-simple">

	<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
	<figure class="woocommerce-product-gallery__wrapper">
		<div class="woocommerce-product-gallery__image" style="position: relative; overflow: hidden;">
			<a href="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/dist/img/GenuineHairProduct.jpg">
				<img width="600" height="360" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/dist/img/GenuineHairProduct.jpg" class="wp-post-image" alt="" title="products-3" data-caption=""    ></a><img role="presentation" alt="" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/GenuineHairProduct.jpg" class="zoomImg" style="position: absolute; top: -168.884px; left: -642.179px; opacity: 0; width: 1024px; height: 614px; border: none; max-width: none; max-height: none;"></div>	</figure>
</div>

	<div class="summary entry-summary">
		<h1 class="product_title entry-title">Branding Mockup #3</h1><p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></p>

	
	<form class="cart" action="/product/branding-mockup-3/" method="post" enctype="multipart/form-data" wtx-context="C12ADE09-5A07-4D02-8FA4-66C5F79BEC89">
		
			<div class="quantity">
				<label class="screen-reader-text" for="quantity_60ad632025e21">Branding Mockup #3 quantity</label>
		<input type="number" id="quantity_60ad632025e21" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" inputmode="numeric" wtx-context="5329F766-F689-4E74-88D8-DB31A22A5894">
			</div>
	
		<button type="submit" name="add-to-cart" value="147" class="single_add_to_cart_button button alt">Add to cart</button>

			</form>

	
<div class="product_meta">

	
	
	<span class="posted_in">Category: <a href="/product-category/mockups/" rel="tag">Mockups</a></span>
	
	
</div>
	</div>

	
	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
					<a href="#tab-description">
						Description					</a>
				</li>
							<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
					<a href="#tab-reviews">
						Reviews (0)					</a>
				</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
				
	<h2>Description</h2>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
				<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">
			Reviews		</h2>

					<p class="woocommerce-noreviews">There are no reviews yet.</p>
			</div>

			<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<span id="reply-title" class="comment-reply-title">Be the first to review “Branding Mockup #3” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/antreas/product/branding-mockup-3/#respond" style="display:none;">Cancel reply</a></small></span><form action="/wp-comments-post.php" method="post" id="commentform" class="comment-form" wtx-context="B74F8614-0E9C-4E9C-80FE-78023C3A4C3C"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><div class="comment-form-rating"><label for="rating">Your rating</label><p class="stars">						<span>							<a class="star-1" href="#">1</a>							<a class="star-2" href="#">2</a>							<a class="star-3" href="#">3</a>							<a class="star-4" href="#">4</a>							<a class="star-5" href="#">5</a>						</span>					</p><select name="rating" id="rating" required="" style="display: none;" wtx-context="CF10332D-CC53-4243-AE6B-40B8CC966A11">
						<option value="">Rate…</option>
						<option value="5">Perfect</option>
						<option value="4">Good</option>
						<option value="3">Average</option>
						<option value="2">Not that bad</option>
						<option value="1">Very poor</option>
					</select></div><p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p><p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label><input id="author" name="author" type="text" value="" size="30" required="" wtx-context="025CD881-A39B-4195-B31B-3C535CD5DDC5"></p>
<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label><input id="email" name="email" type="email" value="" size="30" required="" wtx-context="661EDF47-5683-4CEC-8C64-5281CE764759"></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" wtx-context="AEF82B6E-79C6-4EE1-B9C7-2C98AA3D43C8"> <input type="hidden" name="comment_post_ID" value="147" id="comment_post_ID" wtx-context="893B0D0A-139E-418E-801F-585BB89DB587">
<input type="hidden" name="comment_parent" id="comment_parent" value="0" wtx-context="F7E2314B-7987-42BF-9109-7180923AF9EF">
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="b5de1bb3ef" wtx-context="41AE3866-96B0-4E25-9616-7251BB28B8F9"></p><p style="display: none;"></p><input type="hidden" id="ak_js" name="ak_js" value="1621975839216" wtx-context="528378C2-CF3D-47F1-860C-FC46BF3BD3D4"></form>	</div><!-- #respond -->
				</div>
		</div>
	
	<div class="clear"></div>
</div>
			</div>
		
			</div>


	<section class="related products">

		<h2>Related products</h2>

		<ul class="products columns-4">

			
				<li class="post-has-thumbnail product type-product post-145 status-publish first instock product_cat-mockups has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
	<a href="/product/branding-mockup-1/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-6-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-6-300x300.jpg 300w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-6-150x150.jpg 150w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-6-600x600.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Branding Mockup #1</h2>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
</a><a href="?add-to-cart=145" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="145" data-product_sku="" aria-label="Add “Branding Mockup #1” to your cart" rel="nofollow">Add to cart</a></li>

			
				<li class="post-has-thumbnail product type-product post-148 status-publish instock product_cat-mockups has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
	<a href="/product/branding-mockup-4/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-4-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-4-300x300.jpg 300w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-4-150x150.jpg 150w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-4-600x600.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Branding Mockup #4</h2>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
</a><a href="?add-to-cart=148" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="148" data-product_sku="" aria-label="Add “Branding Mockup #4” to your cart" rel="nofollow">Add to cart</a></li>

			
				<li class="post-has-thumbnail product type-product post-146 status-publish instock product_cat-mockups has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
	<a href="/product/branding-mockup-2/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-5-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-5-300x300.jpg 300w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-5-150x150.jpg 150w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-5-600x600.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Branding Mockup #2</h2>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20.00</span></span>
</a><a href="?add-to-cart=146" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="146" data-product_sku="" aria-label="Add “Branding Mockup #2” to your cart" rel="nofollow">Add to cart</a></li>

			
				<li class="post-has-thumbnail product type-product post-150 status-publish last instock product_cat-mockups has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<a href="/product/branding-mockup-6/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-1-300x300.jpg 300w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-1-150x150.jpg 150w, http://localhost:8080/genuine/wp-content/themes/bootstrapWebpack/product-2.jpgproducts-1-600x600.jpg 600w" sizes="(max-width: 300px) 100vw, 300px"><h2 class="woocommerce-loop-product__title">Branding Mockup #6</h2>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10.00</span></span>
</a><a href="?add-to-cart=150" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="150" data-product_sku="" aria-label="Add “Branding Mockup #6” to your cart" rel="nofollow">Add to cart</a></li>

			
		</ul>

	</section>

</div>


		
	</section>
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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
