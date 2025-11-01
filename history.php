<?php
include "db.php";

// Handle clear history
if (isset($_POST['clear_all'])) {
    $conn->query("TRUNCATE TABLE history");
    header("Location: history.php");
    exit();
}

// Handle delete single entry
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM history WHERE id = $id");
    header("Location: history.php");
    exit();
}

// Filtering
$where = "1=1";

if (!empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $where .= " AND page_name LIKE '%$search%'";
}

if (!empty($_GET['start_date']) && !empty($_GET['end_date'])) {
    $start = $conn->real_escape_string($_GET['start_date']);
    $end   = $conn->real_escape_string($_GET['end_date']);
    $where .= " AND DATE(visit_time) BETWEEN '$start' AND '$end'";
}

// Sorting
$order = "DESC";
if (isset($_GET['sort']) && $_GET['sort'] === "oldest") {
    $order = "ASC";
}

$sql = "SELECT * FROM history WHERE $where ORDER BY visit_time $order";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Browsing History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            padding: 20px;
        }
        h2 {
            color: #444;
        }
        form {
            margin-bottom: 20px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        input, select, button {
            padding: 8px;
            margin: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #6c63ff;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .delete-btn {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
        .delete-btn:hover {
            text-decoration: underline;
        }
        .clear-btn {
            background: #ff3b3b;
            color: white;
            border: none;
            padding: 10px 16px;
            cursor: pointer;
            border-radius: 6px;
        }
        .clear-btn:hover {
            background: #e60000;
        }
    </style>
</head>
<div class="nav-buttons" style="text-align:center; margin:20px;">
<button id="backBtn" class="nav-btn">← Back</button>
<button id="forwardBtn" class="nav-btn">Forward →</button>
</div>

<script src="../assets/js/navigation.js"></script>
<body>

<h2>Browsing History</h2>

<!-- Filter Form -->
<form method="get">
    🔍 Search: <input type="text" name="search" value="<?php echo $_GET['search'] ?? ''; ?>">

    📅 From: <input type="date" name="start_date" value="<?php echo $_GET['start_date'] ?? ''; ?>">
    To: <input type="date" name="end_date" value="<?php echo $_GET['end_date'] ?? ''; ?>">

    Sort:
    <select name="sort">
        <option value="newest" <?php if(($_GET['sort'] ?? '') == 'newest') echo 'selected'; ?>>Newest First</option>
        <option value="oldest" <?php if(($_GET['sort'] ?? '') == 'oldest') echo 'selected'; ?>>Oldest First</option>
    </select>

    <button type="submit">Apply</button>
</form>

<!-- Clear All Button -->
<form method="post" style="margin-bottom:20px;">
    <button type="submit" name="clear_all" class="clear-btn">🗑 Clear All History</button>
</form>

<!-- History Table -->
<table>
    <tr>
        <th>ID</th>
        <th>Page</th>
        <th>Visit Time</th>
        <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['page_name']); ?></td>
        <td><?php echo $row['visit_time']; ?></td>
        <td><a class="delete-btn" href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this entry?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
