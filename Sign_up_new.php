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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie -Your One Stop Source of Unlimited Movies</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


    <header class="navigationBar" id="navigationLightMode" style="margin-top:-200px ;">
        <ul id="navbar">
            <div id="logoblock">
                <a href="mainpage.php" class="link">
                    <p id="logoMovie" style="color:white">
                        LOGO

                    </p>
                </a>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="">DESKTOP PCs</a></li>
                <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
                <li class="navbaritem"><a class="link" href="contact_us.html">CONTACT US</a></li>
                <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
            </div>

            <div id="membershipblock">



                <li><i id="toggle_button_dark" class="bi bi-moon" onclick="myFunction()"></i> <i id="toggle_button"
                        style="display: flex;" class="bi bi-brightness-high-fill" onclick="myFunction()"></i></li>


                <br>
                <br>
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search"
                            style="font-size: xx-large;color:white"></i> </a></li>
                <br>
                <br>
                <li><a class="sign-in-logo" class="link" href="Sign_up.html"> <i class="bi bi-person-fill"
                            style="font-size: xx-large;color:white"></i> </a></li>
        </ul>
        </div>

    </header>


    <div class="container" id="container123">
        <!-- SIGN UP PHP SCRIPT-->
    <?php

    if (isset($_POST['signup_submit']) & !empty($_POST['signup_submit'])) {

        //if (empty($_POST['lastName'])) {
        // $errors[] = "";
        //}
        if (empty($_POST['firstName'])) {
            $errors[] = "Please Enter your firstName";
        }
        if (empty($_POST['lastname'])) {
            $errors[] = "Please Enter your lastname";
        }
        
        if (empty($_POST['user_number'])) {
            $errors[] = "Please Enter your number";
        }
        if (empty($_POST['user_sex'])) {
            $errors[] = "Please choose : M or F";
        }
      
        
       
        if (empty($_POST['email'])) {
            $errors[] = "E-mail address is required";
        } else {
           
            // Check Email is Unique in DB 

            $sql = "SELECT * FROM account WHERE user_Email=?";
            $result = $conn->prepare($sql);
            $result->execute(array($_POST['email']));
            $count = $result->rowCount();
            if ($count == 1) {
                $errors[] = "The e-mail already exist. Please connect.";
            }
        }

        // if (empty($_POST['phoneNumber'])) {
        //  $errors[] = "Veuiller rentrer votre numéro de téléphone";
        // }
        if (empty($_POST['pwd'])) {
            $errors[] = "Please insert a password.";
        } else {
            $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            // check the repeat password
            // if (empty($_POST['pwdRepeat'])) {
            //  $errors[] = "Confirmer votre mot de passe.";
            // } else {
            // compare both passwords, if they match. Generate the Password Hash
            //  if ($_POST['pwd'] == $_POST['pwdRepeat']) {
            // create password hash
            //       $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            //  } else {
            // Display Error Message
            //   $errors[] = "Les mots de passes doievent être identiques";
            //}
            //var_dump($_POST['firstName']);
            //var_dump($_POST['email']);
            //var_dump($pass_hash);
            // }
        }

        if (empty($errors)) {
            echo " inserting ";

            //  $longueurKey = 15;
            //  $key = "";
            // for ($i = 1; $i < $longueurKey; $i++) {
            //     $key .= mt_rand(0, 9);
            //}

            $sql = "INSERT INTO account (User_FName, User_SName, user_Email, User_Password, User_Phone_Number , User_Sex) 
            VALUES ( :User_FName, :User_SName, :user_Email,   :User_Password ,:User_Phone_Number, , :User_Sex)";
            $result = $conn->prepare($sql);
            $values = array(

                ':User_FName'     => $_POST['firstName'],
                ':User_SName'     => $_POST['lastname'],
                ':user_Email'        => $_POST['email'],
                ':User_Password'     => $pass_hash,
                ':User_Phone_Number'     => $_POST['user_number'],
                
                ':User_Sex'        => $_POST['user_sex'],
                
               
                

             
             
                
                
                

            );
            $res = $result->execute($values);
            if ($res) {
                echo "YOU ARE IN !";
                //      $messages[] = "YOU ARE IN !";
                //       $messages[]= 'An confirmation e-mail have been send to this address' .$_POST['email']. '. ';
                /*
            if ($confirmationMail ){
                $messages[]= 'Un e-mail de confirmation à été envoyé à l&apos;addresse suivante : ' .$_POST['email']. '. ';
            } else{
                $errors[] = " EMAIL NOT SEND ";
            }
            */
            } else {
                $errors[] = "not in ";
            }
        } else {

            $errors[] = "not inserting";
           // var_dump($errors);
        }

        //var_dump($errors);
        // echo "</br>";

        // var_dump($messages);
    }
    ?>
    <!-- END --- SIGN UP PHP SCRIPT-->
        <!-- CREATE AN ACCOUNT  -->
       
 
        
        
<div class="form-container sign-up-container " >
   <!--<div class="sign-up-container form-containe text-center">-->
   <form action="#" class="form-id" method="post">
      <h1>Create Account</h1>
       <div class="row">
    <div class="col">
       <input type="firstname" placeholder="First Name" name="firstName"  value=""/>
    </div>
    <div class="col">
      <input type="lastname" placeholder="Last Name" name="lastname"  value="" />
    </div>
    
  </div>
     
      
      <input type="email" placeholder="Email" name="email"  value=""/>
      <input type="password" name="pwd" value="" />
      <input type="number" placeholder="Contact No" name="user_number"  value="" />
      <!--<input type="text" placeholder="Street"  name="user_street"  value=""/>
      <input type="text" class="small-input" placeholder="County"  name="user_county"  value=""/>
      <input type="text" class="small-input" placeholder="Country" name="user_country"  value=""/>
      <input type="text" class="small-input" placeholder="City" name="user_city"  value=""/>
      <input type="text" class="small-input" placeholder="Post Code" name="user_postCode"  value=""/>-->
       
    
       <div class="row">
    <div class="col">
      <input type="radio" id="male" name="user_sex" value="Male">
       <label for="male">Male</label>
    </div>
    <div class="col">
     <input type="radio" id="female" name="user_sex" value="Female">
  <label for="female">Female</label>
    </div>
    
  </div>
       
      <input  style="margin-top:15px"  type="submit" name="signup_submit" value="Sign Up">
   </form>
   <!-- message  -->
   <?php
      if (!empty($errors)) {
          var_dump($errors);
          //var_dump($_POST['email']);
      }
      
      
      ?>
</div>
        
        
        
        <!--END  CREATE AN ACCOUNT  -->
        
        <!-- LOG IN SCRIPT -->
        <?php
        if (isset($_POST['submit_Login']) & !empty($_POST['submit_Login'])) {
            // PHP Form Validations
            if (empty($_POST['email'])) {
                // header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
                //  exit();
                $errors[] = "emptyinputemail";
            }



            if (empty($_POST['pwd'])) {
                // header("location: /pages/connexion.php?error=emptyinput");
                $errors[] = "emptyinputpwd";
            }



            if (empty($errors)) {
                // Check the Login Credentials

                $sql = "SELECT * FROM account WHERE user_Email=? ";

                $result = $conn->prepare($sql);
                $result->execute(array($_POST['email']));
                $count = $result->rowCount();
                $res = $result->fetch(PDO::FETCH_ASSOC);
                if ($count == 1) {
                    // Compare the password with password hash
                    if (password_verify($_POST['pwd'], $res['User_Password'])) {
                        // regenerate session id
                        //session_start();
                        // $_SESSION['login'] = true;
                        //  $_SESSION['standardUserId'] = $res['standard_user_id'];
                        // $_SESSION['userEmail'] = $res['user_email'];
                        // $_SESSION['last_login'] = time();
                        // session_start();

                        // redirect the user to members area/dashboard page
                        header("location: /index.php");
                        exit;
                    } else {
                        //  header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");
                        // exit();
                        $errors[] = "wronglogin";
                    }
                } else {

                    // header("location: /pages/connexion.php?error=unknowDetail");   
                    //exit();
                    $errors[] = "unknowDetail";
                }
            }
        }

        ?>
        <!-- END LOG IN PHP SCRIPT -->
        <div class="form-container sign-in-container">
            <form action="#" style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" />
                <input type="password" placeholder="Password" name="pwd" value=""/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a
                        href="" style="margin-bottom:10px">Here</a></a>

                <input class="ghost" type="submit" name="submit_Login" value="Sign In">
                <!-- message  -->
                    <?php
                    if (!empty($errors)) {
                        var_dump($errors);
                        var_dump($_POST['email']);
                    }


                    ?>
            </form>
        </div>
        
       
        
        
        <!-- END LOG IN  -->
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
                    <button class="ghost" id="signUp" onclick="signUp()">Sign Up</button>
                </div>
            </div>
        </div>
    </div>







    <section class="footerMenu">
        <div class="footer-menu-sub-container">
            <div class="footer-menu-sub-container-box">
                <h2>LOGO</h2>
            </div>
            <div class="footer-menu-sub-container-box">
                <p>Manufacturer of performance custom computers and laptops. Customise your ideal gaming PC or laptop
                    using our advanced configurator.</p>
            </div>
            <div class="footer-menu-sub-container-box">
                <span>Contact Us</span>
                <h3> 0333 011 7000 | Open Now</h3>
            </div>
            <div class="footer-menu-sub-container-box"><img src="img/UK_Payment Logos_Footer.webp" alt=""></div>
        </div>
        <div class="footer-menu-sub-container-links">

            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Terms & Conditions</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Privacy and Legal</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Corporate Responsibility</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Disclaimer</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Site Map</a>
                    </li>
                </ul>
            </div>
            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Contact Us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Returns Poicy</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Warranty</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">FAQs</a>
                    </li>

                    <li class="footerMenu__listItem">
                        <a href="" class="link">Right to Cancel</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Payment Options</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Vacancies</a>
                    </li>
                </ul>
            </div>
            <div class="footerMenu__container">
                <ul class="footerMenu__list">
                    <li class="footerMenu__listItem">
                        <a href="" class="link">About us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Careers</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Corporate Events</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Why buy from us</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Our Service</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Finance</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link">Testimonials</a>
                    </li>
                    <li class="footerMenu__listItem">
                        <a href="" class="link"><strong>COMPUK</strong> terms</a>
                    </li>

                </ul>
            </div>

        </div>

    </section>



    <footer class="legalFooter">
        <div class="legalFooter__description">
            <p>© <STrong>COMPUK</STrong> Cinemas Limited 2019 to 2022. All rights reserved</p>
        </div>
        <div class="legalFooter_socialIcons">
            <img src="img/facebook.png" alt="">
            <img src="img/instagram.png" alt="">
        </div>

    </footer>


</body>

</html>
