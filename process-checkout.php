<?php
// Enable error reporting to display any potential errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('includes/header.php');

// Check if the user is not logged in
if (!isset($_SESSION['user'])) {
    // Redirect to signin.php if not logged in
    header("Location: Authentication/Signin.php");
    exit; // Make sure to stop execution after redirection
}

// Check if the necessary POST parameters are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["grand_total"])) {
    // Extract the grand total from the POST data and remove non-numeric characters
    $grandTotal = $_POST["grand_total"];
    $grandTotal = preg_replace('/[^\d.]/', '', $grandTotal); // Remove non-numeric characters

    // Connect to the database
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "ecommerce"; // Replace with your database name
 
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Get the user's ID from the session
   // $user_id = $_SESSION['user']['id']; // Adjust as per your session structure

    // Parameters from POST data (adjust as per your form structure)
   // $cart_id = $_POST['cart_id'];
  //  $vendor_id = $_POST['vendor_id'];

    // Query to retrieve payment_id from customer_carts table
    $payment_id_query = $conn->prepare("SELECT payment_id FROM customer_carts WHERE cart_id = ? AND customer_id = ? AND vendor_id = ? AND payment_status = 'Pending payment'");
    $payment_id_query->bind_param("iii", $cart_id, $user_id, $vendor_id);

    // Execute the query
    $payment_id_query->execute();
    $payment_id_query->bind_result($paymentID);

    // Fetch the result
    $payment_id_query->fetch();

    // Close the query
    $payment_id_query->close();

    // If paymentID is not set (no existing payment_id for pending payment), generate a new one
    if (!isset($paymentID)) {
        $paymentID = generate_payment_id(); // Implement your own function to generate a unique payment ID

        // Insert the new payment_id into customer_carts table for all pending payment items
        $insert_payment_query = $conn->prepare("UPDATE customer_carts SET payment_id = ? WHERE cart_id = ? AND customer_id = ? AND vendor_id = ? AND payment_status = 'Pending payment'");
        $insert_payment_query->bind_param("siii", $paymentID, $cart_id, $user_id, $vendor_id);
        $insert_payment_query->execute();
        $insert_payment_query->close();
    }

    $conn->close();

    // Function to generate a unique payment ID (example implementation)
    function generate_payment_id() {
        return time(); // Example: Using timestamp as payment ID
    }

    // Construct variables for PayFast integration
  //  $name = $_SESSION['user']['name']; // Replace with actual user name
   // $surname = $_SESSION['user']['surname']; // Replace with actual user surname
  //  $email = $_SESSION['user']['email']; // Replace with actual user email

    $passphrase = 'Dedeadline3902_';
    $data = array(
        // Merchant details
        'merchant_id' => '10033715',
        'merchant_key' => 'qbnsef78d58pn',
        'return_url' => 'https://streamlineedit.com/admin/return.php?payment_id=' . $paymentID,
        'cancel_url' => 'https://streamlineedit.com/admin/cancel.php',
        'notify_url' => 'https://streamlineedit.com/notify.php',

        // Buyer details (You can adjust these based on your form inputs)
        'name_first' => $name,
        'name_last'  => $surname,
        'email_address'=> $email,

        // Transaction details
        'm_payment_id' => $paymentID, // Unique payment ID to pass through to notify_url
        'amount' => number_format( sprintf( '%.2f', $grandTotal ), 2, '.', '' ), // Cast to float and format
        'item_name' => 'Eshop online store'
    );

    // Generate signature
    function generateSignature($data, $passPhrase = null) {
        $pfOutput = '';
        foreach ($data as $key => $val) {
            if ($val !== '') {
                $pfOutput .= $key . '=' . urlencode(trim($val)) . '&';
            }
        }
        $getString = substr($pfOutput, 0, -1);
        if ($passPhrase !== null) {
            $getString .= '&passphrase=' . urlencode(trim($passPhrase));
        }
        return md5($getString);
    }

    $signature = generateSignature($data, $passphrase);
    $data['signature'] = $signature;

    // Payment form HTML
    $testingMode = true;
    $pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
    $htmlForm = '<form action="https://' . $pfHost . '/eng/process" method="post">';
    foreach ($data as $name => $value) {
        $htmlForm .= '<input name="' . $name . '" type="hidden" value=\'' . $value . '\' />';
    }
    $htmlForm .= '<input type="submit" id="payNowButton" value="Pay Now" /></form>';

    // Display the form if grand total is greater than 0
    // Display the form if grand total is greater than 0
if ((float)$grandTotal > 0) {
    echo $htmlForm;
    echo '<script>
            document.getElementById("payNowButton").click();
            document.getElementById("payNowButton").style.display = "none";
          </script>';
} else {
    echo "Grand Total is not greater than 0. Cannot proceed with payment.";
}

} else {
    echo "Error: Invalid Request. POST 'grand_total' not received.";
}
?>
