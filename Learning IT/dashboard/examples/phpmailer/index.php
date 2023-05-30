<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Define name spaces
if(isset($_POST['btn'])){
	
	$to=$_POST['mail'];
	$msg=$_POST['subject'];
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
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('litlearningteam@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body =$msg;
//Add recipient
	$mail->addAddress($to);
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	$mail->smtpClose();
}//is set
//Closing smtp connection

?>
	


	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>

	<form action="" method="post">
	
	<input type="email" name="mail" id="">

	<textarea name="subject" id="" cols="30" rows="10"></textarea>

	<input type="submit" value="sent" name="btn">
	
	
	
	
	</form>
		
	</body>
	</html>