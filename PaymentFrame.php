<?php

session_start();
include("connect.php");

if(isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  $select_data = "SELECT * FROM `orders` WHERE order_id=$order_id";
  $result = mysqli_query($conn,$select_data);  
  $row_fetch = mysqli_fetch_array($result);
  $invoice_number= $row_fetch["invoiceNum"];
  $amount_due= $row_fetch["amountDue"];

}

if(isset($_POST['confirm_payment'])) {
  $email = $_SESSION['emailAdd'];
  $invoice_number = $_POST['invoice_number'];
  $amount = $_POST['amount'];
  $payment = $_POST['payment_mode'];
  $insert_query="INSERT INTO `payments` (order_id,invoiceNum,amount,payment_mode,orderBy) 
  values ($order_id,$invoice_number,$amount,'$payment','$email')";
  $result = mysqli_query($conn,$insert_query);
  if($result){
    echo "<script>alert('Payment Successful!')</script>";
    echo "<script>window.open('AccountFrame.php?my_orders','_self')</script>";
  }
  $update_orders = "UPDATE `orders` SET orderStatus ='Complete'
   WHERE order_id = $order_id";
   $result_orders = mysqli_query($conn,$update_orders);
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./PaymentFrame.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:ital,wght@0,500;0,600;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Space Mono:wght@400;700&display=swap"
    />
  </head>
  <body>
   
    <div class="paymentframe">
      <div class="lowerarea5">
        <div class="lowerframe5"></div>
        <div class="artistico-all-rights1">
          Â© 2023 Artisti.co. All Rights Reserved.
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
      <!-- <div class="payment">Payment</div> -->


      <div class="billing-info1" style="position:absolute; left: 500px; top: 200px; border-style: double; border-radius: 20px; border-width:5px; height:30%;";>
            <h1 style="margin: 50px;">Confirm Payment</h1>
                <div class="container">
                  <form action="" method="post">
                  <div class="form-outline my-4 text center">
                  <h5 style="position: relative; left: 160px;">Invoice Number:</h5>
                  <input type="text" style="position:relative; left: 70px; border-radius:10px; width:70%; height: 30px; top: -20px;"
                  name = "invoice_number" value="<?php echo $invoice_number ?>">
                  <h5 style="position: relative; left: 200px; top: -30px;">Amount:</h5>
                  <input type="text" style="position:relative; left: 70px; border-radius:10px; width:70%; height: 30px; top: -50px; " 
                  name = "amount" value="<?php echo $amount_due?>">
                 
                  <select  name="payment_mode" style="position: relative; width:50%;  left: 120px; top: -20px;">
                    <option>Select payment</option>
                    <option>Cash on Delivery</option>
                    <option>GCash</option>
                  </select>
                  <input type="submit" style="position:relative; top:50px;  left: 130px; width:50%; height: 50px; border-radius:20px; border-width:5px; background-color:green; color:white;" 
                  value="Confirm" name="confirm_payment">
                </form>
                </div>
          </div>

          
      <!-- </div>
      <i class="choose-payment-method">Choose payment method below</i>
      <div class="billing-info">
        <div class="billing-info1">Billing Info</div>
      </div>
      <div class="gcash-info">
        <div class="billing-info1">GCash Info</div>
      </div>
      <div class="gcash" id="gcashContainer">
        <div class="gcash1"></div>
        <i class="pay-with-gcash">Pay with GCash</i>
        <img
          class="gcash-horizontal-full-blue-tra-icon"
          alt=""
          src="./public/GCash_Horizontal-Full-Blue-Transparent.png"
        />
      </div>
      <div class="paypal" id="paypalContainer">
        <div class="gcash1"></div>
        <img class="paypal-1-icon" alt="" src="./public/PayPal.svg.png" />

        <i class="pay-with-paypal">Pay with PayPal</i>
      </div>
      <div class="cash" id="cashContainer">
        <div class="gcash1"></div>
        <i class="pay-in-cash">Pay in Cash</i>
        <img
          class="dollar-money-cash-icon-14-1"
          alt=""
          src="./public/dollar-money-cash-icon-14.png"
        />
      </div>
    </div> -->

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
      
      var gcashContainer = document.getElementById("gcashContainer");
      if (gcashContainer) {
        gcashContainer.addEventListener("click", function (e) {
          window.location.href = "./GcashFrame.php";
        });
      }
      
      var paypalContainer = document.getElementById("paypalContainer");
      if (paypalContainer) {
        paypalContainer.addEventListener("click", function (e) {
          window.location.href = "./PayPalFrame.php";
        });
      }
      
      var cashContainer = document.getElementById("cashContainer");
      if (cashContainer) {
        cashContainer.addEventListener("click", function (e) {
          window.location.href = "./CashFrame.php";
        });
      }
      </script>
  </body>
</html>