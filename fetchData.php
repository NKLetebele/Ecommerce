<?php
header('Content-Type: application/json');

$apiUrl = 'https://streamlineedit.com/API/api-endpoint.php';
$apiKey = 'YOUR_API_KEY';
$vendorId = '4';

// Construct the URL with proper escaping
$url = sprintf('%s?api_key=%s&vendor_id=%s', $apiUrl, urlencode($apiKey), urlencode($vendorId));

try {
    // Initialize cURL session
    $ch = curl_init();

    if ($ch === false) {
        throw new Exception('Failed to initialize cURL');
    }

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        throw new Exception('cURL error: ' . curl_error($ch));
    }

    // Check HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode !== 200) {
        throw new Exception('HTTP error: ' . $httpCode);
    }

    // Close the cURL session
    curl_close($ch);

    // Output the response
    echo $response;
} catch (Exception $e) {
    // Close the cURL session in case of an exception
    if (isset($ch) && is_resource($ch)) {
        curl_close($ch);
    }

    // Log the error (consider using a more sophisticated logging mechanism)
    error_log($e->getMessage());

    // Return a JSON error response
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch data']);
}
?>
