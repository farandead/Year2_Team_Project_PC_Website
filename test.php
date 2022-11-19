

<?php
$servername = "localhost";
$username = 'babimors_astonTeam';
$password ='HW#1o.5=#cl+';

try {
  $conn = new PDO("mysql:host=$servername;dbname=babimors_compuk", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


   <div class="form-container sign-in-container">
            <form action="PHP/logIn_inc.php" style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" />
                <input type="password" placeholder="Password" name="pwd" value=""/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a
                        href="" style="margin-bottom:10px">Here</a></a>

              <button class="ghost" name="submit_Login" >Sign In</button>
                <!-- message  -->
                    <?php
                    if (!empty($errors)) {
                        var_dump($errors);
                        //var_dump($_POST['email']);
                        var_dump(password_verify($_POST['pwd'], $res['User_Password']));
                        var_dump($res['User_Password']);
                        var_dump($_POST['pwd']);
                       
                    }


                    ?>
            </form>
        </div>

        
