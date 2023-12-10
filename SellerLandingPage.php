<?php
session_start();
include("connect.php");

if(!isset($_SESSION['emailAdd']) && !isset($_SESSION['passWord'])){
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
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

      <div class="productarea">
        <div class="row px-4">
    <div class=" col-md-12">
        <!-- products --> 
        <div class="row">
          <!-- fetching products -->
          <?php 
          
          $select_query = "SELECT * FROM `products` where  '$_SESSION[emailAdd]' = emailAdd ";
          $result_query = mysqli_query($conn, $select_query); 
          //$row = mysqli_fetch_assoc($result_query);
          //echo $row['productName'];
          while($row = mysqli_fetch_assoc($result_query)) {
            $prod_Id = $row["productId"];
            $product_id = $row['productName'];
            $product_price = $row['price'];
            $product_Image = $row['productImage'];
            echo "<div class='col-md-4 mb-4'>
            <div class='card'>
  <img src='./products/$product_Image' class='card-img-top' alt='$product_id'>
  <div class='card-body'>
    <h5 class='card-title'>$product_id</h5>
    <p class='card-text'>Price: ₱$product_price</p>
    <a href='Sample.php?add_to_cart=$prod_Id' class='btn btn-info'>Add to Cart</a>
    <a href='#' class='btn btn-secondary'>View More</a>
  </div>
</div>

            </div>";
          }
          ?> 
        </div>
      </div>
      </div>
        
        <!-- <div class="products product2"></div>
        <div class="products product3"></div>

        <div class="products product4"></div>
        <div class="products product5"></div>
        <div class="products product6"></div>

        <div class="products product7"></div>
        <div class="products product8"></div>
        <div class="products product9"></div> -->

        <div class="lowerarea">
            <div class="artistico-all-rights2">
              © 2023 Artisti.co. All Rights Reserved.
            </div>
            <div class="artistico titlelower">Artisti.co</div>

           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    
</html>
