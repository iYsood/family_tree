<?php //session_start();

// SHOW ERRORS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes. In case if your CURL is slow and is loading too much (Can be IPv6 problem)
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "family";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8mb4');

$sql = $conn->query("SELECT * FROM settings");
$website_settings = $sql->fetch_assoc();
