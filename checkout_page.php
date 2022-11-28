<?php ob_start();
session_start();

if(isset($_GET['ProductID']) and ($_SESSION['login'])){
    
    $idpr=$_GET['ProductID'];
require "PHP/connect_db.php";
$sql = "SELECT * FROM Product WHERE Product_ID=$idpr";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    if($rowcount=1){
    $product=mysqli_fetch_assoc($result);
    }
    else{header("Location: index.php");}
}else{header("Location: index.php");}
    
    
    
}else{
header("Location: index.php");
}

?>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <script src="js/toggle_switch.js"></script>
    <link rel="stylesheet" href="css/checkout_page.css">


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
<!-- font-family: 'Staatliches', cur sive; -->
<!-- font-family: 'Russo One', sans-serif; -->


<body style="background:none ;">

    <header class="navigationBar" id="navigationLightMode" style="margin-bottom:100px ;">
        <ul id="navbar">
            <div id="logoblock">
                <a href="mainpage.php" class="link">
                    <p id="logoMovie" style="color:white">
                        LOGO

                    </p>
                </a>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="filmPage.html">DESKTOP PCs</a></li>
                <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
                <li class="navbaritem"><a class="link" href="contact_us.html">CONTACT US</a></li>
                <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
            </div>

            <div id="membershipblock">



                <li><i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i> <i id="toggle_button"
                        style="display: flex;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>


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
        </ul>
    </header>



    <div class="mainscreen dark_target">
        <div class="card">
            <div class="leftside">
               <img src="img/AGILITY_PRO.webp" alt="">
            </div>
            <div class="rightside dark_target" >
                <form action="">
                    <p id="product_name">PRODUCT NAME</p>
                    <p id="payment_information_heading">Payment Information</p>
                    <p>Cardholder Name</p>
                    <input type="text" class="inputbox dark_target" name="name" required />
                    <p>Card Number</p>
                    <input type="number" class="inputbox dark_target " name="card_number" id="card_number" required />

                    <p>Card Type</p>
                    <select class="inputbox dark_target" name="card_type" id="card_type" required>
                        <option value="">--Select a Card Type--</option>
                        <option value="Visa">Visa</option>
                        <option value="RuPay">RuPay</option>
                        <option value="MasterCard">MasterCard</option>
                    </select>
                    <div class="expcvv dark_target">

                        <p class="expcvv_text">Expiry</p>
                        <input type="date" class="inputbox dark_target" name="exp_date" id="exp_date" required />

                        <p class="expcvv_text2 " >CVV</p>
                        <input type="password" class="inputbox dark_target " name="cvv" id="cvv" required />
                    </div>
                    <p></p>
                    <button type="submit" class="button">CheckOut</button>
                </form>
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
