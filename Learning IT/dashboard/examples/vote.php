<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background:radial-gradient(#004e92,#000428);">
<div class="container">
<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6  mt-5 rounded" style="background:rgba(0,0,0,.5)">
<h2 class="text-center text-warning mt-2">PLEASE VOTE </h2>
<form action="" method="post" enctype="multipart/form-data" >

<select  required="require" class="form-select rounded p-1 mt-2  form-control" aria-label="" name="voten">
  <option class="text-white bg-dark" value="">Select Your Name</option>
  <?php include "connection.php";
 
    $sql="select * from accounts where utype !='super_admin'";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){
        
  ?>
  <option value="<?php echo $row['id'] ; ?>" class="text-white bg-dark"><?php echo $row['username']; ?></option>
    <?php }?>
</select>
<div class="form-group mt-2">
  <label for="" class="control-label text-white">Enter Your Password</label>
<input type="text" class="form-control form-control-sm" name="pw" required>

</div>
<div class="form-check mt-2 text-white">
  <input class="form-check-input" type="radio" name="votet" id="flexRadioDefault1" value="accept" required>
  <label class="form-check-label" for="flexRadioDefault1">
   Agree
  </label>
</div>
<div class="form-check text-white ">
  <input class="form-check-input" type="radio" name="votet" id="flexRadioDefault2" value="daccept" required>
  <label class="form-check-label" for="flexRadioDefault2">
   Dont Agree
  </label>
</div>
<input type="submit" value="Vote" name="vote" class="btn btn-warning btn-sm mt-2 form-control">
</form>
</div>
<div class="col-md-3"></div>

</div>


</div>

    
</body>
</html>
<?php
if(isset($_POST['vote'])){
$delid=$_GET['id'];
$voterid=$_POST['voten'];
$votetype=$_POST['votet'];
$pw=$_POST['pw'];
$sql2="select * from accounts where id='$voterid'";
$res1=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($res1);
if($row2['password'] == $pw){
$sql1="select * from vote  where delid='$delid' and voterid='$voterid'";
$res1=mysqli_query($con,$sql1);
if(mysqli_num_rows($res1)>0){
  echo "<script>alert('You already Voted')</script>";
  echo "<script>window.close();</script>";
}
else{
  $sql="insert into vote(vote,delid,voterid) values('$votetype','$delid','$voterid')";
  $res=mysqli_query($con,$sql);
 // $filename="accounts.php";
 // $sec="10";
 // header("Refresh:0;url=$page");
 
  echo "<script>alert('Thanks For Your Vote')</script>";
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
      if($countac == $countvt){
      if($accept > $daccept){
        $sql4="delete from accounts  where id='$id'";
        $res3=mysqli_query($con,$sql4);
        $sql5="delete from vote  where delid='$id'";
        $res4=mysqli_query($con,$sql5);
       // $_SESSION['status']="Account Successfully Deleted";
       // echo "<script>window.location.href='accounts.php';</script>";
      }
  
      if($accept == $daccept){
        
        $sql5="delete from vote  where delid='$id'";
        $res4=mysqli_query($con,$sql5);
       // echo "<script>window.location.href='accounts.php';</script>";
      }
  
    }
      //$desc=$row['mdesc'];
      // $mid=$row['mid'];
     // $img=$row['mimage'];
      // $img=$row['mimage'];
      
     
  


 
  echo "<script>window.close();</script>";
}
}
}
else{
  echo "<script>alert('Your Password is Incorrect')</script>";

}





}

?>