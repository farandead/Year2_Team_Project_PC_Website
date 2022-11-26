<?php /*
$servername = "localhost";
$username = 'babimors_astonTeam';
$password = 'HW#1o.5=#cl+'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=babimors_compuk", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully"; 
} catch (PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
} */
?> 

<?php
       
  if (isset($_POST['submit_Login']) ) {
      
 
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

            if (empty($errors)) {
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
                       /* session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['user_Email'] = $res['user_Email'];
                        $_SESSION['User_FName'] = $res['User_FName'];
                        $_SESSION['User_SName'] = $res['User_SName'];
                        $_SESSION['last_login'] = time();
                        session_start();*/
        //$succesM[] = "Success You are connected";
                        // redirect the user to main page
                       //header("location: /index.php");
                       header("Location: http://www.facebook.com");
                       exit;
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
        <!-- END LOG IN PHP SCRIPT -->
