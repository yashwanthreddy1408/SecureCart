<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureCart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="style.css" rel="stylesheet">
    <!-- fonts links -->
    <style>
      a{
        text-decoration:none;
        color:black;
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
.form-control {
    padding: 8px;
    border: none;
    border-radius: 20px;
    background-color: #fff;
    cursor: text; /* Change cursor to text */
}
.navbar-toggler:focus {
    outline: none;
}

.navbar-toggler-icon {
    background-image: url("./images/menu.png");
}
:is(p, span, div) {
    font-family: 'Roboto', sans-serif;
    /* Additional styles for numbers */
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
    margin-top:-10px;
    height: 100%; /* Set height to match the search bar */
}

.form-control {
    height: 100%; /* Set height to match the search button */
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
/* ----------- Non-Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 1) { 
}

/* ----------- Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (min-resolution: 192dpi) { 
} 
      /* Add your custom styles here */
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
      }

      header {
          background-color: #333;
          color: #fff;
          text-align: center;
          padding: 1em;
      }

      section {
          margin: 20px;
          padding: 20px;
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .product {
          display: flex;
          margin-bottom: 20px;
      }

      .product img {
          max-width: 360px;
          height: auto;
          border: 1px solid #ddd;
          border-radius: 8px;
          margin-right: 20px;
      }

      .product-details {
          flex: 1;
      }

      button {
          background-color: #333;
          color: #fff;
          padding: 10px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }

      
  </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
   <!--navbar-->

   <?php include 'C:\xampp\htdocs\test1\SecureCart\navbar.php'; ?>

<!-- navbar -->
   <div class="container" id="about">
        <h3>PRODUCTS</h3>
<!-- Product Details Section -->
<section class="product"> <a name=""></a>
  <a name=""></a>
  <div class="product-details">
      <h2>Iphone 13 Pro</h2>
      <p>Price:₹139999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 6 GB<br>
        Processor : Apple A15 Bionic<br>
        Rear Camera : 12 MP + 12 MP + 12 MP<br>
        Front Camera : 12 MP<br>
        Battery : 3095 mAh<br>
        Display : 6.1 inches (15.49 cm)<br>
        Launch Date : September 17, 2021 (Official)<br>
        Operating System : iOS v15<br>
        Chipset : Apple A15 Bionic
      </p>
  </div>
  <div>
      <img src="./images/iphone13.jpeg"  alt ="Product 1 Image">
  </div>
</section>

<section class="product">
   <a name="realme9se"></a>
  <div class="product-details">
      <h2>Realme 9 speed edition</h2>
      <p>Price:₹29000 </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : Qualcomm Snapdragon 778G<br>
        Rear Camera : 48 MP + 2 MP + 2 MP<br>
        Front Camera : 16 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.6 inches (16.76 cm)<br>
        Launch Date : March 10, 2022 (Official)<br>
        Operating System : Android v11Custom UIRealme UI<br>
        Chipset : Qualcomm Snapdragon 778G
      </p>
  </div>
  <div>
      <img src="./images/realme 9se.jpg" width="360px" alt ="Product 1 Image">
  </div>
</section>


<section class="product">
   <a name="oneplus11r"></a>
  <div class="product-details">
      <h2>Oneplus 11r 5G</h2>
      <p>Price:₹49999 </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RRAM : 8 GB<br>
        Processor : Qualcomm Snapdragon 8 Plus Gen 1<br>
        Rear Camera : 50 MP + 8 MP + 2 MP<br>
        Front Camera : 16 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.74 inches (17.12 cm)<br> 
        Launch Date : February 21, 2023 (Official)<br>
        Operating System : Android v13<br>
        Custom UI : Oxygen OS<br>
        Chipset : Qualcomm Snapdragon 8 Plus Gen 1
      </p>
  </div>
  <div>
      <img src="./images/oneplus 11r 5g.jpg"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> <a name="s24"></a>
  <div class="product-details">
      <h2>Samsung S24 Ultra</h2>
      <p>Price:₹154999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 12 GB<br>
        Processor: Qualcomm Snapdragon 8 Gen 3<br>
        Rear Camera : 200 MP + 12 MP + 10 MP + 50 MP<br>
        Front Camera : 12 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.8 inches (17.27 cm)<br>
        Launch Date ; January 18, 2024 (Official)<br>
        Operating System : Android v14Custom UISamsung One UI<br>
        Chipset : Qualcomm Snapdragon 8 Gen 3
      </p>
  </div>
  <div>
      <img src="./images/s24.webp"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="iphonexr"></a>
  <div class="product-details">
      <h2>Iphone XR</h2>
      <p>Price:₹50000 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>
        RAM : 3 GB<br>
        Processor : Apple A12 Bionic<br>
        Rear Camera: 12 MP<br>
        Front Camera:7 MP<br>
        Battery: 2942 mAh<br>
        Display :6.1 inches (15.49 cm)<br>
        Launch Date : October 26, 2018 (Official)<br>
        Operating System : iOS v12.0<br>
        Chipset : Apple A12 Bionic
      </p>
  </div>
  <div>
      <img src="./images/iphonexr.jpeg" alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="iphone15pro"></a>
  <div class="product-details">
      <h2>Iphone 15 Pro </h2>
      <p>Price:₹169999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : Apple A17 Pro <br>
        Rear Camera : 48 MP + 12 MP + 12 MP<br>
        Front Camera : 12 MP Battery : 3274 mAh<br>
        Display : 6.1 inches (15.49 cm)<br>
        Launch Date : September 13, 2023 (Official)<br>
        Operating System : iOS v17<br>
        Chipset : Apple A17 Pro
      </p>
  </div>
  <div>
      <img src="./images/iphone 13 pro.png"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="vivox100"></a>
  <div class="product-details">
      <h2>Vivo X 100</h2>
      <p>Price:₹67990 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 12 GB<br>
        Processor : MediaTek Dimensity 9300<br> 
        Rear Camera : 50 MP + 50 MP + 64 MP<br>
        Front Camera : 32 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.78 inches (17.22 cm)<br>
        Launch Date : January 4, 2024 (Official)<br>
        Operating System : Android v14Custom UIFuntouch OS<br>
        Chipset : MediaTek Dimensity 930
      </p>
  </div>
  <div>
      <img src="./images/vivo x 100.jpg"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="samsungzfold"></a>
  <div class="product-details">
      <h2>Samsung Z Fold 5</h2>
      <p>Price:₹78990 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM :12 GB<br>
        Processor: Qualcomm Snapdragon 8 Gen 2<br>
        Rear Camera: 50 MP + 12 MP + 10 MP<br>
        Front Camera :10 MP + 4 MP<br>
        Battery : 4400 mAh<br>
        Display : 7.6 inches (19.3 cm)<br>
        Launch Date: July 27, 2023 (Official)<br>
        Operating System: Android v13Custom UI Samsung One UI<br>
        Chipset: Qualcomm Snapdragon 8 Gen 2<br>
      </p>
  </div>
  <div>
      <img src="./images/samsung galaxy z fold 5.jpg"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> 
  <a name="vivoy51"></a>
  <div class="product-details">
      <h2>Vivo Y51 5G</h2>
      <p>Price:₹28999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : Qualcomm Snapdragon 665<br>
        Rear Camera : 48 MP + 8 MP + 2 MP<br>
        Front Camera : 16 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.58 inches (16.71 cm)<br>
        Launch Date : December 7, 2020 (Official)<br>
        Operating System : Android v11<br>
        Custom UI : Funtouch OS<br>
        Chipset : Qualcomm Snapdragon 665
      </p>
  </div>
  <div>
      <img src="./images/vivo y51.png"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="nothing2"></a>
  <div class="product-details">
      <h2>Nothing 2</h2>
      <p>Price:₹34999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : Qualcomm Snapdragon 8 Plus Gen 1<br>
        Rear Camera : 50 MP + 50 MP<br>
        Front Camera : 32 MP<br>
        Battery : 4700 mAh<br>
        Display : 6.7 inches (17.02 cm)<br>
        Launch Date : July 21, 2023 (Official)<br>
        Operating System : Android v13<br>
        Custom UI : Nothing OS<br>
        Chipset : Qualcomm Snapdragon 8 Plus Gen 1
      </p>
  </div>
  <div>
      <img src="./images/nothing2.webp"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> <a name="motorolaedge40neo"></a>
  <div class="product-details">
      <h2>Motorola edge 40 neo</h2>
      <p>Price:₹21999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : MediaTek Dimensity 7030<br>
        Rear Camera : 50 MP + 13 MP<br>
        Front Camera : 32 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.55 inches (16.64 cm)<br>
        Launch Date : September 28, 2023 (Official)<br>
        Operating System : Android v13<br>
        Chipset : MediaTek Dimensity 7030
      </p>
  </div>
  <div>
      <img src="./images/motorola-edge-40-db-600x800-1694698210.avif"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> <a name="vivot2pro"></a>
  <div class="product-details">
      <h2>Vivo T2 Pro 5G</h2>
      <p>Price:₹28999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : MediaTek Dimensity 7200 MT6886<br>
        Rear Camera : 64 MP + 2 MP<br>
        Front Camera : 16 MP<br>
        Battery : 4600 mAh<br>
        Display : 6.78 inches (17.22 cm)<br>
        Launch Date : September 28, 2023 (Official)<br>
        Operating System : Android v13<br>
        Custom UI : Funtouch OS<br>
        Chipset : MediaTek Dimensity 7200 MT6886
      </p>
  </div>
  <div>
      <img src="./images/vivo t2 pro.png"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="opporeno11pro"></a>
  <div class="product-details">
      <h2>Oppo Reno 11 Pro 5G</h2>
      <p>Price:₹79999</p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 12 GB<br>
        Processor : MediaTek Dimensity 8200 MT6896Z<br>
        Rear Camera : 50 MP + 8 MP + 32 MP<br>
        Front Camera : 32 MP<br>
        Battery : 4600 mAh<br>
        Display : 6.7 inches (17.02 cm)<br>
        Launch Daten: January 12, 2024 (Official)<br>
        Operating System : Android v14<br>
        Custom UI : ColorOS<br>
        Chipset : MediaTek Dimensity 8200 MT6896Z
      </p>
  </div>
  <div>
      <img src="./images/OPPO-Reno-11-Fluorite-Blue.webp"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="pococ55"></a>
  <div class="product-details">
      <h2>Poco C55</h2>
      <p>Price:₹7999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM: 4 GB<br>
        Processor : MediaTek Helio G85<br>
        Rear Camera : 50 MP + 2 MP<br>
        Front Camera : 5 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.71 inches (17.04 cm)<br> 
        Launch Date : February 28, 2023 (Official)<br>
        Operating System : Android v12<br>
        Custom UI : MIUI<br>
        Chipset : MediaTek Helio G85
      </p>
  </div>
  <div>
      <img src="./images/pococ55.jpeg"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> 
  <a name="nothing1"></a>
  <div class="product-details">
      <h2>Nothing Phone 1</h2>
      <p>Price:₹35999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8  GB<br>
        Processor : Qualcomm Snapdragon 778G Plus<br>
        Rear Camera : 50 MP + 50 MP<br>
        Front Camera : 16 MP<br>
        Battery : 4500 mAh<br>
        Display : 6.55 inches (16.64 cm)<br>
        Launch Date : July 13, 2022 (Official)<br>
        Operating System : Android v12<br>
        Chipset : Qualcomm Snapdragon 778G Plus
      </p>
  </div>
  <div>
      <img src="./images/nothing1.webp"  alt ="Product 1 Image">
  </div>
</section>
<section class="product">
   <a name="oneplusnord3"></a>
  <div class="product-details">
      <h2>OnePlus Nord 3</h2>
      <p>Price:₹27999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>Release Date: 5th July 2023<br>
         display : 6.74 inches<br>
         Processor   : Mediatek Dimensity 9000(4 nm)<br>
         RAM         : 8GB<br>
         Storage     : 128GB<br>
         Rear Camera      : 50mp<br>
         Front Camera : 16mp
         Operating System : Android v12<br>
         Battery     : 5000 mAh
      </p>
  </div>
  <div>
      <img src="./images/nord3.jpeg"  alt ="Product 1 Image">
  </div>
</section>

<section class="product"> <a name="samsungm53"></a>
  <div class="product-details">
      <h2>Samsung M53</h2>
      <p>Price:₹19999 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 6 GB<br>
        Processor : MediaTek Dimensity 900<br> 
        Rear Camera : 108 MP + 8 MP + 2 MP + 2 MP<br>
        Front Camera : 32 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.7 inches (17.02 cm)<br> 
        Launch Date : April 29, 2022 (Official)<br>
        Operating System : Android v12<br>
        Custom UI : Samsung One UI<br>
        Chipset : MediaTek Dimensity 900
      </p>
  </div>
  <div>
      <img src="./images/samsung-galaxy-m53-5g.jpg"  alt ="Product 1 Image">
  </div>
</section>

<section class="product"> <a name="redmi9a"></a>
  <div class="product-details">
      <h2>Redmi 9A</h2>
      <p>Price:₹10000 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 2 GB<br>
        Processor : MediaTek Helio G25<br>
        Rear Camera : 13 MP<br>
        Front Camera : 5 MP<br>
        Battery : 5000 mAh<br>
        Display : 6.53 inches (16.59 cm)<br>
        Launch Date : September 4, 2020 (Official)<br>
        Operating System : Android v10 (Q)<br>
        Custom UI : MIUI<br>
        Chipset : MediaTek Helio G25
      </p>
  </div>
  <div>
      <img src="./images/redmi9a.jpg"  alt ="Product 1 Image">
  </div>
</section>
<section class="product"> <a name="realmex7max"></a>
  <div class="product-details">
      <h2>Realme X7 max 5G</h2>
      <p>Price:₹30000 </p>
      </p>
      <!-- Add more details such as dimensions, weight, etc. -->

      <!-- Product Description -->
      <h3>Description:</h3>
      <p>RAM : 8 GB<br>
        Processor : MediaTek Dimensity 1200 MT6893<br>
        Rear Camera : 64 MP + 8 MP + 2 MP <br>
        Front Camera : 16 MP<br>
        Battery : 4500 mAh<br>
        Display : 6.43 inches (16.33 cm)<br>
        Launch Date : June 4, 2021 (Official)<br>
        Operating System : Android v11<br>
        Custom UI : Realme UI<br>
        Chipset : MediaTek Dimensity 1200 MT6893
      </p>
  </div>
  <div>
      <img src="./images/realme-x7-max-5g.jpg"  alt ="Product 1 Image">
  </div>
</section>




    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over ₹1717</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <!-- offer -->
   <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The SecureCart For Latest upload.</h3>
      <div class="input text-center">
  <input type="text" placeholder="Enter Your Email.." id="emailInput">
  <button id="subscribe">SUBSCRIBE</button>
  <span id="subscribeResponse"></span>
</div>
    </div>
    </div>
    <!-- newslater -->
<a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a><br><br>

    <!-- footer -->
    <?php include 'C:\xampp\htdocs\test1\SecureCart\footer.php'; ?>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
  document.getElementById('subscribe').addEventListener('click', function() {
    // Get the entered email
    var email = document.getElementById('emailInput').value;

    // Perform subscription logic here (e.g., send a request to a backend)
    // For demonstration purposes, let's assume a successful subscription
    var isSuccess = true;

    // Display response message
    var responseElement = document.getElementById('subscribeResponse');
    if (isSuccess) {
      responseElement.innerText = 'Subscription successful! Thank you.';
      responseElement.style.color = 'green';
    } else {
      responseElement.innerText = 'Subscription failed. Please try again.';
      responseElement.style.color = 'red';
    }
  });
</script>

</body>
</html>