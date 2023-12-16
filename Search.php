<?php
// session_start();
include("connect.php");
include("./functions/common_function.php");

if(!isset($_SESSION['emailAdd']) && !isset($_SESSION['passWord'])){
    header("location:LogIn.php");
    die();
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Customer Page</title>

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./CustomerLandingPage.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
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


  </head>
  <body>

    <!--<h2>Welcome <?php echo $_SESSION['emailAdd'] ?> </h2><br>-->

    <!--<a href="logout.php">
        <button class="btnLogout" name="logout">Log Out</button>
        </a> -->

    <div class="customerlandingpage" style="position:relative; width: 90%; top:0;">

      
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: absolute; top:0; width: 111%; ">
    <div class="container-fluid " style="background-color: var(--color-gainsboro-100);">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" style="font-size: var(--font-size-21xl); font-family: var(--font-shrikhand);" href="CustomerLandingPage.php">Artisti.co </a>    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <form class="d-flex" role="search" action="" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
           
            <input type="submit" value="Search" class="btn btn-outline-dark" name="search_prod">
          </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="CartFrame.php"> <img src= "./public/carticon@2x.png"  class="profilelogo" ></a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="AccountFrame.php"> <img src= "./public/accounticon@2x.png"  class="profilelogo" ></a>
            </li>
            
      </ul> 
    </div>
  </div>
</nav>
      <div class="lowerarea2">
        <div class="lowerframe2"></div>
        <div class="artistico-all-rights1">
          © 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico7">
          <div class="artistico8">Artisti.co</div>
        </div>
      </div>

<!-- calling cart function -->
<?php
  cart();
?>
         
      <div class="upperframe4" >

          <!-- <img
        
          class="carticon2"
          />

      <div class="upperframe2">
        <img
          class="carticon1"

          alt=""
          src="./public/carticon@2x.png"
          id="cartIcon"
        />

        <img
          class="accounticon1"
          alt=""
          src="./public/accounticon@2x.png"
          id="accountIcon"
        />

        <div class="searchbar1">
          <div class="searchbar-item"></div>
          <img class="searchicon1" alt="" src="./public/searchicon@2x.png" />
        </div>

        <div class="artistico9">
          <div class="artistico8">Artisti.co</div>
        </div> -->

      </div> 

      


      <div class="productarea" style="position:absolute; top: 50px; width: 1500px;">
        
        <div class="row px-4">
          <div class=" col-md-12">
        <!-- products --> 
          <div class="row">
          <!-- fetching products -->
                             
                              <?php
                              search();
                              getUniqueCategories();
                              
                              ?>
        </div>
      </div>
    </div>

      </div>
      
      <form action="CustomerLandingPage.php" method="get">
          <div class="digitalarts">
            <div class="digitalframe1"></div>
            <b class="digital-art1">Digital Art</b>
            <div class="digitalbtn1">
              
            <a href='#' class='see-more-container3'>
                <button class="addproduct" name="category" value="digitalart">See More</button>
              </a>
            
            </div>
            <img
              class="digitalimage-icon"
              alt=""
              src="./public/digitalimage@2x.png"
            />
          </div>
          <div class="sculpture1">
            <div class="sculptureframe1"></div>
            <b class="sculpture2">Sculpture</b>
            <div class="sculpturebtn1">
              
            <a href='#' class='see-more-container3'>
                <button class="addproduct" name="category" value="sculpture">See More</button>
              </a>
            
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
              
              <a href='#' class='see-more-container3'>
                <button class="addproduct" name="category" value="customized">See More</button>
              </a>
              
              </div>
            <b class="customized-art">Customized Art</b>
          </div>
          <div class="painting1">
            <div class="commissionedframe"></div>
            <b class="painting2">Painting</b>
            <img class="paintimage-icon" alt="" src="./public/paintimage@2x.png" />

            <div class="paintingbtn1">
              
              <a href='#' class='see-more-container3'>
                <button class="addproduct" name="category" value="painting">See More</button>
              </a>
            
            </div>
          </div>
        </form>

     

<!-- calling cart function -->
<?php
  cart();
?>

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

    <!-- <div id="humburgerfrmContainer" class="popup-overlay" style="display: none">
      <div class="humburgerfrm">
        <div class="supportbtn">
          <div class="help-support">Help & Support</div>
          <img
            class="logout-1-icon"
            alt=""
            src="./public/customer-support-1@2x.png"
          />
        </div>
        <div class="logoutbtn" id="popuplogoutbtnContainer">
          <img class="logout-1-icon" alt="" src="./public/logout-1@2x.png" />

          <div class="help-support">Log out</div>
        </div>
        <div class="accbtn" id="popupaccbtnContainer">
          <img class="logout-1-icon" alt="" src="./public/male-user-1@2x.png" />

          <div class="help-support">Account</div>
        </div>
      </div>
    </div> -->
    </div>  

    <script>
      var popuplogoutbtnContainer = document.getElementById(
        "popuplogoutbtnContainer"
      );
      if (popuplogoutbtnContainer) {
        popuplogoutbtnContainer.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      
      var popupaccbtnContainer = document.getElementById("popupaccbtnContainer");
      if (popupaccbtnContainer) {
        popupaccbtnContainer.addEventListener("click", function (e) {
          window.location.href = "./AccountFrame.php";
        });
      }
      
      var cartIcon = document.getElementById("cartIcon");
      if (cartIcon) {
        cartIcon.addEventListener("click", function (e) {
          window.location.href = "./CartFrame.php";
        });
      }
      
      var accountIcon = document.getElementById("accountIcon");
      if (accountIcon) {
        accountIcon.addEventListener("click", function (e) {
          window.location.href = "./AccountFrame.php";
        });
      }
      
      var humburgerbtnIcon = document.getElementById("humburgerbtnIcon");
      if (humburgerbtnIcon) {
        humburgerbtnIcon.addEventListener("click", function () {
          var popup = document.getElementById("humburgerfrmContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "flex-end";
            popupStyle.justifyContent = "flex-start";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
      var product11 = document.getElementById("product11");
      if (product11) {
        product11.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product10 = document.getElementById("product10");
      if (product10) {
        product10.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product9 = document.getElementById("product9");
      if (product9) {
        product9.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product8 = document.getElementById("product8");
      if (product8) {
        product8.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product7 = document.getElementById("product7");
      if (product7) {
        product7.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product6 = document.getElementById("product6");
      if (product6) {
        product6.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product5 = document.getElementById("product5");
      if (product5) {
        product5.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product4 = document.getElementById("product4");
      if (product4) {
        product4.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product3 = document.getElementById("product3");
      if (product3) {
        product3.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var product2 = document.getElementById("product2");
      if (product2) {
        product2.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      
      var pruduct1 = document.getElementById("pruduct1");
      if (pruduct1) {
        pruduct1.addEventListener("click", function (e) {
          window.location.href = "./Itemviewframe.php";
        });
      }
      </script>
      <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>