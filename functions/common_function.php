<?php
//including connecting file
include('connect.php');

//getting products
function getproducts(){
    global $conn;
    $select_query = "SELECT * FROM `products` order by rand()";
          $result_query = mysqli_query($conn, $select_query); 
          //$row = mysqli_fetch_assoc($result_query);
          //echo $row['productName'];
          while($row = mysqli_fetch_assoc($result_query)) {
            $prod_Id = $row["productId"];
            $product_id = $row['productName'];
            $product_price = $row['price'];
            $product_Image = $row['productImage'];
            echo "<div class='col-md-3 mb-3'>
            <div class='card'>
  <img src='./products/$product_Image' class='card-img-top' alt='$product_id'>
  <div class='card-body'>
    <h5 class='card-title'>$product_id</h5>
    <p class='card-text'>Price: ₱$product_price</p>
    <a href='CustomerLandingPage.php?add_to_cart=$prod_Id' class='btn btn-info'>Add to Cart</a>
    <a href='#' class='btn btn-secondary'>View More</a>
  </div>
</div>

            </div>";
          }
}

//get ip function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

function cart(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip_add = getIPAddress();
    $get_product_id = $_GET['add_to_cart'];
    $select_query = "SELECT * FROM `cart-details` where `ip_address` = '$get_ip_add' AND `product_id` = '$get_product_id'";
    $result_query = mysqli_query($conn, $select_query); 
    $num_of_rows = mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo "<script>alert('This item is already in your cart.') </script>";
      echo "<script>window.open('CustomerLandingPage.php','_self')</script>";
    }else{
      $insert_query = "INSERT INTO `cart-details` (`product_id`, `ip_address`, `quantity`) VALUES ($get_product_id, '$get_ip_add', 0)";
      $result_query = mysqli_query($conn, $insert_query); 
      echo "<script>alert('Item is added to your cart.') </script>";
      echo "<script>window.open('CustomerLandingPage.php','_self')</script>";
    }
  }
}

//function to get the cart number
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip_add = getIPAddress();
    $select_query = "SELECT * FROM `cart-details` where `ip_address` = '$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query); 
    $count_cart_items = mysqli_num_rows($result_query); 
  }else{
    global $conn;
    $get_ip_add = getIPAddress();
    $select_query = "SELECT * FROM `cart-details` where `ip_address` = '$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query); 
    $count_cart_items = mysqli_num_rows($result_query); 
    }
    echo $count_cart_items;
  }


//total price function
function total_cart_price(){
  global $conn;
  $get_ip_add = getIPAddress();
  $total_price = 0;
  $cart_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$get_ip_add'";
  $result = mysqli_query($conn, $cart_query); 
  while($row=mysqli_fetch_array($result)){
    $product_id = $row['product_id'];
    $select_products = "SELECT * FROM `cart-details` where `product_id` = '$product_id'";
    $result_products = mysqli_query($conn, $select_products); 
    while($row_product_price = mysqli_fetch_array($result_products)){
      $product_price = array($row_product_price['price']);
      $product_values = array_sum($product_price);
      $total_price += $product_values;
    }

  }
  echo $total_price;

}
?>