<?php  session_start();
if(!(isset($_SESSION['User_Status']))){header("Location: index.php");}
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
  <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: "Arial", Helvetica, sans-serif;
            background-color: none;
            background:none;
        }

       
    </style>
<head>
    <link rel="stylesheet" href="css/user-profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="css/index.css">
  
    <link rel="stylesheet" href="css/header.css">
    
    
   

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
                } 
                if($_SESSION["User_Status"]=="Admin"){
                echo "<br><a href='accounts_base_page.php'>Admin panel</a>";}
                ?></span><span> </span></div>
                
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
                    <div class="col-md-12"><label class="labels">Address</label><a href="Addresses.php" target="_blank">
                    <input disabled type="text" class="form-control" placeholder="Address" value="<?php
                                                                                                                                                                if (isset($_SESSION['User_Address'])) {
                                                                                                                                                                    echo $_SESSION['User_Address'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo " Addresses panel";
                                                                                                                                                                } ?>">
                    </a></div>

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

                        <th>Order Status</th>
                        <th>Total Price(£)</th>
                        
                        <th>More information</th>
                    </tr>
                    
                    <?php
                    
                $userId = $_SESSION['User_ID'];
                $sql = "SELECT * FROM OrderP WHERE User_ID=? AND Order_Status != 'Basket' ";
                $result_order = $conn->prepare($sql);
                $result_order->execute(array($userId));  /* $_SESSION['User_ID']*/
                $count_order = $result_order->rowCount();
                $resOrderId = $result_order->fetch(PDO::FETCH_ASSOC);
                    if ($count_order >= 1 ) {
              while($resOrderId = $result_order->fetch(PDO::FETCH_ASSOC)) {
                         //echo $resProductOfOrderID['Product_ID'];
                  ?>
                
                     
                       <tr>
                        
                        <td><?php echo $resOrderId["Order_Status"]?></td>
                        
                        <td><?php echo $resOrderId['Total_Price']?></td>
                        <td><a href="orderDetail.php?orderId=<?php echo $resOrderId['Order_ID'] ?>"> Click </a> </td>
                       </tr> 
                    
                    <?php
                       
                    } ?>
                        </table>
                   <?php  } else {
                        ?>
                    <tr>
                        <?php
                     echo "You do not have any orders..."  ;
                    ?>
                        </tr>
                   <?php }
                    
               ?>      
                 
                
            </center>
        </div>
    </div>
</div>

</div>
</div>

