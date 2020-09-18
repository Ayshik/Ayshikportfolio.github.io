<?php
$result="";
 if(isset($_POST['submit'])){

	 require 'PHPMailerAutoload.php';
	 $mail =new PHPMailer;

	 $mail ->Host='smtp.gmail.com';
   $mail ->Port=587;
   $mail ->SMTPAuth=true;
   $mail ->SMTPsecure='tls';
   $mail ->Username='wali.mosnad.ayshik@gmail.com';
    $mail ->Password='ayshikmee1998';

$mail->setFrom($_POST['email']);
$mail->addAddress('ayshikmee@gmail.com');
$mail->addReplyTo($_POST['email']);


$mail->isHTML(true);
$mail->Subject='Form Submission:  ' '.$_['subject']';
$mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>Subject:'.$_POST['subject'].'<br>Message: '.$_POST['msg'].'</h1>';

if (!$mail->send()){

$result="wrong"


}
else{
  $result="thanks for contact";
}









 }




?>
