<?php
ob_start();

if(isset($_GET['EMAIL']) and isset($_GET['EMAIL'])){
$email=$_GET['EMAIL'];

?>
<html>
  <body>
    <h3>Edit the email<h/3>

    
 <?php   echo'     <form action ="changeEmail.php?EMAIL='.$email.'" method="post">
     <h3>'.$email.'</h3>'; ?>
         
       <label for="em">Change to:</label><br>
  <input type="email" id="em" name="em" maxlength= "50" required  ><br><br>
     
      
           
           
         
 
     <input type="submit" name="submitEmail" value="Update the email">
    </form>  
      
      
  </body>
</html>
<?php 
}else{
  header("Location: accounts_base_page.php");
}
  
  ?>
