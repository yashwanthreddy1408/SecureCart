<?php
session_start();
include('connection.php'); // Include your database connection script

if(isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Check if the product is already in the cart
    $checkCartQuery = "SELECT * FROM cart WHERE pid = $productId";
    $checkCartResult = mysqli_query($conn, $checkCartQuery);

    if(mysqli_num_rows($checkCartResult) > 0) {
        // Product already in cart, update quantity and total price
        $updateCartQuery = "UPDATE cart SET quantity = quantity + 1, total_price = total_price + price WHERE pid = $productId";
        mysqli_query($conn, $updateCartQuery);
    } else {
        // Product not in cart, insert with default quantity 1
        $productQuery = "SELECT pname, price, pimage,pfile FROM products WHERE pid = $productId";
        $productResult = mysqli_query($conn, $productQuery);

        if(mysqli_num_rows($productResult) > 0) {
            $productData = mysqli_fetch_assoc($productResult);
            $productName = $productData['pname'];
            $productPrice = $productData['price'];
            $productImage = $productData['pimage'];
            $totalPrice = $productPrice; // Default total price is same as price
            $product_file=$productData['pfile'];
            $insertCartQuery = "INSERT INTO cart (pid, pname, price, quantity, total_price, pimage,pfile) VALUES ($productId, '$productName', $productPrice, 1, $totalPrice, '$productImage','$product_file')";
            mysqli_query($conn, $insertCartQuery);
        }
    }

    // Redirect to cart page or show success message
    header("Location:cart.php");
    exit();
} else {
    // Invalid request or user not logged in
    echo "Invalid request !";
}

mysqli_close($conn);
?>
