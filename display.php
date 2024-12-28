<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>
<body>
    <div class="container">
   <div class="rows">
    <h1 class="text-center">Student Record List</h1>
    <div class="col-sm-8 offset-sm-2 mt-4">
    <table id="muskaan" class="table-secondary border">
        <thead>
        <tr>
            <th>Sno</th>
            <th>Student Name</th>
            <th>Student Branch</th>
            <th>Student roll</th>
            <th>Student Address</th>
       </tr>
</thead>

<tbody>
       <?php
        include "config.php";
        mysqli_select_db($con,"college");
        $q="select * from student";
        $z=mysqli_query($con,$q);
        while($geetika=mysqli_fetch_array($z))
        {
             echo "<tr>";
             echo "<td>";
             echo $geetika["id"];
             echo "</td>";
             echo "<td>";
             echo $geetika["name"];
             echo "</td>";
             echo "<td>";
             echo $geetika["branch"];
             echo "</td>";
             echo "<td>";
             echo $geetika["roll"];
             echo "</td>";
             echo "<td>";
             echo $geetika["address"];
             echo "</td>";

             echo "</tr>";
        }

      ?>
</tbody>
    </table>
 
   </div>
</div>
     

<script>

    new DataTable('#muskaan', {
        order: [[3, 'desc']]
    });

 </script>
</body>
</html> 