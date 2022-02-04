<?php 
//datebase Connection

$db = mysqli_connect('localhost', 'mahmudbakale', 'root', 'ola');


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


 $to= 'info@olabdelintl.ng, abdelhafeez@olabdelintl.ng, mail.mahmud.bakale@gmail.com';

 $headers = "From:".$email."\r\n";
 $headers .= "Reply-To:".$email." \r\n";
 $headers .= "Return-Path: info@olabdelintl.ng\r\n";
 $headers .= "CC: kokohadiza@gmail.com\r\n";
 $headers .= "BCC: bakale.mahmud@gmail.com\r\n";

 if ( mail($to,$subject,$message,$headers) ) {
     $query = mysqli_query($db, "INSERT INTO `contacts`(`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES (NULL,'$name','$email','$subject','$message',NOW(),NOW())");
    header('location:/sendmail');
    } else {
    
    }

 ?>