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
     <h1 align="center">Change Password</h1>
     <form align='center' action='changepassword.php'>
       Enter Your Old Password <input type="text" name="oldpassword" required/><br><br>
       Enter Your New Password <input type="text" name="newpassword" required/><br><br>
       Enter Your Confirm Password <input type="text" name="confirmpassword" required/><br><br>
       <button>Change Password</button>
    </form>
</body>
</html>