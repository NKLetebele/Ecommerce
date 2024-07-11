<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Get and sanitize login data
    $loginData = [
        'email' => sanitizeInput($_POST['email']),
        'password' => sanitizeInput($_POST['password'])
    ];

    // Your encrypted API key
    $encryptedApiKey = "YOUR_ENCRYPTED_API_KEY";

    // Call api2.php with the login data and API key
    $api_url = 'https://streamlineedit.com/API/api2.php';
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => [
                'Content-Type: application/json',
                'API-Key: ' . $encryptedApiKey
            ],
            'content' => json_encode($loginData)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);

    if ($result === FALSE) {
        // Error handling for API call failure
        die('Error: Unable to connect to API.');
    }

    // Decode the JSON response
    $response = json_decode($result, true);

    // Check the response from api2.php
    if ($response && $response['status'] === 'success') {
        // Login successful, store user data in session
        $_SESSION['customer_id'] = $response['customer_id']; // Add user_id to session
        $_SESSION['user'] = $response['username'];
        $_SESSION['email'] = $loginData['email'];
        $_SESSION['cart_id'] = $response['cart_id'];
        $_SESSION['FirstName'] = $response['FirstName']; // Add FirstName to session
        $_SESSION['LastName'] = $response['LastName']; // Add LastName to session
        $_SESSION['street_address'] = $response['address']; 
        // Store the received token in session
        $_SESSION['token'] = $response['token'];

        // Redirect to profile page or any other page
        header('Location: ../index.php');
        exit;
    } else {
        // Login failed, redirect back to login page with error message
        $error_message = "Login failed: ";
        if(isset($response['message'])) {
            $error_message .= $response['message'];
        } else {
            $error_message .= "Unknown error.";
        }
        header('Location: Signin.php?error=' . urlencode($error_message));
        exit;
    }
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}
?>
