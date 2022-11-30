<?php  require "PHP/connect_db.php"; session_start(); ?>

<html>
<body>


<h1>Addresses panel</h1>

<form action="/action_page.php">
  <p>Please select the address:</p>
  <?php 
  $sqlAd="SELECT * FROM Delivery_address WHERE NOT Address_Status ='Hidden' AND User_ID ='".$_SESSION['User_ID']."'";
  $queryAd=mysqli_query($conn, $sqlAd);
 

  while($rowAd=mysqli_fetch_assoc($queryAd)){
    $addres=$rowAd['Country'].", ".$rowAd['City'].", ".$rowAd['Street'].", ".$rowAd['ZIP'];
    
   echo '<input type="radio" id="'.$rowAd['Address_ID'].'" name="address" value="'.$rowAd['Address_ID'].'">
         <label for="html">'.$addres.'</label><br>';
  }
  
  ?>


<br>
<input type="submit" value="Remove">
<input type="submit" value="Make deafault">
</form>
</body>
</html>
