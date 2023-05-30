<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='post'>
<td> <input type="file" name="files"></td>
                       
                      </tr><tr><td colspan='6'><input type='submit' class='btn btn-danger btn-sm form-control' value='Update' name='updx'></td></tr></form>
                          <?php 
                       
                        
                        
                         if(isset($_POST['updx'])){
                          include "connection.php";
                          //$notes=$_POST['notes'];  
                         
                          //$rsrc=$_POST['rsrc'];
                         // $rsrc=$_FILES['rsrc']['name'];
                         
                          //$nid=$_GET['ids'];   
                                

 $targetDir = "pictures/";
 $fileName = $_FILES["files"]["name"];
 
 $targetFilePath = $targetDir . $fileName;
 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 
 if(isset($_POST["updx"]) && !empty($_FILES["files"]["name"])){
     // Allow certain file formats
     $allowTypes = array('jpg','png','jpeg','gif','pdf');
     if(in_array($fileType, $allowTypes)){
         // Upload file to server
         if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath)){
             // Insert image file name into database
             $sql="update resources set notes='$notes',srcimage='$filename' where id='1'";
             $insert = mysqli_query($con,$sql);
             if($insert){
                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
             }else{
                 $statusMsg = "File upload failed, please try again.";
             } 
         }else{
             $statusMsg = "Sorry, there was an error uploading your file.";
         }
     }else{
         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
     }
 }else{
     $statusMsg = 'Please select a file to upload.';
 }
 
 // Display status message
 echo $statusMsg;
}
                         
                        ?>
    
</body>
</html>