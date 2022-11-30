<?php  require "PHP/connect_db.php"; session_start(); ?>

<html>
<body>


<h1>Addresses panel</h1>

<form action="/action_page.php">
  <p>Please select the address:</p>
  <?php 
  $sqlAd="SELECT * FROM Delivery_address WHERE User_ID ='".$_SESSION['User_ID']."'";
  $queryAd=mysqli_query($conn, $sqlAd);
 

  while($rowAd=mysqli_fetch_assoc($queryAd)){
   echo '<input type="radio" id="1" name="address" value="1">
         <label for="html">address</label><br>';
  }
  
  ?>
  <input type="radio" id="1" name="address" value="1">
  <label for="html">address</label><br>
  <input type="radio" id="2" name="address" value="2">
  <label for="css">address</label><br>
  <input type="radio" id="3" name="address" value="3">
  <label for="javascript">address</label>

<br>
<input type="submit" value="Remove">
<input type="submit" value="Make deafault">
</form>
</body>
</html>
