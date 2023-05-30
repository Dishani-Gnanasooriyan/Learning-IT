<?php
	require_once 'connection.php';
	
	if(ISSET($_POST['update'])){
		$nid = $_POST['id'];
		$cat = $_POST['category'];
		$src = $_FILES['sources']['name'];
		//$address = $_POST['address'];
        $sql="update cgd set category='$cat', sources='$src'  where id='$nid'";
        move_uploaded_file($_FILES['sources']['tmp_name'],"resources/$src");
		$res=mysqli_query($con,$sql);

		//header("location: cgd.php");
	}
?>