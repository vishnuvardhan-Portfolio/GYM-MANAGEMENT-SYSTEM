<?php
// send_email.php
// API URL
$apiUrl = 'http://localhost:3000/api/mail';
$mail = $_POST['mail'];

// Prepare the data for the API request
$data = array(
    'to' => $mail,
    'subject' => 'Sculpt Fitness',
    'text' => 'Hello! This is a Sculpt Fitness your membership is going to exprie.Please update it.'
);

// Encode the data into JSON format
$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Execute cURL request and get the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Decode the response
    $responseData = json_decode($response, true);
    
    // Display the response
    if ($responseData && isset($responseData['message'])) {
        echo   $responseData['message'];
    } else {
        echo "Unexpected response: " . $response;
    }
}

// Close cURL session
curl_close($ch);

echo "<script>
        alert('Reminder done $message');
        window.location.href = 'table_view.php';
      </script>";
?>

<!-- <meta http-equiv='refresh' content='0; url=table_view.php'> -->