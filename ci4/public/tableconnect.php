

<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>