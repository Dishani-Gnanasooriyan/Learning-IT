<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
session_start();
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

      // echo "<script>alert('data successfully added')</script";
       
      session_destroy();
    }
 
   
    else{
        die(mysqli_error($con));
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<style>
input[type="file"] {
  color: #b8b8b8;
  content:"select image file"
}

input[type="submit"]:hover {
  
  box-shadow:1px 1px 30px 1px #00cdac;
  color:#00cdac;
}

</style>


</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./adddata.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Add Datas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <?php


if(isset($_GET['b'])){
    $id=$_GET['b'];
       $sql2="SELECT modules.mname,modules.mid, details.mimage, details.mdesc,details.mtitle FROM modules INNER JOIN details ON modules.mid = details.mid where modules.mid='$id'";
       $res2=mysqli_query($con,$sql2);
        $row1=mysqli_fetch_array($res2);
        $x=$row1['mid'];
        $img=$row1['mimage'];
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
         echo "<script>window.location.href='tables.php'</script>";
 
     }


}
        ?>
      <div class="content">
        <div class="container-fluid">
      <div class="row ">
      <div class="col-md-3 ">
      <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
              <input type="text" class="form-control" placeholder="enter module id" name="idx" required="require"  value="<?php echo $x; ?>" disabled>
                 <!--<button type="submit" class="btn btn-default btn-round btn-just-icon">
                 <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>-->               
              </div>
              </div><!--col md3-->
              <div class="col-md-9">
             <div class="form-group">
              <input type="text" name="name1" class="form-control" placeholder="enter module name" value="<?php echo $row1['mname'] ; ?>">

             </div>
              </div><!--col md9-->

              <div class="col-md-6">
              <div class="form-group">
              <input type="text" name="title1" class="form-control" value="<?php echo $row1['mtitle'] ; ?>">
                           
              </div>
              </div><!--col md6-->

              <div class="col-md-6">
                <div class="row">
             <div class="col-md-9"><input type="file"  name="pic1" class="form-control mt-2" accept=".jpg, .jpeg, .png" value="<?php echo $row1['mimage'] ; ?>"></div>
             
           <div class="col-md-3"><img src="pictures/<?php echo $row1['mimage'] ; ?>"  class="rounded img-fluid"   height="50px" alt=""></div>

           </div>
           
          
              </div><!--col md6-->
              <div class="col-md-12">
              <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="desc1"  placeholder="Enter Description"><?php echo $row1['mdesc'] ; ?></textarea>
                              
              </div>
              </div><!--col md12-->

              <div class="col-md-12">
              <div class="form-group mt-5 ">
              <input type="submit" class=" border border-success rounded form-control" value="Update" name="btn1">
                         
              </div>
              </div><!--col md12-->
            </div><!--row-->
            </form>
<?php } ?>

<?php   
if(isset($_POST['btnadd'])){

?>
<div class="content">
        <div class="container-fluid">
      <div class="row ">
      <div class="col-md-3 ">
      <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
              <input type="text" class="form-control" placeholder="enter module id" name="idx" required="require" >
                 <!--<button type="submit" class="btn btn-default btn-round btn-just-icon">
                 <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>-->               
              </div>
              </div><!--col md3-->
              <div class="col-md-9">
             <div class="form-group">
              <input type="text" name="mname" class="form-control" placeholder="enter module name" >

             </div>
              </div><!--col md9-->

              <div class="col-md-6">
              <div class="form-group">
              <input type="text" name="mtitle" class="form-control" >
                           
              </div>
              </div><!--col md6-->

              <div class="col-md-6">
             
              <input type="file"  name="pic" class="form-control mt-2" accept=".jpg, .jpeg, .png"  >
           
          
              </div><!--col md6-->
              <div class="col-md-12">
              <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="mdesc"  placeholder="Enter Description"></textarea>
                              
              </div>
              </div><!--col md12-->

              <div class="col-md-12">
              <div class="form-group mt-5 ">
              <input type="submit" class=" border border-success rounded form-control" value="add" name="btn">
                         
              </div>
              </div><!--col md12-->
            </div><!--row-->
            </form>

            <?php }?>

            
        <div class="container-fluid">
          <div class="row mt-5">
            <div class="col-md-12">

            

              <div class="card">
                <div class="card-header card-header-warning">
                  <div class="row">
                    <div class="col-sm-6">
                  <h4 class="card-title ">Modules Details </h4>
                  </div>
                  <div class="col-sm-6">
                    <div class="text-right">
                      <form action="" method="post">
                  <button type="submit" class="btn btn-danger card-title btn-sm " name="btnadd">Add</button>
                  </form>
                  </div>
                  </div>
                  </div>
                  <p class="card-category"> View and edit that Details</p>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <table class="table ">
                      <thead class="text-white">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Details
                        </th>
                        <th>
                         Images
                        </th>
                        <th colspan="2">
                          Operations
                        </th>
                      </thead>
                      <tbody>

                      <?php
include "connection.php";
$sql="SELECT modules.mname,modules.mid, details.mimage, details.mdesc FROM modules INNER JOIN details ON modules.mid = details.mid ";
$res=mysqli_query($con,$sql);




while($row=mysqli_fetch_array($res)){
    $name=$row['mname'];
    $desc=$row['mdesc'];
     $mid=$row['mid'];
    $img=$row['mimage'];

    echo "  
<div class='modal fade' id='del' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
   <div class='modal-dialog'>
       <div class='modal-content'>
           <div class='modal-header'>
               <h3 class='text-dark'>Delete</h3>
               <div class='button btn-close btn-sm' data-bs-dismiss='modal'></div>
           </div>
           <div class='modal-body'>
               <P>Do You Want to Delete the Record?</P>
           </div>
           <div class='modal-footer'>
               <button class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
               <a href='delete.php?a=$mid' class='btn btn-primary'>Delte</a>
           </div>
       </div>
   </div>
</div>";
    //$title=$row['mtitle'];
    ?>
                        <tr>
                          <td>
                          <?php echo $mid ?>
                          </td>
                          <td>
                          <?php echo $name ?>
                          </td>
                          <td>
                          <?php echo $desc ?>
                          </td>
                          <td>
                          <img src="pictures/<?php echo $img ?>" alt="" class="rounded" height="100px" width="150px">
                          </td>
                          <td class="" >
                          <a href="#" data-bs-toggle="modal" title="Delete" data-bs-target="#del" ><i class="fa fa-trash text-white mt-1 fa-2x" aria-hidden="true"></i></a>
                          </td>
                          <td class="" >
                          <a href="tables.php?b=<?php echo $mid ?>" data-bs-toggle="tool-tip" title="Delete"><i class="fa fa-pencil-square text-white mt-1 fa-2x" aria-hidden="true"></i></a>
                          </td>
                        </tr>

<!--modal-->

<!--modal-->

                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



            
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  LIT Team
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Lit Team</a> for a Studing Purposes.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
       
        
       
       
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>

</body>

</html>