<?php
require __DIR__ . '/vendor/autoload.php'; // Composer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['fullName'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $phone   = htmlspecialchars($_POST['phone'] ?? '');
    $message = nl2br(htmlspecialchars($_POST['message'] ?? ''));

    $mailBody = "
        <h2>Reservation Confirmation</h2>
        <p><strong>Full Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aarikawieam@gmail.com';         // Your Gmail address
        $mail->Password   = 'hrop vtbq moee gvmx';            // Use Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email headers
        $mail->setFrom('your-email@gmail.com', 'Hotel Reservation');
        $mail->addAddress($email, $name); // Send to form user

        $mail->isHTML(true);
        $mail->Subject = 'Your Reservation Has Been Received';
        $mail->Body    = $mailBody;
        $mail->AltBody = strip_tags($mailBody);

        $mail->send();
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        echo "An error occurred: " . $mail->ErrorInfo;
    }
}
?>

