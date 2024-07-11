
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
  let cartItems = [];
 const apiUrl = 'https://streamlineedit.com/api-endpoint.php';
 const apiKey = '$2y$10$Eh4MEUENmAD7iDtwztJj5u21E2T.g6Oxt0Rw7MT5ZAY9D95a4Cym2';
 const vendorId = '4';

 document.addEventListener('DOMContentLoaded', function() {
   loadCartFromLocalStorage();
 });

 function loadCartFromLocalStorage() {
   const storedCart = localStorage.getItem('cart');
   if (storedCart) {
     cartItems = JSON.parse(storedCart);
     updateCartDisplay();
     updateCartIcon();
     updateSubtotal();
   }
 }

 function getProductIdFromUrl() {
   const urlParams = new URLSearchParams(window.location.search);
   return urlParams.get('product_id');
 }

 async function fetchProductDetails(product_id) {
   try {
     const apiUrlWithParams = `${apiUrl}?api_key=${apiKey}&vendor_id=${vendorId}&product_id=${product_id}`;
     const response = await fetch(apiUrlWithParams);
     const data = await response.json();
     displayProductDetails(data, product_id);
   } catch (error) {
     console.error('Error fetching product details:', error);
   }
 }


 function addToCart(productId, productName, productPrice, productImage) {
   const quantity = parseInt(document.getElementById('quantity').value);
   const existingItem = cartItems.find(item => item.product_id === productId);

   if (existingItem) {
     existingItem.quantity += quantity;
   } else {
     cartItems.push({
       product_id: productId,
       product_name: productName,
       price: productPrice,
       image: productImage,
       quantity: quantity
     });
   }

   updateCartDisplay();
   updateCartIcon();
   updateSubtotal();

   localStorage.setItem('cart', JSON.stringify(cartItems));
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


 function updateCartIcon() {
   const cartQuantityElement = document.querySelector('.w-commerce-commercecartopenlinkcount');
   const totalQuantity = cartItems.reduce((total, item) => total + item.quantity, 0);
   cartQuantityElement.textContent = totalQuantity;
 }

 function updateSubtotal() {
   const subtotalElement = document.getElementById('subtotal');
   const subtotal = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
   subtotalElement.textContent = `Subtotal: R${subtotal.toFixed(2)}`;
 }

 window.onload = function () {
   const product_id = getProductIdFromUrl();
   fetchProductDetails(product_id);
   loadCartFromLocalStorage();
 };

// Add this script at the end of your existing script 






 function updateCartDisplay() {
   const cartContainer = document.getElementById('cart-container');
   const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

   if (cartItems.length === 0) {
     cartContainer.innerHTML = '<p>No items in the cart.</p>';
     checkoutButton.style.display = 'none'; // Hide the button when the cart is empty
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
   checkoutButton.style.display = 'block'; // Show the button when there are items in the cart
 }

 function updateSubtotal() {
   const subtotalElement = document.getElementById('subtotal');
   const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');
   const subtotal = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
   subtotalElement.textContent = `Subtotal: R${subtotal.toFixed(2)}`;

   // Show or hide the button based on the cart subtotal
   checkoutButton.style.display = subtotal > 0 ? 'block' : 'none';
 }


