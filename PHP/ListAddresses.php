<?php
$UserForAddress=$_SESSION['User_ID'];
$sqlAdr = "SELECT * FROM Delivery_address WHERE User_ID=$UserForAddress";
$resultAdr=mysqli_query($conn,$sqlAdr);
while($row=mysqli_fetch_assoc($resultAdr)){
  
  if($row['Address_Status']!="Hidden"){
$SELECTION=null;
  if($row['Address_Status']=="Default"){$SELECTION="selected";
  }
  $addressid=$row['Address_ID'];
  $address=$row['Country'].", ".$row['City'].", ".$row['Street'].", ".$row['ZIP'];
  
  echo ' <option value="'.$addressid.'" '.$SELECTION.'>'.$address.'</option>';

  }
}



?>
