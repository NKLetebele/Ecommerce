<?php


// Set SameSite attribute for session cookies to Strict
session_set_cookie_params([
    'samesite' => 'Strict'
]);

// Start session
session_start();

// Check if the user is logged in, redirect to login if not
if (!isset($_SESSION['user'])) {
    $userName = "Login";
} else {
    // Get the user's name from the session
    $userName = $_SESSION['user'];
    $user_id =  $_SESSION['customer_id'];
    $cart_id =  $_SESSION['cart_id'];
    $vendor_id =  4;
    $email =  $_SESSION['email'];
    $token =  $_SESSION['token'];
    $name =  $_SESSION['FirstName'];
    $surname =  $_SESSION['LastName'];
   
}

// Check if last activity time is set
if (isset($_SESSION['LAST_ACTIVITY'])) {
    // Calculate the difference between current time and last activity time
    $inactiveTime = time() - $_SESSION['LAST_ACTIVITY'];
    
    // Set the timeout duration in seconds (40 minutes = 2400 seconds)
    $timeoutDuration = 2400;

    // If user is inactive for more than the timeout duration, destroy the session
    if ($inactiveTime > $timeoutDuration) {
        session_unset();     // Unset all session variables
        session_destroy();   // Destroy the session
        header("Location: index.php");  // Redirect to login page
        exit;
    }
}

// Update the last activity time to the current time
$_SESSION['LAST_ACTIVITY'] = time();

// Display the user's name

?>