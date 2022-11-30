<?php
require "PHP/CheckAdminAccess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
        
 <title>COMPUK -Your One Stop Source of All Digital Needs</title>
</head>

<header>

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
      <h1>Orders Management Table</h1>
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
