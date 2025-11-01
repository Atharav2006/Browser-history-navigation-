
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
  <title>Industries - Gujarat Tourism</title>
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
  <section class="hero-banner" style="background-image: url('../assets/images/industry.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Industries of Gujarat</h1>
      <p>The growth engine of India’s economy</p>
    </div>
  </section>

  <!-- Industries Grid -->
  <section class="content-section">
    <div class="container">
      <h2>Major Industrial Sectors</h2>
      <div class="places-grid">

        <div class="place-card">
          <img src="../assets/images/textile.jpg" alt="Textile Industry">
          <h3>Textile Industry</h3>
          <p>Ahmedabad is known as the "Manchester of the East", a hub for cotton and textile mills.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/diamond.jpg" alt="Diamond Industry">
          <h3>Diamond Industry</h3>
          <p>Surat is the world’s largest diamond cutting and polishing center, processing 90% of global diamonds.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/petrochemical.jpg" alt="Petrochemicals">
          <h3>Petrochemicals</h3>
          <p>Jamnagar houses the world’s largest oil refinery, boosting Gujarat’s petrochemical sector.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/pharmacutical.jpg" alt="Pharmaceuticals">
          <h3>Pharmaceuticals</h3>
          <p>Ahmedabad and Vadodara are leading pharma hubs, exporting medicines worldwide.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/automobile.jpg" alt="Automobiles">
          <h3>Automobile Industry</h3>
          <p>Sanand and Halol host major car manufacturing plants including Tata Motors and MG Motors.</p>
        </div>

        <div class="place-card">
          <img src="../assets/images/ports.jpg" alt="Ports and Logistics">
          <h3>Ports & Logistics</h3>
          <p>Kandla and Mundra ports are among India’s busiest, handling global trade and exports.</p>
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
