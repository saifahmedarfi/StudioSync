<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>Join as Artist | StudioSync</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</head>
<body>


  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="index.php" class="logo-link">StudioSync</a>
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="loginashirer.php">Hire Artist</a></li>
      <li><a href="loginasartist.php">Get Hired</a></li>
      <li><a href="about.php">About Us</a></li>
    </ul>
    <div class="auth-buttons">
      <a href="login.php"><button class="signin-btn">Sign In</button></a>
      <a href="signout.php"><button class="signup-btn">Sign Up</button></a>
    </div>
  </nav>

<!-- Sign-Up Section -->
<section class="auth-section">
  <div class="auth-container">
    <h2>Join StudioSync as an Artist</h2>
    <p>Share your talent and get discovered by hirers worldwide.</p>

    <form id="artistSignupForm" onsubmit="event.preventDefault(); window.location.href='/StudioSync/artist/dashboard.php';">
      <input type="text" name="fullname" id="fullname" placeholder="Full Name" required autocomplete="name" />
      
      <div class="stage-name-container">
        <input type="text" name="stage_name" id="stage_name" placeholder="Stage Name" required />
        <label><input type="checkbox" id="copyNameCheckbox" /> Same as Full Name</label>
      </div>

      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email Address" required />
      
      <select name="genre" required>
        <option value="" disabled selected>Select Genre</option>
        <option>Rock</option>
        <option>Pop</option>
        <option>Jazz</option>
        <option>Classical</option>
        <option>Hip Hop</option>
        <option>Electronic</option>
        <option>Country</option>
        <option>Other</option>
      </select>

      <input type="text" name="instrument" placeholder="Primary Instrument" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />

      <button type="submit" class="auth-submit">Sign Up</button>
    </form>

<p class="bottom-text">Already have an account? <a href="loginasartist.php">Sign In</a></p>
  </div>
</section>



  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    html, body {
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
      padding-bottom: 40px;
    }

    .auth-container {
      background-color: #1a1a1a;
      padding: 3rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
      max-width: 450px;
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

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      padding: 0.8rem;
      border: none;
      border-radius: 8px;
      background-color: #2e2e2e;
      color: white;
      font-size: 1rem;
      width: 100%;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    select:focus {
      outline: 2px solid #ffffff;
    }

    select {
      cursor: pointer;
    }

    .stage-name-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .stage-name-container label {
      font-size: 0.9rem;
      color: #ccc;
      cursor: pointer;
      user-select: none;
    }

    .auth-submit {
      background-color: white;
      color: #0f0f0f;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
      padding: 0.8rem;
      border-radius: 8px;
      border: none;
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

  <script>
    const fullNameInput = document.getElementById('fullname');
    const stageNameInput = document.getElementById('stage_name');
    const copyNameCheckbox = document.getElementById('copyNameCheckbox');

    copyNameCheckbox.addEventListener('change', function() {
      if (this.checked) {
        stageNameInput.value = fullNameInput.value;
        stageNameInput.setAttribute('readonly', true);
      } else {
        stageNameInput.removeAttribute('readonly');
        stageNameInput.value = '';
      }
    });

    fullNameInput.addEventListener('input', function() {
      if (copyNameCheckbox.checked) {
        stageNameInput.value = fullNameInput.value;
      }
    });
  </script>

</body>
</html>
