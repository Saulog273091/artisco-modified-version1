<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./GcashFrame.css" />
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
    <div class="gcashframe">
      <div class="lowerarea8">
        <div class="lowerframe8"></div>
        <div class="artistico-all-rights4">
          Â© 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico34">
          <div class="artistico35">Artisti.co</div>
        </div>
      </div>
      <img class="carticon4" alt="" src="./public/carticon1@2x.png" />

      <img
        class="accounticon4"
        alt=""
        src="./public/accounticon1@2x.png"
        id="accountIcon"
      />

      <div class="artistico36" id="artisticoContainer1">
        <div class="artistico35">Artisti.co</div>
      </div>
      <div class="payment3">Payment</div>
      <i class="choose-payment-method3">Choose payment method below</i>
      <div class="billing-info6">
        <div class="billing-info7">Billing Info</div>
        <div class="billingadd2">
          <div class="billingadd-inner"></div>
          <i class="gcash-number">BILLING ADDRESS</i>
        </div>
        <div class="contactnum2">
          <div class="contactnum-inner"></div>
          <i class="gcash-number">CONTACT NUMBER</i>
        </div>
      </div>
      <div class="gcash-info3">
        <div class="gcash-info4">GCash Info</div>
        <div class="gcashnum1">
          <div class="billingadd-inner"></div>
          <i class="gcash-number">GCash Number</i>
        </div>
      </div>
      <i class="back2" id="backText">Back</i>
      <div class="gcash6">
        <div class="gcash7"></div>
        <i class="pay-with-gcash3">Pay with GCash</i>
        <img
          class="gcash-horizontal-full-blue-tra-icon3"
          alt=""
          src="./public/GCash_Horizontal-Full-Blue-Transparent.png"
        />
      </div>
      <div class="paypal6" id="paypalContainer">
        <div class="gcash7"></div>
        <img class="paypal-1-icon3" alt="" src="./public/PayPal.svg.png" />

        <i class="pay-with-paypal3">Pay with PayPal</i>
      </div>
      <div class="cash6" id="cashContainer">
        <div class="gcash7"></div>
        <i class="pay-in-cash3">Pay in Cash</i>
        <img
          class="dollar-money-cash-icon-14-13"
          alt=""
          src="./public/dollar-money-cash-icon-14.png"
        />
      </div>
      <div class="proceedbtn2">
        <div class="proceedbtn-inner"></div>
        <i class="proceed2">PROCEED</i>
      </div>
    </div>

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
      
      var backText = document.getElementById("backText");
      if (backText) {
        backText.addEventListener("click", function (e) {
          window.location.href = "./PaymentFrame.php";
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