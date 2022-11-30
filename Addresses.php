<?php  require "PHP/connect_db.php"; session_start(); ?>

<html>
<body>


<h1>Addresses panel</h1>

<form action="PHP/AddressControllerAction.php" method="post">
  <p>Please select the address:</p>
  <?php 
  $sqlAd="SELECT * FROM Delivery_address WHERE NOT Address_Status ='Hidden' AND User_ID ='".$_SESSION['User_ID']."'";
  $queryAd=mysqli_query($conn, $sqlAd);
 

  while($rowAd=mysqli_fetch_assoc($queryAd)){
    
    $addres=$rowAd['Country'].", ".$rowAd['City'].", ".$rowAd['Street'].", ".$rowAd['ZIP'];
    
    if($rowAd['Address_Status']=="Default"){$addres=$addres."(Deafault address)"; }
   echo '<input type="radio" required id="'.$rowAd['Address_ID'].'" name="address" value="'.$rowAd['Address_ID'].'">
         <label for="html">'.$addres.'</label><br>';
  }
  
  ?>


<br>
<input type="submit" value="Remove" name="Remove">
<input type="submit" value="Make deafault" name="deafault">
</form>
  <form action="PHP/AddAddressAction.php" method="post">
     <p>Pleaseenter the details:</p>
    <input type="submit" value="Add new address" name="AddAddress">
    </form>
</body>
</html>
