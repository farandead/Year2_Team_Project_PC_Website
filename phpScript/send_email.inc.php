<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/Exception.php';
require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/PHPMailer.php';
require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/SMTP.php';

function sendMail($emailFrom,$email_from_alias,$email_to, $object, $body){



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;  
$mail->SMTPAuth = true;  // Authentification SMTP active
$mail->Host = 'mail.motorsfeere.com';              
$mail->Port = 	465;                          
$mail->SMTPAuth = 1;                        
$mail->CharSet = 'UTF-8';


if($mail->SMTPAuth){
   $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  $emailFrom;    
   $mail->Password   =  '7Cx,iJ.;P.gO';        
}

$mail->From       = trim($emailFrom);              
$mail->FromName   = trim($email_from_alias);          

$mail->AddAddress(trim($email_to));

$mail->Subject    =  $object;                    
$mail->WordWrap   = 50; 			       
$mail->Body = $body; 	       
$mail->IsHTML(true);                               

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
// echo 'Message bien envoyé';
     
}

}
