<?php
session_start();
include "connection.php";

if(isset($_POST['stud_delete_multiple_btn']))
{
    $all_id = $_POST['stud_delete_id'];
    $extract_id = implode(',' , $all_id);
     echo $extract_id;

    $query = "DELETE FROM modules WHERE id IN( $extract_id) ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Deleted Successfully";
        header("Location: multi.php");
    }
    else
    {
        $_SESSION['status'] = "Multiple Data Not Deleted";
        header("Location: multi.php");
    }
}
?>