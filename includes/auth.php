<?php
session_start();

// Function to check if the user is logged in
function isLoggedIn(){
    return isset($_SESSION['customer_id']) && isset($_SESSION['token']);
}

// Check if the user is logged in
if (isLoggedIn()) {
    $customer_id = $_SESSION['customer_id'];
    $token = $_SESSION['token'];

    // Redirect to the authentication.php page with customer_id and token as parameters
    header("Location: https://streamlineedit.com/Ecommerce/authentication.php?customer_id=$customer_id&token=$token");
    exit;
} else {
    // User is not logged in, redirect to login page
    // header("Location: index.php");
    exit;
}
?>
