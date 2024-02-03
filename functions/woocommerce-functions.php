<?php 

// custom catalog woocommerce 
function custom_woocommerce_catalog_orderby( $options ) {
    // Customize the sorting options as needed
    $options['custom_option'] = 'Custom Option';
    return $options;
}

add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );


// custom title for shop product 
function custom_shop_loop_product_title(){  
    ?>
       <h6 class="pc__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
    <?php 
}


function custom_shop_loop_price() {
    global $product;

    // Get the product object
    $product = wc_get_product(get_the_ID());
    $currency_symbol = get_woocommerce_currency_symbol();
    // Check if the product is on sale
    if ($product->is_on_sale()) {
        // Product is on sale, show both regular and sale prices
        ?>
        <div class="product-card__price d-flex">
            <span class="money price price-old"><?php echo $currency_symbol; ?><?php echo $product->get_regular_price(); ?></span>
            <span class="money price price-sale"><?php echo $currency_symbol; ?><?php echo $product->get_sale_price(); ?></span>
        </div>
        <?php
    } else {
        // Product is not on sale, show regular price only
        ?>
        <div class="product-card__price d-flex">
            <span class="money price"><?php echo $currency_symbol; ?><?php echo $product->get_regular_price(); ?></span>
        </div>
        <?php
    }
} 


// custom shop loop thumbnail 

function custom_shop_loop_product_thumbnail (){ ?> 
<div class="product-card-wrapper">
<div class="product-card mb-3 mb-md-4 mb-xxl-5">
          
  <div class="pc__img-wrapper">
                <div class="swiper-container background-img js-swiper-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-settings="{&quot;resizeObserver&quot;: true}">
                  <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-330px, 0px, 0px);" id="swiper-wrapper-b8933e101a96b4a25" aria-live="polite"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 330px;" role="group" aria-label="1 / 4">
                      <a href="product1_simple.html"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 330px;" role="group" aria-label="2 / 4">
                      <a href="product1_simple.html"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/products/product_1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                    </div><!-- /.pc__img-wrapper -->
                    <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 330px;" role="group" aria-label="3 / 4">
                      <a href="product1_simple.html"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                    </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 330px;" role="group" aria-label="4 / 4">
                      <a href="product1_simple.html"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/products/product_1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                    </div></div>
                  <span class="pc__img-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b8933e101a96b4a25"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg></span>
                  <span class="pc__img-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b8933e101a96b4a25"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

<?php 
   

    
global $product;
$product = wc_get_product(get_the_ID());

?>
 <a class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"
         href="<?php home_url(); ?>?add-to-cart=<?php echo $product->get_id(); ?>&quantity=1"
         data-aside="cartDrawer"
         title="Add To Cart"
         data-product_id="<?php echo esc_attr($product->get_id()); ?>"
        data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
        data-quantity="1">
    Add To Cart
</a> 



             
            </div>


     <div class="pc__info position-relative">

              <?php        
               $categories = get_the_terms(get_the_ID(), 'product_cat'); 
                if ($categories && is_array($categories)) {
                    $category = reset($categories);  ?>
                    <p class="pc__category"><?php echo esc_html($category->name); ?></p>
               <?php } ?>
               


                <?php 
                 custom_shop_loop_product_title();
                 custom_shop_loop_price() ; 

                ?>

              


                <div class="product-card__review d-flex align-items-center">
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star"></use></svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star"></use></svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star"></use></svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star"></use></svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star"></use></svg>
                  </div>
                  <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart"></use></svg>
                </button>
              </div> 

              
 <a href="http://localhost/ecommerce_theme/?add-to-cart=42&quantity=1"> add to cart </a>

    </div>
</div>


    <?php
}


// add_action('woocommerce_shop_loop_item_title','custom_shop_loop_product_title',10) ;  
// add_action('woocommerce_before_shop_loop_item_title','custom_shop_loop_product_thumbnail',10) ;  
// add_action('woocommerce_after_shop_loop_item_title','custom_shop_loop_price',10) ; 





remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10) ; 
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10) ; 
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10) ; 
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10) ; 
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10) ; 






		


// function add_new_product() {  
//     // Check if WooCommerce is active
//     if ( class_exists( 'WooCommerce' ) ) { 
	
	
	
// 		WC()->cart->add_to_cart(56, 1, 66); 
// 	    WC()->cart->add_to_cart(56, 2, 67); 
// 	    WC()->cart->add_to_cart(56, 3, 68); 
// 	    WC()->cart->add_to_cart(56, 4, 69); 
// 	    WC()->cart->add_to_cart(56, 5, 70); 


//       // WC()->cart->add_to_cart($product_id, $quantity, $variation_id); 
	
     
	
		
		
//     }
// }

// // Hook the function to the 'wp' action, which is triggered when WordPress is fully loaded
// add_action( 'wp', 'add_new_product' );

// Function to add a simple product to the cart
// function add_product_to_cart($product_id, $quantity) {
	

	
	
//     $product = wc_get_product($product_id);
//     if ($product) {
//         WC()->cart->add_to_cart($product_id, $quantity);
//     }
	
	
// }












// // Hook the function to the 'wp' action, which is triggered when WordPress is fully loaded
// add_action('wp', 'add_five_star_review_to_product');

// function add_five_star_review_to_product() {
//     // Check if WooCommerce is active
//     if (class_exists('WooCommerce')) {
//         // Set the product ID
//         $product_id = 50;

//         // Check if the product ID is valid
//         if (wc_get_product($product_id)) {
//             // Get the current user
//             $user = wp_get_current_user();

//             // Prepare review data
//             $review_data = array(
//                 'comment_post_ID' => $product_id,
//                 'comment_author' => $user->display_name,
//                 'comment_author_email' => $user->user_email,
//                 'comment_author_url' => '',
//                 'comment_content' => 'This is a 5-star review.',
//                 'comment_type' => 'review',
//                 'comment_parent' => 0,
//                 'user_id' => $user->ID,
//                 'comment_author_IP' => $_SERVER['REMOTE_ADDR'],
//                 'comment_agent' => 'WooCommerce',
//                 'comment_date' => current_time('mysql'),
//                 'comment_approved' => 1,
//             );

//             // Insert the review
//             $comment_id = wp_insert_comment($review_data);

//             // Set the rating
//             add_comment_meta($comment_id, 'rating', 5);
//         }
//     }
// } 



