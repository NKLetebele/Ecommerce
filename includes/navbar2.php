<?php

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to signin.php if not logged in
    $redirectUrl = 'Authentication/Signin.php';
    $redirectUrl2 = 'Authentication/Signin.php';
} else {
    // User is logged in, proceed to checkout.php
    $redirectUrl = 'checkout.php';
    $redirectUrl2 = 'includes/auth.php';
}
?>
<nav bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f6b" class="navigation blur">
    <a data-w-id="6fcda45a-2e35-d1f0-f07a-ac00ed495f6d" href="#" class="hamburger w-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </a>
    <a href="index.php" class="logo w-inline-block">
      <h1 class="heading-5" style="color: black;">Eshop</h1>
    </a>
    <div class="menu">
      <div class="top">
        <a href="about-us.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title">About</p>
        </a>
        <a href="shop.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title">Shop</p>
        </a>
        
        <a href="contact.php" class="top_link w-inline-block">
          <p class="dropdown-nav-title">Contact</p>
        </a>
        
        <div class="cart_wrapper_2">
          <a href="<?php echo $redirectUrl2; ?>" class="link-5"><?php echo $userName; ?></a>
        </div>
      </div>
      <div class="side">
        <a href="https://www.instagram.com/shoplucapets/?hl=en" target="_blank" class="social w-inline-block"><img src="images/Instagram.svg" loading="lazy" alt="" class="social_icon"></a>
        <a href="https://www.facebook.com/shoplucapets/" class="social w-inline-block"><img src="images/Facebook.svg" loading="lazy" alt="" class="social_icon"></a>
        <a href="https://www.pinterest.com/shoplucapets/" class="social w-inline-block"><img src="images/Pinterest.svg" loading="lazy" alt="" class="social_icon"></a>
      </div>
    </div>
    <div class="cart_wrapper _3">
      <img src="images/icons8-customer-64.png" loading="lazy" width="32" alt="" class="image-14 _1 mobile none fhdh">
      
      <div class="dropdown" >
    
       <a href="<?php echo $redirectUrl2; ?>" class="link-5" style="color:black;"><?php echo $userName; ?></a>
       <div class="dropdown-content" style="background-color: white;">
         <a href="<?php echo $redirectUrl2; ?>">Dashboard</a>
         <a href="Authentication/logout.php">Logout</a>
       </div>
     </div>
    </div> 

        <!--cart section-->
        <div class="cart_wrapper">
          <div data-node-type="commerce-cart-wrapper" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8b" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart">
            <a href="#" data-node-type="commerce-cart-open-link" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8c" class="w-commerce-commercecartopenlink cart-button w-inline-block">
              <img src="images/Shopping-bag.svg" loading="lazy" alt="" class="image-15">
              <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8e" class="w-commerce-commercecartopenlinkcount cart-quantity" style="color: black;">0</div>
            </a>
            <div data-node-type="commerce-cart-container-wrapper" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8f" style="display:none; height:100vh;" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar cart-wrapper">
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
                     
                        <a href="<?php echo $redirectUrl; ?>" value="Continue to Checkout" class="w-commerce-commercecartcheckoutbutton checkout-button" style="display:none;">Continue to Checkout</a>
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
        <!--cart section: end-->

    <div class="blur-bkgd"></div>
  </nav>