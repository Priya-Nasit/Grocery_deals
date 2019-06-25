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
    
    $name=$_SESSION['First_Name'];
    $emailid=$_SESSION['Email_Id'];
    $contact=$_SESSION['Contact'];
    $cart=mysqli_real_escape_string($con,$_POST['cart']);
    $product_name=$_POST['product_name'];
    $product_price=$_POST['price'];


    if($_POST['cart'] == '' && empty($_POST['cart']))
     {
        $error= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter card number!!.
                  </div>';
         
         $flag=0;
       }
     

  $cart=mysqli_real_escape_string($con,$_POST['cart']);

    if(strlen($cart)!=10)
    {
      $error_match= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter Cart number Properly!!.
                  </div>';
          $flag=0;   
    }

   
  
  if($name && $contact && $emailid && $cart && $product_name && $product_price)
    {
  
          $cart_new=md5($_POST['cart']);
          date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d');
          $time=date('H:i:sa');

          $insert="insert into card_delivery(Username,Contact,Email_Id,Card_no,Product_name,Product_price,date,time) values('$name','$contact','$emailid','$cart_new','$product_name','$product_price','$date','$time')";
        
         $check=mysqli_query($con,$insert);
        
        if($check) 
        {
        echo "<script>
       alert('Your Oder Is Confirm!!');
       window.location.href='index.php';
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
  <h2>Shopping By Card!!</h2>
 </div>
<div class="panel panel-default">
   <div class="panel-body"> 
<form class="form-horizontal" method="post" action='cart.php' enctype="multipart/form-data">
   <?php
   if($error_email)
    {
    echo $error_email;
    }
    
    if($error_con)
    {
    if($error_contact)
    {
    echo $error_contact;
    }
    else
    {

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
      <lable class="control-label col-sm-2" >Name:--</lable>
      <div class="col-sm-10"><input type="text" name="fisrtname" class="form-control" placeholder="Enter firstname" value="<?php echo $_SESSION['First_Name']?>"></div>
    </div>
    <div class="form-group">
      <lable class="control-label col-sm-2" >Email Id:--</lable>
      <div class="col-sm-10"><input type="text" name="emailid" class="form-control" placeholder="Enter firstname" value="<?php echo $_SESSION['Email_Id']?>"></div>
    </div>
    <div class="form-group">
      <lable class="control-label col-sm-2" >Contact:--</lable>
      <div class="col-sm-10"><input type="text" name="contact" class="form-control" placeholder="Enter firstname" value="<?php echo $_SESSION['Contact']?>"></div>
    </div>
    <div class="form-group">
      <lable class="control-label col-sm-2" >Card No:--</lable>
      <div class="col-sm-10"><input type="Password" name="cart" class="form-control" placeholder="Enter Card no" required></div>
    </div>
<?php
$id=$_GET['id'];
$query = "select * from user";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
  if($id==$row['id'])
      {
?>  

   <div class="form-group">
      <lable class="control-label col-sm-2" >Product Name:--</lable>
      <div class="col-sm-10"><input type="text" name="product_name" class="form-control" placeholder="Enter firstname" value="<?php echo $row['product_name']?>"></div>
    </div>
    <div class="form-group">
      <lable class="control-label col-sm-2" >Contact:--</lable>
      <div class="col-sm-10"><input type="text" name="price" class="form-control" placeholder="Enter firstname" value="<?php echo $row['price']?>"></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Product Image:--</lable>
      <div class="col-sm-10"><?php echo "<img src='image/".$row['image'] ."' width='50' height='50' />"; ?><br><br></div>
    </div>
    
     
     
 <?php
}
}
?>
   
    
    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Confirm Order</button>
    </div>
    </div>


</form>
</div>
</div>
</div>


<?php
include 'footer.php';
?>