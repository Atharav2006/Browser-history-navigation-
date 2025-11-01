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
  <title>Gujarat Tourism</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">
  <link rel="stylesheet" href="../assets/css/carousel.css">
  </head><div class="nav-buttons" style="text-align:center; margin:00px;">
  <button id="backBtn" class="nav-btn">← Back</button>
<button id="forwardBtn" class="nav-btn">Forward →</button>
</div>

<script src="../assets/js/navigation.js"></script>
<body style="color: white;">

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

  <!-- Carousel -->
  <section class="carousel-container">
    <div class="carousel-slide active" style="background-image: url('../assets/images/gir.jpg');">
      <div class="overlay"></div>
      <div class="carousel-text">
        <h1>Explore the Gir National Park</h1>
        <p>Home of the majestic Asiatic Lions.</p>
      </div>
    </div>

    <div class="carousel-slide" style="background-image: url('../assets/images/somnath.jpeg');">
      <div class="overlay"></div>
      <div class="carousel-text">
        <h1>Somnath Temple</h1>
        <p>A timeless symbol of Gujarat’s heritage.</p>
      </div>
    </div>

    <div class="carousel-slide" style="background-image: url('../assets/images/navratri.jpg');">
      <div class="overlay"></div>
      <div class="carousel-text">
        <h1>Vibrant Navratri</h1>
        <p>Celebrate dance, devotion, and colors.</p>
      </div>
    </div>

    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </section>

  <!-- Intro Section -->
  <section class="intro">
    <h2>Welcome to Gujarat</h2>
    <p>
      Gujarat, the land of legends and lions, is a blend of culture, heritage, 
      industries, and modern development. Explore its natural beauty, delicious cuisine, 
      vibrant festivals, and the stories of great people who made Gujarat proud.
    </p>
  </section>


<script src="../assets/js/navigation.js"></script>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Gujarat Tourism | Designed for Educational Purpose</p>
  </footer>

  <script src="../assets/js/carousel.js"></script>
</body>
</html>

