<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>
<?php

if(isset($_GET['a'])){
include "connection.php";
$y= $_GET['a'];
$m= $_GET['m'];
$sql1="delete from details where mid='$y'";
$sql2="delete from notes where mid='$y'";
$sql="delete from modules where mid='$y'";
$sql3="delete from resources where modulename='$m'";
$query=mysqli_query($con,$sql);
if($query){
    mysqli_query($con,$sql1);
    mysqli_query($con,$sql2);
    mysqli_query($con,$sql3);
    $_SESSION['status'] = "Data Deleted Successfully";
    header("Location: tables.php");

}
else{
mysqli_error($con);

}
//
}
    

if(isset($_GET['cgdid'])){
    include "connection.php";
    $y= $_GET['cgdid'];
    $sql1="delete from cgd where id='$y'";
   
    $query=mysqli_query($con,$sql1);
    if($query){
        
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: cgd.php");
    
    }
    else{
    mysqli_error($con);
    
    }
    //
    }

    if(isset($_GET['mailid'])){
        include "connection.php";
        $y= $_GET['mailid'];
        $sql1="delete from feedback where id='$y'";
       
        $query=mysqli_query($con,$sql1);
        if($query){
            
            $_SESSION['status'] = "Feedback Deleted Successfully";
            header("Location: feedback.php");
        
        }
        else{
        mysqli_error($con);
        
        }
        //
        }

        if(isset($_GET['acid'])){
            include "connection.php";
            $y= $_GET['acid'];
            $name=$_GET['name'];
            $sql1="select * from vote where delid='$y' and voterid='Lit Team'";
            $res2=mysqli_query($con,$sql1);
            if(mysqli_num_rows($res2) > 0){
                // echo"<script>
                //       swal({
                //         title: 'Good job!',
                //         text: 'You clicked the button!',
                //         icon: 'success',
                //         button: 'Aww yiss!',
                //       });
                      
                //       </script>";
                echo "<script>alert('Delete Request Already Sent')</script>";
                echo "<script>window.location.href='accounts.php';</script>";

            }
            else{
            $sql="insert into vote(vote,delid,voterid) values('accept','$y','Lit Team')";
            $res=mysqli_query($con,$sql);
        
//if($query){
               
             
             require 'phpmailer/includes/PHPMailer.php';
             require 'phpmailer/includes/SMTP.php';
             require 'phpmailer/includes/Exception.php';
             
           //  $mailid=$row['email'];
             $id=$row['id'];
             $mailing="<html><body><div style='background:linear-gradient(80deg,#aa076b,#61045f); border-radius:20px; padding:10px; text-align:center; color:black; text-shadow:1px 1px 20px  skyblue;'><h1 style='color:white;'>Super Admin Try Delete for $name So Please Vote<h1>";
             $mailing.="<h6><a href='http://192.168.8.2/teamproject/dashboard/examples/vote.php?id=$y' style='background:linear-gradient(80deg,#000428 , #004e92); text-decoration:none; padding:10px; border-radius:20px; color:white;'>Please Vote Heare</a></h6>";
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
             $sql="select * from accounts where utype !='super_admin'";
             $res=mysqli_query($con,$sql);
          
             while($row=mysqli_fetch_array($res)){

            
             $mail->addAddress($row['email']);
            }

            
             //Finally send email
             if ( $mail->send() ) {
             //	echo "Email Sent..!";
             $_SESSION['status'] = " Delete Request Send For All Members ";
             header("Location: accounts.php");
             
             }else{
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
             }
             $mail->smtpClose();
             
              
            
            }
            
        }
        
            //
          //  }

          if(isset($_GET['vid'])){
            include "connection.php";
            $y= $_GET['vid'];
            $sql1="delete from vote where delid='$y'";
           
            $query=mysqli_query($con,$sql1);
            if($query){
                
                $_SESSION['status'] = "Feedback Deleted Successfully";
                header("Location:accounts.php");
            
            }
            else{
            mysqli_error($con);
            
            }
            //
            }




    
    
?>

