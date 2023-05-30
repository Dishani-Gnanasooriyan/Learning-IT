<?php

include "connection.php";
if(isset($_POST['updx'])){
    $img= $_FILES['pic']['name'];
    $src= $_FILES['src']['name'];
    
    
       move_uploaded_file($_FILES['pic']['tmp_name'],"pictures/$img");
       move_uploaded_file($_FILES['src']['tmp_name'],"resources/$src");
       $sql2="update resources set srcfile='$src',srcimage='$img' where id='4' ";
         $res=mysqli_query($con,$sql2);


      // echo "<script>alert('data successfully added')</script";
       
   
   
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">

    <input type="file" name="pic" id="">
    <input type="file" name="src" id="">
    <input type="submit" value="btn" name="updx">
</form>


    
</body>
</html>