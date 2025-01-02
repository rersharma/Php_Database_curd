<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css"/>

    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>




    <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>

</head>
<body>
    <div class="container">
   <div class="rows">
    <h1 class="text-center">Student Record List</h1>
    <div class="col-sm-9 offset-sm-2 mt-4">
    <table id="muskaan" class="table-secondary border">
        <thead>
        <tr>
            <th>Sno</th>
            <th>Student Name</th>
            <th>Student Branch</th>
            <th>Student roll</th>
            <th>Student Address</th>
            <th>Action</th>
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
            $id=$geetika["id"];
            $nm=$geetika["name"];
            $brn=$geetika["branch"];
            $rll=$geetika["roll"];
            $adrs=$geetika["address"];
             echo "<tr>";
             echo "<td>";
             echo $id;
             echo "</td>";
             echo "<td>";
             echo $nm;
             echo "</td>";
             echo "<td>";
             echo $brn;
             echo "</td>";
             echo "<td>";
             echo $rll;
             echo "</td>";
             echo "<td>";
             echo $geetika["address"];
             echo "</td>";
             echo "<td>";
             echo "<a href='delete_record.php?id=$id' onclick='return confirm(\"are you sure you want to Delete this Record\")'; class='btn btn-danger'>Delete</a>";
             echo "&nbsp;&nbsp;<a href='update_record.php?id=$id&name=$nm&branch=$brn&address=$adrs&rl=$rll' onclick='return confirm(\"are you sure you want to Update this Record\")'; class='btn btn-warning'>Update</a>";
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
    layout: {
        topStart: {
            buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
        }
    }
});

 </script>
</body>
</html> 