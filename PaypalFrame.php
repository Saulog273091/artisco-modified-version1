<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./PayPalFrame.css" />
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
    <div class="paypalframe">
      <div class="lowerarea7">
        <div class="lowerframe7"></div>
        <div class="artistico-all-rights3">
          Â© 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico30">
          <div class="artistico31">Artisti.co</div>
        </div>
      </div>
      <img class="carticon3" alt="" src="./public/carticon1@2x.png" />

      <img
        class="accounticon3"
        alt=""
        src="./public/accounticon1@2x.png"
        id="accountIcon"
      />

      <div class="artistico32" id="artisticoContainer1">
        <div class="artistico31">Artisti.co</div>
      </div>
      <div class="payment2">Payment</div>
      <i class="choose-payment-method2">Choose payment method below</i>
      <div class="billing-info4">
        <div class="billing-info5">Billing Info</div>
        <div class="billingadd1">
          <div class="billingadd-item"></div>
          <i class="card-number">BILLING ADDRESS</i>
        </div>
        <div class="contactnum1">
          <div class="contactnum-item"></div>
          <i class="card-number">CONTACT NUMBER</i>
        </div>
      </div>
      <div class="gcash-info2">
        <div class="paypal-info">PayPal Info</div>
        <div class="gcashnum">
          <div class="billingadd-item"></div>
          <i class="card-number">Card Number</i>
        </div>
      </div>
      <i class="back1" id="backText">Back</i>
      <div class="gcash4" id="gcashContainer">
        <div class="gcash5"></div>
        <i class="pay-with-gcash2">Pay with GCash</i>
        <img
          class="gcash-horizontal-full-blue-tra-icon2"
          alt=""
          src="./public/gcash-horizontalfullbluetransparent-1@2x.png"
        />
      </div>
      <div class="paypal4">
        <div class="gcash5"></div>
        <img class="paypal-1-icon2" alt="" src="./public/paypal-1@2x.png" />

        <i class="pay-with-paypal2">Pay with PayPal</i>
      </div>
      <div class="cash4" id="cashContainer">
        <div class="gcash5"></div>
        <i class="pay-in-cash2">Pay in Cash</i>
        <img
          class="dollar-money-cash-icon-14-12"
          alt=""
          src="./public/dollarmoneycashicon14-1@2x.png"
        />
      </div>
      <div class="proceedbtn1">
        <div class="proceedbtn-item"></div>
        <i class="proceed1">PROCEED</i>
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
      
      var cashContainer = document.getElementById("cashContainer");
      if (cashContainer) {
        cashContainer.addEventListener("click", function (e) {
          window.location.href = "./CashFrame.php";
        });
      }
      </script>
  </body>
</html>