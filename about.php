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
  <title>About Gujarat - Gujarat Tourism</title> 
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
      <h1>About Gujarat</h1>
      <p>The Land of Legends, Lions, and Vibrant Culture</p>
    </div>
  </section>

  <!-- About Content -->
  <section class="content-section">
    <div class="container">
      <h2>Discover Gujarat</h2>
      <p>
        Gujarat, located on the western coast of India, is one of the most culturally rich
        and historically significant states of the nation. Known as the "Jewel of Western India,"
        Gujarat boasts a unique blend of ancient heritage, natural beauty, spiritual traditions,
        and industrial strength.
      </p>
      <p>
        From the majestic <b>Statue of Unity</b> to the <b>Gir National Park</b>, the only home of
        Asiatic lions, Gujarat offers travelers an unforgettable experience. The state is also
        a hub of spirituality, with temples like <b>Somnath</b> and <b>Dwarka</b>, while being a
        modern industrial powerhouse with cities like Ahmedabad and Surat.
      </p>
      <p>
        The people of Gujarat are known for their hospitality, vibrant festivals like
        <b>Navratri</b>, mouth-watering cuisine, and contributions to India’s growth in arts,
        culture, and industries.
      </p>
    </div>
  </section>

<script src="../assets/js/navigation.js"></script>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Gujarat Tourism | Designed for Educational Purpose</p>
  </footer>

</body>
</html>

