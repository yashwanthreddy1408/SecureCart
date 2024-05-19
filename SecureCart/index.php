<?php
    require_once 'connection.php';
    $sql = "SELECT * FROM products";
    $all_product = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Custom CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
    <style>
        .product-card .details-container {
            line-height: 1.4; /* Adjust the line height for better readability */
        }
        .product-card .details-container p {
            margin-bottom: 0.5em; /* Adjust the margin for better spacing */
        }
    </style>
</head>
<body>

<?php include 'navbar.php'?>
<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
        <p>Loading...</p>
    </div>
</div>
    <!-- Image Slider -->
    <!-- Image Slider -->
<div id="imageSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-speed="1000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714736664_360.jpg" loading="lazy" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714715823_323.jpg" loading="lazy" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1712038743_361.jpg" loading="lazy" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714373337_419.jpg" loading="lazy" class="d-block w-100" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711020115_429.jpg" loading="lazy" class="d-block w-100" alt="Slide 5">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711020244_393.jpg" loading="lazy" class="d-block w-100" alt="Slide 6">
        </div>
        <div class="carousel-item">
            <img src="https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711024936_233.jpg" loading="lazy" class="d-block w-100" alt="Slide 7">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="custom-dropdown ml-auto">
                <button type="button" class="custom-dropdown-btn" id="sortDropdownButton">
                    Sort By
                </button>
                <div class="custom-dropdown-content" id="sortDropdownContent">
                    <a class="dropdown-sort" href="sort.php?sort=name_a_z">Name (A-Z)</a>
                    <a class="dropdown-sort" href="sort.php?sort=price_low_high">Price (Low to High)</a>
                    <a class="dropdown-sort" href="sort.php?sort=price_high_low">Price (High to Low)</a>
                    <a class="dropdown-sort" href="sort.php?sort=date_new_old">Date (Newest to Oldest)</a>
                    <a class="dropdown-sort" href="sort.php?sort=date_old_new">Date (Oldest to Newest)</a>
                </div>
                <input type="hidden" id="sortDropdown" name="sort" value="">
            </div>
        </div>
    </div>
</div>


<br>
<!-- Product Card -->
<?php
while ($row = $all_product->fetch_assoc()) {
    $product_id = $row['pid'];
    $product_name = $row['pname'];
    $product_price = $row['price'];
    $product_image = $row['pimage'];
    $product_file = $row['pfile'];
?>

<div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
        <p>Loading...</p>
    </div>
</div>
<div class="container">
    <div class="product-card">
        <div class="image-container">
            <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="product-image">
        </div>
        <div class="details-container">
            <strong><h1 class="product-title"><a id="productLink" href="<?php echo $product_file; ?>"><?php echo $product_name; ?></a></h1></strong>
            <div class="star-rating">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
            </div>
            <p class="product-info">2K+ bought in past month</p>
            <strong><p class="product-price" style="color:black;">₹<?php echo $product_price; ?></p></strong>
            <p class="product-info">Save extra with No Cost EMI</p>
            <p class="product-info">
                <span class="delivery-info">FREE delivery Thu, 16 May</span>
                <span class="delivery-info"><strong>Or fastest delivery Tomorrow 8 am - 12 pm</strong></span>
            </p>
            <p class="product-info"><strong>Service:</strong> Installation</p><br>
            <a href="addToCart.php?product_id=<?php echo $product_id; ?>" data-product-id="<?php echo $product_id; ?>" class="add-to-cart-btn">Add to Cart</a>

        </div>
    </div>
</div>
<?php } ?>
<!-- offer -->
<div class="container" id="offer">
    <div class="row">
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over ₹1717</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
        </div>
    </div>
</div>
<!-- offer --><br><br>
<a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
 <!--navbar-->
 <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <!-- navbar -->   

<script>
    // Activate the carousel with a 4-second interval
    var myCarousel = document.querySelector('#imageSlider');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 4000  // Change slide every 4 seconds
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"></script>
<script>
    var priceSlider = new Slider('#priceSlider', {
        tooltip: 'always',
        tooltip_position: 'bottom'
    });
</script>

<!-- Bootstrap JS -->
<script src="script_index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
