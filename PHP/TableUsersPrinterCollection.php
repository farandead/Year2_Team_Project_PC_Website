<?php

require "connect_db.php";

$templateRow="";
$sql="SELECT User_ID, user_Email, User_SName, User_FName,User_Phone_Number FROM account";
  $query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query)){
echo 
                    "<tr>
                      <td>".$row['User_ID']."</td>
                      <td>".$row['user_Email']." - "."<a href='EditEmailAdminPanel.php?ID=".json_encode($row['User_ID'])."&EMAIL=".json_encode($row['user_Email'])."'>edit</a>"."</td>
                      <td>".$row['User_Phone_Number']."</td>
                      <td>".$row['User_SName']." ".$row['User_FName']."</td>
                  </tr>";

}

$conn  -> close();

?>
