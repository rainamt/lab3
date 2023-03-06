<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  
<ul class="tabs">
    <li><a href="/~rterania/lab3/ci4/public/index#contact">Home</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Hobbies</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Links</a></li>
    
  </ul>
   <div style = "text-align: center;
    color:rgb(85, 19, 19);">
<br><br><br><br>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $styleErr = $paymentErr = "";
$name = $email = $style = $comment = $payment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["payment"])) {
    $payment = "";
  } else {
    $payment = test_input($_POST["payment"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$payment)) {
      $paymentErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["style"])) {
    $styleErr = "Style is required";
  } else {
    $style = test_input($_POST["style"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Request Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Payment Form: <input type="text" name="payment" value="<?php echo $payment;?>">
  <span class="error"><?php echo $paymentErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Style:
  <input type="radio" name="style" <?php if (isset($style) && $style=="Outline") echo "checked";?> value="Outline">Outline
  <input type="radio" name="style" <?php if (isset($style) && $style=="Color") echo "checked";?> value="Color">Color
  <input type="radio" name="style" <?php if (isset($style) && $style=="Fully Rendered") echo "checked";?> value="Fully Rendered">Fully Rendered  
  <span class="error">* <?php echo $styleErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $payment;
echo "<br>";
echo $comment;
echo "<br>";
echo $style;
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO rterania_request (firstname, email, payment, comment, style)
VALUES ('$name', '$email', '$payment', '$comment', '$style' )";

if ($conn->query($sql) === TRUE) {
  echo " <br> New record created successfully";
} else {
  echo " <br> Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>



 </div>
</body>
</html>