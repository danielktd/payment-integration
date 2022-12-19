<?php
$servername = "localhost";
$username = "raiafzzf_ipay";
$password = "";
$dbname = "raiafzzf_ipay";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (name, url, invoice)
VALUES ('John', 'emee.com', '123456')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>