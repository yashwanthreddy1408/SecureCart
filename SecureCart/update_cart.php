<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$input = json_decode(file_get_contents('php://input'), true);

if (isset($input['productId']) && isset($input['action'])) {
    $productId = $input['productId'];
    $action = $input['action'];

    if ($action === 'increase') {
        $updateQuery = "UPDATE cart SET quantity = quantity + 1, total_price = (quantity + 1) * price WHERE pid = $productId";
    } elseif ($action === 'decrease') {
        $updateQuery = "UPDATE cart SET quantity = GREATEST(1, quantity - 1), total_price = GREATEST(1, quantity - 1) * price WHERE pid = $productId";
    } elseif ($action === 'delete') {
        $deleteQuery = "DELETE FROM cart WHERE pid = $productId";
        if (mysqli_query($conn, $deleteQuery)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
        exit; // Exit after handling deletion
    }

    if (mysqli_query($conn, $updateQuery)) {
        // Fetch the updated quantity and total price
        $newQuantityQuery = "SELECT quantity, price, total_price FROM cart WHERE pid = $productId";
        $newQuantityResult = mysqli_query($conn, $newQuantityQuery);

        if ($newQuantityResult && mysqli_num_rows($newQuantityResult) > 0) {
            $newQuantityRow = mysqli_fetch_assoc($newQuantityResult);
            $newQuantity = $newQuantityRow['quantity'];
            $price = $newQuantityRow['price'];
            $newTotalPrice = $newQuantity * $price;
            // Update the total price in the database
            $updateTotalPriceQuery = "UPDATE cart SET total_price = $newTotalPrice WHERE pid = $productId";
            mysqli_query($conn, $updateTotalPriceQuery);
            echo json_encode(['success' => true, 'newQuantity' => $newQuantity, 'newTotalPrice' => $newTotalPrice]);
        } else {
            echo json_encode(['success' => false]);
        }
    } else {
        echo json_encode(['success' => false]);
    }
}

mysqli_close($conn);
?>
