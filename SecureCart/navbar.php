<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.navbar {
    width: 100%;
}
/* Navbar styles */
.navbar {
    padding: 5px 20px; /* Adjusted padding for the navbar */
    line-height: 25px; /* Decreased line height for navbar elements */
    font-size: 20px;
}
.container-fluid {
    height: 70px; /* Set the height to 400 pixels */
}
.navbar-brand {
    padding: 5px 0; /* Adjusted padding for the navbar brand */
}

.navbar-nav .nav-link {
    padding: 5px 15px; /* Adjusted padding for navbar links */
}

.dropdown-item {
    padding: 5px 15px; /* Adjusted padding for dropdown items */
}
.top-navbar {
    background-color: #232f3e !important; /* Dark blue background color */
    color: #fff; /* White text color */
    padding: 10px 0;
    border-bottom: 2px solid #131921; /* Dark color border */
}
.nav-link active{
    color:white;
}
#logo-image {
    max-width: 140px; /* Adjust the max-width as needed */
    height: auto; /* Maintain aspect ratio */
    margin-right: 10px; /* Optional margin for spacing */
    position: relative;
    margin-top:18px;
}
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffffff; /* Light background color */
    color: #333333; /* Dark text color */
    border: 2px solid #333333; /* Dark border color */
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

.button:hover {
    background-color: #333333; /* Dark background color on hover */
    color: #ffffff; /* Light text color on hover */
    border-color: #ffffff; /* Light border color on hover */
}
.navbar {
    background-color: #343a40; /* Navbar background color */
    padding: 10px 0; /* Optional padding for the navbar */
}

.navbar-brand {
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
}

.nav-link {
    color: white !important; /* Override default link color */
}

.nav-link:hover {
    color: #ffc107 !important; /* Change color on hover */
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
    background-color: #232f3e !important;
    border: none;
    z-index: 9999; /* Ensure dropdown is on top */
}

.dropdown-item {
    color: #fff;
    padding: 8px 15px;
}

.dropdown-item:hover {
    background-color: #232f3e !important;
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
    margin-top:5px;
}

.search-icon:hover {
    background-color: #e68a00; /* Slightly darker orange on hover */
}
    </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg top-navbar" id="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost:8080/test1/SecureCart/index.php" id="logo">
        <span id="logo-image">   
            <img src="./images/logo_1.png" alt="Logo" id="logo-image">
            </span>     
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8080/test1/SecureCart/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">iPhone</a></li>
                            <li><a class="dropdown-item" href="#">Oneplus</a></li>
                            <li><a class="dropdown-item" href="#">Samsung</a></li>
                            <li><a class="dropdown-item" href="#">Realme</a></li>
                            <li><a class="dropdown-item" href="#">Vivo</a></li>
                            <li><a class="dropdown-item" href="#">Oppo</a></li>
                            <li><a class="dropdown-item" href="#">Redmi</a></li>
                            <li><a class="dropdown-item" href="#">Motorola</a></li>
                            <li><a class="dropdown-item" href="#">Asus</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/test1/SecureCart/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/test1/SecureCart/contact.php">Contact</a>
                    </li>
                </ul>
                <div class="search-form">
                <form action="search.php" class="d-flex"method="get" id="searchForm">
                        <input class="form-control me-2" id="search-item" type="text" name="search" placeholder="Search" aria-label="Search">
                        <a href="javascript:void(0);" onclick="submitSearchForm()"><div class="search-icon"></div></a>
                    </form>
                </div>
                <div class="icons">
                <a href="cart.php" class="btn btn-primary">Cart</a>
                    <a href="login_form.php" class="btn btn-primary" id="login-icon">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function submitSearchForm() {
            document.getElementById("navbar").getElementsByTagName("form")[0].submit();
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var categoryLinks = document.querySelectorAll('.dropdown-item');

        categoryLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                var categoryName = this.innerText.trim();
                var searchForm = document.getElementById('searchForm');
                var searchInput = document.getElementById('search-item');

                // Update the search form with the category name and submit
                searchInput.value = categoryName;
                searchForm.submit();
            });
        });
    });
</script>
    </body>
</html>
