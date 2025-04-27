<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome - ENT Clinic</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #89f7fe, #66a6ff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }

    .welcome-box {
      background: white;
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .welcome-box h1 {
      color: #0c8c9e;
      margin-bottom: 1rem;
    }

    .welcome-box p {
      color: #333;
      margin-bottom: 1.5rem;
    }

    .login-btn {
      background-color: #0c8c9e;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      font-size: 0.95rem;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
      text-decoration: none;
    }

    .login-btn:hover {
      background-color: #096f7a;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <div class="welcome-box">
    <h1>Welcome to ENT Clinic!</h1>
    <p>Your account has been created successfully.</p>
    <a href="login.php" class="login-btn">Go to Login</a>
  </div>

</body>
</html>
