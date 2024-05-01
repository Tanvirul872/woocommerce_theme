<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<style>
    /* Add your custom styles here */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .admin_stock_page img {
        height: 50px;
        width: 50px;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 1px solid #ddd;
        }

        th,
        td {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        th {
            text-align: left;
        }
    }
</style>
<!-- </head>
<body> -->

<h2>Stock Information</h2>

<table class="admin_stock_page">
    <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Available Stock</th>
            <th>Price</th>
            <th>Purchased Price</th>
            <th>Sold</th>
            <th>Damage</th>
            <th>Returned</th>
            <th>Sell Value</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
        );

        $products = new WP_Query($args);

        // echo '<pre>';
        // print_r($products);


        if ($products->have_posts()) :

            $counter = 1;
            while ($products->have_posts()) : $products->the_post();
                $categories = get_the_terms(get_the_ID(), 'product_cat');
                $available_stock = get_post_meta(get_the_ID(), '_stock', true);
        ?>

                <tr>
                    <td><?php echo $counter; ?></td>
                    <td><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>"></td>
                    <td><?php the_title() ?></td>

                    <td>

                        <?php
                        $categoryNames = [];

                        if ($categories) {
                            foreach ($categories as $category) {
                                if ($category->name !== 'Uncategorized') {
                                    $categoryNames[] = $category->name;
                                }
                            }
                        }

                        echo implode(' | ', $categoryNames);
                        ?>

                    </td>
                    <td><?php echo $available_stock; ?></td>
                    <td>$<?php echo get_post_meta(get_the_ID(), '_price', true); ?></td>
                    <!-- <td>100</td> -->
                    <td>$<?php echo get_post_meta(get_the_ID(), 'custom_product_purchase_field', true) ?></td>
                    <td>50</td>
                    <td>5</td>
                    <td>2</td>
                    <td>$999.50</td>
                </tr>


        <?php
                $counter++;
            endwhile;
            wp_reset_postdata();
        else :
            echo 'No products found';
        endif;
        ?>

    </tbody>
</table>


