<?php

// custom catalog woocommerce 
function custom_woocommerce_catalog_orderby($options)
{
  // Customize the sorting options as needed
  $options['custom_option'] = 'Custom Option';
  return $options;
}

add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby');


// custom title for shop product 
function custom_shop_loop_product_title()
{
?>
  <h6 class="pc__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
  <?php
}


function custom_shop_loop_price()
{
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

function custom_shop_loop_product_thumbnail()
{ ?>
  <div class="product-card-wrapper">
    <div class="product-card mb-3 mb-md-4 mb-xxl-5">

      <div class="pc__img-wrapper">
        <div class="swiper-container background-img js-swiper-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-settings="{&quot;resizeObserver&quot;: true}">
          <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-330px, 0px, 0px);" id="swiper-wrapper-b8933e101a96b4a25" aria-live="polite">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 330px;" role="group" aria-label="1 / 4">
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
            </div>
          </div>
          <span class="pc__img-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b8933e101a96b4a25"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_prev_sm"></use>
            </svg></span>
          <span class="pc__img-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b8933e101a96b4a25"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_next_sm"></use>
            </svg></span>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

        <?php



        global $product;
        $product = wc_get_product(get_the_ID());

        ?>
        <a class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium" href="<?php home_url(); ?>?add-to-cart=<?php echo $product->get_id(); ?>&quantity=1" data-aside="cartDrawer" title="Add To Cart" data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()); ?>" data-quantity="1">
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
        custom_shop_loop_price();

        ?>




        <div class="product-card__review d-flex align-items-center">
          <div class="reviews-group d-flex">
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star"></use>
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star"></use>
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star"></use>
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star"></use>
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star"></use>
            </svg>
          </div>
          <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
        </div>

        <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_heart"></use>
          </svg>
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





remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10); 






		



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



function add_new_damage() {

  if (isset($_POST['submit_product_damage'])) {
      $product_id = sanitize_text_field($_POST['select']);
      $date = sanitize_text_field($_POST['date']);
      $note = sanitize_text_field($_POST['note']);
      $number = $_POST['number'];

      // Save data to the product_damage table
      global $wpdb;
      $table_name = $wpdb->prefix . 'product_damage';
      $data = array(
          'product_id' => $product_id,
          'date' => $date,
          'note' => $note,
          'number' => $number,
      );
      $wpdb->insert($table_name, $data);

      // Get current stock
      $current_stock = get_post_meta($product_id, '_stock', true);

      // Update stock in WooCommerce by subtracting $number
      if ($current_stock >= $number) {
           $update_stock = $current_stock- $number ; 
           wc_update_product_stock($product_id, $update_stock);
      } else {
          // Handle the case where the stock is less than $number, maybe set it to 0 or log an error
          wc_update_product_stock($product_id, 0);
      }
  }
}

add_action('init', 'add_new_damage');



function add_new_purchase() {

  if (isset($_POST['submit_product_purchase'])) {
      $product_id = sanitize_text_field($_POST['select']);
      $date = sanitize_text_field($_POST['date']);
      $note = sanitize_text_field($_POST['note']);
      $number = $_POST['number'];

      // Save data to the product_damage table
      global $wpdb;
      $table_name = $wpdb->prefix . 'product_damage';
      $data = array(
          'product_id' => $product_id,
          'date' => $date,
          'note' => $note,
          'number' => $number,
      );
      $wpdb->insert($table_name, $data);
      // Get current stock
      $current_stock = get_post_meta($product_id, '_stock', true);
      // Update stock in WooCommerce by subtracting $number
      if ($current_stock >= $number) {
           $update_stock = $current_stock + $number ; 
           wc_update_product_stock($product_id, $update_stock);
      } else {
          // Handle the case where the stock is less than $number, maybe set it to 0 or log an error
          wc_update_product_stock($product_id, 0);
      }
  }
}

add_action('init', 'add_new_purchase'); 





/**
 * Add a new input field for Purchase Price in variable product variations
 */
function add_variation_purchase_price_field( $loop, $variation_data, $variation ) {
  woocommerce_wp_text_input( array(
      'id'          => '_purchase_price[' . $loop . ']',
      'label'       => __('Purchase Price', 'woocommerce'),
      'placeholder' => __('Enter Purchase Price', 'woocommerce'),
      'desc_tip'    => 'true',
      'description' => __('Enter the purchase price for this variation.', 'woocommerce'),
      'value'       => get_post_meta( $variation->ID, '_purchase_price', true ),
      'wrapper_class' => 'form-row form-row-full',
  ));
}
add_action( 'woocommerce_variation_options_pricing', 'add_variation_purchase_price_field', 10, 3 );

/**
* Save the purchase price value when the product is saved
*/
function save_variation_purchase_price_field( $variation_id, $i ) {
  $purchase_price = $_POST['_purchase_price'][$i];
  if (isset($purchase_price)) {
      update_post_meta( $variation_id, '_purchase_price', esc_attr( $purchase_price ) );
  }
}
add_action( 'woocommerce_save_product_variation', 'save_variation_purchase_price_field', 10, 2 );


/**
 * Add a new input field for Purchase Price in product variations (simple and variable)
 */
function add_purchase_price_field() {
  woocommerce_wp_text_input( array(
      'id'          => '_purchase_price',
      'label'       => __('Purchase Price', 'woocommerce'),
      'placeholder' => __('Enter Purchase Price', 'woocommerce'),
      'desc_tip'    => 'true',
      'description' => __('Enter the purchase price for this product.', 'woocommerce'),
      'wrapper_class' => 'form-row form-row-full',
      'value'       => get_post_meta( get_the_ID(), '_purchase_price', true ),
  ));
}
add_action( 'woocommerce_product_options_pricing', 'add_purchase_price_field' );

/**
* Save the purchase price value when the product is saved
*/
function save_purchase_price_field( $product_id ) {
  $purchase_price = isset( $_POST['_purchase_price'] ) ? sanitize_text_field( $_POST['_purchase_price'] ) : '';
  update_post_meta( $product_id, '_purchase_price', $purchase_price );
}
add_action( 'woocommerce_process_product_meta', 'save_purchase_price_field' );


function enqueue_dataTables_scripts() {
  // jQuery
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);

  // DataTables CSS and JS
  wp_enqueue_style('datatables-css', 'https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css');
  wp_enqueue_script('datatables-js', 'https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js', array('jquery'), null, true);

  // DataTables Buttons CSS and JS
  wp_enqueue_style('datatables-buttons-css', 'https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css');
  wp_enqueue_script('datatables-buttons-js', 'https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js', array('jquery'), null, true);
  wp_enqueue_script('jszip', 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js', array(), null, true);
  wp_enqueue_script('datatables-buttons-html5', 'https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js', array('jquery', 'jszip'), null, true);
}

add_action('admin_footer', 'enqueue_dataTables_scripts');

function custom_admin_css(){
  ?>
<style>
.custom_widget_box{
  background:red;
  padding:30px 50px ; 
}

.custom_widget_box h2 {
	color: #fff !important;
	font-size: 30px !important; 
}   
.custom_widget_box p {
	color: #fff !important;
	font-size: 20px !important; 
}   
</style>

<?php
}
add_action('admin_footer','custom_admin_css') ; 



// Define the content of the new tab
function custom_on_memo_tab_content() {
  // Add your content here
  echo '<p>This is the content of the On Memo tab.</p>'; 
  ?>
 <h2> start the html here </h2>
<?php

}
add_action( 'woocommerce_account_on_memo_endpoint', 'custom_on_memo_tab_content' );

// Add endpoint for the 'on_memo' tab
function custom_add_on_memo_endpoint() {
  add_rewrite_endpoint( 'on_memo', EP_PAGES );
}
add_action( 'init', 'custom_add_on_memo_endpoint' );



// for practice purposes 

function wporg_add_custom_box() {
	$screens = [ 'post', 'wporg_cpt' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id',                 // Unique ID
			'Custom Meta Box Title',      // Box title
			'wporg_custom_box_html',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );


function wporg_custom_box_html( $post ) {
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="wporg_field" id="wporg_field" class="postbox">
		<option value="">Select something...</option>
		<option value="something">Something</option>
		<option value="else">Else</option>
	</select>
	<?php
}


// Add this function to your theme's functions.php file or a custom plugin.

function set_default_product_profit( $order_id ) {
  // Get the order object
  $order = wc_get_order( $order_id );

  // Check if order exists and it's a new order (not being edited)
  if ( !$order || $order->get_date_created() === null ) {
      return;
  }

  // Get order items
  $items = $order->get_items();

  // Loop through order items
  foreach ( $items as $item_id => $item ) {  
      // Update product_profit field with default value (20)
      $product_id = $item->get_product_id();
      // $product_profit = 20; // Your default value
      $purchase_price = get_post_meta( $product_id, '_purchase_price', true );

      // Get the regular price of the product
      $regular_price = get_post_meta( $product_id, '_regular_price', true );

      // Get the sale price of the product
      $sale_price = get_post_meta( $product_id, '_sale_price', true );

      // Determine the price to use based on whether the product is on sale or not
      $price_to_use = $sale_price ? $sale_price : $regular_price;

      // Calculate profit
      $product_profit = $price_to_use - $purchase_price;
      $number_of_items_ordered = $item->get_quantity();
      

      // You need to adapt this part based on your database structure.
      // Here I'm assuming direct SQL query to update the product_profit field.
      global $wpdb;
      $wpdb->update(
          $wpdb->prefix . 'woocommerce_order_items',
          array(
            'product_profit' => $product_profit ,
            'quantity_orderd' => $number_of_items_ordered 
          ),
          array( 'order_item_id' => $item_id ),
          array( '%d' ,'%d' ),
          array( '%d' )
      );
  }
}

// Hook into order creation event
add_action( 'woocommerce_new_order', 'set_default_product_profit' );




function show_ordered_detailsssss(){
  $order_id = 223; 
  $order = wc_get_order( $order_id );
  $items = $order->get_items(); 

  echo '<pre>' ;
  print_r($items[206]) ;
  
}

add_action('wp_footer','show_ordered_detailsssss') ; 
// // Hook into WooCommerce new order event
// // add_action( 'woocommerce_admin_order_actions_end', 'calculate_and_store_profit_manual_on_backend' );
// add_action( 'woocommerce_new_order', 'calculate_and_store_profit_manual', 10, 1 );

// function calculate_and_store_profit_manual( $order_id ) {
//     // Get the order object
//     $order = wc_get_order( $order_id );

//     // Get line items from the order
//     $items = $order->get_items();

//     // Calculate profit for each item and store it
//     foreach ( $items as $item ) {
//         $product_id = $item->get_product_id();
//         $purchase_price = get_post_meta( $product_id, '_purchase_price', true );

//         // Get the regular price of the product
//         $regular_price = get_post_meta( $product_id, '_regular_price', true );

//         // Get the sale price of the product
//         $sale_price = get_post_meta( $product_id, '_sale_price', true );

//         // Determine the price to use based on whether the product is on sale or not
//         $price_to_use = $sale_price ? $sale_price : $regular_price;

//         // Calculate profit
//         $profit = $price_to_use - $purchase_price;

//         // Store profit in your custom table or wherever you want
//         // For demonstration, let's assume you have a custom table named 'woo_product_profit'
//         global $wpdb;
//         // $table_name = $wpdb->prefix . 'woo_product_profit';

//         $table_name = $wpdb->prefix . 'woocommerce_order_items';


//         // Insert profit into the custom table
//         // $wpdb->insert(
//         //     $table_name,
//         //     array(
//         //         // 'id' => $product_id,
//         //         'profit' => $profit,
//         //         'profit_cat' => 'Product Sell',
//         //         'date' => '2024-04-16 02:30:45',
//         //     )
//         // );


//         $wpdb->update(
//           $table_name,
//           array( 'product_profit' => $total_profit ),
//           array( 'order_id' => $order_id ),
//           array( '%f' ),
//           array( '%d' )
//       );



//     }
// }












// function add_new_product() {  
//   // Check if WooCommerce is active
//   if ( class_exists( 'WooCommerce' ) ) { 



//     WC()->cart->add_to_cart(56, 1, 66); 
//     WC()->cart->add_to_cart(56, 2, 67); 
//     WC()->cart->add_to_cart(56, 3, 68); 
//     WC()->cart->add_to_cart(56, 4, 69); 
//     WC()->cart->add_to_cart(56, 5, 70); 


//     // WC()->cart->add_to_cart($product_id, $quantity, $variation_id); 

   

  
  
//   }
// }

// // Hook the function to the 'wp' action, which is triggered when WordPress is fully loaded
// add_action( 'wp', 'add_new_product' );