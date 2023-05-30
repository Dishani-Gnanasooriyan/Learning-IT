<?php session_start();
 
  
 // Destroying session after 1 minute
 
    


?>


<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" sizes="150x150" href="logo2.png" type = "image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>
  LIT Team Dashboard
</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<style>


</style>


</head>
<?php 
include "connection.php";

if(isset($_SESSION['id'])){
if($_SESSION['utype']=='user'){

  $privilage="display:none;";
}



?>

<body class="dark-edition">
   <!--modal-->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content " style="background:rgba(0,0,0,0.7)">
      <div class="modal-header border-0">
        <h5 class="modal-title text-white text-center font-weight-bold text-uppercase " id="exampleModalLabel" style="text-shadow:1px 1px 15px white;">Edit Your Profile <i class="fa fa-pencil" aria-hidden="true"></i></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body ">
        
                         <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control form-control-sm" name="fname" value="<?php echo $_SESSION['firstnm']?>">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control form-control-sm" name="lname" value="<?php echo $_SESSION['lastnm']?>">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">User Name</label>
                          <input type="text" class="form-control form-control-sm" name="uname" value="<?php echo $_SESSION['username']?>">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control form-control-sm" name="email" value="<?php echo $_SESSION['mail']?>">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control form-control-sm" name="pwd" value="<?php echo $_SESSION['password']?>">
                        </div>
                        <label class="bmd-label-floating">Profile Picture</label>    
                        <input type="file"  name="pic" class="form-control mt-2 form-control-sm" accept=".jpg, .jpeg, .png"  >

        
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-danger bg-transparent border border-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success bg-transparent border border-success btn-sm" name="upd">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
    if(isset($_POST['upd'])){
      $img=$_FILES['pic']['name'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $uname=$_POST['uname'];
      $email=$_POST['email'];
      $pwd=$_POST['pwd'];
      $id=$_SESSION['id'];
      if(empty($_FILES['pic']['name'])){
        $img=$_SESSION['prflimg'];
      }
      $sql="update accounts set firstnm='$fname',lastnm='$lname',prflimg='$img',username='$uname',email='$email',password='$pwd' where id='$id'";
      $res=mysqli_query($con,$sql);
      if($res){
        move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
          $_SESSION['status']="Successfully updated";
          session_destroy();
          echo "<script>alert('logout Then Update Your Profiles')</script>";
          echo "<script>window.location.href='tables.php'</script>";
      }

    }


?>
<!--modal-->
  <div class="wrapper " style="background:radial-gradient(#004e92,#000428);">
    <div class="sidebar bg-transparent" data-color="azure" data-background-color="black" data-image="" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="home.php?dash=fa fa-tachometer&amp;page=accounts.php" class="simple-text logo-normal text-info "  style="text-align:center;  font-size:15px; font-weight:bold; text-shadow:1px 1px 15px #cb3379">
      <img src="logo2.png" heiht="70px" width="70px" class="" style="box-shadow: 1px 1px 20px 1px #cb3379 !important; border-radius:20px; margin-left:5px;" ><br>
      Hi <?php echo $_SESSION['username']?>
      <div class=" text-center text-light" style="font-size:10px;"> <i class="fa fa-circle text-success" aria-hidden="true"></i>&nbsp;online</div>
        </a>
        
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="tables.php">
            <i class="fa fa-book" aria-hidden="true"></i>
              <p>Modules</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="addnotes.php">
            <i class="fa fa-file-text" aria-hidden="true"></i>
              <p>Notes</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="feedback.php">
          <i class="fa fa-comments" aria-hidden="true"></i>
              <p>Feedbacks</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./cgd.php">
            <i class="fa fa-file-image-o" aria-hidden="true"></i>
              <p>Artworks</p>
            </a>
          </li>
          <li class="nav-item active " style="<?php echo $privilage?>">
            <a class="nav-link" href="accounts.php" >
            <i class="fa fa-user-plus" aria-hidden="true"></i>
              <p>Accounts</p>
            </a>
          </li>

          <li class="nav-item " >
            <a class="nav-link" href="login/logout.php" target="_self">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
              <p>Logout</p>
            </a>
          </li>
         
        
          
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"><?php echo $_SESSION['username']?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <?php
                  $sql="SELECT COUNT('status') FROM feedback  WHERE status = 'unseen'";
                  $res=mysqli_query($con,$sql);
                  $row=mysqli_fetch_array($res);
                  
                  
                  ?>
                  <span class="notification"><?php echo $row[0];?></span>
                  <?php ?>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                include "connection.php";
                                $sql="select * from feedback where status='unseen' order by date desc limit 5";
                                $res=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($res)){
                                  ?>
                  <a class="dropdown-item" href="feedback.php"><?php echo $row['name']?></a>
                  <?php } ?>
                  <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show text-dark" role="" style="background:transparent;">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="fa fa-times bg-transparent " data-bs-dismiss="alert" aria-label="Close" style="border:none;"></button>
                            </div>
                        <?php
                        //unset($_SESSION['result']);
                    }
                ?>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="pictures/<?php echo $_SESSION['prflimg']?>" alt="" class="rounded-circle" height="30px" width="30px">
                  <span class="notification"><?php echo substr($_SESSION['username'],0,1)?></span>
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="background:rgba(0,0,0,0.9)">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"><a href="" data-toggle="modal" data-target="#exampleModal" style="background:none; border:none; box-shadow:none;"><img src="pictures/<?php echo $_SESSION['prflimg']?>" alt="" class="rounded-circle mt-3" height="80px" width="80px" style=""> <span class="notification"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></span></a></div>
                <hr>
                <div class="col-md-4"></div>
                </div>
                  <p class="dropdown-item text-secondary font-weight-bold">First Name : <?php echo $_SESSION['firstnm']?></p>
                  <p class="dropdown-item text-secondary font-weight-bold">Last Name : <?php echo $_SESSION['lastnm']?></p>
                  <p class="dropdown-item text-secondary font-weight-bold">User Name : <?php echo $_SESSION['username']?></p>
                  <p class="dropdown-item text-secondary font-weight-bold">User Type : <?php echo $_SESSION['utype']?></p>
                  <p class="dropdown-item text-secondary font-weight-bold  ">Email : <?php echo $_SESSION['mail']?></p>
                  <a href="login/logout.php" target="_self" class="fa fa-sign-out  text-center text-primary form-control" style="font-size:16px; font-weight:bold; background:none;"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                  
                </div>
                  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
            
            <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="" style="background:transparent;">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="fa fa-times bg-transparent text-white" data-bs-dismiss="alert" aria-label="Close" style="border:none;"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
               
            

              <div class="card" style="background:rgba(0,0,0,.4)">
                <div class="card-header card-header-info">
                <form action="" method="post">
                  <?php 
                  if($_SESSION['utype']=='super_admin'){
                    
                   
                      
                    
                  ?>
             <input type="submit"  value="Enable Form Controls" class="btn  form-Control w-100 bg-transparent border border-warning" style="border-radius:20px; " name="btadd" id="btn">
             <?php }
             else{
              echo "<h4 class='text-center'>Add Members<h4>";
             }
             ?>
             </form>
                </div>
                <?php 
                    if(isset($_POST['btadd']))
                    {
                      $page="";
                      $sec="";
                      $disable="";
                      $none="";
                    } 
                    
                    else{
                      if($_SESSION['utype']=='super_admin' ){
                        $disable="disabled";
                        $none="display:none;";
                        $filename="accounts.php";
                     // $sec="5";
                     // header("Refresh:$sec;url=$page");
                      echo '<meta http-equiv="refresh" content="5;url=\''.$filename.'\'" />';   
                        }

                    }


                        ?>
                <div class="card-body" style="<?php  //echo $none ?>";>
                  <form method="post" action="addacount.php" enctype="multipart/form-data" name="myform">
                    <div class="row ">
                      
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="mail" required  <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Name</label>
                          <input type="text" class="form-control" name="uname" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" name="fname" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="lname" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <label class="bmd-label-floating">Profile Picture</label>    
                        <input type="file"  name="pic" class="form-control mt-2" accept=".jpg, .jpeg, .png" <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?> >
                      </div>
                      <!--
                      <div class="col-md-4 ">
                     <input type="file"  id="" class="" name="pic">
                      </div>
                                -->
                    </div>
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="pwd" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                        </div>
                      </div>
                      <div class="col-md-3 mt-4">
                      <div class="form-check">
  <input class="" type="radio" name="utype" id="flexRadioDefault1" value="admin" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
  <label class="form-check-label" for="flexRadioDefault1">
    Admin
  </label>
</div>
<div class="form-check">
  <input class="" type="radio" name="utype" id="flexRadioDefault2" value="user" required <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
  <label class="form-check-label" for="flexRadioDefault2">
    user
  </label>
</div>
                     
                      </div>
                    </div>
                    <input type="submit"  value="Update" class="btn btn-info pull-right " style="border-radius:20px" name="btn" id="btn" <?php if($_SESSION['utype']=='super_admin') {echo $disable;} ?>>
                    <div class="clearfix"></div>
                  </form>
                  
                </div>
                
              </div>

              
            </div>
                    <?php 
                    
                    ?>

              <div class="col-md-3">

              <div class="card" style="background:rgba(0,0,0,.4)">
                 <div class="card-header card-header-info">
                 <h4 class="card-title text-center text-white">Available Users </h4>
                </div>
             <div class="table-responsive ">
                    <table class="table table-hover">
                      <thead class="text-center "> 
                        <th class="text-info font-weight-bold text-uppercase">User Name</th>
                        <th class="text-info font-weight-bold text-uppercase">User Type</th>
                      </thead>
                      <tbody>

                      <?php
include "connection.php";
$sql="SELECT * from accounts where utype !='super_admin' ";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['username'];
    $type=$row['utype'];
    $id=$row['id'];

    //$desc=$row['mdesc'];
    // $mid=$row['mid'];
   // $img=$row['mimage'];
    // $img=$row['mimage'];
    
   if($_SESSION['utype']=='super_admin'){
    $privilage="";
   
      
    }

    else{
      $privilage="display:none;";


    }

    //$title=$row['mtitle'];
    ?>
                        <tr>
                          
                          <td class="text-white text-center">
                          <?php echo $name ?>
                            </td>
                            <td class="text-white text-center">
                          <?php echo $row['utype'] ?>
                            </td>
                            <td>
                            <a href="delete.php?acid=<?php echo $id ?>&amp;name=<?php echo $name ?>" data-bs-toggle="#" title="Delete" data-bs-target="#" style="<?php echo $privilage ?>" ><i class="fa fa-trash text-white mt-1 fa-1x" aria-hidden="true"></i></a>
                            </td>
                        </tr>

<!--modal-->

<!--modal-->

                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                    </div>
                   
              </div>
              
          </div>

          <hr class="bg-info">
                    <div class="row" style="<?php echo $privilage?>">
                    <div class="col-md-6">
                    <div class="card" style="background:rgba(0,0,0,.4)">
                 <div class="card-header card-header-info">
                 <h4 class="card-title text-center text-white">Pending List </h4>
                </div>
             <div class="table-responsive ">
                    <table class="table table-hover">
                      <thead class="text-center "> 
                        <th class="text-info font-weight-bold text-uppercase">User Name</th>
                        <th class="text-info font-weight-bold text-uppercase">Opponents</th>
                        <th class="text-info font-weight-bold text-uppercase">Supporters</th>
                        
                        
                      </thead>
                      <tbody>

                      <?php

                      
include "connection.php";
$sql="SELECT accounts.username,vote.delid from accounts inner join vote  on accounts.id=vote.delid group by vote.delid";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['username'];
    $id=$row['delid'];
    $sql6="select count('id') from accounts";
    $res5=mysqli_query($con,$sql6);
    $row3=mysqli_fetch_array($res5);
    $sql7="select count('vote') from vote where delid='$id'";
    $res6=mysqli_query($con,$sql7);
    $row4=mysqli_fetch_array($res6);
    $countac=$row3[0];
    $countvt=$row4[0];

    
    $sql1="select count('vote') from vote where vote='accept' and delid='$id'";
    $res1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($res1);
    $accept=$row1[0] ;
    $sql2="select count('vote') from vote where vote='daccept' and delid='$id'";
    $res2=mysqli_query($con,$sql2);
    $row2=mysqli_fetch_array($res2);
    $daccept=$row2[0];
    
    //$desc=$row['mdesc'];
    // $mid=$row['mid'];
   // $img=$row['mimage'];
    // $img=$row['mimage'];
    
   

    //$title=$row['mtitle'];
    ?>
                        <tr>
                          
                          <td class="text-white text-center">
                          <?php echo $name ?>
                            </td>
                            <td class="text-white text-center">
                             
                          <?php echo $accept?>
                            </td>
                            <td class="text-white text-center">
                            
                          <?php echo $daccept?>
                            </td>

                            <td class="text-white text-center">
                            <a href="delete.php?vid=<?php echo $id ?>" data-bs-toggle="#" title="Cancel" data-bs-target="#" style="<?php echo $privilage ?>" ><i class="fa fa-times text-white mt-1 fa-1x" aria-hidden="true"></i></a>
                            </td>
                           

                        </tr>
                             
<!--modal-->

<!--modal-->

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="card" style="background:rgba(0,0,0,.4)">
                 <div class="card-header card-header-info">
                 <h4 class="card-title text-center text-white">Deleted Members </h4>
                </div>
             <div class="table-responsive ">
                    <table class="table table-hover">
                      <thead class="text-center "> 
                        <th class="text-info font-weight-bold text-uppercase">User Name</th>
                        <th class="text-info font-weight-bold text-uppercase">User Type</th>
                      </thead>
                      <tbody>

                      <?php

                      
include "connection.php";
$sql="SELECT * from auditacounts ";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['username'];
    $type=$row['utype'];
    $id=$row['id'];

    //$desc=$row['mdesc'];
    // $mid=$row['mid'];
   // $img=$row['mimage'];
    // $img=$row['mimage'];
    
   if($_SESSION['utype']=='super_admin'){
    $privilage="";
      
    }

    else{
      $privilage="display:none;";


    }

    //$title=$row['mtitle'];
    ?>
                        <tr>
                          
                          <td class="text-white text-center">
                          <?php echo $name ?>
                            </td>
                            <td class="text-white text-center">
                          <?php echo $row['utype'] ?>
                            </td>
                            <td>
                            <a href="accounts.php?acid=<?php echo $id ?>" data-bs-toggle="#" title="Restore" data-bs-target="#" style="<?php echo $privilage ?>" ><i class="fa fa-recycle fa-1x" aria-hidden="true"></i</a>
                            </td>
                        </tr>
                              <?php 
                              include "connection.php";
                                  if(isset($_GET['acid'])){
                                    $acid=$_GET['acid'];
                                    $sql="SELECT * from auditacounts where id='$acid'";
                                    $res=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($res);
                                    $uname=$row['username'];
                                    $fname=$row['firstnm'];
                                    $lname=$row['lastnm'];
                                    $email=$row['email'];
                                    $pwd=$row['pw'];
                                    $utype=$row['utype'];
                                    $img=$row['prflimg'];
                                    $sql2="insert into accounts(firstnm,lastnm,prflimg,username,email,password,utype) values('$fname','$lname','$img','$uname','$email','$pwd','$utype');";
                                    $res2=mysqli_query($con,$sql2);
                                    if($res2){
                                      $sql3="delete from auditacounts where id='$acid'";
                                      $res3=mysqli_query($con,$sql3);
                                      echo "<script>alert('Account Successfully Restored')</script>";
                                      echo "<script>window.location.href='accounts.php';</script>";

                                    }



                                  }
                              
                              
                              
                              
                              ?>
<!--modal-->

<!--modal-->

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                    </div>
                   
                    
                    
                    
                    
                    </div>
                    
                    
                    </div>
<div class="row">

<div class="col-md-12">


</div>


</div>
                    
        </div>
      </div>
      
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="">
                  LIT Team
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons text-info">favorite</i> by
            <a href="" target="_blank">Lit Team</a> for a Studing Purposes.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
       
        
       
       
      </ul>
    </div>
  </div>

  <?php  } 
  
  else{
    
header('location:login/login.php');

  }
  
  ?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>


  </script>
  <script type="text/javascript">
$(document).ready(function(){
  $("#btn").click(function(){
    $.ajax({
      url:"addacount.php",
      type:"post",
      data:$("#frm").serialize();
      success:function(d){
        alert(d);
      }


    });


});
  $("#srch").keyup(function(){
    var input2=$(this).val();
    //alert(input);
if(input2 !=""){
  $.ajax({
    url:"livesrch.php",
    method:"POST",
    data:{input2:input2},

    success:function(data){
      $("#results").html(data);

    }


  });


}else{
  
 //  window.location.href='feedback.php';
// alert('no items selectd');
 window.location.href='feedback.php';

}


  });



});

  </script>



  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
 <script type = "text/JavaScript">
         //<!--

         if(myform.mail.value==""){
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
          }
         //-->
      </script>
</body>

</html>


