<!DOCTYPE HTML>  
<html>
<body> 

<?php


$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE request (
firstname VARCHAR(30) PRIMARY KEY,
email VARCHAR(30) NOT NULL,
payment VARCHAR(50) NOT NULL,
comment VARCHAR(50) NOT NULL,
style VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "<br>Table request created successfully";
} else {
  echo "<br>Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>