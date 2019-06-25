<?php
 include 'config.php';
//include '../aa2.php';

 $oldimage="";
 $record="";
 $error="";
 $err_image="";
 $err_imagesize="";
 $err_imagetype=""; 

$id=$_GET['id'];
$user=$_SESSION['First_Name'];
 if(isset($_POST['submit']))
 {    

    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $address=  mysqli_real_escape_string($con,$_POST['address']);
    $pincode=  mysqli_real_escape_string($con,$_POST['pincode']);


   $update="UPDATE customer_order SET Contact='$contact',Address='$address',Pincode='$pincode' where Username='$user' ";
 
  $update=mysqli_query($con,$update);
  if($update)
  {
    echo "<script>
       alert('Your Order Is Update Successfully!!');
       window.location.href='yourcart.php';
       </script>";
  }

else
{
    echo "<script>
       alert('Order Is  Not Update Try Agian!!');
       window.location.href='yourcart.php';
       </script>";
}
}


//$url = "?" . $query_string;
$query = "select * from customer_order";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
  if($id==$row['id'])
      {
?>  
<title>Update your form</title>
<style type="text/css">
   body
{

 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
  </style>
  
<div class="container">

<ul class="breadcrumb" style="background-color:#e3f2fd;">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="update.php">&nbsp;&nbsp;>>&nbsp;&nbsp;Update</a></li>
  </ul>

 <div class="page-header">
  <h2>Update!!</h2>
 </div>
<div class="panel panel-default">
   <div class="panel-body"> 

<form class="form" method="post" action='update.php' enctype="multipart/form-data">

  
    <div class="form-group">
      <lable class="control-label col-sm-2" >Contact:--</lable>
      <div class="col-sm-10"><input type="text" name="contact" class="form-control" placeholder="Enter Email" value="<?php echo $row['Contact'] ?>" ></div>
    </div>

   
    <div class="form-group">
      <lable class="control-label col-sm-2">Address:--</lable>
      <div class="col-sm-10"><input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $row['Address']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Pincode:--</lable>
      <div class="col-sm-10"><input type="text" name="pincode" class="form-control" placeholder="Enter Pincode " value="<?php echo $row['Pincode']?>" ></div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
    </div>
    </div>


</form>
</div>
</div>
</div>


<?php
}
}
?>