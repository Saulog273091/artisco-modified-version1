<?php 
include("connect.php");


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
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
    />
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="./PaypalFrame.css" />

    <style>
      .cart_img{
      width: 200px;
      height: 200px;
      object-fit: contain;
      }
    </style>
  </head>
  <body>
    <div class="cartframe">
      <div class="lowerarea5">
        <div class="lowerframe5"></div>
        <div class="artistico-all-rights1">
          © 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico22">
          <div class="artistico23">Artisti.co</div>
        </div>
      </div>
      <img class="carticon1" alt="" src="./public/carticon1@2x.png" />

      <img
        class="accounticon1"
        alt=""
        src="./public/accounticon1@2x.png"
        id="accountIcon"
      />


      

      <div class="artistico24" id="artisticoContainer1">
        <div class="artistico23">Artisti.co</div>
      </div>
      
      <!-- fourth child table -->
      <div class="row px-1">
        <div class="col-md-12">
          <!-- products -->
          <div class="row">
            <?php
            if(!isset($_SESSION['emailAdd'])){
              include('LogIn.php');
            }
            else{
              include('GcashFrame.php');
            }
            ?>
          </div>
        </div>
        
   
      </div>
    </div>
    </form>
    
    <script>
      var accountIcon = document.getElementById("accountIcon");
      if (accountIcon) {
        accountIcon.addEventListener("click", function (e) {
          window.location.href = "./AccountFrame.php";
        });
      }
      
      var artisticoContainer1 = document.getElementById("artisticoContainer1");
      if (artisticoContainer1) {
        artisticoContainer1.addEventListener("click", function (e) {
          window.location.href = "./CustomerLandingPage.php";
        });
      }
      </script>
      <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
