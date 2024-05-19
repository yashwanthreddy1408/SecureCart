<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureCart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <style>
        /* Your custom styles here */
        .amzbtn {
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

        .amzbtn:hover {
            background-color: #ddb347;
        }

        body {
            margin: 0;
            font-family: 'Amazon Ember', Arial, sans-serif;
        }

        .top-navbar {
            background-color: #131921;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .navbar-brand {
            margin-right: 15px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            outline: none;
        }

        .navbar-toggler-icon {
            background-image: url("./images/menu.png");
        }

        .nav-link {
            color: white !important;
        }

        .dropdown-menu {
            background-color: #430056 !important;
        }

        .dropdown-item {
            color: white !important;
        }

        .search-icon {
            margin-right: 10px;
        }

        .form-control,
        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            cursor: pointer;
            color: #333; /* Change text color for buttons */
            transition: all 0.3s ease; /* Add transition effect */
        }

        .form-control:focus,
        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(255, 153, 0, 0.5); /* Add focus border color */
        }

        .icons {
            display: flex;
            align-items: center;
            margin-left: auto; /* Move icons to the right */
        }

        .icons a {
            padding: 8px 15px;
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
            border-radius: 20px;
            background-color: #FF9900;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .icons a.btn {
            border-radius: 0; /* Make button rectangular */
        }

        .icons a.btn:hover {
            background-color: #FFAD33; /* Change background color on hover */
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icons .btn {
            margin-left: 15px; /* Adjust spacing between search and login */
            margin-top: -10px;
            height: 100%; /* Set height to match the search bar */
        }

        .form-control {
            height: 100%; /* Set height to match the search button */
        }

        .form-control {
            padding: 8px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            cursor: text; /* Change cursor to text */
        }

        @media (max-width: 991.98px) {
            .icons {
                flex-direction: column;
                align-items: flex-start;
            }

            .icons .btn {
                margin-top: 10px; /* Adjust spacing between search and login for smaller screens */
            }
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

<div class="container" id="contact">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-phone"> Phone</i>
                <h6>+91 9894171717 </h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-envelope"> Email</i>
                <h6>SecureCarthiva@gmail.com</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-location-dot"> Address</i>
                <h6>Telangana , India</h6>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" id="nameInput" placeholder="Name">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" id="emailInput" placeholder="Email">
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <input type="text" class="form-control form-control" id="phoneInput" placeholder="Phone">
        </div>
        <div class="form-group" style="margin-top: 30px;">
            <textarea class="form-control" id="messageInput" rows="5" placeholder="Message"></textarea>
        </div>
        <br>
        <div class="messagebtn" style="text-align:center;">
            <a href="#" id="messageBtn" class="amzbtn">Message</a>
        </div>
    </div>
</div>

<div class="container" id="newslater">
    <h3 class="text-center">Subscribe To The SecureCart For Latest uploads.</h3>
    <div class="input text-center">
        <input type="text" placeholder="Enter Your Email.." id="emailInput">
        <button id="subscribe">SUBSCRIBE</button>
        <span id="subscribeResponse"></span>
    </div>
</div>

<footer>
<?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    document.getElementById('messageBtn').addEventListener('click', function(event) {
        var name = document.getElementById('nameInput').value.trim();
        var email = document.getElementById('emailInput').value.trim();
        var phone = document.getElementById('phoneInput').value.trim();
        var message = document.getElementById('messageInput').value.trim();

        // Check if any of the input fields have text
        if (name !== '' || email !== '' || phone !== '' || message !== '') {
            // Redirect to thankyou.html
            window.location.href = 'thankyou.html';
        } else {
            // Prevent the default form submission and do nothing
            event.preventDefault();
        }
    });
</script>

</body>
</html>
