<?php
$servername = "localhost";
$username = 'babimors_astonTeam';
$password ='HW#1o.5=#cl+';

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
echo "ok";
?>
