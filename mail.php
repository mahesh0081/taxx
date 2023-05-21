<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

$mail = new PHPMailer(true);
try {
  
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'maheshsona28@gmail.com';
    $mail->Password   = 'jvxgzvqisnnlxhpi';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    

    $mail->setFrom('maheshsona28@gmail.com');
    $mail->addAddress('maheshsonawane2811@gmail.com');

    

    $mail->isHTML(true);
    $mail->Subject = 'Contact US';
    $mail->Body    = "Name: $name <br> Email: $email<br> Contact: $contact <br> City: $city <br> Message: $message";

  
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
}
 
