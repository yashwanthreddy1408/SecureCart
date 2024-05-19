<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["admin_name"])) {
    header("Location: login_form.php");
    exit();
}

// Access admin information
$adminUsername = $_SESSION["admin_name"];
$adminEmail = $_SESSION["admin_email"];
?>

<?php
if (isset($_POST['submit'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password, 'test');

    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $admin_email = $_POST['admin_email'];
    $price = $_POST['price'];
    $pimage = $_POST['pimage'];
    $quantity = $_POST['quantity']; // Added line for quantity

    // Generate QR code
    $code1 = $pid;
    $code2 = $admin_email;
    $pqr = $code1 . '|' . $code2;

    // Insert data into the database
    $sql = "INSERT INTO add_products (pid, pname, admin_email, price, pimage, pqr, quantity) VALUES ('$pid', '$pname', '$admin_email', '$price', '$pimage', '$pqr', $quantity)";
    mysqli_query($con, $sql);
    $sqlq = "INSERT INTO products (pid, pname, admin_email, price, pimage, pqr, quantity) VALUES ('$pid', '$pname', '$admin_email', '$price', '$pimage', '$pqr', $quantity)";
    mysqli_query($con, $sqlq);
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <style>
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        :is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
}
        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .user-details {
            text-align: center;
            margin: 20px;
            color: #555;
        }

        .profile-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-form label {
            display: block;
            margin-bottom: 15px;
            color: #333;
        }

        .profile-form input {
            width: calc(100% - 24px); /* Adjusting for padding */
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .profile-form button {
            background-color: #FF9900; 
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }

        .profile-form button:hover {
            background-color: #FF8C00; 
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

        .col-sm-3 {
            text-align: center;
        }

        .col-sm-3 img {
            max-width: 100%;
            height: auto;
        }
        .top-navbar {
            background-color: #232f3e !important; /* Dark blue background color */
            color: #fff; /* White text color */
            padding: 10px 0;
            border-bottom: 2px solid #131921; /* Dark color border */
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff; /* White text color */
            font-size: 24px;
            text-decoration: none;
        }

        .navbar-nav .nav-link {
            color: #fff; /* White text color */
            padding: 10px 15px;
            text-decoration: none;
        }

        .navbar-nav .nav-link:hover {
            color: #ff9900; /* Amazon's orange color on hover */
        }

        .navbar-toggler {
            color: #fff; /* White text color */
            border-color: #fff; /* White border color */
        }

        .navbar-toggler-icon {
            background-image: url("./images/menu.png");
            width: 30px;
            height: 30px;
        }

        .form-control {
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ccc; /* Light gray border */
            padding: 8px 15px;
            background-color: #fff; /* White background color */
            color: #333; /* Dark text color */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff9900; /* Amazon's orange color on focus */
            box-shadow: 0 0 0 0.1rem rgba(255, 153, 0, 0.25); /* Orange shadow on focus */
        }

        .btn-primary {
            background-color: #ff9900; /* Amazon's orange color */
            border-radius: 4px; /* Rounded corners */
            color: #fff; /* White text color */
            border: none; /* No border */
            padding: 8px 15px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e68a00; /* Slightly darker orange on hover */
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #131921; /* Dark background color */
            border: none;
        }

        .dropdown-item {
            color: #fff; /* White text color */
            padding: 8px 15px;
        }

        .dropdown-item:hover {
            background-color: #ff9900; /* Amazon's orange color on hover */
        }

        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-link {
                padding: 10px 0;
            }

            .search-form {
                margin-top: 10px;
                justify-content: center;
            }

            .icons {
                margin-top: 10px;
            }
        }

        /* Custom styles for the search icon */
        .search-icon {
            width: 30px;
            height: 30px;
            background-image: url("./images/searchicon.png");
            background-size: cover;
            background-color: #ff9900; /* Amazon's orange color */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-icon:hover {
            background-color: #e68a00; /* Slightly darker orange on hover */
        }
    </style>
</head>
<body> 
    <!--navbar-->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>
    <!-- navbar -->    
    <h1>Welcome, <?php echo $adminUsername; ?> (Admin)</h1>

    <div class="user-details">
        <p><strong>Admin name:</strong> <?php echo $adminUsername?></p>
        <p><strong>Email:</strong> <?php echo $adminEmail?></p>
    </div>

    <form action="" method="post" class="profile-form">
        <h2 style="text-align:center;"><strong>Add Products</strong></h2>

        <label for="pid">Model Number</label>
        <input type="text" id="pid" name="pid" required placeholder="Enter Model Number">

        <label for="pname">Product Name</label>
        <input type="text" id="pname" name="pname" required placeholder="Enter Product Name">

        <label for="admin_email">Your Email</label>
        <input type="text" id="admin_email" name="admin_email" required placeholder="Enter your email">

        <label for="price">Price</label>
        <input type="text" id="price" name="price" required placeholder="Enter Price">

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" required placeholder="Enter Quantity">

        <label for="pimage">Product Image Address</label>
        <input type="text" id="pimage" name="pimage" required placeholder="Enter Product Image address">

        <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
    </form>

    <div class="col-sm-3">
        <?php
        if (isset($_POST['submit'])) {
            $code1 = $_POST['pid'];
            $code2 = $_POST['admin_email'];
            $code = $code1 . '|' . $code2;

            echo "
                <img src='https://quickchart.io/qr?text=$code &size=300'>
                <br><br>
                <p> Product Added successfully <br>  Save this QR Code<br></p>
            ";
        }
        ?>
    </div>

    <a href="logout.php" class="logout-link">Logout</a>

    <!-- Footer -->
    <footer>
        <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    </footer>
</body>
</html>
