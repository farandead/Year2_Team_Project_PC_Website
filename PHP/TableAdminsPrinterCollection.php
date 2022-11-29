<?php
require "connect_db.php";

$templateRow="";
$sql="SELECT * FROM account WHERE  User_Status ='RegAdmin'";
  $query=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($query)){
  $UserID=base64_encode($row['Order_ID']);
  
  echo 
    '<tr>
                <td>ID#</td>
                <td>Email@gmail.com</td>
                <td>071234567893</td>
                <td>Name</td>
                <td><div class="btn-group 1" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check 1" id="btncheck1 1" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btncheck1 1">Admin</label>
                  
                    <input type="checkbox" class="btn-check 1" id="btncheck2 1" autocomplete="off">
                    <label class="btn btn-outline-dark" for="btncheck2 1">Non-Admin</label>
                  </div></td>
            </tr>';
  
  
}

?>
