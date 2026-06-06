<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Ensure this file is included only when it's being triggered
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $uid = $_POST['name']; // Get user ID from the form

    // Connect to the database
    require '../../include/db_conn.php'; // Adjust the path as needed
    page_protect();

    // Fetch the email address of the user based on their ID
    $query = "SELECT email FROM users WHERE userid = '$uid'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $userEmail = $row['email'];

    // Define random messages
    $messages = [
        "Reminder: Don't forget to log your workout today!",
        "Your next session is waiting for you. Stay motivated!",
        "Time to crush your fitness goals today!",
        "Push yourself beyond your limits. Keep going!",
        "Your body is stronger than you think. Stay committed!",
    ];

    // Select a random message
    $randomMessage = $messages[rand(0, count($messages) - 1)];

    try {
        $mail = new PHPMailer(true);

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dhamo1892004@gmail.com';  // Replace with your email
        $mail->Password = 'ddxdjvvnpk@7';            // Replace with your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email details
        $mail->setFrom('dhamo1892004@gmail.com', 'Gym Reminder');  // Replace with your email
        $mail->addAddress($userEmail); // Send the reminder to the user's email
        $mail->Subject = 'Random Gym Reminder';
        $mail->Body = $randomMessage;

        // Send email
        $mail->send();
        echo 'Email sent successfully with a random message.';
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
