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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">


    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="js/toggle_switch.js"></script>
    <script>

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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


    <!-- <header class="navigationBar" id="navigationLightMode" style="margin-top:-50px">
        <div id="navbar">
            <div id="logoblock">
                <a href="index.php" class="link">

                    <img class="img-logo" src="img/Logo1.png" alt="Logo">
                    <p id="logoMovie" style="color:white">
                        LOGO

                    </p> 

                </a>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="about_us.php">
                        <p>About Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Desktop%20pc">
                        <p>Desktops PCs</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Laptops">
                        <p>Laptops</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="contact_us.html">
                        <p>Contact Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="#">
                        <p>Reviews</p>
                    </a></li>
            </div>


            <div id="membershipblock">

                <li>
                    <a href="#">

                        <div class="icon">
                            <i class="fa fa-cart-arrow-down" style="font-size: xx-large;color:white"></i>

                        </div>


                    </a>
                </li>
                <br>
                <br>

                <li>
                    <i id="toggle_button_dark" class="bi bi-moon" onclick="myFunction()"></i> <i id="toggle_button"
                        style="display: flex;" class="bi bi-brightness-high-fill" onclick="myFunction()"></i>
                </li>


                <br>
                <br>
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search"
                            style="font-size: xx-large;color:white"></i> </a></li>
                <br>
                <br>
                <li><a class="sign-in-logo" class="link" href="Sign_up_new.php"> <i class="bi bi-person-fill"
                            style="font-size: xx-large;color:white"></i> </a></li>
            </div>
        </div>

    </header> -->

    <div class="navigation-bar"  id="navigationLightMode">
        <div class="navigation-logo">

         <a class="link" style="text-decoration: none; " href="index.php"><img class="img-logo" src="img/Logo1.png" alt="Logo"></a>

        </div>
        <div class="navigation-menu">
            <ul>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Desktop%20pc">
                        <p>Desktops PCs</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Laptops">
                            <p>Laptops</p>
                </a></li>
                <li class="navbaritem"><a class="link" href="about_us.php">
                        <p>About Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="contact_us.php">
                        <p>Contact Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="#">
                        <p>Reviews</p>
                    </a></li>
            </ul>

        </div>
        <div class="navigation-icons">

            <ul>
                <li>
                    <i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i> 
                    <i id="toggle_button"style="display: flex;color:white;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>
             <?php if (isset($_SESSION['login'])){ ?>
                  <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="user_page.php">Profile</a>
                    <a class="dropdown-item" href="PHP/signOut.inc.php">Log Out </a> 
                  </div>
                </div>
                <?php
}else {
    ?>
                <li><a class="sign-in-logo" class="link" href="Sign_up_new.php"> <i class="bi bi-person-fill"
                            style="color:white"></i> </a></li>
                <?php
} ?>
                
               
                
                
                <li><i class="fa fa-cart-arrow-down" style="font-size: xx-large;color:white"></i></li>

            </ul>
        </div>
    </div>
</body>
