<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Make Appointment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #f0f4ff, #ffffff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

 .appointment-container {
  max-width: 600px;
  margin: 5rem auto;
  padding: 2rem;
  background: #ffffff;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  text-align: center;
  border-radius: 20px;
  animation: fadeInUp 1s ease;
}

.appointment-container h1 {
  font-size: 2rem;
  color: #222;
  margin-bottom: 2rem;
  font-weight: 600;
}

.scanner-image {
  width: 250px;
  height: auto;
  margin-bottom: 1.5rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.scanner-image:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
}

.appointment-container .btn {
  display: inline-block;
  padding: 12px 25px;
  background: #3f8cff;
  color: #fff;
  font-size: 1rem;
  border-radius: 30px;
  text-decoration: none;
  transition: background 0.3s ease, transform 0.2s ease;
}

.appointment-container .btn:hover {
  background: #005be4;
  transform: translateY(-2px);
}

/* Optional animation */
@keyframes fadeInUp {
  0% {
    transform: translateY(30px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

  </style>
</head>
<body>

  <div class="appointment-container">
    <h1>Scan to Book Your Appointment</h1>
    <img src="image/scanner.png" alt="Scan QR for Appointment" class="scanner-image"><br>
    <a href="appointment.php" class="btn">Book Without QR</a>

</div>
  

</body>
</html>
