<?php 
include('includes/header.php');?>
 <style>
[text-split] {opacity: 0;}
html.w-editor [text-split] {opacity: 1;}
.word {
	overflow: hidden;
  padding-bottom: 0.1em;
  margin-bottom: -0.1em;
  transform-origin: bottom;
}
.w-commerce-commercelayoutmain {
    flex: 0 800px;
    /* margin-right: 20px; */
    /*width: 700px;*/
}
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 0px; 
}}
.menu{
  color:black;
}
.dropdown-nav-title {
    color: black;

}
@media screen and (max-width: 991px){
.menu{
  color:white;
}
}
.cart_wrapper_2 {
  display:none;
}
@media screen and (max-width: 991px){
  .cart_wrapper_2 {
      flex-direction: row;
      display: flex;
      font-size: 1.25em;
      line-height: 48px;
      padding-top: 1em;
  }
}
.link-5 {
    color: black;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}
.link-5 {
    color: white;
}
}
.dropdown-nav-title {
    color: black;

}
@media screen and (max-width: 991px){
.dropdown-nav-title{
  color:white;
}} 
.paypal, .apple-pay, .order-items {
    border-radius: 20px;
    margin-top: 60px;
}

</style>
</head>
<body>
  <nav bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f6b" class="navigation blur">
    <a data-w-id="6fcda45a-2e35-d1f0-f07a-ac00ed495f6d" href="#" class="hamburger w-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </a>
    <a href="index.html" class="logo w-inline-block">
      <h1 class="heading-5" style="color: black;">Eshop</h1>
    </a>
    <div class="menu">
      <div class="top">
        <a href="about-us.html" class="top_link w-inline-block">
          <p class="dropdown-nav-title">About</p>
        </a>
        <a href="shop.html" class="top_link w-inline-block">
          <p class="dropdown-nav-title">Shop</p>
        </a>
        
        <a href="contact.html" class="top_link w-inline-block">
          <p class="dropdown-nav-title">Contact</p>
        </a>
        
        <div class="cart_wrapper_2">
          <a href="Authentication/login.html" class="link-5"> <div id="usernameDisplay">Login</div></a>
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
    
       <a href="Authentication/login.html" class="link-5" id="welcomeMessage"> <div id="usernameDisplay">Login</div></a>
       <div class="dropdown-content">
         <a href="#">Dashboard</a>
         <a href="#">Logout</a>
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
            <div data-node-type="commerce-cart-container-wrapper" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f8f" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar cart-wrapper">
              <div data-node-type="commerce-cart-container" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f90" class="w-commerce-commercecartcontainer cart-container">
                <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f91" class="w-commerce-commercecartheader">
                  <h4 bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f92" class="w-commerce-commercecartheading">Your Cart</h4>
                  <a href="#" data-node-type="commerce-cart-close-link" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f94" class="w-commerce-commercecartcloselink close-button w-inline-block">
                    <img src="images/X.svg" loading="lazy" alt="" class="image-11"></a>
                </div>
                <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495f96" class="w-commerce-commercecartformwrapper">
                  <form class="w-commerce-commercecartform">
                    
                    <div class="w-commerce-commercecartlist" >
                      <div id="cart-container"></div>
                    </div>
                    
                    <div class="w-commerce-commercecartfooter">
                      <div class="w-commerce-commercecartlineitem">
                        <div>Subtotal</div>
                        <div class="w-commerce-commercecartordervalue">
                          <div id="subtotal"></div>
                        </div>
                      </div>
                      <div bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fad">
                     
                        <a href="checkout.html" value="Continue to Checkout" data-node-type="cart-checkout-button" bind="6fcda45a-2e35-d1f0-f07a-ac00ed495fb6" class="w-commerce-commercecartcheckoutbutton checkout-button" data-loading-text="Hang Tight...">Continue to Checkout</a>
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
  <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9613" data-node-type="commerce-order-confirmation-wrapper" data-wf-order-query="" data-wf-page-link-href-prefix="" class="w-commerce-commerceorderconfirmationcontainer full-width-form">
    <div class="w-commerce-commerceorderconfirmation">
      <div class="w-commerce-commerceorderconfirmationheaderwrapper order-confirmation-header-wrapper">
        <div class="container cc-full-width-form-wrap">
          <div class="w-commerce-commercelayoutmain">
            <div class="w-commerce-commercecheckoutcustomerinfosummarywrapper">
              <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
                <h4 class="heading-jumbo-tiny">Customer Information</h4>
              </div>
              <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
                <div class="w-commerce-commercecheckoutrow">
                  <div class="w-commerce-commercecheckoutcolumn">
                    <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel label">Email</label>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9622">buzzfiction@gmail.com</div>
                    </div>
                  </div>
                  <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9623" class="w-commerce-commercecheckoutcolumn">
                    <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel label">Shipping Address</label>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9627">country</div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9628">province</div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9629">city</div>
                      <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc962b" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc962c" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc962d" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                      </div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc962e"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div bind="d69961b7-9e26-abe0-8623-4b34f2bc962f" class="w-commerce-commercecheckoutshippingsummarywrapper">
              <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
                <h4 class="heading-jumbo-tiny">Shipping Method</h4>
              </div>
              <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
                <div class="w-commerce-commercecheckoutrow">
                  <div class="w-commerce-commercecheckoutcolumn">
                    <div class="w-commerce-commercecheckoutsummaryitem">
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9637">Express</div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9638">Collect</div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="w-commerce-commercecheckoutpaymentsummarywrapper">
              <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
                <h4 class="heading-jumbo-tiny">Payment Info</h4>
              </div>
              <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
                <div class="w-commerce-commercecheckoutrow">
                  <div class="w-commerce-commercecheckoutcolumn">
                    <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel label">Payment Info</label>
                      <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9644" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9645" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                      </div>
                      <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9647"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9648">payfast </div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc964a"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-commerce-commercecheckoutcolumn">
                    <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel label">Billing Address</label>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc964f">South africa</div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9650">Gauteng</div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9651">Pretoria</div>
                      <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9653" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9654" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                        <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9655" class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                      </div>
                      <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9656"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="w-commerce-commercecheckoutorderitemswrapper">
              <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
                <h4 class="heading-jumbo-tiny">Items in Order</h4>
              </div>
              <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
                <div>
                  <div data-w-id="5c7b453d9254e9f1dec1c0e9000000000054_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000054_instance-0&quot;]" role="listitem" class="w-commerce-commercecheckoutorderitem"><img data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D" data-w-id="5c7b453d9254e9f1dec1c0e9000000000055_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000055_instance-0&quot;]" src="https://uploads-ssl.webflow.com/5c7b453c9254e9017fc1c0d8/5c7b8aa3ee88078051b916d7_CalvinKleinXAndyWarholPatternedBoxerBrief.jpeg" alt="" class="w-commerce-commercecartitemimage"><div data-w-id="5c7b453d9254e9f1dec1c0e9000000000056_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000056_instance-0&quot;]" class="w-commerce-commercecheckoutorderitemdescriptionwrapper checkout_item_info"><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D" data-w-id="5c7b453d9254e9f1dec1c0e9000000000057_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000057_instance-0&quot;]" class="w-commerce-commerceboldtextblock">Andy Warhol Brillo Patterned Boxer Brief</div><div data-w-id="5c7b453d9254e9f1dec1c0e9000000000058_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000058_instance-0&quot;]" class="w-commerce-commercecheckoutorderitemquantitywrapper"><div data-w-id="5c7b453d9254e9f1dec1c0e9000000000059_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000059_instance-0&quot;]">Quantity:  </div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%5D" data-w-id="5c7b453d9254e9f1dec1c0e900000000005b_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e900000000005b_instance-0&quot;]">1</div></div><ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D" data-w-id="5c7b453d9254e9f1dec1c0e900000000005c_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e900000000005c_instance-0&quot;]" class="w-commerce-commercecheckoutorderitemoptionlist"><li data-w-id="5c7b453d9254e9f1dec1c0e900000000005d_instance-0-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e900000000005d_instance-0-0&quot;]"><span data-w-id="5c7b453d9254e9f1dec1c0e900000000005e_instance-0-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e900000000005e_instance-0-0&quot;]" data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D">Size</span><span data-w-id="5c7b453d9254e9f1dec1c0e900000000005f_instance-0-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e900000000005f_instance-0-0&quot;]">: </span><span data-w-id="5c7b453d9254e9f1dec1c0e9000000000061_instance-0-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000061_instance-0-0&quot;]" data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D">S</span></li></ul></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.rowTotal%22%7D%7D%5D" data-w-id="5c7b453d9254e9f1dec1c0e9000000000062_instance-0" data-wf-id="[&quot;5c7b453d9254e9f1dec1c0e9000000000062_instance-0&quot;]" class="checkout_item_price">R38.00</div></div>
                </div>
                <div template-bind="d69961b7-9e26-abe0-8623-4b34f2bc965c" role="list" class="w-commerce-commercecheckoutorderitemslist order-item-list" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-d69961b7-9e26-abe0-8623-4b34f2bc965c"></div>
              </fieldset>
            </div>
          </div>
          <div class="w-commerce-commercelayoutsidebar">
            <div class="w-commerce-commercecheckoutordersummarywrapper">
              <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
                <h4 class="heading-jumbo-tiny">Order Summary</h4>
              </div>
              <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
                <div class="w-commerce-commercecheckoutsummarylineitem">
                  <div>Subtotal</div>
                  <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9676">R0.00</div>
                </div>
                <div class="w-commerce-commercecheckoutsummarylineitem">
                  <div>VAT</div>
                  <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9676">R0.00</div>
                </div>
                <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-d69961b7-9e26-abe0-8623-4b34f2bc9677">
                  <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                    <div bind="d69961b7-9e26-abe0-8623-4b34f2bc9679"></div>
                    <div bind="d69961b7-9e26-abe0-8623-4b34f2bc967a"></div>
                  </div>
                </div>
                <div class="w-commerce-commercecheckoutsummarylineitem">
                  <div>Total</div>
                  <div bind="d69961b7-9e26-abe0-8623-4b34f2bc967e" class="w-commerce-commercecheckoutsummarytotal total-count-text">R0.00</div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script><!--  Dynamic Copyright Year  -->
  <script>
 function copyrightYear() {
   const yearElem = document.getElementById("year")
   yearElem.innerText = new Date().getFullYear()
 }
copyrightYear()
</script>
  <script src="https://unpkg.com/split-type"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script>
window.addEventListener("DOMContentLoaded", (event) => {
  // Split text into spans
  let typeSplit = new SplitType("[text-split]", {
    types: "words, chars",
    tagName: "span"
  });
  // Link timelines to scroll position
  function createScrollTrigger(triggerElement, timeline) {
    // Reset tl when scroll out of view past bottom of screen
    ScrollTrigger.create({
      trigger: triggerElement,
      start: "top bottom",
      onLeaveBack: () => {
        timeline.progress(0);
        timeline.pause();
      }
    });
    // Play tl when scrolled into view (80% from top of screen)
    ScrollTrigger.create({
      trigger: triggerElement,
      start: "top 80%",
      onEnter: () => timeline.play()
    });
  }
  $("[letters-slide-up]").each(function (index) {
    let tl = gsap.timeline({ paused: true });
    tl.from($(this).find(".char"), { yPercent: 100, duration: 0.2, ease: "power1.out", stagger: { amount: 0.6 } });
    createScrollTrigger($(this), tl);
  });
  // Avoid flash of unstyled content
  gsap.set("[text-split]", { opacity: 1 });
});
</script>
</body>
</html>