<?php 
session_start();

if(empty($_SESSION["matchit"]))
{
    echo "<script>window.location='login.php';</script>";
}
if(!empty($_POST["oldpassword"]) and !empty($_POST["newpassword"]) and !empty($_POST["confirmpassword"]))
{
      $oldpass=md5($_POST["oldpassword"]);
      $newpass=$_POST["newpassword"];
      $confipass=$_POST["confirmpassword"];
      $useremail=$_SESSION["email"];
      include "config.php";
      $q="select * from signup where email='$useremail' and password='$oldpass'";
      $z=mysqli_query($con,$q);
      $flag=0;
      while($rows=mysqli_fetch_array($z))
      {
         $flag=1;
         break;
      }
      if($flag==0)
      {
         $message="Old password is Incorrect";
      }
      else 
      {
              if($newpass==$confipass)
              {
                   $md=md5($newpass);
                   $q="update signup set password='$md' where email='$useremail'";
                   if(mysqli_query($con,$q)==true)
                   {
                    $message="Your password Change Successfully";

                   }
                   else 
                   {
                    $message="Technically Issue Check your Server";
                   }
              }
              else 
              {
                $message="New password & Confirm is Mismatch";
              }
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
     <h1 align="center">Change Password</h1>
     <form align='center' action='changepassword.php' method="post">
       Enter Your Old Password <input type="password" name="oldpassword" required/><br><br>
       Enter Your New Password <input type="password" name="newpassword" required/><br><br>
       Enter Your Confirm Password <input type="password" name="confirmpassword" required/><br><br>
       <button>Change Password</button>
    </form>
    <?php 
   
        if(!empty($message))
        {
            echo "<h1 align='center'>$message</h1>";
        }

   ?>
</body>
</html>