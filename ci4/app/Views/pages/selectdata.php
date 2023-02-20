
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM request";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["firstname"]. "<br>email: " . $row["email"]. "<br>payment: " . $row["payment"]. "<br>comment:  " . $row["comment"]. "<br>style: " . $row["style"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>