<?php
 
include "connection.php";
if(isset($_POST['btn'])){
   
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $uname=mysqli_real_escape_string($con,$_POST['uname']);
    $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
    $img = $_FILES['pic']['name'];
    $utype=$_POST['utype'];
    $email=mysqli_real_escape_string($con,$_POST['mail']);
    
 $sql1="select * from accounts where email='$email'";
 $res2=mysqli_query($con,$sql1);
 if(mysqli_num_rows($res2)){
  echo "<script>alert('This Email Already Entered')</script>";
  echo "<script>window.location.href='accounts.php';</script>";
 }
else{

    //$sql2="insert into details(mid,mtitle,mdesc,mimage) values('86000','learn python','develop python','m1.jpg')";
    //mysqli_query($con,$sql2)
    $sql="insert into accounts(firstnm,lastnm,prflimg,username,email,password,utype) values('$fname','$lname','$img','$uname','$email','$pwd','$utype');";
   // $res= ;
   
    //$res=mysqli_query($con,$sql);
    if(mysqli_query($con,$sql)){
      move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
      echo "<script>alert('Account Successfully Added')</script>";
      echo "<script>window.location.href='accounts.php';</script>";
   
      
      
     
    }
 
   
    else{
        die(mysqli_error($con));
   }
  }
}
?>

