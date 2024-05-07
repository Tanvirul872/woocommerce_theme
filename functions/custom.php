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
          <p> <?php echo strip_tags( wc_price(get_order_sales_by_date() ) ) ; ?>  </p>
     </div>
    <?php
}


function custom_dashboard_widget_content2()
{
    ?>
     <!-- dashboard widget 1 -->
     <div class="custom_widget_box">
          <h2>  Today Expense  </h2>
          <p><?php echo strip_tags( wc_price(calculate_total_expense_today() ) ) ; ?> </p>
     </div>
    <?php
}

function custom_dashboard_widget_content3()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Purchase Cost  </h2>
         <p><?php echo strip_tags( wc_price(get_todays_purchase_cost() ) ) ; ?></p>
    </div>
   <?php
}



function custom_dashboard_widget_content_4()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Today Sell Profit </h2>
         <p> <?php echo strip_tags( wc_price(get_todays_sell_profit() ) ) ; ?> </p>
    </div>
   <?php
}


function custom_dashboard_widget_content_5()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Total Receivable </h2>
         <p>0</p>
    </div>
   <?php
}


function custom_dashboard_widget_content6()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Total Payable </h2>
         <p>0</p>
    </div>
   <?php
}


function custom_dashboard_widget_content7()
{ ?>


    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2>Stock-Purchase Value</h2>
         <p>
            <?php echo strip_tags( wc_price(total_stock_purchase_value() ) ) ; ?>
        </p>
    </div>
   <?php
}

function custom_dashboard_widget_content8()
{
    ?>
    <!-- dashboard widget 1 -->
    <div class="custom_widget_box">
         <h2> Stock - Sell Value </h2>
         <p><?php echo strip_tags( wc_price(total_stock_sell_value() ) ) ; ?></p>
    </div>
   <?php

}


function add_custom_dashboard_widget()
{
    wp_add_dashboard_widget(
        'custom_dashboard_widget',
        'Today Sold',
        'custom_dashboard_widget_content'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_2',
        'Today Expense',
        'custom_dashboard_widget_content2'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_3',
        'Today Purchase Cost',
        'custom_dashboard_widget_content3'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_4',
        'Today Sell Profit',
        'custom_dashboard_widget_content_4'
    );


    wp_add_dashboard_widget(
        'custom_dashboard_widget_5',
        'Total Receivable',
        'custom_dashboard_widget_content_5'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_6',
        'Total Payable',
        'custom_dashboard_widget_content6'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_7',
        'Stock-Purchase Value',
        'custom_dashboard_widget_content7'
    );

    wp_add_dashboard_widget(
        'custom_dashboard_widget_8',
        ' Stock - Sell Value',
        'custom_dashboard_widget_content8'
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


