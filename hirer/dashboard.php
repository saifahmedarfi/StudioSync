<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>StudioSync | Hirer Dashboard</title>

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
      background: transparent;
      display: flex;
      justify-content: flex-start;
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

    main.dashboard-container {
      max-width: 900px;
      margin: 120px auto 40px auto;
      padding: 1rem 2rem;
      background-color: #1a1a1a;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
    }

    h2 {
      margin-bottom: 1rem;
      font-weight: 600;
      font-size: 2rem;
      color: white;
    }

    .search-bar {
      margin-bottom: 25px;
    }

    .search-bar input {
      width: 100%;
      max-width: 400px;
      padding: 10px 15px;
      border-radius: 8px;
      border: none;
      font-size: 1rem;
      background-color: #2e2e2e;
      color: white;
    }

    .artist-list {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .artist-card {
      padding: 20px;
      background-color: #2a2a2a;
      border-radius: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .artist-info {
      flex: 1;
      min-width: 250px;
    }

    .artist-actions {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .artist-actions button {
      padding: 8px 14px;
      border: none;
      border-radius: 25px;
      background-color: rgb(190, 99, 46);
      color: #0f0f0f;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .artist-actions button:hover {
      background-color: #ccc;
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
      <li><a href="#">Hire Artist</a></li>
      <li><a href="#">Get Hired</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
  <button class="logout-btn" onclick="window.location.href='../logout.php'">Logout</button>
</nav>

<main class="dashboard-container">
  <h2>Search and Book Artists</h2>

  <div class="search-bar">
    <input
      type="text"
      id="searchInput"
      placeholder="Search by name, genre, or location..."
      onkeyup="filterArtists()"
    />
  </div>

  <div class="artist-list" id="artistList">

    <div class="artist-card">
      <div class="artist-info">
        <strong>Name:</strong> Ray Vibes<br />
        <strong>Genre:</strong> Hip Hop<br />
        <strong>Location:</strong> Dhaka
      </div>
      <div class="artist-actions">
        <button onclick="window.location.href='artist_view.php?id=1'">View Profile</button>
        <button onclick="window.location.href='booking_form.php?artist_id=1'">Book</button>
      </div>
    </div>

    <div class="artist-card">
      <div class="artist-info">
        <strong>Name:</strong> Luma Flow<br />
        <strong>Genre:</strong> EDM<br />
        <strong>Location:</strong> Chittagong
      </div>
      <div class="artist-actions">
        <button onclick="window.location.href='artist_view.php?id=2'">View Profile</button>
        <button onclick="window.location.href='booking_form.php?artist_id=2'">Book</button>
      </div>
    </div>

    <div class="artist-card">
      <div class="artist-info">
        <strong>Name:</strong> Saif Ahmed <br />
        <strong>Genre:</strong> Pop-Rock<br />
        <strong>Location:</strong> Bangladesh
      </div>
      <div class="artist-actions">
<button onclick="window.location.href='../artist/dashboard.php'">View Profile</button>
<button onclick="window.location.href='booking_form.php'">Book</button>
      </div>
    </div>

  </div>
</main>

<script>
  function filterArtists() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const artists = document.getElementById('artistList').getElementsByClassName('artist-card');

    Array.from(artists).forEach(card => {
      const text = card.innerText.toLowerCase();
      card.style.display = text.includes(input) ? 'flex' : 'none';
    });
  }
</script>

</body>
</html>
