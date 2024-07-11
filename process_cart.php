<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Allow requests from any origin
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
header("Access-Control-Allow-Origin: http://localhost/femblack_site/");

header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Check if the request method is OPTIONS and respond appropriately
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    exit();
}

// Get JSON content from the request body
$data = json_decode(file_get_contents("php://input"), true);

// Check if all required fields are present
if (
    isset($data['cart_id']) &&
    isset($data['customer_id']) &&
    isset($data['vendor_id']) &&
    isset($data['product_id']) &&
    isset($data['product_name']) &&
    isset($data['size']) &&
    isset($data['quantity']) &&
    isset($data['price']) &&
    isset($data['created_at'])
) {
    // Process the data if needed (you can perform validations, database operations, etc.)

    // Once processed, send the data to customer_carts.php
    $url = 'https://streamlineedit.com/customer_carts.php';
    
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === false) {
        echo json_encode(array('error' => 'Failed to add item to cart'));
    } else {
        echo $result;
    }
} else {
    echo json_encode(array('error' => 'Missing parameters for adding to cart'));
}
?>
