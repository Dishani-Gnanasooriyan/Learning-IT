<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modules</title>
    <link rel="icon" sizes="150x150" href="logo2.png" type = "image/x-icon">
    <link rel="stylesheet" href="sidestyl.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-mfizz/2.4.1/font-mfizz.min.css" integrity="sha512-Cdvnk1SFWqcb3An6gMyqDRH40Js8qmsWcSK10I2gSifCe2LilaPMsHd6DldEvQ3uIlCb1qdRUrNeAFFleOu4xQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       .navbar{
        background:linear-gradient(30deg,rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), linear-gradient(70deg,#000428,#004e92) !important;
    
        box-shadow: 10px 1px 50px 3px black !important;
          margin-top:10px;
          
          padding-right:10px;
          padding-left:10px;
          border-radius:5px;

         

  }
  .nav-link{
 color:white;


  }
 .nav-link:hover{
   border-radius:20px;
  box-shadow: 0.5px 1px 4px 0.5px #cb3379 !important;
  color:gray;

 }

 .nav-link:active{
  color:#cb3379;
 }
  .list-items{
    float: right;


  }





  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.wrapper{
  height: 100%;
  width: 100px;
  position: relative;
}
.wrapper .menu-btn{
  position: fixed;
  left: 20px;
  top: 30px;
  background: transparent;
  color: rgb(2, 0, 0);
  height: 35px;
  width: 35px;
  z-index: 9999;
  border: 1px solid #333;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  box-shadow: 1px 1px 6px 3px #cb3379 !important;
}
#btn:checked ~ .menu-btn{
  
  transform: rotate(-180deg);
  transition: all .5s ease;
  position:fixed;
}
.wrapper .menu-btn i{
  position: absolute;
  background: #000000;
  font-size: 23px;
  transition: all 0.3s ease;
  
}
.wrapper .menu-btn i.fa-times{
  opacity: 0;
}
#btn:checked ~ .menu-btn i.fa-times{
  opacity: 1;
  transform: rotate(-180deg);
}
#btn:checked ~ .menu-btn i.fa-bars{
  opacity: 0;
  transform: rotate(180deg);
}
#sidebar{
  position: fixed;

  height: 100%;
  width: 200px;
  overflow: hidden;
  left: -270px;
  transition: all 0.3s ease;
  border-radius:20px;
  box-shadow:1px 1px 15px 3px black !important;
  margin-top:58px;
}
#btn:checked ~ #sidebar{
  left: 0;
  
}
#sidebar .title{
  line-height: 65px;
  text-align: center;
  background: rgb(255, 255, 255);
  font-size: 25px;
  font-weight: 600;
  color: #000000;
  border-bottom: 1px solid #222;
}
#sidebar .list-items{
  position: relative;
  background:linear-gradient(30deg,rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), linear-gradient(180deg,#000428,#004e92) !important;
  width: 100%;
  height: 100%;
  list-style: none;
  align-items: center;

  
}
#sidebar .list-items li{
  padding: 10px;
  line-height: 10px;
  border-bottom:solid 4px white;
 
  font-weight:bold;
  transition: all 0.3s ease;
  margin-right:40px;
  text-align:center;
  margin-top:20px;
}
#sidebar .list-items li:hover{
  
  border-bottom: 2px solid #cb3379;
 
  border-radius:10px;
  margin-right:40px;
}
#sidebar .list-items li:first-child{
  border-top: none;
}
#sidebar .list-items li a{
  color: white;
  text-decoration: none;
  font-size: 20px;
  font-weight: 500;
  font-family:roboto;
  height: 100%;
  width: 100%;
  display: block;
}
#sidebar .list-items li a i{
  margin-right: 20px;
}
#sidebar .list-items .icons{
  width: 100%;
  height: 40px;
  text-align: center;
  position: absolute;
  bottom: 100px;
  line-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar .list-items .icons a{
  height: 100%;
  width: 40px;
  display: block;
  margin: 0 5px;
  font-size: 18px;
  color: #f2f2f2;
  background: #000000;
  border-radius: 5px;
  border: 1px solid #030000;
  transition: all 0.3s ease;
}
#sidebar .list-items .icons a:hover{
  background: #404040;
}
.list-items .icons a:first-child{
  margin-left: 0px;
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  width: 100%;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 700;
}
.content p{
  font-size: 40px;
  font-weight: 700;
}

body{

  background:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), linear-gradient(#000428,#004e92);
  background-size: cover;
background-attachment:fixed;
  
}
.font{

  font-family:roboto;
}
textarea{

  
}

.font2{
  font-family: 'Nerko One', cursive;
  
}
.hv:hover{
color:red;

}
 
#google_translate_element select{
 background:#f6edfd;
 color:#004e92;
 border: none;
 font-weight:bolder;
 border-radius:3px;
 padding:4px 2px;
 margin-top:20px;
 margin-left:80px;
 }
 
 /*google translate link | logo */
   .goog-logo-link{
   display:none!important;
   }
 .goog-te-gadget{
 color:transparent!important;
 }
 
 /* google translate banner-frame */
 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}
 
 body{top:0!important;}

 .scroll::-webkit-scrollbar {
   display: none;
 }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
      <iconify-icon icon="tabler:layout-sidebar-right-collapse" style="color:white;" width="30" height="30"></iconify-icon>
      
      
      </label>
      <nav id="sidebar">
        <div class="title"></div>
        <ul class="list-items ">
        <img src="logo2.png" alt="wdfdf" height="130px" width="130px" class="rounded-circle " style="margin-left:3px; margin-top:50px; box-shadow: 1px 1px 5px 1px white !important;">
        <?php
        include "connection.php";
       if(isset($_GET['link'])){
          $sid=$_GET['link'];
 $sql="SELECT notes.*,modules.* from notes inner join modules on notes.mid=modules.mid where notes.mid='$sid' group by cat";
 $res=mysqli_query($con,$sql);
 
 while($row=mysqli_fetch_array($res)){
 $cat=$row['cat'];
 $catid=$row['catid'];
 $id=$row['mid'];
 $mname=$row['mname'];
 
 //$desc=$row['mdesc'];
 //$img=$row['mimage'];
 //$title=$row['mtitle'];
 ?>

         <li class="mt-5 text-uppercase "><a href="java.php?link=<?php echo $id ?>&amp;cid=<?php echo $catid ?>&amp;dash=<?php $page=$_GET['page']; if($page!=""){  echo "hi"; }  ?>&amp;page=<?php if(isset($_GET['dash'])){ $icon=$_GET['page'];   echo "$icon"; }  ?>"><?php echo $cat ?></a></li>
 <?php } } ?>     
          
        </ul>
      </nav>
    </div> <!--sidebar-->
   
         <!--navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" >
     <?php if($_GET['dash'] !="hi"){
     
     
     
     ?>
 <a href="home.php" class="mt-2" style="color:white;"><img src="" heiht="40px" width="40px" class="fa fa-home fa-2x rounded-circle" aria-hidden="true" style="margin-left:140px;margin-top:5px;" ></a>

 <?php }?>

     <?php if($_GET['dash'] =="hi"){
     $icon=$_GET['page'];
     
      //=$_GET['page'];

     ?>
     <a href="home.php?page=<?php if(isset($_GET['dash'])){  echo $icon; }  ?>&amp;dash=<?php if(isset($_GET['dash'])){  echo $icon; }  ?>" class="mt-2" style="color:white;"><img src="" heiht="40px" width="40px" class="fa fa-home fa-2x rounded-circle" aria-hidden="true" style="margin-left:140px;margin-top:5px;" ></a>
     <a href="<?php echo $icon ?>" class="" style="text-decoration:none;color:white;" aria-hidden="true"><iconify-icon icon="ic:round-dashboard" width="30px" height="30px"></iconify-icon><span style="font-size:10px;vertical-align:super;"> Dashboard</span></a>
     <?php } ?>
     <span>
					    <div class="translate" id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
         </span>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse text-uppercase fw-bold" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
        
          </li>
        <?php
 include "connection.php";
 $sql="SELECT * from modules where status='active'";
 $res=mysqli_query($con,$sql);
 
 while($row=mysqli_fetch_array($res)){
  $id=$row['mid'];
 $name=$row['mname'];
 //$desc=$row['mdesc'];
 //$img=$row['mimage'];
 //$title=$row['mtitle'];
 ?>
          <li class="nav-item ">
            <a class="nav-link" href="java.php?link=<?php echo $id ?>&amp;dash=<?php if(isset($_GET['dash'])){  echo "hi"; }  ?>&amp;page=<?php if(isset($_GET['dash'])){  echo $icon=$_GET['page']; }  ?>"><?php echo $name ?> <span class="sr-only"></span></a>
          </li>
 <?php }?>     
        </ul>
      </div>
      
    </nav>
    <!--navbar-->

  <div class="container-Fluid">
  
    <div class="row">
   <div class="col-md-2 mt-5 p-3 rounded " style="background:rgb(0, 0, 0,0.4);">
   
   <form class=" my-2 my-lg-0" method="post" enctype="multipart/form-data">
      <input class="form-control form-control-sm bg-transparent text-white border border-primary" type="search" placeholder="Search" aria-label="Search" list="dtlist" name="search" required>
      <input type="submit" value="Search" name="sr" class="btn btn-outline-success btn-sm form-control mt-3 shadow" >
      <datalist id='dtlist' class="custom-select custom-select-sm bg-white">
      <?php
      $cid=$_GET['cid'];
   $sql="select * from resources where catid='$cid'";
   $res=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($res)){
    ?>
    <option ><?php echo $row['title']?></option>
     <?php }?>
   </datalist>
    </form>
   <?php 
   if(isset($_GET['cid'])){
      $cid=$_GET['cid'];
  
    $sql="select * from resources where catid='$cid' ";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){

   

?>
   <iframe width="100%" height="215" class="mt-5" src="<?php echo $row['srcimage']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:20px;"></iframe>
   
    <?php } }?>
  </div>
  <!----------------------------------------------------------------------------------------------------------------->
   <div class="col-md-10  mt-5 p-5">
    <h1 class="alert text-uppercase text-center fw-bold text-white  fs-1 p-1" style="background:rgba(0,0,0,.1); box-shadow:8px 8px 5px 1px black;text-shadow:1px 1px 50px  white;border-left:4px solid green; border-right:4px solid green;"><?php echo $mname ?> </h1>

   <div class="srch" id="srch">
<?php  
include "connection.php";

if(isset($_POST['sr'])){
 // $cid=$_GET['cid'];
  $title=$_POST['search'];
$sql="SELECT resources.*,notes.*,modules.* from resources inner join notes on notes.id=resources.id inner join modules on notes.mid=modules.mid where resources.title like '%$title%' or resources.notes  like '%$title%' or resources.modulename  like '%$title%' or resources.catid  like '%$title%' order by resources.modulename";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==0){
  echo"<div class='alert alert-danger'>no results found</div>";
  }
function highlightWords($text, $word){
  $text=preg_replace('#'.preg_quote($word).'#i','<span class="text-warning "style="font:weight:bold;">\\0</span>',$text);
  return $text;
}
while($row=mysqli_fetch_array($res)){
   // $path=$row['txtfile'];
    $head=!empty($title)?highlightWords($row['title'],$title):$row['title'];
    $img=$note=$row['screenshot'];
    $mname=$row['modulename'];
   $nts=!empty($title)?highlightWords($row['notes'],$title):$row['notes'];
    $note2=explode("@",$nts);
    $download="resources/".$row['srcfile'];
    $data=file_get_contents($download);
   
    $x=count(file($download));
    $y=$x+1;

  
?>
<div class="" style="border-left:4px solid white;" >
<h3 class=" mb-5 mt-3 text-white display-10 fw-bold text-uppercase mx-5">   <?php  echo $head ?>  <span class="bg-success text-lowercase p-1 rounded fw-bold" style="font-size:15px;margin-left:2px; vertical-align:super; "><?php  echo $mname ?></span>  </h3>
</div>
<?php  foreach($note2 as $note){
  
?>
<div class="" style="border-left:4px solid orange;" >
<p class="text-white mx-5 fs-6 rounded" ><?php echo $note ?></p>
</div>
<?php }?>



<div class="form-group">
  

<div class="control-label text-right  " style="float:right;"><a href="pictures/<?php  echo $img ?>"class="text-white" style=""><iconify-icon icon="icomoon-free:image" height="20px" width="20px" style="" class="hv"></iconify-icon></a>&nbsp;<a download ="<?php  echo $download ?>" href="<?php  echo $download ?>"class="text-white" style=""><iconify-icon icon="mdi:file-download" height="20px" width="20px" style="" class="hv"></iconify-icon></a></div>
<textarea name="" id="textarea<?php echo $y ?>" cols="30" rows="<?php echo $x ?>" class="form-control mt-3 text-white  fw-bold scroll mb-5 " readonly style="  border:none; border-left:4px solid red; border-radius:0px;  background:rgb(0, 0, 0,0.2);  resize: none;"><?php  echo $data ?></textarea>

</div>



<?php  }} else{ ?>

</div><!--srch-->  

   <!----------------------------------------------------------------------------------------------------------------->
<div class="srch" id="srch">


<?php  
include "connection.php";

if(isset($_GET['cid'])){
  $cid=$_GET['cid'];
$sql="SELECT resources.*,notes.* from resources inner join notes on notes.catid=resources.catid where resources.catid='$cid' group by resources.id";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
   // $path=$row['txtfile'];
    $head=$row['title'];
    $img=$note=$row['screenshot'];
    $note2=explode("@",$row['notes']);
    $download="resources/".$row['srcfile'];
    $data=file_get_contents($download);
    $x=count(file($download));
    $y=$x+1;
    
  
?>
<div class="" style="border-left:4px solid white;" >
<h3 class=" mb-5 mt-3 text-white display-10 fw-bold text-uppercase mx-5">   <?php  echo $head ?> </h3>
</div>
<?php  foreach($note2 as $note){
?>
<div class="" style="border-left:4px solid orange;" >
<p class="text-white mx-5 fs-6" ><?php echo $note ?></p>
</div>
<?php }?>



<div class="form-group">


<div class="control-label  p-2 " style="float:right; background:rgba(0,0,0,.3);"><a href="pictures/<?php  echo $img ?>"class="text-white" style="" title="Preview"><iconify-icon icon="icomoon-free:image" height="20px" width="20px" style="" class="hv"></iconify-icon></a>&nbsp;<a download ="<?php  echo $download ?>" href="<?php  echo $download ?>"class="text-white" style="" title="Download"><iconify-icon icon="mdi:file-download" height="20px" width="20px" style="" class="hv"></iconify-icon></a></div>
<textarea name="" id="textarea<?php echo $y ?>" cols="30" rows="<?php echo $x ?>" class="form-control mt-3 text-white  fw-bold scroll mb-5 " readonly style="  border:none; border-left:4px solid red; border-radius:0px;  background:rgb(0, 0, 0,0.2);  resize: none;"><?php  echo $data ?></textarea>

</div>



<?php  }}  ?>
<?php  }  ?>
</div><!--srch-->  
</div><!--col-sm-9-->

</div><!--row--> 

</div><!--container-->



<!--modal-->
<!-- Button trigger modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
$(document).ready(function(){

  $("#search").keyup(function(){
    var input2=$(this).val();
    //alert(input);
if(input2 !=""){
  $.ajax({
    url:"livesrch.php",
    method:"POST",
    data:{input2:input2},

    success:function(data){
      $("#results").html(data);

    }


  });


}else{
  
 //  window.location.href='feedback.php';
 alert('no items selectd');
// window.location.href='feedback.php';

}


  });



});

  </script>
<!-- Modal -->

<!--modal-->
<script src="Language Translator App in JavaScript\js\countries.js"></script>
<script src="Language Translator App in JavaScript\js\script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <script src="carousel/js/jquery.min.js"></script>
      <script src="carousel/js/popper.js"></script>
      <script src="carousel/js/bootstrap.min.js"></script>
      <script src="carousel/js/owl.carousel.min.js"></script>
      <script src="carousel/js/main.js"></script>
  </body>
</html>
