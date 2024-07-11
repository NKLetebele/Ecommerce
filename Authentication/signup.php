<!DOCTYPE html>
<html data-wf-page="6557cd4bff517851834ef1bf" data-wf-site="6557cd4aff517851834ef158">
<head>
  <meta charset="utf-8">
  <title>Signup</title>
  <meta content="Signup" property="og:title">
  <meta content="Signup" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/nonos-marvelous-site.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:regular,500,600,700","Outfit:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
 <link href="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/external-africa-south-africa-icongeek26-glyph-icongeek26.png" rel="apple-touch-icon"><!--  Memberstack webflow package  -->
 
</head>
<body>
  <div class="full-section">
    <div class="log-in__content">
      <div class="form-block-2 w-form">
        <form id="wf-form-signup" class="form-container" id="registrationForm">
          <h1 class="log-in__h">Create an account</h1>
          <div class="div-block">
            <div class="input-wrapper">
              <label for="Email-3" class="form-label">Firstname</label>
              <input class="form-input w-input" maxlength="256" name="firstName"  placeholder="Firstname" id="firstName" required="">
            </div>
            <div class="input-wrapper">
              <label for="Email-3" class="form-label">Lastname</label>
              <input class="form-input w-input" maxlength="256" name="lastName" data-name="lastname" placeholder="Lastname" id="lastName" required="">
            </div>
          </div>
          
          <div class="input-wrapper">
            <label for="Email-2" class="form-label">Email</label>
            <input type="email" class="form-input w-input" maxlength="256" name="email" placeholder="Email" id="email" required="">
          </div>
            <div class="input-wrapper">
                <label for="Email" class="form-label">Phone</label>
                <input type="tel" class="form-input w-input" maxlength="256" name="phone" placeholder="Phone" id="phone" required="">
            </div>
          <div class="div-block">
              <div class="input-wrapper">
                <label for="Email" class="form-label">Date of birth: </label>
                <select class="form-input w-input" id="gender" name="gender" required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select><br>
              </div>
              <div class="input-wrapper">
              <label for="Email" class="form-label">Date of birth: </label>
              <input class="form-input w-input" maxlength="256" name="dob"  id="dob" required="" type="date">
            </div>
            </div>
            
          
            <div class="input-wrapper">
            <label for="Password" class="form-label">Password</label>
            <input type="password" data-show="true" class="form-input w-input" maxlength="256" name="password" placeholder="Password" id="password" required="">
          </div>
          <input type="submit" value="Create Account" onclick="registerUser()" class="upload-button w-button">
          <div class="show-hide-code w-embed w-script">

          </div>
          <div class="log-in__buttons">
            <div class="or-wrap">
              <div class="gray-line"></div>
              <div class="or-new">or</div>
              <div class="gray-line"></div>
            </div>
            <a href="login.html" class="social-btn google w-inline-block">
              <div class="social-content">
                <div data-ms-auth-connected-text="Disconnect Google" class="social-text">Login</div>
              </div>
            </a>
          </div>
        </form>
  
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6557cd4aff517851834ef158" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>

     <script>


    function registerUser() {
      // Get form data
      const formData = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        gender: document.getElementById('gender').value,
        dob: document.getElementById('dob').value,
        phone: document.getElementById('phone').value,
      };

      fetch('register.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
      })
      .then(response => response.text())
      .then(data => {
        console.log(data); // Log the full response
        return JSON.parse(data); // Try to parse the JSON data
      })
      .then(data => {
        console.log(data);
        // Handle the response from the server
        if (data.status === 'success') {
          alert('User registered successfully!');
          setCookie('userName', data.firstName, 1); // Set a cookie with the user's name
          postToLogin(formData.email, formData.password);
        } else {
          alert('Error: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again later.');
      });
    }

    function postToLogin(email, password) {
      const loginData = {
        email: email,
        password: password,
      };

      const form = document.createElement('form');
      form.method = 'POST';
      form.action = 'login.php';
      for (const key in loginData) {
        if (loginData.hasOwnProperty(key)) {
          const hiddenField = document.createElement('input');
          hiddenField.type = 'hidden';
          hiddenField.name = key;
          hiddenField.value = loginData[key];
          form.appendChild(hiddenField);
        }
      }
      document.body.appendChild(form);
      form.submit();
    }


    function setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      const expires = 'expires=' + date.toUTCString();
      document.cookie = name + '=' + value + ';' + expires + ';path=/';
    }

    function redirectToIndexPage() {
      window.location.href = 'index.php';
    }
  </script>
</body>
</html>