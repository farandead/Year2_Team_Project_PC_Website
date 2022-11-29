<?php
require "connect_db.php";

$templateRow="";
$sql="SELECT * FROM account WHERE  User_Status ='RegAdmin'";
  $query=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($query)){
  $UserID=base64_encode($row['User_ID']);
  
  echo 
    '<tr>
                <td>'.$row['User_ID'].'</td>
                <td>'.$row['user_Email'].'</td>
                <td>'.$row['User_Phone_Number'].'</td>
                <td>'.$row['User_SName'].' '.$row['User_FName'].'</td>
                <td><div class="btn-group 1" role="group" aria-label="Basic checkbox toggle button group">
                    <a href="break"><input type="checkbox" class="btn-check 1" id="btncheck1 1" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btncheck1 1">Admin</label></a>
                  
                    <input type="checkbox" class="btn-check 1" id="btncheck2 1" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btncheck2 1">Non-Admin</label>
                  </div></td>
            </tr>';
  
  
}

?>
