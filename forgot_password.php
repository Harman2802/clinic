<?php
include('head.php');
include('connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$emailNotFound = false;
$successMessage = false;
$errorMessage = false;

if (isset($_POST['btn_forgot'])) {
    $text_email = $_POST['email'];
    $otp = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);

    $sql = "SELECT * FROM admin WHERE email = '" . $conn->real_escape_string($text_email) . "'";
    $ans = $conn->query($sql);

    if (!$ans || $ans->num_rows === 0) {
        $emailNotFound = true;
    } else {
        $res = mysqli_fetch_assoc($ans);

        $realemail = $res['email'];
        $personname = $res['fname'] . ' ' . $res['lname'];

        // Store OTP in the database (hashed for security)
        $hashedOtp = hash('sha256', '2123293dsj2hu2nikhiljdsd' . hash('sha256', $otp));
        $conn->query("UPDATE admin SET otp='$hashedOtp' WHERE email='$realemail'");

        // Email Config
        $emailSettings = $conn->query("SELECT * FROM tbl_email_config");
        $emailConfig = mysqli_fetch_array($emailSettings);

        // PHPMailer Setup
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $emailConfig['mail_driver_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $emailConfig['mail_username'];
        $mail->Password = $emailConfig['mail_password'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $emailConfig['mail_port'];
        $mail->setFrom($emailConfig['mail_username'], $emailConfig['name']);
        $mail->addAddress($realemail, $personname);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = "Hello, your OTP for password reset is: $otp. Use it to reset your password.";

        // Send Email
        if ($mail->send()) {
            $successMessage = true;
        } else {
            $errorMessage = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

<div class="w-full max-w-md bg-white p-8 shadow-md rounded-xl">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Forgot  Password</h2>
    
  </div>

  <?php if ($emailNotFound): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">Email not found. Please try again.</div>
  <?php elseif ($successMessage): ?>
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">OTP sent successfully. Please check your inbox!</div>
  <?php elseif ($errorMessage): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">Error sending email. Please try again later.</div>
  <?php endif; ?>

  <form method="POST" class="space-y-6">
    <div>
      <label class="block text-sm font-medium text-gray-700">Email Address</label>
      <input type="email" name="email" id="email" required
             class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <button type="submit" name="btn_forgot"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-150 ease-in-out">
        Send OTP
      </button>
    </div>
  </form>

  <div class="mt-6 text-center text-sm text-gray-600">
    <p>Back to <a href="login.php" class="text-blue-600 hover:underline">Login</a></p>
  </div>
</div>

</body>
</html>
