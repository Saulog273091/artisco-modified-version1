<?php

include("./functions/common_function.php");
include("connect.php");


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./AccountFrame.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&display=swap"

      <!-- bootstrap dropdown -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
 
    </head>
  <body>
    <div class="accountframe">
      <div class="lowerarea4">
        <div class="lowerframe4"></div>
        <div class="artistico-all-rights">
          © 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico18">
          <div class="artistico19">Artisti.co

          </div>
        </div>
      </div>
      <img
        class="carticon"
        alt=""
        src="./public/carticon1@2x.png"
        id="cartIcon"
      />

      <!-- <img class="accounticon" alt="" src="./public/accounticon1@2x.png"/> -->

 
      <!-- <?php
      $email=$_SESSION['emailAdd'];
      $user_image = "SELECT * FROM `register-details-customer` WHERE emailAdd = '$email'";
      $user_image = mysqli_query($conn,$user_image);
      $row_image = mysqli_fetch_array($user_image);
      $user_image = $row_image['profilePic'];
      echo "<li class = 'container'> <img src= '/user-profile/$user_image' alt=''></li>";


      ?>  -->

      <div class="container">                                 
  <div class="dropdown" style="position: absolute; top: 50px; right: 300px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
     My Account 
    <!-- <?php echo $_SESSION['firstName']; ?> -->
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="AccountFrame.php?my_orders">Orders</a></li>
      <li><a href="AccountFrame.php?edit_account">Edit Profile</a></li>
      <li><a href="logout.php">Log Out </a></li>
    </ul>
  </div>
</div>
<div class= "container">
  <?php
  get_user_order();

  if (isset($_GET['edit_account'])) {
    include('EditAccount.php');
  }
  if (isset($_GET['my_orders'])) {
    include('orders.php');
  }
  ?>
</div>

      <div class="artistico20" id="artisticoContainer1">
        <div class="artistico19">Artisti.co

        </div>
      </div>

      <div class="accountframe-child" style="height= 100%; width: 90%; left: 50px; border-radius: 10px;">
        <img src="../public/profile.png" style="position:absolute; left: 10px;" width="150" height="150"> 
    <div class="container" style="position:absolute; top:180px;">
    <?php 
          $emailAdd = mysqli_real_escape_string($conn, $_SESSION['emailAdd']);

         $details_query = "SELECT * FROM `register-details-customer` WHERE `emailAdd` = '$emailAdd'"; 
         $result = mysqli_query($conn, $details_query);
     
         if ($result) {
             while ($row = mysqli_fetch_array($result)) {
                 $name = $row['firstName'] . ' ' . $row['lastName'];
                 $email = $row['emailAdd'];
                 $contactNum = $row['contactNum'];
                 $address = $row['address'];
     
                 echo "<li>Name: $name</li>
                 <li>Contact Number: $contactNum</li>
                 <li>Email: $email</li>
                 <li>Delivery Address: $address</li>";
             }
         }
        ?>
      </div>
        
     
      

    </div>

    <script>
      var cartIcon = document.getElementById("cartIcon");
      if (cartIcon) {
        cartIcon.addEventListener("click", function (e) {
          window.location.href = "./CartFrame.php";
        });
      }
      
      var artisticoContainer1 = document.getElementById("artisticoContainer1");
      if (artisticoContainer1) {
        artisticoContainer1.addEventListener("click", function (e) {
          window.location.href = "./CustomerLandingPage.php";
        });
      }
      </script>
  </body>
</html>
