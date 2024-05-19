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
    <title>Vivo Y51 (Titanium Sapphire, 8GB RAM, 128GB ROM)</title>
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
                    <img id="main-image" src="https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1606466916385/513059747232792ec277c9d7dac54e0e.png" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1606466916385/513059747232792ec277c9d7dac54e0e.png" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/51XLJOrnp1L._SL1200_.jpg" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://m.media-amazon.com/images/I/61DbUXH+W9L._SL1200_.jpg" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://scontent.fhyd14-1.fna.fbcdn.net/v/t1.6435-9/139738210_3709901382460658_3539497645912615644_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=zOUo2CSnhSMQ7kNvgFjPrRe&_nc_ht=scontent.fhyd14-1.fna&oh=00_AYA7SRPSvGENgYD7_3DfoiXywYJcHYdhcDxc_lmJJmYTxw&oe=66701743" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://availeverything.com/public/uploads/all/iYSl9ruJ5Qug1TyNznwIU0qpI5wiJamMQKBissGI.jpg" alt="Product Image 5" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://www.triveniworld.com/cdn/shop/products/vivo-y51-titanium-sapphire-128-gb-8-gb-ram-triveni-world-7.jpg?v=1706395155" alt="Product Image 6" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>Vivo Y51 (Titanium Sapphire, 8GB RAM, 128GB ROM)</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(1725 Reviews)</span>
                    </div>
                    <p class="price">₹28,999</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>Titanium Sapphire</strong><br>
                    Style Name: <strong>without Offer</strong><br>
                    Pattern Name: <strong>Vivo Y51</strong><br><br>
                    <div class="product-details">
                        <strong>Brand</strong> Vivo<br>
                        <strong>Model Name</strong> Vivo Y51<br>
                        <strong>Operating System</strong> Android<br>
                        <strong>Cellular Technology</strong> 4G<br>
                        <strong>Memory Storage Capacity</strong> 128GB<br>
                    </div>
                    <br>
                    
                    <div class="actions">
                        <a href="addToCart.php?product_id=9" class="add-to-cart">Add to Cart</a>
                        <a href="checkout.php?product_id=9" class="buy-now">Buy Now</a>
                    </div>
                    <br>
                    <h1>About Vivo Y51</h1>
                    <div class="item-description">
                        <p><strong>Camera Sensor</strong> — 48MP+8MP+2MP primary camera with Portrait, Photo, Video, Pano, Live Photo, Slo-Mo, Time-Lapse, Pro, DOC, Super Night Mode, AI 48MP and 16 MP front facing camera.</p>
                        <p><strong>Display</strong> — 16.71 centimeters (6.58-inch) capacitive touchscreen with 2408 x 1080 pixels resolution.</p>
                        <p><strong>Memory, Storage & SIM</strong> — 8GB RAM | 128GB internal memory expandable up to 1TB | Dual SIM with dual standby (4G+4G).</p>
                        <p><strong>Operating System</strong> — Funtouch OS 11 Based on Android 11 operating system with 2GHz Qualcomm Snapdragon 665 octa core processor.</p>
                        <p><strong>Battery</strong> — 5000mAH Lithium-ion battery.</p>
                        <p><strong>Warranty</strong> — 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase.</p>
                        <p><strong>Box Includes</strong> — Handset, earphones, Documentation, microUSB to USB Cable(Type -C), USB Power Adapter, SIM Ejector Pin, Protective Case, Protective Film (1 applied).</p>
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
