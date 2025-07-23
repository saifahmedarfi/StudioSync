<?php
// hirer_signup.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>StudioSync | Hirer Sign Up</title>

  <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />


  <style>
    /* Base & navbar styles - consistent with your code */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    html, body {
      background-color: #0f0f0f;
      color: white;
      overflow-x: hidden;
      min-height: 100vh;
    }

    a {
      text-decoration: none;
      color: inherit;
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
      color: inherit;
      font-family: inherit;
      display: inline-block;
    }

    .logo-link:hover {
      color: #ccc;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 3rem;
      background: transparent;
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

    /* Signup form container */
    main {
      padding-top: 130px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 130px);
    }

    .signup-container {
      background-color: #1a1a1a;
      padding: 3rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
      max-width: 450px;
      width: 100%;
      text-align: center;
    }

    .signup-container h2 {
      font-size: 2rem;
      margin-bottom: 0.8rem;
    }

    .signup-container p {
      color: #ccc;
      margin-bottom: 2rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    input, select {
      padding: 0.8rem;
      border: none;
      border-radius: 8px;
      background-color: #2e2e2e;
      color: white;
      font-size: 1rem;
      font-weight: 500;
    }

    input:focus, select:focus {
      outline: 2px solid #f7bc5e;
      background-color: #222;
    }

    button[type="submit"] 
    button[type="button"]{
      background-color: white;
      color: #0f0f0f;
      font-weight: 700;
      cursor: pointer;
      padding: 0.9rem 0;
      border-radius: 25px;
      transition: background-color 0.3s ease;
      border: none;
      width: 100%; /* optional: make it full width like before */

    }

button[type="submit"]:hover,
button[type="button"]:hover {
  background-color: #f7bc5e;
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

    .styled-button {
  background-color: white;
  color: #0f0f0f;
  font-weight: 700;
  cursor: pointer;
  padding: 0.9rem 0;
  border-radius: 25px;
  transition: background-color 0.3s ease;
  border: none;
  width: 100%;
}

.styled-button:hover {
  background-color: #f7bc5e;
}


    @media (max-width: 480px) {
      .signup-container {
        margin: 1rem;
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
<div class="logo">
  <a href="dashboard.php" class="logo-link">StudioSync</a>
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

  <main>
    <section class="signup-container" aria-label="Hirer signup form">
      <h2>Create Hirer Account</h2>
      <p>Connect with talented musicians to bring your vision to life.</p>
      <form action="hirer_signup_action.php" method="POST" autocomplete="off" novalidate>
        <input type="text" name="username" placeholder="Username" required minlength="3" maxlength="30" />
        <input type="text" name="company_name" placeholder="Company/Organization Name" required maxlength="50" />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9+\-\s]{7,15}" title="Enter valid phone number" />
        <select name="industry" required>
          <option value="" disabled selected>Select Industry</option>
          <option value="event_management">Event Management</option>
          <option value="record_label">Record Label</option>
          <option value="media">Media</option>
          <option value="corporate">Corporate</option>
          <option value="other">Other</option>
        </select>
        <input type="password" name="password" placeholder="Password" required minlength="6" />
        <input type="password" name="confirm_password" placeholder="Confirm Password" required minlength="6" />
<button type="button" class="styled-button" onclick="window.location.href='hirer/hirer_profile.php'">
  Sign Up
</button>
      </form>
      <p class="bottom-text">
        Already have an account? <a href="loginashirer.php">Sign In</a>
      </p>
    </section>
  </main>

</body>
</html>


