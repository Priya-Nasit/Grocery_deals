<?php 
//include 'admin_panel.php';
include'header.php';
include 'config.php';

$name=$_SESSION['First_Name'];

if(isset($_SESSION['First_Name']))
{
  $query="select * from card_delivery where Username='$name' ";
  $result=mysqli_query($con,$query);    

?>
<html>
<head>
<style>

body
{
 background:#f6f6f6;
 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}

 
  tr:hover
  {
    background:#c7d4df;
  }

 /* thead
  {
    background:#6c757d;
  }*/
</style>
</head>

<body>
<div class="container">
<div class="row">
  <ul class="breadcrumb" style="background-color:#f6f6f6">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="yourcart.php">Yourcart</a></li>
 </ul>
<form action="yourcart.php" method="post">
</div>

<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
   <th style="background-color:#000000">Product Name</th>
   <th style="background-color:#000000">Product Price</th>
   <th style="background-color:#000000">Card No</th>
  <th style="background-color:#000000">Email Id</th>
  <th style="background-color:#000000">Order Date</th>
   
  </tr>    
  </thead>
  <h4 style="color: red">Note*:Here Colored Row Show Your Today's Shopping List</h4>
  <h4 style="color: red">Note*:You Are Not Allowed To Change Anything In Your Order After 12.00 AM</h4>
 <div align="center">
  
<?php
date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');


  while($row = mysqli_fetch_array($result))
 //while($row = mysqli_fetch_array($result))
{  
     echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     
     
     if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['Product_name'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['Product_price'] . "</td>";
      echo "<td style='background-color:#cff01a7a'>" . $row['Card_no'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['Email_Id'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";

      $new_date=date('Y-m-d', strtotime($date. ' + 1 days'));
      $delivere_date=date('Y-m-d', strtotime($date. ' + 5  days'));
      $Current_date=date('Y-m-d');

      if($date<=$new_date)
      {
      echo "<td style='background-color:#cff01a7a'>".'<a class="btn btn-info" href="update.php?id=' . $row['id'] . '">update' . '</a>'.'&nbsp;&nbsp;<a  class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">delete' . '</a>'."</td>";
      }
      else
      {
      
      if ($Current_date == $delivere_date)
      {
        echo "<td>"."Your Order Is Delivered"."</td>";
        if($Current_date > $delivere_date)
        {
          echo "<td>"."Your Order Is Delivered"."</td>";
        }
        else
        {
          
        }
      }
      else
      {
        echo "<td>".""."</td>";
      }
     }
     
  
/*$id= $row['id'];
  $query="select * from user where product_name='$product_name' ";
  $result=mysqli_query($con,$query); 
  while($row = mysqli_fetch_array($result))
  {

     echo "<td style='background-color:#f05f1a7a'>" ."<img src='image/".$row['image'] ."' width='50' height='50' />"."</td>";
   }*/
   }
       
     else
     {
      echo "<td>" . $row['Product_Name'] . "</td>";
     echo "<td>" . $row['Product_Price'] . "</td>";
     echo "<td>" . $row['Contact'] . "</td>";
     echo "<td>" . $row['Pincode'] . "</td>";
     echo "<td>" . $row['Address'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
       echo "<td>" . $row['time'] . "</td>";
      
     }
    
    // echo "<img src=../'"."' width='50' height='50' />";
     
   echo "</tr>";


 } 
}

else
{
  echo "<script>
       alert('Login Please!!');
       window.location.href='login.php';
       </script>";
}

 ?>
</div>
</table>
</div>
</form>
</div>
</body>
</html>

<?php
include 'footer.php';
?>
