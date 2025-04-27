<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get In Touch - Clinic</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background: #f4f4f4;
      color: #333;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .contact-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      align-items: flex-start;
      max-width: 1200px;
      margin: 0 auto;
    }

    .contact-form, .map-container {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 20px;
      flex: 1 1 500px;
    }

    form input, form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .send-btn {
      background: #80004d;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .send-btn:hover {
      background: #a00063;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: none;
      border-radius: 12px;
    }

    .info-boxes {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .info-box {
      background: white;
      border-radius: 12px;
      padding: 20px;
      flex: 1 1 250px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .emergency-tab {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      background: red;
      color: white;
      padding: 10px 5px;
      writing-mode: vertical-rl;
      text-align: center;
      border-radius: 0 6px 6px 0;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="emergency-tab">EMERGENCY</div>

<h2>Get In Touch</h2>

<div class="contact-container">
  <div class="contact-form">
    <form>
      <div style="display: flex; gap: 10px;">
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email">
      </div>
      <input type="text" placeholder="Phone Number">
      <input type="text" placeholder="Subject">
      <textarea rows="5" placeholder="Message"></textarea>
      <button type="submit" class="send-btn">Send Message</button>
    </form>
  </div>

  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.037986453585!2d76.70999231500735!3d30.687710981654842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef70dc03ecad%3A0x6b1b570c0d0eae52!2sSohana%20Hospital!5e0!3m2!1sen!2sin!4v1681234567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<div class="info-boxes">
  <div class="info-box">
    <h3>Emergency & Ambulance</h3>
    <p>+91 8725001324</p>
  </div>
  <div class="info-box">
    <h3>Email Us</h3>
    <p>info@sghshospitals.com</p>
  </div>
  <div class="info-box">
    <h3>Call Us</h3>
    <p>+91 8725001155, +91 172-2295000</p>
  </div>
</div>

</body>
</html>
