<?php
session_start();
?>

<!-- Your signin form HTML goes here -->

<!DOCTYPE html>
<html data-wf-page="6557cd4bff517851834ef1be" data-wf-site="6557cd4aff517851834ef158">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta content="Login" property="og:title">
  <meta content="Login" property="twitter:title">
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
 <link href="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/external-africa-south-africa-icongeek26-glyph-icongeek26.png" rel="apple-touch-icon">
 
</head>
<body>
  <form action="login.php" method="post">
  <div class="full-section">
    <div class="log-in__content">
      <div class="form-block-2 w-form">
       
          <h1 class="log-in__h">Access your account</h1>
          <div>Signin to your account to continue shopping.</div>
          <div class="input-wrapper">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-input w-input" maxlength="256" name="email" placeholder="Enter email" id="Email"  required="">
          </div>

          <div class="input-wrapper">
            <label for="Password" class="form-label">Password</label>
            <input type="password" data-show="true" class="form-input w-input" maxlength="256" name="password" placeholder="Enter password" id="Password" required="">
            <div data-current="Show" data-easing="ease" data-duration-in="300" data-duration-out="100" class="show-password-wrap w-tabs">
              <div id="transformButton" data-transform="true" class="w-tab-menu">
                <a data-w-tab="Show" class="show-password w-inline-block w-tab-link w--current">
                  <div class="eye-svg w-embed"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="auto" viewbox="0 0 24 24" width="1000px" fill="currentColor">
                      <rect fill="none" height="24" width="24"></rect>
                      <path d="M12 6.5c2.76 0 5 2.24 5 5 0 .51-.1 1-.24 1.46l3.06 3.06c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l2.17 2.17c.47-.14.96-.24 1.47-.24zM2.71 3.16c-.39.39-.39 1.02 0 1.41l1.97 1.97C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.97-.3 4.31-.82l2.72 2.72c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L4.13 3.16c-.39-.39-1.03-.39-1.42 0zM12 16.5c-2.76 0-5-2.24-5-5 0-.77.18-1.5.49-2.14l1.57 1.57c-.03.18-.06.37-.06.57 0 1.66 1.34 3 3 3 .2 0 .38-.03.57-.07L14.14 16c-.65.32-1.37.5-2.14.5zm2.97-5.33c-.15-1.4-1.25-2.49-2.64-2.64l2.64 2.64z"></path>
                    </svg></div>
                  <div>Hide</div>
                </a>
                <a data-w-tab="Hide" class="show-password w-inline-block w-tab-link">
                  <div class="eye-svg w-embed"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="auto" viewbox="0 0 24 24" width="1000px" fill="currentColor">
                      <rect fill="none" height="24" width="24"></rect>
                      <path d="M0 0h24v24H0V0z" fill="none"></path>
                      <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"></path>
                    </svg></div>
                  <div>Show</div>
                </a>
              </div>
              <div class="hide w-tab-content">
                <div data-w-tab="Show" class="w-tab-pane w--tab-active"></div>
                <div data-w-tab="Hide" class="w-tab-pane"></div>
              </div>
            </div>
          </div>
          <input type="submit" value="Log In" class="social-btn google w-inline-block">
          <div class="show-hide-code w-embed w-script">
            <script>
//attach a click handler to the button to make it transform when clicked, via our transform() function below
    document.querySelector("[data-transform]").addEventListener("click", transform);
    //flag of whether or not it is a password field or text field
    var isPassword = true;
    //this function will toggle the input between being a password or a text input
    function transform() {
        //copy the element itself, its html source, and value text to a variable
        var myInput = document.querySelector("[data-show]");
        var oldHtml = myInput.outerHTML;
        var text = myInput.value;
        if (isPassword)
        {
            //replace "password" with "text" in the html if it is a password field
            var newHtml = oldHtml.replace(/password/g, "text");
        }
        else
        {
            //replace "text" with "password" if it is a text field
            newHtml = oldHtml.replace(/text/g, "password");
        }
        //update the html
        myInput.outerHTML = newHtml;
        //restore the text value
        myInput = document.querySelector("[data-show]");
        myInput.value = text;
        //toggle the isPassword flag
        isPassword = !isPassword;
    }
</script>
          </div>
          <div class="or-wrap">
            <div class="gray-line"></div>
            <div class="or-new">or</div>
            <div class="gray-line"></div>
          </div>
          <div class="log-in__buttons">
            <a  href="signup.php" class="social-btn google w-inline-block">
              <div class="social-content">
                <div class="social-text">Create an account</div>
              </div>
            </a>
          </div>

          <div class="or-new" style="color:red;">
            <?php  
          
          // Check if there is an error message
          if (isset($_GET['error'])) {
            $error_message = $_GET['error'];
            // Display the error message
            echo '<div class="error-message">' . $error_message . '</div>';
          }
          
          ?>
          </div>
       
    
      </div>
    </div>
  </div>
  </form>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6557cd4aff517851834ef158" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>