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
    <title>OnePlus 11R 5G (Solar Red, 16GB RAM, 512GB Storage)</title>
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
                    <img id="main-image" src="https://oasis.opstatics.com/content/dam/oasis/page/2023/in/product/11r/11r-red.png" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="https://oasis.opstatics.com/content/dam/oasis/page/2023/in/product/11r/11r-red.png" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/717A-GVdoaL._SX679_.jpg" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/61o7XPUKK5L._SX679_.jpg" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/81xtr+AkF-L._SX679_.jpg" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/71kekr-Es8L._SX679_.jpg" alt="Product Image 5" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/51ZZj-ibgsL._SX679_.jpg" alt="Product Image 6" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>OnePlus 11R 5G (Solar Red, 16GB RAM, 512GB Storage)</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(1725 Reviews)</span>
                    </div>
                    <p class="price">₹49999</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>Solar Red</strong><br><br>
                    <div class="product-details">
                        <strong>Brand</strong> OnePlus<br>
                        <strong>Model Name</strong> OnePlus 11R<br>
                        <strong>Network Service Provider</strong> Unlocked for All Carriers<br>
                        <strong>Operating System</strong> OxygenOS<br>
                        <strong>Cellular Technology</strong> 5G<br>
                    </div>
                    <br>
                    
                    <div class="actions">
                        <a href="addToCart.php?product_id=2" class="add-to-cart">Add to Cart</a>
                        <a href="checkout.php?product_id=2" class="buy-now">Buy Now</a>
                    </div>
                    <br>
                    <h1>About OnePlus 11R</h1>
    <div class="item-description">
        <p><strong>Camera Sensor</strong> — 50MP Main Camera with Sony IMX890 (OIS supported), 8MP Ultrawide Camera (FOV: 120 degree) and Macro Lens; 16MP Front (Selfie) Camera with EIS support.</p>
        <p><strong>Camera Modes</strong> — Nightscape, Ultra HDR, Smart Scene Recognition, Portrait Mode, Pro Mode, Panorama, Tilt-Shift mode, Long Exposure, Dual-View Video, Retouch, Movie Mode, Raw file, Filters, Super Stable, Video Nightscape, Video HDR, Video Portrait, Focus Tracking, Timelapse, Macro mode.</p>
        <p><strong>Display</strong> — 6.74 Inches; 120 Hz Super Fluid AMOLED; Resolution: 2772 X 1240 pixels ,450 ppi, 20.1:9, 10-bit Color Depth, HDR10+.</p>
        <p><strong>Operating System</strong> — OxygenOS based on Android 13.</p>
        <p><strong>Processor</strong> — Snapdragon 8+ Gen 1 Mobile Platform.</p>
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
