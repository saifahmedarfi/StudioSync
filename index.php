<?php
// landing.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>StudioSync</title>

  <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
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
  <a href="login.php">
    <button class="signin-btn">Sign In</button>
  </a>
  <a href="signup.php">
    <button class="signup-btn">Sign Up</button>
  </a>
</div>

  </nav>

  <section class="hero">
    <div class="hero-content">
      <h1>Unite Through Rhythm, Hire Through Harmony.</h1>
      <p>Whether you're seeking a voice to lift your night or a crowd to feel your song — we make the magic happen.

</p>
      <div class="hero-buttons">
<a href="findartist.php" class="hero-button-link">
  <button><i class="fas fa-music"></i> Find Artists</button>
</a>
<a href="joinasartist.php" class="hero-button-link">
  <button><i class="fas fa-star"></i> Join as Artist</button>
</a>
      </div>
    </div>
  </section>


<!-- New Section: How StudioSync Works -->
<section class="how-it-works">
  <div class="how-header">
    <h2>From Profiles to Performances</h2>
    <p>Bridging artists and events with rhythm, trust, and seamless flow.

</p>
  </div>
  <div class="process-cards">
    <!-- Card 1 -->
    <div class="card">
      <div class="icon-container" style="background-color: #F7BC5E;">
        <img src="assets/artisticon.png" alt="Artist Icon" />
      </div>
      <h3>For Artists</h3>
      <p>Create your profile, showcase your talents, and get hired for amazing gigs.</p>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <div class="icon-container" style="background-color: #E8678F;">
        <img src="assets/hirericon.png" alt="Hirer Icon" />
      </div>
      <h3>For Hirers</h3>
      <p>Browse talented musicians, check their availability, and book them for your events.</p>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <div class="icon-container" style="background-color: #FF7B4C;">
        <img src="assets/processicon.png" alt="Process Icon" />
      </div>
      <h3>Seamless Process</h3>
      <p>Real-time notifications, easy booking management, and secure payments.</p>
    </div>
  </div>
</section>


<!-- Footer Section -->
<footer class="footer">
  <div class="footer-content">
    <!-- Column 1: StudioSync Info -->
    <div class="footer-col">
      <h4>StudioSync</h4>
      <p>"Empowering musicians to rise, connect, and shine. We’re the rhythm between talent and opportunity,
a place where artists rise and dreams take center stage.
Because every great performance begins with the right connection." 

</p>
    </div>

    <!-- Column 2: Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Hire Artist</a></li>
        <li><a href="#">Get Hired</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>

    <!-- Column 3: Contact -->
    <div class="footer-col">
      <h4>Contact</h4>
      <p>Email: <a href="saif.ahmed03@northsouth.edu">saif.ahmed03@northsouth.edu</a></p>
      <p> <a href="tamim.aungon@northsouth.edu">tamim.aungon@northsouth.edu</a></p>
      <p> <a href="nabila.afzal@northsouth.edu">nabila.afzal@northsouth.edu</a></p>

      <p>Phone: <a href="tel:01312704596">01312704596</a></p>
    </div>
  </div>

  <hr class="footer-separator" />

  <div class="footer-bottom">
    <p>© 2025 StudioSync. All rights reserved.</p>
  </div>
</footer>


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

    .signin-btn:hover,
    .signup-btn:hover {
      background: white;
      color: #0f0f0f;
      transform: scale(1.05);
      box-shadow: 0 0 10px #fff;
    }

    .hero {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('assets/concert_bg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      filter: grayscale(30%) brightness(60%) blur(0.5px);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      text-align: center;
      padding: 0 2rem;
    }

    .hero-content h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: 1.2rem;
      max-width: 800px;
      margin-bottom: 2rem;
    }

    .hero-buttons {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    .hero-buttons button {
      background-color: #2e2e2e;
      border: none;
      padding: 0.8rem 1.8rem;
      border-radius: 30px;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .hero-buttons button:hover {
      background-color: #ffffff;
      color: #0f0f0f;
      transform: scale(1.05);
      box-shadow: 0 0 10px #fff;
    }
    .hero-button-link {
  text-decoration: none;
  display: inline-block;
}

.hero-button-link button {
  cursor: pointer;
}



.how-it-works {
  background-color: #000;
  padding: 100px 20px;
  color: white;
  text-align: center;
}

.how-header h2 {
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 15px;
}

.how-header p {
  font-size: 1.1rem;
  color: #ccc;
  margin-bottom: 60px;
}

.process-cards {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.card {
  background-color:rgb(145, 123, 123);
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
  padding: 40px 30px;
  width: 320px;
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.icon-container {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto 25px;
}

.icon-container img {
  max-width: 50px;
  max-height: 50px;
  object-fit: contain;
}

.card h3 {
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 15px;
  color: black;
}

.card p {
  font-size: 1rem;
  color: #bbb;
  line-height: 1.5;
}


    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 1rem;
      }

      .navbar ul {
        flex-direction: column;
        gap: 1rem;
      }

      .auth-buttons {
        flex-direction: column;
        gap: 0.5rem;
      }

      .hero-content h1 {
        font-size: 2.2rem;
      }

      .hero-buttons {
        flex-direction: column;
        gap: 1rem;
      }

      .process-cards {
        flex-direction: column;
        align-items: center;
      }
    }




    .footer {
  background-color: #000;
  color: #ccc;
  padding: 80px 60px 30px;
  font-family: 'Inter', sans-serif;
}

.footer-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 60px;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-col {
  flex: 1;
  min-width: 250px;
}

.footer-col h4 {
  color: white;
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.footer-col p,
.footer-col a {
  font-size: 1rem;
  color: #aaa;
  text-decoration: none;
  line-height: 1.6;
  display: block;
  margin-bottom: 10px;
  transition: color 0.3s;
}

.footer-col a:hover {
  color: #fff;
  text-decoration: underline;
}

.footer-separator {
  border: none;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
  margin: 40px 0 30px;
}

.footer-bottom {
  text-align: center;
  font-size: 0.9rem;
  color: #999;
}

  </style>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
</body>
</html>
