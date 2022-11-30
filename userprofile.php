<?php  session_start();
$servername = "localhost";
$username = 'babimors_astonTeam';
$password = 'HW#1o.5=#cl+'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=babimors_compuk", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}


?>
<head>
      <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<?php 
    include "header.php";


?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php
                                                                                                                                                                                                                                                                                                                    if (isset($_SESSION['User_FName'])) {
                                                                                                                                                                                                                                                                                                                        echo $_SESSION['User_FName'];
                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                        echo "notFound";
                                                                                                                                                                                                                                                                                                                    } ?></span><span class="text-black-50"><?php
                                                                                            if (isset($_SESSION['user_Email'])) {
                                                                                                echo $_SESSION['user_Email'];
                                                                                            } else {
                                                                                                echo "notFound";
                                                                                            } ?>"</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input disabled type="text" class="form-control" placeholder="First Name" value="
                    <?php
                    if (isset($_SESSION['User_FName'])) {
                        echo $_SESSION['User_FName'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input disabled type="text" class="form-control" value="
                    <?php
                    if (isset($_SESSION['User_SName'])) {
                        echo $_SESSION['User_SName'];
                    } else {
                        echo "notFound";
                    } ?>" placeholder="Last Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input disabled type="text" class="form-control" placeholder="Email" value="
                    <?php
                    if (isset($_SESSION['user_Email'])) {
                        echo $_SESSION['user_Email'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input disabled type="password" class="form-control" placeholder="Password" value="
                    <?php
                    if (isset($_SESSION['User_Password'])) {
                        echo $_SESSION['User_Password'];
                    } else {
                        echo "notFound";
                    } ?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input disabled type="text" class="form-control" placeholder="Phone number" value="<?php
                                                                                                                                                                            if (isset($_SESSION['User_Phone_Number'])) {
                                                                                                                                                                                echo $_SESSION['User_Phone_Number'];
                                                                                                                                                                            } else {
                                                                                                                                                                                echo "notFound";
                                                                                                                                                                            } ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input disabled type="text" class="form-control" placeholder="Address" value="<?php
                                                                                                                                                                if (isset($_SESSION['User_Address'])) {
                                                                                                                                                                    echo $_SESSION['User_Address'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo "notFound";
                                                                                                                                                                } ?>"></div>

                </div>
                <div class="mt-5 text-center"><a href="PHP/signOut.inc.php"> <button class="btn btn-primary profile-button" type="button">Log Out</button> </a></div>
            </div>
        </div>
        <div class="col-md-4">

            <center>
                <center>
                    <P>ORDERS</P>
                </center>
                <table>
                    <tr>

                        <th>No </th>
                        <th>Product </th>
                        <th>Date</th>
                        <th>Address</th>
                    </tr>
                    <?php
                    
                    
                $sql = "SELECT * FROM OrderP WHERE User_ID=? ";
                $result_order = $conn->prepare($sql);
                $result_order->execute(array($_SESSION['User_ID']));
                $count_order = $result_order->rowCount();
                $resOrderId = $result_order->fetch(PDO::FETCH_ASSOC);
                    
                    
                    /*$Products="";
  $sqlPr="SELECT * FROM Linked_Order_and_Products WHERE Order_ID ='".$row['Order_ID']."'";
  $queryPr=mysqli_query($conn, $sqlPr);
  $counter=0;

  while($rowPr=mysqli_fetch_assoc($queryPr)){
    $counter++;
    if($counter==1){ 
        $Products=$rowPr['Product_ID']."(".$rowPr['Amount_Product'].")";
    }
      else{ 
          $Products= $Products.", ".$rowPr['Product_ID']."(".$rowPr['Amount_Product'].")";
      }
 
  }
                    
                    
                    
                  
                
                    
                $sql = "SELECT * FROM Linked_Order_and_Products WHERE Order_ID=? ";
                $result_ProductLinkOrder = $conn->prepare($sql);
                $result_ProductLinkOrder->execute(array($resOrderId));
                $count_ProductLinkOrder = $result_ProductLinkOrder->rowCount();
                $resProductId = $result_ProductLinkOrder->fetch(PDO::FETCH_ASSOC); */
                    
                  /*  $customer = $_SESSION['user_Email'];
                    $customer = stripcslashes($customer);
                    $customer = mysqli_real_escape_string($conn, $customer);
                    $sql_order = "SELECT * from `orders_data`  where User_Email = '$customer'";

                    $result_order = mysqli_query($conn, $sql_order);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count_order = mysqli_num_rows($result_order); */

                    if ($count_ProductLinkOrder > 0) {


                        for ($x = 1; $x <= $count_order; $x++) {
                            /*$row_order = mysqli_fetch_assoc($result_order);*/

                           /* $produt_id = $resProductId["Product_ID"];

                            $sql = "SELECT * FROM Product WHERE Product_ID=? ";
                            $result_Product = $conn->prepare($sql);
                            $result_Product->execute(array($produt_id));
                            $count_Product = $result_Product->rowCount();
                            $resProductId = $result_Product->fetch(PDO::FETCH_ASSOC);

                            $sql = "SELECT * FROM `product`  where Product_ID = '$produt_id' ";
                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                            $row["Product_Name"];
                            $row_order["Date_Placed"];
                            $row_order["Cus_Address"];
                            echo  " */
                        <tr>
                        <td>" .  $x . "</td>
                        <td>" . $row["Product_Name"] . "</td>
                        <td>" . $row_order['Date_Placed'] . "</td>
                        <td>" . $row_order['Cus_Address'] . "</td>
                        </tr>
                        ";


                            // $row["title"];
                            // $row_order["date_palaced"];
                            // $row_order["delivery_address"];
                            // echo  "
                            // <tr>
                            // <td>" . $row["title"] . "</td>
                            // <td>" . $row_order['date_palaced'] . "</td>
                            // <td>" . $row_order['delivery_address'] . "</td>
                            // </tr>
                            // ";
                        }
                    } else {
                        echo "";
                    }  ?>

                </table>
            </center>
        </div>
    </div>
</div>
<?php 
    include "footer.php"

?>
</div>
</div>
