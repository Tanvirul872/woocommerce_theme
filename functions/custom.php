<?php 


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

function create_product_brand_taxonomy() {
    $labels = array(
        'name'              => _x( 'Brands', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Brands', 'textdomain' ),
        'all_items'         => __( 'All Brands', 'textdomain' ),
        'parent_item'       => __( 'Parent Brand', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Brand:', 'textdomain' ),
        'edit_item'         => __( 'Edit Brand', 'textdomain' ),
        'update_item'       => __( 'Update Brand', 'textdomain' ),
        'add_new_item'      => __( 'Add New Brand', 'textdomain' ),
        'new_item_name'     => __( 'New Brand Name', 'textdomain' ),
        'menu_name'         => __( 'Brands', 'textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,  // Set this to true if you want a hierarchical taxonomy like categories
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product_brand' ),  // Change 'product_brand' to your desired slug
    );

    register_taxonomy( 'product_brand', 'product', $args );
}

add_action( 'init', 'create_product_brand_taxonomy' );





// Register Custom Post Type
function register_expense_post_type() {
    $labels = array(
        'name'               => _x( 'Expenses', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Expense', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Expenses', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Expense', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Add New', 'expense', 'textdomain' ),
        'add_new_item'       => __( 'Add New Expense', 'textdomain' ),
        'new_item'           => __( 'New Expense', 'textdomain' ),
        'edit_item'          => __( 'Edit Expense', 'textdomain' ),
        'view_item'          => __( 'View Expense', 'textdomain' ),
        'all_items'          => __( 'All Expenses', 'textdomain' ),
        'search_items'       => __( 'Search Expenses', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Expenses:', 'textdomain' ),
        'not_found'          => __( 'No expenses found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No expenses found in Trash.', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'expense' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array(''),
    );

    register_post_type( 'expense', $args );
}
add_action( 'init', 'register_expense_post_type' );

// Register Custom Taxonomy
function register_expense_category_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Expense Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'Expense Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search Expense Categories', 'textdomain' ),
        'popular_items'              => __( 'Popular Expense Categories', 'textdomain' ),
        'all_items'                  => __( 'All Expense Categories', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Expense Category', 'textdomain' ),
        'update_item'                => __( 'Update Expense Category', 'textdomain' ),
        'add_new_item'               => __( 'Add New Expense Category', 'textdomain' ),
        'new_item_name'              => __( 'New Expense Category Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate expense categories with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove expense categories', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used expense categories', 'textdomain' ),
        'not_found'                  => __( 'No expense categories found.', 'textdomain' ),
        'menu_name'                  => __( 'Expense Categories', 'textdomain' ),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'expense-category' ),
    );

    register_taxonomy( 'expense_category', 'expense', $args );
}
add_action( 'init', 'register_expense_category_taxonomy' );







 
// dashboard widget  add and remove 

function custom_dashboard_widget_content() {
    echo '<p>Hello World!</p>';
}


function custom_dashboard_widget_content2() {
    echo '<p>Hello World 2222!</p>';
}


function custom_dashboard_widget_content3() {
    echo '<p>Hello World 333 !</p>';
}



function add_custom_dashboard_widget() {
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
function remove_tools_menu() {
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php'); // Remove Comments menu
}
add_action('admin_menu', 'remove_tools_menu');




// Add Stocks menu to the dashboard
function add_stocks_menu() {
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
function add_purchase_menu() {
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
            'Add New Damage',   // Page title
            'Add New Damage',   // Menu title
            'manage_options',   // Capability required to access the submenu
            'add_new_damage',   // Submenu slug
            'add_new_purchase_content' // Callback function to display submenu content
        );

}
add_action('admin_menu', 'add_purchase_menu');




// Add return menu to the dashboard
function add_return_menu() {
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
function add_damage_menu() {
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



// Add return menu to the dashboard
function add_customer_menu() {
  
// Add Customers Menu
  add_menu_page(
    'Customers',        // Page title
    'Customers',        // Menu title
    'manage_options',   // Capability required to access the menu
    'customers_page',   // Menu slug
    'customers_page_content', // Callback function to display page content
    'dashicons-groups', // Icon for the menu (optional)
    24                // Menu position (adjust as needed)
);

     // Add submenu
add_submenu_page(
        'customers_page',     // Parent menu slug
        'Add New Customer',   // Page title
        'Add New Customer',   // Menu title
        'manage_options',   // Capability required to access the submenu
        'add_new_customer',   // Submenu slug
        'add_new_customer_content' // Callback function to display submenu content
 );


}
add_action('admin_menu', 'add_customer_menu');




// Add return menu to the dashboard
function add_pos_menu() {
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


    

// Add return menu to the dashboard
function add_supplier_menu() {
  
    // Add suppliers Menu
      add_menu_page(
        'suppliers',        // Page title
        'suppliers',        // Menu title
        'manage_options',   // Capability required to access the menu
        'suppliers_page',   // Menu slug
        'suppliers_page_content', // Callback function to display page content
        'dashicons-groups', // Icon for the menu (optional)
        24                // Menu position (adjust as needed)
    );
    
         // Add submenu
    add_submenu_page(
            'suppliers_page',     // Parent menu slug
            'Add New supplier',   // Page title
            'Add New supplier',   // Menu title
            'manage_options',   // Capability required to access the submenu
            'add_new_supplier',   // Submenu slug
            'add_new_supplier_content' // Callback function to display submenu content
     );
    
    
    }
add_action('admin_menu', 'add_supplier_menu');








// Callback function for Stocks page content
function stocks_page_content() {  
    include( get_template_directory() .'/templates/product-stock.php'); 
}

// Callback function for Stocks page content
function purchase_page_content() {  
    include( get_template_directory() .'/templates/product-purchase.php'); 
}


// Callback function for Stocks page content
function return_page_content() {  
    include( get_template_directory() .'/templates/product-return.php'); 
}

// Callback function for damage page content
function damage_page_content() {  
    include( get_template_directory() .'/templates/product-damage.php'); 
}

// Callback function for damage page content
function add_new_damage_content() {  
    include( get_template_directory() .'/templates/product-add-damage.php'); 
}

// Callback function for purchase page content
function add_new_purchase_content() {  
    include( get_template_directory() .'/templates/product-add-purchase.php'); 
}

// Callback function for purchase page content
function customers_page_content() {  
    include( get_template_directory() .'/templates/customer-page.php'); 
}

// Callback function for purchase page content
function add_new_customer_content() {  
    include( get_template_directory() .'/templates/add-customer.php'); 
}


// Callback function for purchase page content
function suppliers_page_content() {  
    include( get_template_directory() .'/templates/supplier-page.php'); 
}

// Callback function for purchase page content
function add_new_supplier_content() {  
    include( get_template_directory() .'/templates/add-supplier.php'); 
}

// Callback function for purchase page content
function pos_page_content() {  
    include( get_template_directory() .'/templates/add-pos.php'); 
}











// Add custom payment gateway
add_filter('woocommerce_payment_gateways', 'add_custom_payment_gateway');
function add_custom_payment_gateway($gateways){
    $gateways[] = 'WC_Custom_Payment_Gateway';
    return $gateways;
}

// Define the custom payment gateway class
class WC_Custom_Payment_Gateway extends WC_Payment_Gateway {
    public function __construct(){
        $this->id                 = 'custom_payment_gateway';
        $this->has_fields         = false;
        $this->method_title       = 'Custom Payment Gateway';
        $this->method_description = 'Pay with Custom Payment Gateway';
        $this->supports           = array('products');

        $this->init_form_fields();
        $this->init_settings();

        $this->title        = $this->get_option('title');
        $this->description  = $this->get_option('description');

        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }

    public function init_form_fields(){
        $this->form_fields = array(
            'enabled' => array(
                'title'   => 'Enable/Disable',
                'type'    => 'checkbox',
                'label'   => 'Enable Custom Payment Gateway',
                'default' => 'yes',
            ),
            'title' => array(
                'title'       => 'Title',
                'type'        => 'text',
                'description' => 'This controls the title for the payment method the customer sees during checkout.',
                'default'     => 'Custom Payment Gateway',
            ),
            'description' => array(
                'title'       => 'Description',
                'type'        => 'textarea',
                'description' => 'Payment method description that the customer will see on your checkout.',
                'default'     => 'Pay with Custom Payment Gateway',
            ),

            'api_key' => array(
                'title'       => 'Api Key',
                'type'        => 'text',
                'description' => 'Write the api key here',
                'default'     => 'Api Secret',
            ),

            'api_secret' => array(
                'title'       => 'Api Secret',
                'type'        => 'text',
                'description' => 'Write the api secret here',
                'default'     => 'Api Secret',
            ),


        );
    }
}


add_filter('woocommerce_available_payment_gateways', 'add_custom_payment_gateway_to_available', 10, 1);


function add_custom_payment_gateway_to_available($gateways) {
    // Check if the custom payment gateway is enabled
    if (class_exists('WC_Custom_Payment_Gateway') && is_array($gateways)) {
        $custom_gateway = new WC_Custom_Payment_Gateway();
        $gateways[] = $custom_gateway;
    }

    return $gateways;
}
add_filter('woocommerce_payment_gateways', 'add_custom_payment_gateway', 999);


?>