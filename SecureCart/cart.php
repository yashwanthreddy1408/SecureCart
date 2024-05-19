<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="index_style.css">
<style>
  * {
    font-family: 'Amazon Ember', Arial, sans-serif;
  }
  .cart-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }
  .quantity-adjustment {
    display: flex;
    align-items: center;
  }
  .quantity-btn {
    cursor: pointer;
    background-color: transparent;
    color: #007bff;
    border: 1px solid #007bff;
    padding: 5px 10px;
    border-radius: 3px;
    margin: 0 5px;
  }
  .quantity-btn:hover {
    background-color: #007bff;
    color: #fff;
  }
  .quantity {
    margin: 0 10px;
    font-weight: bold;
  }
  .delete-btn {
    cursor: pointer;
    background-color: transparent;
    color: #dc3545;
    border: 1px solid #dc3545;
    padding: 5px 10px;
    border-radius: 3px;
    margin-right: 10px;
  }
  .delete-btn:hover {
    background-color: #dc3545;
    color: #fff;
  }
  .checkout-btn {
    cursor: pointer;
    background-color: transparent;
    color: #28a745;
    border: 1px solid #28a745;
    padding: 5px 10px;
    border-radius: 3px;
  }
  .checkout-btn:hover {
    background-color: #28a745;
    color: #fff;
  }
  .stock-status {
    font-weight: bold;
    margin-bottom: 10px;
  }
  .in-stock {
    color: green;
  }
  .out-of-stock {
    color: red;
  }
  .product-title a {
    font-size: 24px;
    color: #0f1111;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .product-title a:hover {
    color: #eeac17;
  }
  

    /* Empty cart message styles */
    #empty-cart-message {
        margin-top: 20px;
        padding: 20px;
        /* background-color: #f8d7da; */
        /* border: 2px solid #f5c6cb; */
        border-radius: 8px;
        display: none;
    }

    #empty-cart-message p {
        margin: 0;
        font-size: 18px;
        color: #721c24;
    }

    #empty-cart-message a {
        color: #155724;
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    #empty-cart-message a:hover {
        color: #0c783e;
        text-decoration: underline;
    }
</style>
</head>
<body>
  <!--navbar-->
  <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
  <!-- navbar -->
  <br>
  <div class="container cart-container">
    <h1>Shopping Cart</h1>
    <div id="empty-cart-message" style="display: none;">
            <p>Your cart is empty. <a href="index.php">Continue shopping</a></p>
        </div>
    <div id="cart-items">
      <?php 
      $conn = mysqli_connect('localhost', 'root', '', 'test');

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $cartQuery = "SELECT * FROM cart";
      $result = mysqli_query($conn, $cartQuery);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $product_id = $row['pid'];
          $quantityQuery = "SELECT quantity, pfile FROM products WHERE pid='$product_id'";
          $quantityResult = mysqli_query($conn, $quantityQuery);
          $quantityData = mysqli_fetch_assoc($quantityResult);
          $available_quantity = $quantityData['quantity'];
          $product_file = $quantityData['pfile'];

          $product_name = $row['pname'];
          $product_price = $row['price'];
          $product_image = $row['pimage'];
          $quantity = $row['quantity'];
          $total_price = $row['total_price'];
      ?>

      <div class="container product-card" data-product-id="<?php echo $product_id; ?>">
        <div class="image-container">
          <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="product-image">
        </div>
        <div class="details-container">
          <h2 class="product-title">
            <a href="<?php echo $product_file; ?>"><?php echo $product_name; ?></a>
          </h2>
          <p class="stock-status  <?php echo $available_quantity <= 0 ? 'out-of-stock' : 'in-stock'; ?>" style="font-weight:normal;">
            <?php echo $available_quantity <= 0 ? 'Out of Stock' : 'In Stock'; ?>
          </p>
          <p> Eligible for Free Delivery</p>
          <p class="product-price">Price: ₹<?php echo $product_price; ?></p>
          <div class="quantity-adjustment">
            <button class="quantity-btn decrease-btn">-</button>
            <span class="quantity" data-quantity="<?php echo $quantity; ?>"><?php echo $quantity; ?></span>
            <button class="quantity-btn increase-btn">+</button>
          </div><br>
          <button class="delete-btn">Delete</button><br>
          <br>
          <p class="total-price">Total: ₹<?php echo $total_price; ?></p>
          <!-- Proceed to Checkout Button -->
          <a href="checkout.php?product_id=<?php echo $product_id;?>" class="checkout-btn"  <?php echo $available_quantity <= 0 ? 'disabled' : ''; ?>>Proceed to Checkout</a>
          
          <!-- End Proceed to Checkout Button -->
        </div>
      </div>

      <?php
        }
      }
        else {
          echo '<script>document.getElementById("empty-cart-message").style.display = "block";</script>';
      }
     
      mysqli_close($conn);
      ?>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
  <!-- End Footer -->

  <script>
   document.addEventListener('DOMContentLoaded', function() {
    const cartContainer = document.getElementById('cart-items');

    cartContainer.addEventListener('click', function(event) {
        const target = event.target;
        const productCard = target.closest('.product-card');
        const productId = productCard.dataset.productId;

        if (target.classList.contains('decrease-btn') || target.classList.contains('increase-btn')) {
            const action = target.classList.contains('decrease-btn') ? 'decrease' : 'increase';
            adjustQuantity(productId, action, productCard);
        } else if (target.classList.contains('delete-btn')) {
            deleteProduct(productId, productCard);
        }
    });

    function adjustQuantity(productId, action, productCard) {
        const quantitySpan = productCard.querySelector('.quantity');
        const currentQuantity = parseInt(quantitySpan.dataset.quantity);

        fetch('update_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ productId, action })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const newQuantity = data.newQuantity;
                const newTotalPrice = data.newTotalPrice;
                quantitySpan.dataset.quantity = newQuantity;
                quantitySpan.textContent = newQuantity;

                const totalPriceElement = productCard.querySelector('.total-price');
                totalPriceElement.textContent = 'Total: ₹' + newTotalPrice;
            }
        })
        .catch(error => console.error('Error:', error));
    }

    function deleteProduct(productId, productCard) {
        fetch('update_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ productId, action: 'delete' })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                productCard.remove();
            }
        })
        .catch(error => console.error('Error:', error));
    }
});

  </script>

</body>
</html>
