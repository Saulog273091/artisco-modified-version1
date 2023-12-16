<?php
session_start();
include("connect.php");

if(!isset($_SESSION['emailAdd']) && !isset($_SESSION['passWord'])){
    header("location:LogIn.php");
    die();
}



// if(isset($_SESSION['storeName'])){
//     print_r($_SESSION);
// }
?>


<?php 
include("connect.php");
//print_r($_SESSION);
if(isset($_POST["add"])){  

    //print_r($_SESSION);
    global $storeName;
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $emailAdd = $_SESSION['emailAdd'];
    $storeName = $_SESSION['storeName'];
    $Product_Description = $_POST['Product_Description'];
    $Product_Type = $_POST['Product_Type'];
    $Days_To_Create = $_POST['Days_To_Create'];


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

                $sql_query = "INSERT INTO `products` (`productId`, `storeName`, `emailAdd`, `productName`, `price`, `category`, `productImage`, `Product_Description`, `Product_Type`, `Days_To_Create`) VALUES ('','$storeName', '$emailAdd', '$productName', '$price', '$category','$newImageName','$Product_Description', '$Product_Type', '$Days_To_Create')";

                      if(mysqli_query($conn, $sql_query)){
                        echo "<script> alert ('Product Added Successfully!');  </script>";
                      }
                      else{
                        echo "<script> alert ('Product not Added!');  </script>";
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap" />
        <!-- dropdown icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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

        <div class="profileHead sellerProfile">
        <h1>Welcome <?php echo $_SESSION['storeName']; ?></h1>
        </div>

        <div class="frame"></div>

        <div class="storeIcon">
            <img src=".\public\store.png" alt="storeicon" border="0" />
        </div>

        <a href="#">
        <button class="addbtn" id="addbtn"> Add Product </button>
        </a>

        <form action="SellerProfile.php" method="post" enctype="multipart/form-data">

        <form action="" method="POST">
        <div class="popup">
            <div class="popup-content">
                <img src=".\public\close.png" alt="Close" class="close">
                <div class="product-details"> product details </div>

                <select class="select1" name="Product_Type">
                    <option>--SELECT--</option>
                    <option value="Ready Made">Ready Made</option>
                    <option value="Made to Order">Made to Order</option>
                </select>

                <select class="select2" name="Days_To_Create">
                    <option>--SELECT--</option>
                    <option value="Ready to Ship">Ready to Ship</option>
                    <option value="1-2 days">1-2 days</option>
                    <option value="3-4 days">3-4 days</option>
                    <option value="5-6 days">5-6 days</option>
                    <option value="1-2 weeks">1-2 weeks</option>
                    <option value="3-4 weeks">3-4 weeks</option>
                </select>
                
                <div class="product-name"> product name </div>
                <input type="text" placeholder="enter product name" name="productName"> <br>
                <div class="price"> price </div>
                <input type="text" placeholder="enter price" name="price"> <br> 
                <div class="description"> Product Description </div>
                <textarea class="textarea" placeholder="Enter a description of the product.." name="Product_Description"></textarea>

                <div class="categories">
                    <input type="radio" id="digitalart" checked="checked" name="category" value="digitalart">
                    <label for="digitalart">Digital Art</label> <br> <br>
                    <input type="radio" id="painting" name="category" value="painting">
                    <label for="painting">Painting</label> <br> <br>
                    <input type="radio" id="sculpture" name="category" value="sculpture">
                    <label for="sculpture">Sculpture</label>
                </div>

                <div class="product-image">
                    <input type="file" class="upload-box" name="image" data-parsley-trigger="keyup" accept=".jpg, .jpeg, .png">
                </div>
                <button class="addproduct" name="add" >Add Product</button>

</form>
            </div>
        </div>

        <div class="lowerarea">
            <div class="artistico titlelower">Artisti.co</div>
            <div class="artistico-all-rights2"> © 2023 Artisti.co. All Rights Reserved. </div>
            

            <script>

                //pop up form----------------------------------------------
                document.getElementById("addbtn").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
                });

                document.querySelector(".close").addEventListener("click", function(){
                    document.querySelector(".popup").style.display = "none";
                });
            </script>

            <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
    </body>

</html>