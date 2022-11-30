<?php
require "PHP/CheckAdminAccess.php";
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/header.css">

<head>
<?php include 'header.php'; ?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        
    
        </script>
        <style>
            body {
                margin-top:;
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
<header>
            <!--Admin Panel-->
            <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</header>

        </body>
<!--Accept Admin Table-->
<section class ="table">
    <div class="container1 d-flex justify-content-center align-items-center py-2">
      <div class="row"></div>
      <h1>Admin Authorisation</h1>
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
