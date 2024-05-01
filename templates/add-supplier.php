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

<h2>Add New Supplier </h2>

<form action="#" method="post">

<div class="product">
    <label for="product"> Supplier Name </label>
    <input type="text" name="supplier_name">
</div>


<div class="product">
    <label for="product"> Supplier Address </label>
    <textarea name="supplier_address" id="" cols="30" rows="10">

    </textarea>
</div>


<div class="product">
    <label for="product"> Supplier Email </label>
    <input type="text" name="supplier_email">
</div>

<div class="product">
    <label for="product"> Supplier Phone </label>
    <input type="text" name="supplier_phone">
</div>

<input type="submit" name="submit_product_supplier" value="Submit">

</form>


