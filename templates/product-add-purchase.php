<style>
    .product {
        margin-bottom: 20px;
    }

    .product label {
        display: block;
        margin-bottom: 5px;
    }

    .product input[type="text"],
    .product input[type="date"],
    .product textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    /* Optional: Add some styling for better appearance */
    .product textarea {
        resize: vertical;
    }

    /* Optional: Add some spacing between elements */
    .product+.product {
        margin-top: 20px;
    }
</style>

<h2> Add new purchase </h2>


<form method="post"  id="purchase_product">

<!-- Your HTML code with Select2 initialization -->

<div class="product">
    <label for="product"> Add product </label>
    <select name="select" id="product_select" class="select2_products">
        <?php 
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
        );
        $products = new WP_Query($args);
        if ($products->have_posts()) :
            while ($products->have_posts()) : $products->the_post();
                $product_id = get_the_ID();
                $product_title = get_the_title();
        ?>
                <option value="<?php echo esc_attr($product_id); ?>"><?php echo esc_html($product_title); ?></option>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<option value="">No products found</option>';
        endif;
        ?>
    </select>
</div>

        <div class="product">
            <label for="product"> Purchase Date </label>
            <input type="date" name="purchase_date">
        </div>

        <div class="product">
            <label for="product"> Search Product </label>
            <input type="text" name="search_product" class="search_product_for_purchase" ajax_url="<?php echo admin_url('admin-ajax.php');?>">
        </div>

   
        

<!-- product table  -->

<table class="widefat">
    <thead>

        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
        <!-- Add your table data here -->
       
        <!-- Add more rows as needed -->

   
    </tbody>
    
</table>

<div class="grand-subtotal">
<span class="grand-total"></span>
</div>

<div class="purchase_btn">
    <!-- <a href="#"> Purchase </a> -->
    <input type="submit" value="Purchase">
</div>

</form>


