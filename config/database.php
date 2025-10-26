<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wsr_website";

// $servername = "localhost";
// $username = "u414060592_wsr_developer";
// $password = "?uD2EK7meZZ3!w2";
// $dbname = "u414060592_wsr_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
