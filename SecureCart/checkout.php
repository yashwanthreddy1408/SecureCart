<?php
// Include the database connection file
require_once 'connection.php';

// Check if product_id is passed in the URL
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
;
if ($product_id !== null) {
    // Execute SQL query to fetch product details
    $sql = "SELECT pname, price, quantity,pimage FROM products WHERE pid = '$product_id'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Product details found
        $row = $result->fetch_assoc();
        $product_name = $row['pname'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $pimage=$row['pimage'];
        $sql1 = "SELECT quantity FROM cart WHERE pid = '$product_id'";
        $quantity_cart = $conn->query($sql1);

        // Check if the query was successful and at least one row was returned
        if ($quantity_cart && $quantity_cart->num_rows > 0) {
            $quantity_row = $quantity_cart->fetch_assoc();
            $quantity_cart = $quantity_row['quantity'];
        } else {
            // Error fetching quantity
            $quantity_cart = 1; // Set quantity to 0 or any default value
        }

        // Check if quantity is zero or below
        if ($quantity <= 0) {
            echo '
            <style>
                .out-of-stock-message {
                    background-color: #fff3cd; /* Light yellow background */
                    color: #856404; /* Dark yellow text */
                    border: 1px solid #ffeeba; /* Light yellow border */
                    border-radius: 8px;
                    padding: 20px;
                    margin: 20px auto;
                    max-width: 600px;
                    text-align: center;
                    font-family: "Arial", sans-serif;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                .out-of-stock-message h2 {
                    font-size: 1.5em;
                    margin-bottom: 10px;
                }
                .out-of-stock-message p {
                    font-size: 1em;
                    margin-bottom: 10px;
                }
                .out-of-stock-message a {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: #ffffff;
                    text-decoration: none;
                    border-radius: 5px;
                }
                .out-of-stock-message a:hover {
                    background-color: #0056b3;
                }
            </style>
            <div class="out-of-stock-message">
                <h2>We\'re sorry, but the item you\'re interested in is currently out of stock.</h2>
                <p>We\'re working hard to restock it as soon as possible. In the meantime, feel free to browse our other products or check back later for updates on availability. Thank you for your understanding!</p>
                <a href="index.php">Back to Home</a>
            </div>
            ';
            exit(); // Stop further execution
        }
        
// Check if quantity is less than 10
        if ($quantity < 10) {
            $lowStockMessage = "Only $quantity left in stock! Order soon.";
        } else {
            $lowStockMessage = ""; // No low stock message
        }
    } else {
        // No product found with the given ID
        echo "Product not found";
        exit(); // Stop further execution
    }
} else {
    // Product ID not passed in the URL or is invalid
    echo "Invalid product ID";
    exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
    <style>
        /* General styles */
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            color: #333;
        }
        :is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
}
        h1 {
            text-align: center;
            color: #2ecc71;
            margin-bottom: 20px;
        }

        #form1 {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .inputBox {
            flex-basis: calc(48% - 10px);
            margin-bottom: 20px;
        }

        .inputBox span {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .box,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #f0c14b;
            color: #111;
            padding: 12px 20px;
            border: 1px solid #a88734;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
            text-align: center; /* Align text in the center */
            text-decoration: none; /* Remove default anchor text decoration */
            display: inline-block; /* Make it behave like a block element */
        }

        .btn:hover {
            background-color: #ddb347;
        }

        .total {
            margin-bottom: 20px;
            text-align: center;
            font-size: 18px;
            color: #333;
        }

        .quantity-message {
            text-align: center;
            font-size: 16px;
            color: #FF5733; /* Red color for warning */
            margin-bottom: 10px;
        }

        .suggestion-message {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        .quantity-heading {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .quantity-adjustment {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .quantity-adjustment button {
            padding: 10px;
            margin: 0 5px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }

        #quantityInput {
            width: 50px;
            text-align: center;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
<?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
    <h1>Checkout</h1>
    


    <div class="total">
        Product: <?php echo $product_name ?><br>
        Subtotal (<?php echo $quantity_cart ?> items): ₹<?php echo $price * $quantity_cart ?>
    </div>

    <?php if ($quantity < 10): ?>
        <div class="quantity-message">
            Only <?php echo $quantity ?> left in stock! Order soon.
        </div>
    <?php endif; ?>

    <div class="suggestion-message">
        Please consider buying additional quantities for future use. Thank you!
    </div>

    <div class="quantity-heading">
        Quantity
    </div>

    <div class="quantity-adjustment">
        <button onclick="decreaseQuantity()">-</button>
        <input type="text" id="quantityInput" value="<?php echo $quantity_cart ?>" onchange="updateQuantity(this.value)" readonly>
        <button onclick="increaseQuantity()">+</button>
    </div>
    <form method="post" action="ordersuccessfull.php?product_id=<?php echo $product_id ?>" name="checkoutForm" onsubmit="return validateForm();" id="form1">
        <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
        <input type="hidden" name="price" value="<?php echo $price ?>">
        
        <input type="hidden" id="quantityFormInput" name="quantity" value="1"> <!-- Quantity value for database update -->
        
        <div class="flex">
            <div class="inputBox">
                <span>Your Name:</span>
                <input type="text" name="name" placeholder="Enter your name" class="box" maxlength="20" required>
            </div>
            <div class="inputBox">
                <span>Your Number:</span>
                <input type="number" name="number" placeholder="Enter your number" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
            </div>
            <div class="inputBox">
                <span>Your Email:</span>
                <input type="email" name="email" placeholder="Enter your email" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>Payment Method:</span>
                <select name="method" class="box" required>
                    <option value="cash on delivery">Cash on Delivery</option>
                    <option value="credit card">Credit Card</option>
                    <option value="paytm">Paytm</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Address Line 01:</span>
                <input type="text" name="flat" placeholder="e.g. Flat Number" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>Address Line 02:</span>
                <input type="text" name="street" placeholder="e.g. Street Name" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>City:</span>
                <input type="text" name="city" placeholder="e.g. Mumbai" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>State:</span>
                <input type="text" name="state" placeholder="e.g. Maharashtra" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>Country:</span>
                <input type="text" name="country" placeholder="e.g. India" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
                <span>Pin Code:</span>
                <input type="number" name="pin_code" placeholder="e.g. 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
            </div>
        </div>
        <button type="submit" class="btn">Place Order</button>
    </form>
    <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <script>
        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateTotalPrice();
            }
        }

        function increaseQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity < <?php echo $stock_quantity ?>) {
                quantityInput.value = currentQuantity + 1;
                updateTotalPrice();
            }
        }

        function updateTotalPrice() {
            var totalPriceElement = document.getElementById('totalPrice');
            var price = <?php echo $price ?>;
            var quantity = parseInt(document.getElementById('quantityInput').value);
            totalPriceElement.innerText = price * quantity;

            // Update hidden form input for quantity submission
            document.getElementById('quantityFormInput').value = quantity;
        }

        function updateQuantity(value) {
            var quantityInput = document.getElementById('quantityInput');
            var intValue = parseInt(value);
            if (intValue > 0 && intValue <= <?php echo $stock_quantity ?>) {
                quantityInput.value = intValue;
                updateTotalPrice();
            } else {
                alert("Please enter a valid quantity.");
                quantityInput.value = <?php echo $quantity_cart ?>;
            }
        }

        function validateForm() {
            var quantityInput = document.getElementById('quantityInput');
            var quantity = parseInt(quantityInput.value);
            if (quantity <= 0 || quantity > <?php echo $stock_quantity ?>) {
                alert("Please enter a valid quantity.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission if quantity is valid
        }
        function validateForm() {
            // Your validation logic here
            // Return true if validation passes, false otherwise
            return true;
        }
    </script>
</body>
</html>
