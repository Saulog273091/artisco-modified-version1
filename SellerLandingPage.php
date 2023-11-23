<?php
session_start();
include("connect.php");

if(!isset($_SESSION['emailAdd'])){
    header("location:LogIn.php");
    die();
}
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Seller Homepage</title>

        <link rel="stylesheet" href="./global.css" />
        <link rel="stylesheet" href="SellerLandingPage.css" />
        <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
    />
    </head>

    <body>
        <div class="sellerpage"></div>
        <div class="frame"></div>
        <div class="header artistico">Artisti.co</div>
        
        <button class="button feedbackbtn">
            <img src=".\public\icons8-feedback-50.png" alt="feedbackButtonpng" border="0" />
        </button>

        <button class="button ordersbtn">
            <img src=".\public\icons8-cart-50.png" alt="ordersButtonpng" border="0" />
        </button>

        <a href="SellerProfile.php">
        <button class="seeProfile button"> See Profile > </button>
        </a>

        <div class="storeIcon">
            <img src=".\public\store.png" alt="storeicon" border="0" />
        </div>

        <div class="products product1"></div>
        <div class="products product2"></div>
        <div class="products product3"></div>

        <div class="products product4"></div>
        <div class="products product5"></div>
        <div class="products product6"></div>

        <div class="products product7"></div>
        <div class="products product8"></div>
        <div class="products product9"></div>

        <div class="lowerarea">
            <div class="artistico-all-rights2">
              © 2023 Artisti.co. All Rights Reserved.
            </div>
            <div class="artistico titlelower">Artisti.co</div>
    </body>
</html>
