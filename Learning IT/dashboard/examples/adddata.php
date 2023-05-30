<?php
include "connection.php";
if(isset($_POST['btn'])){
    $img= $_FILES['pic']['name'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $title=$_POST['title'];
    $desc=$_POST['desc'];


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



?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    
</head>
<style>

.fa:hover{

   color:blue;
}
</style>
<body>
    
 
<?php


if(isset($_GET['b'])){
    $id=$_GET['b'];
       $sql2="SELECT modules.mname,modules.mid, details.mimage, details.mdesc,details.mtitle FROM modules INNER JOIN details ON modules.mid = details.mid where modules.mid='$id'";
       $res2=mysqli_query($con,$sql2);
        $row1=mysqli_fetch_array($res2);
        $x=$row1['mid'];
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
         echo "<script>window.location.href='adddata.php'</script>";
 
     }


}
        ?>

<div class="row">
<div class="col-sm-3">

</div><!--colsm3-->

<div class="col-sm-9 mt-5">
<div class="row">
<div class="col-sm-3">
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter module id" name="id1" value="<?php echo $x; ?>" disabled>
</div>

</div><!--colsm3-->

<div class="col-sm-9">
<div class="form-group ">
<input type="text" class="form-control" placeholder="enter module Name" name="name1" value="<?php echo $row1['mname'] ; ?>">
</div>

</div><!--colsm9-->
</div>
<div class="row">
<div class="col-sm-6 mt-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter module title"  name="title1" value="<?php echo $row1['mtitle'] ; ?>">
</div>
</div><!--colsm6-->

<div class="col-sm-6 mt-4">
<div class="form-group">
<input type="file"  name="pic1"class="form-control" accept=".jpg, .jpeg, .png" value="">
</div>
</div><!--colsm6-->

<div class="col-sm-12 mt-4">
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="desc1" ><?php echo $row1['mdesc'] ; ?></textarea>
</div>
</div><!--colsm12-->
<script>

</script>

<div class="form-group  mt-4 ">
<input type="submit" class="btn btn-primary form-control" value="update" name="btn1">
</div>
</div>


</form>

</div><!--colsm9-->
</div><!--row-->




    <?php }
    else{?>
        <div class="row">
<div class="col-sm-3">

</div><!--colsm3-->

<div class="col-sm-9 mt-5">
<div class="row">
<div class="col-sm-3">
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter module id" name="id" >
</div>

</div><!--colsm3-->

<div class="col-sm-9">
<div class="form-group ">
<input type="text" class="form-control" placeholder="enter module Name" name="name">
</div>

</div><!--colsm9-->
</div>
<div class="row">
<div class="col-sm-6 mt-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="enter module title"  name="title">
</div>
</div><!--colsm6-->

<div class="col-sm-6 mt-4">
<div class="form-group">
<input type="file"  name="pic"class="form-control" accept=".jpg, .jpeg, .png" >
</div>
</div><!--colsm6-->

<div class="col-sm-12 mt-4">
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="desc"></textarea>
</div>
</div><!--colsm12-->


<div class="form-group  mt-4 ">
<input type="submit" class="btn btn-primary form-control" value="save" name="btn">

</div>
</div>


</form>

</div><!--colsm9-->
</div><!--row-->


  <?php }?>
    
    
    
  
    

   
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9 mt-5">
<table class='table table-hover table-striped table-dark'>
    <tr>
        <td align="center">ID</td> <td align="center">Name</td> <td align="center">Details</td> <td align="center">Images</td> <td colspan="2" align="center">Operations</td>
    </tr>
<?php
include "connection.php";
$sql="SELECT modules.mname,modules.mid, details.mimage, details.mdesc FROM modules INNER JOIN details ON modules.mid = details.mid ";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['mname'];
    $desc=$row['mdesc'];
     $mid=$row['mid'];
    $img=$row['mimage'];
    //$title=$row['mtitle'];
    ?>

            <td><?php echo $mid ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $desc ?></td>
            <td><img src="pictures/<?php echo $img ?>" alt="" class="rounded" height="100px" width="150px"></td>
            <td><a href="delete.php?a=<?php echo $mid ?>" data-bs-toggle="tool-tip" title="Delete" ><i class="fa fa-trash text-white mt-1 fa-2x" aria-hidden="true"></i></a></td>
            <td><a href="adddata.php?b=<?php echo $mid ?>" data-bs-toggle="tool-tip" title="Delete"><i class="fa fa-pencil-square text-white mt-1 fa-2x" aria-hidden="true"></i></a></td>
  
        </tr>   
                    
    <?php }
    
            ?>
  


</table>

</div>
</div>



    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    $(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
    
    
    </script>
</body>
</html>