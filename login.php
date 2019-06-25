<?php
  session_start();
  require_once ('config.php');
  $error="";
  $error_pass="";
  $error_login="";

  if(isset($_POST['submit']))
  { 
    if($_POST['username'] == '' && empty($_POST['username']))
    {
      $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter username!!.
                  </div>';
    }

    $Username=mysqli_real_escape_string($con,$_POST['username']);
   
    if($Username)
    {
    if($_POST['password'] == '' && empty($_POST['password']))
     { 
       $error_pass = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter password!!.
                  </div>';
     }
    }

  $password=mysqli_real_escape_string($con,$_POST['password']);
$password_md5=md5($password);

$select="select * from signin where Username='$Username' AND Password='$password_md5'";
$result=mysqli_query($con,$select);
  if(mysqli_affected_rows($con) > 0)
  {
     while($row = $result->fetch_assoc())
     {
          $_SESSION['First_Name']=$row['Username'];
           $_SESSION['userid']=$row["id"];
           $_SESSION['Email_Id']=$row['Email_Id'];
           $_SESSION['Contact']=$row['Contact'];
           $_SESSION['Address']=$row['Address'];
           $_SESSION['Pincode']=$row['Pincode'];

             //$_SESSION['userid'];
             echo "login successfully "; 
             header('Location:index.php');
      }
    }
    else
    {
     $error_login = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  login failed!!.
                  </div>';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
   body
{

 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
  </style>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
body 
{
  background: #eee ;  
}
.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
   {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
</style>
<title>Login</title>
</head>
<body>
<div class="container">
 <div class="wrapper">
  <form action="" class="form-signin" method="post">
    <h2 class="form-signin-heading">Please login here!!</h2>
    <?php 
    echo $error; 
    echo  $error_pass;
    if(empty($error))
    {
      if(empty($error_pass))
      {
         if(!empty($error_login))        
         {
          echo $error_login;
        }
      }
    }
      ?>

    <input type="text" class="form-control"  name="username" placeholder="Enter Username"  autofocus="" value="<?php if(isset($_POST['submit'])) { echo $_POST['username']; }?>">
    <br>
    <input type="password" class="form-control"  name="password" placeholder="Enter Password" ><br>      
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" >Login</button>  
    <p style="color:red">If you are not register then please register first</p> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adduser.php"><u>Create New Account</u></a>
</form>
  </div>
  </div>
  </body>
  </html>

  <?php

  ?>