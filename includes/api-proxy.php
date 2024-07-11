<?php
header('Content-Type: application/json');

// Replace with your actual API key and endpoint
$apiKey = 'YOUR_API_KEY';
$vendorId = '4';
$apiUrl = 'https://streamlineedit.com/API/api-endpoint.php';

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Create the full URL with the necessary parameters
    $url = "$apiUrl?api_key=$apiKey&vendor_id=$vendorId&product_id=$productId";

    // Initialize cURL
    $ch = curl_init();

    // Set the URL and other options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the request and fetch the response. Check for errors
    $response = curl_exec($ch);
    if ($response === FALSE) {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to fetch data from the API']);
    } else {
        echo $response;
    }

    // Close the cURL session
    curl_close($ch);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Missing product_id parameter']);
}
?>
