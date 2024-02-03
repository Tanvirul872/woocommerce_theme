
    <style>
      
.pos_page {
	display: flex;
	gap: 20px;
	min-height: 200px;
}
.pos_category h3 {
	margin-bottom: 30px;
}

.pos_left {
	width: 30%;
	padding-top: 25px;
}
.pos_right{
  
}
.pos_field input, .pos_field select {
	width: 100%;
	padding: 10px 20px;
	margin-bottom: 10px;
}


        .pos_cart_table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .pos_cart_table img{
            height:50px;
            width:50px; 
        }






/* pos product list css start  */ 


.pos_product {
    max-width: 800px; /* Adjust the maximum width as needed */
    margin: 0 auto;
}

.product-item {
    display: inline-block;
    width: 30%; /* Adjust the width to fit three columns */
    margin: 10px;
    text-align: center;
}

.product-item img {
    max-width: 100%;
    height: auto;
}

.product-name {
    font-size: 16px;
    margin-top: 5px;
}

.product-price {
    font-size: 14px;
    color: #555;
}

.pos_right {
	display: flex;
	gap: 20px;
}

.pos_category ul li {
	background: #33cabb;
	color: #fff;
	padding: 5px 15px;
	font-size: 16px;
	font-weight: bold;
}

    </style>


<h2> Pos Page </h2>

<div class="pos_page">


<div class="pos_left">
        





  <div class="pos_field">
    <input type="text" name="product_name" placeholder="Write the product name">
  </div>

  <div class="pos_field">
    <input type="date" name="order_date">
  </div>

<div class="pos_field">
  
<select name="select_customer" id="">
    <option value="">Customer 1</option>
    <option value="">Customer 2</option>
    <option value="">Customer 3</option>
    <option value="">Customer 4</option>
</select>

</div>




<table class="pos_cart_table">
    <thead>
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <!-- Add your table data here -->
       

        <tr>
            <td>1</td>
            <td><img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product Image"></td>
            <td>Product 1</td>
            <td><input type="number" name="product_quantity"></td> 
            <td>200$</td>
            <td>400$</td>
        </tr>



        <tr>
            <td>1</td>
            <td><img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product Image"></td>
            <td>Product 1</td>
            <td><input type="number" name="product_quantity"></td> 
            <td>200$</td>
            <td>400$</td>
        </tr>

        
        <tr>
            <td>1</td>
            <td><img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product Image"></td>
            <td>Product 1</td>
            <td><input type="number" name="product_quantity"></td> 
            <td>200$</td>
            <td>400$</td>
        </tr>
    
        <!-- Add more rows as needed -->
    </tbody>
</table>


</div>


<div class="pos_right">
     <div class="pos_category">
         <h3>Category list</h3>
          <ul>
             <li>Category 1</li>
             <li>Category 2</li>
             <li>Category 3</li>
             <li>Category 4</li>
          </ul>
     </div>   

     <div class="pos_product">
    <h3>Product list</h3>
    <!-- Product list starts here -->
    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 1">
        <p class="product-name">Product 1</p>
        <p class="product-price">$19.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 2">
        <p class="product-name">Product 2</p>
        <p class="product-price">$29.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 3">
        <p class="product-name">Product 3</p>
        <p class="product-price">$39.99</p>
    </div>
    <!-- Repeat the structure for additional products as needed -->

    <!-- Product list starts here -->
    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 1">
        <p class="product-name">Product 1</p>
        <p class="product-price">$19.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 2">
        <p class="product-name">Product 2</p>
        <p class="product-price">$29.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 3">
        <p class="product-name">Product 3</p>
        <p class="product-price">$39.99</p>
    </div>
    <!-- Repeat the structure for additional products as needed -->


    <!-- Product list starts here -->
    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 1">
        <p class="product-name">Product 1</p>
        <p class="product-price">$19.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 2">
        <p class="product-name">Product 2</p>
        <p class="product-price">$29.99</p>
    </div>

    <div class="product-item">
        <img src="http://localhost/ecommerce_theme/wp-content/uploads/2023/12/product_2.jpg" alt="Product 3">
        <p class="product-name">Product 3</p>
        <p class="product-price">$39.99</p>
    </div>
    <!-- Repeat the structure for additional products as needed -->



</div>



</div>

</div>
