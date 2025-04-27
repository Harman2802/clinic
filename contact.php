<?php session_start();?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
         HOSPITAL 
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="/Clinic/front.css">
        

    </head>
  
    <body>

    <header class="header">
  <a href="#" class="logo">
    <img src="image/logo.png" alt="Clinic Logo" style="height: 50px; vertical-align: middle;">
     Dr. Pawan Arora's ENT Clinic
  </a>

  <nav class="navbar" id="navbar">
    <a href="#home">Home</a>
    <a href="#services">Services</a>
    <a href="#about">About</a>
    <a href="#review">Reviews</a>
    <a href="#contact">Contact Us</a>
    <a href="login.php">Login</a>
  </nav>

  <a href="makeappointment.php" class="link-btn">Emergency Appointment</a>

</header>

<section class="contact" id="contact">
  
<h1 class="heading">Contact <span> Us </span></h1>

<div class="contact-container">
  <div class="contact-form">
  <form action="contact_submit.php" method="POST">
  <div style="display: flex; gap: 10px;">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
  </div>
  <input type="text" name="phone" placeholder="Phone Number">
  <input type="text" name="subject" placeholder="Subject">
  <textarea rows="5" name="message" placeholder="Message" required></textarea>
  <button type="submit" class="send-btn">Send Message</button>
</form>

  </div>

  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.037986453585!2d76.70999231500735!3d30.687710981654842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef70dc03ecad%3A0x6b1b570c0d0eae52!2sSohana%20Hospital!5e0!3m2!1sen!2sin!4v1681234567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<br>

<div class="info-boxes">
  <div class="info-box">
    <h3>Emergency & Ambulance</h3>
    <p>+91 75558-67675</p>
  </div>
  <div class="info-box">
    <h3>Email Us</h3>
    <p>info@arorclinic.com</p>
  </div>
  <div class="info-box">
    <h3>Call Us</h3>
    <p>+91 98150-77441</p>
  </div>
</div>
</section>




<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Quick Links</h3>
            <a href="#Home"><i class="fas fa-chevron-right"></i>Home</a>
            <a href="#service"><i class="fas fa-chevron-right"></i>Service</a>
            <a href="#about"><i class="fas fa-chevron-right"></i>About</a> 
            <a href="#review"><i class="fas fa-chevron-right"></i>FAQ's</a>
            <a href="#contact"><i class="fas fa-chevron-right"></i>Contact Us</a>
            <a href="login.php"><i class="fas fa-chevron-right"></i>Login</a>
        </div>
    
        <div class="box">
            <h3> Our Services</h3>
            <a href="#"><i class="fas fa-chevron-right"></i>ENT</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Expert Doctor</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Pharmacy</a>
            <a href="#"><i class="fas fa-chevron-right"></i>24/7 Ambulance</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Total Care</a>
        </div>

        <div class="box">
            <h3> Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 98150-77441</a>
            <a href="#"><i class="fas fa-phone"></i> +91 98150-77441</a>
            <a href="#"><i class="fas fa-envelope"></i>drparora@yahoo.co.in</a>
            <a href="#"><i class="fas fa-envelope"></i>drparora@yahoo.co.in</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>punjab, india -144410</a>
    </div>

    <div class="box">
        <h3> Follow Us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        <a href="https://wa.me/6283808732?text=Hello%2C%20I%20have%20a%20question%20about%20your%20services%21" target="_blank">
        <i class="fab fa-whatsapp"></i>Whatsapp</a>


    </div>
</div>
<div style="text-align:center; color:#aaa; margin-top: 40px; font-size:14px;">
  © 2025 Resume Maker | Made with ❤️ in India
</div>
    
</section>



















        <script src="inscript.js"></script>
    </body>
</html>