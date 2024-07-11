
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
  let cartItems = [];
  const apiUrl = 'https://streamlineedit.com/api-endpoint.php';
  const apiKey = 'YOUR_API_KEY';
  const vendorId = '4';

   function getProductIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('product_id');
  }

  document.addEventListener('DOMContentLoaded', function() {
       loadCartFromLocalStorage();
       
        fetchProductDetails(product_id)
    });



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
      const apiUrlWithParams = `${apiUrl}?api_key=${apiKey}&vendor_id=${vendorId}&product_id=${product_id}`;
      const response = await fetch(apiUrlWithParams);
      const data = await response.json();
      displayProductDetails(data, product_id);
    } catch (error) {
      console.error('Error fetching product details:', error);
    }
  }


</script>









<!-- this is the display from the api code -->
<script>
const customer = <?php echo json_encode($user_id); ?>;
const cart = <?php echo json_encode($cart_id); ?>;

function fetchDataAndUpdate() {
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
        updateCartDisplay(cartItems);
        updateCartIcon(cartItems);
        updateSubtotal(cartItems);
    })
    .catch(error => {
        console.error('Error fetching or updating data:', error);
    });
}

function updateCartDisplay(cartItems) {
    const cartContainer = document.getElementById('cart-container');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

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
}

function updateCartIcon(cartItems) {
    const cartQuantityElement = document.querySelector('.w-commerce-commercecartopenlinkcount');
    const totalQuantity = cartItems.reduce((total, item) => total + parseInt(item.quantity), 0);
    cartQuantityElement.textContent = totalQuantity.toString();
}

function updateSubtotal(cartItems) {
    const subtotalElement = document.getElementById('subtotal');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    const subtotal = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
    subtotalElement.textContent = `R ${subtotal.toFixed(2)}`;

    checkoutButton.style.display = subtotal > 0 ? 'block' : 'none';
}

// Initial call to fetch and update data
fetchDataAndUpdate();

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
        // After deletion, re-fetch the updated cart items and update the display
        fetchDataAndUpdate();
    })
    .catch(error => {
        console.error('Error deleting item from cart:', error);
        // Handle error if deletion fails
    });
}


</script>
