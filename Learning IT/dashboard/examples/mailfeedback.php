<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
   require 'phpmailer/includes/PHPMailer.php';
   require 'phpmailer/includes/SMTP.php';
   require 'phpmailer/includes/Exception.php';
 
   
  if(isset($_POST['btn'])){
  include "connection.php";
  $name=$_POST['name'];
  $mailing="<html><body><div style='background:linear-gradient(80deg,#000428,#004e92); border-radius:20px; padding:10px; text-align:center; color:skyblue; text-shadow:1px 1px 20px  skyblue;'><h1 style='color:white;'>Dear $name<h1>";
  $mailing.="<h2>Thanks For Your Feedback</h2>";
  $mailing.="</div></body></html>";
 
  



    

    //$to=$_POST['mail'];
	///$msg=$_POST['subject'];
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "litlearningteam@gmail.com";
//Set gmail password
	$mail->Password = "fdsnwzukiribkvxl";
//Email subject
	$mail->Subject = "Thanking From LIT Team";
//Set sender email
	$mail->setFrom('litlearningteam@gmail.com',"From LIT Team");
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('phpmailer/img/thank.jpg');
//Email body
	$mail->Body =$mailing;
//Add recipient
	$mail->addAddress($_POST['mail']);
//Finally send email
	if ( $mail->send()){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $feed=$_POST['feed'];
    $sql="insert into feedback(name,email,feedback,date,status) values('$name','$mail','$feed',now(),'unseen')";
    $res=mysqli_query($con,$sql);
    if($res){
      echo "<script>alert('Feed back send Successfully')</script>";
      echo "<script>window.location.href='home.php';</script>";
    }
    else{
      die(mysqli_error($con));

    }
	//	echo "Email Sent..!";
	}else{
		echo  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	$mail->smtpClose();
}//is set



  


?>