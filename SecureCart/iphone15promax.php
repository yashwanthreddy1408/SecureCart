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
    <title>Apple iPhone 15 Pro Max (256 GB) - White Titanium</title>
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
                    <img id="main-image" src="https://m.media-amazon.com/images/I/81dT7CUY6GL._SX679_.jpg" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="https://m.media-amazon.com/images/I/81dT7CUY6GL._SX679_.jpg" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/61Jrsu9d3-L._SX679_.jpg" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/715zWp1q7rL._SX679_.jpg" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/71TSx9D2BVL._SX679_.jpg" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/81MDZsYTIoL._SX679_.jpg" alt="Product Image 5" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/616Uc0aFwaL._SX679_.jpg" alt="Product Image 6" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>Apple iPhone 15 Pro Max (256 GB) - White Titanium</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(17725 Reviews)</span>
                    </div>
                    <p class="price">₹169999</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>White Titanium</strong><br><br>
                    <div class="product-details">
                        <strong>Brand</strong> Apple<br>
                        <strong>Model Name</strong> iPhone 15 Pro Max<br>
                        <strong>Network Service Provider</strong> Unlocked for All Carriers<br>
                        <strong>Operating System</strong> iOS<br>
                        <strong>Cellular Technology</strong> 5G<br>
                    </div>
                    <br>
                    
                    <div class="actions">
                        <a href="addToCart.php?product_id=1" class="add-to-cart">Add to Cart</a>
                        <a href="checkout.php?product_id=1" class="buy-now">Buy Now</a>
                    </div>
                    <br>
                    <h1>About iPhone 15 Pro Max</h1>
    <div class="item-description">
        <p><strong>Forged in Titanium</strong> — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matte-glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water, and dust resistant.</p>
        <p><strong>Advanced Display</strong> — The 6.7” Super Retina XDR display with ProMotion ramps up refresh rates to 120Hz when you need exceptional graphics performance. Dynamic Island bubbles up alerts and Live Notifications. Plus, with Always-On display, your Lock Screen stays glanceable, so you don’t have to tap it to stay in the know.</p>
        <p><strong>Game-Changing A17 Pro Chip</strong> — A Pro-class GPU makes mobile games feel so immersive, with rich environments and realistic characters. A17 Pro is also incredibly efficient and helps to deliver amazing all-day battery life.</p>
        <p><strong>Powerful Pro Camera System</strong> — Get incredible framing flexibility with 7 pro lenses. Capture super high-resolution photos with more color and detail using the 48MP Main camera. And take sharper close-ups from farther away with the 5x Telephoto camera on iPhone 15 Pro Max.</p>
        <p><strong>Customizable Action Button</strong> — Action button is a fast track to your favorite feature. Just set the one you want, like Silent mode, Camera, Voice Memo, Shortcut, and more. Then press and hold to launch the action.</p>
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
