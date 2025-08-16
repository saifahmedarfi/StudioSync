<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>StudioSync | About Us</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    /* ========== Base Styles ========== */
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
      min-height: 100vh;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* ========== Navbar ========== */
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

    /* ========== Buttons ========== */
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

    /* ========== Responsive ========== */
    @media (max-width: 480px) {
      .signup-container {
        margin: 1rem;
        padding: 2rem 1.5rem;
      }
    }

    /* ========== About Section ========== */
    .container {
      padding: 8rem 3rem 4rem 3rem;
      max-width: 900px;
      margin: 0 auto;
      text-align: left;
    }

    .container h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      font-family: 'Wallpoet', cursive;
    }

    .container p {
      line-height: 1.8;
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
    }

    /* ========== Footer ========== */
    footer {
      text-align: center;
      padding: 2rem 0;
      background: #111;
      margin-top: 3rem;
    }

    footer p {
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
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

 
  </nav>

<!-- About Section -->
<div class="container">
  <h2>About Us</h2>
  <p>
    Welcome to <strong>StudioSync</strong>, a comprehensive music booking and management platform 
    built to bridge the gap between <em>artists</em>, <em>hirers</em>, and <em>administrators</em>. 
    Our mission is to simplify event coordination, make artist discovery effortless, and create 
    a seamless environment for collaborations.
  </p>
  <p>
    With role-based dashboards, profile customization, secure authentication, and booking management, 
    StudioSync ensures a smooth experience for every user. Whether you’re an artist showcasing your talent, 
    a hirer seeking the perfect performer, or an administrator managing the ecosystem, StudioSync is tailored 
    to meet your needs.
  </p>
  <p>
    We aim to redefine the music booking experience with efficiency, transparency, and ease of communication. 
    Future updates include integrated payment gateways, real-time chat, and AI-powered artist recommendations 
    to further enhance user satisfaction.
  </p>
  <p>
    In what has been described as <em>an innovative leap in the digital music industry</em>, 
    <strong>StudioSync was developed by three promising students from North South University — 
    Saif Ahmed, Tamim Asad Aungan, and Nabila Afzal</strong>. Their collaborative vision, rooted in both 
    creativity and technical expertise, has produced a platform that not only addresses real-world challenges 
    in event management but also showcases the ingenuity and entrepreneurial spirit of the next generation 
    of innovators.
  </p>
</div>


  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> StudioSync. All rights reserved.</p>
  </footer>

</body>
</html>
