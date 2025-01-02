<?php 
include "config.php";
if(!empty($_POST["name"]) and !empty($_POST["gender"]) and !empty($_POST["state"]) and !empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["address"]))
{
     $nm=$_POST["name"];
     $gen=$_POST["gender"];
     $st=$_POST["state"];
     $em=$_POST["email"];
     $psw=md5($_POST["password"]);
     $adrs=$_POST["address"];
     $flag=0;
     $q1="select * from signup where email='$em'";
     $z1=mysqli_query($con,$q1);
     while($rows=mysqli_fetch_array($z1))
     {
        $flag=1;
        break;
     }
     if($flag==0)
     {
        $q="insert into signup(name,gender,state,email,password,address)values('$nm','$gen','$st','$em','$psw','$adrs')";
        if(mysqli_query($con,$q)==true)
        {
            echo "<script>alert('signup successfully');</script>";
            echo "<script>window.location='login.php';</script>";
        }
    }
    else 
    {
        $message="This $em Already Exists";
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
         <h1>Registartion</h1>

         <form action="newuser.php" method="post">
            Name <input type="text" name="name" required placeholder="Enter Your Name"/><br><br>
            Gender <input type="radio" required name="gender" value="male">Male&nbsp;
            <input type="radio" name="gender" value="male">Female <br><br>
            State <select name="state" required>
                  <option selected disabled value="">Select State</option>
                  <option>Haryana</option>
                  <option>Punjab</option>
                  <option>Himachal</option>
                  <option>Delhi</option>
                  </select><br><br>
            Email-Id <input type="email" name="email" required placeholder="Enter Your Email-Id"><br><br>
            Password <input type="password" name="password" required placeholder="Enter Your Password"><br><br>
            Address <textarea cols="10" name="address" required></textarea><br><br>
            <button>Signup Now</button> <br><br>
         </form> 
       <a href="login.php">Already Have an Account?</a> <br><br>
        <?php 
          if(!empty($message))
          {
              echo $message;
          }
        ?>
      </center>
</body>
</html>