

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
  transform: scale(1.2);
  transform-origin: left center;
}

.logo-link {
  text-decoration: none;
  color: white;
  font-family: 'Wallpoet', cursive;
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


.container {
  padding: 140px 2rem 4rem;
  max-width: 100%;
}

    .table th {
      background-color: #1f1f1f;
      color: white;
    }
    td[contenteditable="true"] {
      background-color: #fff6e0;
      color: #000;
    }
.action-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
}
.action-icons i {
  font-size: 1.25rem;
  padding: 6px;
  border-radius: 4px;
  transition: all 0.2s ease-in-out;
}
.action-icons i:hover {
  transform: scale(1.15);
  background-color: #1c1c1c;
}

.action-icons button {
  margin: 0 3px;
  transition: all 0.2s ease-in-out;
}
.action-icons button:hover {
  transform: scale(1.1);
}

 .action-icons img {
    cursor: pointer;
    transition: transform 0.2s ease;
  }
  .action-icons img:hover {
    transform: scale(1.15);
  }

.add-btn {
  margin: 15px 0;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.add-btn:hover {
  transform: scale(1.05);
}


.container {
  padding: 140px 2rem 4rem;
  width: 100%;
  overflow-x: auto;
}

.table-responsive {
  width: 100%;
  overflow-x: auto;
}

.table {
  width: 100%;
  table-layout: auto;
  word-wrap: break-word;
  white-space: normal;
}

td, th {
  min-width: 150px;
  vertical-align: middle;
  text-align: center;
  padding: 12px 10px;
  word-break: break-word;
}

    .fa {
      margin-right: 5px;
    }
  </style>
</head>
<body>

<nav class="navbar">
<div class="logo">
  <a href = "../index.php"class="logo-link">StudioSync</a>
</div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Hire Artist</a></li>
    <li><a href="#">Get Hired</a></li>
    <li><a href="#">About Us</a></li>
  </ul>
</nav>

<div class="container">
  <h3>Manage Artists</h3>
  <button class="btn btn-success add-btn" onclick="addRow('artistTable')">➕ Add Artist</button>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="artistTable">
<thead>
  <tr>
    <th>Profile Picture</th>
    <th>Username</th>
    <th>Stage Name</th>
    <th>Bio</th>
    <th>Location</th>
    <th>Genres</th>
    <th>Rates</th>
    <th>Booking Terms</th>
    <th>Requirements</th>
    <th>Experience</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="5" class="text-center">Social Media</th>
    <th>Booking Requests</th>
    <th>Actions</th>
  </tr>
  <tr>
    <!-- Empty headers to align with first row -->
    <th colspan="12"></th>
    <th><i class="fab fa-facebook"></i></th>
    <th><i class="fab fa-instagram"></i></th>
    <th><i class="fab fa-youtube"></i></th>
    <th><i class="fab fa-spotify"></i></th>
    <th><i class="fab fa-soundcloud"></i></th>
    <th></th> <!-- Booking Requests -->
    <th></th> <!-- Actions -->
  </tr>
</thead>
<tbody>
  <tr>
    <td contenteditable="true">artist.jpg</td>
    <td contenteditable="true">arif123</td>
    <td contenteditable="true">Arif Khan</td>
    <td contenteditable="true">A passionate sitarist</td>
    <td contenteditable="true">Dhaka</td>
    <td contenteditable="true">Classical, Folk</td>
    <td contenteditable="true">5000 BDT</td>
    <td contenteditable="true">Advance 50%</td>
    <td contenteditable="true">Sound system</td>
    <td contenteditable="true">10+ years</td>
    <td contenteditable="true">arif@example.com</td>
    <td contenteditable="true">01700111222</td>
    <td contenteditable="true">fb.com/arif</td>
    <td contenteditable="true">@arif_insta</td>
    <td contenteditable="true">youtube.com/arif</td>
    <td contenteditable="true">spotify.com/arif</td>
    <td contenteditable="true">soundcloud.com/arif</td>
    <td>
<!-- Booking Request Check Button -->
<button class="btn btn-warning btn-sm">
  <img src="../assets/check.png" alt="Check" style="height: 35px;"> Check
</button>    </td>
<td class="action-icons">
  <button class="btn btn-sm btn-outline-primary" onclick="saveRow(this)" title="Save">
    <img src="../assets/save.png" alt="Save" style="height: 35px; padding: 2px;">
  </button>
  <button class="btn btn-sm btn-outline-danger" onclick="deleteRow(this)" title="Delete">
    <img src="../assets/delete.png" alt="Delete" style="height: 35px; padding: 2px;">
  </button>
  <button class="btn btn-sm btn-outline-info" onclick="viewRow(this)" title="View">
    <img src="../assets/view.png" alt="View" style="height: 35px; padding: 2px;">
  </button>
</td>

  </tr>
</tbody>

    </table>
  </div>

  <h3>Manage Hirers</h3>
  <button class="btn btn-success add-btn" onclick="addRow('hirerTable')">➕ Add Hirer</button>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="hirerTable">
 <thead>
  <tr>
    <th>Company Logo</th>
    <th>Company Name</th>
    <th>About</th>
    <th>Location</th>
    <th>Company Type</th>
    <th>Hiring Terms</th>
    <th>Services Offered</th>
    <th>Press/Media</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="5" class="text-center">Social Media</th>
    <th>Actions</th>
  </tr>
  <tr>
    <!-- Empty headers to align the top row -->
    <th colspan="10"></th>
    <th><i class="fab fa-facebook"></i></th>
    <th><i class="fab fa-instagram"></i></th>
    <th><i class="fab fa-youtube"></i></th>
    <th><i class="fab fa-spotify"></i></th>
    <th><i class="fab fa-soundcloud"></i></th>
    <th></th> <!-- Actions -->
  </tr>
</thead>

 <tbody>
  <tr>
    <td contenteditable="true">logo.png</td>
    <td contenteditable="true">EventPro</td>
    <td contenteditable="true">Top event planner</td>
    <td contenteditable="true">Chittagong</td>
    <td contenteditable="true">Corporate</td>
    <td contenteditable="true">Full payment on booking</td>
    <td contenteditable="true">Stage, Sound</td>
    <td contenteditable="true">eventpro.com/press</td>
    <td contenteditable="true">info@eventpro.com</td>
    <td contenteditable="true">01888888888</td>
    <td contenteditable="true">fb.com/eventpro</td>
    <td contenteditable="true">@eventpro_insta</td>
    <td contenteditable="true">youtube.com/eventpro</td>
    <td contenteditable="true">spotify.com/eventpro</td>
    <td contenteditable="true">soundcloud.com/eventpro</td>
<td class="action-icons">
  <button class="btn btn-sm btn-outline-primary" onclick="saveRow(this)" title="Save">
    <img src="../assets/save.png" alt="Save" style="height: 35px; padding: 2px;">
  </button>
  <button class="btn btn-sm btn-outline-danger" onclick="deleteRow(this)" title="Delete">
    <img src="../assets/delete.png" alt="Delete" style="height: 35px; padding: 2px;">
  </button>
  <button class="btn btn-sm btn-outline-info" onclick="viewRow(this)" title="View">
    <img src="../assets/view.png" alt="View" style="height: 35px; padding: 2px;">
  </button>
</td>

  </tr>
</tbody>

    </table>
  </div>
</div>

<script>
function saveRow(icon) {
  const row = icon.closest('tr');
  const cells = Array.from(row.querySelectorAll('td[contenteditable="true"]'))
                     .map(cell => cell.textContent.trim());
  console.log("Saved row:", cells); // Replace with AJAX save logic later
}

function deleteRow(icon) {
  icon.closest('tr').remove();
}

function addRow(tableId) {
  const table = document.getElementById(tableId).querySelector("tbody");
  const columnCount = table.closest("table").rows[0].cells.length;
  const newRow = document.createElement("tr");

  for (let i = 0; i < columnCount - 1; i++) {
    newRow.innerHTML += `<td contenteditable="true">New</td>`;
  }

  // For artist "Booking Requests" column or empty cell
  if (tableId === 'artistTable') {
    newRow.innerHTML += `<td><button class="btn btn-warning btn-sm">Check</button></td>`;
  }

  newRow.innerHTML += `<td class="action-icons">
    <i onclick="saveRow(this)" class="fas fa-save text-success"></i>
    <i onclick="deleteRow(this)" class="fas fa-trash-alt text-danger"></i>
  </td>`;

  table.appendChild(newRow);
}
</script>
</body>
</html>
