<?php 
  include "connection.php";   
if(isset($_GET['upd5'])){
    $name=$_POST['naming'];   
    $cid=$_GET['upd5'];
    

    //echo $name;
    $sql2="update notes set cat='oldloop' where catid='$cid'";
    $res=mysqli_query($con,$sql2);
    if($res){

        echo"Successfully delet";
    }
    else{
        die(mysqli_error($con));

    }

   


}


?>