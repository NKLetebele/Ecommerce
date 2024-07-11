<?php
//session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // User is not logged in
    $isLoggedIn = false;
    $redirectUrl = 'Authentication/Signin.php';
    $redirectUrl2 = 'Authentication/Signin.php';
} else {
    // User is logged in
    $isLoggedIn = true;
    $redirectUrl = 'checkout.php';
    $redirectUrl2 = 'includes/auth.php';
}

?>

<nav bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f6b" class="navigation">
    <a data-w-id="6fcda45a-2e35-d1f0-f07a-ac00ed495f6d" href="#" class="hamburger w-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </a>
    <a href="index.php" aria-current="page" class="logo w-inline-block w--current">
      <h1 class="heading-5">Eshop</h1>
    </a>
    <div class="menu">
      <div class="top" >
        <a href="about-us.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title" >About</p>
        </a>
        <a href="Shop.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title" >Shop</p>
        </a>
        <a href="contact.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title">Contact</p>
        </a>

        

        <div class="cart_wrapper_2"> 
          <a href="<?php echo $redirectUrl2; ?>" style="color:white" class="link-5" id="welcomeMessage"><?php echo $userName; ?></a>
        </div>
      
      </div>
      <div class="side">
        <a href="https://www.instagram.com/shoplucapets/?hl=en" target="_blank" class="social w-inline-block"><img src="images/Instagram.svg" loading="lazy" alt="" class="social_icon"></a>
        <a href="https://www.facebook.com/shoplucapets/" class="social w-inline-block"><img src="images/Facebook.svg" loading="lazy" alt="" class="social_icon"></a>
        <a href="https://www.pinterest.com/shoplucapets/" class="social w-inline-block"><img src="images/Pinterest.svg" loading="lazy" alt="" class="social_icon"></a>
      </div>
    </div>


    <div class="cart_wrapper _3">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"  class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      
      <div class="dropdown" >
    
       <a href="<?php echo $redirectUrl2; ?>" class="link-5" id="welcomeMessage"><?php echo $userName; ?></a>
       <div class="dropdown-content">
         <a href="<?php echo $redirectUrl2; ?>">Dashboard</a>
         <a href="Authentication/logout.php">Logout</a>
       </div>
     </div>
    </div> 
    <!--cart section-->
    <div class="cart_wrapper">
      <div data-node-type="commerce-cart-wrapper" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8b" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart">
        <a href="#" class="w-commerce-commercecartopenlink cart-button w-inline-block">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
          </svg>
          <div  class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
        </a>
        <div data-node-type="commerce-cart-container-wrapper" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8f" style="display:none;    height: 100vh;" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar cart-wrapper">
          <div data-node-type="commerce-cart-container" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f90" class="w-commerce-commercecartcontainer cart-container">
            <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f91" class="w-commerce-commercecartheader">
              <h4 bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f92" class="w-commerce-commercecartheading">Your Cart</h4>
              <a href="#" data-node-type="commerce-cart-close-link" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f94" class="w-commerce-commercecartcloselink close-button w-inline-block">
                <img src="images/X.svg" loading="lazy" alt="" class="image-11"></a>
            </div>
            <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f96" class="w-commerce-commercecartformwrapper">
              <form class="w-commerce-commercecartform">
                
                <div class="w-commerce-commercecartlist" >
                  <div id="cart-container">No items in the cart</div>
                </div>
                
                <div class="w-commerce-commercecartfooter">
                  <div class="w-commerce-commercecartlineitem">
                    <div>Subtotal:</div>
                    <div class="w-commerce-commercecartordervalue">
                      <div id="subtotal">R0.00</div>
                    </div>
                  </div>
                  <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fad">
                 
                    <a href="<?php echo $redirectUrl; ?>" value="Continue to Checkout" data-node-type="cart-checkout-button" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fb6" class="w-commerce-commercecartcheckoutbutton checkout-button" data-loading-text="Hang Tight..." style="display:none;">Continue to Checkout</a>
                  </div>
                </div>
              </form>
              <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fb7" class="w-commerce-commercecartemptystate">
                <div>No items found.</div>
              </div>
              <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fba" style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate">
                <div class="w-cart-error-msg">Product is not available in this quantity.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blur-bkgd"></div>
  </nav>
<!--cart section: end-->