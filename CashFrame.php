<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./CashFrame.css" />
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
    <div class="cashframe">
      <div class="lowerarea6">
        <div class="lowerframe6"></div>
        <div class="artistico-all-rights2">
          Â© 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico26">
          <div class="artistico27">Artisti.co</div>
        </div>
      </div>
      <img class="carticon2" alt="" src="./public/carticon1@2x.png" />

      <img
        class="accounticon2"
        alt=""
        src="./public/accounticon1@2x.png"
        id="accountIcon"
      />

      <div class="artistico28" id="artisticoContainer1">
        <div class="artistico27">Artisti.co</div>
      </div>
      <div class="payment1">Payment</div>
      <i class="choose-payment-method1">Choose payment method below</i>
      <div class="billing-info2">
        <div class="billing-info3">Billing Info</div>
        <div class="billingadd">
          <div class="billingadd-child"></div>
          <i class="billing-address">BILLING ADDRESS</i>
        </div>
        <div class="contactnum">
          <div class="contactnum-child"></div>
          <i class="billing-address">CONTACT NUMBER</i>
        </div>
      </div>
      <i class="back" id="backText">Back</i>
      <div class="gcash2" id="gcashContainer">
        <div class="gcash3"></div>
        <i class="pay-with-gcash1">Pay with GCash</i>
        <img
          class="gcash-horizontal-full-blue-tra-icon1"
          alt=""
          src="./public/gcash-horizontalfullbluetransparent-1@2x.png"
        />
      </div>
      <div class="paypal2" id="paypalContainer">
        <div class="gcash3"></div>
        <img class="paypal-1-icon1" alt="" src="./public/paypal-1@2x.png" />

        <i class="pay-with-paypal1">Pay with PayPal</i>
      </div>
      <div class="cash2">
        <div class="gcash3"></div>
        <i class="pay-in-cash1">Pay in Cash</i>
        <img
          class="dollar-money-cash-icon-14-11"
          alt=""
          src="./public/dollarmoneycashicon14-1@2x.png"
        />
      </div>
      <div class="proceedbtn">
        <div class="proceedbtn-child"></div>
        <i class="proceed">PROCEED</i>
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
      </script>
  </body>
</html>