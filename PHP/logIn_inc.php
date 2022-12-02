<?php session_start();

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
    if (isset($_POST['submit_Login']) ) {
            // PHP Form Validations
            if (empty($_POST['email'])) {
              
             header("location: https://comp-uk.motorsfeere.com/Sign_up_new.php?error=emptyinput");   
            exit();
            }
            if (empty($_POST['pwd'])) {
               
                header("location: https://comp-uk.motorsfeere.com/Sign_up_new.php?error=emptyinput");   
                 exit();
                
            }

            if (empty($errors)) {
                // Check the Login Credentials
                $sql = "SELECT * FROM account WHERE user_Email=? ";
                $result = $conn->prepare($sql);
                $result->execute(array($_POST['email']));
                $count = $result->rowCount();
                $res = $result->fetch(PDO::FETCH_ASSOC);
                
                if ($res) {
                    // Compare the password with password hash
                   
                    if (password_verify($_POST['pwd'], $res['User_Password'])) {
                        
                        //regenerate session id
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['User_ID'] = $res['User_ID'];
                        $_SESSION['user_Email'] = $res['user_Email'];
                        $_SESSION['User_FName'] = $res['User_FName'];
                        $_SESSION['User_SName'] = $res['User_SName'];
                        $_SESSION['User_Status'] = $res['User_Status'];
                        $_SESSION['User_Password'] = $res['User_Password'];
                        $_SESSION['User_Phone_Number'] = $res['User_Phone_Number'];
                        
                        
                        session_start();
                    
                        $succesM[] = "Success You are connected";
                        // redirect the user to main page
                       header("location: /index.php");
                     
                     
                    } else {
                        
                      
                        header("location: https://comp-uk.motorsfeere.com/Sign_up_new.php?error=wronglogin");   
                    exit();
                        
                      
                    }
                } else {

                
                    header("location: https://comp-uk.motorsfeere.com/Sign_up_new.php?error=unknowDetail");   
    exit();
                }
            }
  } else {
     
  }


