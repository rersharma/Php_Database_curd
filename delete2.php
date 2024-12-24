<?php 

if(!empty($_POST["roll"]))
{
    $rll=$_POST["roll"];
    include "config.php";
    $q1="select * from student where roll='$rll'";
    $count=0;
    $z=mysqli_query($con,$q1);
    while($rows=mysqli_fetch_array($z))
    {
          $count=1;
          break;
    }
    if($count>0)
    {
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
    else 
    {
        $message="Roll :- $rll Not Exits in our Database";
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
    <form action="delete2.php" method="post" align="center" onsubmit="return confirm('Are you Sure You Want To Delete this?');">
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