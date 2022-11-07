<?php
echo "TESTING TEST ";


$servername = "localhost";
$username = "babimors_compuk";
$password = ";^5z?6.mA9v";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
