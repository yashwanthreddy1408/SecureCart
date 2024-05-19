<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .footer-container {
            background-color: #232f3e;
            color: #fff;
            padding: 20px 0;
            font-size: 14px;
            text-align: center;
        }

        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-section {
            flex-basis: calc(25% - 20px);
            margin-bottom: 20px;
            text-align: left;
        }

        .footer-heading {
            margin-bottom: 10px;
            font-size: 16px;
            color: #ccc;
        }

        .footer-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .footer-list-item {
            margin-bottom: 10px;
        }

        .footer-list-item a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-list-item a:hover {
            color: #fff;
        }

        .footer-bottom {
            background-color: #000;
            color: #ccc;
            padding: 10px 0;
            font-size: 12px;
        }

        .back-to-top {
            color: #ccc;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-to-top:hover {
            color: #fff;
        }

        .footer-separator {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <footer class="footer-container">
        <a href="#" class="back-to-top">Back to top</a>
        <div class="footer-separator"></div>
        <div class="footer-inner">
            <div class="footer-section">
                <h3 class="footer-heading">Get to Know Us</h3>
                <ul class="footer-list">
                    <li class="footer-list-item"><a href="#">About Us</a></li>
                    <li class="footer-list-item"><a href="#">Careers</a></li>
                    <li class="footer-list-item"><a href="#">Press Releases</a></li>
                    <li class="footer-list-item"><a href="#">SecureCart Science</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">Connect with Us</h3>
                <ul class="footer-list">
                    <li class="footer-list-item"><a href="https://www.facebook.com/">Facebook</a></li>
                    <li class="footer-list-item"><a href="https://twitter.com/?lang=en">Twitter</a></li>
                    <li class="footer-list-item"><a href="https://www.instagram.com/accounts/login/">Instagram</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">Make Money with Us</h3>
                <ul class="footer-list">
                    <li class="footer-list-item"><a href="#">Sell on SecureCart</a></li>
                    <li class="footer-list-item"><a href="#">Sell under SecureCart Accelerator</a></li>
                    <li class="footer-list-item"><a href="#">SecureCart Global Selling</a></li>
                    <li class="footer-list-item"><a href="#">Become an Affiliate</a></li>
                    <li class="footer-list-item"><a href="#">Advertise Your Products</a></li>
                    <li class="footer-list-item"><a href="#">SecureCart Pay on Merchants</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">Let Us Help You</h3>
                <ul class="footer-list">
                    <li class="footer-list-item"><a href="#">Your Account</a></li>
                    <li class="footer-list-item"><a href="#">Returns Centre</a></li>
                    <li class="footer-list-item"><a href="#">100% Purchase Protection</a></li>
                    <li class="footer-list-item"><a href="#">SecureCart App Download</a></li>
                    <li class="footer-list-item"><a href="#">Help</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            English India | AbeBooks | Books, art & collectibles | SecureCart Web Services | Scalable Cloud Computing Services | Audible | Download Audio Books | IMDb | Movies, TV & Celebrities | Shopbop | Designer Fashion Brands | SecureCart Business | Everything For Your Business | Prime Now | 2-Hour Delivery on Everyday Items | SecureCart Prime Music | 100 million songs, ad-free | Over 15 million podcast episodes | Conditions of Use & Sale | Privacy Notice | Interest-Based Ads | © 1996-2024, Securecart.com, Inc. or its affiliates
        </div>
    </footer>
</body>
</html>
