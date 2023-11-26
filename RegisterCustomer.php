<?php
    session_start();

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register-customer";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['save']))
    {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $middleName = $_POST['middleName'];
        $contactNum = $_POST['contactNum'];
        $emailAdd = $_POST['emailAdd'];
        $passWord = $_POST['passWord'];
        $cpassWord = $_POST['cpassWord'];
        $address = $_POST['address'];     
        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];

        $select = "SELECT * FROM `register-details-customer` WHERE emailAdd = '$emailAdd' && passWord = '$passWord' ";
        
    $result = mysqli_query($conn, $select);
    
    if ($result && mysqli_num_rows($result) > 0 )
    {
      echo "<script> alert ('User Already Exist');  </script>";
    }
    else
    {
        if($passWord != $cpassWord){
          echo "<script> alert ('Password Do not Match');  </script>";
        }
        else{
          $sql_query = "INSERT INTO `register-details-customer` (`firstName`, `lastName`, `middleName`, `contactNum`,`emailAdd`, `passWord`, `cpassWord`, `address`, `gender`, `birthDate`) VALUES ('$firstName', '$lastName', '$middleName', '$contactNum', '$emailAdd','$passWord', '$cpassWord','$address', '$gender','$birthDate')";

          if(mysqli_query($conn, $sql_query)){
            echo "<script> alert ('Registration Success!');  </script>";
          }
          else{
            
          }
        }          
    }
    mysqli_close($conn);      
    }  
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./RegisterCustomer.css" />
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
    <div class="registercustomer">
      <div class="lowerframe2">
        <div class="lowerarea2">
          <div class="lowerarea-inner"></div>
        </div>
        <div class="all-about-the-container2">
          <p class="all-about-the2">
            <span>All about the</span>
            <span class="span2"> </span>
          </p>
          <p class="all-about-the2">creativity</p>
        </div>
        <img class="socialicons2" alt="" src="./public/socialicons@2x.png" />

        <div class="privacy-policy2">Privacy Policy</div>
        <div class="terms-conditions2">Terms & Conditions</div>
      </div>
      <div class="middleframe2" data-scroll-to="middleFrameContainer">
        <div class="middleframe-inner"></div>
        <img class="image4-icon2" alt="" src="./public/image4@2x.png" />

        <div class="about6">
          This is an e-commerce platform for digital arts that will benefit
          those people who are having trouble finding an environment to showcase
          their work of art.
        </div>
        <div class="labelabout2">About</div>
        <div class="indicator2">|</div>
      </div>
      <div class="upperframe2">
        <img class="image1-icon2" alt="" src="./public/image1@2x.png" />

        <div class="redirectloginregister2">
          <div class="glowarea2"></div>
          <div class="shop-now2">Shop Now</div>
        </div>
        <b class="every-canvass-is2">Every canvass is treated special</b>
        <img class="image3-icon2" alt="" src="./public/image3@2x.png" />

        <div class="artistico6">Artisti.co</div>
        <img class="image2-icon2" alt="" src="./public/image2@2x.png" />

        <div class="artistico7" id="artisticoContainer">
          <div class="artistico8">Artisti.co</div>
        </div>
        <div class="about7" id="aboutContainer">
          <div class="about8">About</div>
        </div>
        <div class="register5" id="registerContainer">
          <div class="about8">Register</div>
        </div>
        <div class="log-in5" id="logInContainer">
          <div class="about8">Log In</div>
        </div>
      </div>
      <div class="sculptureframe2">
        <div class="sculpturebtn2">
          <div class="see-more-container6">
            <span class="see-more6">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="sculpture2">Sculpture</div>
        <img class="image6-icon2" alt="" src="./public/image6@2x.png" />
      </div>
      <div class="digitalframe2">
        <div class="digitalbtn2">
          <div class="see-more-container6">
            <span class="see-more6">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="digital-art2">Digital Art</div>
        <img class="image7-icon2" alt="" src="./public/image7@2x.png" />
      </div>
      <div class="paintingframe2">
        <img class="image8-icon2" alt="" src="./public/image8@2x.png" />

        <div class="painting2">Painting</div>
        <div class="paintingbtn2">
          <div class="see-more-container6">
            <span class="see-more6">See More </span>
            <b>&gt;</b>
          </div>
        </div>
      </div>


      <form action="RegisterCustomer.php" method="post">
      <div
        class="registerareacustomer"
        data-scroll-to="registerAreaCustomerContainer"
      >
      
        <div class="loginregisterframe1"></div>
        <div class="confirmpassfrm">
          <input type="password" value="" required id="myInput" name="cpassWord"><br>
          <div class="confirm-password">Confirm Password</div>
          <div class="confirmpass"></div>
        </div>
        <div class="createpassfrm">
          <input type="password" value=""  required id="myInput" name="passWord"><br>
          <div class="create-password">Create Password</div>
          <input type="checkbox" Password>
          <div class="createpass"></div>
        </div>
        <div class="logslidersbtn1" id="logSlidersbtnContainer">
          <div class="log-in7">Log In</div>
        </div>
        <div class="regslidersbtn1">
          <div class="reg">Register</div>
        </div>
        
        <div class="regcus" id="regcusContainer">
          
        

          <div id="regSuccessContainer" class="popup-overlay" style="display: none" >
      <div class="regsuccess" >
        <div class="regsuccess-child"></div>
        <div class="successfully-registered">Successfully Registered</div>
        <div class="icon2">
          <img class="icon3" alt="" src="./public/1144760-1@2x.png" />

          <img
            class="tick-icon-30-11"
            alt=""
            src="./public/tickicon30-1@2x.png"
          />
        </div>
        <div class="continuebtn1" id="popupcontinuebtnContainer">
          <div class="continuebtn-item"></div>
          <div class="continue1">Continue &gt;</div>
        </div>
      </div>
    </div>

          <button type="submit" name="save" >Register</button>
          
          



        </div>
        <div class="sellerslider" id="sellerSliderContainer">
          <div class="seller">Seller</div>
        </div>

       
        
        <div class="customerslider">
          <button type="customer" value="1">Customer</button>
        </div>
        <div class="addressframe">
          <input type="text" placeholder=" " required id="address" name="address">
          <div class="address">Address</div>
          <div class="addressinput"></div>
        </div>
        <div class="emailaddressframe">
          <input type="email" placeholder=" " required id="emailAdd" name="emailAdd">
          <div class="email-address">Email Address</div>
          <div class="emailaddinput"></div>
        </div>
        <div class="contactnumframe">
          <input type="text" placeholder=" " required id="contactNum" name="contactNum">
          <div class="contact-number">Contact Number</div>
          <div class="contactinput"></div>
        </div>
        <div class="genderframe">
          
            <label>
            <input type="radio" name="gender" value="Male"/>
            <span>Male</span>
            </label>
            <label>
            <input type="radio" name="gender" value="Female"/>
            <span>Female</span>
            </label>
            
          <div class="gender">Gender</div>
          <div class="genderinput"></div>
        </div>
        <div class="birthdatefrm">
          <input type="date" placeholder=" " required id="birthDate" name="birthDate">
          <div class="birthdate">Birth Date</div>
          <div class="birthinput"></div>
        </div>
        <div class="middlenameframe">
          <input type="text" placeholder=" " required id="middleName" name="middleName">
          <div class="middle-name">MiddleName</div>
          <div class="midnameinput"></div>
        </div>
        <div class="firstnameframe">
          <input type="text" placeholder=" " required id="firstName" name="firstName">
          <div class="first-name">FirstName</div>
          <div class="firstnameinput"></div>
        </div>
        <div class="lastnameframe">
          <input type="text" placeholder=" " required id="lastName" name="lastName">
          <div class="last-name">LastName</div>
          <div class="birthinput"></div>
        </div>
        <div class="already-have-an">Already have an account?</div>
        <div class="redirect-log-in" id="redirectLogIn">Log In</div>
        <div class="backbtn1" id="backbtnText">back</div>
      </div>
    </div>
  

    

    <script>     
      var popupcontinuebtnContainer = document.getElementById(
        "popupcontinuebtnContainer"
      );
      if (popupcontinuebtnContainer) {
        popupcontinuebtnContainer.addEventListener("click", function (e) {
          window.location.href = "./LogIn.php";
        });
      }
      
      var artisticoContainer = document.getElementById("artisticoContainer");
      if (artisticoContainer) {
        artisticoContainer.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      
      var aboutContainer = document.getElementById("aboutContainer");
      if (aboutContainer) {
        aboutContainer.addEventListener("click", function () {
          var anchor = document.querySelector(
            "[data-scroll-to='middleFrameContainer']"
          );
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var registerContainer = document.getElementById("registerContainer");
      if (registerContainer) {
        registerContainer.addEventListener("click", function () {
          var anchor = document.querySelector(
            "[data-scroll-to='registerAreaCustomerContainer']"
          );
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var logInContainer = document.getElementById("logInContainer");
      if (logInContainer) {
        logInContainer.addEventListener("click", function (e) {
          window.location.href = "./LogIn.php";
        });
      }
      
      var logSlidersbtnContainer = document.getElementById("logSlidersbtnContainer");
      if (logSlidersbtnContainer) {
        logSlidersbtnContainer.addEventListener("click", function (e) {
          window.location.href = "./LogIn.php";
        });
      }
      
      var sellerSliderContainer = document.getElementById("sellerSliderContainer");
      if (sellerSliderContainer) {
        sellerSliderContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterSeller.php";
        });
      }
      
      var redirectLogIn = document.getElementById("redirectLogIn");
      if (redirectLogIn) {
        redirectLogIn.addEventListener("click", function (e) {
          window.location.href = "./LogIn.php";
        });
      }
      
      var backbtnText = document.getElementById("backbtnText");
      if (backbtnText) {
        backbtnText.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

      // Add an event listener to the form submission
    document.getElementById('registrationForm').addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the form from submitting

      // Simulate a successful registration (replace this with your database logic)
      var registrationSuccess = true; // Set this to true if registration is successful

      if (registrationSuccess) {
        // Data saved successfully, show the success container
        var regSuccessContainer = document.getElementById('regSuccessContainer');
        if (regSuccessContainer) {
          regSuccessContainer.style.display = 'block';
        }
      } else {
        // Handle any other cases (e.g., display an error message)
      }
    });




      </script>
      </form>
  </body>
</html>
