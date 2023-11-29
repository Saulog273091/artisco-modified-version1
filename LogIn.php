<?php
   
   session_start();
   
    include("connect.php");
    //$msg="";
    if(isset($_POST['submitcus']))
    {
        //echo "<pre>";
        //print_r($_POST);
       
        $emailAdd = $_POST['emailAdd'];
        $passWord = $_POST['passWord'];


        
        if(!empty($emailAdd) && !empty($passWord)){
          $query = "SELECT * FROM `register-details-customer` WHERE emailAdd = '$emailAdd' && passWord = '$passWord'  ";
          $result = mysqli_query($conn, $query);


          if($result){

              if($result && mysqli_num_rows($result) > 0){
                  $user_data = mysqli_fetch_assoc($result);
                  $_SESSION['emailAdd'] = $user_data['emailAdd'];
                  

                  if($user_data["passWord"] == $passWord){
                    $_SESSION['passWord'] = $user_data['passWord'];
                    header("location: CustomerLandingPage.php");
                    //echo "found";

                  }
              }else{
                //$msg="Please enter valid details";
                echo "<script> alert ('Incorrect Username/Email or Password');  </script>";
              }   
          }
          
        }
        else{
          echo "<script> alert ('Login Successfully');  </script>";
        }
    }
?>


<?php


include("connect.php");

if(isset($_POST['submitsell']))
{
    //print_r($_SESSION);

    $emailAdd = $_POST['emailAdd'];
    $passWord = $_POST['passWord'];
    //$storeName = $_SESSION['storeName'];

    if(!empty($emailAdd) && !empty($passWord)){
      $query_result = "SELECT * FROM `selle-ver` WHERE emailAdd = '$emailAdd' && passWord = '$passWord'";
      $result = mysqli_query($conn, $query_result);


      if($result){

          if($result && mysqli_num_rows($result) > 0){
              $user_data = mysqli_fetch_assoc($result);
              $_SESSION['emailAdd'] = $user_data['emailAdd'];

              if($user_data["passWord"] == $passWord){
                $_SESSION['passWord'] = $user_data['passWord'];
                //$_SESSION['storeName'] = $user_data['storeName'];
                  header("location: SellerLandingPage.php");

                  
              }
          }   
      }
      echo "<script> alert ('Incorrect Username/Email or Password');  </script>";
    }
    else{
      echo "<script> alert ('Incorrect Username/Email or Password');  </script>";
    }
} 

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./LogIn.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:ital,wght@0,500;0,600;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="login">
      <div class="lowerframe1">
        <div class="lowerarea1">
          <div class="lowerarea-child"></div>
        </div>
        <div class="all-about-the-container">
          <p class="all-about-the">
            <span>All about the</span>
            <span class="span"> </span>
          </p>
          <p class="all-about-the">creativity</p>
        </div>
        <img class="socialicons" alt="" src="./public/socialicons@2x.png" />

        <div class="privacy-policy">Privacy Policy</div>
        <div class="terms-conditions">Terms & Conditions</div>
      </div>
      <div class="middleframe">
        <div class="middleframe-child"></div>
        <img class="image4-icon" alt="" src="./public/image4@2x.png" />

        <div class="about">
          This is an e-commerce platform for digital arts that will benefit
          those people who are having trouble finding an environment to showcase
          their work of art.
        </div>
        <div class="labelabout">About</div>
        <div class="indicator">|</div>
      </div>
      <div class="upperframe2">
        <img class="image1-icon" alt="" src="./public/image1@2x.png" />

        <div class="redirectloginregister">
          <div class="glowarea"></div>
          <div class="shop-now">Shop Now</div>
        </div>
        <b class="every-canvass-is">Every canvass is treated special</b>
        <img class="image3-icon" alt="" src="./public/image3@2x.png" />

        <div class="artistico6">Artisti.co</div>
        <img class="image2-icon" alt="" src="./public/image2@2x.png" />

        <div class="artistico7">
          <div class="artistico8">Artisti.co</div>
        </div>
        <div class="about1">
          <div class="about2">About</div>
        </div>
        <div class="register" id="registerContainer">
          <div class="about2">Register</div>
        </div>
        <div class="log-in" id="logInContainer">
          <div class="about2">Log In</div>
        </div>
      </div>
      <div class="sculptureframe">
        <div class="sculpturebtn">
          <div class="see-more-container">
            <span class="see-more">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="sculpture">Sculpture</div>
        <img class="image6-icon" alt="" src="./public/image6@2x.png" />
      </div>
      <div class="digitalframe">
        <div class="digitalbtn">
          <div class="see-more-container">
            <span class="see-more">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="digital-art">Digital Art</div>
        <img class="image7-icon" alt="" src="./public/image7@2x.png" />
      </div>
      <div class="paintingframe">
        <img class="image8-icon" alt="" src="./public/image8@2x.png" />

        <div class="painting">Painting</div>
        <div class="paintingbtn">
          <div class="see-more-container">
            <span class="see-more">See More </span>
            <b>&gt;</b>
          </div>
        </div>
      </div>

      <form action="LogIn.php" method="post">

      <div class="loginfrm" data-scroll-to="logInfrmContainer">
        <div class="loginregisterframe"></div>
        <div class="regslidersbtn" id="regSlidersbtnContainer">
          <div class="register2">Register</div>
        </div>


        <div class="logslidersbtn">
          <div class="log">Log In</div>
        </div>
        <div class="loginseller">
          <button type="log" name="submitsell">
          <div class="log">Log In as Seller</div>
          </button>
        </div>
        <div class="passwordframe">
          <input type="password" placeholder=" " required name="passWord">
          <div class="password">Password</div>
          <div class="passinput"></div>
        </div>
        <div class="usernameemailaddframe">
          <input type="text" placeholder=" " required name="emailAdd">
          <div class="username-email-address">Username/ Email Address</div>
          <div class="passinput"></div>
        </div>
        <div class="dont-have-an">Don’t have an account?</div>
        <div class="redirect-register" id="redirectRegisterText">Register</div>
        <div class="backbtn" id="backbtnText">back</div>
        <div class="logincustomer" id="logIncustomerContainer">
          <button type="log" name="submitcus">
          <div class="log">Log In as Customer</div>
          </button>
        </div>
      </div>
    </div>

    <script>
      var registerContainer = document.getElementById("registerContainer");
      if (registerContainer) {
        registerContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }

      var logInContainer = document.getElementById("logInContainer");
      if (logInContainer) {
        logInContainer.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='logInfrmContainer']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }

      var regSlidersbtnContainer = document.getElementById("regSlidersbtnContainer");
      if (regSlidersbtnContainer) {
        regSlidersbtnContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }

      var redirectRegisterText = document.getElementById("redirectRegisterText");
      if (redirectRegisterText) {
        redirectRegisterText.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }

      var backbtnText = document.getElementById("backbtnText");
      if (backbtnText) {
        backbtnText.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }

      /*var logIncustomerContainer = document.getElementById("logIncustomerContainer");
      if (logIncustomerContainer) {
        logIncustomerContainer.addEventListener("click", function (e) {
          window.location.href = "./CustomerLandingPage.php";
        });
      }*/
      </script>
      </form>
  </body>
</html>