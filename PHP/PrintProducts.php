<?
require "connect_db.php"
  
  
$query= mysqli_query($conn,"SELECT Car_Type_ID FROM car_type_table ");





while($row=mysqli_fetch_assoc($query)){
  echo".$row['Product_Name']"
}
?>
