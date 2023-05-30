<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CGD</title>
    
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
  
    <style>
       



 
    </style>
  </head>
  <body >
   

    

  <div class="container">
  <div class="row">
  
  <div class="team-boxed">
          
              <div class="intro">
                  <h2 class="text-center text-uppercase  text-white fw-bold">Explore Our Artworks</h2>
                  <p class="text-center"></p>
              </div>
              <div class="row people" >
  
              <?php
  include "connection.php";
  $sql="SELECT * from cgd where status='active'";
  $res=mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_array($res)){
  $cat=$row['category'];
  $src=$row['sources'];
  $img=$row['srcimg'];
  //$page=$row['pages'];
  //$id=$row['mid'];
  //$title=$row['mtitle'];
  ?>
                  <div class="col-lg-3   item p-3 " data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                 
                     <a href="pictures/<?php echo $img ?>" class="card-link"> <div class="box"><img class="rounded w-80 mt-3" src="pictures/<?php echo $img ?>" width="200px" height="130px" style="box-shadow:1px 1px 10px 1px black;"><a>
                     <p class="title mt-2  text-center text-white"><?php echo substr($row['sources'],0, -3); ?></p>
                          <h4 class="name text-uppercase rounded text-center p-3" style=""><a href="download.php?path=resources/<?php echo $src ?>" download="" class="fa fa-download text-white "></a></h4>
                         
                         
                          <div class="mb-4"><iconify-icon icon="simple-icons:adobeillustrator" style="color:white"></iconify-icon></div>
                    </div>
                      </div>
                 
  <?php }?>
          
          
          
              
          </div>
      </div>
  </div><!--row-->
  

</div><!--container-->
<!--modal-->
<!-- Button trigger modal -->


<!-- Modal -->

<!--modal-->

    <script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

   
  </body>
</html>
