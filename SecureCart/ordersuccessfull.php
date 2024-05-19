<?php
// Include the database connection file
require_once 'connection.php';
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
echo "Hello";
echo $product_id;
if ($product_id !== null) {
    // Execute SQL query to fetch product details
    $sql = "SELECT pname, price, quantity, pimage FROM products WHERE pid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Product details found
        $row = $result->fetch_assoc();
        $product_name = $row['pname'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $pimage = $row['pimage'];
    } else {
        echo "Invalid product ID or product not found";
        exit(); // Stop further execution
    }
} else {
    echo "Product ID not passed in the URL";
    exit(); // Stop further execution
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required fields are set and not empty
    $requiredFields = ['product_id', 'name', 'number', 'email', 'method', 'flat', 'street', 'city', 'state', 'country', 'pin_code', 'quantity'];
    $validInput = true;
    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $validInput = false;
            break;
        }
    }

    if ($validInput) {
        // Sanitize and validate input data
        $product_id = $_POST['product_id'];
        $name = htmlspecialchars($_POST['name']);
        $number = htmlspecialchars($_POST['number']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $method = htmlspecialchars($_POST['method']);
        $flat = htmlspecialchars($_POST['flat']);
        $street = htmlspecialchars($_POST['street']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $country = htmlspecialchars($_POST['country']);
        $pin_code = $_POST['pin_code'];
        $quantity = $_POST['quantity'];
        
        // Fetch price from the database for the given product_id
        $sqlPrice = "SELECT price FROM products WHERE pid = ?";
        $stmtPrice = $conn->prepare($sqlPrice);
        $stmtPrice->bind_param("i", $product_id);
        $stmtPrice->execute();
        $resultPrice = $stmtPrice->get_result();

        if ($resultPrice->num_rows > 0) {
            $rowPrice = $resultPrice->fetch_assoc();
            $price = $rowPrice['price'];

            // Calculate total price
            $totalPrice = $quantity * $price;

            // Update the quantity in the database
            $sqlUpdateQuantity = "UPDATE products SET quantity = quantity - ? WHERE pid = ?";
            $stmtUpdateQuantity = $conn->prepare($sqlUpdateQuantity);
            $stmtUpdateQuantity->bind_param("ii", $quantity, $product_id);
            $stmtUpdateQuantity->execute();

            // Insert order details into orders table (you may need to create this table)
            $sqlInsertOrder = "INSERT INTO orders (product_id, name, number, email, method, flat, street, city, state, country, pin_code, quantity, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtInsertOrder = $conn->prepare($sqlInsertOrder);
            $stmtInsertOrder->bind_param("isssssssssiii", $product_id, $name, $number, $email, $method, $flat, $street, $city, $state, $country, $pin_code, $quantity, $totalPrice);
            $stmtInsertOrder->execute();

            // Redirect to success page or show a success message
            header('Location: ordersuccessfull.php?product_id='.$product_id.'');
            exit();
        } else {
            echo "Product price not found";
            exit();
        }
    } else {
        echo 'All fields are required';
    }
} else {
    echo '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            background-color: #f7f7f7; /* Light gray background */
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .confirmation-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333; /* Dark gray heading */
            font-size: 32px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #444; /* Darker gray text */
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 20px;
            font-size: 16px;
        }

        strong {
            color: #333; /* Dark gray strong text */
        }

        .amzbtn,
        .track-order-link,
        .qr-code-link {
            display: inline-block;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: #333; /* Dark gray text */
            background-color: #ddd; /* Light gray button */
            border: 2px solid #ccc; /* Light gray border */
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            margin-top: 20px;
        }

        .amzbtn:hover,
        .track-order-link:hover,
        .qr-code-link:hover {
            background-color: #ccc; /* Light gray on hover */
            border-color: #bbb; /* Slightly darker border on hover */
        }

        .qr-code-info {
            margin-top: 30px;
            text-align: center;
        }

        .qr-code-info p {
            color: #444; /* Darker gray text */
            font-size: 18px;
            margin-bottom: 10px;
        }

        .qr-code-link {
            color: #444;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .qr-code-link:hover {
            color: #0056b3; /* Darker blue on hover */
        }
        .confirmation-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: green; /* Change color to green */
            font-size: 32px;
            margin-bottom: 20px;
            display: inline-block; /* Align the green tick next to the heading */
        }

        .green-tick {
            color: green;
            font-size: 32px;
            vertical-align: middle; /* Align vertically with the heading */
            margin-right: 10px; /* Add some space between the tick and heading */
        }

        p {
            font-size: 18px;
            color: #444; /* Darker gray text */
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="confirmation-container">
    <h1><span class="green-tick">&#10004;</span> Order Placed Successfully</h1>
        <p>Thank you for choosing us! Your order has been confirmed and is on its way.</p>
        <div class="info-item">
            <?php $randno=rand(1000000,9999999);?>
            <p>Order Number : <strong><?php echo $randno; ?></strong></p>
            <p>Product Name : <strong><?php echo $product_name; ?></strong></p>
            <!-- Add more information as needed -->
        </div>
        <div class="info-item">
            <p>Estimated Delivery Time: <strong>2-3 business days</strong></p>
            <!-- Customize the delivery time as needed -->
        </div>
        <div class="info-item">
            <p>Contact Delivery Person: <strong>+91 9917171717</strong></p>
            <p>Customer Support: <strong>SecureCart@gmail.com</strong></p>
            <!-- Add more contact information as needed -->
        </div>
        <a href="index.php" class="amzbtn">Continue Shopping</a>
        <a href="TrackingOrder.php?product_id=<?php echo $product_id?>" class="track-order-link">Track Your Order</a>
        <div class="qr-code-info">
            <p>We've sent you a QR code. Scan it on our website to check its authenticity.</p>
            <p><a href="scanqr.php" class="qr-code-link">Click here to check</a></p>
        </div>
    </div>
</body>
</html>
