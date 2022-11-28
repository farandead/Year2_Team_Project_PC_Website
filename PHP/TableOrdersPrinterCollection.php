<?php

require "connect_db.php";

$templateRow="";
$sql="SELECT * FROM OrderP WHERE NOT Order_Status ='Basket'";
  $query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query)){
echo "

                <tr>
                  <td>".$row['Order_ID']."</td>
                  <td>Items</td>
                  <td>".$row['User_ID']."</td>
                  <td> <form action =\"PHP/updateOrderSt.php\" method=\"post\">     
                  
                   <select name=\"Statuses\" id=\"Statuses\" required >
                  <option value=\"InProcess\"  disabled>In Process</option>
                  <option value=\"Shiped\"  disabled>Shiped</option>
                  <option value=\"Delivered\"  disabled>Delivered</option>
                  <option value=\"Declined\"  disabled>Declined</option>
                  </select>
                  
                  
                  <input type=\"submit\" name=\"updateStO\" value=\"Update\">
                                  
    </form> 
    </td>
                  <td>Total ".$row['Total_Price']."</td>
              </tr>";
  

}

$conn  -> close();

?>
