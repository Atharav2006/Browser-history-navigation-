
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
  <title>Historical Sites - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/history.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Historical Sites of Gujarat</h1>
      <p>Timeless monuments and architectural marvels</p>
    </div>
  </section>

  <!-- Historical Sites Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Famous Historical Landmarks</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/somnath.jpeg" alt="Somnath Temple">
          <h3>Somnath Temple</h3>
          <p>One of the 12 Jyotirlingas of Lord Shiva, rebuilt several times over centuries.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/dwarka.jpg" alt="Dwarka Temple">
          <h3>Dwarkadhish Temple</h3>
          <p>The legendary city of Lord Krishna, with a temple over 2000 years old.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/champaner.jpg" alt="Champaner Pavagadh">
          <h3>Champaner-Pavagadh</h3>
          <p>A UNESCO World Heritage Site with forts, temples, and mosques from medieval Gujarat.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/sidi_jali.jpg" alt="Sidi Saiyyed Mosque">
          <h3>Sidi Saiyyed Mosque</h3>
          <p>Known for its iconic stone latticework 'Tree of Life' in Ahmedabad.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/rani_ki_vav.jpg" alt="Rani Ki Vav">
          <h3>Rani Ki Vav, Patan</h3>
          <p>A stepwell masterpiece built in the 11th century, also a UNESCO site.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/laxmi_villas.jpg" alt="Laxmi Vilas Palace">
          <h3>Laxmi Vilas Palace, Vadodara</h3>
          <p>One of the largest private residences in the world, four times the size of Buckingham Palace.</p>
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
