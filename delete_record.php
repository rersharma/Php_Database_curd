<?php 
$student_id=$_GET['id'];
include "config.php";
$q="delete from student where id='$student_id'";
if(mysqli_query($con,$q)==true)
{
      echo "<script>alert('record Deleted Successfuly');</script>";
      echo "<script> window.location='display.php';</script>";
}
else 
{
    echo "<script>alert('record  Not Deleted');</script>";
    echo "<script> window.location='display.php';</script>";
}


?>