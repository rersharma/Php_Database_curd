
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>
<body>
    <h1 align="center">Search Student Based On Rll</h1>
    <form method="post" action="search.php" align="center">
    Enter Your Roll <input type="number" name="roll" required/><br><br>
    <button>Search Now</button>
   </form>
<br><br>


<table border="1" align="center">
<tr>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>Student Branch</th>
    <th>Student Roll</th>
    <th>Student Address</th>
</tr>

<?php 

if(!empty($_POST["roll"]))
{

     $roll=$_POST["roll"];
     include "config.php";
     $q="SELECT * from student where roll='$roll'";
     $z=mysqli_query($con,$q);
     $geetika=0;
     while($rows=mysqli_fetch_array($z))
     {
        $geetika++;
        echo "<tr>";
        echo "<td>";
        echo $rows["id"];
        echo "</td>";
        echo "<td>";
        echo $rows["name"];
        echo "</td>";
        echo "<td>";
        echo $rows["branch"];
        echo "</td>";
        echo "<td>";
        echo $rows["roll"];
        echo "</td>";
        echo "<td>";
        echo $rows["address"];
        echo "</td>";
        echo "</tr>";
     }
     if($geetika==0)
     {
         $message="This $roll not exits in our Database";
     }
     else 
     {
         $message="$roll Record Found";
     }



}
?>

</table>



<?php 
    if(!empty($message))
    {
          echo "<h3 align='center'>$message</h3>";
    }

    ?>


</body>
</html>