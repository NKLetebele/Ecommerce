<?php 
include('includes/header.php');
?>
<?php
// Check if the 'user' session is not set
if (!isset($_SESSION['user'])) {
    // Redirect to the signin page
    header("Location: femblack%20dash/Signin.php");
    exit(); // Make sure to exit after redirection
}
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
.heading-5 {
    color: black;
    font-family: Recifetext, sans-serif;
    font-size: 25px;
    text-decoration: none;
}
.dropdown-nav-title {
    color: black;
    margin-bottom: -15px;
    text-decoration: none;
}
/*.product-image {
    flex-direction: column;
}*/
.w-commerce-commercecartcontainerwrapper {
    z-index: 1001;
    background-color: rgba(0, 0, 0, .8);
    position: fixed;
    height: 1000px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.link-5{
color:black;
}
@media screen and (max-width: 497px){
  .product-image {
    height: 30vw;
     padding: 0px;
}
.product-image1 {
    height: 50vw;
     padding: 0px;
}
}
@media screen and (max-width: 767px){
.product-image.btm-hero {
    height: 100vw;
}}
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
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
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


.faq-drawer {
  margin-bottom: 0px;
}

.faq-drawer__content-wrapper {
  font-family: Montserrat, sans-serif;
    font-size: 15px;
    font-weight: 400;
  line-height: 1.4em;
  max-height: 0px;
  overflow: hidden;
  transition: 0.60s ease-in-out;
  padding-left:10px;
}

.faq-drawer__title {
    border-top: #000 1px solid;
    cursor: pointer;
    display: block;
    font-size: 18px;
    font-weight: 400;
    padding: 20px;
    position: relative;
    margin-bottom: 0;
    transition: all 0.25s ease-out;
}

.faq-drawer__title::after {
  border-style: solid;
  border-width: 1px 1px 0 0;
  content: " ";
  display: inline-block;
  float: right;
  height: 10px;
  left: 2px;
  position: relative;
  right: 20px;
  top: 2px;
  transform: rotate(135deg);
  transition: 0.35s ease-in-out;
  vertical-align: top;
  width: 10px;
}

/* OPTIONAL HOVER STATE */
.faq-drawer__title:hover { 
  color: #4E4B52  ;
}

.faq-drawer__trigger:checked
  + .faq-drawer__title
  + .faq-drawer__content-wrapper {
  max-height: 350px;
}

.faq-drawer__trigger:checked + .faq-drawer__title::after {
  transform: rotate(-45deg);
  transition: 0.25s ease-in-out;
}

input[type="checkbox"] {
  display: none;
}

/*@media only screen and (min-width: 600px) {
  .container {
    padding: 80px;
  }
}*/

</style>
</head>
<body class="body">
  <div class="section cc-product-detail">
    <div class="container product_nav-wrapper">
      <a href="shop.php" class="product_nav w-inline-block" style="color: black;">
        <div class="back-icon"><img src="images/Caret-left.svg" loading="lazy" alt=""></div>
        <div>Back to all products</div>
      </a>
    </div>
    <div class="container product_heading-wrap">

<!-- Add this element where you want to display the API URL -->
<div style="display:none" id="api-url-container"></div>
<!-- Add this element where you want to display the product details -->
<div id="product-detail-container"></div>

      


    </div>
  </div>
  <?php include('includes/subscribe.php'); ?>
  <?php include('includes/footer.php'); ?>
  <?php include('includes/navbar2.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="js/scriptu.js" type="text/javascript"></script>
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
    document.addEventListener('DOMContentLoaded', function () {
        const cartWrapper = document.querySelector('.w-commerce-commercecartcontainerwrapper');
        const openCartButton = document.querySelector('.w-commerce-commercecartopenlink');
        const closeCartButton = document.querySelector('.w-commerce-commercecartcloselink');
  
        // Function to open the cart
        function openCart() {
            cartWrapper.style.display = 'grid';
        }
  
        // Function to close the cart
        function closeCart() {
            cartWrapper.style.display = 'none';
        }
  
        // Event listener for opening the cart
        openCartButton.addEventListener('click', openCart);
  
        // Event listener for closing the cart
        closeCartButton.addEventListener('click', closeCart);
    });
  </script>
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

<script>
let cartItems = [];
const apiUrl = 'includes/api-proxy.php'; // Point to your PHP script
const vendorId = '4';

function getProductIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('product_id');
}

// Load cart from localStorage
function loadCartFromLocalStorage() {
    const storedCart = localStorage.getItem('cart');
    const isLoggedInUser = isLoggedIn();

    if (!isLoggedInUser) {
        // Clear cart if user is not logged in
        cartItems = [];
        updateCartDisplay();
        updateCartIcon();
        updateSubtotal();
        localStorage.removeItem('cart');
        return;
    }

    if (storedCart) {
        cartItems = JSON.parse(storedCart);
        updateCartDisplay();
        updateCartIcon();
        updateSubtotal();
    }
}

async function fetchProductDetails(product_id) {
    try {
        const apiUrlWithParams = `${apiUrl}?product_id=${product_id}`;
        const response = await fetch(apiUrlWithParams);
        const data = await response.json();
        displayProductDetails(data, product_id);
    } catch (error) {
        console.error('Error fetching product details:', error);
    }
}


  function displayProductDetails(products, product_id) {
    const container = document.getElementById('product-detail-container');
    const productInfo = products.find(product => product.product_id === parseInt(product_id));

    if (productInfo) {
      const productDetailsHTML = `
       <div class="product_wrapper">
        <div class="product_images-cont">
          <div class="product_image-wrapper">
           
            <img src="https://streamlineedit.com/Workspace%20Admin/uploads/${productInfo.image}" alt="" class="product-image1">
          </div>
        </div>
        <div class="product-details-wrap">
          <div class="product-detail-main-details">
            <h1 bind="f07e8694-07da-74f3-2a8c-b76eaf91a410" class="product-detail-name">${productInfo.product_name}</h1>
            <div data-commerce-type="variation-price" bind="f07e8694-07da-74f3-2a8c-b76eaf91a412" class="product-detail-price">R${productInfo.price}</div>
            <div data-w-id="b54f57a3-3bf6-10fa-2ba5-8afb399043c3" class="faq-divider margin-top-btm"></div>
            <div class="product_main-description">
              <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a414" class="paragraph-light product">${productInfo.description}</div>
            </div>
            <div class="product_main-description">
              <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a414" class="paragraph-light product">Size: ${productInfo.size}</div>
            </div>
            <div class="product_sec-desciption">
              <div bind="1eaec6ec-b858-8e7b-4f57-192ec8546ad6" class="paragraph-light product"></div>
            </div>
            <div class="product_icons-grid">
              <div class="product_icon-wrapper">
                <div class="product_icon"><img src="images/product_premium-quality.svg" loading="lazy" alt=""></div>
                <div class="label-small all-caps">Premium-Quality</div>
              </div>
              <div class="product_icon-wrapper">
                <div class="product_icon"><img src="images/product_natural.svg" loading="lazy" alt=""></div>
                <div class="label-small all-caps">All Natural</div>
              </div>
              <div class="product_icon-wrapper">
                <div class="product_icon"><img src="images/product_usa-made.svg" loading="lazy" alt=""></div>
                <div class="label-small all-caps">USA Made</div>
              </div>
              <div class="product_icon-wrapper">
                <div class="product_icon"><img src="images/product_sustainable.svg" loading="lazy" alt=""></div>
                <div class="label-small all-caps">Sustainable</div>
              </div>
            </div>
          </div>
          <div class="product-informations">
            <ul role="list" class="w-list-unstyled">
              <li class="list-item">
                <div class="paragraph-light">Dimensions</div>
                <div class="product-detail-measurement">
                  <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a41d"></div>
                  <div class="product-detail-unit-text cc-middle-text">in x</div>
                  <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a421"></div>
                  <div class="product-detail-unit-text cc-middle-text">in x</div>
                  <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a425"></div>
                  <div class="product-detail-unit-text">in</div>
                </div>
              </li>
              <li class="list-item">
                <div class="paragraph-light">Weight</div>
                <div class="product-detail-measurement">
                  <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a42d"></div>
                  <div class="product-detail-unit-text">oz</div>
                </div>
              </li>
            </ul>
          </div>
          <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a432" class="add-to-cart">
            <form data-node-type="commerce-add-to-cart-form" bind="f07e8694-07da-74f3-2a8c-b76eaf91a433" template-bind="f07e8694-07da-74f3-2a8c-b76eaf91a433" position-bind-position="prepend" class="w-commerce-commerceaddtocartform"><label for="quantity-3f8ec8b146ca9ed4b1d9cb3082673eb" position-id="f07e8694-07da-74f3-2a8c-b76eaf91a438" class="label">Quantity</label>
              <div class="product-detail-cta-wrap">
                <input type="number" name="quantity" id="quantity" value="1" min="1" class="w-commerce-commerceaddtocartquantityinput text-field cc-quantity-field">
                <div class="w-commerce-commerceaddtocartbutton button" onclick="addToCart(${productInfo.product_id}, '${productInfo.product_name}', ${productInfo.price}, '${productInfo.image}', '${productInfo.size}')" onclick="updateCartDisplay()">Add to cart</div>
              </div>
            </form>
            <div bind="f07e8694-07da-74f3-2a8c-b76eaf91a43d" style="display:none" class="w-commerce-commerceaddtocartoutofstock status-message">
              <div>This product is out of stock.</div>
            </div>
            <div style="display:none" class="w-commerce-commerceaddtocarterror error-state">
              <div class="error-message" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div>
            </div>
          </div>
          <div class="accordion-wrapper">
       
            
            <div class="faq-drawer">
              <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer">Product Details</label>
                  <div class="faq-drawer__content-wrapper">
                    <div class="faq-drawer__content">
                      <p>
                      Material: [Fabric Composition]<br>
                      Soft and comfortable<br>
                      Pullover style<br>
                      Kangaroo pocket<br>
                      Adjustable drawstring hood<br>
                      Ribbed cuffs and hem<br>
                      Available in sizes: [Sizes Available]<br>
                      Colors: [Color Options]<br>

                      </p>
                    </div>
                  </div>
            </div>
            


            <div class="faq-drawer">
              <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-2">Shipping & Delivery</label>
                  <div class="faq-drawer__content-wrapper">
                    <div class="faq-drawer__content">
                      <p>
                      All orders are shipped via [Courier name] first class ground shipping and will be received within 3-5 business days. You will receive a shipping notification email that will notify you of the tracking numbers.
                      </p>
                    </div>
                  </div>
            </div>

            <div class="faq-drawer">
              <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-3">Sizing Guide</label>
                  <div class="faq-drawer__content-wrapper">
                    <div class="faq-drawer__content">
                      <p>
                      Small: Chest 36-38 inches, Length 26 inches<br>
                      Medium: Chest 38-40 inches, Length 27 inches<br>
                      Large: Chest 40-42 inches, Length 28 inches<br>
                      X-Large: Chest 42-44 inches, Length 29 inches<br>
                      </p>
                    </div>
                  </div>
            </div>
            
          </div>
        </div>
      </div>
      `;
      container.innerHTML = productDetailsHTML;
    } else {
      container.innerHTML = '<p>Product not found.</p>';
    }
  }



















  
  function addToCart(productId, productName, productPrice, productImage, productSize) {
    const quantity = parseInt(document.getElementById('quantity').value);
    const customer = <?php echo json_encode($user_id); ?>;
    const cart = <?php echo json_encode($cart_id); ?>;

    // Create an object with the data to send
    const cartItem = {
        cart_id: cart,
        customer_id: customer,
        vendor_id: 4,
        product_id: productId,
        image: productImage,
        product_name: productName,
        size: productSize,
        quantity: quantity,
        price: productPrice,
        created_at: new Date().toISOString() // Current timestamp
    };

    fetch('includes/customer_carts.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(cartItem)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Item added to cart:', data);

        // Update the local cartItems array with the new item
        const existingItem = cartItems.find(item => item.product_id === productId);

        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            cartItems.push({
                product_id: productId,
                product_name: productName,
                price: productPrice,
                image: productImage,
                size: productSize,
                quantity: quantity
            });
        }

        // Update cart display, icon, and subtotal
        updateCartDisplay();
        updateCartIcon();
        updateSubtotal();

        // Save updated cartItems to local storage
        localStorage.setItem('cart', JSON.stringify(cartItems));
    })
    .catch(error => {
        console.error('Error adding item to cart:', error);
    });
}


  function removeFromCart(productId) {
    const itemIndex = cartItems.findIndex(item => item.product_id === productId);

    if (itemIndex !== -1) {
      cartItems.splice(itemIndex, 1);
    }

    updateCartDisplay();
    updateCartIcon();
    updateSubtotal();

    localStorage.setItem('cart', JSON.stringify(cartItems));

    if (cartItems.length === 0) {
      const cartContainer = document.getElementById('cart-container');
      cartContainer.innerHTML = '<p>No items in the cart.</p>';
    }
  }


  function updateSubtotal() {
    const subtotalElement = document.getElementById('subtotal');
    const subtotal = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    subtotalElement.textContent = `Subtotal: $${subtotal.toFixed(2)}`;
  }

  window.onload = function () {
    const product_id = getProductIdFromUrl();
    fetchProductDetails(product_id);
    loadCartFromLocalStorage();
  };


const customer = <?php echo json_encode($user_id); ?>;
const cart = <?php echo json_encode($cart_id); ?>;

async function updateCartDisplay() {
    const cartContainer = document.getElementById('cart-container');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    try {
        const response = await fetch('fetch_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                customer_id: customer,
                cart_id: cart
            })
        });

        if (!response.ok) {
            throw new Error('Failed to fetch cart items');
        }

        const cartItems = await response.json();

        if (cartItems.length === 0) {
            cartContainer.innerHTML = '<p>No items in the cart.</p>';
            checkoutButton.style.display = 'none';
            return;
        }

        const cartItemsHTML = cartItems.map(item => {
          const totalValue = item.quantity * item.price; // Calculate the total value
            return `
                <div role="listitem" class="w-commerce-commercecheckoutorderitem">
                  
                    <img src="https://streamlineedit.com/Workspace%20Admin/uploads/${item.image}" alt="" class="w-commerce-commercecartitemimage"/>
                    <div class="w-commerce-commercecheckoutorderitemdescriptionwrapper checkout_item_info">
                        <div class="w-commerce-commerceboldtextblock">${item.product_name}</div>
                        <div class="w-commerce-commercecheckoutorderitemquantitywrapper">
                            <div>Qty: </div>
                            <div>${item.quantity}</div>
                        </div>
                        <div class="w-commerce-commercecheckoutorderitemquantitywrapper">
                            <div>Price: </div>
                            <div>R ${item.price}</div>
                        </div>
                        <ul class="w-commerce-commercecheckoutorderitemoptionlist">
                            <li>
                              
                                <span>Size: ${item.size}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="checkout_item_price" style="padding-right: 10px;">R${totalValue}</div>
                    <button style="height: 40px; border-radius: 20px; padding-left: 10px; padding-right: 10px;" onclick="deleteProductFromCart(${item.id}, event)">Delete</button>
                </div>
            `;
        }).join('');

        cartContainer.innerHTML = cartItemsHTML;
        checkoutButton.style.display = 'block';
    } catch (error) {
        console.error('Error fetching cart items:', error);
        cartContainer.innerHTML = '<p>Error fetching cart items.</p>';
        checkoutButton.style.display = 'none';
    }
}

// Call the function to update cart display initially
updateCartDisplay();

// Refresh the cart display after initial display
updateCartDisplay();





function deleteProductFromCart(itemId, event) {
    event.preventDefault(); // Prevent default button click behavior

    // Ensure customer and cart variables are defined
    const customer = <?php echo json_encode($user_id); ?>;
    const cart = <?php echo json_encode($cart_id); ?>;

    // Create the request payload
    const requestBody = {
        customer_id: customer,
        cart_id: cart,
        delete_id: itemId
    };

    console.log('Request Body:', requestBody); // Log the request body for debugging

    fetch('remove_item.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(requestBody)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Item deleted from cart:', data);
        // After deletion, update the cart display
        updateCartDisplay();
        // Update the cart icon
        updateCartIcon();
        updateSubtotal1();
        updateCartDisplayWithNewItems();
        updateSubtotal();
    })
    .catch(error => {
        console.error('Error deleting item from cart:', error);
        // Handle error if deletion fails
    });
}



function updateCartIcon() {
    // Fetch updated cart items
    fetch('fetch_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            customer_id: customer,
            cart_id: cart
        })
    })
    .then(response => response.json())
    .then(cartItems => {
        const cartQuantityElement = document.querySelector('.w-commerce-commercecartopenlinkcount');
        const totalQuantity = cartItems.reduce((total, item) => total + parseInt(item.quantity), 0);
        cartQuantityElement.textContent = totalQuantity.toString();
    })
    .catch(error => {
        console.error('Error updating cart icon:', error);
    });
    updateSubtotal();
}


function updateSubtotal() {
    // Fetch updated cart items
    fetch('fetch_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            customer_id: customer,
            cart_id: cart
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to fetch cart items');
        }
        return response.json();
    })
    .then(cartItems => {
        const subtotalElement = document.getElementById('subtotal');
        const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

        // Calculate subtotal
        const subtotal = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
        
        subtotalElement.textContent = `Subtotal: R${subtotal.toFixed(2)}`;
        
        // Show or hide the button based on the cart subtotal
        checkoutButton.style.display = subtotal > 0 ? 'block' : 'none';
    })
    .catch(error => {
        console.error('Error updating subtotal:', error);
        const subtotalElement = document.getElementById('subtotal');
        subtotalElement.textContent = `Subtotal: R0.00`; // Reset subtotal to zero or handle error state
        const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');
        checkoutButton.style.display = 'none'; // Hide checkout button on error
    });
}


</script>


</body>
</html>