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

  <div style='max-width: 600px; margin: auto; background: linear-gradient(135deg, #2d2d4d, #1a1a2e); padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(128,0,255,0.4);'>

    <h2 style='color: #bb86fc; text-align: center; text-shadow: 0 0 8px #9b59b6;'> Reservation Confirmation</h2>

    <p style='font-size: 16px;'><strong style='color: #e0e0ff;'> Full Name:</strong> <span style='color: #e0e0ff;'>{$name}</span></p>
    <p style='font-size: 16px;'><strong style='color: #e0e0ff;'> Email:</strong> <span style='color: #e0e0ff;'>{$email}</span></p>
    <p style='font-size: 16px;'><strong style='color: #e0e0ff;'> Phone:</strong> <span style='color: #e0e0ff;'>{$phone}</span></p>

    <p style='font-size: 16px; margin-top: 20px;'><strong>📝 Message:</strong></p>
    <div style='background-color: #292945; padding: 15px; border-radius: 8px; font-size: 15px; color: #ccccff; box-shadow: inset 0 0 10px #3d3d5c;'>
      {$message}
    </div>

    <p style='margin-top: 40px; font-size: 13px; color: #8888aa; text-align: center;'>Thank you for choosing us! </p>

  </div>

";


 $mail = new PHPMailer(true);

    try {
        // Config Gmail SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aarikawieam@gmail.com';           // إيميلك
        $mail->Password   = 'hrop vtbq moee gvmx';             // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // إعدادات الإرسال
        $mail->setFrom('aarikawieam@gmail.com', 'Formulaire Portfolio'); // من
        $mail->addAddress('aarikawieam@gmail.com', 'Moi');               // إلى: إيميلك فقط

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de ton Portfolio';
        $mail->Body    = $mailBody;
        $mail->AltBody = strip_tags($mailBody);

        $mail->send();
      
         header("Location: index.php"); 
        // exit();

    } catch (Exception $e) {
        echo "❌ Erreur lors de l'envoi : " . $mail->ErrorInfo;
    }
}
?>