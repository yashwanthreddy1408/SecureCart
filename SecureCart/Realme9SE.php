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
    <title>Realme 9 5G SE (Starry Glow, 6GB RAM, 128GB Storage) </title>
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
                    <img id="main-image" src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444543/Croma%20Assets/Communication/Mobiles/Images/249671_ccryif.png?tr=w-640" alt="Product Image 1" class="main-image">
                    <div class="thumbnail-images">
                        <img id="main-image" src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444543/Croma%20Assets/Communication/Mobiles/Images/249671_ccryif.png?tr=w-640" alt="Product Image 1" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444562/Croma%20Assets/Communication/Mobiles/Images/249671_10_faz2hi.png?tr=w-640" alt="Product Image 2" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444564/Croma%20Assets/Communication/Mobiles/Images/249671_19_en6olh.png?tr=w-640" alt="Product Image 3" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444567/Croma%20Assets/Communication/Mobiles/Images/249671_20_egmigk.png?tr=w-640" alt="Product Image 4" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444546/Croma%20Assets/Communication/Mobiles/Images/249671_3_wpepft.png?tr=w-640" alt="Product Image 5" class="thumbnail" onclick="replaceMainImage(this)">
                        <img src="https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1662444548/Croma%20Assets/Communication/Mobiles/Images/249671_4_avnn19.jpg?tr=w-640" alt="Product Image 6" class="thumbnail" onclick="replaceMainImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>Realme 9 5G SE (Starry Glow, 6GB RAM, 128GB Storage)</h1>
                    <div class="ratings">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="rating-count">(1725 Reviews)</span>
                    </div>
                    <p class="price">₹29,000</p>
                    <p>Inclusive of all taxes</p>
                    Colour: <strong>Starry Glow</strong><br><br>
                    <div class="product-details">
                    <strong>Brand</strong> realme<br>
                    <strong>Model Name</strong> 9 5G SE<br>
                    <strong>Network Service Provider</strong> Unlocked for All Carriers<br>
                    <strong>Operating System</strong> Android 11.0<br>
                    <strong>Cellular Technology</strong> 5G<br>
                </div>
                <br>
                <div class="actions">
                    <a href="addToCart.php?product_id=4" class="add-to-cart">Add to Cart</a>
                    <a href="checkout.php?product_id=4" class="buy-now">Buy Now</a>
                </div>
                <br>
                <h1>About Realme 9 5G SE</h1>
                <div class="item-description">
    <ul>
        <li>6 GB RAM | 128 GB ROM | Expandable Upto 1 TB</li>
        <li>16.76 cm (6.6 inch) Full HD+ Display</li>
        <li>48MP + 2MP + 2MP | 16MP Front Camera</li>
        <li>5000 mAh Lithium Polymer Battery</li>
        <li>Qualcomm Snapdragon 778G Processor</li>
    </ul>
    <br>
    <p>The realme 9 5G SE, sporting a plethora of impeccable features, is a treat to the Tech-geeks. Driven by the Snapdragon 778G 5G processor and a 6 nm architecture, this phone delivers an immaculate performance. With the 144 Hz, Adaptive Gaming Screen and a 6-level variable refresh rate, the smoothness in its operation makes this phone irresistible.</p>
    <p>The realme 9 5G SE boasts a robust 5000 mAh battery and it also comes with 30 W Rapid Charging technology that enhances the operational efficiency of this phone. The unique Starlight Texture incorporated in this phone enhances the durability of the device. The 48 MP rear camera, powered by AI, equipped in this smartphone helps capture beautiful images with enthralling clarity. Sporting a huge RAM and internal storage of up to 128 GB, this phone is ideal for both personal and professional usage.</p>
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
