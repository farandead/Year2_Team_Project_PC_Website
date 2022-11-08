<?
require "connect_db.php"
  
  
$query=mysqli_query($conn,"SELECT Product_Name from Product");





while($row=mysqli_fetch_assoc($query)){
  echo".$row['Product_Name']"
}
?>
