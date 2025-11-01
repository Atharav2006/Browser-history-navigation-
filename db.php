<?php
$host = "localhost";
$port = 4306;
$user = "root";     // change if you use another username
$pass = "";         // add password if set
$db   = "browser_simulation";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
