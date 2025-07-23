<?php
// login.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>Login | StudioSync</title>

  <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #0f0f0f;
      color: white;
      overflow-x: hidden;
      height: 100vh;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 1.5rem 3rem;
      background-color: rgba(0, 0, 0, 0.9);
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
    }

    .logo {
      font-family: 'Wallpoet', cursive;
      font-size: 2.2rem;
      color: white;
      transform: scale(1.2);
      transform-origin: left center;
    }

.logo-link {
  text-decoration: none;
  color: inherit; /* inherits white or whatever the logo color is */
  font-family: inherit;
  display: inline-block;
}

.logo-link:hover {
  color: #ccc; /* optional hover effect */
}


    .navbar ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }

    .navbar ul li a:hover {
      color: #ccc;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding-top: 120px;
    }

    .login-box {
      background-color: #1a1a1a;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(255, 255, 255, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #ddd;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      background-color: #2e2e2e;
      color: white;
      font-size: 1rem;
    }

    .form-group input:focus {
      outline: none;
      background-color: #3a3a3a;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      background-color: #ffffff;
      color: #0f0f0f;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .login-btn:hover {
      background-color: #ccc;
      box-shadow: 0 0 10px #fff;
    }

    .bottom-text {
      margin-top: 20px;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }

    .bottom-text a {
      color: white;
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        gap: 1rem;
      }

      .navbar ul {
        flex-direction: column;
        gap: 1rem;
      }

      .login-container {
        padding: 100px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
<div class="logo">
  <a href="index.php" class="logo-link">StudioSync</a>
</div>    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Hire Artist</a></li>
      <li><a href="#">Get Hired</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </nav>

  <!-- Login Form -->
  <div class="login-container">
    <div class="login-box">
      <h2>Log In as Hirer</h2>
<form method="GET" action="hirer/hirer_profile.php">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" placeholder="you@example.com" required />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="••••••••" required />
  </div>
  <button type="submit" class="login-btn">Log In</button>
</form>
      <div class="bottom-text">
        Don't have an account? <a href="signup.php">Sign Up</a>
      </div>
    </div>
  </div>

</body>
</html>
