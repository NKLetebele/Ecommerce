<?php

include('sessions.php');

// Set the response content type to JSON
header('Content-Type: application/json');

// Get the POST body content and decode the JSON
$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);

// Debugging: Log the received POST data
error_log("Request Body: " . print_r($requestBody, true));
error_log("Decoded Data: " . print_r($data, true));

// Check if the necessary POST parameters are set
if (!isset($data['cart_id'], $data['customer_id'], $data['vendor_id'], $data['product_id'], $data['image'], $data['product_name'], $data['size'], $data['quantity'], $data['price'], $data['created_at'])) {
    http_response_code(400); // Bad Request
    echo json_encode(array('error' => 'Missing required parameters'));
    exit;
}

// Extract variables from the decoded data
$cart_id = $data['cart_id'];
$customer_id = $data['customer_id'];
$vendor_id = $data['vendor_id'];
$product_id = $data['product_id'];
$image = $data['image'];
$product_name = $data['product_name'];
$size = $data['size'];
$quantity = $data['quantity'];
$price = $data['price'];
$created_at = $data['created_at'];

// Connect to the database
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "ecommerce"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    echo json_encode(array('error' => 'Database connection failed: ' . $conn->connect_error));
    exit;
}

// Start transaction for atomic operations
$conn->begin_transaction();

// Check if there's an existing 'Pending payment' cart for the customer
$pending_payment_query = $conn->prepare("SELECT payment_id FROM customer_carts WHERE customer_id = ? AND payment_status = 'Pending payment' LIMIT 1");
$pending_payment_query->bind_param("i", $customer_id);
$pending_payment_query->execute();
$pending_payment_result = $pending_payment_query->get_result();
$pending_payment_data = $pending_payment_result->fetch_assoc();

if ($pending_payment_data) {
    // If there's an existing 'Pending payment' cart, use its payment_id
    $payment_id = $pending_payment_data['payment_id'];
} else {
    // Generate a new payment_id if no 'Pending payment' cart exists for the customer
    $payment_id = generate_payment_id(); // Implement your own function to generate a unique payment_id
}

$pending_payment_query->close();

// Prepare the SQL statement to insert the cart item
$stmt = $conn->prepare("INSERT INTO customer_carts (cart_id, customer_id, vendor_id, product_id, image, product_name, size, quantity, price, created_at, payment_id, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Pending payment')");
$stmt->bind_param("iiiisssidsi", $cart_id, $customer_id, $vendor_id, $product_id, $image, $product_name, $size, $quantity, $price, $created_at, $payment_id);

// Execute the statement
if ($stmt->execute()) {
    $conn->commit();
    echo json_encode(array('success' => 'Item added to cart successfully'));
} else {
    $conn->rollback();
    http_response_code(500); // Internal Server Error
    echo json_encode(array('error' => 'Failed to add item to cart: ' . $stmt->error));
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Function to generate a unique numerical payment_id (example implementation)
function generate_payment_id() {
    // Generate a timestamp-based ID (example, adjust as needed)
    return time(); // Returns current Unix timestamp
}

?>
