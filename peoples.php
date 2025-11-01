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
  <title>Great People - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/people.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Great People of Gujarat</h1>
      <p>Icons who shaped India and inspired the world</p>
    </div>
  </section>

  <!-- Great People Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Legends from Gujarat</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/mahatma_gandhi.jpg" alt="Mahatma Gandhi">
          <h3>Mahatma Gandhi</h3>
          <p>The Father of the Nation, pioneer of non-violent struggle and freedom movement leader.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/sardar_vallabhbhai.jpg" alt="Sardar Vallabhbhai Patel">
          <h3>Sardar Vallabhbhai Patel</h3>
          <p>The Iron Man of India, played a crucial role in uniting independent India.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/vikram_sarabhai.jpg" alt="Vikram Sarabhai">
          <h3>Dr. Vikram Sarabhai</h3>
          <p>Father of the Indian Space Program, visionary scientist and founder of ISRO.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/morarji_desai.jpg" alt="Morarji Desai">
          <h3>Morarji Desai</h3>
          <p>The only Gujarati to become Prime Minister of India, known for his honesty and simplicity.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/ambani.jpg" alt="Dhirubhai Ambani">
          <h3>Dhirubhai Ambani</h3>
          <p>Founder of Reliance Industries, one of India’s biggest business empires.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/modi.jpg" alt="Narendra Modi">
          <h3>Narendra Modi</h3>
          <p>Former Chief Minister of Gujarat, current Prime Minister of India.</p>
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

