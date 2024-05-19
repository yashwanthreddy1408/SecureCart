<?php
require_once 'connection.php';

// Default SQL query to fetch all products
$sql = "SELECT * FROM products";

// Check if the sort parameter is set and modify the query accordingly
if (isset($_GET['sort'])) {
    $sort_type = $_GET['sort'];
    switch ($sort_type) {
        case 'price_low_high':
            $sql .= " ORDER BY price ASC";
            break;
        case 'price_high_low':
            $sql .= " ORDER BY price DESC";
            break;
        case 'date_new_old':
            $sql .= " ORDER BY created_at DESC";
            break;
        case 'date_old_new':
            $sql .= " ORDER BY created_at ASC";
            break;
        case 'name_a_z':
            $sql .= " ORDER BY pname ASC";
            break;
        default:
            // Default sorting if invalid sort type is provided
            $sql .= " ORDER BY created_at DESC";
            break;
    }
} else {
    // Default sorting if no sort parameter is provided
    $sql .= " ORDER BY created_at DESC";
}

$all_product_result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Custom CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <?php include 'navbar.php'?>

    <!-- Product display code goes here -->
    <div class="container">
        <?php while ($row = $all_product_result->fetch_assoc()) : ?>
        <div class="product-card">
            <div class="image-container">
                <img src="<?php echo $row['pimage']; ?>" alt="<?php echo $row['pname']; ?>" class="product-image">
            </div>
            <div class="details-container">
                <strong><h1 class="product-title"><a id="productLink" href="<?php echo $row['pfile']; ?>"><?php echo $row['pname']; ?></a></h1></strong>
                <div class="star-rating">
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                    <i class="fa-solid fa-star checked"></i>
                </div>
                <p class="product-info">2K+ bought in past month</p>
                <strong><p class="product-price" style="color:black;">₹<?php echo $row['price']; ?></p></strong>
                <p class="product-info">Save extra with No Cost EMI</p>
                <p class="product-info">
                    <span class="delivery-info">FREE delivery Thu, 16 May</span>
                    <span class="delivery-info"><strong>Or fastest delivery Tomorrow 8 am - 12 pm</strong></span>
                </p>
                <p class="product-info"><strong>Service:</strong> Installation</p><br>
                <a href="addToCart.php?product_id=<?php echo $row['pid']; ?>" data-product-id="<?php echo $row['pid']; ?>" class="add-to-cart-btn">Add to Cart</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
