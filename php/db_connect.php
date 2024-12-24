<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_name = 'gpteam';

$conn = new mysqli($db_host, $db_user, '', $db_name);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create articles table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content JSON NOT NULL,
    publish_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($sql);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
