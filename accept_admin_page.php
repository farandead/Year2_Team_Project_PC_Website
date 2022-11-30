<?php
require "PHP/CheckAdminAccess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie -Your One Stop Source of Unlimited Movies</title>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
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
    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="js/toggle_switch.js"></script>
    
    
   
   

</head>
<div class="navigation-bar"  id="navigationLightMode">
        <div class="navigation-logo">

         <a  style="text-decoration: none;" href="index.php"><img class="img-logo" src="img/Logo1.png" alt="Logo"></a>

        </div>
        <div class="navigation-menu">
            <ul>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Desktop%20pc">
                        <p style="color:white">Desktops PCs</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Laptops">
                            <p style="color:white">Laptops</p>
                </a></li>
                <li class="navbaritem"><a class="link" href="about_us.php">
                        <p style="color:white">About Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="contact_us.php">
                        <p style="color:white">Contact Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="#">
                        <p style="color:white">Reviews</p>
                    </a></li>
            </ul>

        </div>
        <div class="navigation-icons">

            <ul>
                    <li><i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i></li> 
                    <li><i id="toggle_button"style="display: flex;color:white;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>
                    <li><a href="ShoppingCart.php"><i class="fa fa-cart-arrow-down" style="font-size: xx-large;color:white"></i></a></li>
                    
<?php if (isset($_SESSION['login'])){ ?>
                    
                    <li><a title="Profile page" href="userprofile.php" class="link sign-in-logo dropdown-toggle" type="link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill" style="color:white"> </i></a></li>
                    <li><a title="Log out" class="dropdown-item" href="PHP/signOut.inc.php"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
   <?php }else { ?>
                    <li><a class="sign-in-logolink" href="Sign_up_new.php"><i class="bi bi-person-fill" style="color:white"></i></a></li>
     <?php } ?>


            </ul>
                
               
        
                
        </div>
                
    </div>
            
            <!--Admin Panel-->
        <div class="container-fluid">
            <div class="row">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-4" style="margin-top: -15px;">
        <a href="#" class="navbar-brand">Admin</a>
 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
 
         <div class="collapse navbar-collapse" id="navmenu">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a href="accept_admin_page.html" class="nav-link">Admin applications</a>
                 </li>
                 <li class="nav-item">
                     <a href="orders_management.php" class="nav-link">Order management</a>
                 </li>
                 <li class="nav-item">
                     <a href="accounts_base_page.php" class="nav-link">Accounts page</a>
                 </li>
                 
                 
             </ul>
 
         </div>
     </div>
    </nav>
</div>
</div>
</header>

<!--Accept Admin Table-->
<section class ="table">
    <div class="container1 d-flex justify-content-center align-items-center py-2">
      <div class="row"></div>
      <h1>'</h1>
    </div>
  </div>

    <div class="container1 mt-5 d-flex justify-content-center align-items-center mt-5 py-5">
      <div class="row"></div>
      <h1>Adnin authorisation</h1>
    </div>
  </div>

<div class="container2 me-4 ms-4">
  <div class="row">
        <table id="example" class="table table-striped" style="width: 100%;">
          <thead>
              <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Name</th>
                <th>Admin or Non-Admin</th>      
              </tr>
                 
          </thead>
 <?php 
                        require "PHP/TableAdminsPrinterCollection.php";
                        ?>    
        </table>
    </div>
  </div>
</section>



      <script src="//code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
      <script src="./js/admin_data_table.js"></script>

      
</body>
</html
