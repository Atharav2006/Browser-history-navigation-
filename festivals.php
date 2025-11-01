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
  <title>Festivals - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/festival.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Festivals of Gujarat</h1>
      <p>Celebrate the spirit and traditions of Gujarat</p>
    </div>
  </section>

  <!-- Festivals Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Major Festivals</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/navratri.jpg" alt="Navratri">
          <h3>Navratri</h3>
          <p>The world’s longest dance festival, celebrated with Garba and Dandiya for 9 nights.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/uttrayan.jpg" alt="Uttarayan">
          <h3>Uttarayan (Makar Sankranti)</h3>
          <p>The International Kite Festival, with skies filled with colorful kites in January.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/rann_utsav.jpg" alt="Rann Utsav">
          <h3>Rann Utsav</h3>
          <p>A cultural festival in the White Desert of Kutch, showcasing art, music, and dance.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/janmashtmi.jpg" alt="Janmashtami">
          <h3>Janmashtami</h3>
          <p>Celebration of Lord Krishna’s birth, especially grand in Dwarka and Dakor.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/tarnetar.jpg" alt="Tarnetar Fair">
          <h3>Tarnetar Fair</h3>
          <p>A colorful tribal fair with folk music, dance, and matchmaking traditions.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/dance_festival.jpg" alt="Modhera Dance Festival">
          <h3>Modhera Dance Festival</h3>
          <p>Classical dance performances held at the Sun Temple, Modhera every January.</p>
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

