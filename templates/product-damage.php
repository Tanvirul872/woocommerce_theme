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

<h2> Damage Information </h2>

<table class="admin_stock_page">
    <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        <!-- Add your table data here -->
<?php
global $wpdb;
$table_name = $wpdb->prefix . 'product_damage';
$query = "SELECT * FROM $table_name";
$results = $wpdb->get_results($query, ARRAY_A);
if ($results) {
    foreach ($results as $row) {
        ?>
        <tr>
            <td><?php echo esc_html($row['id']); ?></td>
            <td><?php echo esc_html($row['product_id']); ?></td>
            <td><?php echo esc_html($row['date']); ?></td>
            <td><?php echo esc_html($row['number']); ?></td>
            <td><?php echo esc_html($row['note']); ?></td>
            
        </tr>
        <?php
    }
} else {
    ?>
    <tr>
        <td colspan="6">No data found</td>
    </tr>
    <?php
}
?>

    </tbody>
</table>
