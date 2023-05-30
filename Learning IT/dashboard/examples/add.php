<?php
include "connection.php";
if(isset($_POST['btn'])){
    $img= $_FILES['pic']['name'];
    $id=$_POST['idx'];
    $name=$_POST['mname'];
    $title=$_POST['mtitle'];
    $desc=$_POST['mdesc'];


    //$sql2="insert into details(mid,mtitle,mdesc,mimage) values('86000','learn python','develop python','m1.jpg')";
    //mysqli_query($con,$sql2)
    $sql="insert into modules(mid,mname) values('$id','$name')";
   // $res= ;
   
    //$res=mysqli_query($con,$sql);
    if(mysqli_query($con,$sql)){
       move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
       $sql2="insert into details(mid,mtitle,mdesc,mimage) values('$id','$title','$desc','$img')";
         $res=mysqli_query($con,$sql2);

       echo "<script>alert('data successfully added')</script";
       

    }
 
   
    else{
        die(mysqli_error($con));
    }

   
}

   

