
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="popup_style.css">
<?php include('connect.php');?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Admin Panel</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive">
<meta name="author" content="Nikhil Bhalerao +919423979339.">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body class="fix-menu">

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
</div>
</div>
</div>

<?php
$que="select * from manage_website";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
  //print_r($row);
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

<div class="signup-container">
    <img src="image/logo.png" alt="ENT Clinic Logo" class="login-logo"/>
    <form class="signup-form" method="POST" action="signup_process.php">
  <h2>Create Patient Account</h2>

  <div class="input-row">
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required>
  </div>

  <div class="input-row">
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="contact" placeholder="Phone Number" required>
  </div>

  <!-- Hidden input to set role to patient -->
  <input type="hidden" name="user" value="patient">

  <input type="password" name="password" placeholder="Password" required>
  <input type="password" name="confirm-password" placeholder="Confirm Password" required>

  <div class="checkbox-label">
    <label>
      <input type="checkbox" required />
      I accept the <a href="#">terms and conditions</a>
    </label>
  </div>

  <button type="submit">Sign Up</button>

  <div class="footer-link">
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>

  <div class="social-icons">
    <p>Or sign up with</p>
    <div class="icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-google"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
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

<script async src="#"></script>
<script></script>
</body>

<!-- for any PHP, Laravel or Codeignitor Develoopment connect me at mayuri.infospace@gmail.com-->
</html>
