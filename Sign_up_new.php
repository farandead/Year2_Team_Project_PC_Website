<!-- DATABASE CONNECTION -->
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
<!-- END DATABASE CONNECTION -->
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
        <div class="form-container sign-up-container">
            <form action="PHP/signUp_inc.php" class="form-id">

                <h1>Create Account</h1>

                <input type="firstname" placeholder="First Name" name="firstName"  value=""/>
              <input type="lastname" placeholder="Last Name" name="lastname"  value="" />
              <input type="email" placeholder="Email" name="email"  value=""/>
              <input type="password" name="user_pwd" value="" />
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
                <button style="margin-top:15px ;" type="submit" name="signup_submit">Sign Up</button>
                <!--<input  style="margin-top:15px"   value="Sign Up">-->
            </form>
            <?php
            if (!empty($errors)) {
                var_dump($errors);
            }
            ?>
        </div>
        <!--END  CREATE AN ACCOUNT  -->

       

         <div class="form-container sign-in-container">
            <form action="PHP/logIn_inc.php" style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" />
                <input type="password" placeholder="Password" name="pwd" value=""/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a
                        href="" style="margin-bottom:10px">Here</a></a>

              <button class="ghost" name="submit_Login" >Sign In</button>
                <!-- message  -->
                    <?php
                    if (!empty($errors)) {
                        var_dump($errors);
                        //var_dump($_POST['email']);
                        var_dump(password_verify($_POST['pwd'], $res['User_Password']));
                        var_dump($res['User_Password']);
                        var_dump($_POST['pwd']);
                       
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
