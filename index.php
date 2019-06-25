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

  echo $password=md5(mysqli_real_escape_string($con,$_POST['password']));

   echo $select="select * from admin where username='$Username' and password='$password' ";

  $result=mysqli_query($con,$select);
  if(mysqli_num_rows($result) > 0)
  {
     while($row = $result->fetch_assoc())
     {
          $_SESSION['First_Name']=$row["username"];
           $_SESSION['userid']=$row["id"];

             //$_SESSION['userid'];
             echo "login successfully "; 
             header('Location:adduserlist.php');
      }
    }
    else
    {
     $error_login = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  login field!!.
                  </div>';
    }
  }
?>

<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP Login Form</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
body
{
background-image: url("image_1/login1.jpg");
}

.body
{
 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
</head>
<body>

<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="" role="form">
        <fieldset>
          <h2 style="text-align: center;color: white">Please Sign In</h2>
          <hr class="colorgraph">

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

          <div class="form-group">
            <input  type="text" class="form-control input-lg" placeholder="Enter Username" name="username" value="<?php if(isset($_POST['submit'])) { echo $_POST['username']; }?>">
          </div>
          <div class="form-group">
            <input type="password" name="password"  class="form-control input-lg" placeholder="Enter Password">
          </div>
          <hr class="colorgraph">
          <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
              <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block">
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
</body>
</html>
