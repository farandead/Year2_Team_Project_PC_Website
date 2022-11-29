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
    
   
    <div class="grid-container">
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
                    ?> <p style="color:red;"><?php echo "There is no previous order" ?> </p>
                    <?php
                    }
                    
                    
                    ?>
                    
                </table>
            </div>
            
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Contact information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address">Address</label>
                                            <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-city">City</label>
                                            <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-country">Country</label>
                                            <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Postal code</label>
                                            <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                <!-- Description -->
                            <h6 class="heading-small text-muted mb-4">About me</h6>
                            <div class="pl-lg-4">
                                <div class="form-group focused">
                                    <label>About Me</label>
                                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        
    </div>

    
    <?php require 'footer.php'; ?>


</body>

</html>
