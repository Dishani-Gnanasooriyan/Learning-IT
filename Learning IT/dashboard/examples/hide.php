<?php 
session_start();
include "connection.php";
if(isset($_GET['a'])){
 $mmid=$_GET['a'];
 $sts=$_GET['b'];
 if($sts=='disable'){
      $sts="active";
     
    }
    else if($sts=='active'){
      $sts="disable";
      
    }
 //$msg2=$_SESSION['msg2'];

                        
    $sql="update modules set status='$sts' where mid='$mmid'";
    $res=mysqli_query($con,$sql);
    if($res){
          $_SESSION['status']="Successfully ".$sts;
          echo "<script>window.location.href='tables.php'</script>";
        
    }

  }
    if(isset($_GET['cgdid'])){
      $mmid=$_GET['cgdid'];
      $sts=$_GET['cgdsts'];
      if($sts=='disable'){
           $sts="active";
          
         }
         else if($sts=='active'){
           $sts="disable";
           
         }
      //$msg2=$_SESSION['msg2'];
     
                             
         $sql="update cgd set status='$sts' where id='$mmid'";
         $res=mysqli_query($con,$sql);
         if($res){
               $_SESSION['status']="Successfully ".$sts;
               echo "<script>window.location.href='cgd.php'</script>";
             
         }



    }
    


?>