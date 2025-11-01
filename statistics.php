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
  <title>Statistics - Gujarat Tourism</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <section class="hero-banner" style="background-image: url('../assets/images/map.jpg');">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Statistics of Gujarat</h1>
      <p>Numbers that showcase Gujarat’s progress, culture, and strength</p>
    </div>
  </section>

  <!-- Key Figures -->
  <section class="content-section">
    <div class="container">
      <h2>Key Demographic & Economic Figures</h2>
      <div class="places-grid">

        <div class="place-card">
          <h3>Population</h3>
          <p><strong>70 million+</strong> (2024 estimate) <br> India’s 9th most populous state</p>
        </div>

        <div class="place-card">
          <h3>Area</h3>
          <p><strong>196,024 sq. km</strong> <br> 6th largest state in India</p>
        </div>

        <div class="place-card">
          <h3>Literacy Rate</h3>
          <p><strong>82.4%</strong> (Male: 87.2%, Female: 76.5%)</p>
        </div>

        <div class="place-card">
          <h3>GDP</h3>
          <p><strong>$280+ billion</strong> (₹23 lakh crore, 2023–24) <br> Contributes ~8.3% to India’s GDP</p>
        </div>

        <div class="place-card">
          <h3>Coastline</h3>
          <p><strong>1,600 km</strong> – Longest in India, hub for ports & trade</p>
        </div>

        <div class="place-card">
          <h3>Tourism</h3>
          <p><strong>60 million+</strong> domestic & <strong>2 million+</strong> foreign tourists annually</p>
        </div>

        <div class="place-card">
          <h3>Urbanization</h3>
          <p><strong>43%</strong> urban population <br> (One of the highest in India)</p>
        </div>

        <div class="place-card">
          <h3>Major Exports</h3>
          <p>Diamonds, Textiles, Pharmaceuticals, Chemicals, IT Services</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Charts Section -->
  <section class="content-section">
    <div class="container">
      <h2>Visual Insights</h2>
      <div style="display:flex; flex-wrap: wrap; gap:30px; justify-content:center;">
        <canvas id="industryChart" width="350" height="250"></canvas>
        <canvas id="populationChart" width="350" height="250"></canvas>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Gujarat Tourism | Designed for Educational Purpose</p>
  </footer>

  <!-- Chart Script -->
  <script>
    // Industries Pie Chart
    new Chart(document.getElementById('industryChart'), {
      type: 'pie',
      data: {
        labels: ['Textiles', 'Petrochemicals', 'Diamonds', 'Pharma', 'Agriculture', 'Others'],
        datasets: [{
          data: [20, 25, 22, 15, 10, 8],
          backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)'
          ],
          borderColor: 'white',
          borderWidth: 1
        }]
      },
      options: {
        plugins: { title: { display: true, text: 'Industry Contribution (%)' } }
      }
    });

    // Population Bar Chart
    new Chart(document.getElementById('populationChart'), {
      type: 'bar',
      data: {
        labels: ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Bhavnagar', 'Jamnagar'],
        datasets: [{
          label: 'Population (millions)',
          data: [8.5, 7.2, 2.3, 2.0, 1.2, 0.9],
          backgroundColor: 'rgba(54, 162, 235, 0.7)'
        }]
      },
      options: {
        plugins: { title: { display: true, text: 'Population of Major Cities' } },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>

</body>
</html>

