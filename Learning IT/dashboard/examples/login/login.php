<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include "../connection.php";

if(isset($_POST['sign'])){
	$name=$_POST['uname'];
	$pw=$_POST['pw'];
$sql="select * from accounts where username='$name'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res) >0){
	$sql="select * from accounts where password='$pw' and username='$name'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)==1){
	$_SESSION['id']=$row['id'];
	$_SESSION['username']=$row['username'];
	$_SESSION['utype']=$row['utype'];
	$_SESSION['prflimg']=$row['prflimg'];
	$_SESSION['mail']=$row['email'];
	$_SESSION['firstnm']=$row['firstnm'];
	$_SESSION['lastnm']=$row['lastnm'];
	$_SESSION['password']=$row['password'];
}
else{
	$_SESSION['status']="Password is Incorrect";

}

}
else{
	$_SESSION['status']="Username is Incorrect";


}

if(isset($_SESSION['id'])){
		header('location:../tables.php');
}



}


 
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
	  <link rel="icon" sizes="150x150" href="../logo2.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="css/style.css">

	</head>


	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content " style="background:rgba(0,0,0,0.9)">
      <div class="modal-header border-0">
        <h5 class="modal-title text-white text-center font-weight-bold text-uppercase " id="exampleModalLabel" style="text-shadow:1px 1px 15px white;">Forget Your Password <i class="fa fa-pencil" aria-hidden="true"></i></h5>
        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body ">
        
                         <div class="form-group">
                          <label class="bmd-label-floating">Enter The Verification Code</label>
                          <input type="text" class="form-control form-control-sm" name="fname" value="">
                        </div>
                       

        
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-danger bg-transparent border border-danger btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success bg-transparent border border-success btn-sm" name="rply">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>


                            
                      

                                <?php 
								
								
                               
                               
                                
                                
                                
                                ?>


	<body class="img js-fullheight" style="background:radial-gradient(#004e92,#000428);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
				<?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-Danger  alert-dismissible fade show" role="" style="background:transparent; border:none;">
                             <?php echo $_SESSION['status']; ?>
                            <button type="button" class="fa fa-times bg-transparent text-white" data-bs-dismiss="alert" aria-label="Close" style="border:none;"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
				 


<?php 
if(isset($_POST['code'])){
	$requir=" ";
   $name=$_POST['uname'];
   $sql="select * from accounts where username='$name'";
   $res=mysqli_query($con,$sql);

   $row=mysqli_fetch_array($res);

require '..\phpmailer/includes/PHPMailer.php';
require '..\phpmailer/includes/SMTP.php';
require '..\phpmailer/includes/Exception.php';

$mailid=$row['email'];
$id=$row['id'];
$mailing="<html><body><div style='background:linear-gradient(80deg,#2193b0,#6dd5ed); border-radius:20px; padding:10px; text-align:center; color:purple; text-shadow:1px 1px 10px purple;'><h3>Click The Button and Reset Your password</h3>";
$mailing.="<a href='http://192.168.8.2/teamproject/dashboard/examples/login/forget.php?id=$id' style='background:linear-gradient(80deg,#cc2b5e,#753a88); text-decoration:none; padding:10px; border-radius:20px; color:white;'>Reset Your Password</a>";
$mailing.="</div></body></html>";




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
$mail->Subject = "reply From LIT Team";
//Set sender email
$mail->setFrom('litlearningteam@gmail.com',"From LIT Team");
//Enable HTML
$mail->isHTML(true);
//Attachment
//$mail->addAttachment('img/attachment.png');
//Email body
$mail->Body =$mailing;
//Add recipient
$mail->addAddress($mailid);
//Finally send email
if ( $mail->send() ) {
//	echo "Email Sent..!";
$_SESSION['status']="Check Your Email";
echo "<script>alert('Check Your email')</script>";

}else{
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$mail->smtpClose();

//is set

}




?>
		      	<form  class="signin-form" method="post" enctype="multipart/form-data" action="">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="uname" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password"  name="pw"  value="" >
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-success submit px-3" name="sign" style="background:linear-gradient(80deg,#43cea2 , #185a9d);">Sign In</button>
	            </div>
	          
	           
		            		<!--<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>-->
							
									<input type="submit" value="reset" name="code" class="form-control btn btn-warning " style="background:linear-gradient(190deg,#43cea2 , #185a9d);">
								
	            

	          </form>

<?php ?>
			  <!--
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
			   -->
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

