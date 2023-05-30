

<div class="card-body">
<div class="table-responsive">
  <table class="table table-hover" id="results">
    <thead class=" text-primary">
      
    </thead>
    
<?php
include("connection.php");
if(isset($_POST['input2'])){
    echo"<script>alert('no items selectd');</script>";
        $input2=$_POST['input2'];
       $sql="select * from feedback where name like '%$input2%' or email like '%$input2%' or feedback like '%$input2%'";
       $res=mysqli_query($con,$sql);

       function highlightWords($text, $word){
           $text=preg_replace('#'.preg_quote($word).'#i','<span class="text-warning "style="font:weight:bold;">\\0</span>',$text);
           return $text;
       }
       if(mysqli_num_rows($res)>0){
        
        ?>


             <tbody>
                 <?php

                 while($row=mysqli_fetch_array($res)){
                     
                     $name=!empty($input2)?highlightWords($row['name'],$input2):$row['name'];
                     $email=!empty($input2)?highlightWords($row['email'],$input2):$row['email'];
                     $feedback=!empty($input2)?highlightWords($row['feedback'],$input2):$row['feedback'];
                     ?>
                
                  <tr>
                          <td>
                              <p class="text-white font-weight-bold " style="font-size:15px;"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;  <?php echo $name ?></p>
                              <p class="text-white font-weight-bold" style="font-family:roboto;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;  <?php echo $email?> &nbsp;&nbsp;&nbsp;  <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span class="text-info"> <?php echo $row['date']?></span> </p>
                              <p class="text-white font-weight-bold " style="font-family:roboto;"> <i class="fa fa-comments" aria-hidden="true"></i>&nbsp; <span class="fw-bold"> <?php echo $feedback?></span></p>
                              <a href="feedback.php?mailid=<?php echo $row['email']?>" class="text-white"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Reply</a>
                            
                          </td>
                         
                        </tr>
                        <?php }?>
                             
                                
                                
                                
                               
                                
                                
                                
                                
                      </tbody>
                    </table>

        <?php
       }else{
            echo"<h6 class='text-danger mt-3 text-center'>No Results Found</h6>";

       }


}
?>