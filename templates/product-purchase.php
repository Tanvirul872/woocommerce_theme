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

<h2>Purchase Information</h2>
<table class="admin_stock_page">
    <thead>
        <tr>
            <th>No</th>
            <th> Product Name </th>
            <th>quantity</th>
            <th>rate</th>
            <th>Subtotal</th>
       
        </tr>
    </thead>
    <tbody>
        <!-- Add your table data here -->

        <?php 

            global $wpdb;
            $table_name = $wpdb->prefix . 'product_purchase'; // Assuming the table name is wp_product_purchase
            $query = "SELECT * FROM $table_name";
            $results = $wpdb->get_results($query);
// echo '<pre>' ;
// print_r($results) ; 
foreach ($results as $result){ 
    $product = wc_get_product($result->product_id);

    ?>

<tr>
    <td> <?php echo $result->id ; ?> </td>
    <td> <?php echo $product->get_name() ; ?> </td>
    <td> <?php echo $result->quantity ; ?></td>
    <td> <?php echo $result->rate ; ?></td>
    <td> <?php echo $result->subtotal ; ?></td>
</tr>

<?php } ?>
      

      




        <!-- Add more rows as needed -->
    </tbody>
</table>
<!-- 
</body>
</html> -->