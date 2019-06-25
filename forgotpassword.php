<?php
include'admin_header.php';
  include('config.php');
  $error_old="";
  $error_pass="";
  $error_new="";
  $error_login="";
  $match="";
  $record ="";

  if(isset($_POST['submit']))
  {
     $flag=1;
  if($_POST['password'] == '' && empty($_POST['password']))
    { 
       $error_old = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter old password!!.
                  </div>';
    }

  $oldpassword=md5(mysqli_real_escape_string($con,$_POST['password']));

    if($oldpassword)
    {
    if($_POST['npassword'] == '' && empty($_POST['npassword']))
    { 
       $error_pass = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please new enter password!!.
                  </div>';
    }
  }

  $password=md5(mysqli_real_escape_string($con,$_POST['npassword']));
 
  if($password)
      {
    if($_POST['newpassword'] == '' && empty($_POST['newpassword']))
    { 
       $error_new = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please confirm the password!!.
                  </div>';
       $flag=0;
    }
  }

  $newpassword=md5(mysqli_real_escape_string($con,$_POST['newpassword']));

  if($password!=$newpassword)
  {
      $match= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   password Mismatch !!.
                  </div>';
      $flag=0;
   }
 
$query = "select * from admin";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

if($row)
{
if($oldpassword==$row['password'])
{
  $update="UPDATE admin SET password='$newpassword' where password='$oldpassword' ";
      $updates=mysqli_query($con,$update);
  if($updates)
  {
  echo $record = '<div class="alert alert-success alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Record updated successfully!.
                  </div>';
  }
             
  }
 } 
    else
    {
    echo $error_login = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Password not update!!.
                  </div>';
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<div class="container">      
 <div class="wrapper">

<form action="forgotpassword.php" class="form-signin" method="post">
    <h2 class="form-signin-heading">Change Password!!</h2>
    <?php 

    if(empty($error_pass))
    {
      if(empty($error_new))
      {
         if(!empty($match))        
         {
          echo $match;
        }
      }
    }
   
   if($error_new)
   {
    if($error_pass)
    {
      if($error_old)
      {
        echo $error_old;
      }
      else
      {
        echo $error_pass;
      }
    }
    else
    {
      echo $error_new;
    }
   }
      ?>

    <input type="password" class="form-control"  name="password" placeholder="Enter old password"  autofocus="" value="<?php if(isset($_POST['submit'])) { echo $_POST['password']; }?>">
    <br>
    <input type="password" class="form-control"  name="npassword" placeholder="Enter New Password" ><br>
     <input type="password" class="form-control"  name="newpassword" placeholder="Confirm Password" ><br>      
    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="submit" >Change Password</button>   
</form>
  </div>
  </div>
  </body>
  </html>

  <?php

  ?>