var popupcontinuebtnContainer = document.getElementById(
    "popupcontinuebtnContainer"
  );
  if (popupcontinuebtnContainer) {
    popupcontinuebtnContainer.addEventListener("click", function (e) {
      window.location.href = "./LogIn.html";
    });
  }
  
  var artisticoContainer = document.getElementById("artisticoContainer");
  if (artisticoContainer) {
    artisticoContainer.addEventListener("click", function (e) {
      window.location.href = "./index.html";
    });
  }
  
  var aboutContainer = document.getElementById("aboutContainer");
  if (aboutContainer) {
    aboutContainer.addEventListener("click", function () {
      var anchor = document.querySelector(
        "[data-scroll-to='middleFrameContainer']"
      );
      if (anchor) {
        anchor.scrollIntoView({ block: "start", behavior: "smooth" });
      }
    });
  }
  
  var registerContainer = document.getElementById("registerContainer");
  if (registerContainer) {
    registerContainer.addEventListener("click", function () {
      var anchor = document.querySelector(
        "[data-scroll-to='registerAreaCustomerContainer']"
      );
      if (anchor) {
        anchor.scrollIntoView({ block: "start", behavior: "smooth" });
      }
    });
  }
  
  var logInContainer = document.getElementById("logInContainer");
  if (logInContainer) {
    logInContainer.addEventListener("click", function (e) {
      window.location.href = "./LogIn.html";
    });
  }
  
  var logSlidersbtnContainer = document.getElementById("logSlidersbtnContainer");
  if (logSlidersbtnContainer) {
    logSlidersbtnContainer.addEventListener("click", function (e) {
      window.location.href = "./LogIn.html";
    });
  }
  
  var sellerSliderContainer = document.getElementById("sellerSliderContainer");
  if (sellerSliderContainer) {
    sellerSliderContainer.addEventListener("click", function (e) {
      window.location.href = "./RegisterSeller.php";
    });
  }
  
  var redirectLogIn = document.getElementById("redirectLogIn");
  if (redirectLogIn) {
    redirectLogIn.addEventListener("click", function (e) {
      window.location.href = "./LogIn.html";
    });
  }
  
  var backbtnText = document.getElementById("backbtnText");
  if (backbtnText) {
    backbtnText.addEventListener("click", function (e) {
      window.location.href = "./index.html";
    });
  }
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  // Add an event listener to the form submission
document.getElementById('registrationForm').addEventListener('submit', function (event) {
  event.preventDefault(); // Prevent the form from submitting

  // Simulate a successful registration (replace this with your database logic)
  var registrationSuccess = true; // Set this to true if registration is successful

  if (registrationSuccess) {
    // Data saved successfully, show the success container
    var regSuccessContainer = document.getElementById('regSuccessContainer');
    if (regSuccessContainer) {
      regSuccessContainer.style.display = 'block';
    }
  } else {
    // Handle any other cases (e.g., display an error message)
  }
});


