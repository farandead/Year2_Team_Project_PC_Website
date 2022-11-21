<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
    <link rel="stylesheet" href="css/shopping.css">
    <link rel="stylesheet" href="css/mainpage.css">
</head>
<body>
<header class="navigationBar" id="navigationLightMode" >
    <ul id="navbar">
        <div id="logoblock">
            <a href="mainpage.php" class="link">
                <p id="logoMovie" style="color:white">LOGO</p>
            </a>
        </div>
        <div id="linksblock">
            <li class="navbaritem"><a class="link" href="filmPage.html">DESKTOP PCs</a></li>
            <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
            <li class="navbaritem"><a class="link" href="contact_us.html">CONTACT US</a></li>
            <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
        </div>
        <div id="membershipblock">
            <li><i id="toggle_button_dark" class="bi bi-moon" onclick="myFunction()"></i>
                <i id="toggle_button"
                   style="display: flex;" class="bi bi-brightness-high-fill" onclick="myFunction()"></i>
            </li>
            <br>
            <br>
            <li>
                <a class="searchLogo" class="link" href="">
                <i class="fa fa-search" style="font-size: xx-large;color:white"></i>
                </a>
            </li>
    </div>
    </ul>
</header>


<div class="shopping-box">
    <div class="shopping_con">
        <div class="shopping_title">PRODUCT LIST</div>
        <div class="shopping_list">
            <div>
                <div class="shopping_name">Computer name</div>
                <img src="img/Product IMG/Product image 1.png"/>
                <div class="center_title">New Arrival</div>
                <div class="shopping_details">
                    Product description Product description
                    Product description Product description
                </div>
                <div class="Shopping_Price">
                    <div class="price_left"><span>Price:</span> $1099</div>
                    <div class="price_right">
                        <div>-</div>
                        <div class="quantity">0</div>
                        <div>+</div>
                    </div>
                </div>
            </div>
            <div><img src="img/Product IMG/Product image 2.png"/></div>
            <div><img src="img/Product IMG/Product image 3.png"/></div>
            <div><img src="img/Product IMG/Product image 4.png"/></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="shoppCarImg"><img src="img/car.png"/></div>
<div class="shopCarMark">
    <div class="shopCarMark_con">

    </div>
    <div class="Total">Total price: $ <span class="priceT"></span></div>
    <div class="bottom_btn">
        <div class="close">Close</div>
        <div class="pay">Pay</div>
    </div>
<?php
    echo "test test!!!!!!!!!!";
    
    ?>
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
<script src="js/shopping.js"></script>

</body>
</html>
