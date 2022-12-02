<?php
session_start();
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
<!-- END DATABASE CONNECTION-->
<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/sign_up_In.css">
    <script src="js/toggle_switch.js"></script>

    <script>
        function signUp() {

            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container123');

            signUpButton.addEventListener('click', () => {
                container.classList.toggle("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
        }
    </script>

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


<body style="background: none;" class="dark_target">

 <?php require 'header.php'; ?>

    <div class="container" id="container123">
        <!--  CREATE AN ACCOUNT  -->
       <?php require 'PHP/signUp_inc.php' ?>
        <div class="form-container sign-up-container">
            <form method='post' class="form-id">

                <h1>Create Account</h1>

                <input type="firstname" placeholder="First Name" name="firstName"  value="" required />
              <input type="lastname" placeholder="Last Name" name="lastname"  value="" required />
              <input type="email" placeholder="Email" name="email"  value="" required />
              <input type="password" placeholder="Password" name="user_pwd" value="" required />
              <input type="number" placeholder="Contact No" name="user_number"  value="" required />
              <input type="date" placeholder="Date of Birth" name="user_birthday" value="" min="1950-01-01" max="2022-12-15" required />
                
               
                <label class="radio-inline">
                   <input type="radio" name="user_sex" value="Male">Male
                </label>
                            
                <label class="radio-inline">
                   <input type="radio" name="user_sex" value="Female">Female
                </label>
                 
                   
              
                <button name="signup_submit" >Sign Up</button>
                
            </form>
            <?php
            if (!empty($errorsU)) { ?>
                <p style="color:red;"><?php echo implode($errorsU) ?> </p> 
            <?php
            }
       
            ?>
        </div>
        <!--END  CREATE AN ACCOUNT  -->

       <!--SIGN IN -->
 
         <div class="form-container sign-in-container">
            <form action ="PHP/logIn_inc.php" style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" required />
                <input type="password" placeholder="Password" name="pwd" value="" required/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                

                 <button name="submit_Login" >Sign In</button>
             
                <!-- MESSAGE  -->
                   
         <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                ?>
                         <p style="color:red;">All cases is required.</p>
                   <?php 
               
            } 
            if ($_GET["error"] == "wronglogin") {
                ?>
                         <p style="color:red;">The email or password is incorrect.</p>
                   <?php 
              
            }
            if ($_GET["error"] == "unknowDetail") {
                ?>
                         <p style="color:red;">The email is not recognised, please verify or sign up.</p>
                   <?php 
               
            }
        }

        ?>
                <!-- END MESSAGE  -->    
            </form>
             
        </div>
        <!-- END SIGN IN -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with COMPUK</p>
                    <button id="signUp" onclick="signUp()">Sign Up</button>
                </div>
            </div>
        </div>
    </div>



    <?php require 'footer.php'; ?>

</body>

</html>
