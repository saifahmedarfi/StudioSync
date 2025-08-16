<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <title>Edit Profile | StudioSync</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

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
      background: transparent;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 3rem;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 10;
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

    main.edit-profile-container {
      max-width: 900px;
      margin: 120px auto 40px auto;
      padding: 2rem 2rem;
      background-color: #1a1a1a;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
    }

    h2 {
      margin-bottom: 1.5rem;
      font-weight: 600;
      font-size: 1.8rem;
      text-align: center;
    }

    form.edit-profile-form {
      display: flex;
      flex-direction: column;
      gap: 1.3rem;
    }

    label {
      font-weight: 600;
      margin-bottom: 0.3rem;
      display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 0.8rem 1rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-family: 'Inter', sans-serif;
      background-color: #333;
      color: white;
      resize: vertical;
    }

    textarea {
      min-height: 100px;
    }

    .social-links-group {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .social-links-group input {
      flex: 1;
      min-width: 120px;
    }

    .form-actions {
      margin-top: 1.5rem;
      display: flex;
      justify-content: center;
      gap: 1.5rem;
    }

    button {
      padding: 0.8rem 2rem;
      border: none;
      border-radius: 25px;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button.save-btn {
      background-color: white;
      color: #0f0f0f;
    }

    button.save-btn:hover {
      background-color: #ccc;
    }

    button.cancel-btn {
      background-color: transparent;
      border: 2px solid white;
      color: white;
    }

    button.cancel-btn:hover {
      background-color: white;
      color: #0f0f0f;
    }

    /* Responsive */
    @media (max-width: 600px) {
      main.edit-profile-container {
        margin: 140px 1rem 40px 1rem;
        padding: 1rem;
      }

      .social-links-group {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <a href="../index.php" class="logo-link">StudioSync</a>
    </div>
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../loginashirer.php">Hire Artist</a></li>
      <li><a href="../loginasartist.php">Get Hired</a></li>
      <li><a href="../about.php">About Us</a></li>
    </ul>
  </nav>

  <main class="edit-profile-container">
    <h2>Edit Your Profile</h2>

    <form class="edit-profile-form" action="#" method="post" enctype="multipart/form-data" onsubmit="alert('Form submitted - no backend to process data.'); return false;">
      <label for="real_name">Name</label>
      <input type="text" id="real_name" name="real_name" value="Saif Ahmed" required />
  
    
    <label for="stage_name">Stage Name</label>
      <input type="text" id="stage_name" name="stage_name" value="Saif Ahmed" required />

      <label for="city">City</label>
      <input type="text" id="city" name="city" value="New York" required />

      <label for="genres">Genres</label>
      <input type="text" id="genres" name="genres" value="Rock, Pop" required />

      <label for="skills">Skills</label>
      <input type="text" id="skills" name="skills" value="Guitar, Vocals" required />

      <label for="rates">Rates</label>
      <input type="text" id="rates" name="rates" value="$100 - $500" />

      <label for="booking_terms">Booking Terms</label>
      <textarea id="booking_terms" name="booking_terms">Flexible with advance notice</textarea>

      <label for="requirements">Requirements</label>
      <textarea id="requirements" name="requirements">PA system and sound engineer provided</textarea>

      <label for="experience">Experience</label>
      <input type="text" id="experience" name="experience" value="5 years performing live" />

      <label for="bio">Bio</label>
      <textarea id="bio" name="bio">Passionate musician with a love for live performances and connecting with audiences worldwide.</textarea>

      <label for="contact">Contact</label>
      <input type="text" id="contact" name="contact" value="saif.music@gmail.com | 01312704596" required />

      <label for="profile_pic">Profile Picture</label>
      <input type="file" id="profile_pic" name="profile_pic" accept="image/*" />

      <label for="facebook">Facebook</label>
      <input type="text" id="facebook" name="facebook" value="https://www.facebook.com/saifahmedarfi" />

      <label for="instagram">Instagram</label>
      <input type="text" id="instagram" name="instagram" value="https://www.instagram.com/saifarfii/" />

      <label for="youtube">YouTube</label>
      <input type="text" id="youtube" name="youtube" value="https://www.youtube.com/@saifahmedarfi" />

            <label for="spotify">Spotify</label>
      <input type="text" id="spotify" name="spotify" value="https://open.spotify.com/artist/2s6wOTRvmZH4UGYNBpdIHy?si=evAKiDuvTAie8uB9ixLvvA" />

            <label for="soundcloud">SoundCloud</label>
      <input type="text" id="soundcloud" name="soundcloud" value="https://soundcloud.com/saif-ahmed-arfi" />


      <div class="form-actions">
        <button type="submit" class="save-btn">Save Changes</button>
        <button type="button" class="cancel-btn" onclick="window.location.href='dashboard.php'">Cancel</button>
      </div>
    </form>
  </main>

</body>
</html>
