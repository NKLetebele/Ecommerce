<?php

include('includes/sessions.php'); // Include sessions to access session variables

// Include database connection
include('includes/db_connections.php');

// Set the response content type to JSON
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get customer_id and cart_id from the session
    if (isset($_SESSION['customer_id']) && isset($_SESSION['cart_id'])) {
        $customerId = mysqli_real_escape_string($conn, $_SESSION['customer_id']);
        $cartId = mysqli_real_escape_string($conn, $_SESSION['cart_id']);

        // Fetch cart items
        $sql = "SELECT * FROM customer_carts WHERE customer_id = '$customerId' AND cart_id = '$cartId' AND payment_status != 'Paid'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $cartItems = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $cartItems[] = $row;
            }
            echo json_encode($cartItems);
        } else {
            // Handle database query error
            echo json_encode(array('error' => 'Failed to fetch cart items'));
        }
    } else {
        echo json_encode(array('error' => 'Missing session parameters for fetching cart items'));
    }
} else {
    // Handle invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('error' => 'Invalid request method. Only POST requests are allowed.'));
}

// Close the database connection
mysqli_close($conn);
?>
