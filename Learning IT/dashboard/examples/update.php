<?php
 include "connection.php";
 if(isset($_GET['ids'])){
    $nid=$_GET['ids'];
    // $img= $_FILES['pic']['name'];
    // $src= $_FILES['src']['name'];
     $cat= $_GET['cat'];
     
    // $title= $_POST['title'];
     //$link= $_POST['link'];
     
     
       // move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
        //move_uploaded_file($_FILES['src']['tmp_name'],"resources/$src");
        $sql2="update cgd set  category='$cat'  where id='$nid'";
          $res=mysqli_query($con,$sql2);
 if($res){
  echo "<script>alert('data successfully updated')</script";
  echo "<script>window.location.href='cgd.php';</script";

 }
 else{
    die(mysqli_error($con));

 }
        
  
    
 }







?>