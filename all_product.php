<?php
include 'header.php';
include 'config.php';
   
  if(isset($_POST['submit']))
  {
    $product_name=mysqli_real_escape_string($con,$_POST['product_name']);
    $price=mysqli_real_escape_string($con,$_POST['price']);


    $file=$_FILES['fileupload'];
     $target_dir="image/";
   $target_path=basename($_FILES["fileupload"]["name"]);
   $imagetype = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
     $uploadOk = 1;

      if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_dir.$target_path ))
    {
          
      $insert="insert into user(product_name,price,image) values('$product_name','$price','$target_path')";
      $result=mysqli_query($con,$select);
  if(mysqli_affected_rows($con) > 0)
  {
     while($row = $result->fetch_assoc())
     {
          $_SESSION['id']=$row['id'];
  }
}
         $check=mysqli_query($con,$insert);
        
        if($check) 
        {
         
        echo "<script>
       alert('New Record Create Successfully');
       window.location.href='all_product.php';
       </script>";

                  //echo $newrecord;
        }       
     }
    else
    {
      echo "no";
    }
  
}
?>  
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">

<ul class="breadcrumb" style="background-color:#e3f2fd;">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="Adduser.php">Create Account!!</a></li>
  </ul>

 <div class="page-header">
  <h2>Add User!!</h2>
 </div>
<div class="panel panel-default">
   <div class="panel-body"> 
<form class="form-horizontal" method="post" action='all_product.php' enctype="multipart/form-data">
   

    <div class="form-group">
      <lable class="control-label col-sm-2" >Product Name:--</lable>
      <div class="col-sm-10"><input type="text" name="product_name" class="form-control" placeholder="Enter firstname" value="<?php if(isset($_POST['submit'])) { echo $_POST['product_name']; }?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Product Price:--</lable>
      <div class="col-sm-10"><input type="text" name="price" class="form-control" placeholder="Enter Email Address " value="<?php if(isset($_POST['submit'])) { echo $_POST['price']; }?>" ></div>
    </div>

     

    <div class="form-group">
      <lable class="control-label col-sm-2">Product Image:--</lable>
      <div class="col-sm-10"><input type="file" name="fileupload"  class="form-control" placeholder="choose image" value="<?php if(isset($_POST['submit'])) { echo $_POST['fileupload']; }?>" ></div>
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