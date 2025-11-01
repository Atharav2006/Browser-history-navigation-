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
  <title>Heritage - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/old_heritage.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Old Heritage of Gujarat</h1>
      <p>Discover timeless monuments and cultural treasures</p>
    </div>
  </section>

  <!-- Heritage Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Famous Heritage Sites</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/somnath.jpg" alt="Somnath Temple">
          <h3>Somnath Temple</h3>
          <p>One of the 12 Jyotirlingas, this temple stands as a symbol of resilience and faith.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/rani_ki_vav.jpg" alt="Rani Ki Vav">
          <h3>Rani Ki Vav</h3>
          <p>A UNESCO World Heritage site, this stepwell is a masterpiece of ancient architecture.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/sun_temple.jpg" alt="Modhera Sun Temple">
          <h3>Modhera Sun Temple</h3>
          <p>Dedicated to the Sun God, this temple is famous for its intricate carvings and beauty.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/champaner.jpg" alt="Champaner-Pavagadh">
          <h3>Champaner-Pavagadh</h3>
          <p>A UNESCO World Heritage Site blending Hindu and Islamic architectural brilliance.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/ahmedabad.jpg" alt="Ahmedabad">
          <h3>Ahmedabad</h3>
          <p>The first UNESCO World Heritage City of India, known for its old pols and monuments.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/jama_masjid.jpg" alt="Jama Masjid Ahmedabad">
          <h3>Jama Masjid</h3>
          <p>A stunning mosque built in 1424, representing Indo-Islamic architectural excellence.</p>
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

