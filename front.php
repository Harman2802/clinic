<?php session_start();?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
         HOSPITAL 
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="/clinic/front.css">
         

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
    <a href="contact.php">Contact Us</a>
    <a href="login.php">Login</a>
  </nav>

  <a href="makeappointment.php" class="link-btn">Emergency Appointment</a>

</header>

<section class="clinic-section">
  

<div class="clinic-container">

  <!-- Left Part -->
  <div class="clinic-left">

    <!-- Clinic Info Ca</div>rd -->
    <div class="clinic-info">
      <div class="rating">
        ★★★★☆ <span>200 reviews</span>
      </div>
      <h1>ENT Clinic Mohali - Dr. Pawan Arora</h1>
      <p>Thursday open from 10:00 AM to 02:00 PM</p>
      
      <p>703, Sector 79, Sahibzada Ajit Singh Nagar, Punjab 140308, India</p>
      <button class="call-btn">📞 Call</button>
    </div>

    <!-- Photos Section -->
    <div class="clinic-photos">
      <h2>Photos</h2>
      <div class="photos-grid">
        <img src="image/im1.jpg" alt="Clinic Photo 1">
        <img src="image/im 2.jpg" alt="Clinic Photo 2">
        <img src="image/im 3.jpg" alt="Clinic Photo 3">
        <img src="image/im 4.jpg" alt="Clinic Photo 4">
      </div>
    </div>

  </div>

  <!-- Right Part -->
  <div class="clinic-right">

    <!-- Contact Card -->
    <div class="card">
      <h3>Contact</h3>
      <p><strong>Address:</strong><br>703, Sector 79, Sahibzada Ajit Singh Nagar, Punjab 140308, India</p>
      <p><strong>Phone:</strong><br>+91 98158 00841</p>
    </div>

    <!-- Timetable Card -->
    <div class="card">
      <h3>Timetable</h3>
      <table class="timetable">
        <tr><td class="day highlight">Thursday</td><td>10:00 AM - 02:00 PM</td></tr>
        <tr><td class="day">Friday</td><td>10:00 AM - 02:00 PM</td></tr>
        <tr><td class="day">Saturday</td><td>10:00 AM - 02:00 PM</td></tr>
        <tr><td class="day">Sunday</td><td>09:00 AM - 03:00 PM</td></tr>
        <tr><td class="day">Monday</td><td>10:00 AM - 02:00 PM</td></tr>
        <tr><td class="day">Tuesday</td><td>10:00 AM - 02:00 PM</td></tr>
        <tr><td class="day">Wednesday</td><td>Closed</td></tr>
      </table>
    </div>

   

  </div>

</div>

</section>


<div class="floating-buttons">
  <a href="tel:98150-77441" class="float-btn call">
    <i class="fas fa-phone"></i>
    <span>CALL</span>
  </a>
  <a href="makeappointment.php" class="float-btn appointment">
    <i class="fas fa-calendar-alt"></i>
    <span>APPOINTMENT</span>
  </a>
  <a href="https://wa.me/98150-77441" class="float-btn whatsapp" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span>WHATSAPP</span>
  </a>
</div>




<section class="services-section" id="services">
  <h1 class="heading">Our <span>Services</span></h1>
 
  <div class="services-grid">

    <div class="service-card">
      <img src="image/cochlear-implant.png" alt="Cochlear Implant">
      <h3>Cochlear Implant Surgery</h3>
      <p>Children with severe to profound hearing loss should undergo cochlear implant surgery early for best results.</p>
    </div>

    <div class="service-card">
      <img src="image/hearing-aid.png" alt="Hearing Aid">
      <h3>Hearing Tests & Hearing Aids</h3>
      <p>A hearing aid improves hearing by making sound audible for a person with hearing loss.</p>
    </div>

    <div class="service-card">
      <img src="image/deafness.png" alt="Deafness">
      <h3>Deafness</h3>
      <p>Hearing loss must not be taken lightly. Our doctors take great care in treating hearing impairment.</p>
    </div>

    <div class="service-card">
      <img src="image/sore-throat.png" alt="Sore Throats">
      <h3>Sore Throats</h3>
      <p>Relieve throat pain, itchiness, or irritation. Book an appointment with our ENT specialists now.</p>
    </div>

    <div class="service-card">
      <img src="image/ear-discharge.png" alt="Ear Discharge">
      <h3>Ear Discharge</h3>
      <p>Our ENT experts help clean any discharge or ear wax with proper instruments and care.</p>
    </div>

    <div class="service-card">
      <img src="image/allergic-rhinitis.png" alt="Allergic Rhinitis">
      <h3>Allergic Rhinitis</h3>
      <p>Contact us if you experience recurrent cold, sneezing, nasal blockage, or headaches.</p>
    </div>

    <div class="service-card">
      <img src="image/snoring-osa.png" alt="Snoring and OSA">
      <h3>Snoring & OSA Treatment</h3>
      <p>Loud snoring can be a sign of sleep apnea. Get evaluated and treated today.</p>
    </div>

    <div class="service-card">
      <img src="image/smell-taste.png" alt="Smell and Taste Disorder">
      <h3>Smell & Taste Disorder</h3>
      <p>We help you treat reduced ability to smell or taste sweet, sour, bitter, or salty flavors.</p>
    </div>

  </div>
    
</section>

<section class="hero-section">
  <div class="hero-content">
    <h1>Pediatric audiology, speech therapy & adult hearing loss</h1>
    <p>Dr. Pawanarora ENT Clinic – where we understand that addressing a patient's unique listening needs</p>
    <a href="contact.php" class="hero-btn">Contact Us Now</a>
  </div>
</section>




<section class="about" id="about">

  <h1 class="heading"><span>About</span> Us</h1>

  <div class="about-row">
    <div class="about-image">
      <img src="image/Arora.png" alt="Dr. Pawan Arora" style="width: 80%; height: auto;">
    </div>

    <div class="about-content">
      <p>
        Dr. Pawan Arora began his medical education in 1992. He completed his MBBS and MS (ENT) from Government Medical College, Amritsar.  
        He served as a Senior Resident in the Department of ENT at MSS Charitable Hospital, Beas. Currently, he is working as a Senior Consultant 
        in the Department of ENT at Guru Nanak Mission Hospital, Jalandhar.
        <br> <br>
        <strong>Mobile Number:</strong> 98150-77441
      </p>
    </div>
  </div>

</section>





<section class="review" id="review">
  <h1 class="heading"><span>What Our </span> Patients Say</h1>
  <div class="review-container">

    <div class="review-box">
      <h3>Ravi Kumar <span>(2 months ago)</span></h3>
      <p>Dr. Buttar is highly professional and compassionate. He diagnosed my issue accurately and provided effective treatment. The clinic is well-maintained and staff is courteous.</p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="review-box">
      <h3>Simran Kaur <span>(1 month ago)</span></h3>
      <p>Best ENT specialist in the city! Dr. Pawan arora treated my son's ear infection with great care. Truly grateful for the quick recovery. Highly recommended!</p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="review-box">
      <h3>Amit Joshi <span>(3 weeks ago)</span></h3>
      <p>Excellent experience. The doctor listened patiently and the treatment worked like a charm. Very satisfied with the care I received.</p>
      <div class="stars">★★★★★</div>
    </div>

    <div class="review-box">
      <h3>Neha Sharma <span>(3 months ago)</span></h3>
      <p>One of the most compassionate doctors I’ve met. Dr. Pawan arora listened patiently and explained everything in detail. My sinus issue is finally under control after years of discomfort. Thank you so much!</p>
      <div class="stars">★★★★★</div>
    </div>


  </div>
</section>


<section class="faq-section">
<div class="faq-container">
  <h2 class="heading"><span>Frequently </span> Asked Questions</h2>

  <div class="faq-item">
    <div class="faq-question">
      <span>Are all the consultants available 24 hours?</span>
      <span class="toggle-icon">+</span>
    </div>
    <div class="faq-answer">
      Our consultants are available during their scheduled hours. Emergency services are available 24/7 with doctors and specialists on-call.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>What facilities does the hospital offer?</span>
      <span class="toggle-icon">+</span>
    </div>
    <div class="faq-answer">
      We provide ENT consultations, diagnostic tests, surgeries, pharmacy services, and 24/7 ambulance support.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>How can I get admitted to the hospital?</span>
      <span class="toggle-icon">+</span>
    </div>
    <div class="faq-answer">
      Admission can be done via appointment bookings or emergency walk-ins, depending on bed and doctor availability.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>Does the hospital accept mediclaim insurance?</span>
      <span class="toggle-icon">+</span>
    </div>
    <div class="faq-answer">
      Yes, we accept major mediclaim policies. Please contact our billing team for further assistance.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      <span>Is ambulance service available at all times?</span>
      <span class="toggle-icon">+</span>
    </div>
    <div class="faq-answer">
      Our ambulance services are available 24/7. Reach out to our emergency number for prompt assistance.
    </div>
  </div>
</div>
</section>


<section class="blog-section">
  <h2 class="heading"><span>From </span>our Blogs</h2>
  <div class="blogs">
    <div class="blog-card">
      <img src="image/old.jpg" alt="Elderly Patient">
      <div class="blog-content">
        <h3>ENT Concerns in Elderly Patients: What You Need to Know</h3>
        <a href="#">READ MORE »</a>
      </div>
    </div>
    <div class="blog-card">
      <img src="image/salivary.jpg" alt="Salivary Gland">
      <div class="blog-content">
        <h3>Salivary Gland Disorders: Types, Symptoms, and Treatment</h3>
        <a href="#">READ MORE »</a>
      </div>
    </div>
    <div class="blog-card">
      <img src="image/blog.jpg" alt="Acid Reflux">
      <div class="blog-content">
        <h3>The Relationship Between Acid Reflux and Throat Discomfort</h3>
        <a href="#">READ MORE »</a>
      </div>
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
            <a href="contact.php"><i class="fas fa-chevron-right"></i>Contact Us</a>
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


<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const icon = item.querySelector('.toggle-icon');

    question.addEventListener('click', () => {
      faqItems.forEach(i => {
        if (i !== item) {
          i.classList.remove('active');
          i.querySelector('.toggle-icon').textContent = '+';
        }
      });

      item.classList.toggle('active');
      icon.textContent = item.classList.contains('active') ? '-' : '+';
    });
  });
</script>
















        <script src="inscript.js"></script>
    </body>
</html>