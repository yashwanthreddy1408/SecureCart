<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
    <style>
        /* Global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Amazon Ember", Arial, sans-serif;
            background-color: #f0f2f5;
            color: #0f1111;
        }

        /* Product card container */
        .product-card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        /* Product image container */
        .image-container {
            background-color: #f0f0f0;
            flex-basis: 30%;
            padding: 20px;
        }

        /* Product image */
        .product-image {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Product details container */
        .details-container {
            flex-grow: 1;
            padding: 20px;
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

        .star-rating {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .star {
            color: #FFD700;
            font-size: 16px;
            margin-right: 5px;
        }

        .product-price {
            font-size: 18.4px;
            color: #000;
            margin-bottom: 10px;
        }

        .product-info {
            margin-bottom: 10px;
        }

        .add-to-cart-btn {
            padding: 10px 20px;
            background-color: #f6c917;
            color: #0f1111;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .add-to-cart-btn:hover {
            background-color: #eeac17;
            text-decoration: none;
        }

        /* Offer section */
        #offer {
            margin-top: 50px;
        }

        .offer-item {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
    <!-- Navbar -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM `products` WHERE pid LIKE '%$search%' OR pname LIKE '%$search%' OR price LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['pid'];
            $product_name = $row['pname'];
            $product_price = $row['price'];
            $product_image = $row['pimage'];
            $product_file = $row['pfile'];
?>
<br>
            <div class="container">
                <div class="product-card">
                    <div class="image-container">
                        <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="product-image">
                    </div>
                    <div class="details-container">
                        <strong><h1 class="product-title"><a href="<?php echo $product_file; ?>"><?php echo $product_name; ?></a></h1></strong>
                       
                        <div class="star-rating">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <!-- Include other star icons -->
                </div>
                <p class="product-info">2K+ bought in past month</p>
                <p class="product-price" style="color:black;">₹<?php echo $product_price; ?></p>
                <p class="product-info">Save extra with No Cost EMI</p>
                <p class="product-info">
                    <span class="delivery-info">FREE delivery Thu, 16 May</span>
                    <span class="delivery-info"><strong>Or fastest delivery Tomorrow 8 am - 12 pm</strong></span>
                </p>
                <p class="product-info"><strong>Service:</strong> Installation</p><br>
                        <a href="addTocart.php?product_id=<?php echo $product_id; ?>" class="add-to-cart-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo '<div class="container">
                <div class="message-container">
                    <p class="message">No products found matching your search.</p>
                    <a href="javascript:history.back()" class="back-link">Go back</a>
                </div>
            </div>';
    }
}
?>

<div class="container" id="offer">
    <div class="row">
        <div class="col-md-3 py-3 py-md-0 offer-item">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over ₹1717</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 offer-item">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 offer-item">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0 offer-item">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
        </div>
    </div>
</div>
<!-- Navbar -->
<?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <!-- Navbar -->
</body>
</html>
