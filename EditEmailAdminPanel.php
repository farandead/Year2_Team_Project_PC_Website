<?php

require "PHP/CheckAdminAccess.php";

ob_start();

if(isset($_GET['EMAIL']) and isset($_GET['EMAIL'])){
  if($_GET['EMAIL']!=null and $_GET['EMAIL']!=null){
$email=base64_decode($_GET['EMAIL']);
$ID=base64_decode($_GET['ID']);
?>
<html>
  <body>
    <h3>Edit the email<h/3>

    
 <?php   echo'     <form action ="PHP/changeEmailAction.php?EMAIL='.base64_encode($email).'&ID='.base64_encode($ID).'" method="post">
     <h3>'.$email.'</h3>'; ?>
         
       <label for="em">Change to:</label><br>
  <input type="email" id="em" name="em" maxlength= "50" required  ><br><br>
     
      
           
           
         
 
     <input type="submit" name="submitEmail" value="Update the email">
    </form>  
      
      
  </body>
</html>
<?php 
  }else{header("Location: accounts_base_page.php");}
}else{
  header("Location: accounts_base_page.php");
}
  
  ?>
