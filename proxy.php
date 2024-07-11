<?php
// Set the target URL
$targetUrl = 'https://streamlineedit.com/process_cart.php';

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];

// Get the request body (for POST and PUT requests)
$body = file_get_contents('php://input');

// Forward the request to the target URL
$ch = curl_init($targetUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($body),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Set the appropriate headers for the response
http_response_code($httpCode);
echo $response;

// Close cURL resource
curl_close($ch);
?>
