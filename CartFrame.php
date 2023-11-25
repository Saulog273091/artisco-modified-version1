<?php 
include("connect.php");
include("functions/common_function.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./CartFrame.css" />
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
      
      <div class="cart1">
        <!-- fourth child table -->
        <form action="CartFrame.php" method="post">

      <div class="container">
        <div class="row">
          <table class="table table-bordered text-center">
            
            <tbody>
              <!--php code to display dynamic data-->
              <?php 
              global $conn;
              $get_ip_add = getIPAddress();
              $total_price = 0;
             // $storeName = $_POST['storeName'];
              $cart_query = "SELECT * FROM `cart-details` WHERE `ip_address`='$get_ip_add'";
              $result = mysqli_query($conn, $cart_query); 
              $result_count = mysqli_num_rows($result);
              if($result_count>0){
                echo "<thead>
                        <tr>
                          <th></th>
                          <th>Store Name</th>
                          <th>Product Name</th>
                          <th>Product Image</th>
                          <th>Total Price</th>                                            
                        </tr>
                      </thead>";
              
              while($row=mysqli_fetch_array($result)){
                $product_id = $row['product_id'];
                $select_products = "SELECT * FROM `products` WHERE `productId` = '$product_id'";
                $result_products = mysqli_query($conn, $select_products); 
                while($row_product_price = mysqli_fetch_array($result_products)){
                  $product_price = array($row_product_price['price']);
                  $price_table = $row_product_price['price'];
                  $product_title = $row_product_price['productName'];
                  $product_image = $row_product_price['productImage'];
                  $product_values = array_sum($product_price);
                  $total_price += $product_values;
               
              ?>
              <tr>
                <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                <td></td>
                <td><?php echo $product_title ?></td> 
                <td><img src="./products/<?php echo $product_image ?>" alt="" class="cart_img"></td>
                <td>₱<?php echo $price_table ?></td>
                
              </tr>

              <?php 
                }
               }
              }else {
                echo "<h2 class='text-center' >Your Cart is empty</h2>";
              }
              ?>

            </tbody>
          </table>
          <!-- subtotal -->
          <div class="d-flex mb-5">
            <?php

            $get_ip_add = getIPAddress();
            // $storeName = $_POST['storeName'];
            $cart_query = "SELECT * FROM `cart-details` WHERE `ip_address`='$get_ip_add'";
            $result = mysqli_query($conn, $cart_query); 
            $result_count = mysqli_num_rows($result);
            if($result_count>0){
                echo"<h4 class='px-3'>Subtotal:<strong>₱ $total_price </strong></h4>
                <a href='CustomerLandingPage.php' class='btn px-3 border-0 m-3'>Continue Shopping</a>
                <a href='PaymentFrame.php' class='btn px-3 border-0 m-3'>Checkout</a>
                <!--<button class='px-3 border-0 mx-5'>Remove</button> -->
                <input type='submit' value='Remove from cart' class='btn px-3 border-0 mx-3' name='remove_cart'>";
            }else{
              echo "<a href='CustomerLandingPage.php' class='btn px-3 border-0 m-3'>Continue Shopping</a>";
            }
?>
            
          </div>
        </div>
      </div>
      </div>
    </div>
    </form>
    <!-- function to remove items -->
    <?php 
    function remove_cart_item(){
      global $conn;
      if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
          echo $remove_id;
          $delete_query = "DELETE FROM `cart-details` WHERE `product_id` = $remove_id";
          $run_delete_query = mysqli_query($conn, $delete_query);
          if($run_delete_query){
            echo "<script>window.open('CartFrame.php', '_self')</script>";
          }
        }
      }
    }
    echo $remove_item = remove_cart_item();
    
    ?>

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
