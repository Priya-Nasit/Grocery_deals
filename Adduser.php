<?php
include 'header.php';
include 'config.php';

  $error="";
  $error_contact="";
  $error_con="";
  $error_match="";
  $error_email="";
  $newrecord="";
  $err_image="";
  $err_imagesize="";
  $err_imagetype="";
   
    
  if(isset($_POST['submit']))
  {
    $flag=1;
    if($_POST['fisrtname'] == '' && empty($_POST['fisrtname']))
    {
    $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter username!!.
                  </div>';
            
            $flag=0;    
    }

    $firstname=mysqli_real_escape_string($con,$_POST['fisrtname']);

    if($flag == 1)
    {
   if(!preg_match("/^[a-zA-Z ]*$/",$firstname))
   {
   $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter Firstname properly!!.
                  </div>';
          $flag=0;      
     
    }
  }

    if($firstname)
    {
     if($_POST['password'] == '' && empty($_POST['password']))
     { 
       $error= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter password!!.
                  </div>';
         
         $flag=0;
     } 
   }
  $password=mysqli_real_escape_string($con,$_POST['password']);

  if($firstname && $password)
  {
    if($_POST['contact'] == '' && empty($_POST['contact']))
     {
        $error= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter contact!!.
                  </div>';
         
         $flag=0;
       }
     } 

    $contact= mysqli_real_escape_string($con,$_POST['contact']);

    if(strlen($contact)!=10)
    {
      $error_match= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter contact number properly only 10 digit allow!!.
                  </div>';
          $flag=0;   
    }

    /*if($flag==1)
    {
    if(!preg_match("/^[7-9]{1}-[0-9]{4}-[0-9]{5}$/", $contact))
   {
     $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Enter contact number properly!!.
                  </div>';
          $flag=0;      
     }
    }*/
  

    if($firstname && $password && $contact)
    {
       if($_POST['emailid'] == '' && empty($_POST['emailid']))
       {
$error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter emailid!!.
                  </div>';
       
         
         $flag=0;
       }
     }
    
    $emailid= mysqli_real_escape_string($con,$_POST['emailid']);
   
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $emailid))
  //if(!preg_match('^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$',$emailid))
  {
   if($emailid!="")
   {
   $error_email= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  invalid email address.....please enter valid email address!!.
                  </div>';
              $flag=0;
   }
 }



    if($firstname && $password && $contact && $emailid)
    {
       if($_POST['address'] == '' && empty($_POST['address']))
       {
$error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Address!!.
                  </div>';
       
         
         $flag=0;
       }
     }
    
    $address=mysqli_real_escape_string($con,$_POST['address']);
    if($flag == 1)
    {
   if(!preg_match('/^[a-z0-9-]+$/',$address))
   {
   $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter Address properly!!.
                  </div>';
          $flag=0;      
     
    }
  }


    if($firstname && $password && $contact && $emailid && $address)
    {
       if($_POST['pincode'] == '' && empty($_POST['pincode']))
       {
$error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Pincode!!.
                  </div>';
       
         
         $flag=0;
       }
     }
     $pincode=mysqli_real_escape_string($con,$_POST['pincode']);

    if($flag == 1)
    {
   if(!preg_match('/^[0-9]+$/',$pincode))
   {
   $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter Pincode properly!!.
                  </div>';
          $flag=0;      
     
    }
  }

  

  if($firstname && $password && $contact && $emailid && $address && $pincode)
    {
    
     $password_md5=md5($_POST['password']);
          date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d H:i:sa');

      
          $insert="insert into signin(Username,Password,Contact,Email_Id,Address,Pincode,date) values('$firstname','$password_md5','$contact','$emailid','$address','$pincode','$date')";
        
         $check=mysqli_query($con,$insert);
        
        if($check) 
        {
        echo "<script>
       alert('Create Account successfully!!');
       window.location.href='Adduser.php';
       </script>";

                  //echo $newrecord;
        }       
     }
     else
     {

     }
}
?>  
<title>Registration form</title>
<style type="text/css">
   body
{

 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
  </style>
  
<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">

<ul class="breadcrumb" style="background-color:#e3f2fd;">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="Adduser.php">Create Account</a></li>
  </ul>

 <div class="page-header">
  <h2>Create Account!!</h2>
 </div>
<div class="panel panel-default">
   <div class="panel-body"> 
<form class="form-horizontal" method="post" action='Adduser.php' enctype="multipart/form-data">
   <?php
   if($error_email)
    {
    echo $error_email;
    }
    
    if($error_contact)
    {
    if($error_con)
    {
    echo $error_con;
    }
    else
    {
echo $error_contact;
    }
  }
    

   if($error)
   {
    if($error_match) 
    {
     echo $error_match;
    } 
    else
    {
     echo $error;
    }
 }
    ?>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Firstname:--</lable>
      <div class="col-sm-10"><input type="text" name="fisrtname" class="form-control" placeholder="Enter firstname" value="<?php if(isset($_POST['submit'])) { echo $_POST['fisrtname']; }?>" ></div>
    </div>

     <div class="form-group">
      <lable class="control-label col-sm-2">Password:--</lable>

      <div class="col-sm-10"><input type="Password" value="<?php if(isset($_POST['submit'])) { echo $_POST['password']; }?>" name="password"  class="form-control" placeholder="Enter password" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Contact:--</lable>

      <div class="col-sm-10"><input type="text" name="contact"  class="form-control" placeholder="Enter contact" value="<?php if(isset($_POST['submit'])) { echo $_POST['contact']; }?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Email_add:--</lable>

      <div class="col-sm-10"><input type="text" name="emailid" class="form-control" placeholder="Enter Email Address " value="<?php if(isset($_POST['submit'])) { echo $_POST['emailid']; }?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Address:--</lable>

      <div class="col-sm-10"><input type="text" name="address" class="form-control" placeholder="Enter Email Address " value="<?php if(isset($_POST['submit'])) { echo $_POST['address']; }?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Pincode:--</lable>

      <div class="col-sm-10"><input type="text" name="pincode" class="form-control" placeholder="Enter Pincode" value="<?php if(isset($_POST['submit'])) { echo $_POST['pincode']; }?>" ></div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
    </div>
    </div>


</form>
</div>
</div>
</div>


<?php
include 'footer.php';
?>