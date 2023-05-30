



<!doctype html>
<html lang="en">
  <head>
  	<title>Forget Password</title>
	  <link rel="icon" sizes="150x150" href="../logo2.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="css/style.css">

	</head>



                            
                      

                                <?php 
                                session_start();
                                include "../connection.php";
                                if(isset($_POST['reset'])){
                                    $id=$_GET['id'];
                                    $pw=$_POST['pw'];
                                    $cpw=$_POST['cpw'];
                                    if( $pw == $cpw){
                             $sql="update accounts set password ='$pw' where id='$id'";
                             $res=mysqli_query($con,$sql);
                                 if($res){
                             
                                       echo "<script>alert('Successfully Reset Your Password')</script>";
                                       
                                       echo "<script>window.location.href='login.php';</script>";


                                 }      
                                    }

                                }
								
                               
                               
                                
                                
                                
                                ?>


	<body class="img js-fullheight" style="background:radial-gradient(#004e92,#000428);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to Forget Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                    
		      	<h3 class="mb-4 text-center">Reset Your Password</h3>
                  <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-Danger text-center alert-dismissible fade show" role="" style="background:transparent; border:none;">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="fa fa-times bg-transparent text-white" data-bs-dismiss="alert" aria-label="Close" style="border:none;"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

		      	<form  class="signin-form" method="post" enctype="multipart/form-data" action="">
                  <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password"  name="pw" required>
				  
	              
	            </div>
	            <div class="form-group">
	              <input id="passwordr" type="password" class="form-control" placeholder="Confirm Password"  name="cpw" required>
	             
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="reset">Reset</button>
	            </div>
	           
	            </div>
	          </form>
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

	<script>
	$(document).ready(function(){

	


	});
	
	
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

