<?php
header('Content-Type: application/json');

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$response = ["status" => "error", "message" => "An unexpected error occurred"];

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get JSON input
        $input = json_decode(file_get_contents("php://input"), true);

        // Retrieve and sanitize form data
        $firstName = htmlspecialchars($input['firstName'] ?? '');
        $lastName = htmlspecialchars($input['lastName'] ?? '');
        $email = htmlspecialchars($input['email'] ?? '');
        $password = htmlspecialchars($input['password'] ?? '');
        $gender = htmlspecialchars($input['gender'] ?? '');
        $dob = htmlspecialchars($input['dob'] ?? '');
        $phone = htmlspecialchars($input['phone'] ?? '');

        // Data validation (simple example)
        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($gender) || empty($dob) || empty($phone)) {
            throw new Exception("All fields are required.");
        }

        // Prepare data for the API
        $formData = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
            'gender' => $gender,
            'dob' => $dob,
            'phone' => $phone
        ];

        // Convert data to JSON
        $jsonData = json_encode($formData);

        // Initialize cURL session
        $ch = curl_init('https://streamlineedit.com/API/api1.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        // Execute cURL request
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpcode == 200) {
            $responseData = json_decode($response, true);
            if ($responseData['status'] === 'success') {
                $response = ["status" => "success", "firstName" => $firstName, "email" => $email, "password" => $password];
            } else {
                throw new Exception($responseData['message']);
            }
        } else {
            throw new Exception("An error occurred with the API request. HTTP Code: $httpcode");
        }
    } else {
        throw new Exception("Invalid request method.");
    }
} catch (Exception $e) {
    $response = ["status" => "error", "message" => $e->getMessage()];
}

echo json_encode($response);
?>
