<?php
// signup.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StudioSync | Sign Up</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</head>
<body>

  <nav class="navbar">
<div class="logo">
  <a href="index.php" class="logo-link">StudioSync</a>
</div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Hire Artist</a></li>
      <li><a href="#">Get Hired</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <div class="auth-buttons">
      <a href="login.php"><button class="signin-btn">Sign In</button></a>
      <a href="signup.php"><button class="signup-btn">Sign Up</button></a>
    </div>
  </nav>

  <section class="auth-section">
    <div class="auth-container">
      <h2>Create Your Account</h2>
      <p>Join StudioSync and start your musical journey today.</p>
      <form action="signup_action.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="confirm_password" placeholder="Confirm Password" required />
        <button type="submit" class="auth-submit">Sign Up</button>
      </form>
      <p class="bottom-text">Already have an account? <a href="login.php">Sign In</a></p>
    </div>
  </section>

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

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 3rem;
      position: absolute;
      width: 100%;
      z-index: 10;
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

    .auth-buttons {
      display: flex;
      gap: 1rem;
    }

    .signin-btn, .signup-btn {
      padding: 0.5rem 1.2rem;
      border: 2px solid white;
      border-radius: 25px;
      background: transparent;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .signin-btn:hover, .signup-btn:hover {
      background: white;
      color: #0f0f0f;
      transform: scale(1.05);
      box-shadow: 0 0 10px #fff;
    }

    .auth-section {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding-top: 120px;
    }

.auth-container {
  background-color: #1a1a1a;
  padding: 3rem 2.5rem;
  border-radius: 12px;
  box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
  max-width: 480px;   /* widened from 400px */
  width: 100%;
  text-align: center;
}
    .auth-container h2 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .auth-container p {
      color: #ccc;
      margin-bottom: 2rem;
    }

    .auth-container form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .auth-container input {
      padding: 0.8rem;
      border: none;
      border-radius: 8px;
      background-color: #2e2e2e;
      color: white;
      font-size: 1rem;
    }

    .auth-container input:focus {
      outline: 2px solid #ffffff;
    }

.auth-submit {
  background-color: white;
  color: #0f0f0f;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
  height: 3.2rem;          /* taller */
  font-size: 1.1rem;       /* slightly bigger */
  width: 100%;             /* full width */
  border-radius: 8px;      /* smooth edges */
  border: none;
  padding: 0;              /* reset padding for consistent height */
}

.auth-submit:hover {
  background-color: #ccc;
}

    .bottom-text {
      margin-top: 1.5rem;
      color: #aaa;
      font-size: 0.9rem;
    }

    .bottom-text a {
      color: white;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .auth-container {
        margin: 1rem;
        padding: 2rem 1.5rem;
      }
    }
  </style>

</body>
</html>
