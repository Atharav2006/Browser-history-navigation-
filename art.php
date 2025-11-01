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
  <title>Famous Art - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/art.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Famous Art of Gujarat</h1>
      <p>Discover the cultural colors and craftsmanship</p>
    </div>
  </section>

  <!-- Art Section -->
  <section class="content-section">
    <div class="container">
      <h2>Traditional Art & Handicrafts</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/patola.jpg" alt="Patola Saree">
          <h3>Patola of Patan</h3>
          <p>World-renowned double ikat silk sarees, handwoven with precision and elegance.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/kutch_embroidery.jpg" alt="Kutch Embroidery">
          <h3>Kutch Embroidery</h3>
          <p>Intricate hand embroidery using mirrors, beads, and vibrant threads.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/bandhni.jpg" alt="Bandhani Tie-Dye">
          <h3>Bandhani</h3>
          <p>Traditional tie-dye textile art from Jamnagar and Rajkot, known for colorful patterns.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/teracotta.jpg" alt="Terracotta Art">
          <h3>Terracotta Art</h3>
          <p>Clay artifacts, pots, and sculptures showcasing Gujarat’s rural artistry.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/wood_carving.jpg" alt="Wood Carving">
          <h3>Wood Carving</h3>
          <p>Exquisite carved wooden doors and furniture, especially in old Ahmedabad homes.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/pithora.jpg" alt="Pithora Painting">
          <h3>Pithora Painting</h3>
          <p>Tribal wall paintings by Rathwa and Bhilala communities, depicting deities and rituals.</p>
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

