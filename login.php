<?php session_start(); ?>

<link rel="stylesheet" href="popup_style.css">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Admin Panel</title>
  <meta name="description" content="#">
  <meta name="keywords" content="Admin , Responsive">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body class="fix-menu">

<?php
include('connect.php');
extract($_POST);

if (isset($_POST['btn_login'])) {
  $passw = hash('sha256', $_POST['password']);
  function createSalt()
  {
    return '2123293dsj2hu2nikhiljdsd';
  }
  $salt = createSalt();
  $pass = hash('sha256', $salt . $passw);

  if ($_POST['user'] == 'admin') {
    $sql = "SELECT * FROM admin WHERE loginid='" . $email . "' and password = '" . $pass . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION["adminid"] = $row['id'];
    $_SESSION["id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["email"] = $row['loginid'];
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["lname"] = $row['lname'];
    $_SESSION['image'] = $row['image'];
    $_SESSION['user'] = $_POST['user'];
  } else if ($_POST['user'] == 'doctor') {
    $sql = "SELECT * FROM doctor WHERE loginid='" . $email . "' and password = '" . $pass . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION["doctorid"] = $row['doctorid'];
    $_SESSION["id"] = $row['doctorid'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["email"] = $row['loginid'];
    $_SESSION["fname"] = $row['doctorname'];
    $_SESSION['user'] = $_POST['user'];
  } else if ($_POST['user'] == 'patient') {
    $sql = "SELECT * FROM patient WHERE loginid='" . $email . "' and password = '" . $pass . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION["patientid"] = $row['patientid'];
    $_SESSION["id"] = $row['patientid'];
    $_SESSION["password"] = $row['password'];
    $_SESSION["email"] = $row['loginid'];
    $_SESSION["fname"] = $row['patientname'];
    $_SESSION['user'] = $_POST['user'];
  }

  $count = ($result) ? mysqli_num_rows($result) : 0;

  if ($count == 1 && isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    echo '<div class="popup popup--icon -success js_success-popup popup--visible">';
    echo '<div class="popup__background"></div>';
    echo '<div class="popup__content">';
    echo '<h3 class="popup__content__title">Success</h3>';
    echo '<p>Login Successfully</p>';
    echo '<p>';
    echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
    echo '</p></div></div>';
  } else {
    echo '<div class="popup popup--icon -error js_error-popup popup--visible">';
    echo '<div class="popup__background"></div>';
    echo '<div class="popup__content">';
    echo '<h3 class="popup__content__title">Error</h3>';
    echo '<p>Invalid Email or Password</p>';
    echo '<p><a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a></p>';
    echo '</div></div>';
  }
}
?>

<?php
$que = "select * from manage_website";
$query = $conn->query($que);
while ($row = mysqli_fetch_array($query)) {
  extract($row);
  $business_name = $row['business_name'];
  $business_email = $row['business_email'];
  $business_web = $row['business_web'];
  $portal_addr = $row['portal_addr'];
  $addr = $row['addr'];
  $curr_sym = $row['curr_sym'];
  $curr_position = $row['curr_position'];
  $front_end_en = $row['front_end_en'];
  $date_format = $row['date_format'];
  $def_tax = $row['def_tax'];
  $logo = $row['logo'];
}
?>

<div class="login-container">
  <form method="POST" class="login-form">
    <img src="image/logo.png" alt="ENT Clinic Logo" class="login-logo" />
    <h2>Login</h2>
    
    <select name="user" required>
      <option value="" disabled selected>Select Role</option>
      <option value="admin">Admin</option>
      <option value="doctor">Doctor</option>
      <option value="patient">Patient</option>
    </select>
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit" name="btn_login">Login</button>
    <div class="form-links">
      <p><a href="forgot_password.php">Forgot Password?</a></p>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
  </form>
</div>

<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<script type="text/javascript" src="files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="files/assets/js/common-pages.js"></script>
</body>
</html>