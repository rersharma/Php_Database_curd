<?php 

if(!empty($_POST["name"]) and !empty($_POST["roll"]) and !empty($_POST["branch"]) and !empty($_POST["address"]))
{
    $nm=$_POST["name"];
    $rll=$_POST["roll"];
    $brn=$_POST["branch"];
    $adrs=$_POST["address"];
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
            $query="update student set name='$nm',branch='$brn',address='$adrs' where roll='$rll'";
            if(mysqli_query($con,$query)==true)
            {
            $message="$nm Record Hasbeen Updated";    
            }
            else 
            {
                $message="$nm Record not Updated";
            }
    }
    else 
    {
        $message="Rollno you Enter based on the you update :- $rll  not Exits In the Record";

     }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Update Student  Records</h1>
    <form action="update2.php" method="post" align="center">
    Student Name <input type="text" name="name" required><br><br>
         Roll <input type="number" name="roll" required><br><br>
         Branch <select required name="branch">
                <option value="" selected disabled>Select Branch</option>
                <option>CSE</option>
                <option>MECH</option>
               </select><br><br>
        Address <textarea cols="10" rows="10" name="address"></textarea> <br><br>
        <button>Update Now</button>
    </form>
    <?php 
         if(isset($message))
         {
             echo "<h1 align='center'>$message</h1>";
         }

   ?>
</body>
</html>