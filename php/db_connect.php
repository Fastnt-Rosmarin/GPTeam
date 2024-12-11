<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
//$db_pass = 'your_password';
$db_name = 'gpteam';

$conn = new mysqli($db_host, $db_user, '', $db_name);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }