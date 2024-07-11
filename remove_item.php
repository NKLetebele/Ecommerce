<?php

include('includes/sessions.php'); // Include sessions to access session variables
include('includes/db_connections.php'); // Include database connection

// Set the response content type to JSON
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get JSON content from the request body
    $data = json_decode(file_get_contents("php://input"), true);

    // Check if all required fields are present
    if (isset($data['customer_id']) && isset($data['cart_id']) && isset($data['delete_id'])) {
        $customerId = mysqli_real_escape_string($conn, $data['customer_id']);
        $cartId = mysqli_real_escape_string($conn, $data['cart_id']);
        $deleteId = mysqli_real_escape_string($conn, $data['delete_id']);

        // Prepare the SQL query to delete the item
        $sql = "DELETE FROM customer_carts WHERE customer_id = '$customerId' AND cart_id = '$cartId' AND id = '$deleteId'";

        if (mysqli_query($conn, $sql)) {
            // Check if any rows were affected (i.e., item was deleted)
            if (mysqli_affected_rows($conn) > 0) {
                echo json_encode(array('success' => 'Item deleted from cart'));
            } else {
                echo json_encode(array('error' => 'Item not found or could not be deleted'));
            }
        } else {
            // Handle database query error
            echo json_encode(array('error' => 'Failed to delete item from cart'));
        }
    } else {
        echo json_encode(array('error' => 'Missing parameters for deleting item from cart'));
    }
} else {
    // Handle invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('error' => 'Invalid request method. Only POST requests are allowed.'));
}

// Close the database connection
mysqli_close($conn);
?>
