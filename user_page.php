<?php session_start() ;

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
<html>
    
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/user_page.css">
    <script src="js/toggle_switch.js"></script>
    <script src="js/sign_up_in.js"></script>

    <script>

    </script>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: "Arial", Helvetica, sans-serif;
        }

        i {
            font-size: 30px;
            cursor: pointer;
            position: relative;
            ;
        }
    </style>

</head>

<body style="background: none;" class="dark_target"></body>
   
    <?php require 'header.php'; ?>
    
   

    <div class="container1">
        <div class="OrdersBox">
            
            <div class= "title">
                <h1 class="helloUser">Hello <?php echo ucfirst($_SESSION['User_FName']); ?> !</h1>
                <h2 class="subheading">Order History: </h2>
            </div>
            <table class = "orderTable">
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Payment Status</th>
                <th>Fulfillment Status</th>
                <th>Total Price</th>
            </tr>
                <?php 
                 $sql = "SELECT * FROM OrderP WHERE User_ID=? ";
                $result = $conn->prepare($sql);
                $result->execute(array($_SESSION['User_ID']));
                $count = $result->rowCount();
                
                
                if ($count > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['Order_ID'] ?></td>
                            <td>x</td>
                            <td><?php echo $row['Order_Status'] ?></td>
                            <td>x</td>
                            <td><?php echo $row['Total_Price'] ?></td>
                            
                        </tr>
                       <?php  }
                }else { 
                
                echo "There is no previous order";
                }
                
                
                ?>
                
                
           
            </table>
        </div>

        

    </div>

    
    <?php require 'footer.php'; ?>


</body>

</html>
