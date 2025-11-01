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
  <title>Famous Foods - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/food.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Famous Foods of Gujarat</h1>
      <p>Taste the unique flavors of each city</p>
    </div>
  </section>

  <!-- Foods by City -->
  <section class="content-section">
    <div class="container">
      <h2>Signature Foods from Different Cities</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/maskabun.jpg" alt="Maska Bun Ahmedabad">
          <h3>Ahmedabad – Maska Bun</h3>
          <p>Soft bread bun layered with butter, often enjoyed with hot chai.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/locho.jpg" alt="Locho Surat">
          <h3>Surat – Locho</h3>
          <p>A steamed savory dish made from gram flour, topped with sev, onions & chutneys.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/gathiya.jpg" alt="Ganthiya Bhavnagar">
          <h3>Bhavnagar – Ganthiya</h3>
          <p>Soft fried snack made from chickpea flour, best with spicy chutney.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/khaman.jpg" alt="Khaman Gandhinagar">
          <h3>Gandhinagar – Khaman</h3>
          <p>Spongy yellow snack made of gram flour, garnished with mustard & coriander.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/khakhara.jpg" alt="Khakhra Rajkot">
          <h3>Rajkot – Khakhra</h3>
          <p>Thin, crispy snack made from wheat flour, enjoyed with pickle & tea.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/undhiyu.jpg" alt="Undhiyu Baroda">
          <h3>Vadodara – Undhiyu</h3>
          <p>Mixed vegetable dish with spices, traditionally cooked in earthen pots.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/dabeli.jpg" alt="Dabeli Kutch">
          <h3>Kutch – Dabeli</h3>
          <p>A spicy potato filling inside pav, garnished with sev & pomegranate seeds.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/mohanthal.jpg" alt="Mohanthal Patan">
          <h3>Patan – Mohanthal</h3>
          <p>A traditional sweet made of besan, ghee, and flavored with cardamom.</p>
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
