<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <title>StudioSync | Artist Dashboard</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

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
      min-height: 100vh;
    }

nav.navbar {
  background: transparent;                    // Makes the navbar see-through
  display: flex;                              // Uses Flexbox layout
  justify-content: flex-start;                // Pushes logo to left, menu to right
  align-items: center;                        // Vertically centers logo & menu
  padding: 1.5rem 3rem;                       // Top/bottom: 1.5rem, left/right: 3rem
  position: fixed;                            // Sticks navbar to top of page
  top: 0;                                     // Places it at the very top
  width: 100%;                                // Full width of the page
  z-index: 10;                                // Keeps it on top of other elements
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

    .nav-center {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}


    .navbar ul {
      list-style: none;
      display: flex;
      gap: 5rem;
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

    .dashboard-container {
      max-width: 900px;
      margin: 120px auto 40px auto;
      padding: 1rem 2rem;
      background-color: #1a1a1a;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
    }

    .profile-header {
      text-align: center;
    }

.profile-pic {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background-size: cover;
  background-position: center;
  border: 3px solid white;
  margin: 0 auto 1rem;
}


    .profile-info h1 {
      font-size: 2rem;
      margin-bottom: 0.3rem;
    }

    .profile-info h2 {
      font-size: 1.4rem;
      color: #bbb;
    }

    .tag {
      display: inline-block;
      background-color: #4a90e2;
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      margin: 0.2rem;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .profile-details {
      margin-top: 1.5rem;
    }

    .profile-details table {
      width: 100%;
      border-collapse: collapse;
    }

    .profile-details th,
    .profile-details td {
      padding: 0.8rem 1rem;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .profile-details th {
      width: 180px;
      color: #aaa;
    }

    .social-card {
      margin-top: 2rem;
      padding: 1rem;
      background-color: #2a2a2a;
      border-radius: 10px;
      text-align: center;
    }

    .social-link {
      display: inline-block;
      margin: 0.4rem;
      padding: 0.6rem 1rem;
      border-radius: 20px;
      color: white;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s;
    }

    .social-link i {
      margin-right: 8px;
    }

    .social-facebook:hover { background: #3b5998; }
    .social-instagram:hover { background: #e4405f; }
    .social-youtube:hover { background: #ff0000; }
    .social-spotify:hover { background: #1db954; }
    .social-soundcloud:hover { background: #ff7700; }

    .edit-profile-btn {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 0.7rem 1.5rem;
      border: none;
      background-color:rgb(190, 99, 46);
      color: #0f0f0f;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .edit-profile-btn:hover {
      background-color: #ccc;
    }


        .bookings-btn {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 0.7rem 1.5rem;
      border: none;
      background-color:rgb(190, 46, 68);
      color: #0f0f0f;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

     .bookings-btn:hover {
      background-color: #ccc;
    }


    .logout-btn {
      position: fixed;
      top: 1.5rem;
      right: 3rem;
      background-color: transparent;
      border: 2px solid white;
      border-radius: 25px;
      color: white;
      padding: 0.5rem 1rem;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: white;
      color: #0f0f0f;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="logo">
    <a href="../index.php" class="logo-link">StudioSync</a>
  </div>
  <div class="nav-center">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../loginashirer.php">Hire Artist</a></li>
      <li><a href="../loginasartist.php">Get Hired</a></li>
      <li><a href="../about.php">About Us</a></li>
    </ul>
  </div>
<button class="logout-btn" onclick="window.location.href='../index.php'">Logout</button>
</nav>


  <main class="dashboard-container">
    <div class="profile-header">
<div class="profile-pic" style="background-image: url('../assets/saif.jpg');"></div>
      <div class="profile-info">
        <h1>Saif Ahmed</h1>
        <h2>Stage Name: Saif Ahmed </h2>
      </div>
    </div>

    <section class="profile-details">
      <table>
        <tr><th>Bio</th><td>Passionate about the bridging of poetry and literature with music, and presenting the art-form on stage.</td></tr>
        <tr><th>Location</th><td>Dhaka, BD</td></tr>
        <tr><th>Genres</th>
          <td>
            <span class="tag">Rock</span>
            <span class="tag">Pop</span>
          </td>
        </tr>
        <tr><th>Rates</th><td>$100 - $500</td></tr>
        <tr><th>Booking Terms</th><td>Flexible with advance notice</td></tr>
        <tr><th>Requirements</th><td>PA system and sound engineer provided</td></tr>
        <tr><th>Experience</th><td>5 years performing live</td></tr>
        <tr><th>Contact</th><td>saif.music@gmail.com |01312704596</td></tr>
      </table>


    <div class="social-card">
      <a href="https://www.facebook.com/saifahmedarfi" class="social-link social-facebook"><i class="fab fa-facebook"></i>Facebook</a>
      <a href="https://www.instagram.com/saifarfii/
" class="social-link social-instagram"><i class="fab fa-instagram"></i>Instagram</a>
      <a href="https://www.youtube.com/@saifahmedarfi
" class="social-link social-youtube"><i class="fab fa-youtube"></i>YouTube</a>
      <a href="https://open.spotify.com/artist/2s6wOTRvmZH4UGYNBpdIHy?si=evAKiDuvTAie8uB9ixLvvA
" class="social-link social-spotify"><i class="fab fa-spotify"></i>Spotify</a>
      <a href="https://soundcloud.com/saif-ahmed-arfi
" class="social-link social-soundcloud"><i class="fab fa-soundcloud"></i>SoundCloud</a>
    </div>


          <a href="bookings.php" class="bookings-btn">Check Booking Requests</a>

      <a href="edit_profile.php" class="edit-profile-btn">Edit Profile</a>
    </section>
  </main>

  
</body>
</html>
