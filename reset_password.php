<?php
include('head.php');
include('connect.php');
session_start();

$otpInvalid = false;
$passwordMismatch = false;
$resetSuccess = false;

if (!isset($_SESSION['reset_email'])) {
    header('Location: forgot_password.php');
    exit();
}

if (isset($_POST['btn_reset'])) {
    $enteredOtp = $_POST['otp'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check OTP validity
    $email = $_SESSION['reset_email'];
    $sql = "SELECT otp FROM admin WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $storedOtp = $row['otp'];

    if (hash('sha256', '2123293dsj2hu2nikhiljdsd' . hash('sha256', $enteredOtp)) === $storedOtp) {
        if ($newPassword === $confirmPassword) {
            // Update Password
            $hashedPassword = hash('sha256', '2123293dsj2hu2nikhiljdsd' . hash('sha256', $newPassword));
            $conn->query("UPDATE admin SET password = '$hashedPassword' WHERE email = '$email'");
            $resetSuccess = true;
            unset($_SESSION['reset_email']); // Clear session
        } else {
            $passwordMismatch = true;
        }
    } else {
        $otpInvalid = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

<div class="w-full max-w-md bg-white p-8 shadow-md rounded-xl">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Reset Your Password</h2>
    <p class="text-gray-500 text-sm mt-2">Enter the OTP sent to your email and set a new password.</p>
  </div>

  <?php if ($otpInvalid): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">Invalid OTP. Please try again.</div>
  <?php elseif ($passwordMismatch): ?>
    <div class="bg-yellow-100 text-yellow-700 p-3 rounded mb-4">Passwords do not match. Try again.</div>
  <?php elseif ($resetSuccess): ?>
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">Password reset successfully. <a href="login.php" class="text-blue-600 font-medium underline">Login</a></div>
  <?php endif; ?>

  <form method="POST" class="space-y-6">
    <div>
      <label class="block text-sm font-medium text-gray-700">Enter OTP</label>
      <input type="text" name="otp" required
             class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">New Password</label>
      <input type="password" name="new_password" required
             class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
      <input type="password" name="confirm_password" required
             class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <button type="submit" name="btn_reset"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-150 ease-in-out">
        Reset Password
      </button>
    </div>
  </form>
</div>

</body>
</html>
