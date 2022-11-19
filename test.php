

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


    <div class="container" id="container123">
        <div class="form-container sign-up-container">
            <form action="/PHP/signUp_inc.php" class="form-id" method="post">

                <h1>Create Account</h1>

              <input type="firstname" placeholder="First Name" name="firstName"  value=""/>
              <input type="lastname" placeholder="Last Name" name="lastname"  value="" />
              <input type="email" placeholder="Email" name="email"  value=""/>
              <input type="password" name="user_pwd" value="" />
              <input type="number" placeholder="Contact No" name="user_number"  value="" />
                 
               <!-- <input type="text" placeholder="Street" name="user_street" value="" />
                <div class="small-container">
                    <input type="text" class="small-input" placeholder="County" name="user_county" value="" />
                    <input type="text" class="small-input" placeholder="Country" name="user_country" value="" />
                </div>
                <div class="small-conatainer-2">
                    <input type="text" class="small-input" placeholder="City" name="user_city" value="" />
                    <input type="text" class="small-input" placeholder="Post Code" name="user_postCode" value="" />
                </div> -->
                <button style="margin-top:15px ;" type="submit" name="signup_submit">Sign Up</button>
                <!--<input  style="margin-top:15px"   value="Sign Up">-->
            </form>
            <?php
            if (!empty($errors)) {
                var_dump($errors);
            }
            ?>
        </div>
        <!--END  CREATE AN ACCOUNT  -->

        
