<?php
session_start();

// Check if the user is logged in and is not an admin
if (!isset($_SESSION['user_name'])) {
    header('Location: login_form.php');
    exit();
}

// Access user information
$userUsername = $_SESSION['user_name'];
$userEmail = $_SESSION['user_email'];  // Assuming you want to use the email from the session

// Connect to the database
$server = "localhost";
$username = "root";
$password = "";
$database = "test";
$con = mysqli_connect($server, $username, $password, $database);

// Check if the connection is successful
if (!$con) {
    die("Connection to the database failed due to " . mysqli_connect_error());
}

// Function to update the username
function updateUsername($newUsername, $email, $con) {
    $query = "UPDATE user_form SET name='$newUsername' WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;
    }
}

// Check if the form for updating username is submitted
if (isset($_POST['update_username'])) {
    $newUsername = $_POST['new_username'];
    if (updateUsername($newUsername, $userEmail, $con)) {
        // Update successful
        $userUsername = $newUsername; // Update the username in the session variable
        $updateMessage = "Your username has been successfully updated to $newUsername!";
    } else {
        // Update failed
        $updateMessage = "Failed to update username.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- fonts links -->
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Amazon Ember', Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        /* Container styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 10px;
            position: relative;
            padding-top: 20px;
        }

        /* Profile section */
        .profile-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-details {
            font-size: 18px;
            color: #555;
        }

        /* User actions */
        .user-actions {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .user-actions a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #ff9900;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .user-actions a:hover {
            background-color: #e68a00;
            transform: scale(1.1);
        }

        /* Update username section */
        .update-username {
            text-align: center;
            margin-top: 30px;
        }

        .update-username form {
            max-width: 400px;
            margin: 0 auto;
        }

        .update-username label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .update-username input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .update-username button {
            background-color: #ff9900;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .update-username button:hover {
            background-color: #e68a00;
        }

        /* Update message */
        #update-message {
            margin-top: 20px;
            text-align: center;
            color: #4CAF50;
        }

        /* Orders table */
        .orders-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        .orders-table th,
        .orders-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .orders-table th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        .product-image {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
        }
        .logout-link {
            display: block;
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .logout-link:hover {
            background-color: #0056b3;
        }
        :is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
}
    </style>
</head>

<body>
        <!--navbar-->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
    <!-- navbar -->  
        <h1 >Welcome <?php echo $userUsername ?></h1>
  

    <div class="profile-section">
        <div class="user-details">
            <p><strong>Username:</strong> <?php echo $userUsername ?></p>
            <p><strong>Email:</strong> <?php echo $userEmail ?></p>
        </div>
    </div>

    <div class="container">

        <div class="user-actions">
            <a href="http://localhost:8080/test1/SecureCart/index.php">Continue Shopping</a>
            <a href="http://localhost:8080/test1/SecureCart/scanqr.php">Scan to verify your product</a>
        </div>

        <!-- Update Username Form -->
        <div class="update-username">
            <h2>Update Username</h2>
            <form action="" method="post">
                <label for="new_username">New Username:</label>
                <input type="text" id="new_username" name="new_username" placeholder="Enter New Username" required>
                <button type="submit" name="update_username">Update Username</button>
            </form>
        </div>

        <!-- Update Message -->
        <?php if (isset($updateMessage)) : ?>
            <div id="update-message"><?php echo $updateMessage; ?></div>
        <?php endif; ?>

        <!-- Orders table -->
        <h2>My Orders</h2>
        <table class="orders-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Total Price</th>
                <th>Quantity</th>
                <th>Order Date</th>
                <th>Product Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch and display orders for the user along with product details
            $query = "SELECT o.id, p.pname, o.total_price, o.quantity, o.order_date, p.pimage 
                      FROM orders o
                      JOIN products p ON o.product_id = p.pid
                      WHERE o.email='$userEmail'";
            $result = mysqli_query($con, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $orderId = $row['id'];
                    $productName = $row['pname'];
                    $totalPrice = $row['total_price'];
                    $quantity = $row['quantity'];
                    $orderDate = $row['order_date'];
                    $productImage = $row['pimage'];

                    echo "<tr>
                            <td>$orderId</td>
                            <td>$productName</td>
                            <td>$totalPrice</td>
                            <td>$quantity</td>
                            <td>$orderDate</td>
                            <td><img src='$productImage' class='product-image'></td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No orders found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    </div>
    <!-- footer -->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <!-- footer -->

</body>
            <script>
              var anchorElement = document.getElementById('iconsi');
        if (anchorElement) {
            anchorElement.textContent = 'Logout';
            anchorElement.href = 'logout.php'; // Change the URL as needed
        }
        </script>
</html>
