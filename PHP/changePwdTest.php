<?php
session_start();
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
// Code for change password	
if(isset($_POST['submit']))
	{
$password= $_POST['password'] ;
$newpassword=password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
$user_email=$Mail;


$pwdHashed = $info["user_pwd"];

$checkPwd =  password_verify($password, $pwdHashed);
if ($checkPwd === false) {
        $error="Le mot de passe actuel n'est pas valide.";
    } else if ($checkPwd === true) {
        
        if($_POST['newpassword'] == $_POST['confirmpassword']){
            $con="UPDATE standardUser SET 	user_pwd=:newpassword WHERE user_email=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $user_email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$changeSucc = $chngpwd1->execute();
if ($changeSucc){
$msg="Votre mot de passe à été changer avec succés !";
} else {
        $error="Nous n'avons pas pû changer votre mot de passe. Veuillez contacter le service client.";
}
        } else {
         $error="Erreur de confirmation: Les mots de passe ne correspondent pas !";
         
        }
        
       
}
    

}
?>
        <div class="col-md-4">
            <form name="chngpwd" method="post" action="" onSubmit="">


 <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Changer Mot de Passe</span></div><br>
                <div class="col-md-12"><label class="labels">Mot de Passe Actuel</label><input type="password" class="form-control" name="password" id="password" required></div> <br>
                <div class="col-md-12"><label class="labels">Nouveau Mot de Passe</label><input type="password" class="form-control" placeholder="nouveau mot de passe" name="newpassword" id="newpassword" required></div>
                <div class="col-md-12"><label class="labels">Confirmation Mot de Passe</label><input type="password" class="form-control" placeholder="confirmer mot de passe" name="confirmpassword" id="confirmpassword" required></div>
            <?php if($error){?><div class="errorWrap"><?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><?php echo htmlentities($msg); ?> </div><?php }?>
            
            <div class="mt-5 text-center"><input class="btn   profile-button" type="submit" name="submit" value="Sauvergarder" class="btnSubmit"></div>
            
            
            </div>

</form>

        </div>
