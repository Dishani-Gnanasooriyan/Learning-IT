<?php session_start();






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

<?php

include "connection.php";

if(isset($_POST['btn'])){
    $img= $_POST['srclink'];
    $src= $_FILES['txtfile']['name'];
    $sshot= $_FILES['imgfile']['name'];
    $mid=$_POST['mid'];
    $cat=$_POST['cat'];
    $title=$_POST['sub'];
    $notes=$_POST['mnote'];
    $catid=substr($mid,0);   
    $catidx=$catid.$cat;
    
    $sql1="select * from modules where mid='$mid'";
    $res=mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($res);
    $mname=$row['mname'];

    //$sql2="insert into details(mid,mtitle,mdesc,mimage) values('86000','learn python','develop python','m1.jpg')";
    //mysqli_query($con,$sql2)
    $sql="insert into notes(mid,cat,catid) values('$mid','$cat','$catidx')";
   // $res= ;
   
    //$res=mysqli_query($con,$sql);
    if(mysqli_query($con,$sql)){
       move_uploaded_file($_FILES['imgfile']['tmp_name'],"pictures/$sshot");
       move_uploaded_file($_FILES['txtfile']['tmp_name'],"resources/$src");
       $sql2="insert into resources(catid,srcfile,srcimage,title,notes,screenshot,modulename) values('$catidx','$src','$img','$title','$notes','$sshot','$mname')";
         $res=mysqli_query($con,$sql2);

       echo "<script>alert('data successfully added')</script";

    }
 
   
    else{
        die(mysqli_error($con));
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <!-- load the CSS files in the right order -->
<link href="/path/to/css/fileinput.min.css" rel="stylesheet">
<link href="/path/to/themes/bs5/theme.css" rel="stylesheet">

<!-- load the JS files in the right order -->
<script src="/path/to/js/fileinput.js"></script>
<script src="/path/to/themes/bs5/theme.js"></script>


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
input[type="file"] {
  color: #b8b8b8;
  content:"select image file"
}

input[type="submit"]:hover {
  
  box-shadow:1px 1px 30px 1px #00cdac;
  color:#00cdac;
}



</style>


</head>
<?php 

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
                          <label class="control-label">First Name</label>
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
    <div class="logo"><a href="home.php?dash=fa fa-tachometer&amp;page=addnotes.php" class="simple-text logo-normal text-primary  "  style="text-align:center;  font-size:15px; font-weight:bold; text-shadow:1px 1px 15px #cb3379">
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
          <li class="nav-item active" >
            <a class="nav-link" href="addnotes.php" style="background:linear-gradient(80deg,#614385 , #516395);">
            <i class="fa fa-file-text" aria-hidden="true"></i>
              <p>Notes</p>
            </a>
          </li>
          <li class="nav-item  ">
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
          <li class="nav-item " style="<?php echo $privilage?>">
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
      <?php


if(isset($_GET['b'])){
    $id=$_GET['b'];
       $sql2="SELECT modules.mname,modules.mid, details.mimage, details.mdesc,details.mtitle FROM modules INNER JOIN details ON modules.mid = details.mid where modules.mid='$id'";
       $res2=mysqli_query($con,$sql2);
        $row1=mysqli_fetch_array($res2);
        $x=$row1['mid'];
        $img=$row1['mimage'];
if(isset($_POST['btn1'])){
$img= $_FILES['pic1']['name'];
    $mid=$_GET['b'];
    $name=$_POST['name1'];
    $title=$_POST['title1'];
    $desc=$_POST['desc1'];

    $sql="update modules set mname='$name' where mid='$mid'";
  //  $res=mysqli_query($con,$sql);

    if(mysqli_query($con,$sql)){
        move_uploaded_file($_FILES['pic1']['tmp_name'],"pictures/$img");
        $sql2="update details set mtitle='$title',mdesc='$desc',mimage='$img' where mid='$mid'";
          $res=mysqli_query($con,$sql2);
 
        echo "<script>alert('data successfully updated')</script>";
         echo "<script>window.location.href='tables.php'</script>";
 
     }


}
        ?>
      <div class="content">
        <div class="container-fluid">
      <div class="row ">
      <div class="col-md-3 ">
      <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
              <input type="text" class="form-control" placeholder="enter module id" name="idx" required="require"  value="<?php echo $x; ?>" disabled>
                 <!--<button type="submit" class="btn btn-default btn-round btn-just-icon">
                 <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>-->               
              </div>
              </div><!--col md3-->
              <div class="col-md-9">
             <div class="form-group">
              <input type="text" name="name1" class="form-control" placeholder="enter module name" value="<?php echo $row1['mname'] ; ?>">

             </div>
              </div><!--col md9-->

              <div class="col-md-6">
              <div class="form-group">
              <input type="text" name="title1" class="form-control" value="<?php echo $row1['mtitle'] ; ?>">
                           
              </div>
              </div><!--col md6-->

              <div class="col-md-6">
                <div class="row">
             <div class="col-md-9"><input type="file"  name="pic1" class="form-control mt-2" accept=".jpg, .jpeg, .png" value="<?php echo $row1['mimage'] ; ?>"></div>
             
           <div class="col-md-3"><img src="pictures/<?php echo $row1['mimage'] ; ?>"  class="rounded img-fluid"   height="50px" alt=""></div>

           </div>
           
          
              </div><!--col md6-->
              <div class="col-md-12">
              <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="desc1"  placeholder="Enter Description"><?php echo $row1['mdesc'] ; ?></textarea>
                              
              </div>
              </div><!--col md12-->

              <div class="col-md-12">
              <div class="form-group mt-5 ">
              <input type="submit" class=" border rounded form-control" value="Update" name="btn1" style="background:linear-gradient(80deg,#614385 , #516395);">
                         
              </div>
              </div><!--col md12-->
            </div><!--row-->
            </form>
<?php } ?>

<?php   
if(isset($_POST['btnadd'])){
$hide="display:none;";
?>
<div class="content">
        <div class="container-fluid">
      <div class="row ">
      <div class="col-md-3 text-center  ">
      <form action="#" method="post" enctype="multipart/form-data">
     
      <select  required="require" class="form-select bg-transparent rounded p-1 mt-2 text-white border-primary border-bottom form-control" aria-label="" name="mid">
  <option class="text-white bg-dark" value="">Select Modules</option>
  <?php include "connection.php";
  global $id;
  $aid=$_SESSION['mail'];
  if($_SESSION['utype']=='super_admin'){
    $sql="select * from modules";

  }
  else{
    $sql="select * from modules where adminid='$aid'";
  }
    
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){
        
  ?>
  <option value="<?php echo $row['mid'] ; ?>" class="text-white bg-dark"><?php echo $row['mname']; ?></option>
    <?php }?>
</select>
            <!-- <input type="text" class="form-control" placeholder="enter module id" name="idx" required="require" >
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                 <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>-->               
              
              </div><!--col md3-->
              <div class="col-md-2">
             <div class="form-group">
             <label class="bmd-label-floating">Enter Category Name</label> 
              <input type="text" name="cat" class="form-control" placeholder="" required>

             </div>
              </div><!--col md3-->
              <div class="col-md-2">
             <div class="form-group">
             <label class="bmd-label-floating">Enter Subtitle</label> 
              <input type="text" name="sub" class="form-control"  required>

             </div>
              </div><!--col md3-->

              <div class="col-md-5">
              <div class="form-group mt-3">
    <input type="text" class="form-control" id="validatedCustomFile"  name="srclink" >
    <label class="bmd-label-floating">Enter Embed Video Link</label> 
 
  </div>
              </div><!--col md3-->  

              <div class="col-md-6">
              <label class="bmd-label-floating">Choose Source File</label>         
    <input type="file" class="form-control mt-3" id="validatedCustomFile"  name="txtfile"  required accept=".java, .php, .html, .css, .txt">
   
 
              </div><!--col md6-->
              <div class="col-md-6">
              <label class="bmd-label-floating">Choose Image File</label>         
    <input type="file" class="form-control mt-3" id="validatedCustomFile"  name="imgfile"  required accept=".jpg, .jpeg, .png">
   
 
              </div><!--col md6-->
             
              <div class="col-md-12">
              <div class="form-group">
              <label class="bmd-label-floating">Enter Notes</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="mnote"  placeholder=""></textarea>
                              
              </div>
              </div><!--col md12-->

              <div class="col-md-12">
              <div class="form-group mt-5 ">
              <input type="submit" class="   rounded form-control" value="ADD" name="btn"  style="background:linear-gradient(80deg,#614385 , #516395);">
                         
              </div>
              </div><!--col md12-->
            </div><!--row-->
            </form>

            <?php }?>

            
        <div class="container-fluid">
          <div class="row mt-5">
          <div class="col-md-12" id="hee"><form action="" method="post"><input type="submit" value="Add Datas" id="ad" class="btn  btn-sm form-control" name="btnadd" style="background:linear-gradient(80deg,#614385 , #516395); <?php echo $hide ?>"></form></div>
          <div class="col-md-3"></div>
             <div class="col-md-3">
                 <div class="card" style="background:rgba(0,0,0,.4)">
                 <div class="card-header" style="background:linear-gradient(80deg,#614385 , #516395);">
                 <h4 class="card-title text-center  text-white">Modules Names </h4>
                </div>
             <div class="table-responsive ">
                    <table class="table table-hover">
                      <thead> 
                      </thead>
                      <tbody>

                      <?php
include "connection.php";
$sql="SELECT * from modules ";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['mname'];
    //$desc=$row['mdesc'];
     $mid=$row['mid'];
   // $img=$row['mimage'];


    //$title=$row['mtitle'];
    ?>
                        <tr>
                          
                          <td class="text-white text-center">
                          <a href="addnotes.php?det=<?php echo $mid ?>"><?php echo $name ?></a>
                            </td>
                        </tr>

<!--modal-->

<!--modal-->

                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                    </div>

             </div><!--colsm3-->

            <div class="col-md-2">
              <div class="card" style="background:rgba(0,0,0,.4)">
                <div class="card-header " style="background:linear-gradient(80deg,#614385 , #516395);">
                   
                  <h4 class="card-title text-center text-white">Category Details </h4>  
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                 
                    <table class="table ">
                      <thead>
                      </thead>
                      <tbody>

                      <?php
include "connection.php";
if(isset($_GET['det'])){
  $desid=$_GET['det'];
$sql="SELECT modules.*,notes.* from notes  inner join modules on notes.mid=modules.mid where notes.mid='$desid' group by notes.cat ";
$res=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($res)){
    $name=$row['mid'];
    $catname=$row['cat'];
     $mid=$row['catid'];
     $adminid=$row['adminid'];

    if($_SESSION['mail']!=$adminid){
      $privilage="display:none;";

    }
    else{
      $privilage="";

    }
    if($_SESSION['utype']=='super_admin'){
      $privilage="";
        
      }
   //$img=$row['mimage'];

    //$title=$row['mtitle'];
    ?>
                        <tr>
                       
                          <td class="text-white text-center">
                          <a href="addnotes.php?catid=<?php echo $mid ?>&amp;det=<?php echo $name ?>"><?php echo $catname ?></a>
                          </td>
                          <td class="text-white" >
                          <a href="addnotes.php?upd=<?php echo $mid ?>&amp;det=<?php echo $name ?>" data-bs-toggle="tool-tip" title="Edit" style="<?php echo $privilage ?>"><i class="fa fa-pencil-square text-white mt-1 fa-1x" aria-hidden="true"></i></a>
                          </td>
                          <td class="text-white" >
                          <a href="addnotes.php?did=<?php echo $mid ?>&amp;det=<?php echo $name ?>" data-bs-toggle="tool-tip" title="Delete" style="<?php echo $privilage ?>"><i class="fa fa-trash text-white mt-1 fa-1x" aria-hidden="true"></i></a>
                          </td>
                        </tr>

<!--modal-->

<!--modal-->

                        <?php }}?>
                 <?php
                         include "connection.php";
                        if(isset($_GET['upd'])){
                        
                         $catid=$_GET['upd'];
                         $sql="select * from notes where catid='$catid'";
                         $res=mysqli_query($con,$sql);
                         $row=mysqli_fetch_array($res);
                         $name=$row['cat'];
                         echo "<form method='post'><tr><td colspan='3'><div class='form-group'><input type='text' name='cname' class='form-control border border-primary rounded text-center'  value='$name'></div></td></tr><tr><td colspan='3'><input type='submit' class='btn btn-danger btn-sm form-control' value='Update' name='upd1'</td></tr></form>";
                         
                         if(isset($_POST['upd1'])){
                          $name90=$_POST['cname'];  
                       
                         
                     
                        
                         $sql2="update notes set cat='$name90' where catid='$catid'";
                         $res=mysqli_query($con,$sql2);
                         if($res){   
                             echo"<script>window.location.href='addnotes.php';</script>";
                             echo"$name90 "." Successfully Updated";
                             
                         }
                         else{
                             die(mysqli_error($con));
                     
                         }
                    
                        
                     
                     
                     }
                        
                        
                        ?>
                      
                        <?php }
                          if(isset($_GET['did'])){
                              $did=$_GET['did'];

                              $sql="delete from notes where catid='$did'";
                              $res=mysqli_query($con,$sql);
                              if($res){
                                $sql2="delete from resources where catid='$did'";
                                $res=mysqli_query($con,$sql2);
                                    echo"<script>alert('record successfullu deleted');</script>";
                                    echo"<script>window.location.href='addnotes.php';</script>";

                              }


                          }
                        
                        
                        
                        
                        
                        ?>
                        <?php 
  include "connection.php"; 
   



?>
                      </tbody>
                    </table>
                   
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12">
              <div class="card" style="background:rgba(0,0,0,.4)">
                <div class="card-header " style="background:linear-gradient(80deg,#614385 , #516395);">
                   
                  <h4 class="card-title text-center text-white" >Category Notes </h4>  
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <table class="table ">
                      <thead>
                      <th>Title</th>
                     <th>link</th>
                      <th>Notes</th>
                      <th colspan="2" align="center">Src Image</th>
                      <th>Src File Name</th>
                      <th >Operations</th>
                      </thead>
                      <tbody>

                      <?php
include "connection.php";
if(isset($_GET['catid'])){
  $catid=$_GET['catid'];
$sql="SELECT notes.mid,notes.catid,notes.cat,resources.id,resources.modulename,resources.catid,resources.srcfile,resources.srcimage,resources.screenshot,resources.title,resources.notes,modules.adminid from resources inner join notes on notes.catid=resources.catid inner join modules on notes.mid=modules.mid where resources.catid='$catid' group by resources.title";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){

    $notes=$row['notes'];
    $title=$row['title'];
    $srcimg=$row['srcimage'];
     $srcfile=$row['srcfile'];
     $ids=$row['id'];
     $sshot=$row['screenshot'];
     $adminid=$row['adminid'];

     if($_SESSION['mail']!=$adminid){
       $privilage="display:none;";
 
     }
     else{
       $privilage="";
 
     }

     if($_SESSION['utype']=='super_admin'){
      $privilage="";
        
      }
    
   //$img=$row['mimage'];

    //$title=$row['mtitle'];
    ?>
                        <tr>
                        <td class="text-white" width='' >
                          <?php echo $title ?>
                          </td>
                          <td class="text-white" width='' >
                          <?php echo $srcimg ?>
                          </td>
                          <td class="text-white" width='60%' >
                          <?php echo $notes ?>
                          </td>
                          <td class="text-white" colspan="2" align="center">
                            <img src="pictures/<?php echo $sshot ?>" class="rounded" height="80px" alt="">
                          </td>
                          <td class="text-white">
                            <?php echo $srcfile ?> 
                          </td>
                          <td class="text-white text-center" colspan='2'>
                          <a href="addnotes.php?catid=<?php echo $catid ?>&amp;det=<?php echo $name?>&amp;ids=<?php echo $ids?>" data-bs-toggle="tool-tip" title="Edit" style="<?php echo $privilage ?>"><i class="fa fa-pencil-square text-white mt-1 fa-1x" aria-hidden="true"></i></a>
                          <a href="addnotes.php?id=<?php echo $ids ?>&amp;det=<?php echo $name ?>" data-bs-toggle="tool-tip" title="Delete" style="<?php echo $privilage ?>"><i class="fa fa-trash text-white mt-1 fa-1x disabled" aria-hidden="true"></i></a>
                          </td>
                        </tr>

<!--modal-->

<!--modal-->

                        <?php }}?>

                       
                      </tbody>
                      <?php
                         include "connection.php";
                           
                        if(isset($_GET['ids'])){
                          $nid=$_GET['ids'];
                       
                         $sql="select * from resources where id='$nid'";
                         $res=mysqli_query($con,$sql);
                         $row=mysqli_fetch_array($res);
                         $name=$row['notes'];
                         $rimage=$row['srcimage'];
                         $rsrc=$row['srcfile'];
                         $title=$row['title'];
                   
                         ?>
                        <form action="#" method="post" enctype="multipart/form-data"><tr>
    
                       
   
                        <td><div class='form-group'><input type="text" name="title" value="<?php echo $title; ?>" class="form-control"></div></td>
                        <td><div class='form-group'><input type="text" name="link" value="<?php echo $rimage; ?>" class="form-control"></div></td>
                          <td width="60%"><div class='form-group'><textarea name="notes" id="" cols="30" rows="5" class="form-control"> <?php echo $name; ?></textarea></div></td>
                          
                          
                          <td width="10%"><p class="text-warning fw-bold ">*please select <i class="fa fa-file-image-o text-white fa-2x" aria-hidden="true"></i> file</p><input type="file" name="pic" id="" class="form-control"  accept=".jpg, .png, .jpeg">
                          </td>
                       <td colspan="3"><p class="text-warning fw-bold ">*please select <i class="fa fa-file-code-o text-white fa-2x" aria-hidden="true"></i> file</p><input type="file" name="src" id="" class="form-control"  accept=".java, .php, .js, .css, .html, .cs, .txt">

                        </td>
                      </tr><tr><td colspan="6"><input type="submit" value="Update" name="updx" class="btn btn-danger  form-control"></td></tr></form>
                          <?php }
                       
                        
                        
  
                       if(isset($_POST['updx'])){
                           $img= $_FILES['pic']['name'];
                           $src= $_FILES['src']['name'];
                           $notes= $_POST['notes'];
                           $title= $_POST['title'];
                           $link= $_POST['link'];
                           if(empty($_FILES['pic']['name'])){
                            $img=$row['screenshot'];
                          }
                          if(empty($_FILES['src']['name'])){
                            $src=$row['srcfile'];
                          }
                           
                              move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
                              move_uploaded_file($_FILES['src']['tmp_name'],"resources/$src");
                              $sql2="update resources set srcfile='$src',srcimage='$link',notes='$notes',title='$title',screenshot='$img' where id='$nid' ";
                                $res=mysqli_query($con,$sql2);
                       if($res){
                        echo "<script>alert('data successfully updated')</script";
                        echo "<script>window.location.href='addnotes.php';</script";

                       }
                       else{
                          die(mysqli_error($con));

                       }
                              
                        
                          
                       }

                       if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $sql3="delete from resources  where id='$id' ";
                        
                          if(mysqli_query($con,$sql3)){
                            echo "<script>alert('data successfully deleted')</script";
                            //echo "<script>window.location.href='addnotes.php';</script";
                     

                          }


                       }
                        ?>
                        
                        
                       
                    </table>
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
            , made with <i class="material-icons text-primary">favorite</i> by
            <a href="" target="">Lit Team</a> for a Studing Purposes.
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

</body>

</html>

