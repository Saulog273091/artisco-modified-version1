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
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./CustomerLandingPage.css" />
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

  </head>
  <body>

  <a href="logout.php">
        <button class="btnLogout" name="logout">Log Out</button>
        </a>


    <div class="customerlandingpage">
      <div class="lowerarea6">
        <div class="lowerframe6"></div>
        <div class="artistico-all-rights2">
          © 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico26">
          <div class="artistico27">Artisti.co</div>
        </div>
      </div>
      <div class="upperframe4" >
          <img

          class="carticon2"

          alt=""
          src="./public/carticon@2x.png"
          id="cartIcon"

          />


        <img
          class="accounticon2"
          alt=""
          src="./public/accounticon@2x.png"
          id="accountIcon"
        />

        <div class="searchbar">
          <div class="searchbar-child"></div>
          <img class="searchicon" alt="" src="./public/searchicon@2x.png" />
        </div>
        <div class="artistico28">
          <div class="artistico27">Artisti.co</div>
        </div>
      </div>
      <div class="productarea">
        <div class="product11"></div>
        <div class="product10"></div>
        <div class="product9"></div>
        <div class="product8"></div>
        <div class="product7"></div>
        <div class="product6"></div>
        <div class="product5"></div>
        <div class="product4"></div>
        <div class="product3"></div>
        <div class="product2"></div>
        <div class="pruduct1"></div>
      </div>
      <div class="digitalarts">
        <div class="digitalframe4"></div>
        <b class="digital-art4">Digital Art</b>
        <div class="digitalbtn4">
          <div class="see-more-container12">
            <span class="see-more12">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <img
          class="digitalimage-icon"
          alt=""
          src="./public/digitalimage@2x.png"
        />
      </div>
      <div class="sculpture4">
        <div class="sculptureframe4"></div>
        <b class="sculpture5">Sculpture</b>
        <div class="sculpturebtn4">
          <div class="see-more-container12">
            <span class="see-more12">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <img
          class="sculptureimage-icon"
          alt=""
          src="./public/sculptureimage@2x.png"
        />
      </div>
      <div class="commissionedarts">
        <div class="commissionedframe"></div>
        <img class="customized-icon" alt="" src="./public/customized@2x.png" />

        <div class="customizebtn">
          <div class="see-more-container12">
            <span class="see-more12">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <b class="customized-art">Customized Art</b>
      </div>
      <div class="painting4">
        <div class="commissionedframe"></div>
        <b class="painting5">Painting</b>
        <img class="paintimage-icon" alt="" src="./public/paintimage@2x.png" />

        <div class="paintingbtn4">
          <div class="see-more-container12">
            <span class="see-more12">See More </span>
            <b>&gt;</b>
          </div>
        </div>
      </div>
      <div class="recommendfrm">
        <div class="dataminingfrm"></div>
        <div class="fourthfrm">
          <div class="thframe"></div>
        </div>
        <div class="thirdfrm">
          <div class="rdframe"></div>
        </div>
        <div class="secondfrm">
          <div class="rdframe"></div>
        </div>
        <div class="firstfrm">
          <div class="rdframe"></div>
        </div>
      </div>
    </div>

    <script>
      var cartIcon = document.getElementById("cartIcon");
      if (cartIcon) {
        cartIcon.addEventListener("click", function (e) {
          window.location.href = "./CartFrame.html";
        });
      }

      var accountIcon = document.getElementById("accountIcon");
      if (accountIcon) {
        accountIcon.addEventListener("click", function (e) {
          window.location.href = "./AccountFrame.html";
        });
      }
      </script>

  </body>
</html>