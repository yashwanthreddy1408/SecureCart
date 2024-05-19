<?php
// Assuming you have a database connection established in connection.php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['quantity'])) {
    $quantity = intval($_POST['quantity']);
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;

    // Fetch the price of the product from the database based on the product_id
    $sql = "SELECT price FROM products WHERE pid = '$product_id'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $total_price = $price * $quantity;
        echo $total_price; // Send the total price back to JavaScript
    } else {
        echo "Error: Product not found";
    }
} else {
    echo "Error: Invalid request";
}

// Close the database connection
$conn->close();
?>
