<?php
$servername = "localhost";
$username = "babimors_astonTeam";
$password = ";^5z?6.mA9v"
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
