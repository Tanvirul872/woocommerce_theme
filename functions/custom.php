<?php


// Register Custom Post Type
function custom_supplier_post_type() {

    $labels = array(
        'name'                  => _x( 'Suppliers', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Supplier', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Suppliers', 'text_domain' ),
        'name_admin_bar'        => __( 'Supplier', 'text_domain' ),
        'archives'              => __( 'Supplier Archives', 'text_domain' ),
        'attributes'            => __( 'Supplier Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Supplier:', 'text_domain' ),
        'all_items'             => __( 'All Suppliers', 'text_domain' ),
        'add_new_item'          => __( 'Add New Supplier', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Supplier', 'text_domain' ),
        'edit_item'             => __( 'Edit Supplier', 'text_domain' ),
        'update_item'           => __( 'Update Supplier', 'text_domain' ),
        'view_item'             => __( 'View Supplier', 'text_domain' ),
        'view_items'            => __( 'View Suppliers', 'text_domain' ),
        'search_items'          => __( 'Search Supplier', 'text_domain' ),
        'not_found'             => __( 'Supplier Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Supplier Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into supplier', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this supplier', 'text_domain' ),
        'items_list'            => __( 'Suppliers list', 'text_domain' ),
        'items_list_navigation' => __( 'Suppliers list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter suppliers list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Supplier', 'text_domain' ),
        'description'           => __( 'Supplier Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' ),
        // 'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'supplier', $args );

}
add_action( 'init', 'custom_supplier_post_type', 0 );



// Add Meta Box
function custom_supplier_meta_box() {
    add_meta_box(
        'custom_supplier_meta_box',
        __('Supplier Meta Box', 'text_domain'),
        'custom_supplier_meta_box_callback',
        'supplier', // Custom post type name
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'custom_supplier_meta_box');

// Meta Box Callback Function
function custom_supplier_meta_box_callback($post) {
    // Retrieve existing meta values if they exist
    $field1_value = get_post_meta($post->ID, '_custom_supplier_email', true);
    $field2_value = get_post_meta($post->ID, '_custom_supplier_phone', true);
    $field3_value = get_post_meta($post->ID, '_custom_supplier_address', true);

    // Output fields
    ?>
    <p>

    <?php print_r('hello') ; ?>
        <label for="custom_supplier_email"><?php _e('Supplier Mail:', 'text_domain'); ?></label><br>
        <input type="email" id="custom_supplier_email" name="custom_supplier_email" value="<?php echo esc_attr($field1_value); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="custom_supplier_phone"><?php _e('Supplier Phone:', 'text_domain'); ?></label><br>
        <input type="number" id="custom_supplier_phone" name="custom_supplier_phone" value="<?php echo esc_attr($field2_value); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="custom_supplier_address"><?php _e('Supplier Address:', 'text_domain'); ?></label><br>
        <textarea name="custom_supplier_address" id="" cols="30" rows="10" style="width: 100%;">
             <?php echo esc_attr($field3_value); ?>
        </textarea>
    </p>
    <?php
}

// Save Meta Box Data
function save_custom_supplier_meta_box_data($post_id) {

    // $post_id = 229 ;


    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    // Save field data
    if (isset($_POST['custom_supplier_email'])) {
        update_post_meta($post_id, '_custom_supplier_email', sanitize_text_field($_POST['custom_supplier_email']));
    }
    if (isset($_POST['custom_supplier_phone'])) {
        update_post_meta($post_id, '_custom_supplier_phone', sanitize_text_field($_POST['custom_supplier_phone']));
    }
    if (isset($_POST['custom_supplier_address'])) {
        update_post_meta($post_id, '_custom_supplier_address', sanitize_text_field($_POST['custom_supplier_address']));
    }
}
add_action('save_post', 'save_custom_supplier_meta_box_data');






// // service custom post type  

// add_action( 'init', 'create_service_post_type' );

// function create_service_post_type() {
//     $labels = array(
//         'name'                  => __( 'Services', 'bongo_theme' ),
//         'singular_name'         => __( 'Service', 'bongo_theme' ),
//         'menu_name'             => __( 'Services', 'bongo_theme' ),
//         'all_items'             => __( 'All Services', 'bongo_theme' ),
//         'add_new'               => __( 'Add New', 'bongo_theme' ),
//         'add_new_item'          => __( 'Add New Service', 'bongo_theme' ),
//         'edit_item'             => __( 'Edit Service', 'bongo_theme' ),
//         'new_item'              => __( 'New Service', 'bongo_theme' ),
//         'view_item'             => __( 'View Service', 'bongo_theme' ),
//         'search_items'          => __( 'Search Services', 'bongo_theme' ),
//         'not_found'             => __( 'No services found', 'bongo_theme' ),
//         'not_found_in_trash'    => __( 'No services found in trash', 'bongo_theme' ),
//         'parent_item_colon'     => __( 'Parent Service:', 'bongo_theme' ),
//         'featured_image'        => __( 'Featured image', 'bongo_theme' ),
//         'set_featured_image'    => __( 'Set featured image', 'bongo_theme' ),
//         'remove_featured_image' => __( 'Remove featured image', 'bongo_theme' ),
//         'use_featured_image'    => __( 'Use as featured image', 'bongo_theme' ),
//         'archives'              => __( 'Service archives', 'bongo_theme' ),
//         'insert_into_item'      => __( 'Insert into service', 'bongo_theme' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this service', 'bongo_theme' ),
//         'filter_items_list'     => __( 'Filter services list', 'bongo_theme' ),
//         'items_list_navigation' => __( 'Services list navigation', 'bongo_theme' ),
//         'items_list'            => __( 'Services list', 'bongo_theme' ),
//     );
//     $args = array(
//         'label'                 => __( 'Service', 'bongo_theme' ),
//         'description'           => __( 'Services offered by our company', 'bongo_theme' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'thumbnail' ),
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'hierarchical'          => false,
//         'exclude_from_search'   => false,
//         'show_in_rest'          => true,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//         'rewrite'               => array( 'slug' => 'service' ),
//     );
//     register_post_type( 'service', $args );
// }



// // review custom post type 
// add_action( 'init', 'create_review_post_type' );

// function create_review_post_type() {
//     $labels = array(
//         'name'                  => __( 'Reviews', 'bongo_theme' ),
//         'singular_name'         => __( 'Review', 'bongo_theme' ),
//         'menu_name'             => __( 'Reviews', 'bongo_theme' ),
//         'all_items'             => __( 'All Reviews', 'bongo_theme' ),
//         'add_new'               => __( 'Add New', 'bongo_theme' ),
//         'add_new_item'          => __( 'Add New Reviews', 'bongo_theme' ),
//         'edit_item'             => __( 'Edit Review', 'bongo_theme' ),
//         'new_item'              => __( 'New Review', 'bongo_theme' ),
//         'view_item'             => __( 'View Review', 'bongo_theme' ),
//         'search_items'          => __( 'Search Review', 'bongo_theme' ),
//         'not_found'             => __( 'No Reviews found', 'bongo_theme' ),
//         'not_found_in_trash'    => __( 'No Reviews found in trash', 'bongo_theme' ),
//         'parent_item_colon'     => __( 'Parent Review:', 'bongo_theme' ),
//         'featured_image'        => __( 'Featured image', 'bongo_theme' ),
//         'set_featured_image'    => __( 'Set featured image', 'bongo_theme' ),
//         'remove_featured_image' => __( 'Remove featured image', 'bongo_theme' ),
//         'use_featured_image'    => __( 'Use as featured image', 'bongo_theme' ),
//         'archives'              => __( 'Reviews archives', 'bongo_theme' ),
//         'insert_into_item'      => __( 'Insert into Reviews', 'bongo_theme' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this Reviews', 'bongo_theme' ),
//         'filter_items_list'     => __( 'Filter Reviews list', 'bongo_theme' ),
//         'items_list_navigation' => __( 'Reviews list navigation', 'bongo_theme' ),
//         'items_list'            => __( 'Reviews list', 'bongo_theme' ),
//     );
//     $args = array(
//         'label'                 => __( 'Review', 'bongo_theme' ),
//         'description'           => __( 'Reviews', 'bongo_theme' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'thumbnail' ),
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'hierarchical'          => false,
//         'exclude_from_search'   => false,
//         'show_in_rest'          => true,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//         'rewrite'               => array( 'slug' => 'review' ),
//     );
//     register_post_type( 'review', $args );
// }





// //Our Clients custom post type 
// add_action( 'init', 'create_client_post_type' );

// function create_client_post_type() {
//     $labels = array(
//         'name'                  => __( 'Clients', 'bongo_theme' ),
//         'singular_name'         => __( 'Client', 'bongo_theme' ),
//         'menu_name'             => __( 'Clients', 'bongo_theme' ),
//         'all_items'             => __( 'All Client', 'bongo_theme' ),
//         'add_new'               => __( 'Add New', 'bongo_theme' ),
//         'add_new_item'          => __( 'Add New Clients', 'bongo_theme' ),
//         'edit_item'             => __( 'Edit Client', 'bongo_theme' ),
//         'new_item'              => __( 'New Client', 'bongo_theme' ),
//         'view_item'             => __( 'View Client', 'bongo_theme' ),
//         'search_items'          => __( 'Search Client', 'bongo_theme' ),
//         'not_found'             => __( 'No Clients found', 'bongo_theme' ),
//         'not_found_in_trash'    => __( 'No Clients found in trash', 'bongo_theme' ),
//         'parent_item_colon'     => __( 'Parent Client:', 'bongo_theme' ),
//         'featured_image'        => __( 'Featured image', 'bongo_theme' ),
//         'set_featured_image'    => __( 'Set featured image', 'bongo_theme' ),
//         'remove_featured_image' => __( 'Remove featured image', 'bongo_theme' ),
//         'use_featured_image'    => __( 'Use as featured image', 'bongo_theme' ),
//         'archives'              => __( 'Clients archives', 'bongo_theme' ),
//         'insert_into_item'      => __( 'Insert into Clients', 'bongo_theme' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this Clients', 'bongo_theme' ),
//         'filter_items_list'     => __( 'Filter Clients list', 'bongo_theme' ),
//         'items_list_navigation' => __( 'Clients list navigation', 'bongo_theme' ),
//         'items_list'            => __( 'Clients list', 'bongo_theme' ),
//     );
//     $args = array(
//         'label'                 => __( 'Client', 'bongo_theme' ),
//         'description'           => __( 'Clients', 'bongo_theme' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'thumbnail' ),
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'hierarchical'          => false,
//         'exclude_from_search'   => false,
//         'show_in_rest'          => true,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//         'rewrite'               => array( 'slug' => 'our-client' ),
//     );
//     register_post_type( 'ourclient', $args );
// }




// //Slider custom post type 
// add_action( 'init', 'create_slider_post_type' );

// function create_slider_post_type() {
//     $labels = array(
//         'name'                  => __( 'Slider', 'bongo_theme' ),
//         'singular_name'         => __( 'Slider', 'bongo_theme' ),
//         'menu_name'             => __( 'Sliders', 'bongo_theme' ),
//         'all_items'             => __( 'All Sliders', 'bongo_theme' ),
//         'add_new'               => __( 'Add New Slider', 'bongo_theme' ),
//         'add_new_item'          => __( 'Add New Slider', 'bongo_theme' ),
//         'edit_item'             => __( 'Edit Slider', 'bongo_theme' ),
//         'new_item'              => __( 'New Slider', 'bongo_theme' ),
//         'view_item'             => __( 'View Slider', 'bongo_theme' ),
//         'search_items'          => __( 'Search Slider', 'bongo_theme' ),
//         'not_found'             => __( 'No Slider found', 'bongo_theme' ),
//         'not_found_in_trash'    => __( 'No Slider found in trash', 'bongo_theme' ),
//         'parent_item_colon'     => __( 'Parent Slider:', 'bongo_theme' ),
//         'featured_image'        => __( 'Featured image', 'bongo_theme' ),
//         'set_featured_image'    => __( 'Set featured image', 'bongo_theme' ),
//         'remove_featured_image' => __( 'Remove featured image', 'bongo_theme' ),
//         'use_featured_image'    => __( 'Use as featured image', 'bongo_theme' ),
//         'archives'              => __( 'Slider archives', 'bongo_theme' ),
//         'insert_into_item'      => __( 'Insert into Slider', 'bongo_theme' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'bongo_theme' ),
//         'filter_items_list'     => __( 'Filter Slider list', 'bongo_theme' ),
//         'items_list_navigation' => __( 'Slider list navigation', 'bongo_theme' ),
//         'items_list'            => __( 'Slider list', 'bongo_theme' ),
//     );
//     $args = array(
//         'label'                 => __( 'Slider', 'bongo_theme' ),
//         'description'           => __( 'Slider', 'bongo_theme' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'thumbnail' ),
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'hierarchical'          => false,
//         'exclude_from_search'   => false,
//         'show_in_rest'          => true,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//         'rewrite'               => array( 'slug' => 'slider' ),
//     );
//     register_post_type( 'slider', $args );
// }





// //Our products custom post type 
// add_action( 'init', 'create_products_post_type' );

// function create_products_post_type() {
//     $labels = array(
//         'name'                  => __( 'Products', 'bongo_theme' ),
//         'singular_name'         => __( 'Product', 'bongo_theme' ),
//         'menu_name'             => __( 'Products', 'bongo_theme' ),
//         'all_items'             => __( 'All Product', 'bongo_theme' ),
//         'add_new'               => __( 'Add New', 'bongo_theme' ),
//         'add_new_item'          => __( 'Add New Product', 'bongo_theme' ),
//         'edit_item'             => __( 'Edit Product', 'bongo_theme' ),
//         'new_item'              => __( 'New Product', 'bongo_theme' ),
//         'view_item'             => __( 'View Product', 'bongo_theme' ),
//         'search_items'          => __( 'Search Product', 'bongo_theme' ),
//         'not_found'             => __( 'No Products found', 'bongo_theme' ),
//         'not_found_in_trash'    => __( 'No Products found in trash', 'bongo_theme' ),
//         'parent_item_colon'     => __( 'Parent Product:', 'bongo_theme' ),
//         'featured_image'        => __( 'Featured image', 'bongo_theme' ),
//         'set_featured_image'    => __( 'Set featured image', 'bongo_theme' ),
//         'remove_featured_image' => __( 'Remove featured image', 'bongo_theme' ),
//         'use_featured_image'    => __( 'Use as featured image', 'bongo_theme' ),
//         'archives'              => __( 'Product archives', 'bongo_theme' ),
//         'insert_into_item'      => __( 'Insert into Product', 'bongo_theme' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this Product', 'bongo_theme' ),
//         'filter_items_list'     => __( 'Filter Product list', 'bongo_theme' ),
//         'items_list_navigation' => __( 'Product list navigation', 'bongo_theme' ),
//         'items_list'            => __( 'Product list', 'bongo_theme' ),
//     );
//     $args = array(
//         'label'                 => __( 'Product', 'bongo_theme' ),
//         'description'           => __( 'Products', 'bongo_theme' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'thumbnail' ),
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'hierarchical'          => false,
//         'exclude_from_search'   => false,
//         'show_in_rest'          => true,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//         'rewrite'               => array( 'slug' => 'our-product' ),
//     );
//     register_post_type( 'ourproduct', $args );
// }


// brands taxonomy function  

function create_product_brand_taxonomy()
{
    $labels = array(
        'name'              => _x('Brands', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Brand', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Brands', 'textdomain'),
        'all_items'         => __('All Brands', 'textdomain'),
        'parent_item'       => __('Parent Brand', 'textdomain'),
        'parent_item_colon' => __('Parent Brand:', 'textdomain'),
        'edit_item'         => __('Edit Brand', 'textdomain'),
        'update_item'       => __('Update Brand', 'textdomain'),
        'add_new_item'      => __('Add New Brand', 'textdomain'),
        'new_item_name'     => __('New Brand Name', 'textdomain'),
        'menu_name'         => __('Brands', 'textdomain'),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,  // Set this to true if you want a hierarchical taxonomy like categories
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product_brand'),  // Change 'product_brand' to your desired slug
    );

    register_taxonomy('product_brand', 'product', $args);
}

add_action('init', 'create_product_brand_taxonomy');





// Register Custom Post Type
function register_expense_post_type()
{
    $labels = array(
        'name'               => _x('Expenses', 'post type general name', 'textdomain'),
        'singular_name'      => _x('Expense', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('Expenses', 'admin menu', 'textdomain'),
        'name_admin_bar'     => _x('Expense', 'add new on admin bar', 'textdomain'),
        'add_new'            => _x('Add New', 'expense', 'textdomain'),
        'add_new_item'       => __('Add New Expense', 'textdomain'),
        'new_item'           => __('New Expense', 'textdomain'),
        'edit_item'          => __('Edit Expense', 'textdomain'),
        'view_item'          => __('View Expense', 'textdomain'),
        'all_items'          => __('All Expenses', 'textdomain'),
        'search_items'       => __('Search Expenses', 'textdomain'),
        'parent_item_colon'  => __('Parent Expenses:', 'textdomain'),
        'not_found'          => __('No expenses found.', 'textdomain'),
        'not_found_in_trash' => __('No expenses found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'textdomain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'expense'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array(''),
    );

    register_post_type('expense', $args);
}
add_action('init', 'register_expense_post_type');

// Register Custom Taxonomy
function register_expense_category_taxonomy()
{
    $labels = array(
        'name'                       => _x('Expense Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'              => _x('Expense Category', 'taxonomy singular name', 'textdomain'),
        'search_items'               => __('Search Expense Categories', 'textdomain'),
        'popular_items'              => __('Popular Expense Categories', 'textdomain'),
        'all_items'                  => __('All Expense Categories', 'textdomain'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Expense Category', 'textdomain'),
        'update_item'                => __('Update Expense Category', 'textdomain'),
        'add_new_item'               => __('Add New Expense Category', 'textdomain'),
        'new_item_name'              => __('New Expense Category Name', 'textdomain'),
        'separate_items_with_commas' => __('Separate expense categories with commas', 'textdomain'),
        'add_or_remove_items'        => __('Add or remove expense categories', 'textdomain'),
        'choose_from_most_used'      => __('Choose from the most used expense categories', 'textdomain'),
        'not_found'                  => __('No expense categories found.', 'textdomain'),
        'menu_name'                  => __('Expense Categories', 'textdomain'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'expense-category'),
    );

    register_taxonomy('expense_category', 'expense', $args);
}
add_action('init', 'register_expense_category_taxonomy');








// dashboard widget  add and remove 

function custom_dashboard_widget_content()
{
    ?>
     <!-- dashboard widget 1 -->
     <div class="custom_widget_box">
          <h2> Today Sold </h2>
          <p>0</p>
     </div>
    <?php
}


function custom_dashboard_widget_content2()
{
    ?>
     <!-- dashboard widget 1 -->
     <div class="custom_widget_box">
          <h2>  Today Expense  </h2>
          <p>0</p>
     </div>
    <?php
}

function custom_dashboard_widget_content3()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Purchase Cost  </h2>
         <p>0</p>
    </div>
   <?php
}



function custom_dashboard_widget_content_4()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Purchase Cost  </h2>
         <p>0</p>
    </div>
   <?php
}


function custom_dashboard_widget_content_5()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Purchase Cost  </h2>
         <p>0</p>
    </div>
   <?php
}


function custom_dashboard_widget_content6()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Purchase Cost  </h2>
         <p>0</p>
    </div>
   <?php
}



function add_custom_dashboard_widget()
{
    wp_add_dashboard_widget(
        'custom_dashboard_widget',
        'Custom Widget',
        'custom_dashboard_widget_content'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_2',
        'Custom Widget 2',
        'custom_dashboard_widget_content2'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_3',
        'Custom Widget 3',
        'custom_dashboard_widget_content3'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_4',
        'Custom Widget 4',
        'custom_dashboard_widget_content_4'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_5',
        'Custom Widget 5',
        'custom_dashboard_widget_content_5'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_6',
        'Custom Widget 6',
        'custom_dashboard_widget_content_5'
    );


    // Remove other default dashboard widgets
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');     // Activity
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');    // Quick Press
    remove_meta_box('dashboard_primary', 'dashboard', 'side');        // WordPress News
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');      // Other WordPress News
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');   //Site Health
    remove_meta_box('wc_admin_dashboard_setup', 'dashboard', 'normal');   // Other WordPress News



}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');



// Remove admin menu 
function remove_tools_menu()
{
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php'); // Remove Comments menu
}
add_action('admin_menu', 'remove_tools_menu');




// Add Stocks menu to the dashboard
function add_stocks_menu()
{
    add_menu_page(
        'Stocks',           // Page title
        'Stocks',           // Menu title
        'manage_options',   // Capability required to access the menu
        'stocks_page',      // Menu slug
        'stocks_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        20                  // Menu position (adjust as needed)
    );
}
add_action('admin_menu', 'add_stocks_menu');






// Add Stocks menu to the dashboard
function add_purchase_menu()
{
    add_menu_page(
        'Purchase',           // Page title
        'Purchase',           // Menu title
        'manage_options',   // Capability required to access the menu
        'purchase_page',      // Menu slug
        'purchase_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        21                  // Menu position (adjust as needed)
    );

    // Add submenu
    add_submenu_page(
        'purchase_page',     // Parent menu slug
        'Add New Purchase',   // Page title
        'Add New Purchase',   // Menu title
        'manage_options',   // Capability required to access the submenu
        'add_new_purchase',   // Submenu slug
        'add_new_purchase_content' // Callback function to display submenu content
    );
}
add_action('admin_menu', 'add_purchase_menu');




// Add return menu to the dashboard
function add_return_menu()
{
    add_menu_page(
        'Return',           // Page title
        'Return',           // Menu title
        'manage_options',   // Capability required to access the menu
        'return_page',      // Menu slug
        'return_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        21                  // Menu position (adjust as needed)
    );
}
add_action('admin_menu', 'add_return_menu');



// Add return menu to the dashboard
function add_damage_menu()
{
    add_menu_page(
        'Damage',           // Page title
        'Damage',           // Menu title
        'manage_options',   // Capability required to access the menu
        'damage_page',      // Menu slug
        'damage_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        23                // Menu position (adjust as needed)
    );

    // Add submenu
    add_submenu_page(
        'damage_page',     // Parent menu slug
        'Add New Damage',   // Page title
        'Add New Damage',   // Menu title
        'manage_options',   // Capability required to access the submenu
        'add_new_damage',   // Submenu slug
        'add_new_damage_content' // Callback function to display submenu content
    );
}
add_action('admin_menu', 'add_damage_menu');



// // Add return menu to the dashboard
// function add_customer_menu()
// {

//     // Add Customers Menu
//     add_menu_page(
//         'Customers',        // Page title
//         'Customers',        // Menu title
//         'manage_options',   // Capability required to access the menu
//         'customers_page',   // Menu slug
//         'customers_page_content', // Callback function to display page content
//         'dashicons-groups', // Icon for the menu (optional)
//         24                // Menu position (adjust as needed)
//     );

//     // Add submenu
//     add_submenu_page(
//         'customers_page',     // Parent menu slug
//         'Add New Customer',   // Page title
//         'Add New Customer',   // Menu title
//         'manage_options',   // Capability required to access the submenu
//         'add_new_customer',   // Submenu slug
//         'add_new_customer_content' // Callback function to display submenu content
//     );
// }
// add_action('admin_menu', 'add_customer_menu');




// Add return menu to the dashboard
function add_pos_menu()
{
    add_menu_page(
        'Pos',           // Page title
        'Pos',           // Menu title
        'manage_options',   // Capability required to access the menu
        'pos_page',      // Menu slug
        'pos_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        21                  // Menu position (adjust as needed)
    );
}
add_action('admin_menu', 'add_pos_menu');

// Current month report 
function add_current_report_menu()
{
    add_menu_page(
        'Report',           // Page title
        'Report',           // Menu title
        'manage_options',   // Capability required to access the menu
        'todays_report',      // Menu slug
        'todays_report_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        28                 // Menu position (adjust as needed)
    );

    // Add submenu
    add_submenu_page(
        'todays_report',     // Parent menu slug
        'Current Month Report',   // Page title
        'Current Month Report',   // Menu title
        'manage_options',   // Capability required to access the submenu
        'current_month_report',   // Submenu slug
        'current_month_report_content' // Callback function to display submenu content
    );

       // Add submenu
       add_submenu_page(
        'todays_report',     // Parent menu slug
        'Summary Report',   // Page title
        'Summary Report',   // Menu title
        'manage_options',   // Capability required to access the submenu
        'summary_report',   // Submenu slug
        'summary_report_content' // Callback function to display submenu content
    );


}
add_action('admin_menu', 'add_current_report_menu');




// Add return menu to the dashboard
function add_test_menu()
{
    add_menu_page(
        'Test Menu',           // Page title
        'Test Menu',           // Menu title
        'manage_options',   // Capability required to access the menu
        'test_menu',      // Menu slug
        'test_page_content', // Callback function to display page content
        'dashicons-chart-bar', // Icon for the menu (optional)
        21                  // Menu position (adjust as needed)
    );
}
add_action('admin_menu', 'add_test_menu');




// Callback function for Stocks page content
function stocks_page_content()
{
    include(get_template_directory() . '/templates/product-stock.php');
}

// Callback function for Stocks page content
function purchase_page_content()
{
    include(get_template_directory() . '/templates/product-purchase.php');
}


// Callback function for Stocks page content
function return_page_content()
{
    include(get_template_directory() . '/templates/product-return.php');
}

// Callback function for damage page content
function damage_page_content()
{
    include(get_template_directory() . '/templates/product-damage.php');
}

// Callback function for damage page content
function add_new_damage_content()
{
    include(get_template_directory() . '/templates/product-add-damage.php');
}

// Callback function for purchase page content
function add_new_purchase_content()
{
    include(get_template_directory() . '/templates/product-add-purchase.php');
}

// Callback function for purchase page content
function customers_page_content()
{
    include(get_template_directory() . '/templates/customer-page.php');
}

// Callback function for purchase page content
function add_new_customer_content()
{
    include(get_template_directory() . '/templates/add-customer.php');
}


// Callback function for purchase page content
function add_new_supplier_content()
{
    include(get_template_directory() . '/templates/add-supplier.php');
}

// Callback function for purchase page content
function pos_page_content()
{
    include(get_template_directory() . '/templates/add-pos.php');
}



// Callback function for todays report 
function todays_report_content()
{
    include(get_template_directory() . '/templates/reports/today-report.php');
}


// Callback function for Current month report 
function current_month_report_content()
{
    include(get_template_directory() . '/templates/reports/current-month-report.php');
}


// Callback function for Summary report 
function summary_report_content()
{
    include(get_template_directory() . '/templates/reports/summary-report.php');
}



// Callback function for Summary report 
function test_page_content()
{
    include(get_template_directory() . '/templates/test-page.php');
}


