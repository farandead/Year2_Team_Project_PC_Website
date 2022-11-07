<?php
//var_dump(YOU CAN SEE ME);
$servername = "localhost";
$username = "babimors_astonTeam";
$password = ";^5z?6.mA9v"
  //"wMxgHygDHh)z";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
