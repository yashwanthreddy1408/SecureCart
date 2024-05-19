<?php
session_start();
require_once 'connection.php';
if (isset($_SESSION['user_email'])) {
    // Get user email from the session
    $user_email = $_SESSION['user_email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="cart_style.css">
    <!-- Custom CSS -->
    <style>
        *{
            font-family: 'Amazon Ember', Arial, sans-serif;
        }
        .product-image-container {
            display: flex;
            justify-content: center;
        }

        .product-image {
            max-width: 200px;
            height: auto;
            border-radius: 5px;
        }

        .message-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .message-icon img {
            width: 50px;
            height: 50px;
        }

        .message-text {
            margin-left: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        .orders-table th,
        .orders-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center; /* Center align table row names */
        }

        .orders-table th {
            background-color: #f2f2f2;
            /* color: #333; */
            font-weight: bold;
        }
    </style>
    </head>
<body>
    <!-- Navbar -->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
        <div class="cart">
        <!-- Shopping Cart -->
        <h2 class="mt-4">Shopping Cart</h2><br>
        <table class="orders-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Product Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Retrieve cart items for the logged-in user
                $query = "SELECT p.pname, c.price, p.pimage 
                          FROM cart c
                          JOIN products p ON c.pid = p.pid
                          WHERE c.user_email='$user_email'";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productName = $row['pname'];
                        $price = $row['price'];
                        $productImage = $row['pimage'];

                        echo "<tr>
                                <td>$productName</td>
                                <td>$price</td>
                                <td class='product-image-container'><img src='$productImage' class='product-image'></td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No items in cart</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
            </div>
    <!-- Footer -->
    <div class="footer">
        <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
