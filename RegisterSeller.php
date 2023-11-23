<?php
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


        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $contactNum = $_POST['contactNum'];
        $emailAdd = $_POST['emailAdd'];
        $address = $_POST['address'];
        $storeName = $_POST['storeName'];
        $passWord = $_POST['passWord'];
        $cpassWord = $_POST['cpassWord'];
        $image = $_FILES["image"]['name'];

        

        $select = "SELECT * FROM `selle-ver` WHERE emailAdd = '$emailAdd' && passWord = '$passWord' ";    
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

                if($_FILES["image"]["error"] === 4){
                    echo "<script> alert('Image does not exist'); </script>";
                }
                else{
                    $fileName = $_FILES["image"]["name"];
                    $fileSize = $_FILES["image"]["size"];
                    $tmpName = $_FILES["image"]["tmp_name"];

                    $validImageExtension = ['jpg','jpeg','png'];
                    $imageExtension = explode('.', $fileName);
                    $imageExtension = strtolower(end($imageExtension));
                        if(!in_array($imageExtension, $validImageExtension)){
                            echo
                            "<script> alert('Invalid image extension'); </script>";
                        }
                        else if($fileSize > 2000000000){
                            echo
                            "<script> alert('Image size exceeds 2 MB'); </script>";
                        }
                        else{
                            $newImageName = uniqid();
                            $newImageName .= '.' . $imageExtension;

                            move_uploaded_file($tmpName , 'photo/' . $newImageName);

                            $sql_query = "INSERT INTO `selle-ver` (`lastName`, `firstName`, `middleName`, `birthDate`, `gender`, `contactNum`, `emailAdd`, `address`, `storeName` ,`passWord`, `cpassWord`, `image`) VALUES ('$lastName', '$firstName', '$middleName', '$birthDate', '$gender','$contactNum', '$emailAdd','$address','$storeName', '$passWord','$cpassWord','$newImageName')";

                                  if(mysqli_query($conn, $sql_query)){
                                      echo "<script> alert ('Registration Success!');  </script>";
                                  }
                                  else{
    
                                  }
                          }
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
    <link rel="stylesheet" href="./RegisterSeller.css" />
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
    <div class="registerseller">
      <div class="lowerframe3">
        <div class="lowerarea3">
          <div class="rectangle-div"></div>
        </div>
        <div class="all-about-the-container3">
          <p class="all-about-the3">
            <span>All about the</span>
            <span class="span3"> </span>
          </p>
          <p class="all-about-the3">creativity</p>
        </div>
        <img class="socialicons3" alt="" src="./public/socialicons@2x.png" />

        <div class="privacy-policy3">Privacy Policy</div>
        <div class="terms-conditions3">Terms & Conditions</div>
      </div>
      <div class="middleframe3" data-scroll-to="middleFrameContainer">
        <div class="middleframe-child1"></div>
        <img class="image4-icon3" alt="" src="./public/image4@2x.png" />

        <div class="about9">
          This is an e-commerce platform for digital arts that will benefit
          those people who are having trouble finding an environment to showcase
          their work of art.
        </div>
        <div class="labelabout3">About</div>
        <div class="indicator3">|</div>
      </div>
      <div class="upperframe3">
        <img class="image1-icon3" alt="" src="./public/image1@2x.png" />

        <div class="redirectloginregister3">
          <div class="glowarea3"></div>
          <div class="shop-now3">Shop Now</div>
        </div>
        <b class="every-canvass-is3">Every canvass is treated special</b>
        <img class="image3-icon3" alt="" src="./public/image3@2x.png" />

        <div class="artistico9">Artisti.co</div>
        <img class="image2-icon3" alt="" src="./public/image2@2x.png" />

        <div class="artistico10" id="artisticoContainer">
          <div class="artistico11">Artisti.co</div>
        </div>
        <div class="about10" id="aboutContainer">
          <div class="about11">About</div>
        </div>
        <div class="register8" id="registerContainer">
          <div class="about11">Register</div>
        </div>
        <div class="log-in8" id="logInContainer">
          <div class="about11">Log In</div>
        </div>
      </div>
      <div class="sculptureframe3">
        <div class="sculpturebtn3">
          <div class="see-more-container9">
            <span class="see-more9">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="sculpture3">Sculpture</div>
        <img class="image6-icon3" alt="" src="./public/image6@2x.png" />
      </div>
      <div class="digitalframe3">
        <div class="digitalbtn3">
          <div class="see-more-container9">
            <span class="see-more9">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="digital-art3">Digital Art</div>
        <img class="image7-icon3" alt="" src="./public/image7@2x.png" />
      </div>
      <div class="paintingframe3">
        <img class="image8-icon3" alt="" src="./public/image8@2x.png" />

        <div class="painting3">Painting</div>
        <div class="paintingbtn3">
          <div class="see-more-container9">
            <span class="see-more9">See More </span>
            <b>&gt;</b>
          </div>
        </div>
      </div>

      <form action="RegisterSeller.php" method="POST" enctype="multipart/form-data">

      <div
        class="registerareaseller"
        data-scroll-to="registerAreaSellerContainer"
      >
        <div class="loginregisterframe2"></div>
        <div class="logslidersbtn2" id="logSlidersbtnContainer">
          <div class="log-in10">Log In</div>
        </div>
        <div class="regslidersbtn2">
          <div class="register10">Register</div>
        </div>
        <div class="regsell" id="regsellContainer">
          <button type="reg" name="save">Register</button>
        </div>
        <div class="customerslider1" id="customerSliderContainer">
          <div class="customer1">Customer</div>
        </div>
        <div class="sellerslider1">
          <div class="seller1">Seller</div>
        </div>
        <div class="confirmpass1">
          <input type="password" placeholder="" id="myInput" required name="cpassWord"><br>
          <div class="confirm-password1">Confirm Password</div>
          <div class="confirmpass2"></div>
        </div>
        <div class="createpass1">
          <input type="password" placeholder="" value="" id="myInput" required name="passWord"><br>
          <div class="store-name">Create Password</div>
          <div class="storenameinput"></div>
        </div>
        <div class="verificationbtn">
          <div class="uploadinput"></div>
          <button type="button" class="btn-warning">Upload Verification
          <i class='fa fa-upload'></i>
          <input type="file" name="image" data-parsley-trigger="keyup" accept=".jpg, .jpeg, .png">
        </button>
          <img src="" alt="">
        </div>
        <div class="storenameframe">
          <input type="text" placeholder=" " required name="storeName">
          <div class="store-name">Store Name</div>
          <div class="storenameinput"></div>
        </div>
        <div class="addressframe1">
          <input type="text" placeholder=" " required name="address">
          <div class="address1">Address</div>
          <div class="addressinput1"></div>
        </div>
        <div class="emailaddressframe1">
          <input type="text" placeholder=" " required name="emailAdd">
          <div class="email-address1">Email Address</div>
          <div class="emailaddinput1"></div>
        </div>
        <div class="contactnumframe1">
          <input type="text" placeholder=" " required name="contactNum">
          <div class="contact-number1">Contact Number</div>
          <div class="contactinput1"></div>
        </div>
        <div class="genderframe1">
          
            <label>
            <input type="radio" name="gender" value="Male" required/>
            <span>Male</span>
            </label>
            <label>
            <input type="radio" name="gender" value="Female" required/>
            <span>Female</span>
            </label>
            
          <div class="gender1">Gender</div>
          <div class="genderinput1"></div>
        </div>
        <div class="birthdateframe">
          <input type="date" placeholder=" " required name="birthDate">
          <div class="birth-date">Birth Date</div>
          <div class="birthinput1"></div>
        </div>
        <div class="middlenameframe1">
          <input type="text" placeholder=" " required name="middleName">
          <div class="middle-name1">MiddleName</div>
          <div class="midnameinput1"></div>
        </div>
        <div class="firstnameframe1">
          <input type="text" placeholder=" " required name="firstName">
          <div class="first-name1">FirstName</div>
          <div class="firstnameinput1"></div>
        </div>
        <div class="lastnameframe1">
          <input type="text" placeholder=" " required name="lastName">
          <div class="last-name1">LastName</div>
          <div class="lastnameinput1"></div>
        </div>
        <div class="redirect-log-in1" id="redirectLogIn">Log In</div>
        <div class="already-have-an1">Already have an account?</div>
        <div class="backbtn2" id="backbtnText">back</div>
      </div>
    </div>

    <div id="regSuccessContainer" class="popup-overlay" style="display: none">
      <div class="regsuccess">
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
            "[data-scroll-to='registerAreaSellerContainer']"
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
      
      /*var regsellContainer = document.getElementById("regsellContainer");
      if (regsellContainer) {
        regsellContainer.addEventListener("click", function () {
          var popup = document.getElementById("regSuccessContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
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
      }*/
      
      var customerSliderContainer = document.getElementById(
        "customerSliderContainer"
      );
      if (customerSliderContainer) {
        customerSliderContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
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
      </script>
      </form>
  </body>
</html>