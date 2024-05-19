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
    <title>Apple iPhone 13 (128GB) - Starlight</title>
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
                    <img id="main-image" src="https://m.media-amazon.com/images/I/71GLMJ7TQiL._SX679_.jpg" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="https://m.media-amazon.com/images/I/71GLMJ7TQiL._SX679_.jpg" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/61NTwRtdzfL._SX679_.jpg" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/71OxEU5mSCL._SX679_.jpg" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/71G44HUh7yL._SX679_.jpg" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/81otRqY0XXL._SX679_.jpg" alt="Product Image 5" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/61BvZ6EbUvL._SX679_.jpg" alt="Product Image 6" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>Apple iPhone 13 (128GB) - Starlight</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(1725 Reviews)</span>
                    </div>
                    <p class="price">₹53,900</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>Starlight</strong><br><br>
                    <div class="product-details">
                    <strong>Brand</strong> Apple<br>
                    <strong>Model Name</strong> iPhone<br>
                    <strong>Network Service Provider</strong> Unlocked for All Carriers<br>
                    <strong>Operating System</strong> iOS 14<br>
                    <strong>Cellular Technology</strong> 5G<br>
                </div>
                <br>
                <div class="actions">
                    <a href="addToCart.php?product_id=5" class="add-to-cart">Add to Cart</a>
                    <a href="checkout.php?product_id=5" class="buy-now">Buy Now</a>
                </div>
                <br>
                <h1>About Apple iPhone 13</h1>
                <div class="item-description">
                    <p>15 cm (6.1-inch) Super Retina XDR display<br>
                    Cinematic mode adds shallow depth of field and shifts focus automatically in your videos<br>
                    Advanced dual-camera system with 12MP Wide and Ultra Wide cameras; Photographic Styles, Smart HDR 4, Night mode, 4K Dolby Vision HDR recording<br>
                    12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording<br>
                    A15 Bionic chip for lightning-fast performance</p>
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
