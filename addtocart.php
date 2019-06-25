<?php
 include 'config.php';
 include'header.php';

//include '../aa2.php';
/*if ($result=mysqli_query($con,$select))
  {
  // Seek to row number 5 -->show the firstname of row no 5 user
  mysqli_data_seek($result,4);
}*/

if(isset($_SESSION['First_Name']))
{
?> 
<!DOCTYPE html>
<html>
<head>
  
<style type="text/css">
body
{
  background-image:url("Images/store2.jpg"); 
  background-position:fixed;
  background-repeat:no-repeat; 
  margin: 0;
 font-family: "Times New Roman", Times, serif;
  font-size:18px;


}
.wrapper 
{  
  margin-top: 80px;
  margin-bottom: 80px;
}
.form-signin 
{
  max-width: 430px;
  max-height:880px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color:#e15d2f96;
  border: 1px solid rgba(0,0,0,0.1); 
   
  .form-signin-heading
   {
    margin-bottom: 30px;
   }
 }

  .checkbox 
  {
    font-weight: normal;
  }

  .form-control 
  {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus
     {
      z-index: 2;
    }
  }
  input[type="text"] 
  {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] 
  {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

</style>

</head>
<body>
<div class="container">

  <ul class="breadcrumb" style="background-color:#f6f6f6;">
  <li><a href="index.php">Home</a></li>
  <li class="active" style="background-color:#f6f6f6;"><a href="addtocart.php">Add To cart</a></li>
  </ul>

  <!--<ol class="breadcrumb" style="background-color:#f6f6f6;">
  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
  <li class="breadcrumb-item active">Contact us</li>
  </ol>-->

  <div class="wrapper" style="color:#fffffd">
  <form action="addtocart.php" class="form-signin" method="post">
    <h2 class="form-signin-heading" style="color:#fff5e5">Add To Your Shopping List!!</h2>
      
     Name:<input type="text" name="firstname" class="form-control" value="<?php echo $_SESSION['First_Name']?>" ><br>
    
      Email Add:<input type="text" name="emailid" class="form-control"  value="<?php echo $_SESSION['Email_Id']?>"><br>

      Contact:<input type="text" name="contact" class="form-control" value="<?php echo $_SESSION['Contact']?>"><br>

      Address:<input type="text" name="address" class="form-control" value="<?php echo $_SESSION['Address']?>"><br>

     Pincode:<input type="text" name="pincode" class="form-control" value="<?php echo $_SESSION['Pincode']?>"><br>
<?php
     

 if(isset($_POST['submit']))
 {     
    $product=mysqli_real_escape_string($con,$_POST['product_name']);
    $price= mysqli_real_escape_string($con,$_POST ['price']);

    

    
/*if(!empty($_POST['hobby']))
 { // empty() checks if the value is set before checking if it's empty.

    foreach($_POST['hobby'] as $key=>$value)
    { 
    // Runs mysql_real_escape_string() on every value encountered.
        $clean_criteria = array_map('mysql_real_escape_string', $_REQUEST['hobby']);

        // Convert the array into a string.
        $criteria = implode("','", $clean_criteria);
    }
    $tmp = $wpdb->get_results(" SELECT".implode(",",$_POST['hobby'] )." FROM user WHERE 
            Hobby($criteria)"); 
}*/


}
//$url = "?" . $query_string;
$id=$_GET['id'];
$query = "select * from user";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
  if($id==$row['id'])
      {
?>  

     Product Name:<input type="text" name="product_name" class="form-control" value="<?php echo $row['product_name']?>"><br>

     Product Price:<input type="text" name="price" class="form-control" value="<?php echo $row['price']?>"><br>

     Product Image:<?php echo "<img src='image/".$row['image'] ."' width='50' height='50' />"; ?><br><br>
     
 <?php
}
}
?>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn  btn-lg btn-primary " type="submit" name="submit" value="submit" >Confirm Order</button> 
  
    
</form>
  </div>
  </div>


</body>
</html>


<?php
}
else
{
echo "<script>
       alert('Login First');
       window.location.href='login.php';
       </script>";
}
?>

<?php
if(isset($_POST['submit']))
  {
    $name=$_SESSION['First_Name'];
    $email=$_SESSION['Email_Id'];
    $contact=$_SESSION['Contact'];
    $address=$_SESSION['Address'];
    $pincode=$_SESSION['Pincode'];
    $product_name=$_POST['product_name'];
    $product_price=$_POST['price'];


         date_default_timezone_set("Asia/kolkata");
          $date=date('Y-m-d');
          $time=date('H:i:sa');

     echo $insert="insert into customer_order(Username,Email_id,Contact,Address,Pincode,Product_Name,Product_Price,date,time) values('$name','$email','$contact','$address','$pincode','$product_name','$product_price','$date','$time')";
        
         $check=mysqli_query($con,$insert);
        
        if($check) 
        {
        echo "<script>
       alert('Your Order Is Confirm!!');
       window.location.href='index.php';
       </script>";

                  //echo $newrecord;
        } 
  }      
?>

<?php
include'footer.php';
?>
