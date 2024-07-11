<?php 
include('includes/header.php');

// Check if the user is not logged in
if (!isset($_SESSION['user'])) {
    // Redirect to signin.php if not logged in
    header("Location: Authentication/Signin.php");
    exit; // Make sure to stop execution after redirection
}

// User is logged in, continue with checkout page content
// The URL of your API endpoint
$url = 'https://streamlineedit.com/Ecommerce/Consumer%20Dashboard/api_address.php'; // Replace with the actual URL of your API endpoint

// The customer_id to send in the request body
$customer_id = $user_id; // Replace with the actual customer_id

// Your API key (encrypted and stored securely)
$encryptedApiKey = "encrypted_api_key_here"; // Replace with your actual encrypted API key
$iv = "iv_here"; // Replace with your actual IV used for encryption

// Ensure IV is exactly 16 bytes by padding if needed
$iv = str_pad($iv, 16, "\0");

// Decrypt the API key
$decryptedApiKey = openssl_decrypt(base64_decode($encryptedApiKey), 'aes-256-cbc', 'YourEncryptionKey', 0, $iv);

// Create a stream context for the POST request with API key in headers
$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/json\r\n" .
                    "Authorization: Bearer $decryptedApiKey", // Add Authorization header with API key
        'content' => json_encode(['customer_id' => $customer_id]),
    ],
]);

// Make the POST request and get the response
$response = file_get_contents($url, false, $context);

// Decode the JSON response
$data = json_decode($response, true);

// Use $data for further processing
?>


<style>
[text-split] {opacity: 0;}
html.w-editor [text-split] {opacity: 1;}
.word {
	overflow: hidden;
  padding-bottom: 0.1em;
  margin-bottom: -0.1em;
  transform-origin: bottom;
}
.container {
    max-width: 1600px;
    /* flex-direction: column; */
    align-items: none;
    margin-left: auto;
    margin-right: auto;
    display: none;
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

.w-commerce-commercecartitemimage{
  width: 127px;
    height: 80px;
  }


@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}
.link-5 {
    color: white;
}
.order-summary {
    width: 330px;
    flex-basis: 370px;
    display: block;
}
.w-commerce-commercecheckoutorderitem2{
  display:flex;
  flex-direction: column;
}
.w-commerce-commercecartitemimage{
width: 70px;
    height: 60px;}
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
<?php include('includes/navbar2.php'); ?>








  <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd967" data-node-type="commerce-checkout-form-container" data-wf-checkout-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecheckoutformcontainer full-width-form">
    <form id="checkoutForm" action="process-checkout.php" method="POST">
  <div class="container cc-full-width-form-wrap">
      <div class="w-commerce-commercelayoutmain order-wrap">
        <div style="position:relative" data-wf-paypal-button="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;color&quot;:&quot;black&quot;,&quot;shape&quot;:&quot;rect&quot;,&quot;label&quot;:&quot;paypal&quot;,&quot;tagline&quot;:false,&quot;note&quot;:false}" class="paypal">
          <div style="position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;z-index:999;cursor:auto"></div>
        </div>
        <div data-node-type="commerce-cart-quick-checkout-actions" bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd96a">
          
        </div>


        <div class="w-commerce-commercecheckoutorderitemswrapper order-items">
          <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
            <h4 class="heading-jumbo-tiny regular">Items in Order</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
              

            <div role="list" class="w-commerce-commercecheckoutorderitemslist order-item-list" >
               <div id="cart-container2" style="padding-bottom:50px;">Cart empty</div>
            
            
               
            </div>
          </fieldset>
        </div>



          <div  class="w-commerce-commercecheckoutcustomerinfowrapper">
          <div class="w-commerce-commercecheckoutblockheader block-header">
            <h4 class="heading-jumbo-tiny">Customer Info</h4>
            <div class="paragraph-tiny cc-paragraph-tiny-light">* Required</div>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
            <label class="w-commerce-commercecheckoutlabel">Email *</label>
            <input type="text" class="w-commerce-commercecheckoutemailinput text-field" name="email" value="<?php echo $email; ?>" required="">
          </fieldset>
          </div>
        <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd97c" data-node-type="commerce-checkout-shipping-address-wrapper" class="w-commerce-commercecheckoutshippingaddresswrapper">
         
        <?php
        // Check if the address exists
        if (isset($data['address']) && is_array($data['address'])) {
          // Display the address information 
        ?>
  
        <div class="w-commerce-commercecheckoutblockheader block-header">
            <h4 class="heading-jumbo-tiny">Shipping Address</h4>
            <div class="paragraph-tiny cc-paragraph-tiny-light">* Required</div>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
            <label class="w-commerce-commercecheckoutlabel">Recipients Name *</label>
            <?php echo '<input type="text" disabled class="w-commerce-commercecheckoutshippingstreetaddress text-field" name="recipient_name" value="' . htmlspecialchars($data['address']['recipient_name']) . '">'; ?>
            <label class="w-commerce-commercecheckoutlabel">Street Address *</label>
           
            <?php echo '<input type="text" disabled class="w-commerce-commercecheckoutshippingstreetaddress text-field" name="address_line1" name="street_address" value="' . htmlspecialchars($data['address']['street_address']) . '">'; ?>
            <?php echo '<input type="text" disabled class="w-commerce-commercecheckoutshippingstreetaddress text-field" name="address_line1" name="address2" value="' . htmlspecialchars($data['address']['address2']) . '">'; ?>
          
          <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <label class="w-commerce-commercecheckoutlabel">City *</label>
                <?php echo ' <input type="text" disabled class="w-commerce-commercecheckoutshippingcity text-field" name="city" value="' . htmlspecialchars($data['address']['city']) . '"><br>'; ?>
              </div>

              <div class="w-commerce-commercecheckoutcolumn">
                <label class="w-commerce-commercecheckoutlabel">State/Province</label>
                <?php echo ' <input type="text" disabled class="w-commerce-commercecheckoutshippingcity text-field" name="state_province" value="' . htmlspecialchars($data['address']['state_province']) . '"><br>'; ?>
              </div>

              <div class="w-commerce-commercecheckoutcolumn">
                <label class="w-commerce-commercecheckoutlabel">Zip/Postal Code *</label>
                <?php echo ' <input type="text" disabled class="w-commerce-commercecheckoutshippingcity text-field" name="zip_code" value="' . htmlspecialchars($data['address']['postal_code']) . '"><br>'; ?>
              </div>
        </div>
              <label class="w-commerce-commercecheckoutlabel">Country *</label>
              <?php echo ' <input type="text" disabled class="w-commerce-commercecheckoutshippingcity text-field" name="country" value="' . htmlspecialchars($data['address']['country']) . '"><br>'; ?>
          
          </fieldset>
        </div>
        <?php
            } else {
              // Display an error message
              echo 'Address not found for the customer_id';
            }
           ?>



        <div class="w-commerce-commercecheckoutshippingmethodswrapper">
          <div class="w-commerce-commercecheckoutblockheader block-header">
            <h4 class="heading-jumbo-tiny">Shipping Method</h4>
          </div>
          <fieldset>
            <script type="text/x-wf-template" id="wf-template-992b7cac-1ae1-ef14-d4d9-dd177e5dd99f">%3Clabel%20class%3D%22w-commerce-commercecheckoutshippingmethoditem%20shipping-method%22%3E%3Cinput%20type%3D%22radio%22%20required%3D%22%22%20name%3D%22shipping-method-choice%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecheckoutshippingmethoddescriptionblock%22%3E%3Cdiv%20bind%3D%22992b7cac-1ae1-ef14-d4d9-dd177e5dd9a3%22%20class%3D%22w-commerce-commerceboldtextblock%20product-name-text%20cc-shipping-option%22%3E%3C%2Fdiv%3E%3Cdiv%20bind%3D%22992b7cac-1ae1-ef14-d4d9-dd177e5dd9a4%22%20class%3D%22paragraph-light%22%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20bind%3D%22992b7cac-1ae1-ef14-d4d9-dd177e5dd9a5%22%20class%3D%22order-item-price%22%3E%3C%2Fdiv%3E%3C%2Flabel%3E</script>
            <div data-w-id="5c7b453c9254e94deac1c0e600000000003a" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003a&quot;]" data-node-type="commerce-checkout-shipping-methods-list" class="w-commerce-commercecheckoutshippingmethodslist">
              <label data-w-id="5c7b453c9254e94deac1c0e600000000003b_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003b_instance-0&quot;]" class="w-commerce-commercecheckoutshippingmethoditem">
                <input required="" data-wf-bindings="%5B%7B%22id%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22value%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22checked%22%3A%7B%22type%22%3A%22Bool%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.selected%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003c_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003c_instance-0&quot;]" type="radio" name="shipping-method-choice" checked=""><div data-w-id="5c7b453c9254e94deac1c0e600000000003d_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003d_instance-0&quot;]" class="w-commerce-commercecheckoutshippingmethoddescriptionblock">
                  <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.name%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003e_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003e_instance-0&quot;]" class="w-commerce-commerceboldtextblock">Flat-Rate</div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.description%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003f_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003f_instance-0&quot;]">Standard flat rate for all shipments.</div></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.price%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e6000000000040_instance-0" data-wf-id="[&quot;5c7b453c9254e94deac1c0e6000000000040_instance-0&quot;]">R18.90</div>
                </label>
                <label data-w-id="5c7b453c9254e94deac1c0e600000000003b_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003b_instance-1&quot;]" class="w-commerce-commercecheckoutshippingmethoditem"><input required="" data-wf-bindings="%5B%7B%22id%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22value%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22checked%22%3A%7B%22type%22%3A%22Bool%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.selected%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003c_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003c_instance-1&quot;]" type="radio" name="shipping-method-choice"><div data-w-id="5c7b453c9254e94deac1c0e600000000003d_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003d_instance-1&quot;]" class="w-commerce-commercecheckoutshippingmethoddescriptionblock"><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.name%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003e_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003e_instance-1&quot;]" class="w-commerce-commerceboldtextblock">Expedited Shipping</div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.description%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003f_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003f_instance-1&quot;]">Expedited shipping to get the shipment in a day or two.</div></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.price%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e6000000000040_instance-1" data-wf-id="[&quot;5c7b453c9254e94deac1c0e6000000000040_instance-1&quot;]">R109.20</div></label><label data-w-id="5c7b453c9254e94deac1c0e600000000003b_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003b_instance-2&quot;]" class="w-commerce-commercecheckoutshippingmethoditem"><input required="" data-wf-bindings="%5B%7B%22id%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22value%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.id%22%7D%7D%2C%7B%22checked%22%3A%7B%22type%22%3A%22Bool%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.selected%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003c_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003c_instance-2&quot;]" type="radio" name="shipping-method-choice"><div data-w-id="5c7b453c9254e94deac1c0e600000000003d_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003d_instance-2&quot;]" class="w-commerce-commercecheckoutshippingmethoddescriptionblock"><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.name%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003e_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003e_instance-2&quot;]" class="w-commerce-commerceboldtextblock">Overnight Shipping</div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.description%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e600000000003f_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e600000000003f_instance-2&quot;]">An expensive option to get the shipment on the next business day.</div></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.availableShippingMethods%5B%5D.price%22%7D%7D%5D" data-w-id="5c7b453c9254e94deac1c0e6000000000040_instance-2" data-wf-id="[&quot;5c7b453c9254e94deac1c0e6000000000040_instance-2&quot;]">R197.60</div></label></div>
            
            <div data-node-type="commerce-checkout-shipping-methods-empty-state" style="display:none" class="w-commerce-commercecheckoutshippingmethodsemptystate">
              <div>No shipping methods are available for the address given.</div>
            </div>
          </fieldset>
          </div>
       
      
      </div>
      <div class="w-commerce-commercelayoutsidebar order-summary">
        <div class="w-commerce-commercecheckoutordersummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader block-header">
            <h4 class="heading-jumbo-tiny">Order Summary</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent block-content">
            <div class="w-commerce-commercecheckoutsummarylineitem">
              <div>Subtotal</div>
              <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9fc">
               
                <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-992b7cac-1ae1-ef14-d4d9-dd177e5dd9fd">
                  <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9ff"></div>
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dda00" id="subtotal22">R0.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-commerce-commercecheckoutsummarylineitem">
              <div>VAT</div>
              <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9fc">
               
                <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-992b7cac-1ae1-ef14-d4d9-dd177e5dd9fd">
                  <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9ff"></div>
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dda00" id="VAT">R0.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-commerce-commercecheckoutsummarylineitem">
              <div>Discount</div>
              <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9fc">
               
                <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-992b7cac-1ae1-ef14-d4d9-dd177e5dd9fd">
                  <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9ff"></div>
                    <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dda00"id="Discount">R0.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-992b7cac-1ae1-ef14-d4d9-dd177e5dd9fd">
              <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dd9ff"></div>
                <div bind="992b7cac-1ae1-ef14-d4d9-dd177e5dda00"></div>
              </div>
            </div>
            <!-- Add an input field for Grand Total -->
                <input type="hidden" name="grand_total" id="grandTotalInput" value="R0.00">

              <!-- Your existing form content -->

              <div class="w-commerce-commercecheckoutsummarylineitem" style="font-weight:800;">
                <div>Grandtotal</div>
                <div id="grandTotalDisplay" class="w-commerce-commercecheckoutsummarytotal total-count-text">
                  R0.00
                </div>
              </div>
          </fieldset>

        </div>
        <!-- Modify the "Place Order" button -->
        <button type="button" onclick="submitForm()" class="w-commerce-commercecheckoutplaceorderbutton button" data-loading-text="Placing Order...">Place Order</button>
      </div>
    </div>
          </form>
  </div>
  <?php include('includes/footer.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="js/scriptu.js" type="text/javascript"></script>

  <?php include('includes/updateCheck.php'); ?>
  <!--  Dynamic Copyright Year  -->
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
























