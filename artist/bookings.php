<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>StudioSync | Booking Requests</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
<nav class="navbar">
  <div class="navbar-left">
    <div class="logo">
      <a href="index.php" class="logo-link">StudioSync</a>
    </div>
  </div>

  <div class="navbar-center">
    <ul class="nav-menu">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../loginashirer.php">Hire Artist</a></li>
      <li><a href="../loginasartist.php">Get Hired</a></li>
      <li><a href="../about.php">About Us</a></li>
    </ul>
  </div>
  
  <div class="navbar-right">
    <button class="logout-btn" onclick="window.location.href='../index.php'">Logout</button>
 </div>
</nav>


 <!-- Booking Requests Section -->
<main class="booking-section">
  <h1>Your Booking Requests</h1>

  <div class="booking-table-container">
    <table class="booking-table">
      <thead>
        <tr>
          <th>Hirer Name</th>
          <th>Event</th>
          <th>Date & Time</th>
          <th>Location</th>
          <th>Budget</th>
          <th>Notes</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Sample static row -->
        <tr>
          <td>Lets Vibe</td>
          <td>Acoustic Aura</td>
          <td>July 20, 2025 @ 6:00 PM</td>
          <td>Dhaka</td>
          <td>$400</td>
          <td>Need acoustic setup only</td>
          <td><span class="status pending">Pending</span></td>
          <td>
            <button class="btn accept">Accept</button>
            <button class="btn decline">Decline</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>



  <!-- Styles -->
  <style>
    body {
      background-color: #0f0f0f;
      color: white;
      font-family: 'Inter', sans-serif;
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

.navbar-left,
.navbar-center,
.navbar-right {
  flex: 1;
  display: flex;
  align-items: center;
}

.navbar-center {
  justify-content: center;
}

.navbar-left {
  justify-content: flex-start;
}

.navbar-right {
  justify-content: flex-end;
  gap: 1rem; /* Space between sign in/up buttons */
}

.nav-menu {
  list-style: none;
  display: flex;
  gap: 2.5rem;
  padding: 0;
  margin: 0;
}

.nav-menu li a {
  color: white;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s;
}

.nav-menu li a:hover {
  color: #ccc;
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


 .booking-section {
  padding: 6rem 2rem 10rem;
  max-width: 1200px;
  margin: auto;
}

.booking-section h1 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 2rem;
}

.booking-table-container {
  overflow-x: auto;
  background-color: #1a1a1a;
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
}

.booking-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 1.5rem;
}

.booking-table th,
.booking-table td {
  padding: 1rem 1.5rem;
  text-align: left;
  color:rgb(243, 128, 4);
}

.booking-table thead th {
  color: #aaa;
  font-size: 1rem;
  border-bottom: 2px solid #444;
}

.booking-table tbody td {
  background-color:rgb(74, 53, 53);
  border-radius: 10px;
}

    .status {
      padding: 0.4rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
    }

.status.pending {
  color: orange;
  font-weight: bold;
}

.btn {
  padding: 0.6rem 1.2rem;
  font-weight: bold;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius: 8px;
  font-size: 0.9rem;
}


.btn.accept {
  background: linear-gradient(135deg,rgb(31, 225, 121),rgb(223, 226, 52));
  color: black;
  margin-right: 0.5rem;
   margin-bottom: 1rem;
  box-shadow: 0 0 8px rgba(3, 188, 245, 0.5);
}

.btn.accept:hover {
  transform: scale(1.05);
  box-shadow: 0 0 12px rgba(76, 175, 80, 0.8);
}


.btn.decline {
  background: linear-gradient(135deg,rgb(28, 179, 225),rgb(223, 27, 59));
  color: black;
  box-shadow: 0 0 8px rgba(244, 67, 54, 0.4);
}

.btn.decline:hover {
  transform: scale(1.05);
  box-shadow: 0 0 12px rgba(244, 67, 54, 0.8);
}



    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
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

      .booking-table th,
      .booking-table td {
        font-size: 0.9rem;
      }
    }
  </style>
</body>
</html>
