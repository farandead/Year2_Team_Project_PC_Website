
<!-- DATABASE CONNECTION -- HAVE TO MAKE AN INCLUSIONS-->
<?php
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
       
        <div class="form-container sign-up-container">
            <form action="PHP/signUp_inc.php" method='post' class="form-id">

                <h1>Create Account</h1>

                <input type="firstname" placeholder="First Name" name="firstName"  value=""/>
              <input type="lastname" placeholder="Last Name" name="lastname"  value="" />
              <input type="email" placeholder="Email" name="email"  value=""/>
              <input type="password" placeholder="Password" name="user_pwd" value="" />
              <input type="number" placeholder="Contact No" name="user_number"  value="" />
                 
               <!-- <input type="text" placeholder="Street" name="user_street" value="" />
                <div class="small-container">
                    <input type="text" class="small-input" placeholder="County" name="user_county" value="" />
                    <input type="text" class="small-input" placeholder="Country" name="user_country" value="" />
                </div>
                <div class="small-conatainer-2">
                    <input type="text" class="small-input" placeholder="City" name="user_city" value="" />
                    <input type="text" class="small-input" placeholder="Post Code" name="user_postCode" value="" />
                </div> -->
                <input type="date" placeholder="Date of Birth" name="user_birthday" value="" min="1950-01-01" max="2022-12-15">
                
               
                <label class="radio-inline">
                   <input type="radio" name="user_sex" value="Male">Male
                </label>
                            
                <label class="radio-inline">
                   <input type="radio" name="user_sex" value="Female">Female
                </label>
                 
                   
              
                <button name="signup_submit" >Sign In</button>
                <!--<input  style="margin-top:15px"   value="Sign Up">-->
            </form>
            <?php
            if (!empty($errors)) {
                var_dump($errors);
            }
            ?>
        </div>
        <!--END  CREATE AN ACCOUNT  -->

       <?php if (isset($_POST['submit_Login']) & !empty($_POST['submit_Login'])) {
            // PHP Form Validations
            if (empty($_POST['email'])) {
                // header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
                //  exit();
            $errors[] = "Please Enter your email ";
               
            }
            if (empty($_POST['pwd'])) {
                // header("location: /pages/connexion.php?error=emptyinput");
                $errors[] = "Please Enter your password ";
                
            }

            if (!empty($errors)) {
                // Check the Login Credentials
                $sql = "SELECT user_Email,User_Password FROM account WHERE user_Email=? ";
                $result = $conn->prepare($sql);
                $result->execute(array($_POST['email']));
                $count = $result->rowCount();
                $res = $result->fetch(PDO::FETCH_ASSOC);
                
                if ($res) {
                    // Compare the password with password hash
                    // $hashed = '$2y$10$HqLUsOHun8xAxsui5wGCYe5';
                    if (password_verify($_POST['pwd'], $res['User_Password'])) {
                        
                        //regenerate session id
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['user_Email'] = $res['user_Email'];
                        $_SESSION['User_FName'] = $res['User_FName'];
                        $_SESSION['User_SName'] = $res['User_SName'];
                        $_SESSION['last_login'] = time();
                        session_start();
        echo "<script type='text/javascript'>CONNECTED </script>";
                        // redirect the user to main page
                       // header("location: /index.php");
                     //   exit;
                        //echo "Valid";
                       
                    } else {
                          $errors[] = "The password or the email is incorrect ";
                       //echo  "wrong login ";
                        
                      
                    }
                    
                    
                    
                } else {

                    // header("location: /pages/connexion.php?error=unknowDetail");   
                    //exit();
                    $errors[] = "The password or the email is incorrect ";
                }
            }
  } else {
      echo "<script type='text/javascript'>NO SUBMIT </script>";
  }
?>
 
         <div class="form-container sign-in-container">
            <form style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" />
                <input type="password" placeholder="Password" name="pwd" value=""/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a
                        href="" style="margin-bottom:10px">Here</a></a>

              <button name="submit_Login" >Sign In</button>
                <!-- message  -->
                    <?php
                    if (!empty($errors)) {
                        var_dump($errors);
                       
                    }


                    ?>
            </form>
        </div>
        
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
