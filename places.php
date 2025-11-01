<?php
include "db.php";

// get the current page name dynamically
$page_name = basename($_SERVER['PHP_SELF']);

// insert into history table
$stmt = $conn->prepare("INSERT INTO history (page_name) VALUES (?)");
$stmt->bind_param("s", $page_name);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Places to Visit - Gujarat Tourism</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<div class="nav-buttons" style="text-align:center; margin:20px;">
  <button id="backBtn" class="nav-btn">← Back</button>
<button id="forwardBtn" class="nav-btn">Forward →</button>
</div>

<script src="../assets/js/navigation.js"></script>
<body>

  <!-- Header -->
   <header>
    <nav class="navbar">
      <div class="logo">Gujarat Tourism</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="places.php">Places</a></li>
        <li><a href="heritage.php">Heritage</a></li>
        <li><a href="foods.php">Foods</a></li>
        <li><a href="art.php">Art</a></li>
        <li><a href="festivals.php">Festivals</a></li>
        <li><a href="industry.php">Industries</a></li>
        <li><a href="peoples.php">People</a></li>
        <li><a href="statistics.php">Statistics</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="history.php">History</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Banner -->
  <section class="hero-banner" style="background-image: url('../assets/images/gujarat.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Places to Visit</h1>
      <p>Discover the beauty and diversity of Gujarat</p>
    </div>
  </section>

  <!-- Places Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Top Tourist Destinations</h2>
      <div class="places-grid">
        
        <div class="place-card">
          <img src="../assets/images/gir_park.jpg" alt="Gir National Park">
          <h3>Gir National Park</h3>
          <p>Home of the Asiatic Lions, a must-visit wildlife destination.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/rann.jpg" alt="Rann of Kutch">
          <h3>Rann of Kutch</h3>
          <p>Famous for the white salt desert and the colorful Rann Utsav.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/somnath.jpg" alt="Somnath Temple">
          <h3>Somnath Temple</h3>
          <p>A sacred Jyotirlinga temple on the shores of the Arabian Sea.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/dwarka.jpg" alt="Dwarka Temple">
          <h3>Dwarka</h3>
          <p>An ancient city and one of the Char Dham pilgrimage sites.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/statue_of_unity.jpg" alt="Statue of Unity">
          <h3>Statue of Unity</h3>
          <p>The world’s tallest statue, a tribute to Sardar Vallabhbhai Patel.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/saputara.jpg" alt="Saputara Hills">
          <h3>Saputara Hills</h3>
          <p>A scenic hill station perfect for nature lovers and trekkers.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Gujarat Tourism | Designed for Educational Purpose</p>
  </footer>

</body>
</html>

