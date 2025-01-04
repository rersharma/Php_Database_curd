<?php 
session_start();

if(empty($_SESSION["matchit"]))
{
    echo "<script>window.location='login.php';</script>";
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
     <h1 align='center'>Welcome To Dashboard <?php echo $_SESSION['matchit'];  ?> | <?php  echo $_SESSION["email"]; ?></h1>
     <center>
        <a href="changepassword.php">Change Password</a>
        <a href='logout.php'>Logout</a>
     </center> 
</body>
</html>