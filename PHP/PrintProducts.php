<?
require "connect_db.php"
  
  
$query= 1;


while($row=mysqli_fetch_assoc($query)){
  echo".$row['Product_Name']"
}
?>
