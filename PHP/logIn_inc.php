<?php
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
}
?> 

<?php
        $Noerrors = 1 ;
            // PHP Form Validations
            if (empty($_POST['email'])) {
                // header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
                //  exit();
                echo "emptyinputemail";
                $Noerrors = 2;
            }
            if (empty($_POST['pwd'])) {
                // header("location: /pages/connexion.php?error=emptyinput");
                echo "emptyinputpwd";
                
                $Noerrors = 2;
            }

            if ($Noerrors = 1) {
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
        
                        // redirect the user to main page
                        header("location: /index.php");
                        exit;
                        //echo "Valid";
                       
                    } else {
                          header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");
                         exit();
                       //echo  "wrong login ";
                        
                      
                    }
                    
                    
                    
                } else {

                    // header("location: /pages/connexion.php?error=unknowDetail");   
                    //exit();
                    header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");
                    exit();
                }
            }
        

        ?>
        <!-- END LOG IN PHP SCRIPT -->
