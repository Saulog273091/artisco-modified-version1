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
      <div class="payment">Payment</div>
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
          src="./public/gcash-horizontalfullbluetransparent-1@2x.png"
        />
      </div>
      <div class="paypal" id="paypalContainer">
        <div class="gcash1"></div>
        <img class="paypal-1-icon" alt="" src="./public/paypal-1@2x.png" />

        <i class="pay-with-paypal">Pay with PayPal</i>
      </div>
      <div class="cash" id="cashContainer">
        <div class="gcash1"></div>
        <i class="pay-in-cash">Pay in Cash</i>
        <img
          class="dollar-money-cash-icon-14-1"
          alt=""
          src="./public/dollarmoneycashicon14-1@2x.png"
        />
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