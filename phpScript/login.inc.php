if (isset($_POST['submit_Login']) & !empty($_POST['submit_Login'])) {
// PHP Form Validations
if (empty($_POST['email'])) {
    header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
    exit();
  
}
if (empty($_POST['pwd'])) {
     header("location: /pages/connexion.php?error=emptyinput");   
    exit();
}
// CSRF Token Validation
if (isset($_POST['csrf_token'])) {
    if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
    } else {
        $errors[] = "Problem with CSRF Token Validation";
    }
}
// CSRF Token Time Validation
$max_time = 60 * 60 * 24; // in seconds
if (isset($_SESSION['csrf_token_time'])) {
    $token_time = $_SESSION['csrf_token_time'];
    if (($token_time + $max_time) >= time()) {
    } else {
        $errors[] = "CSRF Token Expired";
        unset($_SESSION['csrf_token']);
        unset($_SESSION['csrf_token_time']);
    }
}

if (empty($errors)) {
    // Check the Login Credentials
    $sql = "SELECT * FROM standardUser WHERE user_email=? ";

    $result = $dbh->prepare($sql);
    $result->execute(array($_POST['email']));
    $count = $result->rowCount();
    $res = $result->fetch(PDO::FETCH_ASSOC);
    if ($count == 1) {
        // Compare the password with password hash
        if (password_verify($_POST['pwd'], $res['user_pwd'])) {
            // regenerate session id
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['standardUserId'] = $res['standard_user_id'];
            $_SESSION['userEmail'] = $res['user_email'];
            $_SESSION['last_login'] = time();
            session_start();

            // redirect the user to members area/dashboard page
            header("location: /index.php");
            exit;
        } else {
            
             header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");   
    exit();
        }
    } else {
        
        header("location: /pages/connexion.php?error=unknowDetail");   
    exit();
    }
}
} 
?>
