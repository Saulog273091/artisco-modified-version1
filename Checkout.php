<?php
session_start();
include("connect.php");
include("functions/common_function.php");



$emailAdd = $_SESSION['emailAdd'];

// echo $emailAdd;
    // echo $_SESSION['emailAdd'];
    




// getting total items and total price of all itemss
$get_ip_add = getIPAddress();
$total_price=0;
$cart_query_price = "SELECT * FROM `cart-details` WHERE ip_address = '$get_ip_add'";
$result_cart_price = mysqli_query($conn, $cart_query_price);
$invoice_number=mt_rand();
$status = 'pending';
$count_products=mysqli_num_rows($result_cart_price);
while($row_price = mysqli_fetch_array($result_cart_price)) {
    $product_id = $row_price['product_id'];
    $select_product = "SELECT * FROM `products` WHERE productId = '$product_id'";
    $run_price = mysqli_query($conn, $select_product);
    while($row_product_price = mysqli_fetch_array($run_price)){
        $product_price = array($row_product_price['price']);
        $product_values = array_sum($product_price);
        $total_price += $product_values;

    }
}

//getting quantity from cart
$get_cart = "SELECT * FROM `cart-details`";
$run_cart = mysqli_query($conn, $get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity["quantity"];
if($quantity==0){
    $quantity = 1;
    $subtotal = $total_price;

}else{
    $quantity='quantity';
    $subtotal = $total_price * $quantity;

}

$insert_orders = "INSERT INTO  `orders` (emailAdd,amountDue,invoiceNum,totalProducts,orderDate,orderStatus) VALUES('$emailAdd',$subtotal,$invoice_number,$count_products,NOW(),'$status')";
$result_query = mysqli_query($conn, $insert_orders);
if($result_query){
    echo "<script>alert('Order Successful')</script>";
    echo "<script>window.open('AccountFrame.php','_self')</script>";
}
// pending orders
$insert_pending_orders = "INSERT INTO  `pending-orders` (emailAdd,invoiceNum,product_id,quantity,orderStatus) VALUES('$emailAdd',$invoice_number,$product_id,$quantity,'$status')";
$result_pending_orders = mysqli_query($conn, $insert_pending_orders);


//deleting items from cart
$empty_cart = "DELETE FROM `cart-details` WHERE ip_address = '$get_ip_add'";
$result_pending_orders = mysqli_query($conn, $empty_cart);

?>
