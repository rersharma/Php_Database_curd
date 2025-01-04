<?php
session_start();

include "config.php";
if(!empty($_POST["email"]) and !empty($_POST["password"]))
{
     $email=$_POST["email"];
     $password=md5($_POST["password"]);
     $q="select * from signup where email='$email' and password='$password'";
     $flag=0;
     $z=mysqli_query($con,$q);
     while($rows=mysqli_fetch_array($z))
     {
            $flag=1;
            $_SESSION["matchit"]=$rows['name'];
            $_SESSION["email"]=$email;
     }
     if($flag==0)
     {
          $message="Incorrect EmailId & Password";
     }
     else 
     {
         echo "<script>window.location='dashboard.php';</script>";
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
      <center>
         <h1>Login</h1>
P
         <form action="login.php" method="post">
            Email-Id <input type="email" name="email" required placeholder="Enter Your Email-Id"><br><br>
            Password <input type="password" name="password" required placeholder="Enter Your Password"><br><br>
            <button>Login</button> <br><br>
         </form> 
       <a href="newuser.php">Not Have an Account?</a> <br><br>
       <a href="forgotpassword.php">Forgot Password?</a>
      </center>
      <?php 
   
          if(!empty($message))
          {
               echo "<h1 align='center'>$message</h1>";
          }

     ?>
</body>
</html>