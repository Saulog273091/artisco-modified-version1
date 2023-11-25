<?php
session_start();
include("connect.php");

if(!isset($_SESSION['emailAdd'])){
    header("location:LogIn.php");
    die();
}


// if(isset($_SESSION['storeName'])){
//     print_r($_SESSION);
// }
?>



<?php 
include("connect.php");

if(isset($_POST["add"])){  

    //print_r($_Se);
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $emailAdd = $_SESSION['emailAdd'];
    //$retrievedstoreName = $_SESSION['storeName'];


    $productImage = $_FILES["image"]['name'];
    
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

                move_uploaded_file($tmpName , 'products/' . $newImageName);

                $sql_query = "INSERT INTO `products` (`productId`, `emailAdd`, `productName`, `price`, `category`, `productImage`) VALUES ('','$emailAdd', '$productName', '$price', '$category','$newImageName')";

                      if(mysqli_query($conn, $sql_query)){
                          echo "<script> alert ('Product Added Successfully!');  </script>";
                      }
                      else{

                      }
            }
      }
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Seller Profile</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />

        <link rel="stylesheet" href="./global.css" />
        <link rel="stylesheet" href="SellerProfile.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
        />
        <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--  CSS  -->
    <link rel="stylesheet" href="Sample.css">
    </head>

    <body>
        
        <div class="header artistico">Artisti.co</div>
        
        <a href="logout.php">
        <button class="btnLogout" name="logout">Log Out</button>
        </a>
        
        <button class="button ordersbtn">
            <img src=".\public\icons8-cart-50.png" alt="ordersButtonpng" border="0" />
        </button>

        <button class="button feedbackbtn">
            <img src=".\public\icons8-feedback-50.png" alt="feedbackButtonpng" border="0" />
        </button>

        <div class="profileHead sellerProfile">Seller's Profile</div>

        <div class="frame"></div>

        <div class="storeIcon">
            <img src=".\public\store.png" alt="storeicon" border="0" />
        </div>

        <a href="#">
        <button class="addbtn" id="addbtn"> Add Product </button>
        </a>

        <form action="SellerProfile.php" method="post" enctype="multipart/form-data">

        <div class="popup">
        <div class="popup-content">
            <img src=".\public\close.png" alt="Close" class="close">
            <div class="product-details"> product details </div>
            <div class="product-name"> product name </div>
            <input type="text" placeholder="enter product name" name="productName">
            <div class="price"> price </div>
            <input type="text" placeholder="enter price" name="price">
            <div class="categories">
                <input type="radio" id="digitalart" checked="checked" name="category" value="digitalart">
                <label for="digitalart">Digital Art</label> <br>
                <input type="radio" id="painting" name="category" value="painting">
                <label for="painting">Painting</label> <br>
                <input type="radio" id="sculpture" name="category" value="sculpture">
                <label for="sculpture">Sculpture</label>
            </div>
            <div class="product-image">
                <input type="file" class="upload-box" name="image" data-parsley-trigger="keyup" accept=".jpg, .jpeg, .png">
            </div>
            <button class="addproduct" name="add" >Add Product</button>
        </div>
        </div>

        <div class="lowerarea">
            <div class="artistico-all-rights2">
              © 2023 Artisti.co. All Rights Reserved.
            </div>
            <div class="artistico titlelower">Artisti.co</div>

            <script>
                document.getElementById("addbtn").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
                })

                document.querySelector(".close").addEventListener("click", function(){
                    document.querySelector(".popup").style.display = "none";
                })
            </script>

            <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
    </body>

</html>