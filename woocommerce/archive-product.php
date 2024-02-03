<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>


<main>
    <section class="full-width_padding">
      <div class="full-width_border border-2" style="border-color: #f5e6e0;">
        <div class="shop-banner position-relative ">
          <div class="background-img" style="background-color: #f5e6e0;">
            <img loading="lazy" src="/images/shop/shop_banner_2.png" width="1759" height="420" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
          </div>
 
          <?php  $get_cat =  get_queried_object();  ?>  
          <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
            <h1 class="text-uppercase text-center fw-bold mb-3 mb-xl-4 mb-xl-5"><?php echo $get_cat->name; ?></h1>
            <ul class="d-flex justify-content-center flex-wrap list-unstyled text-uppercase h6">
              
           

              <?php
                  // Get product categories
                  $product_categories = get_terms(array(
                      'taxonomy'   => 'product_cat',
                      'hide_empty' => false,
                  ));

                  if (!empty($product_categories) && !is_wp_error($product_categories)) {
                      foreach ($product_categories as $key=>$category) {
                          $category_link = get_term_link($category);
                          echo '<li class="me-3 me-xl-4 pe-1"><a href="' . esc_url($category_link) . '" class="menu-link menu-link_us-s">' . esc_html($category->name) . '</a></li>';
                      } 
                  } else {
                      echo '<p>No product categories found.</p>';
                  }
                ?>
 
            </ul>
          </div><!-- /.shop-banner__content -->
        </div><!-- /.shop-banner position-relative -->
      </div><!-- /.full-width_border -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>





	<section class="shop-main container d-flex">
      <div class="shop-sidebar side-sticky bg-body" id="shopFilter" style="top: -302.4px;">
        <div class="aside-header d-flex d-lg-none align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <div class="pt-4 pt-lg-0"></div>

        <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
                Product Categories
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"></path>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-1" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
              <div class="accordion-body px-0 pb-0 pt-3">
                <ul class="list list-inline mb-0">
                  
                
                
                <?php 
                 

                 if (!empty($product_categories) && !is_wp_error($product_categories)) {
                  foreach ($product_categories as $key=>$category) {
                      $category_link = get_term_link($category);
                      echo '<li class="list-item"><a href="' . esc_url($category_link) . '" class="menu-link py-1">' . esc_html($category->name) . '</a></li>';

                    } 
                  } 
                    
                ?>

                </ul>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion-item -->


        <div class="accordion" id="color-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-2" aria-expanded="true" aria-controls="accordion-filter-2">
                Color
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"></path>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-2" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">  
 

                <?php  
       
                $terms = get_terms(array(
                    'taxonomy'   => 'pa_color',
                    'hide_empty' => false, 
                ));
                
                foreach ($terms as $term) { 
                  $get_clr =  get_term_meta($term->term_id,'color-attribute', true);
                
                  ?> 
                      <a href="#" class="swatch-color js-filter" style="color: <?php echo $get_clr ; ?>"></a> 
                <?php  } ?>
   

                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->


        <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-size">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
                Sizes
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"></path>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-size" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
               
               <?php  
                $terms = get_terms(array(
                    'taxonomy'   => 'pa_size',
                    'hide_empty' => false, 
                ));
                
                foreach ($terms as $term) {  ?> 
                     <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"><?php echo $term->name ; ?></a>
                <?php  } ?>

                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->


        <div class="accordion" id="brand-filters">
          <div class="accordion-item mb-4 pb-3">
            <h5 class="accordion-header" id="accordion-heading-brand">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
                Brands
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"></path>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
              <div class="search-field multi-select accordion-body px-0 pb-0">
                <select class="d-none" multiple="" name="total-numbers-list">
                
                
                  <option value="1">Adidas</option>
                  <option value="2">Balmain</option>
                  <option value="3">Balenciaga</option>
                  <option value="4">Burberry</option>
                  <option value="5">Kenzo</option>
                  <option value="5">Givenchy</option>
                  <option value="5">Zara</option>
                </select>
                <div class="search-field__input-wrapper mb-3">
                  <input type="text" name="search_text" class="search-field__input form-control form-control-sm border-light border-2" placeholder="Search">
                </div>
                <ul class="multi-select__list list-unstyled">
                
                
                
                <?php
                  // Get product categories
                  $product_brnads = get_terms(array(
                      'taxonomy'   => 'product_brand',
                      'hide_empty' => false,
                  ));

                  if (!empty($product_brnads) && !is_wp_error($product_brnads)) {
                      foreach ($product_brnads as $key=>$brnad) { ?>
                        
                   <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                      <span class="me-auto"><?php echo $brnad->name; ?></span>
                      <span class="text-secondary"><?php echo $brnad->count; ?></span>
                   </li>

                      <?php }  } else {
                      echo '<p>No product brand found.</p>'; } ?>
                
                
                 
                </ul>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->


        <div class="accordion" id="price-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header mb-2" id="accordion-heading-price">
              <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
                Price
                <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"></path>
                  </g>
                </svg>
              </button>
            </h5>
            <div id="accordion-filter-price" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
              <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 24.2424%;"></div><div class="slider-selection" style="left: 24.2424%; width: 20.202%;"></div><div class="slider-track-high" style="right: 0px; width: 55.5556%;"></div></div><div class="tooltip tooltip-main bs-tooltip-top" role="presentation" style="left: 34.3434%;"><div class="arrow"></div><div class="tooltip-inner">$250,450</div></div><div class="tooltip tooltip-min bs-tooltip-top" role="presentation" style="left: 24.2424%;"><div class="arrow"></div><div class="tooltip-inner">$250</div></div><div class="tooltip tooltip-max bs-tooltip-bottom" role="presentation" style="left: 44.4444%; top: 18px;"><div class="arrow"></div><div class="tooltip-inner">$450</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" style="left: 24.2424%;" aria-valuenow="250" aria-valuetext="$250" tabindex="0"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" style="left: 44.4444%;" aria-valuenow="450" aria-valuetext="$450" tabindex="0"></div></div><input class="price-range-slider" type="text" name="price_range" value="250,450" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" data-currency="$" style="display: none;" data-value="250,450">
              <div class="price-range__info d-flex align-items-center mt-2">
                <div class="me-auto">
                  <span class="text-secondary">Min Price: </span>
                  <span class="price-range__min">$250</span>
                </div>
                <div>
                  <span class="text-secondary">Max Price: </span>
                  <span class="price-range__max">$450</span>
                </div>
              </div>
            </div>
          </div><!-- /.accordion-item -->
        </div><!-- /.accordion -->
      </div><!-- /.shop-sidebar -->


	  


	  <div class="shop-list flex-grow-1">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
          <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
            <a href="<?php echo home_url()?>" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
            <a href="<?php echo home_url('shop')?>" class="menu-link menu-link_us-s text-uppercase fw-medium">
              
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	        	       <?php woocommerce_page_title(); ?> 
		        <?php endif; ?>

            </a>
          </div><!-- /.breadcrumb -->

          <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
           
           <?php woocommerce_catalog_ordering(); ?>
          
          <!-- <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="total-number">
              <option selected="">Default Sorting</option>
              <option value="1">Featured</option>
              <option value="2">Best selling</option>
              <option value="3">Alphabetically, A-Z</option>
              <option value="3">Alphabetically, Z-A</option>
              <option value="3">Price, low to high</option>
              <option value="3">Price, high to low</option>
              <option value="3">Date, old to new</option>
              <option value="3">Date, new to old</option>
            </select> -->

            <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>


            <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
              <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
                <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_filter"></use></svg>
              <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
              </button>
            </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
          </div><!-- /.shop-acs -->
        </div><!-- /.d-flex justify-content-between -->

        <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid" >
       
<?php 
        if ( have_posts() ) {
    // Start the loop.
    while ( have_posts() ) {
        the_post();                                                                   
        // Get the product object
        $product = wc_get_product(get_the_ID());
        ?>
        <div class="product-card-wrapper">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                        <div class="swiper-wrapper">
                            <?php
                            // Loop through product gallery images
                            $attachment_ids = $product->get_gallery_image_ids();
                            foreach ($attachment_ids as $attachment_id) {
                                $image_url = wp_get_attachment_url($attachment_id);
                                ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <img loading="lazy" src="<?php echo esc_url($image_url); ?>" width="330" height="400" alt="<?php echo esc_attr(get_the_title()); ?>" class="pc__img">
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                        <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
                    </div>
                    <button class="pc__atc btn add_to_cart_btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                            data-aside="cartDrawer"
                            title="Add To Cart"
                            data-product_id="<?php echo esc_attr($product->get_id()); ?>"
                            data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
                            data-quantity="1">
                        Add To Cart
                    </button>
                </div>

                <div class="pc__info position-relative">
                    <!-- <p class="pc__category"><?php // echo esc_html($product->get_category()); ?></p> -->
                    <h6 class="pc__title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h6>
                    <div class="product-card__price d-flex">
                        <span class="money price"><?php echo wc_price($product->get_price()); ?></span>
                    </div>
                    <div class="product-card__review d-flex align-items-center">
                 

                        <div class="reviews-group d-flex">
                            <?php
                            // Output star ratings
                            $average_rating = $product->get_average_rating();
                            for ($i = 1; $i <= 5; $i++) {
                                $filled_star = $i <= $average_rating ? 'filled' : 'empty';
                                ?>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                              <?php
                            }
                            ?>
                        </div>
                        <span class="reviews-note text-lowercase text-secondary ms-1"><?php echo esc_html($product->get_review_count()) . esc_html__(' reviews', 'your-text-domain'); ?></span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="<?php echo esc_attr__('Add To Wishlist', 'your-text-domain'); ?>">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                </div>
            </div>
        </div>
        <?php
    } 
} else { 
    // If no content, include the "No posts found" template.
    get_template_part( 'content', 'none' );
} ?> 

         
        </div><!-- /.products-grid row -->

 
        
	

        <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
          <a href="#" class="btn-link d-inline-flex align-items-center">
            <svg class="me-1" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm"></use></svg>
            <span class="fw-medium">PREV</span>
          </a>
          <ul class="pagination mb-0">
            <li class="page-item"><a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">2</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">3</a></li>
            <li class="page-item"><a class="btn-link px-1 mx-2" href="#">4</a></li>
          </ul>
          <a href="#" class="btn-link d-inline-flex align-items-center">
            <span class="fw-medium me-1">NEXT</span>
            <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm"></use></svg>
          </a>
        </nav>
      </div>


      
    </section>



<?php




/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
 // do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
