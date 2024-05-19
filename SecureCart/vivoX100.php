<?php
// Include the database connection file
require_once 'connection.php';

// Check if product_id is passed in the URL
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

if ($product_id !== null) {
    // Execute SQL query to fetch product details
    $sql = "SELECT pname, price, quantity FROM products WHERE pid = '$product_id'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Product details found
        $row = $result->fetch_assoc();
        $product_name = $row['pname'];
        $price = $row['price'];
        $quantity = $row['quantity'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivo x100 (Asteroid Black,512 GB) (16 GB RAM)</title>
    <link rel="stylesheet" href="test_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
<!-- fonts links -->
<style>
    *{
        font-family: 'Amazon Ember', Arial, sans-serif;
    }
    :is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
}
a{
    text-decoration:none;
}
    </style>
</head>
<body>
    <!--navbar-->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
    <!-- navbar -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-images">
                    <img id="main-image" src="./images/vivo x 100.jpg" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="./images/vivo x 100.jpg" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://exstatic-in.vivo.com/Oz84QB3Wo0uns8j1/in/1704281217206/bcbdeecd25549650ec449c40395edba6.png.webp" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://exstatic-in.vivo.com/Oz84QB3Wo0uns8j1/in/1704281217206/55b504ca403c61067c6a6c23bb9e1cb3.png.webp" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://exstatic-in.vivo.com/Oz84QB3Wo0uns8j1/in/1704281216605/37715f7dc91267d80eb22b702171c3a8.png.webp" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://exstatic-in.vivo.com/Oz84QB3Wo0uns8j1/in/1704281217662/486b287def55dbedb39c5c0ec4185044.png.webp" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://exstatic-in.vivo.com/Oz84QB3Wo0uns8j1/in/1704281218343/cbd9885bf4296e8c4763dd6ce65126eb.png.webp" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>         </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>Vivo x100 (Asteroid Black,512 GB) (16 GB RAM)</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(1725 Reviews)</span>
                    </div>
                    <p class="price">₹67,900</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>Asteroid Black</strong><br><br>
                    <div class="product-details">
                    <strong>Brand</strong> Vivo<br>
                    <strong>Model Name</strong> X100 5G<br>
                    <strong>Network Service Provider</strong> Unlocked for All Carriers<br>
                    <strong>Operating System</strong> Android 13.0<br>
                    <strong>Cellular Technology</strong> 5G<br>
                </div>
                <br>
                <div class="actions">
                    <a href="addToCart.php?product_id=6" class="add-to-cart">Add to Cart</a>
                    <a href="checkout.php?product_id=6" class="buy-now">Buy Now</a>
                </div>
                <br>
                <h1>About Vivo x100 </h1>
                <div class="item-description">
                    <p>16 GB RAM | 512 GB ROM<br>
                    17.22 cm (6.78 inch) Full HD+ Display<br>
                    50MP + 50MP + 64MP | 32MP Front Camera<br>
                    5000 mAh Battery<br>
                    Dimensity 9300<br>
                    The Vivo X100 Smartphone is a testament to Vivo's commitment to excellence, combining cutting-edge technology with stunning design. It's not just a phone; it's a canvas for your creativity, a portal to incredible visuals, and a companion built to withstand the challenges of life. Elevate your mobile experience with the Vivo X100 – where innovation meets elegance, and every feature is a step into the future.
                </p>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0 text-center">
          <i class="fas fa-shopping-cart"></i>
          <h3>Free Shipping</h3>
          <p>On order over ₹1717</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 text-center">
          <i class="fas fa-undo-alt"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 text-center">
          <i class="fas fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 text-center">
          <i class="fas fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <!-- offer -->
    <br><br>
    <!-- footer -->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <!-- footer -->

    <script>
        function replaceMainImage(element) {
            var mainImage = document.getElementById('main-image');
            mainImage.src = element.src;
        }
    </script>
</body>
</html>
