<?php
$servername = "localhost";
$username = 'babimors_astonTeam';
$password ='HW#1o.5=#cl+';
$dbName="babimors_compuk";

$conn=new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
echo "ok";
?>
