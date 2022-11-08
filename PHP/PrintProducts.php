<?
require "connect_db.php"
  
$sql="SELECT Car_Type_ID FROM car_type_table ";

$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query)){
  echo".$row['Product_Name']"
}
?>
