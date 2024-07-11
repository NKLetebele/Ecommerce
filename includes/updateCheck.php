<script>
   /*   document.addEventListener('DOMContentLoaded', function () {
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
 const apiKey = 'YOUR_API_KEY';
 const vendorId = '4';

 document.addEventListener('DOMContentLoaded', function() {
   loadCartFromLocalStorage();
 });

 function loadCartFromLocalStorage() {
   const storedCart = localStorage.getItem('cart');

   if (storedCart) {
     cartItems = JSON.parse(storedCart);
     updateCartDisplay();
     updateCartDisplayWithNewItems();
     updateCartIcon();
     updateSubtotal();
     updateSubtotal1();
   }
 }*/















// this is the display from the api code 


const customer = <?php echo json_encode($user_id); ?>;
const cart = <?php echo json_encode($cart_id); ?>;

function updateCartDisplay() {
    const cartContainer = document.getElementById('cart-container');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    // Fetch cart items from PHP script
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
        if (cartItems.length === 0) {
            cartContainer.innerHTML = '<p>No items in the cart.</p>';
            checkoutButton.style.display = 'none';
            return;
        }
// ${item.id}
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
       // updateSubtotal(cartItems);
       // updateCartIcon(cartItems); // Update cart icon with total quantity
        checkoutButton.style.display = 'block';
    })
    .catch(error => {
        console.error('Error fetching cart items:', error);
        cartContainer.innerHTML = '<p>Error fetching cart items.</p>';
        checkoutButton.style.display = 'none';
    });
}

// Call the function to update cart display
updateCartDisplay();


function updateCartDisplayWithNewItems() {
    const cartContainer = document.getElementById('cart-container2');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    // Fetch cart items from PHP script
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
    })
    .catch(error => {
        console.error('Error fetching cart items:', error);
        cartContainer.innerHTML = '<p>Error fetching cart items.</p>';
        checkoutButton.style.display = 'none';
    });
}

// Call the function to update cart display with new items
updateCartDisplayWithNewItems();



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
}

function updateSubtotal1() {
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
    });
}


function updateSubtotal() {
    const subtotalElement = document.getElementById('subtotal22');
    const vatElement = document.getElementById('VAT');
    const discountElement = document.getElementById('Discount');
    const grandTotalElement = document.querySelector('.w-commerce-commercecheckoutsummarytotal');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    // Fetch cart items from PHP script
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
        if (cartItems.length === 0) {
            // If cart is empty, set everything to 0
            subtotalElement.textContent = `R${0.00.toFixed(2)}`;
            vatElement.textContent = `R${0.00.toFixed(2)}`;
            discountElement.textContent = `R${0.00.toFixed(2)}`;
            grandTotalElement.textContent = `R${0.00.toFixed(2)}`;
            checkoutButton.style.display = 'none';
            return;
        }

        // Calculate subtotal
        const subtotal = cartItems.reduce((total, item) => total + parseFloat(item.price) * parseInt(item.quantity), 0);
        subtotalElement.textContent = `R${subtotal.toFixed(2)}`;

        // Calculate VAT (assuming VAT is 15%)
        const vatRate = 0.15;
        const vat = subtotal * vatRate;
        vatElement.textContent = `R${vat.toFixed(2)}`;

        // Calculate discount (if any)
        const discount = 0; // Assuming no discount
        discountElement.textContent = `R${discount.toFixed(2)}`;

        // Calculate shipping (if any)
        const shipping = 0; // Assuming no shipping

        // Calculate grand total (subtotal + VAT - Discount + Shipping)
        const grandTotal = subtotal + vat - discount + shipping;
        grandTotalElement.textContent = `R${grandTotal.toFixed(2)}`;

        // Show or hide the button based on the cart subtotal
        checkoutButton.style.display = subtotal > 0 ? 'block' : 'none';

        // Send the grand total to PHP asynchronously
        sendGrandTotalToPHP(grandTotal);
    })
    .catch(error => {
        console.error('Error fetching cart items:', error);
        // Set everything to 0 in case of error
        subtotalElement.textContent = `R${0.00.toFixed(2)}`;
        vatElement.textContent = `R${0.00.toFixed(2)}`;
        discountElement.textContent = `R${0.00.toFixed(2)}`;
        grandTotalElement.textContent = `R${0.00.toFixed(2)}`;
        checkoutButton.style.display = 'none';
    });
}

// Call the function to update subtotal and grand total
updateSubtotal();
updateCartIcon();

function sendGrandTotalToPHP(grandTotal) {
    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Configure it: POST-request for the URL
    xhr.open("POST", "process-checkout.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Prepare the data to be sent
    const data = "grandTotal=" + grandTotal;

    // Send the request with the data
    xhr.send(data);

    // This is called when the response is received
    xhr.onload = function () {
        if (xhr.status != 200) {
            // Error handling
            console.error(`Error ${xhr.status}: ${xhr.statusText}`);
        } else {
            // Response handling
            console.log(xhr.responseText);
        }
    };

    // This is called in case of error
    xhr.onerror = function () {
        console.error("Request failed");
    };
}
  // Function to update and submit the form with Grand Total
  function submitForm() {
    // Update the Grand Total input field with the current value
    let grandTotal = document.getElementById('grandTotalDisplay').textContent;
    document.getElementById('grandTotalInput').value = grandTotal;

    // Submit the form
    document.getElementById('checkoutForm').submit();
  }
</script>
