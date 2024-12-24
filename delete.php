<?php 

if(!empty($_POST["roll"]))
{
    $rll=$_POST["roll"];
    include "config.php";
    $query="delete from student where roll='$rll'";
    if(mysqli_query($con,$query)==true)
    {
       $message="$rll Record Hasbeen Deleted";    
    }
    else 
    {
        $message="$rll Record not Deleted";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Delete</title>
</head>
<body>
    <h1 align="center">Student Delete Records</h1>
    <form action="delete.php" method="post" align="center">
         Roll <input type="number" name="roll" required><br><br>
        <button>Delete Now</button>
    </form>
    <?php 
         if(isset($message))
         {
             echo "<h1 align='center'>$message</h1>";
         }

   ?>
</body>
</html>