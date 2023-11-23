<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./AccountFrame.css" />
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
  </head>
  <body>
    <div class="accountframe">
      <div class="lowerarea4">
        <div class="lowerframe4"></div>
        <div class="artistico-all-rights">
          © 2023 Artisti.co. All Rights Reserved.
        </div>
        <div class="artistico18">
          <div class="artistico19">Artisti.co</div>
        </div>
      </div>
      <img
        class="carticon"
        alt=""
        src="./public/carticon1@2x.png"
        id="cartIcon"
      />

      <img class="accounticon" alt="" src="./public/accounticon1@2x.png" />

      <div class="artistico20" id="artisticoContainer1">
        <div class="artistico19">Artisti.co</div>
      </div>
      <div class="accountframe-child"></div>
    </div>

    <script>
      var cartIcon = document.getElementById("cartIcon");
      if (cartIcon) {
        cartIcon.addEventListener("click", function (e) {
          window.location.href = "./CartFrame.html";
        });
      }
      
      var artisticoContainer1 = document.getElementById("artisticoContainer1");
      if (artisticoContainer1) {
        artisticoContainer1.addEventListener("click", function (e) {
          window.location.href = "./CustomerLandingPage.html";
        });
      }
      </script>
  </body>
</html>
