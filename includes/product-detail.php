<?php

/*$cartItems = [];
$apiUrl = 'https://streamlineedit.com/api-endpoint.php';
$apiKey = 'YOUR_API_KEY';
$vendorId = '4';

// Load cart from local storage
function loadCartFromLocalStorage() {
    global $cartItems;
    $storedCart = $_COOKIE['cart'] ?? null;
    if ($storedCart) {
        $cartItems = json_decode($storedCart, true);
        updateCartDisplay();
        updateCartIcon();
        updateSubtotal();
    }
}*/

// Get product id from URL
function getProductIdFromUrl() {
    return $_GET['product_id'] ?? null;
}

// Fetch product details asynchronously
function fetchProductDetails($product_id) {
    global $apiUrl, $apiKey, $vendorId;
    try {
        $apiUrlWithParams = "{$apiUrl}?api_key={$apiKey}&vendor_id={$vendorId}&product_id={$product_id}";
        $response = file_get_contents($apiUrlWithParams);
        $data = json_decode($response, true);
        displayProductDetails($data, $product_id);
    } catch (Exception $error) {
        error_log('Error fetching product details: ' . $error->getMessage());
    }
}

// Display product details
function displayProductDetails($products, $product_id) {
    $productInfo = array_filter($products, function ($product) use ($product_id) {
        return $product['product_id'] === intval($product_id);
    });

    if (!empty($productInfo)) {
        $productInfo = reset($productInfo);
        $productDetailsHTML = "
            <div class=\"product_wrapper\">
                <div class=\"product_images-cont\">
                    <div class=\"product_image-wrapper\">
                        <img src=\"https://streamlineedit.com/Workspace%20Admin/uploads/{$productInfo['image']}\" alt=\"\" class=\"product-image1\">
                    </div>
                </div>
                <div class=\"product-details-wrap\">
                    <div class=\"product-detail-main-details\">
                        <h1 bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a410\" class=\"product-detail-name\">{$productInfo['product_name']}</h1>
                        <div data-commerce-type=\"variation-price\" bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a412\" class=\"product-detail-price\">R{$productInfo['price']}</div>
                        <div data-w-id=\"b54f57a3-3bf6-10fa-2ba5-8afb399043c3\" class=\"faq-divider margin-top-btm\"></div>
                        <div class=\"product_main-description\">
                            <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a414\" class=\"paragraph-light product\">{$productInfo['description']}</div>
                        </div>
                        <div class=\"product_main-description\">
                            <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a414\" class=\"paragraph-light product\">Size: {$productInfo['size']}</div>
                        </div>
                        <div class=\"product_sec-desciption\">
                            <div bind=\"1eaec6ec-b858-8e7b-4f57-192ec8546ad6\" class=\"paragraph-light product\"></div>
                        </div>
                        <div class=\"product_icons-grid\">
                            <div class=\"product_icon-wrapper\">
                                <div class=\"product_icon\"><img src=\"images/product_premium-quality.svg\" loading=\"lazy\" alt=\"\"></div>
                                <div class=\"label-small all-caps\">Premium-Quality</div>
                            </div>
                            <div class=\"product_icon-wrapper\">
                                <div class=\"product_icon\"><img src=\"images/product_natural.svg\" loading=\"lazy\" alt=\"\"></div>
                                <div class=\"label-small all-caps\">All Natural</div>
                            </div>
                            <div class=\"product_icon-wrapper\">
                                <div class=\"product_icon\"><img src=\"images/product_usa-made.svg\" loading=\"lazy\" alt=\"\"></div>
                                <div class=\"label-small all-caps\">USA Made</div>
                            </div>
                            <div class=\"product_icon-wrapper\">
                                <div class=\"product_icon\"><img src=\"images/product_sustainable.svg\" loading=\"lazy\" alt=\"\"></div>
                                <div class=\"label-small all-caps\">Sustainable</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"product-informations\">
                        <ul role=\"list\" class=\"w-list-unstyled\">
                            <li class=\"list-item\">
                                <div class=\"paragraph-light\">Dimensions</div>
                                <div class=\"product-detail-measurement\">
                                    <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a41d\"></div>
                                    <div class=\"product-detail-unit-text cc-middle-text\">in x</div>
                                    <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a421\"></div>
                                    <div class=\"product-detail-unit-text cc-middle-text\">in x</div>
                                    <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a425\"></div>
                                    <div class=\"product-detail-unit-text\">in</div>
                                </div>
                            </li>
                            <li class=\"list-item\">
                                <div class=\"paragraph-light\">Weight</div>
                                <div class=\"product-detail-measurement\">
                                    <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a42d\"></div>
                                    <div class=\"product-detail-unit-text\">oz</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a432\" class=\"add-to-cart\">
                        <form data-node-type=\"commerce-add-to-cart-form\" bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a433\" template-bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a433\" position-bind-position=\"prepend\" class=\"w-commerce-commerceaddtocartform\">
                            <label for=\"quantity-3f8ec8b146ca9ed4b1d9cb3082673eb\" position-id=\"f07e8694-07da-74f3-2a8c-b76eaf91a438\" class=\"label\">Quantity</label>
                            <div class=\"product-detail-cta-wrap\">
                                <input type=\"number\" name=\"quantity\" id=\"quantity\" value=\"1\" min=\"1\" class=\"w-commerce-commerceaddtocartquantityinput text-field cc-quantity-field\">
                                <div class=\"w-commerce-commerceaddtocartbutton button\" onclick=\"addToCart({$productInfo['product_id']}, '{$productInfo['product_name']}', {$productInfo['price']}, '{$productInfo['image']}', '{$productInfo['size']}')\">Add to cart</div>
                            </div>
                        </form>
                        <div bind=\"f07e8694-07da-74f3-2a8c-b76eaf91a43d\" style=\"display:none\" class=\"w-commerce-commerceaddtocartoutofstock status-message\">
                            <div>This product is out of stock.</div>
                        </div>
                        <div style=\"display:none\" class=\"w-commerce-commerceaddtocarterror error-state\">
                            <div class=\"error-message\" data-w-add-to-cart-quantity-error=\"Product is not available in this quantity.\" data-w-add-to-cart-general-error=\"Something went wrong when adding this item to the cart.\" data-w-add-to-cart-mixed-cart-error=\"You can’t purchase another product with a subscription.\" data-w-add-to-cart-buy-now-error=\"Something went wrong when trying to purchase this item.\" data-w-add-to-cart-checkout-disabled-error=\"Checkout is disabled on this site.\" data-w-add-to-cart-select-all-options-error=\"Please select an option in each set.\">Product is not available in this quantity.</div>
                        </div>
                    </div>
                    <div class=\"accordion-wrapper\">
                        <div class=\"faq-divider\"></div>
                        <div data-hover=\"false\" data-delay=\"0\" data-w-id=\"43a3618d-3949-b3f1-5457-52a5aa48caa9\" style=\"height:60px\" class=\"accordion-item w-dropdown\">
                            <div class=\"accordion-trigger w-dropdown-toggle\">
                                <div class=\"accordion-title\">Feeding Instructions</div><img src=\"images/w-expand.svg\" loading=\"lazy\" width=\"24\" height=\"24\" style=\"-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)\" alt=\"\" class=\"accordion-img_tap\">
                            </div>
                            <nav class=\"dropdown-list top-padding w-dropdown-list\">
                                <div class=\"content-wrapper\">
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Feed as a healthy snack</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Supervise your dog while eating. Have fresh, clean water available.</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Re-seal after opening and store in a cool, dry &amp; dark place.</div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div data-hover=\"false\" data-delay=\"0\" data-w-id=\"7e08fcea-9ab5-9715-195e-f0da44262a88\" style=\"height:60px\" class=\"accordion-item w-dropdown\">
                            <div class=\"accordion-trigger w-dropdown-toggle\">
                                <div class=\"accordion-title\">Shipping &amp; Delivery</div><img src=\"images/w-expand.svg\" loading=\"lazy\" width=\"24\" height=\"24\" style=\"-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)\" alt=\"\" class=\"accordion-img_tap\">
                            </div>
                            <nav class=\"dropdown-list top-padding w-dropdown-list\">
                                <div class=\"content-wrapper\">
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Orders are typically shipped within 1-2 business days</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">All domestic orders are shipped with USPS</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Tracking information is provided for all orders</div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div data-hover=\"false\" data-delay=\"0\" data-w-id=\"0a432f93-8b6e-dcee-ac03-967aefd6295b\" style=\"height:60px\" class=\"accordion-item w-dropdown\">
                            <div class=\"accordion-trigger w-dropdown-toggle\">
                                <div class=\"accordion-title\">100% Sustainable</div><img src=\"images/w-expand.svg\" loading=\"lazy\" width=\"24\" height=\"24\" style=\"-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)\" alt=\"\" class=\"accordion-img_tap\">
                            </div>
                            <nav class=\"dropdown-list top-padding w-dropdown-list\">
                                <div class=\"content-wrapper\">
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">We buy the exact amount of ingredients we need, keeping food waste to a minimum</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">By only using organic ingredients grown without pesticides, we’re supporting an agriculture system that benefits biodiversity and wildlife</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Minimize our carbon footprint by sourcing locally</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">We source our seafood through sustainable methods to protect the health of our oceans. Learn more on our Sustainability page</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">Plastic-free shipping</div>
                                    </div>
                                    <div class=\"content-info-wrap\">
                                        <div class=\"paw-img\"><img src=\"images/Paw_Print.svg\" loading=\"lazy\" width=\"20\" height=\"20\" alt=\"\"></div>
                                        <div class=\"content-info\">We adopt Terracycle’s Zero Waste Box Program to properly recycle our pet treats pouches</div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        ";
        echo $productDetailsHTML;
    } else {
        echo '<p>Product not found.</p>';
    }
}

// Add to cart function
/*function addToCart($productId, $productName, $productPrice, $productImage, $productSize) {
    global $cartItems;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    $existingItemIndex = array_search($productId, array_column($cartItems, 'product_id'));

    if ($existingItemIndex !== false) {
        $cartItems[$existingItemIndex]['quantity'] += $quantity;
    } else {
        $cartItems[] = [
            'product_id' => $productId,
            'product_name' => $productName,
            'price' => $productPrice,
            'image' => $productImage,
            'size' => $productSize,
            'quantity' => $quantity
        ];
    }

    updateCartDisplay();
    updateCartIcon();
    updateSubtotal();

    setcookie('cart', json_encode($cartItems), time() + (86400 * 30), "/"); // 86400 = 1 day
}*/





// Call necessary functions based on actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add_to_cart') {
        $productId = $_POST['product_id'] ?? null;
        $productName = $_POST['product_name'] ?? null;
        $productPrice = $_POST['product_price'] ?? null;
        $productImage = $_POST['product_image'] ?? null;
        $productSize = $_POST['product_size'] ?? null;
        if ($productId && $productName && $productPrice && $productImage && $productSize) {
            addToCart($productId, $productName, $productPrice, $productImage, $productSize);
        } else {
            echo 'Invalid request.';
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productId = getProductIdFromUrl();
    if ($productId) {
        fetchProductDetails($productId);
    } else {
        echo 'Product ID not found.';
    }
}

?>